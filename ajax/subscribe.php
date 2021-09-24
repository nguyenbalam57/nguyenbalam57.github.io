<?php 
	require_once 'config.php';
	$email = htmlspecialchars($_POST['v']);
	$item_email  =  $d->rawQueryOne("select email from #_newsletters where email=?",array($email));
	if($item_email){
		$result['status'] = 201;
		$result['message'] = 'Email này đã có trong hệ thống';
	}else{
		if($_SESSION['count-sub']<3){
			$data['email'] = $email;
			$data['status'] = 'hienthi';
			$data['type'] = 'email';
			$data['createdAt'] = $d->now();
			$id_insert = $d->insert('newsletters', $data);
			if ($id_insert) {
				$_SESSION['count-sub'] = $_SESSION['count-sub'] + 1;
			    $result['status'] = 200;
				$result['message'] = 'Đã thêm dữ liệu thành công';
			}
		}else{
		    $result['status'] = 201;
			$result['message'] = 'Vui lòng dừng ngay việc này, bạn gửi quá nhiều lần. Trân trọng!!';
		}
		
	}
	echo json_encode($result);
?>
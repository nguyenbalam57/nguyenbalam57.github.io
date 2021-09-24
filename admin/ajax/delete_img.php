<?php 

	require_once 'config.php';

	$i = (int)htmlspecialchars($_POST['i']);
	$t = htmlspecialchars($_POST['t']);
	$p = htmlspecialchars($_POST['p']);

	$item  =  $d->rawQueryOne("select id,photo,thumb from #_$t where id=?",array($i));
	if($item){

		$func->deleteFile('../'.$p.$item['photo']);
		$func->deleteFile('../'.$p.$item['thumb']);
		$data['photo'] = '';
		$data['thumb'] = '';
		$d->where('id', $i);
		$d->update($t, $data);

		if($t=='multi_photos' || $t=='product_photos' || $t=='product_photo_properties'){
			$d->where('id', $i);
			$d->delete($t);
		}
		
    	$result['status'] = 200;
		$result['message'] = 'Đã xóa hình ảnh thành công';
		echo $message =json_encode($result);
	}else{

		$result['status'] = 201;
		$result['message'] = 'Xóa hình ảnh thất bại';
		echo $message =json_encode($result);
	}
?>
<?php 

	$url_type .= (isset($_GET['type'])) ? '&type='.htmlspecialchars($_GET['type']):'';
	$path = _upload_post;
	switch ($act) {
        case 'update':
        	save_item();
			$templates = 'infos/item_add';
			break;
		
		default:
			$templates = 'infos/item_add';
			break;
	}
		
	function save_item(){
		global $d,$config,$func,$url_type,$path,$setting,$item;
		$message = '';
		$table = 'infos';
		$type = htmlspecialchars($_GET['type']);
		$set = $setting[$table][$type];

		$data = $_POST['data'];
    	if($_POST){
    		foreach ($data as $k => $v) {
				$data[$k] = htmlspecialchars($v);
			}
    	}
    	$file = $_FILES['photo'];
    	if(!empty($file)){
    		if($file['error']==0){
    			$tp = ($type!='') ? $type:'null';
	    		$photo = $func->uploadImgType($tp,'photo','thumb',$file,$path,'infos',$set['thumb-w'],$set['thumb-h'],$set['thumb-r'],$set['thumb-b']);
	    		$data['photo'] = $photo['photo'];
	    		$data['thumb'] = $photo['thumb'];
	    	}
    	}
    	
    	$data['status'] = isset($data['status']) ? 'hienthi' : '';
    	$param = array($type);
		$item  =  $d->rawQueryOne("select * from #_infos where type=?",$param);
		if(empty($item)){
			$data['type'] = $type;
    		$data['createdAt'] = $d->now();
    		$data['author_id'] = $_SESSION['login']['id'];
    		$id_insert = $d->insert('infos', $data);
			if ($id_insert) {
			    $result['status'] = 200;
				$result['message'] = 'Đã khởi dữ liệu thành công id#'.$id_insert;
				$message = base64_encode(json_encode($result));
				$func->transfer('Đã khởi tạo','index.html?com=infos&act=update'.$url_type);
			}else{
				print_r($d->getLastError());
				exit();
			}
		}else{
			if($_POST){
	    		$d->where('type', $type);
				if ($d->update('infos', $data)) {
				    $result['status'] = 200;
					$result['message'] = 'Đã cập nhật thông tin thành công type#'.$type;
					$message = base64_encode(json_encode($result));
					$func->redirect('index.html?com=infos&act=update'.$url_type.'&message='.$message);
				} else {
				  	$func->transfer('Không nhận được dữ liệu','index.html?com=infos&act=update'.$url_type);
				}
			}
		}
	}
	
?>
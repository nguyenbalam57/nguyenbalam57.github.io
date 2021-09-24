<?php 

	$url_type = (isset($_GET['table'])) ? '&table='.htmlspecialchars($_GET['table']):'';
	$url_type .= (isset($_GET['type'])) ? '&type='.htmlspecialchars($_GET['type']):'';
	if($_GET['table']=='products'){
		$path = _upload_product;
	}elseif($_GET['table']=='posts'){
		$path = _upload_post;
	}else{
		$path = _upload_photo;
	}

	switch ($act) {
        case 'man':
			get_items();
			$templates = 'lists/items';
			break;
		case 'add':
			$templates = 'lists/item_add';
			break;
		case 'edit':
			get_item();
			$templates = 'lists/item_add';
			break;
		case 'save':
			save_item();
			$templates = 'lists/item_add';
			break;
		case 'delete':
			delete_item();
			break;
       
		default:
			$templates = 'lists/items';
			break;
	}

	function get_items(){
		global $d,$config,$items,$page,$paging,$func,$url_type;
		$table = htmlspecialchars($_GET['table']);
		$type = htmlspecialchars($_GET['type']);
		$param = array($type,$table);

		if($config['paging-table']==true){
		    $items = $d->rawQuery("SELECT * from #_lists where type=? and tmp_table=? order by numb asc, id desc",$param);
		}else{
			$per_page = 10;
	        $startpoint = ($page * $per_page) - $per_page;
	        $limit = ' limit '.$startpoint.','.$per_page;
	        $sql = "SELECT * from #_lists where type=? and tmp_table=? order by numb asc, id desc ".$limit;
	        $items = $d->rawQuery($sql,$param);
	        $sqlq = "SELECT COUNT(*) as `num` from #_lists where type=? and tmp_table=? order by numb asc, id desc";
	        $count = $d->rawQueryOne($sqlq,$param);
	       	$total = $count['num'];
	        $url = 'index.html?com=lists&act=man'.$url_type;
			$paging = $func->pagination($total,$per_page,$page,$url);
		}
	}
	function get_item(){
		global $d,$item;
		$id = (int)$_GET['id'];
		$item  =  $d->rawQueryOne("select * from #_lists where id=?",array($id));
		if(empty($item)){
			$func->transfer('Không nhận được dữ liệu','index.html');
		}
	}
	function save_item(){
		global $d,$config,$func,$url_type,$path,$setting;
		$message = '';
		$id = (int)$_GET['id'];
		$table = (string)$_GET['table'];
		$type = (string)$_GET['type'];
		$set = $setting[$table][$type];
		
		$data = $_POST['data'];
    	if($_POST){
    		foreach ($data as $k => $v) {
				$data[$k] = htmlspecialchars($v);
			}
    	}
    	$file = $_FILES['photo'];
    	if(!empty($file)){
    		if($id){
	    		if($file['error']==0){
		    		$photo = $func->uploadImg($id,'photo','thumb',$file,$path,'lists',$set['list-thumb-w'],$set['list-thumb-h'],$set['list-thumb-r'],$set['list-thumb-b']);
		    		$data['photo'] = $photo['photo'];
		    		$data['thumb'] = $photo['thumb'];
		    	}
	    	}else{
	    		if($file['error']==0){
		    		$photo = $func->uploadImg(0,'photo','thumb',$file,$path,'lists',$set['list-thumb-w'],$set['list-thumb-h'],$set['list-thumb-r'],$set['list-thumb-b']);
		    		$data['photo'] = $photo['photo'];
		    		$data['thumb'] = $photo['thumb'];
		    	}
	    	}
    	}
    	$file = $_FILES['icon'];
    	if(!empty($file)){
    		if($id){
	    		if($file['error']==0){
		    		$icon = $func->uploadImg($id,'icon','thumbi',$file,$path,'lists',$set['list-thumbi-w'],$set['list-thumbi-h'],$set['list-thumbi-r'],$set['list-thumbi-b']);
		    		$data['icon'] = $icon['icon'];
		    		$data['thumbi'] = $icon['thumbi'];
		    	}
	    	}else{
	    		if($file['error']==0){
		    		$icon = $func->uploadImg(0,'icon','thumbi',$file,$path,'lists',$set['list-thumbi-w'],$set['list-thumbi-h'],$set['list-thumbi-r'],$set['list-thumbi-b']);
		    		$data['icon'] = $icon['icon'];
		    		$data['thumbi'] = $icon['thumbi'];
		    	}
	    	}
    	}
    	

    	
    	
    	
    	if($id){
    		$data['updatedAt'] = $d->now();
			$data['edit_count'] = $d->inc(1);
    		$d->where('id', $id);
			if ($d->update('lists', $data)) {
			    $result['status'] = 200;
				$result['message'] = 'Đã cập nhật thông tin thành công id#'.$id;
				$message = base64_encode(json_encode($result));
				$func->redirect('index.html?com=lists&act=edit'.$url_type.'&id='.$id.'&message='.$message);
			} else {
			  	$func->transfer('Không nhận được dữ liệu','index.html?com=lists&act=man'.$url_type);
			}
    	}else{
    		
    		$data['status'] = 'hienthi';
    		$data['tmp_table'] = htmlspecialchars($_GET['table']);
    		$data['type'] = htmlspecialchars($_GET['type']);
    		$data['createdAt'] = $d->now();
    		$data['author_id'] = $_SESSION['login']['id'];
    		$id_insert = $d->insert('lists', $data);
			if ($id_insert) {
			    $result['status'] = 200;
				$result['message'] = 'Đã thêm dữ liệu thành công id#'.$id_insert;
				$message = base64_encode(json_encode($result));
				$func->redirect('index.html?com=lists&act=man'.$url_type.'&message='.$message);
			}else{
				print_r($d->getLastError());
				die;
			}
    	}
	}
	function delete_item(){
		global $d,$func,$url_type,$path;
		$id = (int)$_GET['id'];

		if(isset($_GET['id'])){
			$item  =  $d->rawQueryOne("select id,photo,icon,thumb from #_lists where id=?",array($id));
			if($item){
				$func->deleteFile('../'.$path.$item['photo']);
				$func->deleteFile('../'.$path.$item['thumb']);
				$func->deleteFile('../'.$path.$item['icon']);

				$d->where('id', $item['id']);
				$d->delete('lists');
	        	$result['status'] = 200;
				$result['message'] = 'Đã xóa dữ liệu thành công id#'.$id;
				$message = base64_encode(json_encode($result));
				$func->redirect('index.html?com=lists&act=man'.$url_type.'&message='.$message);
			}else{
				$func->transfer('Không nhận được dữ liệu','index.html');
			}
		}elseif(isset($_GET['listid'])){
			$listid = explode(",",$_GET['listid']);
			if(count($listid)){
				$result['message'] = 'Đã xóa dữ liệu thành công id#';
				foreach ($listid as $k => $v) {
					$id = (int)$v;
					$item  =  $d->rawQueryOne("select id,photo,icon,thumb from #_lists where id=?",array($id));
					if($item){
						$func->deleteFile('../'.$path.$item['photo']);
						$func->deleteFile('../'.$path.$item['thumb']);
						$func->deleteFile('../'.$path.$item['icon']);
						
						$d->where('id', $item['id']);
						$d->delete('lists');
						$result['message'] .= $id.',';
					}
				}
				$result['message'] = substr($result['message'], 0, -1);
				$result['status'] = 200;
				$message = base64_encode(json_encode($result));
				$func->redirect('index.html?com=lists&act=man'.$url_type.'&message='.$message);
			}else{
				$func->transfer('Không nhận được dữ liệu','index.html?com=lists&act=man');
			}
		}

	}
?>
<?php 

	require_once 'config.php';
	
	if(isset($_POST["i"])){
        $table = htmlspecialchars($_POST['t']);
        $id = htmlspecialchars($_POST['i']);
        $value = htmlspecialchars($_POST['v']);
        $data['numb'] = $value;
		$d->where('id', $id);
		if($d->update($table, $data)){
			$res['status'] = 200;
		}else{
			$res['status'] = 201;
		}
		echo json_encode($res);
	}
?>
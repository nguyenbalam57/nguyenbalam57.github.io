<?php 
	require_once 'config.php';
	
	if(isset($_POST["i"])){
        $table = htmlspecialchars($_POST['t']);
        $id = htmlspecialchars($_POST['i']);
        $value = htmlspecialchars($_POST['v']);
        $data['view'] = $value;
		$d->where('id', $id);
		if($d->update($table, $data)){
			echo 1;
		}else{
			echo 0;
		}
	}
?>
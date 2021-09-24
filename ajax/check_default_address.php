<?php 
	require_once 'config.php';
	$id = (int)htmlspecialchars($_POST['id']);
	$val = (int)htmlspecialchars($_POST['val']);
	$user = htmlspecialchars($_POST['user']);
	$data = array();
	$d->rawQuery('update #_customer_address set check_default=0 where id_user=?',array($user));
	$d->rawQuery('update #_customer_address set check_default=1 where id=?',array($id));
	echo 200;
?>
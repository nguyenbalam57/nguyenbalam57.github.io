<?php 

	require_once 'config.php';
	$v = htmlspecialchars($_POST['v']);
	$c = htmlspecialchars($_POST['c']);

	$data['theme_admin'] = $v;
	$data['color_admin'] = $c;
	$d->where('setting_id', 2006);
	$d->update('settings', $data);
?>
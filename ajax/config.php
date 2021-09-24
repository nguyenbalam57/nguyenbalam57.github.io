<?php 
	session_start();
	$_SESSION['ONWEB'] = true;
	defined( '_root' ) ?:  define( '_root', __DIR__);
	defined( '_ds' ) ?:  define( '_ds', DIRECTORY_SEPARATOR );
    defined( '_lib' ) ?:  define( '_lib', _root._ds.'../'._ds.'libraries'._ds );
    defined( '_sources' ) ?:  define( '_sources', _root._ds.'../'._ds.'sources'._ds );
    
    require_once _lib.'config.php';
	require_once _lib.'autoload.php';
	new autoload();
	if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'vi';
    }
    $lang = $_SESSION['lang'];
    
	$d = new PDODb($config['database']);
	$func = new functions($d);
	$apiPlace = new place($d);
?>
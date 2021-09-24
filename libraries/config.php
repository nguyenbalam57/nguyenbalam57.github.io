<?php if(!defined('_lib')) die("Error");
	error_reporting(0);
	// error_reporting(E_ALL & ~E_NOTICE & ~8192);
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$config = array(
		'arrayDomainSSL' => "",
		'name_frame' => '',
		'link_frame' => '',
		'phone_frame' => '',
		'email_frame' => '',
		'website' => array(
			'url'=> $_SERVER["SERVER_NAME"].'/tourbooking/',
			'lang' => array(
				"vi" => "Tiếng Việt"
			),
			'salt'=>'^~{i^9UrpS',
			'secret'=>'$JS_PGIN@',
			'theme-color'=>'#0e1e42',
			'facebookId' => '161909414494428',
			'zaloId' => '3607710785381490435'
		),
		'database' => array(
			'type' => 'mysql',
			'host' => 'localhost',
			'username' => 'root', 
			'password' => '',
			'dbname'=> 'tourbooking',
			'port' => 3306,
			'prefix' => 'table_',
			'charset' => 'utf8'
		),
		'mail' => array(
			'email' => '',
			'password' => '',
			'ip' => '',
			'smtp' => true,
			'secure' => 'ssl',
			'port' => 465
		),
		'author' => array(
			'name' => 'VN',
			'nickname' => 'VN',
			'email' => ''
		),
		'sitekey'=> '6LcXGdsZAAAAAOu3XixSCthWUfUteB4lMekRwNj2',
		'secretkey'=>'6LcXGdsZAAAAADKU3DQ7VSyp-gZBf01pzxflwU1R',
		'login'=> true,
		'login-social' => array(
			'check'=>false,
			'google-client-id'=> '245416644166-o1rde1sh4nvj1vblg3bldggda4hgdsdi.apps.googleusercontent.com'
		),
		'paging-table' => false,
		'im-ex-up-product' => true,
		'cart' => true,
		'cart-advanced' => false,
		'cart-coupon' => false,
		'quickview' => true,
		'permission'=> true,
		'payment_status' => array('Chưa thanh toán', 'Đã thanh toán'),
		'bill-print' => true,
		'order-export-detail' => true,
		'order-export-list' => true,
		'place' => false,
		'meta_seo_debug' => true
	);
	/*Check SSL*/
	require_once _lib.'checkSSL.php';
	$check_ssl = new checkSSL();
	/*$runDomainName = $check_ssl->getCurrentPageURLSSL();
	$check_ssl->checkChangSLL($runDomainName,$config['arrayDomainSSL']);*/
	$http = $check_ssl->getProtocol();

	$config_url = $config['website']['url'];
	$config_base = $http.$config['website']['url'];
	
	@define ( _upload_avatar , '../upload/avatar/' );
	@define ( _upload_avatar_l , 'upload/avatar/' );
	@define ( _upload_photo , '../upload/photo/' );
	@define ( _upload_photo_l , 'upload/photo/' );
	@define ( _upload_product , '../upload/product/' );
	@define ( _upload_product_l , 'upload/product/' );
	@define ( _upload_properties , '../upload/properties/' );
	@define ( _upload_properties_l , 'upload/properties/' );
	@define ( _upload_post , '../upload/post/' );
	@define ( _upload_post_l , 'upload/post/' );
	@define ( _upload_video , '../upload/video/' );
	@define ( _upload_video_l , 'upload/video/' );
	@define ( _upload_excel , '../upload/excel/' );
	@define ( _upload_excel_l , 'upload/excel/' );

	@define ( _upload_logs , '../upload/logs/' );
	@define ( _upload_logs_l , 'upload/logs/' );
	
?>
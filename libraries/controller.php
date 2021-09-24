<?php 
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$page = (int)(!isset($_GET["p"]) ? 1 : $_GET["p"]);
	if($page <= 0) $page = 1;
	// session_destroy();

	$row_setting = $d->rawQueryOne("select *, address_$lang as address, company_$lang as company, time_$lang as time, title_$lang as title, keywords_$lang as keywords, description_$lang as description from #_settings limit 0,1");
	$row_favicon = $d->rawQueryOne("select thumb,photo from #_photos where type=? and find_in_set ('hienthi',status)",array('favicon'));
	$row_share = $d->rawQueryOne("select thumb,photo from #_photos where type=? and find_in_set ('hienthi',status)",array('share'));
	
    
     
	
	$all_css = new themes('setcss','all');
    $themes_css .= $all_css->cssSet(); 

	$setcss = new themes('setcss','reset');
    $themes_css .= $setcss->cssSet();

    $awesome = new themes('setcss','use.awesome');
    $themes_css .= $awesome->cssSet();

    $themify_icon = new themes('setcss','themify-icons');
    $themes_css .= $themify_icon->cssSet();

    $bootstrap = new themes('setcss','bootstrap.min');
    $themes_css .= $bootstrap->cssSet();

    $font_awesome = new themes('setcss','font-awesome');
    $themes_css .= $font_awesome->cssSet();

    if($_SESSION['signin'] && $config['login']==true && $config['cart']==true){
	    $tablecss = new themes('setcss','jquery.dataTables.min');
	    $themes_css .= $tablecss->cssSet();
    }

    $stylecss = new themes('setcss','style');
    $themes_css .= $stylecss->cssSet();

    if($config['quickview']==true){
	    $quickview = new themes('setcss','quickview');
	    $themes_css .= $quickview->cssSet();
	}
	if($config['cart']==true){
	    $cart_css = new themes('setcss','cart');
	    $themes_css .= $cart_css->cssSet();
	}
	$menu = new themes('menu','type1');
    $themes_css .= $menu->css();
    
    
    
    $why2 = new themes('why','type2');
    $themes_css .= $why2->css();

	$attr_page = array(
	    array("tbl"=>"lists","field"=>"idl","source"=>"products","com"=>"mau-dong-phuc","type"=>"san-pham"),
	    array("tbl"=>"cats","field"=>"idc","source"=>"products","com"=>"mau-dong-phuc","type"=>"san-pham"),
	    array("tbl"=>"products","field"=>"id","source"=>"products","com"=>"mau-dong-phuc","type"=>"san-pham"),
	    array("tbl"=>"posts","field"=>"id","source"=>"posts","com"=>"chuong-trinh-khuyen-mai","type"=>"chuong-trinh-khuyen-mai"),
	   array("tbl"=>"pages","field"=>"id","source"=>"pages","com"=>"gioi-thieu","type"=>"gioi-thieu"),
	    array("tbl"=>"contacts","field"=>"id","source"=>"contacts","com"=>"lien-he","type"=>"lien-he")
        
	);

	if($com){
	    foreach($attr_page as $k => $v){
	        if(isset($com) && $v['tbl']!='pages' && $v['tbl']!='contacts'){
	            $row = $d->rawQueryOne("select id from #_".$v['tbl']." where alias_$lang='".$com."' and type='".$v['type']."' and find_in_set ('hienthi',status)");
	            if(!empty($row)){
	                $_GET[$v['field']] = $row['id'];
	                $com = $v['com'];
	                break;
	            }
	        }
	    }
	}
	switch ($com) {
		case 'tags-san-pham':
			$title = $title_seo = 'Tags '._sanpham;
			$source = "tags";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			$template = "products/product";
			break;
		case 'tags-bai-viet':
			$title = $title_seo = 'Tags '._baiviet;
			$source = "tags";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			$template = "posts/post";
			break;
		case 'mau-dong-phuc':
			$title = $title_seo = "Mẫu đồng phục";
			$type = 'san-pham';
			$source = "products";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			$template = isset($_GET['id']) ? "products/product_detail" : "products/product";
			break;
		case 'san-pham-moi-nhat':
			$title = $title_seo = _sanpham . ' ' . _moi_nhat;
			$type = 'san-pham';
			$option = 'moi';
			$source = "products";
			$type_ob = "object";
			$template = "products/product";
			break;
		case 'san-pham-khuyen-mai':
			$title = $title_seo = "Sản phẩm khuyến mãi";
			$type = 'san-pham';
			$option = 'banchay';
			$source = "products";
			$type_ob = "object";
			$template = "products/product";
			break;
		case 'chuong-trinh-khuyen-mai':
			$title = $title_seo = "Chương trình khuyến mãi";
			$type = 'chuong-trinh-khuyen-mai';
			$source = "posts";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			$template = isset($_GET['id']) ? "posts/post_detail" : "posts/post";
			break;
		case 'chinh-sach':
			$title = $title_seo = _chinhsach_kh;
			$type = 'chinh-sach';
			$source = "posts";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			$template = isset($_GET['id']) ? "posts/post_detail" : "posts/post";
			break;
   case 'chinh-sach-ban-hang':
			$title = $title_seo = "Chính sách bán hàng";
			$type = 'chinh-sach-ban-hang';
			$source = "posts";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			$template = isset($_GET['id']) ? "posts/post_detail" : "posts/post";
			break;
   	case 'dich-vu':
			$title = $title_seo = "Dịch vụ";
			$type = 'dich-vu';
			$source = "posts";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			$template = isset($_GET['id']) ? "posts/post_detail" : "posts/post";
			break;
	
		case 'lien-he':
			$title = $title_seo = _lien_he_chung_toi;
			$type = 'lien-he';
			$source = "contacts";
			$type_ob = "object";
			$template = "contacts/contact";
			break;
   case 'cay-xanh-theo-yeu-cau':
			$title = $title_seo = "Cây xanh theo yeu cau";
			$source = "contacts";
			break;
		case 'gioi-thieu':
			$title = $title_seo = _gioi_thieu_ve_chung_toi;
			$type = 'gioi-thieu';
			$source = "pages";
			$type_ob = "article";
			$template = "pages/page";
			break;
		case 'account':
			$title = $title_seo = _taikhoan_kh;
			$type = 'member';
			$source = "users";
			$type_ob = "object";
			$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
			if($config['login']==true){
				switch ($act) {
					case 'dang-nhap':
						$title = $title_seo = _dangnhap. ' ' ._taikhoan;
						$template = 'accounts/login';
						break;
					case 'dang-ky':
						$title = $title_seo = _dangky. ' ' ._taikhoan;
						$template = 'accounts/register';
						break;
					case 'thong-tin-tai-khoan':
						$title = $title_seo = _thongtin. ' ' ._taikhoan;
						$template = 'accounts/profile';
						break;
					case 'doi-mat-khau':
						$title = $title_seo = _doi.' '._matkhau;
						$template = 'accounts/profile';
						break;
					case 'quen-mat-khau':
						$title = $title_seo = _quen.' '._matkhau;
						$template = 'accounts/forgot_password';
						break;
					case 'so-dia-chi':
						$title = $title_seo = _so_diachi;
						$template = 'accounts/address_list';
						break;
					case 'danh-sach-don-hang':
						$title = $title_seo = _danhsach.' '._donhang;
						$template = 'accounts/order_list';
						break;
					case 'don-hang-doi-tra':
						$title = $title_seo = _danhsach.' '._donhang.' '. _doitra;
						$template = 'accounts/order_return_list';
						break;
					case 'don-hang-huy':
						$title = $title_seo = _danhsach.' '._donhang.' '. _huy;
						$template = 'accounts/order_cancel_list';
						break;
					default:
						header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
						$template = "404";
						break;
				}
			}else{
				header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
				$template = "404";
			}
		//	$str_breadcrumbs = $breadcrumbs->getUrl(_trangchu, array(array('alias'=>'account/'.$act,'name'=>$title)));
			break;
		case 'carts':
			$title = 'Giỏ hàng';
			$type = 'san-pham';
			$source = "carts";
			$type_ob = "object";
			if(!$func->isAjax()){ 
				$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
				switch ($act) {
					case 'gio-hang':
						$title = $title_seo = _gio_hang;
						$template = 'carts/items';
						break;
					case 'thanh-toan':
						$title = $title_seo = _thanh_toan;
						$template = 'carts/checkout';
						break;
					case 'xac-nhan':
						$title = $title_seo = _xac_nhan.' '._donhang;
						$template = 'carts/checkorder';
						break;
					default:
						header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
						$template = "404";
						break;
				}
				//$str_breadcrumbs = $breadcrumbs->getUrl(_trangchu, array(array('alias'=>'carts/'.$act,'name'=>$title)));
			}else{
				include _sources.'carts.php';
				die;
			}
			break;

		

		case 'tim-kiem':
			$title = $title_seo = _timkiem.' '._sanpham;
			$type = 'san-pham';
			$source = "searchs";
			$type_ob = isset($_GET['id']) ? "article" : "object";
			if(!$func->isAjax()){ 
				$template = "products/product";  
			}else{
				include _sources.'searchs.php';
				$template = "products/product"; 
				die;
			}
			break;

		case 'quickview':
			$title = _xem_nhanh;
			$type = 'san-pham';
			$source = "quickview";
			$type_ob = "object";
			break;
		case 'lang':
			if(isset($_GET['lang']))
			{
				switch($_GET['lang'])
					{
					case 'vi':
						$_SESSION['lang'] = 'vi';
						break;
					case 'en':
						$_SESSION['lang'] = 'en';
						break;
					default:
						$_SESSION['lang'] = 'vi';
						break;
					}
			}
			else{
				$_SESSION['lang'] = 'vi';
			}
			$func->redirect($_SERVER['HTTP_REFERER']);
			break;

		case '': 
			$source = 'index';
			$template = 'index'; 
			$type_ob = "website";
			break;

		default:
			header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
			$template = "404";
			break;
	}
	if($source == 'index'){
    	$slider = new themes('slider','type1');
	    $themes_css .= $slider->css();

	    $adv = new themes('adv','type1');
	    $themes_css .= $adv->css();

	    $news = new themes('news','type1');
	    $themes_css .= $news->css();
	    
	   // $why = new themes('why','type3');
	    //$themes_css .= $why->css();

	    //$partner = new themes('partner','type1');
	    //$themes_css .= $partner->css();
    }
    
    $footer = new themes('footer','type1');
    $themes_css .= $footer->css();

    $support = new themes('support','type1');
    $themes_css .= $support->css();

	if($config['login']==true){
	    $account_css = new themes('setcss','account');
	    $themes_css .= $account_css->cssSet();
    }
		
	if($source!="") include _sources.$source.".php";
    
   // echo($template);
?>
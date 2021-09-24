<?php 
	$menu_lists_product = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias,photo from #_lists where type=? and find_in_set ('hienthi',status) order by numb asc, id desc",array("san-pham"));
   	$row_logo = $d->rawQueryOne("select thumb,name_$lang as name,photo from #_photos where type=? and find_in_set ('hienthi',status)",array('logo'));
    $row_banner = $d->rawQueryOne("select thumb,name_$lang as name,photo from #_photos where type=? and find_in_set ('hienthi',status)",array('topbanner'));
?>
<section id="menu-one">
	<div class="wrap-menu">
    <div class="logo">
		<a title="<?=$row_logo['company']?>" href="<?=$config_base?>" aria-label="logo">
            <img src="<?=_upload_photo_l.$row_logo['thumb']?>" alt="<?=$row_logo['company']?>">
        </a>
     </div>
     <div class="dbn_r">
    <a title="<?=$row_banner['company']?>" href="<?=$config_base?>" aria-label="logo">
            <img src="<?=_upload_photo_l.$row_banner['thumb']?>" alt="<?=$row_banner['company']?>">
        </a>
		
        <div class="cskh">
          <p><?=$row_setting['hotline']?></p>
        </div><div class="clear"></div>
		
        
	</div>
    	</div>
        <div class="all_menu">
    <nav class="mvhk">
        <ul class="item-big">
        <li class="nav-item"><a class="a-img <?=($_GET['com']=='') ? 'active':''?>" href="">Trang chủ</a></li>
          <li class="nav-item"><a class="a-img" href="gioi-thieu">Giới thiệu</a> </li> 
        <li class="nav-item"><a class="a-img <?=($_GET['com']=='mau-dong-phuc') ? 'active':''?>" href="mau-dong-phuc">Mẫu đồng phục</a>
          <?php if($menu_lists_product){?>
            <ul class="item_small hidden-sm hidden-xs">
              	<?php foreach ($menu_lists_product as $k => $v) { ?>
	         	<li><a href="<?=$v['alias']?>" title="<?=$v['name']?>"><?=$v['name']?></a></li>
			<?php } ?>
            </ul>
		
            <?php } ?>
        </li>  
        
        
        
        
          <li class="nav-item">	<a href="chuong-trinh-khuyen-mai" class="<?=($_GET['com']=='chuong-trinh-khuyen-mai') ? 'active':''?>" title="Chương trình khuyến mãi">Chương trình khuyến mãi	</a></li>
          <li class="nav-item">		<a href="lien-he" class="<?=($_GET['com']=='lien-he') ? 'active':''?>" class="border" title="Liên hệ ">
			Liên hệ
			</a></li>
            
            
        </ul> 
		
			<form class="search-bar" action="tim-kiem" id="search-form" name="search-form" method="get" onsubmit="return false" role="search">
			<input type="text" name="keywords" value="<?=$_GET['keywords']?>" id="keywords" role="search-input" placeholder="Nhập từ khóa muốn tìm... " class="search-text">
			<button class="search-btn">
				<i class="fa fa-search"></i>
			</button>
		</form>	
				
		
	
		
		</nav>
        </div>
    	
</section>


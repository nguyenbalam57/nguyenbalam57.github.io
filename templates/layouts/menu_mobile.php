<?php 
	$menu_lists_product = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias from #_lists where type=? and find_in_set ('hienthi',status) order by numb asc, id desc",array("san-pham"));
     $menu_lists_gt = $d->rawQuery("SELECT name_$lang as name, alias_$lang as alias from #_posts where type=? and find_in_set ('hienthi',status) order by numb asc, id desc",array("gioi-thieu"));
    $menu_lists_dv = $d->rawQuery("SELECT name_$lang as name, alias_$lang as alias from #_posts where type=? and find_in_set ('hienthi',status) order by numb asc, id desc",array("dich-vu"));
    $menu_lists_cs = $d->rawQuery("SELECT name_$lang as name, alias_$lang as alias from #_posts where type=? and find_in_set ('hienthi',status) order by numb asc, id desc",array("chinh-sach-ban-hang"));
?>
<div class="opacity-menu"></div>
<div class="header-left-fixwidth">
	<div class="section wrap-header">
		<div class="logos-menu">
			<a href="<?=$config_base?>">
				<img src="<?=_upload_photo_l.$row_logo['photo']?>" alt="<?=$row_logo['name']?>">
			</a>
		</div>
		<div class="searchs-menu">
			<form class="search-bar" action="tim-kiem" method="get" onsubmit="return false" id="search-form-mobile" name="search-form-mobile" role="search">
				<input type="text" name="keywords" value="<?=$_GET['keywords']?>" id="keywords" placeholder="Tìm kiếm... "  role="search-input" class="search-text">
				<button class="search-btn">
					<i class="fa fa-search"></i>
				</button>
			</form>
		</div>
		<div class="account-cart-menu">
			<?php if ($config['cart']==true){ ?>
			<a class="btn-text" href="carts/gio-hang"><?=_gio_hang?></a> <?php if($config['login']==true){ ?><span>|</span><?php } ?>
			<?php } ?>
			<?php if($config['login']==true){ ?>
				<?php if(isset($_SESSION['signin'])){ ?>
				<a class="btn-text" href="account/thong-tin-tai-khoan"><?=_taikhoan?></a> <span>|</span>
				<a class="btn-text" href="account/dang-xuat"><?=_dangxuat?></a>
				<?php }else{ ?>
				<a class="btn-text" href="account/dang-nhap&return=<?=base64_encode($func->getCurrentPage())?>"><?=_dangnhap?></a> <span>|</span>
				<a class="btn-text" href="account/dang-ky&return=<?=base64_encode($func->getCurrentPage())?>"><?=_dangky?></a>
				<?php } ?>
			<?php } ?>
		</div>
		<div class="nav-menu">
			<ul>
			    <li class="nav-item active">
			        <a href="<?=$config_base?>"><?=_trangchu?></a>
			    </li>
                <li class="nav-item">
                    <a><?=_gioithieu?></a>
                    <?php if($menu_lists_gt){?>
                    <span class="btn-dropdown-menu"><i class="fa fa-angle-right"></i></span>
                    <ul class="sub-menu none level0">
                        <?php foreach ($menu_lists_gt as $k => $v) {?>
                           <li><a href="<?=$v['alias']?>"><?=$v['name']?></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
			    <li class="nav-item">
			        <a href="san-pham"><?=_sanpham?></a>
			        <?php if(count($menu_lists_product)>0) { ?><span class="btn-dropdown-menu"><i class="fa fa-angle-right"></i></span><?php } ?>
                    <?php if(count($menu_lists_product)>0){ ?>
			        <ul class="sub-menu none level0">
                        <?php foreach ($menu_lists_product as $k => $v) { $menu_cats_product = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias from #_cats where type=? and find_in_set ('hienthi',status) and id_list=? order by id desc",array("san-pham",$v['id'])); ?>
                        <li>
                            <a href="<?=$v['alias']?>"><?=$v['name']?></a>
                        	<?php if(count($menu_cats_product)>0) { ?><span class="btn-dropdown-menu"><i class="fa fa-angle-right"></i></span><?php } ?>
                            <?php if(count($menu_cats_product)>0) { ?>
							<ul class="sub-menu none level1">
                                <?php foreach ($menu_cats_product as $k1 => $v1) { ?>
                                <li class="level2"> <a href="<?=$v1['alias']?>"><span><?=$v1['name']?></span></a></li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
			    </li>
                <li class="nav-item">
                    <a>Dịch vụ</a>
                    <?php if($menu_lists_dv){?>
                    <span class="btn-dropdown-menu"><i class="fa fa-angle-right"></i></span>
                    <ul class="sub-menu none level0">
                        <?php foreach ($menu_lists_dv as $k => $v) {?>
                           <li><a href="<?=$v['alias']?>"><?=$v['name']?></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a>Chính sách bán hàng</a>
                    <?php if($menu_lists_cs){?>
                    <span class="btn-dropdown-menu"><i class="fa fa-angle-right"></i></span>
                    <ul class="sub-menu none level0">
                        <?php foreach ($menu_lists_cs as $k => $v) {?>
                           <li><a href="<?=$v['alias']?>"><?=$v['name']?></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
			    <li class="nav-item">
			        <a href="tin-tuc"><?=_tintuc?></a>
			    </li>

                <li class="nav-item">
                    <a href="lien-he"><?=_lienhe?></a>
                </li>
			</ul>
		</div>
	</div>
</div>
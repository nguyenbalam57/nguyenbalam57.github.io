<?php 
	$row_logo_index = $d->rawQueryOne("select thumb,name_$lang as name from #_photos where type=? and find_in_set ('hienthi',status)",array('logo'));
?>
<header id="header-top">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-between align-items-center">
			<div class="item item-header">
				<a href="" title="">
					<div class="menu-mobile">
						<span></span>
					</div>
				</a>
			</div>
			<div class="item item-header col-3">
				<div class="logo">
					<a href="<?=$config_base?>">
						<img src="<?=_upload_photo_l.$row_logo_index['thumb']?>" alt="<?=$row_logo_index['name']?>">
					</a>
				</div>
			</div>
			<div class="item item-header col-9">
				<div class="header d-flex flex-wrap justify-content-between align-items-center">
					<div class="nav-search">
						<form class="search-bar" action="tim-kiem" id="search-form" name="search-form" method="get" onsubmit="return false" role="search">
							<input type="text" name="keywords" value="<?=$_GET['keywords']?>" id="keywords" role="search-input" placeholder="<?=_timkiem?>... " class="search-text">
							<button class="search-btn">
								<i class="fa fa-search"></i>
							</button>
						</form>
					</div>
					<div class="nav-header d-flex flex-wrap justify-content-between align-items-center">
						<div class="phone" onclick="location.href='tel:<?=$row_setting['hotline']?>';">
							<p><?=_tuvanbanhang?></p>
							<span><?=_goingay?> <?=$row_setting['hotline']?></span>
							<i class="fa fa-phone"></i>
						</div>
						<?php if($config['login']==true){ ?>
						<div class="account">
							<div class="icon">
								<span><i class="fa fa-user"></i></span>
							</div>
							<div class="achover">
								<div class="wp">
									<?php if(isset($_SESSION['signin'])){ ?>
									<a class="btn-cutome" href="account/thong-tin-tai-khoan"><?=_taikhoan?></a>
									<a class="btn-cutome" href="account/dang-xuat"><?=_dangxuat?></a>
									<?php }else{ ?>
									<a class="btn-cutome" href="account/dang-nhap&return=<?=base64_encode($func->getCurrentPage())?>"><?=_dangnhap?></a>
									<a class="btn-cutome" href="account/dang-ky&return=<?=base64_encode($func->getCurrentPage())?>"><?=_dangky?></a>
									<?php } ?>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php if($config['cart']==true){ ?>
						<div class="cart">
							<div class="icon">
								<span><i class="fa fa-shopping-bag"></i></span>
							</div>
							<div class="achover">
								<div class="wp">
									<?php if (count($_SESSION['cart'])>0){ ?>
									<div class="cart-position" id="cart-position">
										<?=$apiCart->getTemplateCartM($lang,$config_base);?>
									</div>
									<?php }else{ ?>
										<p><?=_empty_product_cart?></p>
									<?php } ?>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- /header -->
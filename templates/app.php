<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
<?php include _layouts.'head.php'; ?>
</head>
<body>
	<?php if($source=='index'){ ?>
	<h1 class="hidden-h1"><?=$row_setting['title']?></h1>
	<?php } ?>
	
	<?php if($com=='carts' && ($act=='thanh-toan' || $act=='xac-nhan')){ ?>
		<?php require_once _templates.$template.'_tpl.php'; ?>
	<?php }else{ ?>
		<?php $menu->html(); ?>
		<section id="wrap-page">
			<?php if($source=='index'){ ?>
				<?php $slider->html(); ?>
				<?php $adv->html(); ?>
				
				<?php require_once _layouts.'product_highlights.php'; ?>
				<?php $news->html(); ?>
			<?php }else{ ?>
				<section id="full-page">
					<section id="title-breadcrumbs">
						<div class="container">
							<?=$str_breadcrumbs?>
						</div>
					</section>
					<section id="content-page">
						<div class="container">
							<?php require_once _templates.$template.'_tpl.php'; ?>
						</div>
					</section>
				</section>
			<?php } ?>
			<?php $footer->html(); ?>
			<?php require_once _layouts.'phone.php'; ?>
		</section>
	<?php } ?>
	<a href="#" id="back-to-top" class="backtop show" title="Lên đầu trang"><img src="images/imk.png" /></a>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script>
$().ready(function(){
	fixedMenu();
    $(window).scroll(function(){fixedMenu();})
    function fixedMenu(){$h = $("#menu-one").height();		
	if($(window).scrollTop() > $h){$(".all_menu").addClass("fixed-menu");}else{$(".all_menu").removeClass("fixed-menu");}}	
})
</script> 
	<script src="js/lang_<?=$lang?>.js"></script>
	<script type="text/javascript">
		var _JNWEBSITE = _JNWEBSITE || {};
		var _BASE = '<?=$config_base?>';
		var _LANG = '<?=$lang?>';
	</script>
	<script src="js/sharer.min.js"></script>
	<?php if($com=='carts' && $act=='thanh-toan'){ ?>
	<script src="js/jquery.form-validator.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.validate({});
		});
	</script>
	<?php } ?>
	<script src="js/functions.js"></script>
	<script src="js/custom.js"></script>
	<?php if($config['quickview']==true){ ?>
	<script src="js/quickview.js"></script>
	<div id="quickview-modal" class="white-popup mfp-with-anim mfp-hide"></div>
	<?php } ?>
	<?php if($config['cart']==true){ ?>
	<script src="js/cart.js"></script>
	<div id="cart-modal" class="white-popup mfp-with-anim mfp-hide"></div>
	<?php } ?>
	<?php if($config['cart']==true){ if($com!='carts' && $act!='thanh-toan'){ ?>
	<div class="support-cart hidden-lg hidden-md">
		<a class="btn-support-cart" href="carts/gio-hang">
			<svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 435.104 435.104" style="enable-background:new 0 0 435.104 435.104;" xml:space="preserve" width="30px" height="30px">
				<g>
					<circle cx="154.112" cy="377.684" r="52.736" data-original="#000000" class="active-path" data-old_color="#Ffffff" fill="#FFFFFF"/>
					<path d="M323.072,324.436L323.072,324.436c-29.267-2.88-55.327,18.51-58.207,47.777c-2.88,29.267,18.51,55.327,47.777,58.207     c3.468,0.341,6.962,0.341,10.43,0c29.267-2.88,50.657-28.94,47.777-58.207C368.361,346.928,348.356,326.924,323.072,324.436z" data-original="#000000" class="active-path" data-old_color="#F8F8F8" fill="#FFFFFF"/>
					<path d="M431.616,123.732c-2.62-3.923-7.059-6.239-11.776-6.144h-58.368v-1.024C361.476,54.637,311.278,4.432,249.351,4.428     C187.425,4.424,137.22,54.622,137.216,116.549c0,0.005,0,0.01,0,0.015v1.024h-43.52L78.848,50.004     C77.199,43.129,71.07,38.268,64,38.228H0v30.72h51.712l47.616,218.624c1.257,7.188,7.552,12.397,14.848,12.288h267.776     c7.07-0.041,13.198-4.901,14.848-11.776l37.888-151.552C435.799,132.019,434.654,127.248,431.616,123.732z M249.344,197.972     c-44.96,0-81.408-36.448-81.408-81.408s36.448-81.408,81.408-81.408s81.408,36.448,81.408,81.408     C330.473,161.408,294.188,197.692,249.344,197.972z" data-original="#000000" class="active-path" data-old_color="#F8F8F8" fill="#FFFFFF"/>
					<path d="M237.056,118.1l-28.16-28.672l-22.016,21.504l38.912,39.424c2.836,2.894,6.7,4.55,10.752,4.608     c3.999,0.196,7.897-1.289,10.752-4.096l64.512-60.928l-20.992-22.528L237.056,118.1z" data-original="#000000" class="active-path" data-old_color="#F8F8F8" fill="#FFFFFF"/>
				</g>
			</svg>
			<div class="animated infinite zoomIn kenit-alo-circle"></div>
			<div class="animated infinite pulse kenit-alo-circle-fill"></div>
			<span class="cnt crl-bg count_item_pr" id="count-cart"><?=$apiCart->getTotalQuality()?></span>
		</a>
	</div>
	<?php } } ?>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=<?=$row_setting['facebook_id']?>&autoLogAppEvents=1"></script>
	
	<script>
	    grecaptcha.ready(function () {
	        grecaptcha.execute('<?=$config['sitekey']?>', { action: 'contact' }).then(function (token) {
	            var recaptchaResponse = document.getElementById('recaptchaResponse');
	            recaptchaResponse.value = token;
	        });
	    });
	</script>
	
	<?=htmlspecialchars_decode($row_setting['html_body'])?>
	<?php //require_once _layouts.'menu_mobile.php'; ?>
	<?php $ex_map_marker = explode(',',$row_setting['map_marker']); ?>
	<ul class="h-card hidden-micro"><li class="h-fn fn"><?=$row_setting['title']?></li><li class="h-org org"><?=$row_setting['company']?></li><li class="h-tel tel"><?=$row_setting['phone']?></li><li><a class="u-url ul" href="<?=$config_base?>"><?=$config_base?></a></li></ul><span class="h-geo geo hidden-micro"><span class="p-latitude latitude"><?=trim($ex_map_marker[0])?></span>,<span class="p-longitude longitude"><?=trim($ex_map_marker[1])?></span></span>

	<?=$support->html()?>

 <?php /* ?>
	<div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon"> 
	  <a target="_blank" class="hotline_index" href="https://zalo.me/<?=$row_setting['zalo']?>">
	    <div class="quick-alo-ph-circle"></div>
	  </a> 
	  <a target="_blank" class="hotline_index" href="https://zalo.me/<?=$row_setting['zalo']?>">
	    <div class="quick-alo-ph-circle-fill"></div>
	  </a>
	  <a target="_blank" class="hotline_index" href="https://zalo.me/<?=$row_setting['zalo']?>">
	  <div class="quick-alo-ph-img-circle"></div>
	  </a> 
	 </div>
	 <div class="quick-alo-phone quick-alo-green quick-alo-show quick_hotline" id="quick-alo-phoneIcon"> 
	  <a target="_blank" class="hotline_index" href="tel:<?=$row_setting['hotline']?>">
	    <div class="quick-alo-ph-circle"></div>
	  </a> 
	  <a target="_blank" class="hotline_index" href="tel:<?=$row_setting['hotline']?>">
	    <div class="quick-alo-ph-circle-fill"></div>
	  </a>
	  <a target="_blank" class="hotline_index" href="tel:<?=$row_setting['hotline']?>">
	  <div class="quick-alo-ph-img-circle"></div>
	  </a> 
	 </div>
  <?php */ ?>  
</body>
</html>
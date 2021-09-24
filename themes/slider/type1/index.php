<?php 
	$result_slider = $d->rawQuery("select thumb,name_$lang as name,link from #_multi_photos where type=? and find_in_set ('hienthi',status)",array('slider'));
?>
<section id="slider">
	<div class="home-slider owl-carousel owl-theme owl-carousel-loop in-home"  data-dot="0" data-nav='1' data-loop='1' data-play='1' data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0'>
		<?php foreach ($result_slider as $k => $v){ ?>
		<div>
			<a href="<?=$v['link']?>">
				<img src="<?=_upload_photo_l.$v['thumb']?>" alt="<?=$v['name']?>">
			</a>	
		</div>
		<?php } ?>
	</div>
</section>
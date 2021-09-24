<?php 
	$row_top_banner = $d->rawQueryOne("select thumb,name_$lang as name,link from #_photos where type=? and find_in_set ('hienthi',status)",array('topbanner'));
?>
<section id="top-adv">
	<div class="img">
		<a href="<?=$row_top_banner['link']?>">
			<img src="<?=_upload_photo_l.$row_top_banner['thumb']?>" alt="<?=$row_top_banner['name']?>">
		</a>
	</div>
</section><!-- /section -->
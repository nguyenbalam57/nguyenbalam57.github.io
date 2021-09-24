<?php 
	$row_why = $d->rawQuery("select thumb, photo, name_$lang as name, desc_$lang as descs from #_multi_photos where type=? and find_in_set ('hienthi',status) order by numb asc",array('why'));
	
?>
<section id="why-box" class="margin-top-30">
	<div class="container">
		<div class="row w-why d-flex flex-wrap align-items-center justify-content-between">
			<?php foreach ($row_why as $k => $v) { ?>
			<div class="col--4 item">
				<div class="wraptem d-flex flex-wrap justify-content-between align-items-center">
					<span class="img"><img src="<?=_upload_photo_l.$v['thumb']?>?1564667458965" alt="<?=$v['name']?>"></span>
					<div class="content_right">
						<p><?=$v['name']?></p>
						<span><?=$v['descs']?></span>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
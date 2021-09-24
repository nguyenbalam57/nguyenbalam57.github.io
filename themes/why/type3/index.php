<?php 
	$row_why = $d->rawQuery("select thumb, photo, name_$lang as name, desc_$lang as descs,link from #_multi_photos where type=? and find_in_set ('hienthi',status) order by numb asc",array('why'));
	$row_phong_support = $d->rawQuery("select thumb, photo, name_$lang as name, desc_$lang as descs from #_multi_photos where type=? and find_in_set ('hienthi',status) order by numb asc",array('phong-support'));
?>
<section id="why-3" class="why-three">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-start">
			<div class="col-4 i-why">
				<h5>Thông tin</h5>
				<p class="hotline">
					Hotline: <strong><?=$row_setting['hotline']?></strong>
				</p>
				<p class="time text-center">
					<?=$row_setting['time']?>
				</p>
				<?php foreach ($row_phong_support as $k => $v) { ?>
				<p class="list"><?=$v['name']?></p>
				<p class="desc"><?=nl2br($v['descs'])?></p>
				<?php } ?>
			</div>
			<div class="col-8 i-why d-flex flex-wrap justify-content-start">
				<?php foreach ($row_why as $k => $v) { ?>
					<div class="li-why col-6 d-flex flex-wrap justify-content-start align-items-center" onclick="window.location.href='<?=$v['link']?>'">
						<span class="img"><img src="<?=_upload_photo_l.$v['photo']?>?v=<?=time()?>" alt="<?=$v['name']?>"></span>
						<p class="name"><?=$v['name']?></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
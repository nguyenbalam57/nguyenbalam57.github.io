<?php 
	$result_partner = $d->rawQuery("select thumb, photo, name_$lang as name, desc_$lang as descs,link from #_multi_photos where type=? and find_in_set ('hienthi',status) order by numb asc",array('partner'));
?>
<section id="partner-1" class="partner-one">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-start align-items-center">
			<h4>Các đối tác lớn</h4>
			<div class="partner-box">
				<?php if(count($result_partner)>0){ ?>
				<div class="owl-carousel in-product" data-dot="0" data-nav='0' data-loop='1' data-play='1' data-lg-items='12' data-md-items='10' data-sm-items='8' data-xs-items="3" data-margin='15'>
					<?php foreach ($result_partner as $k => $v) { ?>
					<div>
						<a href="<?=$v['link']?>" title="<?=$v['name']?>">
							<img src="<?=_upload_photo_l.$v['thumb']?>" alt="<?=$v['link']?>"  />
						</a>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
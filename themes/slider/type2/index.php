<?php 
	$result_slider = $d->rawQuery("select thumb,name_$lang as name,link from #_multi_photos where type=? and find_in_set ('hienthi',status)",array('slider'));
	$result_khuyenmai = $d->rawQuery("select thumb,name_$lang as name,desc_$lang as descs,alias_$lang as alias,UNIX_TIMESTAMP(createdAt) as ngaytao from #_posts where type=? and find_in_set ('hienthi',status) and find_in_set('noibat',status)",array('khuyen-mai'));
?>
<section id="slider-box-1" class="slider-one">
	<div class="container">
		<div class="row d-flex justify-content-between flex-wrap">
			<div class="item col-8">
				<div class="home-slider owl-carousel owl-theme owl-carousel-loop in-home"  data-dot="0" data-nav='1' data-loop='1' data-play='1' data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0'>
					<?php foreach ($result_slider as $k => $v){ ?>
					<div class="img-slider">
						<a href="<?=$v['link']?>">
							<img src="<?=_upload_photo_l.$v['thumb']?>" alt="<?=$v['name']?>">
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="item col-4">
				<div class="box-promotion">
					<h4 class="title-promotion">
						<span>
							Tin Khuyến mãi
						</span>
					</h4>
					<div class="box-content">
						<div class="in-slick" data-dot="0" data-arrows="0" data-infinite="1" data-play="1" data-vertical="1" data-speed="500" data-autoplaySpeed="2000" data-showDefault="5" data-scrollDefault="1" data-responsive="0">
							<?php foreach ($result_khuyenmai as $k => $v) { ?>
							<div class="news-items">
								<div class="article-image">
									<a href="<?=$v['alias']?>" class="item-blogs"><img src="<?=_upload_post_l.$v['thumb']?>" alt="<?=$v['name']?>" /></a>
								</div>
								<div class="article-desc">
									<h3 class="line-clamp"><a href="<?=$v['alias']?>" class="item-blogs"><?=$v['name']?></a></h3>
									<p><?=$func->timeAgo($v['ngaytao'])?></p>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
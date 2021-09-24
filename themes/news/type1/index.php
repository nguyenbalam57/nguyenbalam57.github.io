<?php 
	$result_news = $d->rawQuery("select thumb, photo, name_$lang as name, desc_$lang as descs,alias_$lang as alias from #_posts where type=? and find_in_set ('hienthi',status) and find_in_set ('noibat',status) order by numb asc",array('chuong-trinh-khuyen-mai'));
?>
<section id="news-post-1" class="section-news-one margin-top-20">
	<div class="container">
		<div class="row box-news d-flex flex-wrap justify-content-between">
        
            
			<div class="col-12">
				<h3 class="title-mn">Tin khuyến mãi</h3><div class="clear25"></div>
				<div class="content-news row d-flex flex-wrap justify-content-between">
					
		            <div class="col-12 item post-inner">
		            	<div class="in-slick" data-dot="0" data-arrows="0" data-infinite="1" data-play="1" data-vertical="0" data-speed="500" data-autoplaySpeed="2000" data-showDefault="3" data-scrollDefault="1" data-responsive="0">
			            	<?php foreach ($result_news as $k => $v) { ?>
							<div class="cnv">
                            
                            	<a class="post_image" href="<?=$v['alias']?>" title="<?=$v['name']?>">
		                	<img src="<?=_upload_post_l.$v['thumb']?>?v=<?=time()?>" alt="<?=$v['name']?>" class="img-responsive center-block">
		              	</a>
		              	<h5><a href="<?=$v['alias']?>" title="<?=$v['name']?>"><?=$v['name']?></a></h5>
			            <div class="desc">
			                <?=$func->subSpaceStr($v['descs'],35)?>
			            </div>
			           <a class="readmore" href="<?=$v['alias']?>" title="<?=_chi_tiet?>">
		            		Đọc tiếp
		            	</a>
                        
							</div>
							<?php } ?>
						</div>
		            </div>
				</div><div class="clear25"></div>
			</div>
		
		</div>
	</div>
</section>
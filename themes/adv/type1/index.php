<?php 
	$row_detail_gt = $d->rawQueryOne("SELECT id,name_$lang as name, alias_$lang as alias, desc_$lang as descs, type, content_$lang as content, photo, thumb, title_$lang as title, keywords_$lang as keywords, description_$lang as description from #_pages where type=? ",array("gioi-thieu"));
?>
<div class="clear25"></div>
<section id="adv-1" class="adv-one">
	<div class="container">
		<div class="row-adv d-flex justify-content-between flex-wrap">
		   
			<div class="col--2 item about_vn">
            <p class="desf1">Đôi nét về</p>
            <p class="desf2"><?=$row_setting['company']?></p>
				<?=$row_detail_gt['descs']?>
                
                	<a class="a_adv" href="gioi-thieu">Xem thêm</a>	
			</div>
            <div class="col--2">
			<a href="gioi-thieu"><img src="<?=_upload_post_l.$row_detail_gt['thumb']?>" /></a>	
			</div>
			
		</div><div class="clear25"></div>
	</div>
</section>




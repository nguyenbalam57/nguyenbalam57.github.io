<?php 
	$cats_product_nb = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias, photo, thumb from #_cats where type=? and find_in_set ('hienthi',status) and find_in_set ('noibat',status) order by numb asc",array("san-pham"));

	$count_one = $func->getCountProduct('san-pham','id_cat',$cats_product_nb[0]['id']);
?>
<section id="category">
	<div class="container">
		<div class="row d-flex flex-wrap justify-content-between align-items-center">

			<div class="item_proprety">
				<div class="wrap_banner">
					<img src="<?=_upload_product_l.$cats_product_nb[0]['photo']?>" alt="<?=$cats_product_nb[0]['name']?>">
					<div class="wr_title">
						<div class="wrap_title_ed">
							<h2 class="h2"><a href="<?=$cats_product_nb[0]['alias']?>" title="<?=$cats_product_nb[0]['name']?>"><?=$cats_product_nb[0]['name']?></a></h2>
							<p><?=$count_one?>&nbsp;<?=_sanpham?></p>
						</div>
					</div>
				</div>
			</div>
			<?php for($i=1;$i<count($cats_product_nb);$i++){ $count_sp = $func->getCountProduct('san-pham','id_cat',$cats_product_nb[$i]['id']);?>
			<div class="item_proprety">
				<div class="wrap_banner">
					<img src="<?=_upload_product_l.$cats_product_nb[$i]['thumb']?>" alt="<?=$cats_product_nb[$i]['name']?>">
					<div class="wr_title">
						<div class="wrap_title_ed">
							<h2 class="h2"><a href="<?=$cats_product_nb[$i]['alias']?>" title="<?=$cats_product_nb[$i]['name']?>"><?=$cats_product_nb[$i]['name']?></a></h2>
							<p><?=$count_sp?>&nbsp;<?=_sanpham?></p>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
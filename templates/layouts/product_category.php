<?php 
    $product_lists = $d->rawQuery("SELECT id,name_$lang as name,desc_$lang as descs, alias_$lang as alias, photo, thumb from #_lists where type=? and find_in_set ('hienthi',status) and find_in_set ('noibat',status) order by numb asc",array("san-pham"));
?>
<?php foreach ($product_lists as $k => $v) {  $product_its = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias, photo, thumb,price,price_old from #_products where type=? and find_in_set ('hienthi',status) and find_in_set ('noibat',status) and id_list=? order by numb asc",array("san-pham",$v['id'])); ?>
<section id="product-cate<?=$v['id']?>" class="margin-top-30 margin-bottom-30">
    <div class="container">
        <div class="section product-cate">
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-5 item <?=(($k+1)%2==1) ? 'order-1':''?>">
                    <a href="<?=$v['alias']?>" class="block" title="<?=$v['name']?>">
                        <img class="img-block" src="<?=_upload_product_l.$v['thumb']?>?v=<?=time()?>" alt="<?=$v['name']?>" />
                    </a>
                </div>
                <div class="col-7 item <?=(($k+1)%2==1) ? '':'order-1'?>">
                    <div class="wrap-destitle">
                        <div class="title-section-module text-left margin-bottom-20">
                            <h2><a href="<?=$v['alias']?>" title="<?=$v['name']?>"><?=$v['name']?></a></h2>
                        </div>
                        <p class="des "><?=$v['descs']?></p>
                        <a class="more" href="<?=$v['alias']?>" title="<?=_xem_tat_ca?>"><?=_xem_tat_ca?> <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-bg-in">
            <div class="owl-carousel in-product" data-dot="0" data-nav='0' data-loop='1' data-play='1' data-lg-items='5' data-md-items='5' data-sm-items='3' data-xs-items="2" data-margin='15'>
                <?php echo $func->getTemplateProductAll($product_its,'',1,1); ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
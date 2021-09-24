<?php 
    $product_banchay = $d->rawQuery("SELECT id,name_$lang as name,desc_$lang as descs, alias_$lang as alias, photo, thumb,price,price_old from #_products where type=? and find_in_set ('hienthi',status) and find_in_set ('banchay',status) order by numb asc",array("san-pham"));
?>
<section  id="sale-off" class="saleoff margin-top-30">
    <div class="container">
        <div class="wrap-in-border">
            <div class="title-section-module text-center margin-bottom-20">
                <h2><a href="san-pham-ban-chay" title="<?=_sanpham?> <?=_ban_chay?>"><?=_sanpham?> <?=_ban_chay?></a></h2>
            </div>
            <div class="owl-carousel in-product" data-dot="0" data-nav='1' data-loop='1' data-play='1' data-lg-items='5' data-md-items='5' data-sm-items='4' data-xs-items="2" data-margin='0'>
                <?php echo $func->getTemplateProductAll($product_banchay,'',1,1,'none-border'); ?>
            </div>
        </div>
    </div>
</section>
<?php 
    $product_lists = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias, photo, thumb from #_lists where type=? and find_in_set ('hienthi',status) and find_in_set ('noibat',status) order by numb asc",array("san-pham"));
?>
<?php foreach ($product_lists as $k => $v) {  
    $product_its = $d->rawQuery("SELECT id,name_$lang as name,desc_$lang as descs, alias_$lang as alias, photo, thumb,price,price_old from #_products where type=? and find_in_set ('hienthi',status) and find_in_set ('noibat',status) and id_list=? order by numb asc,id desc limit 0,8",array("san-pham",$v['id'])); ?>
<section id="productHighlights<?=$v['id']?>" class="section_sanphamnoibat">
    <div class="container">
    <h3 class="title-mn"><?=$v['name']?></h3>
        <div class="wrap-bg-in product-view margin-top-20">
           
            <div class="row d-flex flex-wrap justify-content-between vt_tab">
                <?php echo $func->getTemplateProductAll($product_its,'col--4 item',1,1); ?>
            </div>
            <a class="asp_index" href="<?=$v['alias']?>">Xem tất cả</a>
        </div>
    </div>
</section>
<?php } ?>
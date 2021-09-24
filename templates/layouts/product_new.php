<?php
    $row_advproduct = $d->rawQueryOne("select thumb,link,name_$lang as name from #_photos where type=? and find_in_set ('hienthi',status)",array('advproduct'));
    $product_moi = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias, photo, thumb,price,price_old from #_products where type=? and find_in_set ('hienthi',status) and find_in_set ('banchay',status) order by numb asc limit 0,8",array("san-pham"));
?>
<section id="productNew" class="section_sanphamnoibat">
    <div class="container">
       <div class="title-sp"><h3>Sản phẩm khuyến mãi</h3> <a href="san-pham-khuyen-mai">XEM TẤT CẢ</a></div>
        <div class="wrap-bg-in product-view">
            <div class="row d-flex flex-wrap justify-content-between vt_tab">
                <?php echo $func->getTemplateProductAll($product_moi,'col--4 item',1,1); ?>
            </div>
            
        </div>
    </div>
</section>
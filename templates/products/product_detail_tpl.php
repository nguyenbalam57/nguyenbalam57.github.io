<div class="wrap-bg-in">
    <div id="detail-product">
        <form method="post" data-role="add-to-cart" enctype="multipart/form-data" onsubmit="return false" name="product-detail-<?=$row_detail['id']?>" id="product-detail-<?=$row_detail['id']?>">
            <input type="hidden" name="act" value="addcart">
            <input type="hidden" name="id" value="<?=$row_detail['id']?>">
            <div id="content" class="row margin-bottom-20 d-flex flex-wrap justify-content-start">
                <div class="col-3 item left" id="photo-view-detail">
                    <div class="img-top">
                        <a href="<?=_upload_product_l.$row_detail['photo']?>" class="MagicZoom" id="Zoom-1" data-options="variableZoom: true;expand: off; hint: always; " >
                            <img src="<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['name']?>"/>
                        </a>
                    </div>
                    <?php if(count($photo)>0){ ?>
                    <div class="img-bottom">
                        <div class="product-detail-slider owl-carousel owl-theme not-aweowl">
                            <div class="items"><div class="img"><a data-zoom-id="Zoom-1" href="<?=_upload_product_l.$row_detail['photo']?>" data-image="<?=_upload_product_l.$row_detail['photo']?>"><img src="<?=_upload_product_l.$row_detail['thumb']?>" alt="<?=$row_detail['name']?>"></a></div></div>
                            <?php foreach($photo as $k=>$v){  ?>
                            <div class="items"><div class="img"><a data-zoom-id="Zoom-1" href="<?=_upload_product_l.$v['photo']?>" data-image="<?=_upload_product_l.$v['photo']?>"><img src="<?=_upload_product_l.$v['thumb']?>" alt="<?=$row_detail['name']?>"></a></div></div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php 
                    $ex_status = explode(',',$row_detail['status']);
                ?>
                <div class="col-6 item right">
                    <div class="header"><h3><?=$row_detail['name']?></h3></div>
                    <div class="quickview-info">
                        <div class="status-page">
                            
                            <div class="status"><?=_danh_muc?>: <span class="status-class"><?=$list_detail['name']?>...</span></div>
                            <div class="status"><?=_tinh_trang?>: <span class="status-class"><?=(in_array('hethang', $ex_status)) ? _het_hang:_con_hang?></span></div>
                        </div>
                        <div class="reviews"><?=$func->getRating(5)?></div>
                        <div class="prices">
                            <span class="price" ><span id="load-Price" class="money-format"><?=$func->moneyFormat1($row_detail['price'],'')?></span><?php if($row_detail['price']>0)echo'₫';?></span>
                            <?php if($row_detail['price_old']>$row_detail['price']){?>
                            <span class="old-price"><?=$func->moneyFormat1($row_detail['price_old'],'')?>₫</span>
                            <?php }?>
                        </div>
                         <?php if($row_detail['price_old']>$row_detail['price']){?>
                        <div class="prices">
                            <span class="save-price"><?=_tiet_kiem_duoc?>:
                                <span class="product-price-save"><span id="load-Price-Sale" class="money-format"><?=$func->moneyFormat1($row_detail['price_old']-$row_detail['price'],'')?></span>₫</span>
                            </span>
                        </div>
                        <?php }?>
                    </div>
                    <div class="product-description">
                        <div class="rte"><?=htmlspecialchars_decode($row_detail['descs'])?></div>
                    </div>
                    
                    <?php if(count($product_color)>0){ ?>
                    <div class="element"><div class="head"><?=_mau_sac?>: </div>
                        <div class="cont">
                            <?php foreach ($product_color as $k => $v){ ?>
                            <div class="el color-img" data-id="<?=$v['id']?>" data-priceold="<?=$row_detail['price_old']?>" data-price="<?=($v['price']!=0) ? $v['price']:$row_detail['price']?>">
                                <input id="swatch-0-<?=$v['id']?>" type="radio" name="option-1" <?=($k==0) ? 'checked':''?> value="<?=$v['id']?>">
                                <label for="swatch-0-<?=$v['id']?>"><?=$v['name']?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($product_size)>0){ ?>
                    <div class="element">
                        <div class="head"><?=_kich_thuoc?>: </div>
                        <div class="cont">
                            <?php foreach ($product_size as $k => $v){ ?>
                            <div class="el">
                                <input id="swatch-0-<?=$v['id']?>" type="radio" name="option-2" <?=($k==0) ? 'checked':''?> value="<?=$v['id']?>">
                                <label for="swatch-0-<?=$v['id']?>"><?=$v['name']?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if($config['cart']==true){ ?>
                    <div class="qty-ant btn-number">
                        <label><?=_so_luong?>:</label>
                        <div class="custom custom-btn-numbers form-control">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ){ result.value--; loadPriceCart('#qty', '#product-price', <?=$row_detail['price']?>); }else { return false; }" class="btn-minus btn-cts numb-detail" type="button">–</button>
                            <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)){ result.value++; loadPriceCart('#qty', '#product-price', <?=$row_detail['price']?>); }else { return false; }" class="btn-plus btn-cts numb-detail" type="button">+</button>
                        </div>
                    </div>
                    <div class="btn-mua">
                        <button type="submit" data-role="addtocart" data-el="#product-detail-<?=$row_detail['id']?>" class="buy add-to-cart"><span class="txt-main"><?=_them_vao_gio_hang?><b class="product-price money-format d-none" id="product-price"><?=$func->moneyFormat($row_detail['price'],'')?></b><b class="d-none">₫</b></span><span class="text-add d-none"><?=_dat_hang_giao_tan_noi?></span></button>

                        <button type="button" data-role="addtocartPayment" data-el="#product-detail-<?=$row_detail['id']?>" class="buypayment add-to-cart-payment"><span class="txt-main"><?=_mua_ngay?></span><span class="text-add d-none"><?=_dat_hang_giao_tan_noi?></span></button>
                    </div>
                    <?php } ?>
                    <div class="hotline-product margin-top-10">
                        <i class="fa fa-phone"></i> <?=_goi?>: <a href="tel:<?=str_replace('.','',$row_setting['hotline'])?>" title="<?=$row_setting['hotline']?>"><?=$row_setting['hotline']?></a> <span><?=_de_duoc_tu_van?>.</span>
                    </div>
                </div>
                <div class="col-3 item">
                    <?=$why2->html()?>
                </div>
            </div>
            <div class="section product-content row d-flex flex-wrap justify-content-center">
                <div class="col-12 item">
                    <div class="product-tab e-tabs">
                        <ul class="tabs tabs-title"> 
                            <li class="tab-link current" data-tab="chitiet"><?=_chi_tiet?></li>
                            <?php if(count($posts)>0){ foreach ($posts as $k => $v) { ?>
                            <li class="tab-link" data-tab="tab<?=$v['id']?>"><?=$v['name']?></li>
                            <?php } } ?>
                            <li class="tab-link" data-tab="comment"><?=_binh_luan?></li>
                        </ul>
                        <div id="chitiet" class="tab-content active current">
                            <div class="detail-set"><?=htmlspecialchars_decode($row_detail['content'])?></div>
                        </div>
                        <?php if(count($posts)>0){ foreach ($posts as $k => $v) { ?>
                        <div id="tab<?=$v['id']?>" class="tab-content">
                            <div class="detail-set"><?=htmlspecialchars_decode($v['content'])?></div>
                        </div>
                        <?php } } ?>
                        <div id="comment" class="tab-content">
                            <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-width="100%" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
               <?php /*/?> <div class="col-4 item specifications">
                    <h5 class="title-proper">Thông số kỹ thuật</h5>
                    <div class="desc-proper"><?=htmlspecialchars_decode($row_detail['specifications'])?></div>
                    <?php 
                        $result_khuyenmai = $d->rawQuery("select thumb,name_$lang as name,desc_$lang as descs,alias_$lang as alias,UNIX_TIMESTAMP(createdAt) as ngaytao from #_posts where type=? and find_in_set ('hienthi',status) and find_in_set('noibat',status)",array('khuyen-mai'));
                    ?>
                     <h5 class="title-proper margin-top-20">Tin khuyến mãi</h5>
                    <div class="desc-right">
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
                </div><?php /*/?>
            </div>
            <?php if(count($product_tags)>0){ ?>
            <div class="section margin-top-20">
                <ul class="tags">
                    <?php foreach ($product_tags as $k => $v) { ?>
                    <li><a href="tags-san-pham/<?=$v['alias']?>" class="tag"><?=$v['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </form>
    </div>
    
    <div class="wrap-bg-in product-view margin-top-20">
        <div class="row d-flex flex-wrap justify-content-between vt_tab">
           <?php echo $func->getTemplateProductAll($product_other,'col--4 item',1,1); ?>
        </div>
    </div>
</div>

<style>
#full-page{background: #fff;}
</style>
<div class="wrap-bg-in" id="page-body">
    <div class="page-scrol-social d-flex flex-wrap justify-content-start">
        <div class="social">
            <ul>
                <li>
                    <button class="sharer btn btn-primary btn-lg" data-sharer="twitter" data-title="<?=$title?>" data-url="<?=$func->getCurrentPageURL()?>"><i class="fa fa-twitter"></i></button>
                </li>
                <li>
                    <button class="sharer btn btn-primary btn-lg" data-sharer="facebook" data-url="<?=$func->getCurrentPageURL()?>"><i class="fa fa-facebook"></i></button>
                </li>
                <li>
                    <button class="sharer btn btn-primary btn-lg" data-sharer="linkedin" data-url="<?=$func->getCurrentPageURL()?>"><i class="fa fa-linkedin"></i></button>
                </li>
                <li>
                   <button class="sharer btn btn-primary btn-lg" data-sharer="email" data-title="<?=$title?>" data-url="<?=$func->getCurrentPageURL()?>" data-subject="<?=$title?>" data-to="<?=$row_setting['email']?>"><i class="fa fa-envelope"></i></button>
                </li>
                <li>
                    <button class="sharer btn btn-primary btn-lg" data-sharer="whatsapp" data-title="<?=$title?>" data-url="<?=$func->getCurrentPageURL()?>"><i class="fa fa-whatsapp"></i></button>
                </li>
                <li>
                    <button class="sharer btn btn-primary btn-lg" data-sharer="pinterest" data-url="<?=$func->getCurrentPageURL()?>"><i class="fa fa-pinterest"></i></button>
                </li>
            </ul>
        </div>
        <div class="detail-box">
            <h1 class="title-page"><?=$title?></h1>
            <div class="author-desc">
                
            </div>
            <div class="meta-desc">
                <?=htmlspecialchars_decode($row_detail['descs'])?>
            </div>
            <div class="content-detail-desc margin-top-20">
                <?=htmlspecialchars_decode($row_detail['content'])?>
            </div>
            <?php if(count($post_tags)>0){ ?>
            <div class="section margin-top-20">
                <ul class="tags">
                    <?php foreach ($post_tags as $k => $v) { ?>
                    <li><a href="'tags-bai-viet/<?=$v['alias']?>" class="tag"><?=$v['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
        
        <div class="right-post-other">
            <?php /*<div class="sticky-new">*/?>
                <div class="title-right">
                    <h5><?=_tin_lien_quan?></h5>
                </div>
                <div class="desc-right">
                    <ul class="other-post">
                        <?php foreach($posts_other as $k=>$v){ ?>
                        <li>
                            <a href="<?=$v['alias']?>" title="<?=$v['name']?>"><?=$v['name']?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php /*</div>*/?>
            <?php 
            if($type=='tin-tuc'){
                $result_khuyenmai = $d->rawQuery("select thumb,name_$lang as name,desc_$lang as descs,alias_$lang as alias,UNIX_TIMESTAMP(createdAt) as ngaytao from #_posts where type=? and find_in_set ('hienthi',status) and find_in_set('hienthi',status)",array('dich-vu'));
                $tiv="Dịch vụ";
            }else{
                $result_khuyenmai = $d->rawQuery("select thumb,name_$lang as name,desc_$lang as descs,alias_$lang as alias,UNIX_TIMESTAMP(createdAt) as ngaytao from #_posts where type=? and find_in_set ('hienthi',status) and find_in_set('noibat',status)",array('tin-tuc'));
                $tiv="tin tức";
            }
                
            ?>
            <div class="title-right margin-top-10">
                <h5><?=$tiv?></h5>
            </div>
            <div class="desc-right margin-top-10">
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
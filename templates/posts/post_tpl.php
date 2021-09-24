<div class="wrap-bg-in">
    <div class="row d-flex flex-wrap justify-content-between">
        <div class="head-title item">
            <h1><?=$title?></h1>
        </div>
    </div>
    <div class="row margin-top-10 d-flex flex-wrap justify-content-start posts-body" id="posts-body">
        <?php foreach($items as $k=>$v){ ?>
       <div class="item col--3">
           <div class="post-inner">
                <div class="post-img">
                    <a href="<?=$v['alias']?>" title="<?=$v['name']?>">
                        <img src="images/rolling.svg" data-lazyload="<?=_upload_post_l.$v['thumb']?>" class="img-block-auto" alt="<?=$v['name']?>">
                    </a>
                </div>
                <div class="post-content">
                    <h3>
                        <a title="<?=$v['name']?>" href="<?=$v['alias']?>"><?=$v['name']?></a>
                    </h3>
                    <p class="meta-article">
                        <span><i class="fa fa-calendar"></i> <?=$v['createdAt']?></span>
                    </p>
                    <p class="meta-content">
                        <?=$func->subSpaceStr($v['descs'],30)?>
                    </p>
                    <p class="meta-view">
                        <a class="view-more" href="<?=$v['alias']?>"><?=_doc_tiep?> <i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
            </div>
       </div>
       <?php } ?>
    </div>
    <div class="row margin-top-10 d-flex flex-wrap justify-content-start">
        <div class="item">
            <nav aria-label="Page navigation example" id="posts-page">
                <?=$paging?>
            </nav>
        </div>
    </div>
</div>
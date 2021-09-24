<div class="wrap-bg-in">
    <div class="row d-flex flex-wrap justify-content-between">
        <div class="head-title item">
            <h1><?=$title?></h1>
        </div>
    </div>

    <div class="margin-top-10 d-flex flex-wrap justify-content-start" id="cart-body">
        <?=$apiCart->getTemplateCartG($lang,$config_base)?>
    </div>
    
</div>
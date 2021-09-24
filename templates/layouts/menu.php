<?php 
    $menu_lists_product = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias from #_lists where type=? and find_in_set ('hienthi',status) and NOT find_in_set ('menu',status) order by id desc",array("san-pham"));

    $menu_lists_product2 = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias from #_lists where type=? and find_in_set ('hienthi',status) and find_in_set ('menu',status) order by id desc",array("san-pham"));
?>
<section id="menu">
	<div class="container">
		<nav id="menu-box">
			<ul class="item-big">
			    <li class="nav-item active">
			        <a class="a-img" href="<?=$config_base?>"><?=_trangchu?></a>
			    </li>
                <li class="nav-item">
                    <a class="a-img" href="gioi-thieu"><?=_gioithieu?></a>
                </li>
			    <li class="nav-item has-mega">
			        <a class="a-img" href="san-pham"><?=_sanpham?> <i class="fa fa-angle-down"></i></a>
                    <?php if(count($menu_lists_product)>0){ ?>
			        <div class="mega-content">
			            <ul class="level0 d-flex flex-wrap justify-content-between">
                            <?php foreach ($menu_lists_product as $k => $v) { $menu_cats_product = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias from #_cats where type=? and find_in_set ('hienthi',status) and id_list=? order by id desc",array("san-pham",$v['id'])); ?>
                            <li class="level1 parent item">
                                <h4 class="h4">
		                            <a href="<?=$v['alias']?>">
		                                <?=$v['name']?>
		                            </a>
		                        </h4> 
                                <ul class="level1">
                                    <?php foreach ($menu_cats_product as $k1 => $v1) { ?>
                                    <li class="level2"> <a href="<?=$v1['alias']?>"><?=$v1['name']?></a> 
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
			        </div>
                    <?php } ?>
			    </li>

                <?php if(count($menu_lists_product2)>0){ foreach ($menu_lists_product2 as $k => $v) { $menu_cats_product2 = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias from #_cats where type=? and find_in_set ('hienthi',status) and id_list=? order by id desc",array("san-pham",$v['id'])); ?>
			    <li class="nav-item">
			        <a class="a-img" href="<?=$v['alias']?>"><?=$v['name']?> <i class="fa fa-angle-down"></i></a>
                    <?php if(count($menu_cats_product2)>0){ ?>
			        <ul class="item_small hidden-sm hidden-xs">
                        <?php foreach ($menu_cats_product2 as $k1 => $v1) { $menu_items_product2 = $d->rawQuery("SELECT id,name_$lang as name, alias_$lang as alias from #_items where type=? and find_in_set ('hienthi',status) and id_cat=? order by id desc",array("san-pham",$v1['id'])); ?>
			            <li>
			                <a href="<?=$v1['alias']?>"><?=$v1['name']?></a>
                            <?php if(count($menu_items_product2)>0){ ?>
                            <ul>
                                <?php foreach ($menu_items_product2 as $k2 => $v2) { ?>
                                <li>
                                    <a href="<?=$v2['alias']?>"><?=$v2['name']?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
			            </li>
                        <?php } ?>
			        </ul>
                    <?php } ?>
			    </li>
                <?php } } ?>
			    <li class="nav-item">
			        <a class="a-img" href="tin-tuc"><?=_tintuc?></a>
			    </li>

                <li class="nav-item">
                    <a class="a-img" href="lien-he"><?=_lienhe?></a>
                </li>

                <li class="nav-item">
                    <a class="a-img" href="lang/vi">Tiếng Việt</a>
                </li>
                <li class="nav-item">
                    <a class="a-img" href="lang/en">Tiếng Anh</a>
                </li>

			</ul>
		</nav>
	</div>
</section>
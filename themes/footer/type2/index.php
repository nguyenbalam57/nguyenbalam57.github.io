<?php 
	$result_chinhsach = $d->rawQuery("select name_$lang as name, alias_$lang as alias, id from #_posts where type=? and find_in_set ('hienthi',status) order by numb asc",array('chinh-sach')); 
	$row_bocongthuong = $d->rawQueryOne("select thumb,name_$lang as name,photo,link from #_photos where type=? and find_in_set ('hienthi',status)",array('bocongthuong'));
	$result_taikhoan = $d->rawQuery("select thumb, photo, name_$lang as name,id, desc_$lang as descs,link from #_multi_photos where type=? and find_in_set ('hienthi',status) order by numb asc",array('ngan-hang'));

	$result_online = $counter->countOnline();
	$result_counter = $counter->getCounter();
?>
<section id="footer-2" class="footer-two">
	<div class="container">
		<div class="xemthem-chitiet">Xem thông tin khác  <i class="fa fa-plus" aria-hidden="true"></i></div>
		<div class="box-footer d-flex justify-content-between flex-wrap">
			<div class="col-4 mobile-menu mobile-collaped">
				<h4 class="head-footer"><?=$row_setting['company']?></h4>
				<a href="gioi-thieu" title="<?=_gioithieu?>"><?=_gioithieu?></a>
				<a href="khuyen-mai" title="<?=_khuyenmai?>"><?=_khuyenmai?></a>
				<a href="tin-tuc" title="<?=_tintuc?>"><?=_tintuc?></a>
				<a href="lien-he" title="<?=_lienhe?>"><?=_lienhe?></a>
				<p class="hotline">
					<span>Hotline hỗ trợ</span>
					<span><?=$row_setting['hotline']?></span>
				</p>
			</div>
			<div class="col-5 mobile-menu mobile-collaped">
				<h4 class="head-footer"><?=_chamsoc_kh?></h4>
				<?php foreach ($result_chinhsach as $k => $v) { ?>
                <a href="<?=$v['alias']?>"><?=$v['name']?></a>
                <?php } ?>
			</div>
			<div class="col-3">
				<h3>Được chứng nhận</h3>
				<p>
					<a href="<?=$row_bocongthuong['link']?>" title="<?=$row_bocongthuong['name']?>">
						<img src="<?=_upload_photo_l.$row_bocongthuong['photo']?>" alt="<?=$row_bocongthuong['name']?>">
					</a>
				</p>
				<h3>Đăng ký nhận tin khuyến mãi</h3>
				<p>Cập nhật thông tin khuyến mãi nhanh nhất</p>
				<form class="margin-bottom-0" action="" onsubmit="return false;" method="post" id="subscribe-form" name="subscribe-form" target="_blank">
					<input type="email" value="" placeholder="<?=_nhap_email_cua_ban?>" name="email" id="email">
					<button class="btn btn-primary subscribe" type="submit" name="subscribe" id="subscribe"><?=_gui?></button>
				</form>
			</div>
		</div>
		<div class="box-footer1 d-flex justify-content-between flex-wrap">
			<div class="col-5">
				<h4 class="head-footer">Thông tin liên hệ</h4>
				<div class="desc-footer">
					<?=htmlspecialchars_decode($func->getInfoPage('footer',$lang))?>
				</div>
			</div>
			<div class="col-3">
				<h4 class="head-footer">Thông tin tài khoản</h4>
				<div class="desc-footer">
		          <select name="selectnganhang" class="selectnganhang">
		            <?php foreach ($result_taikhoan as $k => $v) {?>
		            <option value="<?=$v['id']?>"><?=$v['name']?></option>
		            <?php } ?>
		          </select>
		          <?php foreach ($result_taikhoan as $k => $v) {?>
		          <div class="taikhoan taikhoan<?=$v['id']?> d-none">
		            <?=nl2br($v['descs'])?>
		          </div>
		          <?php } ?>
		        </div>
			</div>
			<div class="col-3">
				<div class="fb-page" data-href="<?=$row_setting['fanpage']?>" data-width="300" data-height="160" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?=$row_setting['fanpage']?>"><a href="<?=$row_setting['fanpage']?>"><?=$row_setting['name']?></a></blockquote></div></div>
			</div>
		</div>
	</div>
</section>
<section id="copy-right">
	<div class="container">
		<div class="d-flex justify-content-between flex-wrap">
			<span>Copyright &copy; 2020 Tiến Sinh. All Rights Reverved</span>
			<span>
				Đang online: <?=$result_online['dangxem']?> |  Tổng truy cập: <?=$result_counter['totalaccess']?>
			</span>
		</div>
	</div>
</section>
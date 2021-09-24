<?php 
    //$result_online = $counter->countOnline();
	//$result_counter = $counter->getCounter();
    
    $row_advpayment = $d->rawQueryOne("select thumb,photo,name_$lang as name, link from #_photos where type=? and find_in_set ('hienthi',status)",array('advpayment'));
?>
<footer class="footer" style="background: url(<?=_upload_photo_l.$row_advpayment['photo']?>);background-size: 100% 100%;">
	<div class="container">
	    <div class="row d-flex justify-content-between flex-wrap">
	    	<div class="colv1 item">
	            <div class="widget-ft">
	                <h4 class="title-menu">
						<a role="button">
							THÔNG TIN LIÊN HỆ
						</a>
                      
					</h4>
	                <div class="info-footer">
	                    <?=htmlspecialchars_decode($func->getInfoPage('footer',$lang))?>
                         
	                </div>
	            </div>
                	<ul class="follow_option">	
					<li>
						<a href="<?=$row_setting['fanpage']?>" target="_blank" title="<?=_theo_doi?> Facebook"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="<?=$row_setting['twitters']?>" target="_blank" title="<?=_theo_doi?> Twitters"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="<?=$row_setting['instagram']?>" target="_blank" title="<?=_theo_doi?> Instagam"><i class="fa fa-instagram"></i></a>
					</li>
					<li>
						<a href="<?=$row_setting['youtube']?>" target="_blank" title="<?=_theo_doi?> Youtube"><i class="fa fa-youtube-play"></i></a>
					</li>
				</ul>
	        </div>
	        <div class="colv2 item">
	            <div class="widget-ft first">
	                <h4 class="title-menu">
						<a role="button" class="collapsed">
							Bản đồ <i class="fa fa-plus" aria-hidden="true"></i>
						</a>
					</h4>
	                <div class="collapse">
	                    <?=htmlspecialchars_decode($row_setting['map_frame'])?>
	                </div>
	            </div>
	        </div>
	        <div class="colv2 item">
	            <div class="widget-ft first">
	                <h4 class="title-menu">
						<a role="button" class="collapsed pdl25">
							NHẬN BÁO GIÁ<i class="fa fa-plus" aria-hidden="true"></i>
						</a>
					</h4>
	                <div class="collapse">
	                   	<form class="frm_cx" method="post" name="frm" action="lien-he"  accept-charset="utf-8">
<input name="data[fullname]" placeholder="Họ và tên" class="ipx" required="" />
<input name="data[phone]" placeholder="Điện thoại" class="ipx_l" required="" />
<input name="data[email]" placeholder="Email" class="ipx_r" required="" />
<input name="data[address]" placeholder="Địa chỉ" class="ipx" required="" />

<textarea name="data[content]" class="trx_ip" placeholder="Nội dung"></textarea>
<div class="div_frm">
<input type="submit" name="frm_sm" value="GỬI YÊU CẦU" />
</div>
</form>
	                </div>
	            </div>
	        </div>
            
	    </div>
   
	</div>
	
</footer>

<section id="copy-right">

	
	&copy;	2020 <?=$row_setting['company_vi']?>. Create by ahtvietnam.vn
		
	
</section>
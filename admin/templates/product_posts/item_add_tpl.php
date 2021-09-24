<!--Content Header (Page header)-->
<?php 
    $csetting = $setting[$_GET['com']][$_GET['type']]; 
?>
<div class="content-header row align-items-center m-0">
    <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
        <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="index.html?com=product_posts&act=man<?=$url_type?>">Danh sách</a></li>
        </ol>
    </nav>
    <div class="col-sm-8 header-title p-0">
        <div class="media">
            <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
            <div class="media-body">
                <h1 class="font-weight-bold">Danh sách bài viết</h1>
                <small>Hệ thống quản trị nội dung website</small>
            </div>
        </div>
    </div>
</div>
<!--/.Content Header (Page header)--> 
<div class="body-content">
    <?=$func->messagePage($_GET['message'])?>
    <form action="index.html?com=product_posts&act=save<?=$url_type?><?=($_GET['id']) ? '&id='.$_GET['id']:''?>" method="post" name="form-action" id="form-action"  enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
        <div class="row ngonngu-sticky">
            <div class="col-lg-12">
                <div class="card mb-4 ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <?php if (count($config['website']['lang'])>1){ ?>
                                <ul class="nav-ngonngu">
                                    <?php foreach ($config['website']['lang'] as $k => $v) { ?>
                                    <li class="mr-3">
                                        <a href="<?=$k?>" class="<?= ($k == 'vi') ? 'active': '' ?> tipS">
                                            <img src="assets/dist/img/<?=$k?>.svg"> <?=$v?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group text-right mb-0">
                                    <button type="submit" class="btn btn-fill btn-primary"><?=($_GET['act']=='edit') ? 'Cập nhật':'Thêm mới'?></button>
                                    <a role="button" href="index.html?com=product_posts&act=man<?=$url_type?>" class="btn btn-fill btn-danger">Thoát</a>
                                    <a role="button" href="index.html?com=products&act=man&type=<?=$_GET['type']?>&id=<?=$_GET['id_product']?>" class="btn btn-fill btn-success">Về sản phẩm</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0">Thông tin chung</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php foreach ($config['website']['lang'] as $k => $v) { ?>
                                    <div class="form-group lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                                        <label class="font-weight-600">Tiêu đề [<?=$v?>]</label>
                                        <input type="text" class="form-control" value="<?=$item['name_'.$k]?>" data-validation="required" data-validation-error-msg="Tiêu đề không được để trống" id="name_<?=$k?>" name="data[name_<?=$k?>]" placeholder="Tiêu đề">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <?php if($csetting['code']==true){ ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-600">Code</label>
                                    <input type="text" class="form-control" value="<?=$item['code']?>" id="code" name="data[code]" placeholder="Mã thông tin tour">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($csetting['quantity']==true){ ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-600">Số lượng khách </label>
                                    <input type="text" class="form-control" value="<?=$item['quantity']?>" id="quantity" name="data[quantity]" >
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                         <?php 
                          $resTypeShipping = $d->rawQuery("select name_vi as name,id from table_product_properties where type=? and find_in_set('hienthi',status) limit 20",array('type-shipping'));

                          $resHolidayBeam = $d->rawQuery("select name_vi as name,id from table_product_properties where type=? and find_in_set('hienthi',status) limit 20",array('holiday-beam'));
  
                          if($_REQUEST['act']=='edit'){
                                $arr_typeShipping = explode(',',$item['typeShipping']);
                                $arr_holidayBeam = explode(',',$item['holidayBeam']);
                          }  
                         ?>
                         <div class="row">
                            <?php if($csetting['type-shipping']==true) {?> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="font-weight-600 ">Vận chuyển : </label>
                                    <br/>
                                    <?php if(!empty($resTypeShipping)){ foreach($resTypeShipping as $tship){ ?>
                                        <div class="col-md-4 d-inline-block ">
                                            <input type="checkbox" name="typeShipping[]" value="<?php echo $tship['id']?>" <?php echo (in_array($tship['id'],$arr_typeShipping)) ? 'checked': '';?>>
                                            <label><?php echo $tship['name']?> </label>
                                        </div>
                                       <?php } } ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($csetting['holiday-beam']==true) {?> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="font-weight-600">Kỳ Nghỉ : </label>
                                    <br/>
                                    <?php if(!empty($resHolidayBeam)){ foreach($resHolidayBeam as $hbeam){ ?>
                                        <div class="col-md-4 d-inline-block">
                                            <input type="checkbox" name="holidayBeam[]" value="<?php echo $hbeam['id']?>" <?php echo (in_array($hbeam['id'],$arr_holidayBeam)) ? 'checked': '';?>>
                                            <label><?php echo $hbeam['name']?> </label>
                                        </div>
                                    <?php } } ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($csetting['time-post']==true) {?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-600">Ngày giờ khởi hành</label>
                                    <input type="datetime-local" class="form-control" min="today1()" value="<?=$item['time']?>" id="time" name="date[time]"   >
                                </div>
                            </div>
                            <?php }  ?>
                            <?php if($csetting['city-post']==true) {?> 
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label  class="font-weight-600">Nơi khởi hành :</label>
                                    <input type="text" class="form-control" value="<?=$item['city']?>" id="city" name="data[city]" placeholder="Nhập nơi khởi hành">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach ($config['website']['lang'] as $k => $v) { ?>
                                <div class="form-group lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
                                    <label class="font-weight-600">Nội dung [<?=$v?>]</label>
                                    <textarea rows="4" cols="80"class="ck_editor" data-height="300" name="data[content_<?=$k?>]" id="content_<?=$k?>"  placeholder="Nhập nội dung"><?=$item['content_'.$k]?></textarea>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"><?=($_GET['act']=='edit') ? 'Cập nhật':'Thêm mới'?></button>
                        <a role="button" href="index.html?com=product_posts&act=man<?=$url_type?>" class="btn btn-fill btn-danger">Thoát</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    var today = new Date();
    function today1() {
        return `${today.getDate()}\\${today.getMonth()}\\${today.getFullYear()}`;
    }
</script>
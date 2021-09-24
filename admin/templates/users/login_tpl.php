<div class="d-flex align-items-center justify-content-center h-100vh">
    <div class="form-wrapper m-auto">
        <div class="form-container my-4">
            <div class="panel" style="min-width: 320px;">
                <div class="left-logo-login">
                    <a href="//<?=$config['link_frame']?>" target="_blank"><img src="assets/dist/img/logo-ozo.png"></a>
                    <p class="logo-text">ONEZEROONE luôn hướng về bạn</p>
                </div> 
                <div class="panel-header text-center mb-3">
                    <h3 class="fs-24">ĐĂNG NHẬP</h3>
                </div>
                <form action="index.html?com=users&act=login" id="login-form" name="login-form" method="post"  enctype="multipart/form-data" class="register-form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username_log" id="username" data-validation="required" data-validation-error-msg="Tên đăng nhập không được để trống" placeholder="Nhập tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_log" id="password" data-validation="required" data-validation-error-msg="Mật khẩu không được để trống" autocomplete="new-password" placeholder="Mật mật khẩu">
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" value="1">
                        <label class="custom-control-label" for="remember">Lưu đăng nhập</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Sign in</button>
                </form>
                <div class="right-logo-login">
                    <div>
                        <p>Hỗ trợ 24/7: <a href="tel:0000" title="">0000</a>
                        <p>Email: <a href="#">0z0@gmai.com</a>
                    </div>
                </div>
            </div>
            <div class="bottom-text text-center my-3">
                Truy cập <a href="<?=$config_base?>" target="_blank" class="font-weight-500">website</a> của bạn?<br>
                Design by <a href="#" target="_blank" class="font-weight-500">onezeroone Co., Ltd</a>
            </div>
        </div>
    </div>
</div>
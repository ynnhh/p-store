<section>
    <div class="container">
        <div class="row m-4">
            <!-- ----------------LOGIN------------------------- -->
            <div class="col-md-6 p-5 border-end">
                <p class="fs-4 mb-4 color-main">ĐĂNG NHẬP</p>
                <form method="post" action="" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted">Địa chỉ email <span class="text-danger"> *</span></label>
                        <input type="email" class="form-control border border-secondary rounded-4" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-muted">Mật khẩu <span class="text-danger"> *</span></label>
                        <input type="password" class="form-control border border-secondary rounded-4" name="pass">
                    </div>
                    <p class="small"><a class="color-main" href="forget-password.html">Quên mật khẩu ?</a></p>
                    <div class="d-grid">
                        <button class="btn btn-main rounded-0 text-white" type="submit" name="login_submit">Đăng nhập</button>
                    </div>
                </form>
                <?php if(isset($data)):?>
                <div class="alert alert-warning mt-3 text-center text-danger" role="alert">
                    <?=$data;?>
                    <i class="fa-solid fa-exclamation"></i> 
                </div>
                <?php endif; unset($data);?>
            </div>

            <!-- -------------------------INFO LOGIN---------------------------------- -->
            <div class="col-md-6 p-5 border-start text-center login-background">
                <div>
                    <p class="fs-4 mb-4 color-main">CHƯA CÓ TÀI KHOẢN ?</p>
                    <div class="registration-info px-5">
                        <span>
                            Đăng ký trở thành thành viên của Pristine để nhận ngay những ưu đãi độc quyền chỉ dành cho thành viên.
                        </span>
                    </div>
                    <div class="pt-3">
                        <a href="?mod=user&act=register" class="text-white text-center btn btn-main w-25 rounded-0">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
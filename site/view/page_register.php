<!-- <div class="container vh-250 ">
  <h2 class="text-center">ĐĂNG KÝ</h2>
  <form method="post" action="" enctype="multipart/form-data" class="form p-3">
  <div class="row d-flex justify-content-center align-items-center ">
    <div class="col-md-5 ">
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Họ tên</label>
                  <input name="name" type="text" class="form-control" required/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Email</label>
                  <input name="email" type="text" class="form-control" required/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Mật khẩu</label>
                  <input name="pass" type="password" class="form-control" required/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Nhập lại mật khẩu</label>
                  <input name="repass" type="password" class="form-control"required />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Địa chỉ</label>
                  <input name="address" type="text" class="form-control" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Số điện thoại</label>
                  <input name="phone" type="text" class="form-control" />
            </div>
            <div class="form-outline">
                  <label class="form-label   mb-1" >Ảnh đại diện</label>
                  <input name="image" type="file" class="form-control" />
            </div>
            <div class="text-center fs-1">
                  <input name="register_submit" type="submit" class="btn btn-danger btn-lg" value="Đăng ký">
            </div>
    </div>
    <div class="col-md-5">
        <img src="https://img.freepik.com/free-photo/full-length-portrait-happy-excited-girl-bright-colorful-clothes-holding-shopping-bags-while-standing-showing-peace-gesture-isolated_231208-5946.jpg"
                  class="img-fluid" alt="Sample image">
    </div> 
  </div>
  <php if(isset($data)):?>
      <div class="alert alert-warning" role="alert">
            <=$data;?>
      </div>
            <php endif; unset($data);?>
  </form>
</div -->>

<section>
    <div class="container">
        <div class="row m-4">
            <!-- ----------------LOGIN------------------------- -->
            <div class="col-md-6 p-5 border-end">
                  <p class="fs-4 mb-4 color-main">ĐĂNG KÝ</p>
                  <form method="post" action="" class="text-muted" >
                        <div class="form-outline mb-3">
                              <label class="form-label mb-1 " >Họ tên</label>
                              <input name="name" type="text" class="form-control border border-secondary rounded-4" required/>
                        </div>
                        <div class="form-outline mb-3 mb-3">
                              <label class="form-label  mb-1" >Email</label>
                              <input name="email" type="text" class="form-control border border-secondary rounded-4" required/>
                        </div>
                        <div class="form-outline mb-3">
                              <label class="form-label  mb-1" >Mật khẩu</label>
                              <input name="pass" type="password" class="form-control border border-secondary rounded-4" required/>
                        </div>
                        <div class="form-outline mb-3">
                              <label class="form-label  mb-1" >Nhập lại mật khẩu</label>
                              <input name="repass" type="password" class="form-control border border-secondary rounded-4"required />
                        </div>
                        <div class="form-outline mb-3">
                              <label class="form-label  mb-1" >Địa chỉ</label>
                              <input name="address" type="text" class="form-control border border-secondary rounded-4" />
                        </div>
                        <div class="form-outline mb-3">
                              <label class="form-label  mb-1" >Số điện thoại</label>
                              <input name="phone" type="text" class="form-control border border-secondary rounded-4" />
                        </div>
                        <div class="form-outline mb-3">
                              <label class="form-label  mb-1" >Ảnh đại diện</label>
                              <input name="image" type="file" class="form-control " />
                        </div>

                        <div class="d-grid">
                              <button class="btn btn-main rounded-0 text-white" type="submit" name="register_submit">Đăng ký</button>
                        </div>
                        <!-- <div class="text-center fs-1">
                              <input name="register_submit" type="submit" class="btn btn-main rounded-0 text-white" value="Đăng ký">
                        </div> -->
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
                        <a href="?mod=user&act=login" class="text-white text-center btn btn-main w-25 rounded-0">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
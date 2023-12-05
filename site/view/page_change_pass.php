<div class="col-md-9 bg-light">
                  <div class="container  ">
                        <div class="row top-info align-items-center">
                              <div class="col-md-9">
                                    <h3 class=" mt-3">Hồ sơ của tôi</h3>
                                    <p class="text-muted">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>  
                              </div>
                              
                              <div class="col-md-3">
                                    <a href="?mod=user&act=pass&id=<?=$user['MaKhachHang']?>" class="btn border"><i class="fa-solid fa-pen"></i> Thay đổi mật khẩu</a>
                              </div>
                        </div>
                        <hr> 
                        <form method="post" action="" enctype="multipart/form-data" class="form p-3">
                              <div class="row d-flex justify-content-center align-items-center ">
                                    <div class="col-md-5 ">
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Mật khẩu cũ</label>
                                                <input name="old_pass" type="password" class="form-control" value="" required/>
                                          </div>
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Mật khẩu mới</label>
                                                <input name="new_pass" type="text" class="form-control" value="" required/>
                                          </div>
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Nhập lại mật khẩu</label>
                                                <input name="re_new_pass" type="text" class="form-control" value="" required/>
                                          </div>
                                          <div class="text-center fs-1 mt-3">
                                                <input name="edit_submit" type="submit" class="btn btn-success btn-lg" value="Xác nhận">
                                          </div>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
        </div>
    </div>
</section>
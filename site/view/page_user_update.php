<!-- <div class="container vh-100 ">
  <h2 class="text-center">Cập nhật thông tin</h2>
  <form method="post" action="" enctype="multipart/form-data" class="form p-3">
  <div class="row d-flex justify-content-center align-items-center ">
    <div class="col-md-5 ">
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Họ tên</label>
                  <input name="name" type="text" class="form-control" value="<=$user['HoTen']?>"/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Email</label>
                  <input name="email" type="text" class="form-control" value="<=$user['Email']?>" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Địa chỉ</label>
                  <input name="address" type="text" class="form-control" value="<=$user['DiaChi']?>" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Số điện thoại</label>
                  <input name="phone" type="text" class="form-control" value="<=$user['SDT']?>"/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Ảnh đại diện</label>
                  <input name="image" type="file" class="form-control" />
            </div>
            <div class="text-center fs-1">
          <input name="edit_submit" type="submit" class="btn btn-danger btn-lg" value="Cập nhật">
            </div>
    </div>
    <div class="col-md-5">
        <img src="../content/img/<=$user['Anh']?>"
                  class="img-fluid" alt="Sample image">
    </div> 
  </div>
  </form>
</div> -->

<section class="user-info ">
    <div class="container my-4">
        <div class="row ">
            <div class="col-md-3 ">
                <div class="col-info d-flex">
                    <img width="100px" src="../content/img/<?=$user['Anh']?>" alt="" class="border d-inline-block p-3">
                    <div class="col-info-bottom mx-3 mt-3">
                        <h4 class=""><?=$user['HoTen']?></h4>
                        <div class="py-2">
                            <a href="?mod=user&act=edit&id=<?=$user['MaKhachHang']?>" class="btn border "><i class="fa-solid fa-pen"></i>  Sửa hồ sơ</a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-menu mt-4">
                    <div class="py-1">
                        <a href="?mod=user&act=edit&id=<?=$user['MaKhachHang']?>" class="btn border"><i class="fa-regular fa-user"></i> Tài khoản của tôi</a>
                    </div>
                    <div class="py-1">
                        <a href="../site/view/trangthai.php" class="btn border"><i class="fa-regular fa-file-lines"></i> Lịch sử đơn hàng</a>
                    </div>
                    <?php if($user['Admin']==1): ?> 
                    <div class="py-1">
                        <a href="../admin/?mod=category&act=list" class="btn border"><i class="fa-solid fa-gear"></i> Trang Admin</a>
                    </div>
                    <?php endif; ?>
                    <div class="py-1">
                        <a href="?mod=user&act=logout" class="btn btn-danger"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
                    </div>
                    
                </div>                
            </div>
            <div class="col-md-9 bg-light">
                  <div class="container  ">
                        <h3 class=" mt-3">Hồ sơ của tôi</h3>
                        <p class="text-muted">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                        <hr>
                        <form method="post" action="" enctype="multipart/form-data" class="form p-3">
                              <div class="row d-flex justify-content-center align-items-center ">
                                    <div class="col-md-5 ">
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Họ tên</label>
                                                <input name="name" type="text" class="form-control" value="<?=$user['HoTen']?>"/>
                                          </div>
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Email</label>
                                                <input name="email" type="text" class="form-control" value="<?=$user['Email']?>" />
                                          </div>
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Địa chỉ</label>
                                                <input name="address" type="text" class="form-control" value="<?=$user['DiaChi']?>" />
                                          </div>
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Số điện thoại</label>
                                                <input name="phone" type="text" class="form-control" value="<?=$user['SDT']?>"/>
                                          </div>
                                          <div class="form-outline">
                                                <label class="form-label mt-3 mb-1" >Ảnh đại diện</label>
                                                <input name="image" type="file" class="form-control" />
                                          </div>
                                          <div class="text-center fs-1 mt-3">
                                                <input name="edit_submit" type="submit" class="btn btn-danger btn-lg" value="Lưu">
                                          </div>
                                    </div>
                                    <div class="col-md-5">
                                          <img src="../content/img/<?=$user['Anh']?>" class="img-fluid" alt="Sample image">
                                    </div> 
                              </div>
                        </form>
                  </div>
            </div>
        </div>
    </div>
</section>
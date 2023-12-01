<!-- <div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center">THÔNG TIN KHÁCH HÀNG</h4>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-6 text-center">
            <img width="200px" src="../content/img/=$user['Anh']?>" alt="">
        </div>
        <div class="col-md-6">
            
            <p><b>Họ tên: </b>?=$user['HoTen']?></p>
            <p><b>Email: </b>?=$user['Email']?></p>
            <p><b>Số điện thoại: </b>?=$user['SDT']?></p>
            <p><b>Địa chỉ: </b>?=$user['DiaChi']?></p>
            <div class="row">
                <div class="col-md-4">
                    <a href="?mod=user&act=edit&id=<=$user['MaKhachHang']?>" class="btn btn-primary">Sửa thông tin</a>
                </div>
                <php if($user['Admin']==1): ?> 
                <div class="col-md-4">
                    <a href="../admin/?mod=category&act=list" class="btn btn-success">Trang Admin</a>
                </div>
                <php endif; ?>
                <div class="col-md-4">
                    <a href="../site/view/trangthai.php" class="btn btn-success">Lịch sử đơn hàng</a>
                </div>
                <div class="col-md-4">
                    <a href="?mod=user&act=logout" class="btn btn-danger">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<section class="user-info ">
    <div class="container my-4">
        <div class="row ">
            <div class="col-md-3 ">
                <div class="col-info d-flex">
                    <img width="100px" src="../content/img/<?=$user['Anh']?>" alt="" class="border d-inline-block p-3">
                    <div class="col-info-bottom mx-3 mt-4">
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

            </div>
        </div>
    </div>
</section>
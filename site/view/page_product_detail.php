<div class="container">
    <hr>
    <div class="row ">
        
        <div class="col-md-6 text-center">
            <img class="img-fluid"
                src="../content/img/<?=$sp['HinhAnh'] ?>"
                alt="">
        </div>
        <div class="col-md-6">
            <h3 class="text-capitalize fs-2 fw-normal"><?=$sp['TenSanPham'] ?></h3>
            <div class="d-flex mb-3">
                        <div class="text-warning me-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(99 Đánh giá)</small>
                    </div>
            <div class="price-detail pt-3">
                <!--Giá khuyến mãi:  -->
                <p class="price pr-10 fs-4 color-main fw-bolder "> <?=number_format($sp['GiaKhuyenMai'],0, ",",",")?> đ</p>
                <!--Giá gốc  -->
                <p class="price text-decoration-line-through text-muted fs-5"> <?=number_format($sp['Gia'],0, ",",",")?> đ </p>
            </div>
            <p><?=$sp['MoTa'] ?>
            <dl>
                <dt>
                    <dd>Bảo vệ da bằng titan Dioxide và kẽm oxit</dd>
                    <dd>Chỉ số PA ++++ | Chống tia HEV, VIS, IR</dd>
                    <dd>Công thức không có chất chống nắng hóa học, paraben, mùi tổng hợp và màu nhân tạo</dd>
                    <dd>Mịn nhẹ trên da, không đóng thành vệt</dd>
                    <dd> Bổng sung aloe vera làm dịu viêm và đỏ</dd>
                </dt>
            </dl>
            </p>
            <form method="post" action="?mod=cart&act=add">
            <p>Số lượng: <input type="number" value=1 width="10px" name="So_luong">  </p>
            <!-- <input type=submit class="btn btn-danger border" name="product_add" value="Thuê ngay"> -->
            <!-- <input type=submit class="btn btn-primary" name="product_addCart"  value="Thêm vào giỏ hàng"> -->
            <a href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>" class="btn bg-main text-white border">Thêm vào giỏ hàng</a>
            <!-- <a href="" class="btn btn-danger"><i class="bi bi-cart"></i> Thuê ngay</a>
            <a href="" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng</a> -->
            </form>
        </div>
       
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <h4 class="describe">
                Mô Tả Sản Phẩm
            </h4>
        </div>
        <div class="col-md-10 text-center">
            <br>
            <p></p>
            <img src="../content/img/size.png" width="50%">
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

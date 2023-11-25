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
            <div class="price pt-3">
                <!--Giá khuyến mãi:  -->
                <p class="pr-10 fs-4 color-main fw-bolder "> <?=number_format($sp['GiaKhuyenMai'],0, ",",",")?> đ</p>
                <!--Giá gốc  -->
                <p class="text-decoration-line-through text-muted fs-5"> <?=number_format($sp['Gia'],0, ",",",")?> đ </p>
            </div>
            <p><?=$sp['MoTa'] ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nisi amet vitae? Doloremque eius doloribus beatae saepe eaque tempora, possimus suscipit repudiandae! Magnam tempore quo deserunt, quae minus doloribus doloremque?</p>
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

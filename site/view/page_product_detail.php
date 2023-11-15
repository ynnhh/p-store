<div class="container">
    <div class="row ">
        
        <div class="col-md-6 text-center">
            <img class="img-fluid"
                src="../content/img/<?=$product_detail['HinhAnh'] ?>"
                alt="">
        </div>
        <div class="col-md-6">
            <h1><?=$product_detail['TenSanPham'] ?></h1>
            <p></p>
            <p>Hàng chính hãng</p>
            
            <p>Giá khuyến mãi: <?=$product_detail['GiaKhuyenMai'] ?> đ</p>
            <p class="line-through">Giá gốc: <?=$product_detail['Gia'] ?> đ </p>
            <p>Size: </p>
            <div class="d-flex flex-row mb-3">
                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                <label class="btn btn-outline-secondary me-2" for="option1">S</label>

                <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                <label class="btn btn-outline-secondary me-2" for="option2">M</label>

                <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                <label class="btn btn-outline-secondary me-2" for="option3">L</label>

                <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                <label class="btn btn-outline-secondary me-2" for="option4">XL</label>
            </div>
            <p>Màu:</p>
            <div class="d-flex flex-row mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="me-2">Màu xanh</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="me-2">Màu đỏ</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
                    <label class="me-2">Màu vàng</label>

                  </div>
            </div>
            <form method="post" action="?mod=cart&act=add">
            <p>Số lượng: <input type="number" value=1 width="10px" name="So_luong">  </p>
            <input type=submit class="btn btn-danger" name="product_add" value="Thuê ngay">
            <input type=submit class="btn btn-primary" name="product_addCart"  value="Thêm vào giỏ hàng">
            <!-- <a href="" class="btn btn-danger"><i class="bi bi-cart"></i> Thuê ngay</a>
            <a href="" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng</a> -->
            </form>
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center">
            <br>
            <h2>Chi tiết sản phẩm</h2>
            <img src="../content/img/size.png" width="50%">
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<div class="container">
    <hr>
    <div class="row ">
        
        <div class="col-md-6 text-center">
            <img class="img-fluid"
                src="../content/img/<?=$sp['HinhAnh'] ?>"
                alt="">
        </div>
        <div class="col-md-6">
            <h3 class="text-capitalize"><?=$sp['TenSanPham'] ?></h3>
            <p></p>
            <p>Hàng chính hãng</p>
            <div class="price">
                <!--Giá khuyến mãi:  -->
                <p> <?=$sp['GiaKhuyenMai'] ?> đ</p>
                <!--Giá gốc  -->
                <p class="line-through"> <?=$sp['Gia'] ?> đ </p>
            </div>
            
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
            <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                <i class="fa-solid fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            <input type=submit class="btn btn-danger" name="product_add" value="Thuê ngay">
            <a href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>" class="btn btn-danger">Thuê ngay</a>
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

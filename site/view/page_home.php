
    <!-- main -->
    <main class="container">
        <!-- Catagories -->
        <div class="text-center">
            <h3 class="my-3">DANH MỤC SẢN PHẨM</h3>
            <div class="row">  <!-- đã sửa -->
                    <?php 
                        foreach ($dsdm as $dm): 
                    ?>
                    <div class="col-md-4 position-relative">
                        <img class="img-fluid img-thumbnail" src="../content/img/<?=$dm['HinhAnh']?>" height="270px" alt="">
                        <p class="text-danger p-2 bg-white my-2 position-absolute top-50 start-50 fs-6 translate-middle"><?=$dm['TenDanhMuc']?> </p>
                    </div>
                    
                    <?php
                        endforeach;
                    ?>
            </div>
        </div>

        <!-- Categories Start -->
        <!-- <div class="container-fluid pt-5">
        <h3 class="my-3">DANH MỤC SẢN PHẨM</h3>
            <div class="row px-xl-5 pb-3">
                    
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="../content/img/" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6></h6>
                                <small class="text-body">100 Products</small> 
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div> -->
        <!-- Categories End -->

        <!-- sale Products -->
        <div class="text-center mt-5">
            <!-- <h3 class="my-3">SẢN PHẨM BÁN CHẠY</h3> -->
                <div class="container-countdown">
                    <h3 id="headline">FlashSale</h3>
                    <div id="countdown">
                        <ul>
                            <li><span id="days"></span></li>
                            <li><span id="hours"></span></li>
                            <li><span id="minutes"></span></li>
                            <li><span id="seconds"></span></li>
                        </ul>
                    </div>
                    <div id="content" class="emoji">
                        <span>🥳</span>
                        <span>🎉</span>
                        <span>🎂</span>
                    </div>
                </div>
                <!-- countdown end -->
            <div class="row"> <!-- đã sửa -->
                <?php
                    foreach ($sp_hot as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 container-img">
                        <div class="product-img position-relative overflow-hidden">
                            <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                            <img class="img-fluid " src="../content/img/<?=$sp['HinhAnh']?>" alt="" ></a>
                            <div class="product-action text-center icons">
                                <a class="btn btn-outline-dark btn-square" href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        
                        <p class="text-capitalize"><b><?=$sp['TenSanPham']?></b></p>
                        <div class="d-flex justify-content-around">
                            <span class="text-danger fs-6 fw-bold"> <?=number_format($sp['GiaKhuyenMai'],0, ",",",")?> đ</span>
                            <span class="text-muted"> <del> <?=number_format($sp['Gia'],0, ",",",")?> đ </del></span>
                        </div>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>
        <!-- All categories -->
        <div class="text-center mt-5">
            <div class=" d-flex">
                <h3 class="my-3">Thời Trang Nữ</h3>
                <a href="?mod=page&act=category&id=1" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <?php
                    foreach ($sp_nu as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 container-img">
                        <div class="product-img position-relative overflow-hidden">
                            <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                            <img class="img-fluid " src="../content/img/<?=$sp['HinhAnh']?>" alt="" ></a>
                            <div class="product-action text-center icons">
                                <a class="btn btn-outline-dark btn-square" href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        
                        <p class="text-capitalize"><b><?=$sp['TenSanPham']?></b></p>
                        <div class="d-flex justify-content-around">
                            <span class="text-danger fs-6 fw-bold"> <?=number_format($sp['GiaKhuyenMai'],0, ",",",")?> đ</span>
                            <span class="text-muted"> <del> <?=number_format($sp['Gia'],0, ",",",")?> đ </del></span>
                        </div>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <h3 class="my-3">Thời Trang Nam</h3>
                <a href="?mod=page&act=category&id=2" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <?php 
                    foreach ($sp_nam as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 container-img">
                        <div class="product-img position-relative overflow-hidden">
                            <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                            <img class="img-fluid " src="../content/img/<?=$sp['HinhAnh']?>" alt="" ></a>
                            <div class="product-action text-center icons">
                                <a class="btn btn-outline-dark btn-square" href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        
                        <p class="text-capitalize"><b><?=$sp['TenSanPham']?></b></p>
                        <div class="d-flex justify-content-around">
                            <span class="text-danger fs-6 fw-bold"> <?=number_format($sp['GiaKhuyenMai'],0, ",",",")?> đ</span>
                            <span class="text-muted"> <del> <?=number_format($sp['Gia'],0, ",",",")?> đ </del></span>
                        </div>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <h3 class="my-3">Thời Trang Trẻ Em</h3>
                <a href="?mod=page&act=category&id=3" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
                <?php
                    foreach ($sp_treem as $sp):
                ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 container-img">
                        <div class="product-img position-relative overflow-hidden">
                            <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                            <img class="img-fluid " src="../content/img/<?=$sp['HinhAnh']?>" alt="" ></a>
                            <div class="product-action text-center icons">
                                <a class="btn btn-outline-dark btn-square" href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        
                        <p class="text-capitalize"><b><?=$sp['TenSanPham']?></b></p>
                        <div class="d-flex justify-content-around">
                            <span class="text-danger fs-6 fw-bold"> <?=number_format($sp['GiaKhuyenMai'],0, ",",",")?> đ</span>
                            <span class="text-muted"> <del> <?=number_format($sp['Gia'],0, ",",",")?> đ </del></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        
    </main>
    
    <!-- footer -->
    <div class="bg-dark mt-5">
        <div class=" bg-dark p-5 text-center">
            <p for="newsletter1" class="text-white mx-5">Nhập Email để nhận mã khuyến mãi </p>
            <div class="d-flex justify-content-center">
                <input id="newsletter1" type="text" class="form-control w-25 rounded-0" placeholder="Nhập email của bạn . . .">
                <button class="btn bg-main bg-opacity-75 rounded-0 " type="button">Đăng ký</button>
              </div>
        </div>
    </div>

    <!-- ---------------------------------------------------- -->

    

   
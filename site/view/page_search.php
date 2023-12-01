<div class="container">
<div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Kết quả tìm kiếm từ khóa: <?=$search?></H4>
            </div>
            <div class="row my-3">
                <?php foreach($timkiem as $sp):?>
                    <div class="col-md-3 mb-3">
                    <div class="shadow pb-3 container-img border">
                        <div class="product-img ">
                            <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>">
                            <div class="sale position-absolute">
                                <p class="sale-content border bg-main text-white d-inline px-2 py-1 fw-bold">
                                    - 15 %
                                </p>
                            </div>
                            
                            <img class="img-fluid " src="../content/img/<?=$sp['HinhAnh']?>" alt="" ></a>
                            <div class="product-action text-center icons">
                                <a class="btn btn-outline-dark btn-square" href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <p class="text-capitalize box text-start">
                                <?=$sp['TenSanPham']?>
                            </p>
                            <div class="d-flex justify-content-around">
                                <span class="color-main fs-6 fw-bold"> <?=number_format($sp['GiaKhuyenMai'],0, ",",",")?> đ</span>
                                <span class="text-muted"> <del> <?=number_format($sp['Gia'],0, ",",",")?> đ </del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
</div>
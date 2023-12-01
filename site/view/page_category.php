<div class="container">
    <div class="row">
        <div class="col-md-3 mt-4">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-dark" aria-current="true"> Sắp xếp theo giá</a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&filter_order=ASC" class="list-group-item list-group-item-action" >+ Sắp xếp giá tăng </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&filter_order=DESC" class="list-group-item list-group-item-action">+ Sắp xếp giá giảm </a>
            </div>
            <br>
            <div class="list-group list-group-flush">
                <a  class="list-group-item list-group-item-action list-group-item-dark" aria-current="true"> Lọc theo giá</a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&max_price=300000" class="list-group-item list-group-item-action" >+ Dưới 300.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=300000&max_price=500000" class="list-group-item list-group-item-action">+ 300.000đ - 500.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=500000&max_price=1000000" class="list-group-item list-group-item-action">+ 500.000đ - 1.000.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=1000000&max_price=2000000" class="list-group-item list-group-item-action">+ 1.000.000đ - 2.000.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=2000000" class="list-group-item list-group-item-action ">+ Trên 2.000.000 đ</a>
            </div>
        </div>
        <div class="col-md-9">
        <div class="text-center mt-4">
            <div class="row">
                <?php foreach($sp_dm as $sp):?>
                <div class="col-md-4 mb-3">
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
    </div>
</div>
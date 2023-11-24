
<main>      
           
            <div class="container my-3">
                <table id="cart" class="table table-hover table-condensed table-striped text-center ">
                    <thead>
                        <tr class="text-uppercase fs-6 bg-main info ">
                            <th style="width:20%">Tên sản phẩm</th>
                            <th style="width:20%">Hình ảnh</th>
                            <th style="width:10%">Giá</th>
                            <th style="width:8%">Số lượng</th>
                            <th style="width:12%">Thành tiền</th>
                            <th style="width:10%"> Thao tác </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sum=0;  ?>
                        <?php foreach($_SESSION['cart'] as $item): ?>
                        <tr class="text-capitalize" >
                            <td data-th="Tên sản phẩm"><?=$item['TenSanPham']?></td>
                            <td data-th="Sản phẩm">
                                        <img
                                            src="../content/img/<?=$item['HinhAnh']?>"
                                            alt="Sản phẩm 1" class="img-responsive" width="100">
                            </td>
                            <td data-th="Giá">
                                <p class="fw-bold"><?=number_format($item['GiaKhuyenMai'],0, ",",",")." đ"?></p>
                                <p class="text-decoration-line-through text-muted fw-light" style="font-size: 12px"><?=number_format($item['Gia'],0, ",",",")." đ"?></p>
                            </td>
                            <td data-th="Số lượng">
                                <div class="amount-product-buy d-flex justify-content-center">
                                    <a href="?mod=cart&act=decrease&id=<?=$item['MaSanPham'] ?>" class="minus-product border bg-opacity-25  px-2">
                                        <i class="bi bi-dash fw-bolder text-dark fs-5"></i>
                                    </a>
                                    <div class="amount-product fs-5  px-2 border border-1"><?=$item['sl']?></div>
                                    <a href="?mod=cart&act=increase&id=<?=$item['MaSanPham'] ?>" class="add-plus border bg-opacity-25 px-2">
                                        <i class="bi bi-plus-lg fw-bolder text-dark fs-5"></i>
                                    </a>
                                </div>
                            </td>
                            <?php $firstSum= $item['GiaKhuyenMai']*$item['sl']?>
                            <td data-th="Thành tiền" class="fw-bold"><?=number_format($firstSum,0, ",",",")." Đ"?></td>
                            <td class="actions" data-th="">
                                <a href="?mod=cart&act=delete&id=<?=$item['MaSanPham'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $sum+= $item['GiaKhuyenMai']*$item['sl']?>
                        <?php endforeach; ?>
                    </tbody>

                </table>
                <div class="cart-payment mt-5 sticky-bottom z-1 bg-white">
                    <div class="row border border-1 py-4 align-items-center mt-3 shadow-lg">
                        <div class="col-sm-6">
                            <div class="cart-payment-left d-flex hstack gap-3">
                                <a href="?" class="btn btn-info"><i class="fa fa-angle-left"></i>
                                    Tiếp tục mua hàng</a>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div
                                class="cart-payment-right  d-flex align-items-center justify-content-between hstack gap-3">
                                <h6 class="mb-0 text-truncate fs-5">Tổng thanh toán: </h6>
                                <strong><?=number_format($sum,0, ",",",")." Đ"?></strong>
                                <a href="?mod=cart&act=checkout" class="btn btn-success btn-block">Thanh toán
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
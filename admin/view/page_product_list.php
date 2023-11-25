<div class="p-5">
    <h3 class="text-center">QUẢN LÝ SẢN PHẨM</h3>
    <div >
        <a href="?mod=product&act=add" class="btn btn-primary">Thêm sản phẩm</a>   
    </div>
    <br>
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-success">
                <!-- <th>STT</th> -->
                <th >Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Giá khuyến mãi</th>
                <th>Số lượng</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product_page as $sp): ?>
            <?//php foreach($dssp as $sp): ?>
            <tr>
                <!-- <td><?//=$a++?></td> -->
                <td><?=$sp['MaSanPham']?></td>
                <td><?=$sp['TenSanPham']?></td>
                <td><?=$sp['TenDanhMuc']?></td>
                <td><img src="../content/img/<?=$sp['HinhAnh']?>" width="60px" alt=""></td>
                <td><?=$sp['Gia']?> đ</td>
                <td><?=$sp['GiaKhuyenMai']?> đ</td>
                <td><?=$sp['SoLuong']?></td>
                <!-- <td><?//=$sp['Hot']?></td> -->
                <td><?=$sp['TrangThai']?></td>
                <td>
                    <a class="btn btn-success" href="?mod=product&act=edit&id=<?=$sp['MaSanPham']?>" ><i class="fa-solid fa-pencil"></i></a>
                    <a class="btn btn-danger" href="?mod=product&act=delete&id=<?=$sp['MaSanPham']?>"><i class="fa-solid fa-trash-can"></i></a>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            <!-- phân trang sản phẩm -->
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        <ul class="pagination">
            <?php for($i=1; $i<=$number_page; $i++) : ?>
            <li class="page-item"><a class="page-link" href="?mod=product&act=list&page=<?=$i?>"><?=$i?></a></li>
            <?php endfor;?>
        </ul>
    </nav>
</div>
<div class="p-5">
    <h3 class="text-center">QUẢN LÝ BÌNH LUẬN</h3>
    <br>
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-success">
                <!-- <th>STT</th> -->
                <th >Mã Bình Luận</th>
                <th>Mã khách hàng</th>
                <th>Mã sản phẩm</th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dsfb as $fb): ?>
            <?//php foreach($dsfb as $fb): ?>
            <tr>
                <!-- <td><?//=$a++?></td> -->
                <td><?=$fb['MaBinhLuan']?></td>
                <td><?=$fb['MaKhachHang']?></td>
                <td><?=$fb['MaSanPham']?></td>
                <!-- td><img src="../content/img/<?//=$fb['HinhAnh']?>" width="60px" alt=""></td> -->
                <td><?=$fb['NoiDung']?></td>
                <td><?=$fb['NgayBinhLuan']?> </td>
                <td>
<!--                     <a class="btn btn-primary" href="?mod=feedback&act=edit&id=<?//=$fb['MaBinhLuan']?>">Sửa</a>
 -->                    <a class="btn btn-danger" href="?mod=feedback&act=delete&id=<?=$fb['MaBinhLuan']?>"><i class="fa-solid fa-trash-can"></i></a>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            <!-- phân trang sản phẩm -->
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        <ul class="pagination">
            <?php for($i=1; $i<=$number_page; $i++) : ?>
            <li class="page-item"><a class="page-link" href="?mod=feedback&act=list&page=<?=$i?>"><?=$i?></a></li>
            <?php endfor;?>
        </ul>
    </nav>
</div>
<div class="p-5">
    <h3 class="text-center">QUẢN LÝ NGƯỜI DÙNG</h3>
    <!-- <a href="?mod=product&act=add" class="btn btn-primary">Thêm sản phẩm</a> -->   
    <br> 
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Mã KH</th>
                <th>Tên khách hàng</th>
                <th>Emai</th>
                <th>Hình ảnh</th>
                <th>Mật khẩu</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Quyền</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($dsuser as $user): ?>
            <?//php foreach($dsuser as $user): ?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$user['MaKhachHang']?></td>
                <td><?=$user['HoTen']?></td>
                <td><?=$user['Email']?></td>
                <td><img src="../content/img/<?=$user['Anh']?>" width="60px" alt=""></td>
                <td><?=$user['MatKhau']?> </td>
                <td><?=$user['DiaChi']?> </td>
                <td><?=$user['SDT']?></td>
                <td><?=$user['Admin']?></td>
                <td><?=$user['TrangThai']?></td>
                <td>
                    <a class="btn btn-success" href="?mod=user&act=edit&id=<?=$user['MaKhachHang']?>"> <i class="fa-solid fa-pencil"></i></a>
                    <a class="btn btn-danger" href="?mod=user&act=delete&id=<?=$user['MaKhachHang']?>"> <i class="fa-solid fa-trash-can"></i></a>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            <!-- phân trang sản phẩm -->
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        <ul class="pagination">
            <?php for($i=1; $i<=$number_page; $i++) : ?>
            <li class="page-item"><a class="page-link" href="?mod=user&act=list&page=<?=$i?>"><?=$i?></a></li>
            <?php endfor;?>
        </ul>
    </nav>
</div>
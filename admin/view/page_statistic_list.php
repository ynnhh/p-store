<?php
    include_once 'view/template_header.php';
    // Place your PHP code here

    session_start();

    // Kết nối đến cơ sở dữ liệu
    try {
        $db = new PDO('mysql:host=localhost;dbname=myphamshop;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
        die();
    }

    // Truy vấn SQL để lấy tất cả sản phẩm
    $sql = "SELECT * FROM sanpham";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $product_page = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="p-5 ">
    <h3 class="text-center">Quản lý thống kê</h3>
    <br>
    <table class="table table-hover table-bordered text-center ">
        <thead>
            <tr class="table-success text-capitalize">
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Giá khuyến mãi</th>
                <th>Số lượng</th>
                <th>đã bán</th>
                <th>Tổng tiền đã bán</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tongSoLuongDaBan = 0;
            $tongTienDaBan = 0;
            foreach($product_page as $sp):
                $soLuongConLai = $sp['SoLuong'];
                $giaSanPham = $sp['Gia'];
                $soLuongDaBan = ($soLuongConLai < 50) ? (50 - $soLuongConLai) : 0;
                $tongSoLuongDaBan += $soLuongDaBan;
                $tongTienDaBan += $soLuongDaBan * $giaSanPham;
            ?>
                <tr>
                    <td width="30px"><?= $sp['MaSanPham'] ?></td>
                    <td width="300px"><?= $sp['TenSanPham'] ?></td>
                    <td><?= number_format($sp['Gia'],0, ",",",")?> đ</td>
                    <td><?= $sp['GiaKhuyenMai'] ?> đ</td>
                    <td><?= $sp['SoLuong'] ?></td>
                    <td width="80px"><?= $soLuongDaBan ?></td>
                    <td><?= number_format($soLuongDaBan * $giaSanPham, 0, '.', ',') ?> đ</td>
                    <?php if($sp['TrangThai']=='Hết hàng'): ?>
                        <td class="text-danger"><?= $sp['TrangThai'] ?></td>
                    <?php elseif($sp['TrangThai']=='Tạm ngưng'): ?>
                        <td class="text-muted"><?= $sp['TrangThai'] ?></td>
                    <?php else: ?>
                        <td><?= $sp['TrangThai'] ?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" class="tong-tien fw-bold">Tổng số lượng đã bán: <?= $tongSoLuongDaBan ?></td>
                <td colspan="2" class="tong-tien fw-bold">Tổng tiền đã bán: <span class="text-danger"> <?= number_format($tongTienDaBan, 0, '.', ',') ?> đ</span></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>

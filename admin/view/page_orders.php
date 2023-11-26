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

// Lấy danh sách đơn hàng từ cơ sở dữ liệu
$sqlSelectOrders = "SELECT donhang.MaDonHang, khachhang.HoTen, khachhang.DiaChi, khachhang.Email, khachhang.SDT,donhang.NgayDatHang, donhang.TrangThai
                    FROM donhang
                    INNER JOIN khachhang ON donhang.MaKhachHang = khachhang.MaKhachHang
                    ORDER BY donhang.NgayDatHang DESC";
$stmtSelectOrders = $db->prepare($sqlSelectOrders);
$stmtSelectOrders->execute();
$orders = $stmtSelectOrders->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
<div class="p-5">
    <h3 class="text-center">QUẢN LÝ ĐƠN HÀNG</h3>
    <!-- <a href="?mod=product&act=add" class="btn btn-primary">Thêm sản phẩm</a> -->   
    <br> 
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-success">
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Ngày Đặt Hàng</th>
            <th>Trạng thái</th>
            <th>Quản lý</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($orders as $order) : ?>
            <tr>
                <td><?php echo $order['MaDonHang']; ?></td>
                <td><?php echo $order['HoTen']; ?></td>
                <td><?php echo $order['DiaChi']; ?></td>
                <td><?php echo $order['Email']; ?></td>
                <td><?php echo $order['SDT']; ?></td>
                <td><?php echo $order['NgayDatHang']; ?></td>
                <td><?php echo $order['TrangThai']; ?></td>
                <td>
                    <!-- Chức năng quản lý -->
                    <a class="btn-orders" href="order_detail.php?order=<?php echo $order['MaDonHang']; ?>">Xem chi tiết</a>
                    <a class="btn-orders" href="update_status.php?order=<?php echo $order['MaDonHang']; ?>">Cập nhật trạng thái</a>
                    <!-- Thêm các chức năng quản lý khác nếu cần -->
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
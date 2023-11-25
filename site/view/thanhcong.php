<?php
session_start();

// Kết nối đến cơ sở dữ liệu
try {
    $db = new PDO('mysql:host=localhost;dbname=myphamshop;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
    die();
}

function generateRandomOrderId($db) {
    // Tạo mã đơn hàng ngẫu nhiên
    $maDonHang =  mt_rand(100000000, 999999999);

    // Kiểm tra xem mã đơn hàng đã tồn tại trong cơ sở dữ liệu chưa
    $sqlCheckExistence = "SELECT COUNT(*) AS count FROM donhang WHERE MaDonHang = :maDonHang";
    $stmtCheckExistence = $db->prepare($sqlCheckExistence);
    $stmtCheckExistence->bindParam(':maDonHang', $maDonHang);
    $stmtCheckExistence->execute();
    $result = $stmtCheckExistence->fetch(PDO::FETCH_ASSOC);

    // Nếu mã đã tồn tại, thì tạo lại mã mới
    if ($result['count'] > 0) {
        return generateRandomOrderId($db);
    }

    return $maDonHang;
}

// Sử dụng hàm để tạo mã đơn hàng
$maDonHang = generateRandomOrderId($db);

// Lấy thời gian thực
$ngayDatHang = date('Y-m-d H:i:s');

// Tính tổng tiền của giỏ hàng (tạm thời sử dụng giá trị cố định)
$sum = 0;
foreach ($_SESSION['cart'] as $item) {
    $productTotal = $item['GiaKhuyenMai'] * $item['sl'];
    $sum += $productTotal; // Cộng dồn tổng tiền sản phẩm vào $sum
}

$sum += 30000;

// Lấy thông tin khách hàng từ session
if (isset($_SESSION['user']['MaKhachHang'])) {
    $maKhachHang = $_SESSION['user']['MaKhachHang'];
} else {
    // Xử lý nếu không có thông tin khách hàng trong session
    echo "Không có thông tin khách hàng trong session.";
    die();
}

try {
    // Thêm thông tin đơn hàng vào bảng donhang
    $sqlInsertDonHang = "INSERT INTO donhang (MaDonHang, NgayDatHang, MaKhachHang, TongTien, TrangThai, GhiChu)
                  VALUES (:maDonHang, :ngayDatHang, :maKhachHang, :tongTien, 'Đang chờ xử lý', NULL)";
    
    $stmtInsertDonHang = $db->prepare($sqlInsertDonHang);
    
    // Bind các tham số
    $stmtInsertDonHang->bindParam(':maDonHang', $maDonHang);
    $stmtInsertDonHang->bindParam(':ngayDatHang', $ngayDatHang);
    $stmtInsertDonHang->bindParam(':maKhachHang', $maKhachHang);
    $stmtInsertDonHang->bindParam(':tongTien', $sum);
    
    // Thực thi truy vấn
    $stmtInsertDonHang->execute();

    // Lấy mã đơn hàng vừa thêm
    $maDonHangInserted = $db->lastInsertId();

    // Thêm thông tin chi tiết đơn hàng vào bảng chitietdonhang
    foreach ($_SESSION['cart'] as $item) {
        $maSanPham = $item['MaSanPham'];
        $soLuong = $item['sl'];
        $giaBan = $item['GiaKhuyenMai'];

        $sqlInsertChiTiet = "INSERT INTO chitietdonhang (MaDonHang, MaSanPham, SoLuong, GiaBan)
                             VALUES (:maDonHang, :maSanPham, :soLuong, :giaBan)";
        
        $stmtInsertChiTiet = $db->prepare($sqlInsertChiTiet);
        
        $stmtInsertChiTiet->bindParam(':maDonHang', $maDonHang); // Sử dụng mã đơn hàng đã tạo
        $stmtInsertChiTiet->bindParam(':maSanPham', $maSanPham);
        $stmtInsertChiTiet->bindParam(':soLuong', $soLuong);
        $stmtInsertChiTiet->bindParam(':giaBan', $giaBan);
        $stmtInsertChiTiet->execute();
    }

 

} catch (PDOException $e) {
    echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
    die();
}

// Tiếp tục với hiển thị thông tin đơn hàng hoặc chuyển hướng đến trang khác
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán thành công</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .payment-success {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .continue-shopping-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background-color: #cea679;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .continue-shopping-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="payment-success">
        <h1>Thanh toán thành công!</h1>
        <p>Cảm ơn bạn đã mua hàng</p>
        
        <a href="../index.php" class="continue-shopping-btn">Tiếp tục mua sắm</a>
        <a href="../view/trangthai.php" class="continue-shopping-btn">Xem đơn hàng</a>
    </div>

</body>
</html>

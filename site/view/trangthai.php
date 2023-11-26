<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng và đơn hàng</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 80%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        h2, h3 {
            color: #0066cc;
        }

        p {
            margin: 0;
            margin-bottom: 10px;
            color: #555;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        pre {
            margin: 0;
            font-family: inherit;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php
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

        // Lấy thông tin khách hàng từ session
        if (isset($_SESSION['user']['MaKhachHang'])) {
            $maKhachHang = $_SESSION['user']['MaKhachHang'];
        } else {
            // Xử lý nếu không có thông tin khách hàng trong session
            echo "Không có thông tin khách hàng trong session.";
            die();
        }

        // Lấy danh sách đơn hàng theo thứ tự ngày đặt hàng
    $sqlSelectOrders = "SELECT * FROM donhang WHERE MaKhachHang = :maKhachHang ORDER BY NgayDatHang DESC";
    $stmtSelectOrders = $db->prepare($sqlSelectOrders);
    $stmtSelectOrders->bindParam(':maKhachHang', $maKhachHang);
    $stmtSelectOrders->execute();
    $orders = $stmtSelectOrders->fetchAll(PDO::FETCH_ASSOC);

    $sqlSelectCustomer = "SELECT HoTen, SDT, DiaChi FROM khachhang WHERE MaKhachHang = :maKhachHang";
    $stmtSelectCustomer = $db->prepare($sqlSelectCustomer);
    $stmtSelectCustomer->bindParam(':maKhachHang', $maKhachHang);
    $stmtSelectCustomer->execute();
    $customerInfo = $stmtSelectCustomer->fetch(PDO::FETCH_ASSOC);
        ?>

        <h2>Danh sách đơn hàng:</h2>
        <ul>
            <?php foreach ($orders as $order) : ?>
                <h2>Thông tin khách hàng:</h2>
                <li>
                    <pre>Họ và tên: <?php echo $customerInfo['HoTen']; ?> <br/>Số điện thoại: <?php echo $customerInfo['SDT']; ?> <br/>Địa chỉ: <?php echo $customerInfo['DiaChi']; ?></pre>
                    Mã đơn hàng: <?php echo $order['MaDonHang']; ?><br>
                    Ngày đặt hàng: <?php echo $order['NgayDatHang']; ?><br>
                    Tổng tiền: <?php echo $order['TongTien']; ?><br>
                    Trạng thái: <?php echo $order['TrangThai']; ?><br>
                    Ghi chú: <?php echo $order['GhiChu']; ?><br>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>

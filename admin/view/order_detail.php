<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        session_start();

        try {
            $db = new PDO('mysql:host=localhost;dbname=myphamshop;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
            die();
        }

        if (isset($_GET['order'])) {
            $orderId = $_GET['order'];

            // Fetch order details
            $orderDetailQuery = "SELECT * FROM donhang WHERE MaDonHang = :orderId";
            $stmtOrderDetail = $db->prepare($orderDetailQuery);
            $stmtOrderDetail->bindParam(':orderId', $orderId, PDO::PARAM_INT);
            $stmtOrderDetail->execute();
            $orderDetail = $stmtOrderDetail->fetch(PDO::FETCH_ASSOC);

            if ($orderDetail) {
                // Fetch products related to the order
                $orderProductsQuery = "SELECT sanpham.MaSanPham, sanpham.TenSanPham, sanpham.Gia, sanpham.HinhAnh, chitietdonhang.SoLuong
                                      FROM chitietdonhang
                                      INNER JOIN sanpham ON chitietdonhang.MaSanPham = sanpham.MaSanPham
                                      WHERE chitietdonhang.MaDonHang = :orderId";
                $stmtOrderProducts = $db->prepare($orderProductsQuery);
                $stmtOrderProducts->bindParam(':orderId', $orderId, PDO::PARAM_INT);
                $stmtOrderProducts->execute();
                $orderProducts = $stmtOrderProducts->fetchAll(PDO::FETCH_ASSOC);

                // Calculate total price
                $totalPrice = 0;
                foreach ($orderProducts as $sp) {
                    $totalPrice += $sp['Gia'] * $sp['SoLuong'];
                }

                // Display order details and related products
                ?>
                <div class="p-5">
                    <h3 class="text-center">Chi Tiết Đơn Hàng</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã Đơn Hàng:</th>
                            <td><?=$orderDetail['MaDonHang']?></td>
                        </tr>
                        <tr>
                            <th>Ngày Đặt Hàng:</th>
                            <td><?=$orderDetail['NgayDatHang']?></td>
                        </tr>
                        <tr>
                            <th>Trạng Thái:</th>
                            <td><?=$orderDetail['TrangThai']?></td>
                        </tr>
                        <tr>
                            <th>Tổng Tiền:</th>
                            <td><?=number_format($totalPrice, 0, ",", ".")." đ"?></td>
                        </tr>
                    </table>

                    <h4>Thông tin sản phẩm:</h4>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="table-success">
                                <th>Mã SP</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orderProducts as $sp) : ?>
                                <tr>
                                    <td><?=$sp['MaSanPham']?></td>
                                    <td><?=$sp['TenSanPham']?></td>
                                    <td><?=number_format($sp['Gia'], 0, ",", ".")." đ"?> đ</td>
                                    <td><img src="../../content/img/<?=$sp['HinhAnh']?>" width="60px" alt=""></td>
                                    <td><?=$sp['SoLuong']?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php
            } else {
                // Display a message if the order is not found
                echo '<div class="text-center">Không tìm thấy đơn hàng!</div>';
            }
        } else {
            // Display a message if the order parameter is missing
            echo '<div class="text-center">Không có thông tin đơn hàng để hiển thị!</div>';
        }
        ?>
    </div>
</body>

</html>

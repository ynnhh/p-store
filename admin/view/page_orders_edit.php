<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Trạng Thái Đơn Hàng</title>
    <style>
        h2 {
  color: #333;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

button {
  background-color: green;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

button a {
  text-decoration: none;
  color: white;
}

button:hover {
  background-color: darkgreen;
}

form select, form button {
  margin-top: 10px;
}

p.success {
  color: green;
}

p.error {
  color: red;
}
    </style>
</head>

<body>

    <h2>Cập Nhật Trạng Thái Đơn Hàng</h2>
    <button type="button" style="text-align: center; background-color: green;">
    <a href="../?mod=order&act=list" style="text-decoration: none; color: white;">Quay lại</a>
</button></br>
    <?php
    // Kết nối CSDL
    $dburl = "mysql:host=localhost;dbname=myphamshop;charset=utf8";
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dburl, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
        die();
    }

    // Kiểm tra nếu có sự thay đổi trạng thái
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $maDonHang = $_POST["maDonHang"];

        // Kiểm tra xem trangThaiMoi có tồn tại trong $_POST không
        $trangThaiMoi = isset($_POST["trangThaiMoi"]) ? $_POST["trangThaiMoi"] : null;

        if ($trangThaiMoi !== null) {
            // Cập nhật trạng thái trong CSDL
            $updateQuery = "UPDATE donhang SET TrangThai = :trangThaiMoi WHERE MaDonHang = :maDonHang";
            $stmt = $db->prepare($updateQuery);
            $stmt->bindParam(':trangThaiMoi', $trangThaiMoi, PDO::PARAM_STR);
            $stmt->bindParam(':maDonHang', $maDonHang, PDO::PARAM_INT);
            $updateSuccess = $stmt->execute();
        } else {
            // Trường hợp trangThaiMoi không tồn tại trong $_POST
            echo "Cập nhật trạng thái";
        }
    }

    // Lấy danh sách đơn hàng từ CSDL
    $selectQuery = "SELECT * FROM donhang ORDER BY NgayDatHang DESC";
    $donHangStmt = $db->query($selectQuery);
    $donHangs = $donHangStmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php if (isset($updateSuccess)) : ?>
        <?php if ($updateSuccess) : ?>
            <p style="color: green;">Cập nhật trạng thái thành công!</p>
        <?php else : ?>
            <p style="color: red;">Cập nhật trạng thái thất bại. Vui lòng thử lại.</p>
        <?php endif; ?>
    <?php endif; ?>
   

    <table border="1">
        <thead>
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Ngày Đặt Hàng</th>
                <th>Trạng Thái</th>
                <th>Cập Nhật Trạng Thái</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donHangs as $donHang) : ?>
                <tr>
                    <td><?= $donHang['MaDonHang'] ?></td>
                    <td><?= $donHang['NgayDatHang'] ?></td>
                    <td><?= $donHang['TrangThai'] ?></td>
                    <td>
                        <form method="POST" action="">
                            <input type="hidden" name="maDonHang" value="<?= $donHang['MaDonHang'] ?>">
                            <select name="trangThaiMoi">
                                <option value="Đang chờ xử lý">Đang chờ xử lý</option>
                                <option value="Đã xác nhận đơn">Đã xác nhận đơn</option>
                                <option value="Đang đóng gói">Đang đóng gói</option>
                                <option value="Chờ vận chuyển">Chờ vận chuyển</option>
                                <option value="Đang vận chuyển">Đang vận chuyển</option>
                                <option value="Đã đến trạm giao hàng">Đã đến trạm giao hàng</option>
                                <option value="Đang giao hàng">Đang giao hàng</option>
                                <option value="Đã giao hàng">Đã giao hàng</option>
                                <option value="Giao hàng thành công">Giao hàng thành công</option>
                                <option value="Giao hàng không thành công">Giao hàng không thành công</option>
                                <option value="Đã hủy đơn">Đã hủy đơn</option>
                                <option value="Trả hàng">Trả hàng</option>
                                <!-- Thêm các trạng thái khác vào đây -->
                            </select>
                            <button type="submit">Cập Nhật Trạng Thái</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

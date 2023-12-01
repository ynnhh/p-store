<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Bao gồm nội dung đầu trang ở đây, như các thẻ meta, tiêu đề, bảng kiểu, v.v. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Thêm CSS tùy chỉnh nếu cần thiết */
        .checkout-section {
            padding: 40px 0;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        #payment-image {
            width: 300px;
            height: 300px;
        }
        .diachi {
        background-color: #f5f5f5; /* Màu nền của div */
        padding: 15px; /* Khoảng cách giữa nội dung và viền của div */
        border: 1px solid #ddd; /* Viền của div */
        margin-bottom: 20px; /* Khoảng cách giữa div và phần khác */
    }

    .diachi p {
        margin: 0; /* Loại bỏ khoảng trắng mặc định của các đoạn văn bản */
    }
    </style>
</head>

<body>
<?php
// Kết nối CSDL
try {
    $db = new PDO('mysql:host=localhost;dbname=myphamshop;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
}

// Chỉ hiển thị thông tin khách hàng
$userID = isset($_SESSION['user']['MaKhachHang']) ? intval($_SESSION['user']['MaKhachHang']) : 0;

if (!empty($userID)) {
    $query = "SELECT HoTen, SDT, DiaChi FROM khachhang WHERE MaKhachHang = :id";

    try {
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $userID, PDO::PARAM_INT);
        $stmt->execute();

        // Lấy thông tin khách hàng
        $customer = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if any data is fetched
        if ($customer !== false) {
            // Kiểm tra nếu một trong ba giá trị là null
            if ($customer['HoTen'] === null || $customer['SDT'] === null || $customer['DiaChi'] === null) {
                echo '<div id="infoForm" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 20px; border: 1px solid #ddd;">';
                echo '<form id="updateForm" action="update_customer_info.php" method="post">';
                echo '<label for="hoTen">Họ Tên:</label>';
                echo '<input type="text" id="hoTen" name="hoTen"><br>';
                echo '<label for="sdt">SĐT:</label>';
                echo '<input type="text" id="sdt" name="sdt"><br>';
                echo '<label for="diaChi">Địa Chỉ:</label>';
                echo '<input type="text" id="diaChi" name="diaChi"><br>';
                echo '<input type="button" value="OK" onclick="updateInfo()">';
                echo '</form>';
                echo '</div>';
            } 
        } 
    } catch (PDOException $e) {
        echo 'Lỗi truy vấn CSDL: ' . $e->getMessage();
    }
} else {
    echo 'ID không hợp lệ.';
}
?>
<script>
    function updateInfo() {
        // Lấy giá trị từ form
        var hoTen = document.getElementById('hoTen').value;
        var sdt = document.getElementById('sdt').value;
        var diaChi = document.getElementById('diaChi').value;

        // Gửi dữ liệu lên server (có thể sử dụng Ajax để gửi dữ liệu mà không cần tải lại trang)
        // Nếu sử dụng Ajax, bạn có thể gọi một trang PHP khác để xử lý việc cập nhật dữ liệu

        // Ẩn form khi đã xử lý xong
        document.getElementById('infoForm').style.display = 'none';

        // Load lại trang (bạn có thể sử dụng Ajax để load lại chỉ cần không muốn tải lại toàn bộ trang)
        location.reload();
    }
</script>


    <!-- Phần thanh toán bắt đầu -->
    <div class="checkout-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Mẫu thanh toán bắt đầu -->
                    <form class="checkout-form"method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="../site/view/thanhcong.php">
                        <div class="row row-40">

                            <div class="col-12 mb-60">
                                <h4 class="checkout-title">Tổng Giỏ Hàng</h4>
                                <div class="diachi">
                                    <h4>Thông tin:</h4>
                                    <?php
// Kết nối CSDL
try {
    $db = new PDO('mysql:host=localhost;dbname=myphamshop;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
}

// Chỉ hiển thị thông tin khách hàng
$userID = isset($_SESSION['user']['MaKhachHang']) ? intval($_SESSION['user']['MaKhachHang']) : 0;

if (!empty($userID)) {
    $query = "SELECT HoTen, SDT, DiaChi FROM khachhang WHERE MaKhachHang = :id";

    try {
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $userID, PDO::PARAM_INT);
        $stmt->execute();

        // Lấy thông tin khách hàng
        $customer = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if any data is fetched
        if ($customer !== false) {
            echo '<p>Tên: ' . $customer['HoTen'] . '</p>';
            echo '<p>SĐT: ' . $customer['SDT'] . '</p>';
            echo '<p>Địa chỉ: ' . $customer['DiaChi'] . '</p>';
        } else {
            echo '<p>Không tìm thấy thông tin địa chỉ.</p>';
        }
    } catch (PDOException $e) {
        echo 'Lỗi truy vấn CSDL: ' . $e->getMessage();
    }
} else {
    echo 'ID không hợp lệ.';
}
?>


                                </div>
                                <div class="checkout-cart-total">
                                    <h4>Sản Phẩm <span>Tổng</span></h4>
                                    <ul>
                                        <!-- Lặp qua từng sản phẩm trong giỏ hàng -->
                                        <?php
                                        $sum = 0; // Khởi tạo $sum ở đây
                                        foreach ($_SESSION['cart'] as $item):
                                            $productTotal = $item['GiaKhuyenMai'] * $item['sl'];
                                            $sum += $productTotal; // Cộng dồn tổng tiền sản phẩm vào $sum
                                            
                                      
                                        ?>
                                            <li><?= $item['TenSanPham'] ?> X <?= $item['sl'] ?> <span><?= number_format($productTotal, 0, ",", ".") ?> VND</span></li>
                                        
                                            <?php endforeach; ?>

                                    </ul>
                                    <p>Tổng Cộng <span><?= number_format($sum, 0, ",", ".") ?> VND</span></p>

                                    <!-- Phí giao hàng -->
                                    <p>Phí Giao Hàng: <span id="shipping-cost">30,000 VND</span></p>

                                    <h4>Tổng Thanh Toán <span id="total-payment"><?= number_format($sum + 30000, 0, ",", ".") ?> VND</span></h4>
                                </div>
                            </div>

                            <!-- Dropdown Phương thức giao hàng -->
                            <div class="col-12 mb-30">
                                <div class="form-group">
                                    <label for="shipping-method">Chọn Phương Thức Giao Hàng:</label>
                                    <select class="form-control" id="shipping-method" name="shipping-method">
                                        <option value="ghtk">GHTK (Giao Hàng Tiết Kiệm)</option>
                                        <option value="ghn">GHN (Giao Hàng Nhanh)</option>
                                        <option value="hoa-toc">Hỏa Tốc</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Dropdown Phương thức thanh toán -->
                            <div class="col-12 mb-30">
                                <div class="form-group">
                                    <label for="payment-method">Chọn Phương Thức Thanh Toán:</label>
                                    <select class="form-control" id="payment-method" name="payment-method" onchange="changePaymentImage()">
                                        <option value="cash">Thanh toán tiền mặt khi nhận hàng</option>
                                        <option value="wallet">Thanh toán qua ví điện tử</option>
                                        <option value="bank">Thanh toán qua ngân hàng</option>
                                    </select>
                                </div>
                            </div>
                            
                 

                            <!-- Phương thức thanh toán -->
                            <div class="col-12 mb-30">
                                <button class="place-order btn btn-lg btn-round" style="background-color: #cea679"><a href="../site/view/thanhcong.php" style="color: black; text-decoration: none">Đặt Hàng</a></button>
                            </div>
                        </div>
                    </form>
                    <!-- Mẫu thanh toán kết thúc -->
                </div>

               
            </div>
        </div>
    </div>
    <!-- Phần thanh toán kết thúc -->

    <!-- Bao gồm các tập lệnh và các phần tử cần thiết khác ở đây -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
    function changeShippingCost() {
        var shippingMethod = document.getElementById("shipping-method").value;

        // Thiết lập giá trị phí giao hàng dựa trên phương thức được chọn
        var shippingCost = 30000; // Phí mặc định
        if (shippingMethod === "ghn") {
            shippingCost = 40000;
        } else if (shippingMethod === "ghtk") {
            shippingCost = 30000;
        } else if (shippingMethod === "hoa-toc") {
            shippingCost = 50000;
        }

        // Cập nhật phí giao hàng trên giao diện
        document.getElementById("shipping-cost").innerText = shippingCost.toLocaleString() + " VND";
console.log(document.getElementById("shipping-cost").innerText)
        // Cập nhật tổng thanh toán
        var sum = <?= $sum ?>; // Lấy giá trị $sum từ PHP
        var totalPayment = sum + shippingCost;
        document.getElementById("total-payment").innerText = totalPayment.toLocaleString() + ' VND';
    }

    // Gọi hàm khi trang tải xong và khi có sự thay đổi trong dropdown
    document.addEventListener("DOMContentLoaded", function () {
        changeShippingCost();

        // Lắng nghe sự kiện khi có sự thay đổi trong dropdown
        document.getElementById("shipping-method").addEventListener("change", changeShippingCost);
    });
</script>
</body>

</html>

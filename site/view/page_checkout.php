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

    <!-- Phần thanh toán bắt đầu -->
    <div class="checkout-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Mẫu thanh toán bắt đầu -->
                    <form action="#" class="checkout-form">
                        <div class="row row-40">

                            <div class="col-12 mb-60">
                                <h4 class="checkout-title">Tổng Giỏ Hàng</h4>
                                <div class="diachi">
                                    <h4>Thông tin:</h4>
                                    <?php
// Kết nối CSDL
try {
    $db = new PDO('mysql:host=localhost;dbname=MyPhamShop;charset=utf8', 'root', '');
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
                                    <p>Phí Giao Hàng: <span>30,000 VND</span></p>

                                    <h4>Tổng Thanh Toán <span><?= number_format($sum + 30000, 0, ",", ".") ?> VND</span></h4>
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
                                <button class="place-order btn btn-lg btn-round" style="background-color: #cea679">Đặt Hàng</button>
                            </div>

                        </div>
                    </form>
                    <!-- Mẫu thanh toán kết thúc -->
                </div>

                <div class="col-lg-5" style="padding-left: 140px; padding-top: 150px">
                    <!-- Ảnh bên phải -->
                    <img id="payment-image" src="../content/img/thanhtoan1.jpg">
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
        function changePaymentImage() {
            var paymentMethod = document.getElementById("payment-method").value;
            var paymentImage = document.getElementById("payment-image");

            // Thay đổi hình ảnh dựa trên phương thức thanh toán được chọn
            if (paymentMethod === "wallet") {
                paymentImage.src = "../content/img/thanhtoan2.jpg";
            } else if (paymentMethod === "bank") {
                paymentImage.src = "../content/img/thanhtoan3.jpg";
            } else {
                paymentImage.src = "../content/img/thanhtoan1.jpg";
            }
        }
    </script>
</body>

</html>

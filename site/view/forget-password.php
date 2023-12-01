<div class="d-flex justify-content-center align-items-center">
  <div class="col-md-4 p-5">
    <h3 class="text-center mb-4 text-dark">QUÊN MẬT KHẨU</h3>
    <form method="post" action="">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
        <input type="email" class="form-control border border-primary" name="email" aria-describedby="emailHelp" required>
      </div>
      <div class="d-grid">
        <button class="btn btn-primary" type="submit" name="reset_password_submit">Gửi mật khẩu mới</button>
      </div>
    </form>
  </div>
<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=myphamshop;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Kết nối CSDL thất bại: ' . $e->getMessage();
    die();
}

// Nhận email từ người dùng
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];

    // Kiểm tra xem email có tồn tại hay không
    $sql = "SELECT * FROM khachhang WHERE Email = :email";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Email tồn tại

        // Tạo mật khẩu mới
        $new_password = generate_random_password();

        // Cập nhật mật khẩu trong cơ sở dữ liệu
        $sql = "UPDATE khachhang SET MatKhau = :new_password WHERE Email = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':new_password', $new_password);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        // Gửi mật khẩu mới qua email
        $subject = 'Mật khẩu mới của bạn';
        $message = "Mật khẩu mới của bạn là: $new_password";
        $headers = 'From: hancr04@gmail.com' . "\r\n" .
            'Reply-To: hancr04@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (mail($email, $subject, $message, $headers)) {
            // Gửi email thành công
            echo json_encode([
                'success' => true,
                'message' => 'Mật khẩu mới đã được gửi đến email của bạn.'
            ]);
        } else {
            // Gửi email thất bại
            echo json_encode([
                'success' => false,
                'message' => 'Không thể gửi mật khẩu mới qua email.'
            ]);
        }
    } else {
        // Email không tồn tại
        echo json_encode([
            'success' => false,
            'message' => 'Email không tồn tại hoặc không hợp lệ.'
        ]);
    }
}
// Đóng kết nối
$db = null;

// Hàm tạo mật khẩu ngẫu nhiên
function generate_random_password()
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $length = 8;
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
?>
</div>
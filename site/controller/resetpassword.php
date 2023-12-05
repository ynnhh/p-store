<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "../vendor/autoload.php";
require_once "../model_DAO/pdo.php";
require_once "view/forget-password.php";

// Xử lý form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["resetpass_submit"])) {
        $email = $_POST["email"];
        
        // Kiểm tra xem email có tồn tại trong bảng nguoidung hay không
        $query = "SELECT MaKhachHang FROM khachhang WHERE Email = :email";
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Tạo mật khẩu ngẫu nhiên
            $new_password = generateRandomPassword(); // Hàm tạo mật khẩu ngẫu nhiên
            
            // Mã hóa mật khẩu mới
            $hashed_password = $new_password;
            
            // Lấy ID người dùng
            $user_id = $result['MaKhachHang'];

            $expiry_time = date('Y-m-d H:i:s', strtotime('+10 minutes'));
            $generated_token = generateRandomToken(); 
            
            // Cập nhật mật khẩu mới cho người dùng
            $update_query = "UPDATE khachhang SET MatKhau = :hashed_password, reset_token = :token, token_expiry = :expiry_time WHERE MaKhachHang = :user_id";
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($update_query);
            $stmt->bindParam(':hashed_password', $hashed_password);
            $stmt->bindParam(':token', $generated_token);
            $stmt->bindParam(':expiry_time', $expiry_time);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();

            $mail = new PHPMailer(true);
            try {
                // Cấu hình SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'hancr04@gmail.com';
                $mail->Password = 'ztqlvjlcywdtmqon';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Gửi email với mật khẩu mới
                $mail->setFrom('hancr04@gmail.com', 'Pristine');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Reset Password';
                $mail->Body = 'Mật khẩu tạm thời: ' . $new_password . '<br>
                    <p>Vui lòng khi đăng nhập xong vào trang sửa mật khẩu và đổi mật khẩu tránh trường hợp bị lộ mật khẩu !!</p> <br>
                    <p style="color: red; font-size: 14px;">Pristine chân thành cảm ơn.</p>';
                   
                $mail->send();
                echo 'Email sent successfully';
            } catch (Exception $e) {
                echo "Email sending failed: {$mail->ErrorInfo}";
            }
        } else {
            echo "Email không tồn tại trong hệ thống";
        }
    }
}

// Check token hết hạn
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["token"])) {
    $token = $_GET["token"];
    $current_time = date('Y-m-d H:i:s');

    if ($token_expiry <= $current_time) {
        echo "<script>alert('Token đã hết hạn. Vui lòng tạo yêu cầu reset mật khẩu mới.');</script>";
    }
}


// Hàm tạo mật khẩu ngẫu nhiên
function generateRandomPassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
}

function generateRandomToken($length = 32) {
    $token = bin2hex(random_bytes($length / 2)); // Tạo token ngẫu nhiên có độ dài mong muốn
    return $token;
}


?>
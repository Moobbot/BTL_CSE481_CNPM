<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Chỉnh đường dẫn phù hợp với phần Tổ chức thư mục của BẠN
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
// Đóng gói đoạn xử lý gửi Email vào Function
    // 1. Cài đặt môi trường sử dụng phpmailer
    // 2. Tạo ra đối tượng PHPMailer
    $mail = new PHPMailer(true); //Biến $mail đang là 1 object

    // 3. Xử lý gửi Email thông qua đối tượng $mail
    // Quá trình này có thể có lỗi phát sinh, dừng thực thi chương trình.
    try {
        // Cấu hình tài khoản (Server) để gửi Email
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output
        $mail->isSMTP(); // gửi mail SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'duya7k50@gmail.com'; // SMTP username
        // Thay bằng tài khoản của các bạn
        $mail->Password = 'arvxmtuiknvmncal'; // SMTP password bqicengzsrdwtrdf
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        // Cấu hình thuộc tính hiển thị của người gửi - người nhận
        $mail->setFrom('duya7k50@gmail.com', 'Thư feedback');
        // Tên hiển thị: TÊN CÁC BẠN, ví dụ: Nguyễn Sơn Lâm

        $mail->addReplyTo($data["email"], 'Xác nhận đăng kí tài khoản');

        $mail->addAddress('duya7k50@gmail.com'); // Đây là địa chỉ Email người nhận > sau này sẽ là BIẾN

        // Tiêu đề Email là gì?
        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = '[Feedback]'.$data["topic"];
        // Nội dung Email
        $mail->Body = $data["message"];
        // Tệp tên đính kèm Email gửi đi
        // $mail->addAttachment('pdf/Giay_bao_mat_sau.pdf'); // Nếu bạn muốn đính kèm tệp tin gửi đi
        // Gửi thư
        if ($mail->send()) {
            ?>
<script>
alert("Thư gửi thành công")
</script>
<?php
        }
    } catch (Exception $e) {
        ?>
<script>
alert("Có vấn đề xảy ra, vui lòng kiểm tra lại!")
</script>
<?php
    }
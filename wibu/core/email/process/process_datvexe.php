
<?php
include_once('./send.php');
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $cccd = $_POST['cccd'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    define('HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'db_xekhach');

    $conn = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn)); //Database Connection



    $sql = "INSERT INTO `vexe`(`ma_chuyenxe`,`diemdon_khach`, `hoten_khach`, `sdt_khach`, `email_khach`, `cmt_khach`) 
    VALUES (1,'$address','$username','$phone','$email','$cccd')";

    $result = mysqli_query($conn, $sql);

    if ($result > 0) {
        echo "Thành công";

        sendEmail();
    } else {
        echo "Thất bại";
    }
}

?>

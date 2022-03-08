
<?php
include_once('./send.php');
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $cccd = $_POST['cccd'];
    $address = $_POST['address'];
    $email = $_POST['email'];

 





    

    if ($result > 0) {
        echo "Thành công";

        sendEmail();
    } else {
        echo "Thất bại";
    }
}

?>

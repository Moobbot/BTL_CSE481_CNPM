<!-- Chứa các hàm liên quan đến bảng vé xe -->
<?php
class vexeModel extends Database
{
    public function Newdatve($username, $phone, $cccd, $address, $email)
    {
        $sql = "INSERT INTO vexe
                (ma_chuyenxe, diemdon_khach, hoten_khach, sdt_khach, email_khach, cmt_khach) 
                VALUES (1,'$address','$username','$phone','$email','$cccd')
                ";

        $result = false;
        if (mysqli_query($this->con, $sql)) {
            require_once "./wibu/core/email/sendVexe.php";
        }
    }
}

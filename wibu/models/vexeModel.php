<!-- Chứa các hàm liên quan đến bảng vé xe -->
<?php
class vexeModel extends Database
{
    public function Newdatve($ma_chuyenxe,$username, $phone, $cccd, $address, $email)
    {
        $sql = "INSERT INTO `vexe`(`ma_chuyenxe`, `diemdon_khach`, `gia_ve`, `hoten_khach`, `sdt_khach`, `email_khach`, `cmt_khach`) 
                VALUES ('$ma_chuyenxe','$address','1000000','$username','$phone','$email','$cccd') ";


        $result = false;
        if (mysqli_query($this->con, $sql)) {
            require_once "./wibu/core/email/sendVexe.php";
            $result = true ;
        }
        json_encode($result);

    }
    public function GetLichtrinh($ma_chuyenxe)
    {
        //connect DB
        $cxc = "SELECT * FROM  vw_chuyenxechay where ma_chuyenxe = '$ma_chuyenxe' ";
        return mysqli_query($this->con, $cxc);
    }
    
}

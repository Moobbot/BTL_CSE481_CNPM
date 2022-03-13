<?php
//Kết nối DB
class adminModel extends Database
{
    public function GetNhaxe()
    {
        //connect DB
        $nx = "SELECT * FROM nhaxe";
        return mysqli_query($this->con, $nx);
    }

    public function InsertNhaxe()
    {
        //connect DB
        $nx = "SELECT * FROM nhaxe"; //Lệnh Insert
        return mysqli_query($this->con, $nx);
    }

    public function GetChuyenXe()
    {
        //connect DB
        $qr = "SELECT * FROM chuyenxe";
        return mysqli_query($this->con, $qr);
    }

    public function InsertChuyenXe()
    {
        //connect DB
        $nx = "SELECT * FROM ChuyenXe"; //Lệnh Insert
        return mysqli_query($this->con, $nx);
    }


    public function CheckTaikhoan($username, $pass)
    {
        //connect DB
        $nx = "SELECT * FROM taikhoan WHERE ten_taikhoan = '$username' AND matkhau = '$pass'";
        $result = false;
        if (mysqli_query($this->con, $nx)) {
            $result = true;
        }
        return json_encode($result);
    }
    // if (isset($_POST['btnSave'])) {
    //     // $ma = $_POST['ma_nhaxe'];
    //     $ten = $_POST['ten_nhaxe'];
    //     $sodt = $_POST['sodt_nhaxe'];
    //     $dc = $_POST['dc_nhaxe'];
    //     $mota = $_POST['mota_nhaxe'];

    //     $sql2 = "INSERT INTO `nhaxe`(`ten_nhaxe`, `sdt_nhaxe`, `diachi_nhaxe`, `mota_nhaxe`) VALUES ('$ten','$sodt','$dc','$mota')";

    //     $result = mysqli_query($conn, $sql2);

    //     if ($result > 0) {
    //         header("location:nhaxe.php");
    //     } else {
    //         echo "Lỗi!";
    //     }

    //     mysqli_close($conn);
    // }
}

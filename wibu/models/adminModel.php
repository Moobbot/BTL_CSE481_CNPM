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
    // sửa nhà xe
    public function SetNhaxe($id_nhaxe, $ten_nhaxe, $sodt_nhaxe, $dc_nhaxe, $mota_nhaxe){
        $sql = "UPDATE `nhaxe` SET`ten_nhaxe`='$ten_nhaxe',`sdt_nhaxe`='$sodt_nhaxe',`diachi_nhaxe`='$dc_nhaxe',`mota_nhaxe`='$mota_nhaxe' WHERE  `ma_nhaxe`='$id_nhaxe'";
        $result = mysqli_query($this->con, $sql);
        if($result > 0 ){
            return true;
        }
        else{
            return false;
        }
    }

    public function DeleteNhaxe($id_nhaxe){
        // Xóa xe liên quan đến nhà xe trong chuyến xe chạy
        $sql1 ="DELETE FROM chuyenxechay where ma_xe IN (SELECT ma_xe FROM xe WHERE ma_nhaxe = '$id_nhaxe')";
        $result1 = mysqli_query($this->con, $sql1);

        //  Xóa xe liên quan đến nhà xe trong bảng xe
        $sql2 = "DELETE FROM xe where ma_nhaxe = '$id_nhaxe'";
        $result2 = mysqli_query($this->con, $sql2);

        // Xóa nhà xe
        $sql3 = "DELETE FROM nhaxe where ma_nhaxe = '$id_nhaxe'";
        $result3 = mysqli_query($this->con, $sql3);

        if($result3 > 0){
            return true;
        }
        else{
            return false;
        }
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

    public function GetChuyenxechay()
    {
        //connect DB
        $nx = "SELECT * FROM `chuyenxechay`";
        return mysqli_query($this->con, $nx);
    }
    
    public function GetTuyenduong()
    {
        //connect DB
        $nx = "SELECT * FROM `tuyenduong`";
        return mysqli_query($this->con, $nx);
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
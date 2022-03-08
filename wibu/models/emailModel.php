<?php
//Kết nối DB
class emailModel extends Database
{
    // public function UpVe($address,$username,$phone,$email,$cccd)
    // {
    //     //connect DB
    //     $sql = "INSERT INTO `vexe`(`ma_chuyenxe`,`diemdon_khach`, `hoten_khach`, `sdt_khach`, `email_khach`, `cmt_khach`) 
    //     VALUES (1,'$address','$username','$phone','$email','$cccd')";
    
    //     $result = mysqli_query($conn, $sql);
    // }
    public function Huyve($mave)
    {
        //connect DB
        $cx = "DELETE FROM vexe WHERE mave = $mave";
        return mysqli_query($this->con, $cx);
    }
    public function Listall(){
     $sql ="SELECT * FROM vexe ";
     $rows = mysqli_query($this->con, $sql);
     $mang = array ();
     while ($row = mysqli_fetch_array($rows))
     {
         $mang[] = $row ;
     }
     return json_encode($mang);

}
}

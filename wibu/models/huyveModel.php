<?php
//Kết nối DB
class HuyveModel extends Database
{
    public function GetMave($id)
    {
        //connect DB
        $qr = "SELECT * FROM vexe where ma_ve = '$id'";
        return mysqli_query($this->con, $qr);
    }

    public function HuyVe($id)
    {
        //connect DB
        $qr = "DELETE FROM `vexe` WHERE ma_ve = '$id'";
        return mysqli_query($this->con, $qr);
    }
}

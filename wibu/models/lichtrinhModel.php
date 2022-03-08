<?php
//Kết nối DB
class lichtrinhModel extends Database
{
    public function GetThoigianCxe()
    {
        //connect DB
        $cx = "SELECT DISTINCT giodi_chuyenxe FROM chuyenxe";
        return mysqli_query($this->con, $cx);
    }

    public function GetTuyenduong()
    {
        //connect DB
        $cx = "SELECT * FROM tuyenduong";
        return mysqli_query($this->con, $cx);
    }
    public function GetLichtrinh()
    {
        //connect DB
        $cx = "SELECT * FROM  vw_chuyenxechay";
        return mysqli_query($this->con, $cx);
    }
}

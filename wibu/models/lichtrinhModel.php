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

    public function GetLichtrinh()
    {
        //connect DB
        $cxc = "SELECT * FROM  vw_chuyenxechay";
        return mysqli_query($this->con, $cxc);
    }

    public function GetTuyenduong()
    {
        $cx = "SELECT * FROM tuyenduong";
        return mysqli_query($this->con, $cx);
    }
    public function GetTuyenduong2()
    {
        $cx = "SELECT * FROM tuyenduong";
        return mysqli_query($this->con, $cx);
    }
}

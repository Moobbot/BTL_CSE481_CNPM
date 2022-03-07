<?php
//Kết nối DB
class HomeModel extends Database
{

    public function GetChuyenxe()
    {
        //connect DB
        $cx = "SELECT * FROM chuyenxe";
        return mysqli_query($this->con, $cx);
    }
    public function GetNhaxe()
    {
        //connect DB
        $nx = "SELECT * FROM nhaxe";
        return mysqli_query($this->con, $nx);
    }
}

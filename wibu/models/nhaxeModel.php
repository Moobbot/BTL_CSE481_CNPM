<?php
//Kết nối DB
class NhaxeModel extends DB
{
    public function GetNhaxe()
    {
        //connect DB
        return "Nhà xe A";
    }
    public function Tong($x, $y)
    {
        return $x + $y;
    }
    public function Nhaxe()
    {
        $qr = "SELECT * FROM nhaxe";
        return mysqli_query($this->con, $qr);
    }
}

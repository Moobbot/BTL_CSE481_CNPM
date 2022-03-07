<?php
//Kết nối DB
class NhaxeModel extends Database
{
    public function GetNhaxe()
    {
        //connect DB
        $nx = "SELECT * FROM nhaxe";
        return mysqli_query($this->con, $nx);
    }
}

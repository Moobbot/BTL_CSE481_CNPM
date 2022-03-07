<?php
//Kết nối DB
class nxchitietModel extends Database
{
    public function GetNhaxe($id)
    {
        //connect DB
        $nx = "SELECT * FROM nhaxe WHERE ma_nhaxe = $id";
        return mysqli_query($this->con, $nx);
    }
}

<?php
//Kết nối DB
class emailModel extends Database
{
    public function UpVe()
    {
        //connect DB
        $cx = "SELECT * FROM ve";
        return mysqli_query($this->con, $cx);
    }
    public function Huyve($mave)
    {
        //connect DB
        $cx = "DELETE FROM vexe WHERE mave = $mave";
        return mysqli_query($this->con, $cx);
    }
}

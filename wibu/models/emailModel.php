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
}

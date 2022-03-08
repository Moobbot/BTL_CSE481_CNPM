<?php
class datve extends Controller
{
    public $datveModel;
    public function __construst()
    {
        $this -> datveModel = $this -> model("datveModel");

    }
    function SayHi()
    {
        $email = $this->model("emailModel");
        $this->view(
            "page_khach",
            [
                "Page" => "datveView"
            ]
        );
    }
    public function khachhangdatve(){
        // Bước 1 get data khách hàng nhập
        if(isset($_POST["btnthanhtoan"]))
        {
        $username = $_POST["username"];
        $phone = $_POST["phone"];
        $cccd = $_POST["cccd"];
        $address = $_POST["address"];
        $email = $_POST["email"];
          // Bước 2 insert datebase
    echo     $this ->datveModel ->  Newdatve($username,$phone,$cccd,$address,$email);
        // echo $kq;
      
    
        // Bước 3 show (sendemail)
        }
    }
    
}

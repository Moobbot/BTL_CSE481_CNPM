<?php
class datve extends Controller
{
    public $vexeModel;
    public function  __construct()  
    {
        $this -> vexeModel = $this -> model("vexeModel");

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
    if (isset($_POST["btndatve"])) {
        $username = $_POST["username"];
        $ma_chuyenxe = $_POST["ma_chuyenxe"];
        $phone = $_POST["phone"];
        $cccd = $_POST["cccd"];
        $address = $_POST["address"];
        $email = $_POST["email"];
    }
    // Bước 2 insert datebase bảng vexe
    $kq = $this->vexeModel->Newdatve($ma_chuyenxe,$username, $phone, $cccd, $address, $email);
     
    if ($kq) {
        $this->view(
            "page_khach",
            [
                "Page" => "datveView"
            ]
        );
 

    }
}

    public function Lichtrinh($ma_chuyenxe)
    {
        $ma_cx = $this->model("vexeModel");
        $this->view(
            "khongview",
            [
                "Page" => "datveView",
                "Macx" => $ma_cx->GetLichtrinh($ma_chuyenxe)
                
            ]
        );
    }
}
<?php
class datve extends Controller
{
    public $vexeModel;
    public function __construct()
    {
        $this->vexeModel = $this->model("vexeModel");
    }
    public function SayHi()
    {
        $email = $this->model("emailModel");
        $this->view(
            "page_khach",
            [
                "Page" => "datveView"
            ]
        );
    }
    // public function trangdatve($a)
    // {
    //     $this->view(
    //         "khongview",
    //         [
    //             "Page" => "nhaxe_chitietView",
    //             "Lichtrinh" => $this->vexeModel->GetLichtrinh($a)
    //         ]
    //     );
    // }
    public function khachhangdatve()
    {
        // Bước 1 get data khách hàng nhập
        if (isset($_POST["btnthanhtoan"])) {
            $ma_chuyenxe = $_POST["ma_chuyenxe"];
            $username = $_POST["username"];
            $phone = $_POST["phone"];
            $cccd = $_POST["cccd"];
            $address = $_POST["address"];
            $email = $_POST["email"];
        }
        // Bước 2 insert datebase bảng vexe
        $kq = $this->vexeModel->Newdatve($ma_chuyenxe, $username, $phone, $cccd, $address, $email);
        // Bước 3 show "OK/Fail"(sendemail)
        if ($kq) {
            $this->view(
                "page_khach",
                [
                    "Page" => "datveView"
                ]
            );
        }
?>
        <a href="http://localhost/BTL_CSE481_CNPM/"> Quay lại</a>
<?php
    }
}

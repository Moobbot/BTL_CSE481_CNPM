<?php
class huyve extends Controller
{
    public $vexeModel;

    public function __construct()
    {
        $this->vexeModel = $this->model("huyveModel");
    }

    public function id($id)
    {
        $mave = $this->model("huyveModel");
        $this->view(
            "khongview",
            [
                "Page" => "huyveView",
                "Mave" => $mave->GetMave($id),
            ]
        );
    }

    public function khachhuyve()
    {
        if (isset($_POST["huy"])) {
            $name = $_POST["name"];
            $sdt = $_POST["sdt"];
            $cccd = $_POST["cccd"];
            $ma = $_POST["mave"];
            $email = $_POST["email"];
        }

        $kq = $this->vexeModel->HuyVe($ma);
        if ($kq) {
            echo "Bạn đã huỷ vé thành công";
        } else echo "Xin lỗi, bạn không thể huỷ vé do quá thời gian quy định!";
    }
}


    // $form = false;
    // echo $_POST["name"];
    // if (isset($_POST["sendemail"])) {
    //     $form = true;
    //     $name = $_POST["name"];
    //     $sdt = $_POST["sdt"];
    //     $ma_ve = $_POST["mave"];
    //     $email = $_POST["email"];

    // $mave->HuyVe($ma_ve);

    //

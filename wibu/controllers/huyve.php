<?php
class huyve extends Controller
{
    function id($id)
    {
        $mave = $this->model("huyveModel");
        $this->view(
            "khongview",
            [
                "Page" => "huyveView",
                "Mave" => $mave->GetMave($id),
            ]
        );
        $form = false;
        // echo $_POST["name"];
        if (isset($_POST["sendemail"])) {
            $form = true;
            $name = $_POST["name"];
            $sdt = $_POST["sdt"];
            $ma_ve = $_POST["mave"];
            $email = $_POST["email"];
            // echo $email;
            echo $_POST["name"];

            // $mave->HuyVe($ma_ve);

            // $this->sendmailhuy(
            //     [
            //         "form" => $form,
            //         "name" => $name,
            //         "sdt" => $sdt,
            //         "mave" => $ma_ve,
            //         "email" => $email
            //     ]
            // );
        }
    }
}

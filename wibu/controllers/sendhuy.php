<?php
class sendhuy extends Controller
{
    function SayHi()
    {
        $mave = $this->model("huyveModel");
        $this->view(
            "khongview",
            [
                "Page" => "huyveView",
            ]
        );
        $form = false;
        if (isset($_POST["huyve"])) {
            $form = true;
            $name = $_POST["name"];
            $sdt = $_POST["sdt"];
            $mave = $_POST["mave"];
            $email = $_POST["email"];

            $mave->HuyVe($mave);

            // $this->sendmailhuy(
            //     [
            //         "form" => $form,
            //         "name" => $name,
            //         "sdt" => $sdt,
            //         "mave" => $mave,
            //         "email" => $email
            //     ]
            // );
        }
    }
}

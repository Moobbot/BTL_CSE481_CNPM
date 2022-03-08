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
                "Mave" => $mave->GetMave($id)
            ]
        );

        $form = false;
        if (isset($_POST["huyve"])) {
            $form = true;
            $name = $_POST["name"];
            $sdt = $_POST["sdt"];
            $mave = $_POST["mave"];
            $email = $_POST["email"];

            $mave->HuyVe($id);
            $this->sendmailhuy(
                [
                    "form" => $form,
                    "name" => $name,
                    "sdt" => $sdt,
                    "mave" => $mave,
                    "email" => $email
                ]
            );
        }
    }
}

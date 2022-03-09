<?php
class lienhe extends Controller
{
    function SayHi()
    {
        $this->view(
            "page_khach",
            [
                "Page" => "lienheView"
            ]
        );
        $form = false;
        if (isset($_POST["sendemail"])) {
            $form = true;
            $message = $_POST["message"];
            $name = $_POST["name"];
            $topic = $_POST["topic"];
            $email = $_POST["email"];

            $this->sendController(
                [
                    "form" => $form,
                    "message" => $message,
                    "name" => $name,
                    "topic" => $topic,
                    "email" => $email
                ]
            );
        }
    }
}

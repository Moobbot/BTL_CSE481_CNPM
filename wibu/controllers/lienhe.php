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
    }
    function sendemail(){
        if(isset($_POST["sendemail"])){
            $message = $_POST["message"];
            $name = $_POST["name"];
            $topic = $_POST["topic"];
            $email = $_POST["email"];
        }
    }    
}
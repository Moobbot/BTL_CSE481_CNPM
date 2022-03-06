<?php
class lienhe extends Controller
{
    function SayHi()
    {
<<<<<<< HEAD
        $lienhe = $this->view("lienhe");

    }
    function ResultForm(){
        if(isset($_POST["submit"])){
            
        }
=======
        $this->view(
            "page_khach",
            [
                "Page" => "lienheView"
            ]
        );
>>>>>>> main
    }
}

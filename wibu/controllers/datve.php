<?php
class datve extends Controller
{
    function SayHi()
    {
        $email = $this->model("emailModel");
        $this->view(
            "page_khach",
            [
                "Page" => "datveView",
                "Ve" => $email->UpVe()
            ]
        );
    }
}

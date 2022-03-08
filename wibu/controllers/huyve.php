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
    }
}

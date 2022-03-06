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
}

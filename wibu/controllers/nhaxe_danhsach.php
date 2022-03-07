<?php
class nhaxe_danhsach extends Controller
{
    function SayHi()
    {
        $nhaxe = $this->model("nhaxeModel");
        $this->view(
            "page_khach",
            [
                "Page" => "nhaxeView",
                "Nhaxe" => $nhaxe->Nhaxe()
            ]
        );
    }
}

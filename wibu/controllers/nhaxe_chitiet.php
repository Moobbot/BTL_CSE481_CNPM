<?php
class nhaxe_chitiet extends Controller
{
    function SayHi()
    {
        $nhaxe = $this->model("nhaxeModel");
        $this->view(
            "page_khach",
            [
                "Page" => "nhaxe_chitietView",
                "Nhaxe" => $nhaxe->Nhaxe()
            ]
        );
    }
}

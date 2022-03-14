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
                "Nhaxe" => $nhaxe->Getnhaxe(),
                "NhaxeID" => $nhaxe->GetNhaxeID($id)
            ]
        );
    }
    function Show($id)
    {
        $nhaxe = $this->model("nxchitietModel");
        $this->view(
            "khongview",
            [
                "Page" => "nhaxe_chitietView",
                "Nhaxe" => $nhaxe->Getnhaxe($id)
            ]
        );
    }
}

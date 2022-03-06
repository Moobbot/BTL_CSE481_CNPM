<?php
class home extends Controller
{
    function SayHi()
    {
        $nhaxe = $this->model("nhaxeModel");
        echo $nhaxe->GetNhaxe();
    }
    function Show($a, $b)
    {
        //Model - Xử lý dữ liệu
        $nhaxe = $this->model("nhaxeModel");
        $tong = $nhaxe->Tong($a, $b);

        // View
        $this->view("chuyenxeView", [
            "Page" => "page_khach",
            "Number" => $tong,
            "Mau" => "#ddd",
            "Nhaxe" => $nhaxe->Nhaxe()
        ]); //key=>value
    }
}

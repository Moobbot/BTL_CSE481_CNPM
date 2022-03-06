<?php
class home extends Controller
{
    function SayHi()
    {
        $nhaxe = $this->model("nhaxeModel");
        $this->view("page_khach", [
            "Page" => "chuyenxeView"
            //,"Nhaxe" => $nhaxe->Nhaxe()
        ]);
    }
    function Show($a, $b)
    {
        //Model - Xử lý dữ liệu
        $nhaxe = $this->model("nhaxeModel");
        $tong = $nhaxe->Tong($a, $b);

        // View
        $this->view("page_khach", [
            "Page" => "chuyenxeView",
            "Number" => $tong,
            "Mau" => "#ddd",
            "Nhaxe" => $nhaxe->Nhaxe()
        ]); //key=>value
    }
}

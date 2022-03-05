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
        //Xử lý dữ liệu
        $nhaxe = $this->model("nhaxeModel");
        $tong = $nhaxe->Tong($a, $b);
        $this->view("nhaxeView", [
            "Number" => $tong,
            "Mau" => "#ddd"
        ]); //key=>value
    }
    function nhaxe()
    {
        // Gọi modal ->  dữ liệu nhà lưu array
        // Gọi view -> card
        // for len(array)
    }
}

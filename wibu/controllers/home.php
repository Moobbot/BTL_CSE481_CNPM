<?php
class home extends Controller
{
    function SayHi()
    {
        $home = $this->model("homeModel");
        $this->view(
            "page_khach",
            [
                "Page" => "homeView",
                "Chuyenxe" => $home->GetChuyenxe(),
                "Nhaxe" => $home->GetNhaxe()
            ]
        );
    }
}

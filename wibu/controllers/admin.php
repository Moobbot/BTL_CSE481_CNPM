<?php
class admin extends Controller
{
    function SayHi()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin",
            [
                "Page" => "adminView",
                "Nhaxe" => $admin->GetNhaxe()
            ]
        );
    }
}

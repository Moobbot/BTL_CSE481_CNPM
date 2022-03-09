<?php
class admin extends Controller
{
    public function SayHi()
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
    public function nhaxe()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin2",
            [
                "Page" => "nhaxeView",
                "Nhaxe" => $admin->GetNhaxe()
            ]
        );
    }
}

<?php
class admin extends Controller
{
    public function SayHi()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin",
            [
                "Page" => "admin_trangchuView",
                "Nhaxe" => $admin->GetNhaxe()
            ]
        );
    }
    public function nhaxe()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin-2",
            [
                "Page" => "./admin_nhaxeView",
                "Nhaxe" => $admin->GetNhaxe()
            ]
        );
    }
}

<?php
class login_admin extends Controller
{
    function SayHi()
    {
        // $login = $this->model("processLoginAdmin");
        $this->view(
            "page_admin",
            [
                "Page" => "loginAdminView",
                // "Login" => $login->GetLogin()
            ]
        );
    }
}
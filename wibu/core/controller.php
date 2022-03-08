<!-- Hàm gọi modal, view -->
<?php
class Controller
{
    //Hàm gọi model
    public function model($model)
    {
        require_once "./wibu/models/" . $model . ".php";
        return new $model; //<=> $a = new $model;
    }

    //Hàm gọi view
    public function view($view, $data = [])
    {
        require_once "./wibu/views/" . $view . ".php";
    }
    //hàm gọi gửi email
    public function sendmailhuy($data)
    {
        if ($data["form"]) {
            require_once "./wibu/core/email/sendHuyve.php";
        }
    }
}

<?php
class login_admin extends Controller
{
    public $adminModel;

    public function __construct()
    {
        $this->adminModel = $this->model("adminModel");
    }

    function SayHi()
    {
        $this->view(
            "page_login",
            []
        );
    }
    public function login()
    {
        // Bước 1 get data khách hàng nhập
        if (isset($_POST["btnlogin"])) {
            $username = $_POST["username"];
            $pass = $_POST["password"];
        }
        // Bước 2 insert datebase bảng vexe
        $kq = $this->adminModel->CheckTaikhoan($username, $pass);

        // Bước 3 show "OK/Fail"
        if ($kq) {
            // Chưa xử lý đăng nhập được
        }
    }
}

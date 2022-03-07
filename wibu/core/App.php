<!-- 
    //*Code tập trung tại đây
    //* Nơi xử lý thanh địa chỉ.
    //*Nơi gọi controllers, modals, views
-->
<?php
class App
{
    protected $controller = "home"; //protected để bảo mật
    protected $action = "SayHi";
    protected $params = [];

    function __construct()
    {
        $arr = $this->UrlProcess();
        //Controller

        //Kiểm tra file có tồn tại không.

        if (isset($arr) && file_exists("./wibu/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }

        require_once "./wibu/controllers/" . $this->controller . ".php";

        $this->controller = new $this->controller; //Coi controller như màn hình

        //Action - được chạy

        if (isset($arr[1])) {
            //Kiểm tra tồn tại hàm không
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //Params
        $this->params = $arr ? array_values($arr) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    // function xử lý url
    function UrlProcess()
    {
        if (isset($_GET["url"])) {
            //Loại bỏ khoảng trắng - trim
            return explode("/", filter_var(trim($_GET["url"], "/"))); //Cắt chuỗi theo dấu "/"
        }
    }
}

<!-- 
    //*Code tập trung tại đây
    //*Nơi gọi controllers, modals, views
-->
<?php
class App
{
    //http://localhost/BTL_CSE481_CNPM/home/SayHi/4
    protected $controller = "home"; //protected để bảo mật
    protected $action = "SayHi";
    protected $params = [];

    function __construct()
    {
        // Array ( [0] => home [1] => SayHi [2] => 4 )
        $arr = $this->UrlProcess();
        // print_r($arr);

        //Xử lí Controller
        //Kiểm tra file có tồn tại không.
        if (file_exists("./wibu/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            //Sau khi chạy hủy đi cho chuỗi dưới ko còn nữa
            unset($arr[0]);
        }
        require_once "./wibu/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        //Xử lí Action - được chạy
        if (isset($arr[1])) {
            //Kiểm tra tồn tại hàm không
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //Xử lí Params
        $this->params = $arr ? array_values($arr) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    // function xử lý url
    function UrlProcess()
    {
        //home/SayHi/4
        if (isset($_GET["url"])) {
            //Loại bỏ khoảng trắng - trim
            //Cắt chuỗi theo dấu "/"
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}

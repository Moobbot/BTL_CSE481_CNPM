<?php
// if (!isset($_SESSION['current_user'])) {
//     header("location:login_admin");
// }
// $client_user = $_SESSION['current_user'];
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wibu Admin | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <!-- bootstrap5 -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/style_admin.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body id="body-pd">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <!-- Bên trong load trang gồm: -->
            <div class="preloader-inner position-relative">
                <!-- Vòng quay xung quanh img -->
                <div class="preloader-circle"></div>
                <!-- img -->
                <div class="preloader-img">
                    <img src="../assets/img/logo/logo.png" alt="Zala">
                    <!-- class="img-fluid"> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <div class="container-fluid p-0" style="min-height: 95vh;">
        <?php
        require_once("wibu/views/pages/" . $data["Page"] . ".php");
        ?>
    </div>
    <!-- JS here -->
    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap-->
    <script src="../assets/js/vendor/jquery-3.6.0.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Sidebar -->
    <script src="../assets/js/sidebarjs.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <!-- //*Tránh các lỗi về giao diện điều khiển trong các trình duyệt thiếu bảng điều khiển. -->
    <script src="../assets/js/plugins.js"></script>
    <!-- //*Các hiệu ứng sự kiện phần thân -->
    <script src="../assets/js/main.js"></script>
</body>

</html>
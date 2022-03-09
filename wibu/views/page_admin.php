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
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/style_admin.css">
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body id="body-pd">
    <?php
    require_once('wibu/views/blocks/load_and_up.php');
    ?>
    <div class="container-fluid p-0" style="min-height: 95vh;">
        <header class="header" id="header">
            <div class="header_toggle "> <i class="fas fa-bars " style="color: #e35d6a;" id="header-toggle"></i> </div>
        </header>
        <div class="l-navbar" id="nav-bar" style="background-color: #e35d6a;">
            <nav class="nav">
                <div>
                    <span class=" nav_logo nav_logo-name"></span>
                    <div class="nav_list">
                        <a href="admin.php" class="nav_link" id="dashboard">
                            <i class="fas fa-chart-line nav_icon"></i>
                            <span class="nav_name">Home</span>
                        </a>
                        <a href="./admin/nhaxe" class="nav_link" id="class">
                            <i class="fas fa-school nav_icon"></i>
                            <span class="nav_name">Nhà xe</span>
                        </a>

                    </div>
                </div>
                <!-- <a href="#" class="nav_link"> <span class="nav_name">SignOut</span> </a> -->
                <div class="dropdown pb-4 ps-2">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://avatars.githubusercontent.com/u/90234391?s=48&v=4" alt="hugenerd" class=" header_img rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                        <li><a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt me-3"></i> Thoát</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <?php
        require_once("wibu/views/pages/" . $data["Page"] . ".php");
        ?>
    </div>
    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap-->
    <script src="./assets/js/vendor/jquery-3.6.0.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Sidebar -->
    <script src="./assets/js/sidebarjs.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <!-- //*Tránh các lỗi về giao diện điều khiển trong các trình duyệt thiếu bảng điều khiển. -->
    <script src="./assets/js/plugins.js"></script>
    <!-- //*Các hiệu ứng sự kiện phần thân -->
    <script src="./assets/js/main.js"></script>
</body>

</html>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wibu Xe khách | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <!-- bootstrap5 -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>
    <?php
    require_once('wibu/views/blocks/load_and_up.php');
    ?>
    <header>
        <!-- Header Start -->
        <div class="header-area" id="header">
            <div class="main-header header-sticky">
                <nav class="navbar navbar-expand-md navbar-light" style="background-color: #f3f5ff;">
                    <div class="header-left">
                        <!-- Logo -->
                        <a href="#" class="navbar-brand logo">
                            <img class="d-inline-block align-center img-fluid" src="../assets/img/logo/logo.png" alt="logo Wibu">
                            <span class="hidden">Wibu</span>
                        </a>
                    </div>
                    <button type="button" class="btn-menu-mobile navbar-toggler" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="main-menu collapse navbar-collapse" id="toggleMobileMenu">
                        <ul class="navbar-nav text-start mx-auto">
                            <li class="nav-item active">
                                <a href="../admin"> Trang chủ </a>
                            </li>
                            <li class="nav-item">
                                <a href="../admin/nhaxe"> Nhà xe </a>
                            </li>
                            <li class="nav-item">
                                <a href="../admin/xe"> Xe </a>
                            </li>
                            <li class="nav-item">
                                <a href="../admin/chuyenxe"> Chuyến xe</a>
                            </li>
                            <li class="nav-item">
                                <a href="../admin/chuyenxechay"> Chuyến xe chạy </a>
                            </li>
                            <li class="nav-item">
                                <a href="../admin/tuyenduong"> Tuyến đường </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right" style="width: 150px;">
                        <!-- <a href="#" class="header-btn2">Đặt ngay!</a> -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <div class="container-fluid p-0">
        <?php
        require_once("wibu/views/pages/" . $data["Page"] . ".php");
        ?>
    </div>
    <!-- Footer Start-->
    <footer class="bd-footer py-3 position-relative bottom-0 start-0 end-0" style="background-color: #ffc0cb6e;">
        <div class="container py-2">
            <p class="text-center h4">
                Thiết kế bởi <a href="https://github.com/Moobbot/BTL_CSE481_CNPM">Wibu</a>
            </p>
        </div>
    </footer>
    <!-- Footer End-->
    <!-- JS here -->
    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap-->
    <script src="../assets/js/vendor/jquery-3.6.0.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->

    <!-- Jquery Plugins, main Jquery -->
    <!-- //*Tránh các lỗi về giao diện điều khiển trong các trình duyệt thiếu bảng điều khiển. -->
    <script src="../assets/js/plugins.js"></script>
    <!-- //*Các hiệu ứng sự kiện phần thân -->
    <script src="../assets/js/main.js"></script>
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</body>

</html>
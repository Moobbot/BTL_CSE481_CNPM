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
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
        <!-- ? Preloader Start -->
        <div id="preloader-active">
                <div class="preloader d-flex align-items-center justify-content-center">
                        <!-- Bên trong load trang gồm: -->
                        <div class="preloader-inner position-relative">
                                <!-- Vòng quay xung quanh img -->
                                <div class="preloader-circle"></div>
                                <!-- img -->
                                <div class="preloader-img">
                                        <img src="../../assets/img/logo/logo.png" alt="Zala">
                                        <!-- class="img-fluid"> -->
                                </div>
                        </div>
                </div>
        </div>
        <!-- Preloader Start -->
        <!-- Scroll Up -->
        <div id="back-top">
                <a title="Go to Top" href="#header"> <i class="fas fa-level-up-alt"></i></a>
        </div>
        <header>
    <!-- Header Start -->
    <div class="header-area" id="header">
        <div class="main-header header-sticky">
            <nav class="navbar navbar-expand-md navbar-light" style="background-color: #f3f5ff;">
                <div class="header-left">
                    <!-- Logo -->
                    <a href="#" class="navbar-brand logo">
                        <img class="d-inline-block align-center img-fluid" src="../../assets/img/logo/logo.png" alt="logo Wibu">
                        <span class="hidden">Wibu</span>
                    </a>
                </div>
                <button type="button" class="btn-menu-mobile navbar-toggler" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="main-menu collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav text-start mx-auto">
                        <li class="nav-item active">
                            <a href="./../../" class="active"> Trang chủ </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"> Vé xe liên tỉnh </a>
                        </li>
                        <li class="nav-item">
                            <a href="./../../nhaxe_danhsach"> Nhà xe </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"> Lịch trình </a>
                        </li>
                        <li class="nav-item">
                            <a href="./../../lienhe"> Liên hệ </a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="header-right">
                    <a href="#" class="header-btn2">Đặt ngay!</a>
                </div> -->
            </nav>
        </div>
    </div>
    <!-- Header End -->
</header>
        <div class="container-fluid p-0" style="min-height: 95vh;">
                <?php
                require_once("wibu/views/pages/" . $data["Page"] . ".php");
                ?>
        </div>
        <!-- Footer Start-->
       
                <footer>
                        <div class="footer-area footer-padding">
                                <div class="container">
                                        <div class="row d-flex justify-content-between">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                                        <div class="footer-tittle">
                                                                <!-- logo -->
                                                                <div class="footer-logo mb-30">
                                                                        <a href="index.html"><img src="../../assets/img/logo/logo2_footer.png" alt="" style="width: 160px;"></a>
                                                                </div>
                                                                <!-- Slogan -->
                                                                <div class="footer-pera">
                                                                        <p>Wibu là một nền tảng online mà người dùng có thể tìm kiếm và lựa chọn địa điểm đón là một cách thuận tiện, nhanh chóng.</p>
                                                                </div>
                                                                <!-- social -->
                                                                <div class="footer-social">
                                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                                        <a href="https://www.facebook.com/ZALA-105335955389063"><i class="fab fa-facebook-f"></i></a>
                                                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-30">
                                                        <div class="footer-tittle">
                                                                <h4 class="mb-30">Giới thiệu</h4>
                                                                <ul>
                                                                        <li><a>- Về chúng tôi</a></li>
                                                                        <li><a>- Nhà xe</a></li>
                                                                        <li><a>- Tuyến đường</a></li>
                                                                        <li><a>- Hỗ trợ</a></li>
                                                                        <li><a>- Chứng nhận</a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-4">
                                                        <div class="footer-tittle">
                                                                <h4 class="mb-30">Liên hệ</h4>
                                                                <ul>
                                                                        <li class="number"><a>(+84) 33345198</a></li>
                                                                        <li><a>wibuxekhach.vn@gmail.com</a></li>
                                                                        <li><a>175 Tây Sơn, Trung Liệt, Đống Đa, Hà Nội</a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- footer-bottom area -->
                        <div class="footer-bottom-area section-bg2" data-background="assets/img/gallery/footer-bg.png">
                                <div class="container">
                                        <div class="footer-border">
                                                <div class="row d-flex align-items-center">
                                                        <div class="col-xl-12">
                                                                <div class="text-center">
                                                                        <p> </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </footer>

        <!-- Footer End-->
        <!-- JS here -->
        <script src="../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap-->
        <script src="../../assets/js/vendor/jquery-3.6.0.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->

        <!-- Jquery Plugins, main Jquery -->
        <!-- //*Tránh các lỗi về giao diện điều khiển trong các trình duyệt thiếu bảng điều khiển. -->
        <script src="../../assets/js/plugins.js"></script>
        <!-- //*Các hiệu ứng sự kiện phần thân -->
        <script src="../../assets/js/main.js"></script>
</body>

</html>
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
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    include_once('wibu/views/blocks/load_and_up.php');
    include_once('wibu/views/blocks/header.php');
    ?>
    <div class="container" style="min-height: 95vh;">
        <?php
        include_once("wibu/views/pages/" . $data["Page"] . ".php");
        ?>
    </div>
    <!-- Footer Start-->
    <?php include_once('wibu/views/blocks/footer.php'); ?>

    <!-- Footer End-->
    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap-->
    <script src="./assets/js/vendor/jquery-3.6.0.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->

    <!-- Jquery Plugins, main Jquery -->
    <!-- //*Tránh các lỗi về giao diện điều khiển trong các trình duyệt thiếu bảng điều khiển. -->
    <script src="./assets/js/plugins.js"></script>
    <!-- //*Các hiệu ứng sự kiện phần thân -->
    <script src="./assets/js/main.js"></script>
</body>

</html>
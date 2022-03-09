<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS here -->
    <!-- bootstrap5 -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Login admin</title>
</head>

<body>
    <?php
    //session_start(); // bắt đầu cho người đăng nhập
    if (empty($_SESSION['current_user'])) {
    ?>
        <main data-background="https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg">
            <div class="main-area">
                <section class="login-area">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-12 col-xl-11">
                                <div class="card text-black" style="border-radius: 25px;">
                                    <div class="card-body p-md-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center">
                                                <div class="mx-4">
                                                    <div class=" d-flex justify-content-center">
                                                        <img src="assets/img/logo/logo2_footer.png" class="img-fluid" alt="">
                                                    </div>
                                                    <h2 class="x mt-4">Chúng tôi đem tới nền tảng kết nối nhà xe đến với gia đình của bạn.
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-lg-6 col-xl-5 br-l">
                                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng nhập</p>
                                                <form class="mx-1 mx-md-4" action="./login_admin/login" method="POST">
                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <div class="form-outline flex-fill mb-0">
                                                            <input type="text" id="username" class="form-control" name="username" placeholder="Tên tài khoản" />
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <div class="form-outline flex-fill mb-0">
                                                            <input type="password" id="pass" class="form-control" name="password" placeholder="Mật khẩu" />
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                        <button type="submit" name="btnlogin" class="btn btn-primary btn-lg">Đăng nhập</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    <?php
    } else {
        $client_user = $_SESSION['current_user'];

        header('location:admin.php');
    }


    ?>

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
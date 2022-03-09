<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Wibu</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/2b6d70a29b.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!-- Start Nav -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-1">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="https://raw.githubusercontent.com/Moobbot/WebWibu/main/assets/img/Logo.jpg" alt=""
                class="img-fluid" style="width: 120px; height: 60px;">
            <!-- Điều hướng -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 fs-3 mb-md-0 h5">
                    <li class="nav-item">
                        <a class="nav-link custom-color fw-bold" href="index.php"><i class="fas fa-home"></i>Trang
                            chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-color fw-bold" href="accounts.php">Tài khoản</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-color fw-bold" href="emp.php">Nhân viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-color fw-bold" href="foods.php">Món ăn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-color fw-bold" href="orders.php">Đơn hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Nav -->
    <?php
//Create Constants to Store Non Repeating Values
$conn = mysqli_connect('localhost', 'root', '', 'db_xekhach') or die(mysqli_error($conn)); //Database Connection
?>

<main>
    <div class="height-100 bg-light">
        <div class="col py-3 ">
            <div class="container">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <h2>Trang chủ</h2>
                </div>

                <div class="row mt-3 py-md-5  justify-content-around">
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                        <div class="ps-3 my-3">
                            <p>Nhà xe liên kết</p>
                            <p class="text-center fw-bold fs-2">
                                <?php

                                $sql = "SELECT COUNT(ma_nhaxe) AS nx_sum FROM nhaxe;";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php echo $row['nx_sum']; ?>
                                <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                        <div class="ps-3 my-3">
                            <p>Số xe hiện có</p>
                            <p class="text-center fw-bold fs-2">
                                <?php

                                $sql = "SELECT COUNT(ma_xe) AS st_sum FROM xe;";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php echo $row['st_sum']; ?>
                                <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-around">
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-school"></i></div>
                        <div class="ps-3 my-3">
                            <p>Tổng doanh thu</p>
                            <p class="text-center fw-bold fs-2">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-book-open"></i></div>
                        <div class="ps-3 my-3">
                            <p>Tổng vé xe</p>
                            <p class="text-center fw-bold fs-2">
                                <?php

                                $sql = "SELECT COUNT(ma_ve) AS st_sum FROM vexe;";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php echo $row['st_sum']; ?>
                                <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</main>

<footer class="bd-footer py-3" style="background-color: #ffc0cb6e;">
    <div class="container py-2">
        <p class="text-center h4">
            Thiết kế bởi <a href="https://github.com/Moobbot/WebWibu">Wibu</a>
        </p>
    </div>
</footer>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Link JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

</html>
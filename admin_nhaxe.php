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
    <!-- config -->
    <?php
//Create Constants to Store Non Repeating Values
$conn = mysqli_connect('localhost', 'root', '', 'db_xekhach') or die(mysqli_error($conn)); //Database Connection
?>
<!-- Start Main -->
<div class="container-fluid custom-background" style="min-height: 85vh; height: auto; max-height: 200vh;">
    <div class="container pb-5">
        <h3 class="pt-5 pb-4 fw-bold">Quản lý nhà xe</h3>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-food-modal">
            <i class="fas fa-plus pe-2"></i>Thêm nhà xe</button>

        <div class="modal fade" id="add-food-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm Nhà xe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <!-- <div class="container-fluid"> -->
                        <!-- <div class="row"> -->
                        <div class="">
                            <div class="form-floating mb-3">
                                <!-- <label>Loại</label> -->
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="ten" placeholder="">
                                <label>Tên nhà xe</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="phone" class="form-control" id="gia" placeholder="">
                                <label>SĐT</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="sl" placeholder="">
                                <label>Địa chỉ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="hsd" placeholder="">
                                <label>Mô tả</label>
                            </div>
                        </div>

                        <!-- <div class="col-md-6 ms-auto">
                            <div class="form-floating mb-3">
                                <img src="https://cf.shopee.vn/file/71a0d3bd42c6a7bbf54574745eebb82c" class="img-thumbnail" alt="...">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="button" value="Hình ảnh" onclick="document.getElementById('file').click()" />
                                <input type="file" id="file" style="display:none" />
                            </div>
                        </div> -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="add">Đồng ý</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container mt-4">
            <table id="table_acc" class="cell-border table-bordered table-responsive-md">
                <thead>
                    <tr class="text-center">
                        <th>STT</th>
                        <th>Mã nhà xe</th>
                        <th>Tên nhà xe</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Mô tả</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- thay đổi dữ liệu theo CSDL -->
                    <?php
                    //* B1: Gọi config
                
                    //* B2: Truy vấn
                    $i = 1;
                    $sql = "SELECT *  FROM nhaxe ";
                    //? lưu kết quả trả về $result
                    $result = mysqli_query($conn, $sql);
                    //* B3: Phân tích sử lý kết quả
                    if (mysqli_num_rows($result) > 0) :
                        while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                            <tr>
                                <th><?php echo  $i; ?></th>
                                <td><?php echo $row['ma_nhaxe']; ?></td>
                                <td><?php echo $row['ten_nhaxe']; ?></td>
                                <td class="text-end"><?php echo $row['sdt_nhaxe']; ?></td>
                                <td class="text-end"><?php echo $row['diachi_nhaxe']; ?></td>
                                <!-- <td style=""></?php echo $row['mota']; ?></td> -->
                                <td class="text-center"><?php echo $row['mota_nhaxe']; ?></td>
                                <!-- <td class="d-flex justify-content-evenly"> -->
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#passchange">Sửa</button>
                                    <button type="button" class="btn btn-danger del" name="<?php echo $row['ma_nhaxe'] ?>">Xóa</button>
                                </td>
                            </tr>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    //* B4: đóng kết nối
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>

            <!-- <div class="modal fade" id="passchange" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cập nhật món ăn</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                                            <label for="floatingInput">Tên món</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                                            <label for="floatingInput">Thành phần</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                                            <label for="floatingInput">Đơn giá</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="">
                                            <label for="floatingInput">Số lượng</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                            <label for="floatingInput">Mô tả</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 ms-auto">
                                        <div class="form-floating mb-3">
                                            <img src="https://cf.shopee.vn/file/71a0d3bd42c6a7bbf54574745eebb82c" class="img-thumbnail" alt="...">
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="button" value="Hình ảnh" onclick="document.getElementById('file').click()" />
                                            <input type="file" id="file" style="display:none" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="funcUpd()">Đồng ý</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>

</div>
<!-- End Main -->

<script>
    $(document).ready(function() {
        $('#table_acc').DataTable();
    });
</script>

<script>
    function funcUpd() {
        if (confirm("Bạn có chắc muốn cập món ăn này không?") == true) {
            location.reload()
            alert("Cập nhật thành công!");
        }
    }

    function funcAddSuccess() {
        location.reload()
        alert("Thêm món ăn thành công!")
    }
</script>

<script>
    $(document).ready(function() {
        $('#add').click(function() {
            $loai = $('#loai').val();
            $ten = $('#ten').val();
            $gia = $('#gia').val();
            $sl = $('#sl').val();
            $hsd = $('#hsd').val();

            if ($loai == "" || $ten == "" || $gia == "" || $sl == "" || $hsd == "") {
                alert("Vui lòng nhập đủ thông tin");
            } else {
                $.ajax({
                    type: "post",
                    url: "./process/add-food.php",
                    data: {
                        loai: $loai,
                        ten: $ten,
                        gia: $gia,
                        sl: $sl,
                        hsd: $hsd,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Thêm món ăn thành công");
                            location.reload()
                        } else {
                            alert("Thêm thất bại");
                        }
                    }
                });
            }
        });

        // xoá tài khoản

        $('.del').click(function() {
            $delId = $(this).attr('name');
            if (confirm("Bạn có chắc muốn món này không?")) {
                //? nếu đồng ý
                $.ajax({
                    type: "post",
                    url: "./process/del-food.php",
                    data: {
                        delId: $delId,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Xoá món ăn thành công!")
                            location.reload()
                        } else if (response == 'error') {
                            alert("Xoá món ăn thất bại")
                        }
                    }
                });
            } else return false;
        });

    });
</script>
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
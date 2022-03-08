<?php
include './header_admin.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container-fluid ">
                <div class="row mt-3 pt-3 border-bottom border-dark">
                    <div class="col-md-6">
                        <h2>Danh sách nhà xe</h2>
                    </div>
                </div>


            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <div class="row">
                    <div class="py-2">
                        <button type="button" class="btn btn-primary btn-md btn-outline-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-user-plus"></i> Thêm Nhà Xe
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm Nhà Xe</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">

                                            <!-- <div class="mb-3">
                                                <label for="subjectid" class="form-label">Mã Nhà Xe</label>
                                                <input type="text" class="form-control" name="subjectid" id="ma_nhaxe">
                                            </div> -->
                                            <div class="mb-3">
                                                <label for="subjectname" class="form-label">Tên Nhà Xe</label>
                                                <input type="text" class="form-control" name="subjectname" id="ten_nhaxe">
                                            </div>
                                            <div class="mb-3">
                                                <label for="subjectname" class="form-label">Số điện thoại</label>
                                                <input type="text" class="form-control" name="subjectname" id="sodt_nhaxe">
                                            </div>
                                            <div class="mb-3">
                                                <label for="subjectname" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" name="subjectname" id="dc_nhaxe">
                                            </div>
                                            <div class="mb-3">
                                                <label for="subjectname" class="form-label">Mô tả</label>
                                                <input type="text" class="form-control" name="subjectname" id="mota_nhaxe">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-primary" name="btnSave">Thêm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover table-striped " id="example">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Mã Nhà Xe</th>
                            <th scope="col">Tên Nhà Xe</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include 'config.php';
                        $sql = "SELECT  * FROM nhaxe ";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['ma_nhaxe']; ?> </th>
                                    <td><?php echo $row['ten_nhaxe']; ?></td>
                                    <td><?php echo $row['sdt_nhaxe']; ?></td>
                                    <td><?php echo $row['diachi_nhaxe']; ?></td>
                                    <td><?php echo $row['mota_nhaxe']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="?id=<?php echo  $row['ma_nhaxe'] ?>"><i class="fas fa-user-edit"></i></a>
                                        <a class="btn btn-danger" href="php?id=<?php echo  $row['ma_nhaxe'] ?>"><i class="fas fa-user-slash"></i></a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
<script>
    // $('#example').DataTable({
    //     "language": {
    //         "infoFiltered": "(được lọc từ MAX bản ghi )",
    //         "info": "Hiển thị trang PAGE trong tổng PAGES trang",
    //         "infoEmpty": "Không có dữ liệu",
    //         "lengthMenu": "Hiển thị MENU dữ liệu",
    //         "loadingRecords": "Đang tải...",
    //         "paginate": {
    //             "first": "Đầu tiên",
    //             "last": "Cuối cùng",
    //             "next": "Sau",
    //             "previous": "Trước"
    //         },
    //         "search": "Tìm kiếm:",
    //         "zeroRecords": "Không tìm thấy kết quả",
    //     }
    // });
    $('#example').DataTable({
    language: {
        processing: "Message khi đang tải dữ liệu",
        search: "Tìm kiếm: ",
        lengthMenu: "Điều chỉnh số lượng bản ghi trên 1 trang _MENU_ ",
        info: "Bản ghi từ _START_ đến _END_ Tổng công _TOTAL_ bản ghi",
        infoEmpty: "Khi không có dữ liệu, Hiển thị 0 bản ghi trong 0 tổng cộng 0 ",
        infoFiltered: "(Message bổ sung cho info khi không search đc record nào _MAX_)",
        loadingRecords: "",
        zeroRecords: "Không tìm thấy kết quả",
        emptyTable: "Không có dữ liệu",
        paginate: {
            first: "Trang đầu",
            previous: "Trang trước",
            next: "Trang sau",
            last: "Trang cuối"
        },
        aria: {
            sortAscending: ": Message khi đang sắp xếp theo column",
            sortDescending: ": Message khi đang sắp xếp theo column",
        }
    },
});

</script>
<?php
if (isset($_POST['btnSave'])) {
    // $ma = $_POST['ma_nhaxe'];
    $ten = $_POST['ten_nhaxe'];
    $sodt = $_POST['sodt_nhaxe'];
    $dc = $_POST['dc_nhaxe'];
    $mota = $_POST['mota_nhaxe'];
    if($ten == '' || $sodt == ''|| $dc == '' || $mota == ''){?>
        <script>
            alert('Bạn cần phải nhập đầy đủ thông tin');
        </script>
<?php
    }else{

        $sql2 = "INSERT INTO `nhaxe`(`ten_nhaxe`, `sdt_nhaxe`, `diachi_nhaxe`, `mota_nhaxe`) VALUES ('$ten','$sodt','$dc','$mota')";
    
        $result = mysqli_query($conn, $sql2);
    
        if ($result > 0) {
    ?>
        <script>
            window.location.href = 'nhaxe.php';
        </script>
    <?php
        } else {
            echo "Lỗi!";
        }
    
        mysqli_close($conn);
    }
    
}
    ?>
    
<?php
include './footer_admin.php';
?>
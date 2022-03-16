<div class="container-fluid custom-background" style="min-height: 85vh; height: auto; max-height: 200vh;">
    <div class="container pb-5">
        <h3 class="pt-5 pb-4 fw-bold">Tuyến đường</h3>

        <button type="button" class="btn btn-primary btn-md " data-bs-toggle="modal" data-bs-target="#add_chuyenxechay">
            <i class="fas fa-user-plus"></i> Thêm tuyến đường
        </button>

        <div class="modal fade" id="add_chuyenxechay" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm tuyến đường</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST">
                        <div class="modal-body">
                            <!-- <div class="mb-3">
                                <label for="subjectname" class="form-label">tuyến đường</label>
                                <input type="text" class="form-control" name="ten_nhaxe">
                            </div> -->
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Điểm đi</label>
                                <input type="text" class="form-control" name="sodt_nhaxe">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Điểm đến</label>
                                <input type="text" class="form-control" name="sodt_nhaxe">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="subjectname" class="form-label">Trạng thái</label>
                                <input type="text" class="form-control" name="dc_nhaxe"> -->
                                <input type="button" value="Hình ảnh"
                                    onclick="document.getElementById('file').click()" />
                                <input type="file" id="file" style="display:none" />
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

        <!-- Model sửa -->
        <div class="modal fade" id="edit_chuyenxechay" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Thông Tin tuyến đường</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Điểm đi</label>
                                <input type="text" class="form-control" name="sodt_nhaxe">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Điểm đến</label>
                                <input type="text" class="form-control" name="sodt_nhaxe">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="subjectname" class="form-label">Trạng thái</label>
                                <input type="text" class="form-control" name="dc_nhaxe"> -->
                                <input type="button" value="Hình ảnh"
                                    onclick="document.getElementById('file').click()" />
                                <input type="file" id="file" style="display:none" />
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


        <div class="container mt-4">
            <table class="table table-hover table-striped" id="example">
                <thead>
                    <tr class="table-info">
                        <th scope="col">Mã tuyến đường</th>
                        <th scope="col">Điểm đi</th>
                        <th scope="col">Điểm đến</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($data["tuyenduong"])) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['ma_tuyenduong']; ?> </th>
                        <td><?php echo $row['diemdi_tuyenduong']; ?></td>
                        <td><?php echo $row['diemden_tuyenduong']; ?></td>
                        <td><img src="<?php echo $row['hinhanh_tuyenduong']; ?>" alt="" id="imgmap" style="height:80px">
                        </td>
                        <td>
                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_chuyenxechay"><i
                                    class="fas fa-user-edit"></i></a>
                            <a class="btn btn-danger"><i class="fas fa-user-slash"></i></a>
                        </td>
                    </tr>

                    <?php
                    }

                    ?>

                </tbody>
            </table>

        </div>
    </div>

</div>

<script>
$('#example').DataTable({
    language: {
        processing: "Message khi đang tải dữ liệu",
        search: "Tìm kiếm: ",
        lengthMenu: "Điều chỉnh số lượng bản ghi trên 1 trang MENU ",
        info: "Bản ghi từ START đến END Tổng công TOTAL bản ghi",
        infoEmpty: "Khi không có dữ liệu, Hiển thị 0 bản ghi trong 0 tổng cộng 0 ",
        infoFiltered: "(Message bổ sung cho info khi không search đc record nào MAX)",
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

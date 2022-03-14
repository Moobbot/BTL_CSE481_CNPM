<div class="container-fluid custom-background" style="min-height: 85vh; height: auto; max-height: 200vh;">
    <div class="container pb-5">
        <h3 class="pt-5 pb-4 fw-bold">Nhà Xe</h3>

        <button type="button" class="btn btn-primary btn-md " data-bs-toggle="modal" data-bs-target="#add_nhaxe">
            <i class="fas fa-user-plus"></i> Thêm Nhà Xe
        </button>

        <div class="modal fade" id="add_nhaxe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm Nhà Xe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Tên Nhà Xe</label>
                                <input type="text" class="form-control" name="ten_nhaxe">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" name="sodt_nhaxe">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" name="dc_nhaxe">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Mô tả</label>
                                <input type="text" class="form-control" name="mota_nhaxe">
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
        <div class="modal fade" id="edit_nhaxe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Thông Tin Nhà Xe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="nhaxe">
                        <div class="modal-body">
                            <input type="hidden" class="form-control" name="id_nhaxe" id="edit_manhaxe_id">
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Tên Nhà Xe</label>
                                <input type="text" class="form-control" name="ten_nhaxe" id="edit_tennhaxe_id">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" name="sodt_nhaxe" id="edit_sodienthoai_id">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" name="dc_nhaxe" id="edit_diachi_id">
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Mô tả</label>
                                <input type="text" class="form-control" name="mota_nhaxe" id="edit_mota_id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary" name="btnSave">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- modal xóa -->
        <div class="modal fade" id="delete_nhaxe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa nhà xe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="nhaxe">
                        <div class="modal-body">
                            <input type="hidden" id="id_nhaxe_delete" name="deleteNhaxeID" value="">
                            <p>Bạn có muốn xóa?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-danger" name="btnDelete" value=" "
                                id="deleteButton">Xóa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="container mt-4">
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

                    while ($row = mysqli_fetch_assoc($data["Nhaxe"])) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['ma_nhaxe']; ?> </th>
                        <td><?php echo $row['ten_nhaxe']; ?></td>
                        <td><?php echo $row['sdt_nhaxe']; ?></td>
                        <td><?php echo $row['diachi_nhaxe']; ?></td>
                        <td><?php echo $row['mota_nhaxe']; ?></td>
                        <td>
                            <a class="btn btn-warning editClass" data-bs-toggle="modal" data-bs-target="#edit_nhaxe"
                                name='<?php echo $row['ma_nhaxe'] . ',' . $row['ten_nhaxe'] . ',' . $row['sdt_nhaxe'] . ',' . $row['diachi_nhaxe'] . ',' . $row['mota_nhaxe'];  ?>'><i
                                    class="fas fa-user-edit"></i></a>
                            <a class="btn btn-danger deleteClass" name='<?php echo $row['ma_nhaxe'];?>'
                                data-bs-toggle="modal" data-bs-target="#delete_nhaxe"><i
                                    class="fas fa-user-slash"></i></a>
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
// bắt class edit, lấy name, tách name, gán dữ liệu
$(document).ready(function() {
    $('.editClass').click(function() {
        $id = $(this).attr('name');
        $ma_nhaxe = $id.split(",")[0];
        $ten_nhaxe = $id.split(",")[1];
        $sdt_nhaxe = $id.split(",")[2];
        $diachi_nhaxe = $id.split(",")[3];
        $mota_nhaxe = $id.split(",")[4];

        $('#edit_manhaxe_id').val($ma_nhaxe);
        $('#edit_tennhaxe_id').val($ten_nhaxe);
        $('#edit_sodienthoai_id').val($sdt_nhaxe);
        $('#edit_diachi_id').val($diachi_nhaxe);
        $('#edit_mota_id').val($mota_nhaxe);
    })
    $('.deleteClass').click(function() {
        $id = $(this).attr('name');
        $('#id_nhaxe_delete').val($id);
    });


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
})
</script>
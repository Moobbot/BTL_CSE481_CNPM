<div class="container-fluid custom-background" style="min-height: 85vh; height: auto; max-height: 200vh;">
    <div class="container pb-5">
        <h3 class="pt-5 pb-4 fw-bold">Danh Sách Xe</h3>

        <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#add_chuyenxe">
            <i class="fas fa-user-plus"></i> Thêm Xe
        </button>

        <div class="modal fade" id="add_xe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm Xe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Mã Nhà Xe</label>
                                <input type="text" class="form-control" name="ma_nhaxe" required>
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Mã Xe</label>
                                <input type="text" class="form-control" name="ma_xe" required>
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Biển Số</label>
                                <input type="text" class="form-control" name="bienso_xe" required>
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Số Ghế Xe</label>
                                <input type="text" class="form-control" name="soghe_xe" required>
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
        <div class="modal fade" id="edit_chuyenxe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Thông Tin Chuyến Xe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Mã Nhà Xe</label>
                                <input type="text" class="form-control" name="ma_chuyenxe" required>
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Mã Xe</label>
                                <input type="text" class="form-control" name="matd_chuyenxe" required>
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Biển Số</label>
                                <input type="text" class="form-control" name="tien_chuyenxe" required>
                            </div>
                            <div class="mb-3">
                                <label for="subjectname" class="form-label">Số Ghế</label>
                                <input type="text" class="form-control" name="gio_chuyenxe" required>
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


        <div class="container mt-4">
            <table class="table table-hover table-striped " id="example">
                <thead>
                    <tr class="table-info">
                        <th scope="col">Mã Nhà Xe</th>
                        <th scope="col">Mã Xe</th>
                        <th scope="col">Biển Số</th>
                        <th scope="col">Số Ghế</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row"> </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_chuyenxe"><i class="fas fa-user-edit"></i></a>
                            <a class="btn btn-danger"><i class="fas fa-user-slash"></i></a>
                        </td>
                    </tr>


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
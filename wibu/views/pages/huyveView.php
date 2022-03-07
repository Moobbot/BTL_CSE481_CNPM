<?php
if (isset($_GET['id'])) {
    $mave = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_xekhach') or die(mysqli_error($conn));
    $sql = "select * from vexe where ma_ve = '$mave' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
?>


            <div id="main">
                <div class="container w-75 mt-5">
                    <form>
                        <fieldset class="border border-dark rounded-3 p-3">
                            <legend class="float-none w-auto px-3">Thông tin người đặt:</legend>

                            <div class="row d-flex justify-content-between">
                                <div class="col-5 ms-5">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 ms-2 col-form-label">Họ tên người đặt:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control border-dark" value="<?php echo $row['hoten_khach']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">Số điện thoại:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control border-dark" value="<?php echo $row['sdt_khach']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">CCCD:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control border-dark" value="<?php echo $row['cmt_khach']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 ms-5 col-form-label">Mã vé:</label>
                                        <div class="col-sm-7">
                                            <input id="mave" type="text" class="form-control border-dark" value="<?php echo $row['ma_ve']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-2 ms-5 col-form-label">Email:</label>
                                        <div class="col-sm-7">
                                            <input id="email" type="text" class="form-control border-dark" value="<?php echo $row['email_khach']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center pt-5">
                                <div class="col-2 text-center">
                                    <button type="button" class="btn btn-danger px-4">Huỷ</button>
                                </div>
                                <div class="col-2 text-center">
                                    <button id="huyve" type="button" class="btn btn-primary">Xác nhận huỷ vé</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
<?php
        }
    }
} ?>


<script>
    $(document).ready(function() {
        $("#huyve").click(function() {
            $mave = $('#mave').val();
            $email = $('#email').val();
            if (confirm("Bạn có muốn huỷ vé không?")) {
                //? nếu đồng ý
                $.ajax({
                    type: "post",
                    url: "./process/process_huyve.php",
                    data: {
                        mave: $mave,
                        email: $email,
                    },
                    success: function(response) {

                        alert(response);
                    }
                });
            } else return false;
        });
    });
</script>
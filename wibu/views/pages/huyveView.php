<?php require_once "./wibu/views/pages/" . $data["Page"] . ".php"; ?>

<div class="container w-75 mt-5">
    <form action="" method="POST">
        <fieldset class="border border-dark rounded-3 p-3">
            <legend class="float-none w-auto px-3">Thông tin người đặt:</legend>
            <?php
            while ($row = mysqli_fetch_array($data["Mave"])) {
            ?>
                <div class="row d-flex justify-content-between">
                    <div class="col-5 ms-5">
                        <div class="mb-3 row">
                            <label class="col-sm-4 ms-2 col-form-label">Họ tên người đặt:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value="<?php echo $row['hoten_khach'] ?>" name="name" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">Số điện thoại:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value=" <?php echo $row['sdt_khach'] ?>" name="sdt" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">CCCD:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value="<?php echo $row['cmt_khach'] ?>" name="cccd" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3 row">
                            <label class="col-sm-2 ms-5 col-form-label">Mã vé:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value="<?php echo $row['ma_ve'] ?>" name="mave" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 ms-5 col-form-label">Email:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value="<?php echo $row['email_khach'] ?>" name="email" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="d-flex justify-content-center pt-5">
                <div class="text-center">
                    <button type="button" class="btn btn-danger px-4">Huỷ</button>
                </div>
                <div class="text-center">
                    <button name="huyve" type="submit" class="btn btn-primary">Xác nhận huỷ vé</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
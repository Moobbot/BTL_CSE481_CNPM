<?php require_once "./wibu/views/pages/" . $data["Page"] . ".php"; ?>

<div class="container w-75 mt-5">
    <form action="./../khachhuyve" method="POST">
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
                                <input type="text" class="form-control border-dark" value="<?php echo $row['hoten_khach'] ?>" name="name" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">Số điện thoại:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value=" <?php echo $row['sdt_khach'] ?>" name="sdt" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">CCCD:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value="<?php echo $row['cmt_khach'] ?>" name="cccd" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3 row">
                            <label class="col-sm-2 ms-5 col-form-label">Mã vé:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value="<?php echo $row['ma_ve'] ?>" name="mave" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 ms-5 col-form-label">Email:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control border-dark" value="<?php echo $row['email_khach'] ?>" name="email" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="d-flex justify-content-center pt-5">
                <div class="text-center">
                    <a href="../../" type="submit" name="btnhuy" class="btn button boxed-btn me-2">Quay lại</a>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn button boxed-btn" name="huy">Huỷ vé</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<div class="container w-75">
    <div class="d-flex justify-content-center">
        <div class="mt-3 si-me  ms-lg-5 ">
            <?php
            $a = 0;
            while ($row = mysqli_fetch_array($data["Macx"])) {
                $a = $row['ma_chuyenxe'];
            ?>

                <div class="card mb-3 border-dark " style="max-width: 700px;">
                    <div class="row g-0">
                        <div class="col-2 mt-2 mx-2">
                            <img src="../../assets/img/gallery/xe.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-7">
                                        <div class="mb-1 fs-4">Tên nhà xe:

                                            <?= $row["ten_nhaxe"] ?>
                                        </div>
                                        <div class="my-2">
                                            <i class="fas fa-map-marker me-2"></i>
                                            <?= $row["diemdi_tuyenduong"] ?>
                                            <br>
                                            <i class="fas fa-arrow-down"></i>
                                            <br>
                                            <i class="fas fa-map-marker me-2"></i>
                                            <?= $row["diemden_tuyenduong"] ?>
                                        </div>
                                        <div class="my-2">Thời gian:
                                            <?= $row["giodi_chuyenxe"] ?>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="my-2 fs-4">Giá tiền:
                                            <?= $row["giatien_chuyenxe"] ?>.000đ
                                        </div>
                                        <div class="mt-5 pt-5">
                                            <span class="d-flex justify-content-end">Số ghế trống: <?= $row["soghetrong"] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php

            }
            ?>

        </div>
    </div>


    <!-- Form đặt vé -->
    <div>
        <form class="mt-5" action="../../datve/khachhangdatve" method="POST">
            <fieldset class="border border-dark rounded-3 p-3">
                <legend class="float-none w-auto fw-bold px-3">Thông tin người đặt vé</legend>
                <div class="row d-flex justify-content-between">
                    <div class="row mb-5">
                        <div class="ms-5">
                            <!-- <label class="ms-2" for="" id="">Số lượng vé: </label> <input type="number" name="soluong" required> -->
                            <label class="ms-5" for="">Giá vé: 1000000 Đồng / Vé</label>
                        </div>
                    </div>
                    <div class="col-5 ms-5">
                        <div class="mb-3 row">
                            <label class="col-sm-4 ms-2 col-form-label">Họ tên người đặt:</label>
                            <div class="col-sm-7">
                                <input type="text" id="username" name="username" class="form-control border-dark" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 ms-2 col-form-label">Số điện thoại:</label>
                            <div class="col-sm-7">
                                <input type="text" id="phone" name="phone" class="form-control border-dark" placeholder="Enter phonenumber" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 ms-2 col-form-label">CCCD:</label>
                            <div class="col-sm-7">
                                <input type="text" id="cccd" name="cccd" class="form-control border-dark" placeholder="Enter CMT/CCCD" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Điểm đón:</label>
                            <div class="col-sm-7">
                                <input id="address" name="address" type="text" class="form-control border-dark" placeholder="Enter address" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 me-4 col-form-label">Email:</label>
                            <div class="col-sm-7">
                                <input type="email" id="email" name="email" class="form-control border-dark ms-3" placeholder="Enter email" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center pt-5">
                    <div class="col-2 text-center">
                        <a href="../../" type="submit" name="btnhuy" class="btn btn-danger px-4">Huỷ</a>
                    </div>
                    <div class="col-2 text-center">
                        <input type="hidden" name="ma_chuyenxe" value="<?php echo $a; ?>">
                        <button type="submit" name="btndatve" class="btn btn-primary">Đặt vé</button>

                    </div>
                </div>

            </fieldset>
        </form>
    </div>

</div>
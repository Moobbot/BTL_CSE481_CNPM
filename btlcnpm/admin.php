<?php
include 'header_admin.php';
include 'config.php';
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
                                10 Tỷ
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
<?php
include 'footer_admin.php';
?>
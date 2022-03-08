<main>
    <div class="main-area bg-light">
        <!--* slider Area Start-->
        <section class="slider-area hero-image-1 hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height-1 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="hero-text">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect04"
                                            aria-label="Example select with button addon">
                                            <option selected>Điểm đi</option>
                                            <?php
                                            while ($row = mysqli_fetch_array($data["Tuyendi"])) {
                                            ?>
                                            <option value=""><?php echo $row["diemdi_tuyenduong"] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <select class="form-select" id="inputGroupSelect04"
                                            aria-label="Example select with button addon">
                                            <option selected>Điểm đến</option>
                                            <?php
                                            while ($row = mysqli_fetch_array($data["Tuyenden"])) {
                                            ?>
                                            <option value=""><?php echo $row["diemden_tuyenduong"] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <button class="btn btn-warning" type="button">Tìm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <style>
        @media(max-width: 990px) {
            .hidden-x {
                /* display: none; */
                width: 200px !important;
            }

            .si-me {
                width: 60% !important;
            }
        }

        @media(max-width: 520px) {
            .hidden-x {
                display: none;
            }

            .si-me {
                width: 80% !important;
            }

            .kq {
                display: flex;
                justify-content: center;
            }
        }
        </style>
        <div class="container-lg mt-4">
            <div class="row kq">
                <div class="mt-3 hidden-x" style="width: 234px;">
                    <div class="d-flex flex-column border border-dark border-1 bg-wood" style="border-radius: 10%;">
                        <!-- //*Điều hướng -->
                        <a class="h4 text-dark text-center text-decoration-none mt-2">Thời gian</a>
                        <!-- //* Loại món ăn -->
                        <ul class=" nav nav-pills align-items-center justify-content-center" id="pills-tab"
                            role="tablist">
                            <?php
                            while ($row = mysqli_fetch_array($data["ThoigianCxe"])) {
                            ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text-black" type="button" role="tab">
                                    <img src="assets/img/gallery/bus-car-icon.svg" class="me-2"
                                        style="min-width: 1.375em;">
                                    <?php echo $row["giodi_chuyenxe"] ?>
                                </button>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="mt-3 si-me border-start border-1  ms-lg-5"
                    style="width: 75%; border-color: #000 !important;">
                    <?php
                    while ($row = mysqli_fetch_array($data["Lichtrinh"])) {
                    ?>
                    <div class="card mb-3 border-dark " style="max-width: 700px;">
                        <div class="row g-0">
                            <div class="col-2 mt-2 mx-2">
                                <img src="assets/img/gallery/xe.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="col-7">
                                            <div class="mb-1 fs-4">Tên nhà xe: 
                                                <br>
                                                <?php echo $row["ten_nhaxe"] ?></div>
                                            <div class="my-2">
                                                <i class="fas fa-map-marker me-2"></i>
                                                <?php echo $row["diemdi_tuyenduong"]?>
                                                <br>
                                                <i class="fas fa-arrow-down"></i>
                                                <br>
                                                <i class="fas fa-map-marker me-2"></i>
                                                <?php echo $row["diemden_tuyenduong"]?>
                                            </div>
                                            <div class="my-2">Thời gian:
                                                <?php echo $row["giodi_chuyenxe"] ?>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                        </div>
                                        <div class="col-4" style = 'margin-top: 80px'>
                                            <div class="mb-1">Số ghế trống: <?php echo $row["soghetrong"] ?>
                                            </div>
                                            <div class="my-2 mt-2">Giá tiền:
                                                <?php echo $row["giatien_chuyenxe"]?>.000đ</div>
                                            <div class="my-2 mt-2">
                                                <button class="btn btn-primary">Đặt vé</button>
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
            <!-- Nhà xe Start -->
            <!-- Nhà xe End -->
        </div>
    </div>
</main>
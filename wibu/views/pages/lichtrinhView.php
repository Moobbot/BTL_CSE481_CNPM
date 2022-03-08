<main>
    <div class="main-area">
        <!--* slider Area Start-->
        <section class="slider-area hero-image-1 hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height-1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero-text">
                                    <div class="row ">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Điểm đi</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Điểm đến</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-success">Tìm</button>
                                        </div>
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
                        <ul class=" nav nav-pills align-items-center justify-content-center" id="pills-tab" role="tablist">
                            <?php
                            while ($row = mysqli_fetch_array($data["ThoigianCxe"])) {
                            ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-black" type="button" role="tab">
                                        <img src="assets/img/gallery/bus-car-icon.svg" class="me-2" style="min-width: 1.375em;">
                                        <?php echo $row["giodi_chuyenxe"] ?>
                                    </button>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="mt-3 si-me border-start border-1 ms-lg-5" style="width: 75%; border-color: #000 !important;">
                    <?php
                    while ($row = mysqli_fetch_array($data["Lichtrinh"])) {
                    ?>
                        <div class="card mb-3" style="max-width: 700px;">
                            <div class="row g-0">
                                <div class="col-2 mt-2 mx-2">
                                    <img src="assets/img/gallery/xe.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-1">a</div>
                                        <div class="my-1">a</div>
                                        <div class="my-1">a</div>
                                        <div class="my-1">
                                            <button>Đặt vé</button>
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
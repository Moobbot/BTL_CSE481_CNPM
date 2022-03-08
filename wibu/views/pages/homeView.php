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
                                    <h1>
                                        WIBU - NỀN TẢNG KẾT NỐI CÁC TỈNH
                                    </h1>
                                    <p>
                                        Chúng tôi đem đến những chuyến đi bình an
                                    </p>
                                    <!-- <a href="#service" class="btn hero-btn">Khám phá ngay!</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!-- Nhà xe Start -->
        <section class="offer-services pb-5 my-5" id="service">
            <div class="container">
                <!-- Tuyến đường -->
                <div class="row g-0">
                    <div class="col-12 section-tittle my-4">
                        <h3>Tuyến đường phổ biến</h3>
                    </div>
                    <div class="row justify-content-between p-0 m-0">
                        <?php
                        while ($row = mysqli_fetch_array($data["Tuyenduong"])) {
                        ?>
                            <div class="card my-2 mx-3 px-0" style="width: 18.25em;">
                                <a>
                                    <!-- <img src="</?= $row["hinhanh_tuyenduong"] ?>" class="card-img-top" alt="..." /> -->
                                    <img src="http://buildingwithpurpose.us/wp-content/uploads/2018/04/MienBac.jpg" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <div class="card-text">
                                            <ul class="p-0">
                                                <li class="py-2">
                                                    Lộ trình: <?php echo $row["diemdi_tuyenduong"] . " - " . $row["diemden_tuyenduong"] ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- Nhà xe -->
                <div class="row g-0">
                    <div class="col-12 section-tittle my-4">
                        <h3>Nhà xe nổi bật</h3>
                    </div>
                    <div class="row justify-content-between p-0 m-0">
                        <?php
                        while ($row = mysqli_fetch_array($data["Nhaxe"])) {
                        ?>
                            <div class="card my-2 mx-3 px-0" style="width: 18.25em;">
                                <a href="./nhaxe_chitiet">
                                    <img src="https://vcdn1-vnexpress.vnecdn.net/2021/04/08/DSC6562-JPG.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=8QlmAuC5guARwkn2aD_aBA" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">XE KHÁCH <?= $row["ten_nhaxe"] ?></h5>
                                        <div class="card-text">
                                            <ul class="p-0">
                                                <li class="py-2">
                                                    Địa chỉ: <?= $row["diachi_nhaxe"] ?>
                                                </li>
                                                <li class="py-2">
                                                    Phone: <?= $row["sdt_nhaxe"] ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-12 section-tittle my-4">
                        <h3>Nền tảng kết nối người dùng và nhà xe</h3>
                    </div>
                    <div class="row d-flex justify-content-md-between justify-content-center">
                        <div class="card mb-3" style="min-width: 240px; width: auto; max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-2 pt-2">
                                    <img src="assets/img/gallery/bus-car-icon.svg" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <div class="card-body">
                                        <h5 class="card-title">2000+ nhà xe chất lượng cao</h5>
                                        <p class="card-text text-justify">5000+ tuyến đường trên toàn quốc, chủ động và đa dạng lựa chọn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="min-width: 240px; width: auto; max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-2 pt-2">
                                    <img src="assets/img/gallery/yellow-ticket-icon.svg" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Đặt vé dễ dàng</h5>
                                        <p class="card-text text-justify">Đặt vé chỉ với 60s. Chọn xe yêu thích cực nhanh và thuận tiện.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="min-width: 240px; width: auto; max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-2 pt-2">
                                    <img src="assets/img/gallery/bus-car-icon.svg" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <div class="card-body">
                                        <h5 class="card-title">2000+ nhà xe chất lượng cao</h5>
                                        <p class="card-text text-justify">5000+ tuyến đường trên toàn quốc, chủ động và đa dạng lựa chọn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="min-width: 240px; width: auto; max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-2 pt-2">
                                    <img src="assets/img/gallery/yellow-ticket-icon.svg" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Đặt vé dễ dàng</h5>
                                        <p class="card-text text-justify">Đặt vé chỉ với 60s. Chọn xe yêu thích cực nhanh và thuận tiện.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Nhà xe End -->
    </div>
</main>
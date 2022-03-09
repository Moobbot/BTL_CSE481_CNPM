<?php
$row = mysqli_fetch_array($data["Nhaxe"]);
if ($row > 0) {
    $name = $row['ten_nhaxe'];
    $describe = $row['mota_nhaxe'];
}
?>
<section class="offer-services mt-5" id="service">
    <div class="container">
        <div class="col-12 section-tittle my-4">
            <h3>Nhà xe <?= $name ?></h3>
        </div>
        <div class="row">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                <div class="carousel-inner container my-5">
                    <!-- Nhóm -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <img src="https://vexesapa.vn/uploads/files/bus-do-28_636242237398830378_HasThumb_Thumb.jpg" style="height: 480px;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="https://vexesapa.vn/uploads/files/ve-xe-sap_636274189471316166_HasThumb_Thumb.jpg" style="height: 480px;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="https://vexesapa.vn/uploads/files/ve-xe-sap_636274189689068621_HasThumb_Thumb.jpg" style="height: 480px;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="https://vexesapa.vn/uploads/files/9_636232229359811610_HasThumb_Thumb.jpg" style="height: 480px;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="https://vexesapa.vn/uploads/files/9_636232229471708010_HasThumb_Thumb.jpg" style="height: 480px;">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row mt-2">
            <h5 class="mb-4">Thông tin chung</h5>
            <div class="text-justify">
            <?=  $describe ?>
                <!-- Xe Sapa Express là hãng xe du lịch được sở hữu bởi Công ty TNHH Thịnh Phát đây là doanh nghiệp lớn hoạt động trong lĩnh vực vận tải và du lịch thành lập từ tháng 10/2012.Thương hiệu Sapa Express không ngừng lớn mạnh và phát triển, đến nay đã trở thành một trong những hãng xe được ưa chuộng nhất, uy tín nhất bởi sự sang trọng, đẳng cấp, và dịch vụ cực kỳ chuyên nghiệp của mình.
                <br>
                Loại xe:
                <ul>
                    <li class="ms-2">
                        + Xe Limousine Noble 29 của Sapa Expres là loại xe cao cấp với khung xe 45 ghế tiêu chuẩn được thiết kế lại thành 29 ghế ngả da mềm, tiêu chuẩn châu âu có gối đầu, tay đỡ và đệm mát xa chân nên rất rộng rãi và thoải mái. Limousine 29 ghế của Sapa Express xứng đáng được gọi là chuyên cơ mặt đất bởi xe được nhập nguyên bản từ nước ngoài, khác với các dòng xe khác nội thất hoàn toàn đóng tại Việt Nam, nên độ êm và chống ồn tốt hơn hẳn các dòng xe nội thất được đóng trong nước.
                    </li>
                    <li class="ms-2">
                        + Dòng xe giường nằm 38 chỗ( số giường ít nhất so với các nhà xe khác thường là 40-46 giường trên cùng một khung xe - nên cực kỳ rộng rãi, thoải mái), xe mới sạch sẽ đầy đủ tiện nghi, có nhà vệ sinh trên xe theo tiêu chuẩn Châu Âu. Đặc biệt trên hành trình Hà Nội - Sapa hành khách sẽ được hưởng miễn phí các tiện nghi và dịch vụ tốt nhất như: Wifi, đồ ăn nhẹ, có hướng dẫn viên tiếng việt và tiếng anh, có tủ lạnh mini, ổ sạc, ổ cắm USB mỗi ghế....
                    </li>
                </ul>
                Xe Sapa Express chỉ chở khách du lịch hoàn toàn không đón và bắt khách dọc đường. Hãng chỉ đón khách từ khu vực Phố Cổ - Hà Nội và hỗ trợ đón thêm một điểm tại ngã tư cao tốc Nội Bài-Lào Cai. -->
            </div>
        </div>
    </div>
</section>
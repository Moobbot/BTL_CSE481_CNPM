<div class="container w-75">
    <div class="">
        <fieldset class="border border-dark rounded-3 p-3">
            <legend class="float-none w-auto px-3 fw-bold">Thông tin chuyến xe</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://megacar.vn/wp-content/uploads/2020/09/xe-kh%C3%A1ch-Qu%E1%BA%A3ng-Tr%E1%BB%8B-%C4%91i-L%C3%A2m-%C4%90%E1%BB%93ng-megabus-1.jpg"
                            alt="" style="width: 70%;">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fs-3" id="Name_xekhach" style="font-weight: 600;">Xe khách Hoàng Hà</label>
                        <br>

                        <label for="" class="fs-5" id="Name_xekhach" style="font-weight: 600;">Xe khách 30 chỗ </label>
                        <br>
                        <label for="" class="fs-5" id="Name_xekhach" style="font-weight: 600;">Giờ khởi hành :
                            15h30</label>
                        <br>
                        <div>
                            <label for="" class="fs-5 px-3 pb-1  rounded border border-warning bg-warning"
                                id="Name_xekhach" style="font-weight: 600;">Sạch sẽ</label>
                            <label for="" class="fs-5 px-3  pb-1  rounded border border-warning bg-warning ms-3"
                                id="Name_xekhach" style="font-weight: 600;">An toàn</label>
                        </div>


                        <div class="mt-2">
                            <label for="" class="fs-5 px-3  pb-1 rounded border border-warning bg-warning"
                                id="Name_xekhach" style="font-weight: 600;">Chất lượng</label>
                            <label for="" class="fs-5 px-3 pb-1  rounded border border-warning bg-warning ms-3"
                                id="Name_xekhach" style="font-weight: 600;">Trách nhiệm</label>
                        </div>

                    </div>
                </div>
            </div>
        </fieldset>
    </div>

    <!-- Form đặt vé -->
    <div>
        <form class="mt-5" action="./datve/khachhangdatve" method="POST">
            <fieldset class="border border-dark rounded-3 p-3">
                <legend class="float-none w-auto fw-bold px-3">Thông tin người đặt vé</legend>
                <div class="row d-flex justify-content-between">
                    <div class="row mb-5">
                        <div class="ms-5">
                            <label class="ms-2" for="" id="">Số lượng vé: </label> <input type="number" required>
                            <label class="ms-5" for="">Tổng giá vé: </label><label>1000000 Đồng</label>
                        </div>
                    </div>
                    <div class="col-5 ms-5">
                        <div class="mb-3 row">
                            <label class="col-sm-4 ms-2 col-form-label">Họ tên người đặt:</label>
                            <div class="col-sm-7">
                                <input type="text" id="username" name="username" class="form-control border-dark"
                                    placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 ms-2 col-form-label">Số điện thoại:</label>
                            <div class="col-sm-7">
                                <input type="text" id="phone" name="phone" class="form-control border-dark"
                                    placeholder="Enter phonenumber" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 ms-2 col-form-label">CCCD:</label>
                            <div class="col-sm-7">
                                <input type="text" id="cccd" name="cccd" class="form-control border-dark"
                                    placeholder="Enter CMT/CCCD" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Điểm đón:</label>
                            <div class="col-sm-7">
                                <input id="address" name="address" type="text" class="form-control border-dark"
                                    placeholder="Enter address" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 me-4 col-form-label">Email:</label>
                            <div class="col-sm-7">
                                <input type="email" id="email" name="email" class="form-control border-dark ms-3"
                                    placeholder="Enter email" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center pt-5">
                    <div class="col-2 text-center">
                        <a href="homeView.php">
                            <button type="button" name="btnhuy" class="btn btn-danger px-4">Huỷ</button>
                        </a>
                    </div>
                    <div class="col-2 text-center">
                        <button type="submit" name="btnthanhtoan" class="btn btn-primary">Thanh toán</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

</div>
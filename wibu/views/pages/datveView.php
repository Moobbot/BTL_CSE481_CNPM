<div class="container w-75">
    <form class="">
        <fieldset class="border border-dark rounded-3 p-3">
            <legend class="float-none w-auto px-3 fw-bold">Thông tin chuyến xe</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://megacar.vn/wp-content/uploads/2020/09/xe-kh%C3%A1ch-Qu%E1%BA%A3ng-Tr%E1%BB%8B-%C4%91i-L%C3%A2m-%C4%90%E1%BB%93ng-megabus-1.jpg" alt="" style="width: 70%;">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fs-3" id="Name_xekhach" style="font-weight: 600;">Xe khách Hoàng Hà</label>
                        <br>

                        <label for="" class="fs-5" id="Name_xekhach" style="font-weight: 600;">Xe khách 30 chỗ </label>
                        <br>
                        <label for="" class="fs-5" id="Name_xekhach" style="font-weight: 600;">Giờ khởi hành : 15h30</label>
                        <br>
                        <div class="mt-2">
                            <label for="" class="fs-5 px-3 pb-1 rounded border border-warning bg-warning m-3" id="Name_xekhach" style="font-weight: 600;">Sạch sẽ</label>
                            <label for="" class="fs-5 px-3 pb-1 rounded border border-warning bg-warning m-3" id="Name_xekhach" style="font-weight: 600;">An toàn</label>
                            <label for="" class="fs-5 px-3 pb-1 rounded border border-warning bg-warning m-3" id="Name_xekhach" style="font-weight: 600;">Chất lượng</label>
                            <label for="" class="fs-5 px-3 pb-1 rounded border border-warning bg-warning m-3" id="Name_xekhach" style="font-weight: 600;">Trách nhiệm</label>
                        </div>

                    </div>
                </div>
            </div>
        </fieldset>
    </form>

    <!-- Form đặt vé -->
    <form class="mt-5">
        <fieldset class="border border-dark rounded-3 p-3">
            <legend class="float-none w-auto px-3">Thông tin người đặt:</legend>

            <div class="row d-flex justify-content-between">
                <div class="row mb-5">
                    <div class="col-md-5 ms-5">
                        <label class="col-sm-4 ms-2 me-5 col-form-label">Họ tên người đặt:</label>
                        <label class="" for="" id="">Tổng giá vé: </label>
                    </div>
                </div>

                <div class="col-5 ms-5">
                    <div class="mb-3 row">
                        <label class="col-sm-4 ms-2 col-form-label">Họ tên người đặt:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control border-dark" id="username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">Số điện thoại:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control border-dark" id="phone">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">CCCD:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control border-dark" id="cccd">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Điểm đón:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control border-dark" id="address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 me-4 col-form-label">Email:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control border-dark ms-3" id="email">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center pt-5">
                <div class="col-2 text-center">
                    <button type="button" class="btn btn-danger px-4">Huỷ</button>
                </div>
                <div class="col-2 text-center">
                    <button type="button" class="btn btn-primary" id="submit">Thanh toán</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#submit').click(function() {
            $username = $('#username').val();
            $phone = $('#phone').val();
            $cccd = $('#cccd').val();
            $address = $('#address').val();
            $email = $('#email').val();
            if ($username == "" || $cccd == "" || $phone == "" || $email == "" || $address == "") {
                alert("Vui lòng nhập đủ thông tin");
                return;
            } else {
                return $.ajax({
                    type: "post",
                    url: "wibu/core/email/process/process_datvexe.php",
                    data: {
                        username: $username,
                        phone: $phone,
                        cccd: $cccd,
                        address: $address,
                        email: $email,

                    },
                    success: function(response) {


                        alert(response)
                    }
                });
            }

        });
    });
</script>
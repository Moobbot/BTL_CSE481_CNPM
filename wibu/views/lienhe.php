<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Liên hệ</title>
</head>

<body>
    <div class="container-fluid">
        <!--* slider Start -->
        <div class="row mb-5">
            <div id="carouselExampleControls position-relative " class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="./public/lo-trinh-bus-30-tphcm-1.jpg" class="d-block w-100" alt="Hình ảnh xe buýt 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/lo-trinh-bus-30-tphcm-1.jpg" class="d-block w-100" alt="Hình ảnh xe buýt 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/lo-trinh-bus-30-tphcm-1.jpg" class="d-block w-100" alt="Hình ảnh xe buýt 3">
                    </div>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <h1 class="text-white ">Liên hệ chúng tôi</h1>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--* slider End -->
        </div>
        <div class="container">
            <div class="row mb-5">
                <!--* Contact Area start  -->
                <!-- Map -->

                <div class="row text-center">
                    <div class="col">
                        <img src="./public./map_bus.PNG" class="img-fluid" alt="Địa điểm của công ty">
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="row col-md-8">
                    <h2>Góp ý</h2>
                    <h2 class="border-bottom border-2 pb-1 border-dark">Thông tin yêu cầu</h2>
                </div>
                <div class="row">
                    <div class="col-md-8 mt-2">
                        <!-- form -->
                        <form>
                            <div class="row">
                                <label class="form-lable col-lg-3 text-lg-end">
                                    Nội dung góp ý <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8 mb-3">
                                    <textarea class="col-12 form-control" name="message" id="message" cols="30"
                                        rows="10" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Nội dung góp ý'" placeholder="Nội dung góp ý"
                                        required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <h2 class="border-bottom border-2 pb-1 border-dark">Thông tin liên lạc</h2>
                            </div>
                            <div class="row">
                                <label class="form-lable col-lg-3 text-lg-end">
                                    Họ và tên <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8 mb-3">
                                    <input class="form-control" type="text" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Nhập họ tên của bạn'"
                                        placeholder="Nhập họ tên của bạn" required>
                                </div>
                            </div>
                            <div class="row">
                                <label class="form-lable col-lg-3 text-lg-end">
                                    Emain <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8 mb-3">
                                    <input class="form-control" type="email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Nhập email của bạn'"
                                        placeholder="Nhập email của bạn" required>
                                </div>
                            </div>
                            <div class="row">
                                <label class="form-lable col-lg-3 text-lg-end">
                                    Chủ đề <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8 mb-3">
                                    <input class="form-control" type="text" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Nhập chủ đề'" placeholder="Nhập chủ đề" required>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                    <div class="col-md-3 offset-lg-1">
                        <div class="contact-info d-flex p-3">
                            <span class="contact-info__icon pe-1">
                                <h3><i class="fa-solid fa-house"></i></h3>
                            </span>
                            <div class="media-body">
                                <h3>Điểm trung chuyển cầu giấy</h3>
                                <p>Ngọc Khánh, Đống Đa, Hà Nội, Việt Nam</p>
                            </div>
                        </div>
                        <div class="contact-info d-flex p-3">
                            <span class="contact-info__icon pe-1">
                                <h3><i class="fa-solid fa-phone"></i></h3>
                            </span>
                            <div class="media-body">
                                <h3>0975729750</h3>
                                <p>Thứ Hai đến Thứ Sáu, 5 giờ sáng đến 21 giờ tối</p>
                            </div>
                        </div>
                        <div class="contact-info d-flex p-3">
                            <span class="contact-info__icon pe-1">
                                <h3><i class="fa-solid fa-envelope"></i></h3>
                            </span>
                            <div class="media-body">
                                <h3>buslientinh@gmail.com</h3>
                                <p>Gửi cho chúng tôi câu hỏi của bạn bất cứ lúc nào!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--* Contact Area End -->
    </div>
</body>

</html>
<!-- Footer Start-->

<!-- Footer End-->
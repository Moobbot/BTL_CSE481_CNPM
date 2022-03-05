<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="main">

        <div class="container w-75 mt-5">
            <form action="/action_page.php">
                <fieldset class="border border-dark rounded-3 p-3">
                    <legend class="float-none w-auto px-3">Thông tin người đặt:</legend>

                    <div class="row d-flex justify-content-between">
                        <div class="col-5 ms-5">
                            <div class="mb-3 row">
                                <label class="col-sm-4 ms-2 col-form-label">Họ tên người đặt:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control border-dark">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">Số điện thoại:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control border-dark">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 ms-2 col-form-label">CCCD:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3 row">
                                <label class="col-sm-2 ms-5 col-form-label">Mã vé:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control border-dark">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 ms-5 col-form-label">Email:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center pt-5">
                        <div class="col-2 text-center">
                            <button type="button" class="btn btn-danger px-4">Huỷ</button>
                        </div>
                        <div class="col-2 text-center">
                            <button type="button" class="btn btn-primary">Xác nhận huỷ vé</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>
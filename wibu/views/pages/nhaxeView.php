<?php require_once "./wibu/views/pages/" . $data["Page"] . ".php"; ?>
<div class="container">
    <section class="offer-services pb-5 my-5" id="service">
        <div class="row g-0">
            <div class="col section-tittle mb-5">
                <h2>Danh sách nhà xe</h2>
            </div>
        </div>
        <div class="row justify-content-between p-0 m-0">
            <?php
            while ($row = mysqli_fetch_array($data["Nhaxe"])) {
            ?>
                <div class="card my-2 mx-3 px-0" style="width: 23em;">
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
    </section>
</div>
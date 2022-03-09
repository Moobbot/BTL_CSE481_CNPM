<?php
class lichtrinh extends Controller
{
    public function SayHi()
    {
        $lichtrinh = $this->model("lichtrinhModel");
        $this->view(
            "page_khach",
            [
                "Page" => "lichtrinhView",
                "ThoigianCxe" => $lichtrinh->GetThoigianCxe(),
                "Lichtrinh" => $lichtrinh->GetLichtrinh(),
                "Tuyenduong" => $lichtrinh->GetTuyenduong(),
                "Tuyenduong2" => $lichtrinh->GetTuyenduong2()
            ]
        );
    }
}

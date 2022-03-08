<?php
class lichtrinh extends Controller
{
    function SayHi()
    {
        $lichtrinh = $this->model("lichtrinhModel");
        $this->view(
            "page_khach",
            [
                "Page" => "lichtrinhView",
                "ThoigianCxe" => $lichtrinh->GetThoigianCxe(),
                "Lichtrinh" => $lichtrinh->GetLichtrinh(),
                "Tuyendi" => $lichtrinh->GetDuongDi(),
                "Tuyenden" => $lichtrinh->GetDuongDen()
            ]
        );
    }
}

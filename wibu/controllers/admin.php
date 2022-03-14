<?php
class admin extends Controller
{
    public function SayHi()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin",
            [
                "Page" => "admin_trangchuView",
                "Nhaxe" => $admin->GetNhaxe()
            ]
        );
    }
    public function nhaxe()
    {
        // thêm code bắt sự kiện post
        if(isset($_POST['btnSave'])){
            $id_nhaxe = $_POST['id_nhaxe'];
            $ten_nhaxe = $_POST['ten_nhaxe'];
            $sodt_nhaxe = $_POST['sodt_nhaxe'];
            $dc_nhaxe = $_POST['dc_nhaxe'];
            $mota_nhaxe = $_POST['mota_nhaxe'];
            $editnhaxe = $this->model("adminModel");
            if($editnhaxe->SetNhaxe($id_nhaxe, $ten_nhaxe, $sodt_nhaxe, $dc_nhaxe, $mota_nhaxe)){
                ?>
                    <script>
                        alert("Sửa thành công");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("Sửa thất bại");
                    </script>
                <?php
            }
        }
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin-2",
            [
                "Page" => "./admin_nhaxeView",
                "Nhaxe" => $admin->GetNhaxe()
            ]
        );
    }

    public function chuyenxe()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin-2",
            [
                "Page" => "./admin_chuyenxeView",
                "Nhaxe" => $admin->GetChuyenXe()
            ]
        );
    }

    public function xe()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin-2",
            [
                "Page" => "./admin_xeView",
            ]
        );
    }
    public function chuyenxechay()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin-2",
            [
                "Page" => "./admin_chuyenxechayView",
                "chuyenxechay" => $admin->GetChuyenxechay()
            ]
        );
    }
    public function tuyenduong()
    {
        $admin = $this->model("adminModel");
        $this->view(
            "page_admin-2",
            [
                "Page" => "./admin_tuyenduongView",
                "tuyenduong" => $admin->GetTuyenduong()
            ]
        );
    }
}
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
        if(isset($_POST['btnDelete'])){
            $id_nhaxe = $_POST['deleteNhaxeID'];
            $deleteNhaxe = $this->model("adminModel");
            if($deleteNhaxe->DeleteNhaxe($id_nhaxe)){
                ?>
                    <script>
                        alert("Xóa thành công");
                    </script>
                    <?php
            }else{
                ?>
                    <script>
                        alert("Xóa thất bại");
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

        // thêm code bắt sự kiện post
        if(isset($_POST['btnSave'])){
            $ma_chuyenxe = $_POST['ma_chuyenxe'];
            $matd_chuyenxe = $_POST['matd_chuyenxe'];
            $tien_chuyenxe = $_POST['tien_chuyenxe'];
            $gio_chuyenxe = $_POST['gio_chuyenxe'];
            $editchuyenxe = $this->model("adminModel");
            if($editchuyenxe->SetChuyenxe($ma_chuyenxe, $matd_chuyenxe, $tien_chuyenxe, $gio_chuyenxe)){
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
        if(isset($_POST['btnDelete'])){
            $id_chuyenxe = $_POST['deleteChuyenxeID'];
            $deletechuyenxe = $this->model("adminModel");
            if($deletechuyenxe->DeleteChuyenxe($id_chuyenxe)){
                ?>
                    <script>
                        alert("Xóa thành công");
                    </script>
                    <?php
            }else{
                ?>
                    <script>
                        alert("Xóa thất bại");
                    </script>
                <?php
            }
        }
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

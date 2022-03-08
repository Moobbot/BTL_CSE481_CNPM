<?php
session_start();
if (!isset($_SESSION['current_user'])) {
    header("location:login_admin.php");
}
$client_user = $_SESSION['current_user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="style_admin.css">
    <title>Quản Lý Xe Khách</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle "> <i class="fas fa-bars " style="color: #e35d6a;" id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar" style="background-color: #e35d6a;">
        <nav class="nav">
            <div>
                <span class=" nav_logo nav_logo-name"></span>
                <div class="nav_list">
                    <a href="admin.php" class="nav_link" id="dashboard">
                        <i class="fas fa-chart-line nav_icon"></i>
                        <span class="nav_name">Home</span>
                    </a>
                    <a href="nhaxe.php" class="nav_link" id="class">
                        <i class="fas fa-school nav_icon"></i>
                        <span class="nav_name">Nhà xe</span>
                    </a>
                    
                </div>
            </div>
            <!-- <a href="#" class="nav_link"> <span class="nav_name">SignOut</span> </a> -->
            <div class="dropdown pb-4 ps-2">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://avatars.githubusercontent.com/u/90234391?s=48&v=4" alt="hugenerd" class=" header_img rounded-circle">
                    <span class="d-none d-sm-inline mx-1">Admin</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                    <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt me-3"></i> Thoát</a></li>
                </ul>
            </div>
        </nav>

    </div>
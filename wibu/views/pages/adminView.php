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
                <a href="./admin/nhaxe" class="nav_link" id="class">
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
                <li><a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt me-3"></i> Thoát</a></li>
            </ul>
        </div>
    </nav>
</div>
<?php
    session_start();
    // if(isset($_SESSION['loginOK'])){
        unset($_SESSION['current_user']);
        header("Location : ./wibu/controllers/login_admin.php");
    // }

?>
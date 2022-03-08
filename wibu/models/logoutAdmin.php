<?php
    session_start();
    // if(isset($_SESSION['loginOK'])){
        unset($_SESSION['current_user']);
        header("location:login_admin.php");
    // }

?>
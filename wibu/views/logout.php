<?php
session_start();
unset($_SESSION['current_user']);
header("location:login_admin.php");

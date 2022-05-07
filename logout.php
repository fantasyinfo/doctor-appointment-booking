<?php 
session_start();
session_unset($_SESSION['USER_LOGIN']);
header("location: login.php");
die();
?>
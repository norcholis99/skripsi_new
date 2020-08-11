<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
session_destroy();
header("Location:01_login.php");
?>
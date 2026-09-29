<?php
include("../connection.php");
unset($_SESSION);
session_destroy();
header("location:../admin_login.php");
 ?>

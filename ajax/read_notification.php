<?php
include("../connection.php");
$notifi_id = $_POST["data"];
mysqli_query($con,"UPDATE `allactivity` SET `maker`='markAsread' WHERE id='$notifi_id'");
 ?>

<?php
include("../connection.php");
 $value = $_POST["value"];
 $user_id = $_POST["user_id"];

 $sql_fetch = mysqli_query($con,"SELECT `id`, `user_id`, `email`, `notification` FROM `investor_notification` WHERE user_id ='$user_id' ");
 $fetch = mysqli_fetch_assoc($sql_fetch);
 $email_noti = $fetch['email'];
 $notification_noti = $fetch['notification'];

  if($value=="email"){
    if($email_noti=="Yes"){
      $set_email = "No";
      $stats = "set_E_no";
    }else{
      $set_email = "Yes";
      $stats = "set_E_yes";
    }
     $sql = mysqli_query($con,"UPDATE `investor_notification` SET `email`='$set_email' WHERE user_id='$user_id'");
  }elseif($value=="notification"){
    if($notification_noti=="Yes"){
      $set_notification = "No";
      $stats = "set_N_no";
    }else{
      $set_notification = "Yes";
      $stats = "set_N_yes";
    }
    $sql = mysqli_query($con,"UPDATE `investor_notification` SET `notification`='$set_notification' WHERE user_id='$user_id'");
  }

  echo $stats;

 ?>

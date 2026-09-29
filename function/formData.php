<?php
include("../config/connection.php");
include("function.php");
include("smtp_shoot.php");
// reusable===
$date =date("Y-m-d h:i:s");
$session_hash = md5(sha1(rand("1111111","9999999")));
// Registration----
  if(isset($_REQUEST["res"])){
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $full_name = $_REQUEST["fname"]."".$_REQUEST["lname"];
    $email = $_REQUEST["email"];
    //==<--rafer email check-->//====>
    $rafer_email = $_REQUEST["rafer_email"];
    if($rafer_email !=""){
      $sql_check_raf = mysqli_query($con,"SELECT  `email` FROM `user` WHERE email='$rafer_email'");
      $check_raf = mysqli_num_rows($sql_check_raf);
      if($check_raf==1){
        $sql = mysqli_query($con,"INSERT INTO `rafer_user`(`user_email`, `rafer_use`, `bonus`) VALUES ('$email','$rafer_email','0')");
      }else{
        go_to("/create/res?denger= Rafer Email Not Find");
        die();
      }
    }else{
        $rafer_email = "bdserver.live@gmail.com";
      $sql = mysqli_query($con,"INSERT INTO `rafer_user`(`user_email`, `rafer_use`, `bonus`) VALUES ('$email','bdserver.live@gmail.com','0')");
    }

    // rafer email check====
    $sql_check = mysqli_query($con,"SELECT * FROM `user` WHERE email = '$email'");
    $check = mysqli_num_rows($sql_check);
    if($check>=1){
        go_to("/create/res?error=email_allready_exist");
    }else{
      $password = $_REQUEST["password"];
      // made===
      $username_new = $fname."".rand("111","999");
      $validation = 0;
      $created =$date;
      $login = $created;
      $balance = 0;
      $rafer_balance = 0;
      $ip = $IP;
      $session = $session_hash;
      $stats = "Pending";
      $verify_code = rand("111111","999999");
      $_SESSION["Session_Validation"] = $session;
      // register($email,$full_name,$verify_code);
      // database
      $sql = mysqli_query($con,"INSERT INTO `user`(`username`, `full_name`, `password`, `email`, `verify_code`, `balance`, `rafer_balance`, `status`, `validation`, `created`, `login`, `ip`, `session`,`creator_email`) VALUES ('$username_new','$full_name','$password','$email','$verify_code','$balance','$rafer_balance','$stats','0','$created','$login','$ip','$session','$rafer_email')");
      // email verify code===========
      register($email,$full_name,$verify_code,"path");
    } 
  }
  // verify  code snippt
  if(isset($_REQUEST["verify"])){
    $verify_coad = $_REQUEST['verify_coad'];
    $session = $_SESSION["Session_Validation"];
    $check_sql = mysqli_query($con,"SELECT * FROM `user` WHERE verify_code = '$verify_coad' AND session = '$session'");
    $check = mysqli_num_rows($check_sql);
    if($check>0){
      $sql = mysqli_query($con,"UPDATE `user` SET `status`='Active',`validation`='Activated' WHERE verify_code = '$verify_coad'");
      header("location:../create/login");
    }else{
        header("location:../create/verify?error=verify_error");
    }
  }
  if(isset($_REQUEST["verify_resistation"])){
    $verify_coad = $_REQUEST['verify_coad'];
    $session = $_SESSION["Session_Validation"];
    $check_sql = mysqli_query($con,"SELECT * FROM `user` WHERE verify_code = '$verify_coad' AND session = '$session'");
    $check = mysqli_num_rows($check_sql);
    if($check>0){
      $sql = mysqli_query($con,"UPDATE `user` SET `status`='Active',`validation`='Activated' WHERE verify_code = '$verify_coad'");
      header("location:../create/login");
    }else{
        header("location:../create/verify_resistation?danger=verifycation Error try again");
    }
  }

  // login account==========
  if(isset($_REQUEST['login'])){
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $sql_login = mysqli_query($con,"SELECT * FROM `user` WHERE password = '$password' AND email = '$email'");
    $check = mysqli_num_rows($sql_login);
    if($check>0){
      $fetch = mysqli_fetch_assoc($sql_login);
      $_SESSION["User_Validate"] = $fetch['session'];
      $_SESSION["EMAIL"] = $fetch['email'];
      $_SESSION["USERNAME"] = $fetch['username'];
      $path ="/user/index.php";
      go_to($path);
    }else{
        header("location:../create/login?error=password_or_email");
    }
  }
  // forget password
  if(isset($_REQUEST['forget'])){
    $email = $_REQUEST['email'];
    $verify_code = rand("111111","999999");
    $sql = mysqli_query($con,"SELECT * FROM `user` WHERE  email = '$email'");
    $check = mysqli_num_rows($sql);
    if($check>0){
      $fetch = mysqli_fetch_assoc($sql);
      $session_hash = md5(sha1(rand("1111111","9999999")));
      $full_name = $fetch["full_name"];
      $sql = mysqli_query($con,"UPDATE `user` SET verify_code = '$verify_code', session='$session_hash' WHERE email = '$email'");
      $_SESSION["Session_Validation"] = $session_hash;
      if($sql==true){
        forget_password($full_name,$email,$verify_code);
      }
    }else{
      go_to("/create/forget?error=email_not_find");
    }
  }
  if(isset($_REQUEST["new_password"])){
    $password_one = $_REQUEST["password_one"];
    $session = $_REQUEST['session'];
    $sql = mysqli_query($con,"UPDATE `user` SET status = 'Active',validation='Activated',password = '$password_one' WHERE session = '$session'");
    unset($_SESSION["Session_Validation"]);
    $path ="/create/login";
    go_to($path);
  }
 ?>

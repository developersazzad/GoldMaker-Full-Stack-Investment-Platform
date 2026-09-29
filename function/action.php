<?php
include("../connection.php");
include("function.php");
if(isset($_REQUEST["admin_login_submit"])){
 $Admin_pass = trim($_REQUEST["admin_password"]); // Added trim to remove trailing spaces!
 $admin = admin_data();
 $database_pass = $admin["Password"];
 $check_password = password_verify($Admin_pass,$database_pass);

 $date = date("Y-m-d h:i:s");
 if($check_password==true){
   $session = "GM_".md5(sha1(rand(11111,99999)));
   $session_update = mysqli_query($con,"UPDATE `mainadmin` SET `Main_session`=\"$session\",`date`=\"$date\" WHERE 1");
   $_SESSION["ADMIN_SESSION"] = $session;
   go_to("admin/index?notification=success&msg=password success!&title=success");
 }else{
   go_to("admin_login?notification=danger&msg=wrong!&title=password not Match");
 }
}

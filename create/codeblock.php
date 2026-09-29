<?php
include("../function/function.php");
include("../function/smtp_shoot.php");

function total_withdrow($Email=""){
  global $con;
  $sql = mysqli_query($con,"SELECT SUM(Ammount) as withdrow_amt FROM `paymentwithdrow` WHERE email='$Email' AND `paymentwithdrow`.`Status` = 'success'");
  $ammount  = mysqli_fetch_assoc($sql);
  $ammount = $ammount["withdrow_amt"];
  return $ammount;
}
//=======================================
//==Investor SignUp===
//=======================================
if(isset($_REQUEST["Investor_signUp"])){
$UserEmail  = $_REQUEST["UserEmail"];
$mobile_number  = $_REQUEST["mobile_number"];
$new_password_one  = $_REQUEST["new_password_one"];
$new_password_tow  = $_REQUEST["new_password_tow"];
$FastName  = $_REQUEST["FastName"];
$LastName  = $_REQUEST["LastName"];
$country  = $_REQUEST["country"];
$rafer_coad  = $_REQUEST["rafer_coad"];
// must check trams useing validation js===
// $trams_check = $_POST["trams_check"];
if($rafer_coad!=""){
  $sql_valid = mysqli_query($con,"SELECT `RaferId` FROM `investoraccounts` WHERE My_RaferId='$rafer_coad'");
  $check = mysqli_num_rows($sql_valid);
  if($check==0){
    header("location:signup?notification=warning&title=Rafar code Error!&msg=Your Rafer Code Cannot Find Our Database.Use Another One or Blank...[Free For Use Our Offical Rafet Code - GM24]");
    die();
  }
}
$sql_check=mysqli_query($con,"SELECT Email from investoraccounts WHERE Email='$UserEmail'");
$main_duplicate_check = mysqli_num_rows($sql_check);
if($main_duplicate_check>0){
   header("location:signup?notification=warning&title=Email Already Exist&msg=Your Email already exisest Try New Email Or Reset Password Existing Email");
}else{
if($new_password_one==$new_password_tow){
  $password_hash = password_hash($new_password_one,PASSWORD_DEFAULT);
  $date = date("Y-m-d h:i:s");
  $VerificationCode  = rand(111111,999999);
  // make varification code is unique===
  $VerificationCode = unique_varification_code($VerificationCode);
  // make varification code is unique===
  $My_raferId = "GM".rand(1111,9999);
  $My_raferId = unique_raferId($My_raferId);
  $sql = mysqli_query($con,"INSERT INTO `investoraccounts` (`validate_key_unique`,
    `FastName`,
    `LastName`,
    `Email`,
    `mobile`,
    `country`,
    `Password`,
    `VerificationCode`,
    `Status`,
    `lavel`,
    `MainBalance`,
    `BonusBalance`,
    `ProfilePic`,
    `docs_tow`,
    `docs_one`,
    `RaferId`,
    `My_RaferId`,
    `Date`)
    VALUES(
      '0',
      '$FastName',
      '$LastName',
      '$UserEmail',
      '$mobile_number',
      '$country',
      '$password_hash',
      '$VerificationCode',
      'Inactive',
      'NewBee',
      '0',
      '0',
      'userexample.png',
      '0',
      '0',
      '$rafer_coad',
      '$My_raferId',
      '$date')");
      $insert_id = mysqli_insert_id($con);
  if($sql==true){
    // insert notification===
    $sql_notification = mysqli_query($con,"INSERT INTO `investor_notification`( `user_id`, `email`, `notification`) VALUES ('$insert_id','Yes','Yes')");
    // send varification code==
      $smtp = verification_coad($UserEmail,$VerificationCode);
      if($smtp=="Done"){
       header("location:verify?smtp=success&email=$UserEmail&go=signin");
     }else{
       echo "Smtp Error";
     }

  }else{
    echo "Database Error";
  }
}else{
   header("location:signup?notification=warning&title=Password Retupr Error&msg=You Enter password and retype password Not Same.");
   }
 }
}

if(isset($_POST["login_submit"])){
  $loginEmail = $_POST["loginEmail8"];
  $lPassword = $_POST["loginPassword8"];
  $validate = find_in_validate($loginEmail);
  if($validate=="valid"){
      $sql = mysqli_query($con,"SELECT `validate_key_unique`,`Password` FROM `investoraccounts` WHERE Email='$loginEmail'");
      $fetch_data = mysqli_fetch_assoc($sql);
      $DPassword = $fetch_data['Password'];
      $check = password_verify($lPassword,$DPassword);
      if($check==true){
        $f_o_key = $fetch_data['validate_key_unique'];
        // hash key gamerator===
        $rand_str = random_strings(30);
        $hashKey = md5(sha1(rand(12233445566,998877665544).$rand_str));
        // UPDATE hash Database===
        $hash1 = VALIDATE_HASH_USER($hashKey,$f_o_key);
        // hash key gamerator===
        if($hash1==1){
          $_SESSION["VALIDE_INVESTOR_KEY_GM"] = $hashKey;
          // set activity===
          // Activity======
          $ActivityName = "account_login";
          $AcMsg = "Login Sucess";
          set_in_activity($loginEmail,$ActivityName,$AcMsg,"user");
          //=Activity========
          header("location:../user/index?notification=success&title=Login Success&msg=Welcome Investor...");
        }else{
          echo "error hash key update database";
        }

      }else{
        header("location:signin?notification=warning&title=Password Wrong&msg=Your Password Wrong please Type Carrect password");
      }

  }else{
    header("location:signin?notification=warning&title=Email Don't Find&msg=Your Email New For GoldMaker.So Please Try to Sign Up <a style='background:white;border-radius:4px;color:blue;font-weight:800;padding:4px 6px' href='signup'>Click Here</a>");
  }
}
// Forget Password============
if(isset($_POST["forgetSubmit"])){
 $ForgetEmail = $_POST["ForgetEmail"];
 $validate = find_in_validate($ForgetEmail);
 if($validate=="valid"){
   $VCode = rand(111111,999999);
   // make varification code is unique===
   $VCode = unique_varification_code($VCode);
   $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `VerificationCode`='$VCode' WHERE Email='$ForgetEmail'");
   // send varification code==
     $smtp = verification_coad($ForgetEmail,$VCode);
     if($smtp=="Done"){
      header("location:verify?smtp=success&email=$ForgetEmail&go=reset-password");
    }else{
      echo "Smtp Error";
    }
   // send varification code==
 }else{
     header("location:forget-password?notification=warning&title=Email Don't Find&msg=Your Email New For GoldMaker.So Please Try to Sign Up <a style='background:white;border-radius:4px;color:blue;font-weight:800;padding:2px 2px' href='signup'>Click Here</a>");
 }
}

// Rest Password====
if(isset($_POST["Password_restEnter"])){
  $password_01 = $_POST["new_password_01"];
  $password_02 = $_POST["new_password_02"];
  $ses_email = $_SESSION["RESET_EMAIL"];
  if($ses_email==""){
    header("location:forget-password?notification=warning&title=Try Again&msg=Please Try Again");
    die();
  }
  if($password_01==$password_02){
    $password_hash = password_hash($password_01,PASSWORD_DEFAULT);
    $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `Password`='$password_hash' WHERE Email='$ses_email'");
    if($sql==true){
      header("location:reset-done-thanks");
    }else{
      echo "database Error";
    }

  }else{
    header("location:reset-password?notification=warning&title=Password Retype Wrong&msg=Please Type New and Confirm tow password are same.");
  }
}
 ?>

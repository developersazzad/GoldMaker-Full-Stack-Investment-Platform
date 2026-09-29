<?php
include("../connection.php");
include("codeblock.php");
 if(isset($_GET["smtp"])){
   $_SESSION["GO_PAGE"] = $_GET["go"];
   $_SESSION["Email_Resend"] = $_GET["email"];
 }

 if(isset($_GET["resend"])){
  if($_GET["resend"]=="GMotp"){
    $email = $_SESSION["Email_Resend"];
    $VerificationCode = rand(111111,999999);
    $VerificationCode = unique_varification_code($VerificationCode);
    // update sql====
    $sql_update = mysqli_query($con,"UPDATE `investoraccounts` SET `VerificationCode`='$VerificationCode' WHERE Email='$email'");
    // update sql====
    $smtp = verification_coad($email,$VerificationCode);
    if($smtp=="Done"){
     session_destroy();
     header("location:verify?smtp=success&email=$email&go=signin&notification=success&title=Resend Success&msg=Check Your $email this Email.[Copy and Past Code...]");
   }else{
     echo "Smtp Error";
   }
  }
 }
if(isset($_POST["verify_otp_t"])){
  $otp_box = $_POST["otp_box"];
  $date = date("Y-m-d");
  $destination = $_SESSION["GO_PAGE"];
  $sql_check = mysqli_query($con,"SELECT `VerificationCode`, `Date` FROM `investoraccounts` WHERE `VerificationCode`='$otp_box'");
  $check = mysqli_num_rows($sql_check);
  if($check>0){
    $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `Status`='Active' WHERE VerificationCode='$otp_box'");
    if($sql==true){
      if($destination=="signin"){
        $destination = 'splash';
      }
      $rest_email = $_SESSION["Email_Resend"];
      session_destroy();
      header("location:$destination?GMemail=$rest_email");
    }

  }else{
    // header("location:verify?notification=warning&title=Code or Date Error&msg=Your varification Code Cannot Match Or Your Code Old One More Day.[Try Resend And past Code]");
  }

}
?>
 <!doctype html>
<html lang="en" class="dark-mode h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Verify Goldmaker Signup</title>
    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../user/assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="../user/assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../user/assets/img/favicon16.png" sizes="16x16" type="image/png">
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- style css for this template -->
    <link href="../user/assets/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100" data-page="verify">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="../assets/images/logo/logo.png" alt="Logo">
                </div>
            </div>
        </div>
    </div>
    <!-- loader section ends -->
 <style type="text/css">
 .dark-bg{
     background-color: var(--fimobile-theme-color);
     background-image: unset !important;
     /* url("../user/assets/img/backgorund-image3.svg"); */
  }
  </style>
    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto">
                            <a href="signin.html" target="_self" class="btn btn-light btn-44">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-light btn-44 invisible"></a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <h1 class="mb-4 text-color-theme">Verify OTP</h1>
                  <img style="max-width:300px;margin-top:-10px" class="" src="../assets/images/logo/logo.png" alt="">
                <p class="text-muted mb-4">Verify OTP sent to your provided email address and phone number</p>
            <form name="verify_Form" class="" method="post">
                <div class="form-floating is-valid mb-3">
                  <input name="otp_box" type="text" class="form-control" value="" placeholder="Enter OTP" id="otp">
                  <label for="otp">Enter OTP</label>
                 </div>
                 <button name="verify_otp_t" role="button" type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">
                  Verify
                </button>
             </form>
            </div>
            <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
                    <div class="col-auto text-center">
                        <span class="progressstimer">
                            <img src="../user/assets/img/progress.png" alt="">
                            <span class="timer" id="timer">3:00</span>
                        </span>
                        <br />
                        <p class="mb-3"><span class="text-muted">Didn't received yet?</span>
                      <a href="?resend=GMotp">Resend OTP</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
     include("footer.php");
     ?>

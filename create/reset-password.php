<?php
 include("header.php");
 if(isset($_GET["GMemail"])){
   $_SESSION["RESET_EMAIL"] = $_GET["GMemail"];
 }

 ?>
 <!-- Begin page content -->
 <!-- Begin page content -->
 <main class="container-fluid h-100">
     <div class="row h-100 overflow-auto">
         <div class="col-12 text-center mb-auto px-0">
             <header class="header">
                 <div class="row">
                     <div class="col-auto">
                         <a href="forgot-password.html" target="_self" class="btn btn-light btn-44"><i class="bi bi-arrow-left"></i></a>
                     </div>
                     <div class="col">
                         <div class="logo-small"></div>
                     </div>
                     <div class="col-auto">
                         <a href="" target="_self" class="btn btn-light btn-44 invisible"></a>
                     </div>
                 </div>
             </header>
         </div>
         <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
             <h1 class="mb-4 text-color-theme">Reset Password</h1>
             <p class="text-muted mb-4">Please create unique password for your account which contains at-least 1capital latter & 1 special character sign</p>
            <form name="Rest_password_form" class="form"  method="post">
             <div class="form-group form-floating is-valid mb-3">
                 <input name="new_password_01" type="text" class="form-control" value="" id="newpass" placeholder="New Password">
                 <label class="form-control-label" for="newpass">New Password</label>
             </div>
             <div class="form-group form-floating is-invalid mb-3">
                 <input name="new_password_02" type="password" class="form-control " id="password" placeholder="Confirm New Password">
                 <label class="form-control-label" for="password">Confirm New Password</label>
                 <button type="button" class="btn btn-link text-danger tooltip-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Enter valid Password" id="passworderror">
                     <i class="bi bi-info-circle"></i>
                 </button>
             </div>
             <button name="Password_restEnter" type="submit" class="btn btn-lg btn-default w-100 shadow" name="GM_rest_password"> Update Password</button>
            </form>
         </div>
         <div class="col-12 text-center mt-auto">
             <div class="row justify-content-center footer-info">
                 <div class="col-auto">

                 </div>
             </div>
         </div>
     </div>
 </main>

 <?php
   include("footer.php");
  ?>

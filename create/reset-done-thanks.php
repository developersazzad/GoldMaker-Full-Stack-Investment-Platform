<?php
  include("header.php");
 ?>
 <!-- Begin page content -->
 <main class="container-fluid h-100">
     <div class="row h-100 overflow-auto">
         <div class="col-12 text-center mb-auto px-0">
             <header class="header">
                 <div class="row">
                     <div class="col-auto">
                     </div>
                     <div class="col">
                         <div class="logo-small">
                               <img style="max-width:300px;margin-top:-10px" class="" src="../assets/images/logo/logo.png" alt="">
                         </div>
                     </div>
                     <div class="col-auto">
                     </div>
                 </div>
             </header>
         </div>
         <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
             <img src="assets/img/thankyou.png" alt="" class="mw-100 mx-auto my-4">
             <h1 class="mb-4 text-color-theme">Awesome!</h1>
             <p class="text-muted mb-4">Your password has been set to new provided password. Please sign in now with your new credentials.</p>
             <a href="signin" target="_self" class="btn btn-lg btn-info w-100 shadow btn-primary">Sign in</a>
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

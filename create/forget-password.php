<?php
 include("header.php");
 ?>
 <!-- Begin page content -->
 <main class="container-fluid h-100">
     <div class="row h-100 overflow-auto">
         <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
           <div  class="col align-self-center m7-3">
              <div class="logo-sm">
                <div class="d-md-block py-5"></div>
              </div>
           </div>
             <h3 class="mb-4 text-color-theme">Reset Your Password</h3>
             <p class="text-muted mb-1">Provide your registered email ID</p>
            <form name="ForGetPassword" class="form" method="post">
             <div class="form-floating is-valid mb-3">
                 <input name="ForgetEmail" type="text" class="form-control" value="" placeholder="Email ID" id="emails">
                 <label for="emails">Email ID</label>
             </div>
             <button name="forgetSubmit" role="button" type="submit" name="button" class="btn btn-lg btn-default w-100  shadow">Reset Password</button>
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

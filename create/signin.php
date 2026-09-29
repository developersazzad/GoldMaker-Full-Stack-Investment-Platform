<?php
 include("header.php");
 ?>
 <style type="text/css">
 .dark-bg{
     background-color: var(--fimobile-theme-color);
     background-image: url("../user/assets/img/backgorund-image3.svg");
  }
   .signin_container{
     display: flex;
     justify-content: center;
     align-items: center;
   }
   .col.align-self-center.m7-3 {
       transform: translateY(0px);
   }
 </style>
    <!-- Begin page content -->
    <main class="container-fluid signin_container h-100">
        <div class="row">
            <div class="col-12 text-center mb-auto px-0">
              <div class="col-12 text-center mb-auto px-0">
                  <header class="header">
                      <div class="row">
                          <div class="col-auto"></div>
                          <div class="col align-self-center m7-3 fixed">
                              <h5>Sign In</h5>
                              <img style="max-width:300px;margin-top:-10px" class="" src="../assets/images/logo/logo.png" alt="">
                          </div>
                          <div class="col-auto"></div>
                      </div>
                  </header>
              </div>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-5 mx-auto align-self-center text-center pb-4">
                <form name="user_loginForm" enctype="multipart/form-data" method="post" class="was-validated">
                    <div class="form-floating is-valid mb-3">
                         <input name="loginEmail8" type="text" class="form-control" value="" placeholder="Email" id="username">
                         <label for="username">Email</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                         <input name="loginPassword8" type="password" class="form-control" value="" placeholder="Password" id="password">
                         <label for="password">Password</label>
                    </div>
                    <p class="mb-3"><span class="text-muted">By clicking on Signup button, you are agree to our</span>
                      <a href="#trams">Terms and Conditions</a>
                      <a style="color:orange;font-weight:700;margin-left:10px" href="forget-password">Forget Password</a>
                    </p>
                    <button name="login_submit" role="button" type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">Sign in</button>
                </form>
                <a href="signup">Create New Account</a>
            </div>
        </div>
    </main>

    <?php
      include("footer.php");
     ?>

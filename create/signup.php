<?php
 include("header.php");
 ?>
 <style type="text/css">
 .dark-bg{
     background-color: var(--fimobile-theme-color);
     background-image: url("../user/assets/img/backgorund-image.svg");
  }
 @media(max-width:767px){
  header.header.sinup_header {
     height: 160px;
    }
    html.h-100{
      height:unset!important;
    }
  }
 </style>
    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header sinup_header">
                    <div class="row">
                        <div class="col-auto">
                            <a href="../index" target="_self" class="btn btn-light btn-44">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                        </div>
                       <div style="transform :translateY(15px) !important;" class="col align-self-center logo_main m7-3">
                            <h5>Sign up</h5>
                            <img style="max-width:300px;margin-top:-10px" class="" src="../assets/images/logo/logo.png" alt="">
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-light btn-44 invisible"></a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-5 mx-auto align-self-center text-center pb-4">
              <form name="signUpInvestor" id="signUpInvestor" class="was-validated" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating is-valid mb-3">
                        <input name="FastName" type="text" class="form-control" value="" placeholder="Fast Name" id="fName">
                        <label for="fName">Fast Name</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-floating is-valid mb-3">
                        <input name="LastName" type="text" class="form-control" value="" placeholder="Last Name" id="Lname">
                        <label for="Lname">Last Name</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-floating is-valid mb-3">
                        <select name="country" class="form-control" id="country">
                          <option value="">Select</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Dubai">Dubai</option>
                          <option value="Oman">Oman</option>
                          <option value="Usa">USA</option>
                          <option value="India">India</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Soudia">Soudia</option>
                          <option value="Malaysia">Malaysia</option>
                        </select>
                        <label for="country">Contry</label>
                    </div>
                  </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-floating is-valid mb-3">
                            <input name="UserEmail" type="text" class="form-control" value="" placeholder="Email" id="email">
                            <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="form-floating is-valid mb-3">
                            <input name="mobile_number" type="text" class="form-control" value="" placeholder="Mobile" id="Mobile">
                            <label for="Mobile">Mobile</label>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="form-floating is-valid mb-3">
                            <input name="new_password_one" type="password" class="form-control" value="" placeholder="Password"
                                id="password">
                            <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="form-floating is-invalid mb-3">
                            <input name="new_password_tow" type="text" class="form-control" placeholder="Confirm Password" id="confirmpassword">
                            <label for="confirmpassword">
                              Confirm Password</label>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="form-floating is-valid mb-3">
                            <input name="rafer_coad" type="text" class="form-control" value="" placeholder="Rafer Code" id="Rafar_code">
                            <label for="password">Rafer Code [Optional]</label>
                        </div>
                     </div>
                     <div class="col-12 col-lg-12">
                       <div style="background: #0000003d;padding: 10px;border-radius: 8px;" class="form-floating is-valid mb-3">
                         <div style="width: 300px;" class="form-check form-switch">
                           <input name="trams_check" style="margin-left: -13px;padding: 7px;" class=" ml-3 form-check-input" type="checkbox" id="trams_and_condition">
                           <label class="form-check-label text-muted px-2 " for="trams_and_condition">Agree Trams and Conditions</label>
                         </div>
                       </div>
                    </div>
                    </div>
                    <p class="mb-3"><span class="text-muted">By clicking on Signup button, you are agree to our</span>
                    <a href="#trams">Terms and Conditions</a></p>
                    <input class="btn btn-lg btn-default w-100 mb-4 shadow" type="submit" name="Investor_signUp" value="Sign up">
                </form>
                <a href="signin">Or Already Have Account.</a>
            </div>
        </div>
    </main>
<?php
  include("footer.php");
 ?>

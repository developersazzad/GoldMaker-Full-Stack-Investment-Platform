<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <!-- main page content -->
 <div class="main-container container">
   <!-- Contact us form -->
   <div class="row mb-4">
       <div class="col-12 col-md-6 col-lg-4 mx-auto">
           <h3 class="mb-2 text-center text-color-theme">Make your move easy</h3>
           <p class="text-muted mb-4 text-center">Get in touch with us, We give you exact and right information to you!</p>
         <form name="form_support" class="form_support" enctype="multipart/form-data"  method="post">
           <div class="row">
             <div class="col">
               <div class="form-group form-floating mb-3">
                  <input name="supportSubject" type="text" list="supportSubject" class="form-control" value="" id="address0" placeholder="Select Subject">
                  <datalist id="supportSubject">
                      <option value="Tecnical Problem">
                      <option value="Payment adding problem">
                      <option value="Payment Withdrow problem">
                      <option value="Rafer Bonus Problem">
                      <option value="Account Related Problem">
                      <option value="Other Problem">
                  </datalist>
                  <label class="form-control-label" for="subject">Select Subject</label>
                </div>
             </div>
             <div class="col">
               <div class="form-group form-floating mb-3">
                  <input name="SupportSS" type="file" id="SS"  class="form-control" value="" >
                  <label class="form-control-label" for="SS">Screenshoot Optional</label>
                </div>
             </div>
           </div>

           <div class="form-floating  mb-3">
               <textarea name="support_text" style="min-height:180px" class="form-control h-auto" placeholder="Your Query" id="confirmpassword">I need help about...</textarea>
               <label for="confirmpassword">Your Query</label>
           </div>
           <button name="support_submit" role="button" type="submit" class="btn btn-default btn-lg w-100">Submit</button>
        </form>
       </div>
   </div>

   <!-- Contact us blocks -->
   <div class="row justify-content-center">
        <div class="col-6 col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <i class="avatar avatar-60 bi bi-question-circle fs-4 bg-theme-light text-color-theme rounded-circle mb-4"></i>
                    <h6 class="mb-2">Sales</h6>
                    <p class="text-muted small">We'l like to hear from you, how we can help & work.</p>
                    <a href="mailto:<?php echo $infoLink['email1'] ?>" class="btn btn-sm btn-default">
                     <i class="bi bi-envelope mx-1"></i> Mail us</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <i class="avatar avatar-60 bi bi-newspaper fs-4 bg-theme-light text-color-theme rounded-circle mb-4"></i>
                    <h6 class="mb-2">News & Events</h6>
                    <p class="text-muted small">We'l like to hear from you, how we can help & work.</p>
                    <a href="<?php echo $infoLink['email2'] ?>" class="btn btn-sm btn-default"><i class="bi bi-envelope mx-1"></i> Mail us</a>
                </div>
            </div>
        </div>
       <!-- all support list======================================= -->


           <div class="col-12 mb-3">
               <h6 class="title">Investor Support List </h6>
           </div>

          <?php
            $ii = 1;
            foreach ($INS_support_H as $data) {
              $Subject = $data["Subject"];
              $Help_text = $data["Help_text"];
              $ht_X = explode(" ",$Help_text);
              if(!empty($ht_X[0])){
                $ht_x = $ht_X[0];
              }else{
                $ht_x = "";
              }
              if(!empty($ht_X[1])){
                $ht_x1 = $ht_X[1];
              }else{
                $ht_x1 = "";
              }
              if(!empty($ht_X[2])){
                $ht_x2 = $ht_X[2];
              }else{
                $ht_x2 = "";
              }
              if(!empty($ht_X[3])){
                $ht_x3 = $ht_X[3];
              }else{
                $ht_x3 = "";
              }
              $help_text_new = $ht_x." ".$ht_x1." ".$ht_x2."  ".$ht_x3." ....";
              $Admin_reply = $data["Admin_reply"];
              $screenshoot_admin = $data["screenshoot_admin"];
              $screenshoot_user = $data["screenshoot_user"];
              $Date = $data["Date"];
              $Date = strtotimeMake($Date);
              $status  = $data['Status'];
              if($status=="replay"){
                 $status = "Close";
                 $icon = "./assets/icons/low/active 3.png";
                 $class = "success";
              }else{
                $status = "Open";
                $icon = "./assets/icons/low/alert 2.png";
                $class = "default";
              }
               ?>
           <div class="col-12 col-md-6 col-lg-6">
               <div class="card mb-3">
                   <div class="card-body">
                       <div class="row">
                           <div class="col-auto">
                               <div class="avatar avatar-44 shadow-sm rounded-10 text-white">
                                  <img src="<?php echo $icon ?>" alt="">
                               </div>
                           </div>
                           <div class="col align-self-center ps-0">
                               <p class="mb-0 size-12"><span class="text-color-theme fw-medium"><?php echo $Subject ?></span>
                                   <span class="text-muted ">Issues By <?php echo $Date ?></span>
                               </p>
                               <p><?php echo $status ?> <small class="size-12 text-muted"><?php echo $help_text_new ?></small></p>
                           </div>
                           <div class="col-auto">
                              <a href="javascript:void(0)" class="btn btn-<?php echo $class ?> btn-44 shadow-sm" data-bs-target="#admin_response_<?php echo $ii ?>" data-bs-toggle="modal">
                                   <i class="bi bi-arrow-up-right-circle"></i>
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
        <!-- ============================== -->
        <!-- MODEL SPACE=============== -->
        <!-- ============================== -->
        <div class="modal fade" id="admin_response_<?php echo $ii ?>" tabindex="-1" aria-labelledby="cammodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xmd modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-center" id="cammodalLabel">Admin Response</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <div class="card">
                        <div class="card-body">
                          <h3 class="display-6">
                            Your Text :
                          </h3>
                          <img src="../assets/images/SupportImg/<?php echo $screenshoot_user ?>" class="my-2 response_img w-100 image-fluid" alt="">
                          <p>
                            <small><?php echo $Help_text ?></small>
                          </p>
                          <hr>
                          <h3 class="display-5">Admin Response</h3>
                          <img src="../assets/images/SupportImg/<?php echo $screenshoot_admin ?>" class="my-2 response_img w-100 image-fluid" alt="">
                          <p class="lead">
                            <small><?php echo $Admin_reply ?></small>
                          </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================== -->
        <!-- MODEL SPACE=============== -->
        <!-- ============================== -->
      </div>
           <?php
           $ii++;
         }
        ?>

 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

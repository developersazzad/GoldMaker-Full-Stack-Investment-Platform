<?php
  $data_pages = "rewards";
  include("main_header.php");
 ?>
 <?php
   include("suspend_status.php");
  ?>
 <style type="text/css">
  .card_rafer_user{
    justify-content: center;
    align-items: center;
  }
 </style>
 <!-- main page content -->
 <div class="main-container container">
   <?php
     include("./depandency/comon/notification-posh.php");
     include("./depandency/comon/rafer_code_template.php");
    ?>

   <!-- my rafer User -->
   <div class="row mb-3">
     <div class="col">
       <h2 class="text-center">Your Rafer User</h2>
     </div>
   </div>
   <div class="row mb-3">
        <?php
          foreach ($rafer_user as $data) {
            ?>
            <div class="col-4 col-lg-2 m-0 p-0">
              <div class="m-2 card text-center card_rafer_user">
                <div class="card-body">
                  <div class="avatar avatar-50 shadow-sm mb-2 rounded-10 theme-bg text-white">
                    <img src="../assets/images/InvestorProfilePic/<?php echo $data["ProfilePic"] ?>" alt="" class="" />
                  </div>
                  <p class="text-color-theme size-12 small mb-1"><?php echo $data["FastName"] ?></p>
                  <div class="tag bg-primary border-warning text-white p-1"><?php echo $data["lavel"] ?></div>
                </div>
              </div>
            </div>
            <?php
          }
         ?>
      </div>
      <?php
       if($url_name=="rafer"){
         $page = "rafer_pages";
         $banner_is = Banner_all($page);
         if(!empty($banner_is)){
           foreach ($banner_is as $banner) {
             $banner_title = $banner["banner_title"];
             $banner_desc  = $banner["banner_desc"];
             $button_link  = $banner["button_link"];
             $banner_image = $banner["banner_image"];
            include("./depandency/index/admin_banner2.php");
             }
           }
         }
         ?>
 </div>
 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

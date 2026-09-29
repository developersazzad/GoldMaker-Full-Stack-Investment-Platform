<?php
  $data_pages = "rewards";
  include("main_header.php");
?>
       <!-- main page content -->
        <div class="main-container container">
           <?php
              // admin notice
                if($url_name=="index"){
                  $page = "user_deshbord";
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
           <!-- user indinty -->
           <?php include("./depandency/index/user_idintity.php"); ?>
            <!-- money request received -->
            <?php
            if($main_tanince_mode=="Yes"){
              include("./depandency/index/main_taince_mode.php");
            }
              include("./depandency/index/stats_mode.php");
              include("./depandency/comon/notification.php");
              include("./depandency/comon/notification-posh.php");
              include("./depandency/index/sub_wallat.php");
              include("./depandency/index/earnings_tab.php");
              // include("./depandency/index/user-stats.php");
              // include("./depandency/index/live_pakages_countdown.php");
              include("./depandency/index/all_user_badges.php");
              include("./depandency/comon/model.php");
              // wallet
             ?>
            <!-- swiper credit cards -->
             <!-- ================================= -->
    </main>
    <!-- Page ends-->
  <?php
    include("mobile_menu.php");
    include("footer.php");
   ?>

<?php
  $data_pages = "rewards";
  // pakages_name Set Name
  include("main_header.php"); 
 ?>
 <!-- main page content -->
 <div class="main-container container">
   <?php
    if($url_name=="all_pakages"){
      $page = "all_plan";
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
   <?php
    // include("./depandency/index/admin_banner.php");
    include("./depandency/index/sub_wallat.php");
    include("./depandency/comon/all_admin_pakages.php");
    ?>
  </div>
  <!-- main page content -->
   <?php
    include("mobile_menu.php");
    include("footer.php");
    ?>

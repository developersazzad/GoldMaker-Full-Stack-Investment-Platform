<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <!-- main page content -->
 <div class="main-container container">
   <?php
    if(isset($_GET["page"])){
      $page = $_GET["page"];
      if($page=='w_h_a'){
        include("./depandency/index/withdrow_history_all.php");
      }elseif($page=='a_h_a'){
        include("./depandency/index/paymentadd_history_all.php");
      }
    }
    ?>
 </div>
 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

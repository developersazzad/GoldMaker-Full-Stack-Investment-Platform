<?php
  $data_pages = "rewards";
  include("main_header.php"); 
?>
<?php
  include("suspend_status.php");
 ?>
<div class="main-container container">
<?php
  if($url_name=="wallat"){
    $page = "wallat_pages "; // trailing space matches the admin option
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
  <!-- wallet balance -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-auto">
          <figure class="avatar avatar-44 rounded-10">
                <img src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
          </figure>
        </div>
        <div class="col px-0 align-self-center">
          <p class="mb-0 text-color-theme"><?php echo $FastName." ".$LastName ?></p>
          <p class="text-muted">
            Account Status - <?php if($Status=="Active"){
              echo $Status." But Not Complete";
            }elseif($Status=="Completed"){
              echo $Status;
            }elseif($Status=="Inactive"){
              echo $Status;
            }elseif($Status=="Suspend"){
              echo $Status;
            }elseif($Status=="Unseen"){
              echo $Status." Admin Check And Change Status.";
            }
            ?>
          </p>
        </div>
        <div class="col-auto">
          <a href="#assetstabs" class="btn btn-44 btn-light shadow-sm">
            <i class="bi bi-plus-circle"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="card theme-bg text-white border-0 text-center">
      <div class="card-body">
        <h1 class="display-1 my-2"><?php echo $BonusBalance ?></h1>
        <p class="text-muted mb-2">Wallet Balance in USD</p>
      </div>
    </div>
  </div>
  <!-- upcomiong balance -->

  <!-- Balance Convarter================= -->
  <?php
    include("./depandency/comon/notification-posh.php");
    include("./depandency/index/balance_convarter.php");
   ?>
  <!-- Balance Convarter================= -->

  <!-- tabs structure -->
  <ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">Add Funds</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">withdraw</button>
    </li>
  </ul>
  <div class="tab-content" id="assetstabsContent">
    <!-- ======================================================= -->
    <!-- start tabpane 1 -->
    <!-- ======================================================= -->
    <?php
    include("./depandency/index/add_money_template.php");
    include("./depandency/index/withdrow_money_template.php");
    include("./depandency/index/see_help_model.php");
     ?>
  </div>
</div>
<!-- main page content ends -->
</main>
<!-- Page ends-->
<?php
    include("mobile_menu.php");
    include("footer_wallat.php");
   ?>

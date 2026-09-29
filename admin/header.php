<?php
// set default
$row_docs99 ="";

include("../connection.php");
include("../function/function.php");
include("../function/smtp_shoot.php");
include("codeblock.php");
// admin all function==
$admin = admin_data();
$plan_fanc = all_plan();
$all_investor = All_Investor_Data();
$pakage_fanc = all_pakages();
$withdrow_req_fanc = all_withdrowReq();
$payment_add_req = all_addpayment_request(); 
$All_Ins_live_pkg = all_Ins_live_pakages();
$trams_all = trams_and_condition_admin();
$important_setting = Important_setting();
$admin_banner = admin_banner();
$payment_method = payment_method_data();
$bank_payment_method = payment_method_Bank();
$binance_method = binanceM_data();
$tutorials =tutorials();
$badgh_all = Badges_data();
$acept_pay_bank = bank_list();
if(isset($_SESSION)){
 $ADMIN_HASH = $_SESSION["ADMIN_SESSION"];
 $admin_Main_hash = $admin["Main_session"];
 if($ADMIN_HASH==""){
   go_to("admin_login");
 }elseif($admin_Main_hash!=$ADMIN_HASH){
      go_to("admin_login");
   }else{
     console_log("all is ok");
   }
 }
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="া">
  <meta name="author" content="">
  <meta name="keywords" content="admin,admin dashboard,admin panel,developersazzad,sazzad,behance/sazzad,web developer sazzad,developersazzad,sazzad.info">
  <!-- FAVICON -->
 <meta property="og:image" itemprop="image" content="https://bdserver.live/assets/images/brand/logo-2.png"/>
 <meta property="og:type" content="website">
 <meta property="og:image:type" content="image/png"/>
  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />
  <!-- TITLE -->
  <title></title>
  <!-- BOOTSTRAP CSS -->
  <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!-- STYLE CSS -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/dark-style.css" rel="stylesheet" />
  <link href="assets/css/transparent-style.css" rel="stylesheet">
  <link href="assets/css/skin-modes.css" rel="stylesheet" />
  <!--- FONT-ICONS CSS -->
  <link href="assets/css/icons.css" rel="stylesheet" />
  <!-- COLOR SKIN CSS -->
  <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />
  <!-- INTERNAL Switcher css -->
  <link href="assets/switcher/css/switcher.css" rel="stylesheet" />
  <link href="assets/switcher/demo.css" rel="stylesheet" />
  <!-- parsonal style sheet -->
  <link rel="stylesheet" href="assets/css/master.css">
  <!--Start of Tawk.to Script-->
  </style>
</head>

<body class="app sidebar-mini ltr light-mode">

  <!-- GLOBAL-LOADER -->
  <div id="global-loader">
    <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
  </div>
  <!-- /GLOBAL-LOADER -->
  <!-- PAGE -->
  <div class="page">
    <div class="page-main">
      <!-- app-Header -->
      <div class="app-header header sticky">
        <div class="container-fluid main-container">
          <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.php">
              <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
              <img src="assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->

            <div class="d-flex order-lg-2 ms-auto header-right-icons">
              <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
              </button>
              <div class="navbar navbar-collapse responsive-navbar p-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                  <div class="d-flex order-lg-2">
                    <div class="dropdown d-flex">
                        <i class="flag flag-bd"></i>
                    </div>
                    <!-- Popup Box -->
                    <div class="d-flex country">
                      <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                        <span class="dark-layout"><i class="fe fe-moon"></i></span>
                        <span class="light-layout"><i class="fe fe-sun"></i></span>
                      </a>
                    </div>
                    <!-- Theme-Layout -->

                    <div class="dropdown d-flex">
                      <a class="nav-link icon full-screen-link nav-link-bg">
                        <i class="fe fe-minimize fullscreen-button"></i>
                      </a>
                    </div>

                    <!-- SIDE-MENU -->
                    <div class="dropdown d-flex profile-1">
                      <a href="profile.php" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                          <img src="../assets/images/logo/Goldmaker-circle-cool-sm.png" alt="profile-user" class="avatar  profile-user brround cover-image">
                      </a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading">
                          <div class="text-center">
                            <h5 class="text-dark mb-0 fs-14 fw-semibold">
                            Admin Main</h5>
                            <small class="text-muted">Gold Maker</small>
                          </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="?go_to=/user/profile">
                          <i class="dropdown-icon fe fe-user"></i> Profile
                        </a>
                        <a class="dropdown-item" href="logout.php" >
                          <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /app-Header -->

      <!--APP-SIDEBAR-->
      <div class="sticky">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar">
          <div class="side-header">
            <a class="header-brand1" href="index.php">
              <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
              <img src="assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
              <img src="assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
              <img src="assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
          </div>
          <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
              </svg></div>
            <ul class="side-menu">
              <li class="sub-category">
                <h3>Main</h3>
              </li>
              <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
              </li>
              <li class="sub-category">
                <h3>Sub Categories</h3>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="all_investor"><i class="side-menu__icon  fa fa-users"></i><span class="side-menu__label">All Investor</span> </a>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="withdrow_payments"><i class="side-menu__icon  fa fa-mail-reply"></i><span class="side-menu__label">Withdrow Request</span><span
                    class="badge bg-orange br-5 side-badge blink- text pb-1">$$</span> </a>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="add_money_request"><i class="side-menu__icon  fa fa-mail-forward"></i><span class="side-menu__label">Add Request</span><span
                    class="badge bg-red br-5 side-badge blink- text pb-1">$$$</span> </a>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="all_plan"><i class="side-menu__icon  fa fa-th-large"></i><span class="side-menu__label">Plan</span><span class="badge bg-primary br-5 side-badge pb-1"></span> </a>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="all_pakage"><i class="side-menu__icon  fa fa-th"></i><span class="side-menu__label"> Pakages</span><span class="badge bg-primary br-5 side-badge pb-1">New</span> </a>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="landing_page_cust"><i class="side-menu__icon fa fa-object-group"></i><span class="side-menu__label">Website Customizer</span><span class="badge bg-secondary br-5 side-badge blink-text pb-1">Hot</span></a>
              </li>
              <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="panel_cust"><i class="side-menu__icon  fa fa-object-ungroup"></i><span class="side-menu__label">Panel Customizer</span></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="trams_condition"><i class="side-menu__icon fa fa-gavel"></i><span class="side-menu__label">Trams & Condition</span></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="investor_docs"><i class="side-menu__icon  fa fa-file-archive-o"></i><span class="side-menu__label">Investor Docs</span></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="investor_support"><i class="side-menu__icon  fa fa-comments"></i><span class="side-menu__label">Support</span>
                <span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>
              </a>
            </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="user_activity"><i class="side-menu__icon  fa fa-puzzle-piece"></i><span class="side-menu__label">User Activity</span><span
                    class="badge bg-orange br-5 side-badge blink- text pb-1">All</span> </a>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="setting"><i class="side-menu__icon  fa fa-cogs"></i><span class="side-menu__label">Setting</span></a>
              </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
              </svg></div>
          </div>
        </div>
        <!--/APP-SIDEBAR-->
      </div>

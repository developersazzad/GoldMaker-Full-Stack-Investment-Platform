<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <?php
   include("suspend_status.php");
  ?>
        <!-- main page content -->
        <div class="main-container container">
          <!-- user indinty -->
          <?php include("./depandency/index/user_idintity.php"); ?>
            <!-- money request received -->
          <?php
          // include("./depandency/index/stats_mode.php");
          // include("./depandency/comon/notefication.php");
          include("./depandency/comon/notification-posh.php");
          include("./depandency/index/mining_pakages.php");
          include("./depandency/index/live_pakages_countdown.php");
          ?>
            <!-- Need This template for swiper Js -->
             <!-- ================================= -->
            <!-- Need This template for swiper Js-->
            <div class="row mb-3 d-none">
                <div class="col">
                    <h6 class="title">.</h6>
                </div>
                <div class="col-auto"></div>
            </div>
            <!-- no need blovk -->
            <div class="row mb-4 d-none">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressone"></div>
                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                            <i class="bi bi-globe"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">USA Trip</p>
                                    <p>100<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogresstwo"></div>
                                        <div class="avatar avatar-30 alert-success text-success rounded-circle">
                                            <i class="bi bi-cash-stack"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Car loan</p>
                                    <p>85<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-40 alert-danger text-danger rounded-circle">
                                        <i class="bi bi-house"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="small text-muted mb-0">Home Loan</p>
                                            <p>3510.00 $</p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <p class="small text-muted mb-0">Next EMI</p>
                                            <p class="small">1 Aug 2024</p>
                                        </div>
                                    </div>

                                    <div class="progress alert-danger h-4">
                                        <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Need This template for swiper Js -->
             <!-- ================================= -->
            <!-- Need This template for swiper Js-->
        </div>
        <!-- main page content ends -->
    </main>
    <!-- Page ends-->
  <?php
    include("mobile_menu.php");
    include("footer.php");
    // include("./depandency/comon/flem_timer.js");
   ?>

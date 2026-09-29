<body class="body-scroll" data-page="<?php echo $data_pages ?>">
    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
          <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
              <div class="loader-cube-wrap loader-cube-animate mx-auto">
                  <img src="../assets/images/logo/logo.png" alt="Logo">
              </div>
              <p class="mt-4">Invest Money and made Future Bright<br><strong>Please wait...</strong></p>
          </div>
        </div>
    </div>
    <!-- loader section ends -->
    <!-- Sidebar main menu -->
    <div class="sidebar-wrap  sidebar-pushcontent">
        <!-- Add overlay or fullmenu instead overlay -->
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar dark-bg">
            <!-- user information -->
            <div class="row my-3">
                <div class="col-12 "> 
                    <div class="card shadow-sm bg-opac text-white border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <figure class="avatar avatar-44 rounded-15">
                                        <img src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
                                    </figure>
                                </div>
                                <div class="col px-0 align-self-center">
                                    <p class="mb-1"><?php
                                    echo $full_name_is;
                                     ?></p>
                                    <p class="text-muted size-12"><?php echo $country ?></p>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-44 btn-light btn_arrow_sp">
                                      <a href="wallat">
                                          <img class="icon_arrow_left" src="assets/icons/low/arrow_lrft.png" alt="">
                                      </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- wallate Box -->
                        <div class="card bg-opac text-white border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="amt_menu display-4"><?php echo round((float)$BonusBalance, 2) ?> USD</h1>
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-muted">Wallet Balance</p>
                                    </div>
                                    <div class="col text-end">
                                        <p class="text-muted"><a href="wallat" >+ Wallat</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- wallate Box -->
                    </div>
                </div>
            </div>
            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills main_navigation">
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='index'){ echo 'active'; } ?>" aria-current="page" href="index">
                                <div class="avatar avatar-40 rounded icon">
                                  <img class="icon_img_note" src="assets/icons/low/home.png" alt="">
                                </div>
                                <div class="col">Dashboard</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='profile'){ echo 'active'; } ?>" href="profile" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                  <img class="icon_img_note" src="assets/icons/low/Profile_male.png" alt="">
                                </div>
                                <div class="col">Profile</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='notifications'){ echo 'active'; } ?>" href="notifications" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                    <img class="icon_img_note" src="assets/icons/low/Notification.png" alt="">
                                </div>
                                <div class="col">Notification</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='myplan'){ echo 'active'; } ?>" href="myplan" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                    <img class="icon_img_note" src="assets/icons/low/my_plan.png" alt="">
                                </div>
                                <div class="col">My Plan</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='bonus_history'){ echo 'active'; } ?>" href="bonus_history" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                <img class="icon_img_note" src="assets/icons/low/Bonus_history.png" alt="">
                              </div>
                                <div class="col">Bonus History</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='rafer'){ echo 'active'; } ?>" href="rafer" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                 <img class="icon_img_note" src="assets/icons/low/rafer.png" alt="">
                              </div>
                                <div class="col">Rafer</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='support'){ echo 'active'; } ?>" href="support" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                  <img class="icon_img_note" src="assets/icons/low/support 2.png" alt="">
                                </div>
                                <div class="col">Support</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='tutorial'){ echo 'active'; } ?>" href="tutorial" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                  <img class="icon_img_note" src="assets/icons/low/video tutor.png" alt="">
                                </div>
                                <div class="col">Tutorial</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='setting'){ echo 'active'; } ?>" href="setting" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                  <img class="icon_img_note" src="assets/icons/low/setting.png" alt="">
                                </div>
                                <div class="col">Settings <i class="bi bi-star-fill text-warning small"></i></div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='activity_log'){ echo 'active'; } ?>" href="activity_log" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                  <img class="icon_img_mobile_menu" src="assets/icons/low/userlog.png" alt="">
                                </div>
                                <div class="col">Activity Log</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($url_name=='trams_condition'){ echo 'active'; } ?>" href="trams_condition" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                  <img class="icon_img_mobile_menu" src="assets/icons/low/danger 1.png" alt="">
                                </div>
                                <div class="col">Trams</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon">
                                    <img class="icon_img_mobile_menu" src="assets/icons/low/logout.png" alt="">
                                </div>
                                <div class="col">Logout</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar main menu ends -->

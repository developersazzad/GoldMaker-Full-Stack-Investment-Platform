<!-- Footer mobile Menu -->
<footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified"> 
            <li class="nav-item">
                <a class="nav-link <?php if($url_name=='index'){ echo 'active'; } ?>" href="index">
                    <span>
                        <!-- <i class="nav-icon bi bi-house"></i> -->
                        <img class="icon_img_mobile_menu" src="assets/icons/low/home.png" alt="">
                        <span class="nav-text">Home</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($url_name=='all_statish'){ echo 'active'; } ?>" href="all_statish">
                    <span>
                        <!-- <i class="nav-icon bi bi-graph-up-arrow"></i> -->
                        <img class="icon_img_mobile_menu" src="assets/icons/low/all_statixsx.png" alt="">
                        <span class="nav-text">Payment Proof</span>
                    </span>
                </a>
            </li>
            <li class="nav-item centerbutton">
                <div class="nav-link">
                    <span class="theme-radial-gradient">
                        <i class="close bi bi-x"></i>
                        <!-- user\assets\icons\svg\gear.svg icons\svg\gear.svg -->
                        <img class="img_89_icon" src="assets/icons/svg/gear.svg" class="nav-icon" alt="" />
                    </span>
                    <div class="nav-menu-popover justify-content-between">
                        <button type="button" class="btn btn-lg btn-icon-text"
                            onclick="window.location.replace('all_pakages');">
                            <!-- <i class="bi bi-slack size-32"></i> -->
                            <img class="icon_img_mobile_menu_sub" src="assets/icons/low/all_pakages.png" alt="">
                            <span>All Plan</span>
                        </button>

                        <button type="button" class="btn btn-lg btn-icon-text"
                            onclick="window.location.replace('myplan');">
                            <!-- <i class="bi bi-bar-chart size-32"></i> -->
                              <img class="icon_img_mobile_menu_sub" src="assets/icons/low/my_plan.png" alt="">
                            <span>My Plan</span>
                        </button>

                        <button type="button" class="btn btn-lg btn-icon-text"
                            onclick="window.location.replace('support');">
                            <!-- <i class="bi bi-question-circle-fill size-32"></i> -->
                              <img class="icon_img_mobile_menu_sub" src="assets/icons/low/support 2.png" alt="">
                            <span>Support</span>
                        </button>

                        <button type="button" class="btn btn-lg btn-icon-text"
                            onclick="window.location.replace('tutorial');">
                              <img class="icon_img_mobile_menu_sub" src="assets/icons/low/video tutor.png" alt="">
                              <span>Tutorial</span>
                        </button>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($url_name=='rafer'){ echo 'active'; } ?>" href="rafer">
                    <span>
                        <img class="icon_img_mobile_menu" src="assets/icons/low/rafer.png" alt="">
                        <span class="nav-text">Rafer</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($url_name=='wallat'){ echo 'active'; } ?>" href="wallat">
                    <span>
                        <img class="icon_img_mobile_menu" src="assets/icons/low/wallat.png" alt="">
                        <span class="nav-text">Wallet</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</footer>
<!-- Footer mobile menu-->

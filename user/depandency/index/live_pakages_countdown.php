<!-- tabs structure -->
<ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">Live</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">Pakage</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#Hold_pakage" type="button" role="tab" aria-controls="currency" aria-selected="false">Hold</button>
  </li>
</ul>
<div class="tab-content" id="assetstabsContent">
  <div class="tab-pane fade show active" id="cards" role="tabpanel">
      <!-- Direct bill -->
      <div class="row mb-3">
        <div class="col">
          <h6 class="title">Today Live Earning</h6>
        </div>
      </div>
      <!-- all bonus -->
      <div class="row mb-1 justify-content-center">
      </div>
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-auto">
                <div class="avatar avatar-44 shadow-sm rounded-10 theme-bg text-white">
                  <i class="bi bi-house vm"></i>
                </div>
              </div>
              <div class="col align-self-center ps-0">
                <p class="mb-0 size-12"><span class="text-color-theme fw-medium">All Pakages</span> <span class="text-muted ">Today Earning</span></p>
                <p id="totalToday">Loading...
                  <!-- <small class="size-12 text-muted">20days remaining</small> -->
                </p>
              </div>
              <div class="col-auto ps-0">
                <button class="btn btn-default btn-44 shadow-sm" disabled>
                  <i class="bi bi-arrow-clockwise"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      $ii=0;
      $TRTP = 0;
      foreach ($my_plan_pakage as $data) {
        $insMId = $data['insMId'];
        $pakage_name = $data["pakage_name"];
        $PerDayBonus = $data["PerDayBonus"];
        $PlanName = $data["PlanName"];
        $Duration = $data["Duration"];
        $Duration = duration_calculate($Duration);
        $icon = $data["Icon"];
        $pSDate = $data["pakageStartDate"];
        $investDate = strtotimeMake($pSDate);
        // time calculation by pakage
        $PSCDate = pakageEndDate($pSDate,$Duration);
        $PKEnddate = $PSCDate['Enddate'];
        $Year  = $PSCDate['Year'];
        $CEdate = $PSCDate['CEdate'];
        $presentDate = date("Y-M-d");
        // calculate pakage validation
        $expire = strtotime($CEdate);// pakage enddate
        $pressent = strtotime($presentDate);
        $valid = "";
        if($expire>=$pressent){
          $valid = 'yes';
          $TRTP = $TRTP+$PerDayBonus;
          ?>
          <!-- 1st pakages -->
          <div class="row mb-1 justify-content-center">
            <div class="col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-auto">
                      <div class="avatar avatar-44 shadow-sm rounded-10">
                        <img src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
                      </div>
                    </div>
                    <div class="col align-self-center ps-0">
                      <p class="mb-0 text-color-theme">Plan -
                      <?php echo $pakage_name  ?></p>
                      <p class="text-muted small">Invest - <?php echo $investDate ?></p>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-default btn-44 shadow-sm" onclick="relode()">
                        <i class="bi bi-arrow-up-right-circle"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-auto">
                          <div class="avatar avatar-60 shadow-sm rounded-10 bg-danger text-white">
                            <img src="../<?php echo $icon ?>" alt="">
                          </div>
                        </div>
                        <div class="col align-self-center ps-0 ">
                          <p class="mb-1 text-color-theme">
                            <?php echo $PlanName ?>
                            <span class="tag bg-danger text-white border-danger py-1 px-2 float-end mt-1">Incomplete</span>
                          </p>
                          <div class="row">
                            <div class="col" style="font-size:12px">Daily Give - <?php echo $PerDayBonus ?> USD</div>
                            <div class="col-auto align-self-center text-end">
                              <span class="text-muted size-12 ">Complete: <?php echo $CEdate ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 2nd pakages -->
          <?php
        $sql = mysqli_query($con,"UPDATE `investorplanpakages` SET `status`='valid' WHERE id='$insMId' AND investorEmail='$Email'");
        $valid = "yes";
        }else{
          $sql = mysqli_query($con,"UPDATE `investorplanpakages` SET `status`='invalid' WHERE id='$insMId' AND investorEmail='$Email'");
          // 'valid','invalid';
        }
        // $mktime = mktime(11,59,59,)

        ?>
        <?php
        }
        ?>
      <input id="todayEarningData" type="hidden" name="" value="<?php echo $TRTP ?>">
    </div>



   <!-- //===================================== -->
   <!-- //===================================== -->
  <!-- tab 2 -->
  <div class="tab-pane fade" id="currency" role="tabpanel" >
    <!-- swiper credit cards -->
    <div class="row mb-3">
      <div class="col">
        <h6 class="title">Total Earning pakages </h6>
      </div>
      <div class="col-auto">
        <!-- <a href="userlist" class="small">View all</a> -->
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-12 px-0">
        <div class="swiper-container cardswiper">
          <div class="swiper-wrapper">
            <!-- dark-bg -->
            <!-- theme-radial-gradient -->
            <?php

            foreach ($my_plan_pakage as $data) {
                 $insMId = $data['insMId'];
                 $pkg_price = $data["Price"];
                 $pakages_id9 = $data["Pakage6Id"];
                 $pakage_name = $data["pakage_name"];
                 $PerDayBonus = $data["PerDayBonus"];
                 $PlanName = $data["PlanName"];
                 $Duration = $data["Duration"];
                 $Duration = duration_calculate($Duration);

                 $icon = $data["Icon"];
                 $pSDate = $data["pakageStartDate"];
                 $investDate = strtotimeMake($pSDate);
                 // time calculation by pakage
                 $PSCDate = pakageEndDate($pSDate,$Duration);
                 $PKEnddate = $PSCDate['Enddate'];
                 $Year  = $PSCDate['Year'];
                 $CEdate = $PSCDate['CEdate'];
                 $presentDate = date("Y-M-d");
                 // calculate pakage validation
                 $expire = strtotime($CEdate);
                 $pressent = strtotime($presentDate);
                 $valid = "";
                 if($expire>=$pressent){
                   $valid = 'yes';
                   // this top calculation
                   // define bonus by user
                   $pending_c_date = $expire-$pressent;
                   $pending_c_date = $pending_c_date/86400;
                   $success_X_Bonus = $Duration-($pending_c_date-1);
                   $U_total_bonus = $PerDayBonus*$success_X_Bonus;
                   $class = "theme-radial-gradient";
                   ?>
                   <div class="swiper-slide">
                      <div class="card <?php echo $class ?>">
                       <div class="card-body">
                         <div class="row mb-3">
                           <div class="col-auto align-self-center">
                             <img class="logo_mastercard_sm" src="assets/img/logo/logo-s-sm.png" alt="">
                           </div>
                           <div class="col align-self-center text-end">
                             <p class="small">
                               <span style="background:linear-gradient(45deg, #ff5722, #000000);
                               padding: 1px 4px;border-radius: 2px;" class="text-uppercase size-10">Running</span><br>
                               <span class="text-muted"><?php echo $pakage_name ?></span><br>
                               <span class="text-muted size-12">Price - <?php echo $pkg_price ?> USD</span>
                             </p>
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-12">
                             <h4 class="fw-normal mb-2">
                               <?php echo $U_total_bonus ?>
                               <span class="small text-muted">USD</span>
                             </h4>
                             <p class="mb-0 text-muted size-12">Total Bonus</p>
                             <p class="mb-0 text-muted size-12">Start - <?php echo $investDate ?></p>
                             <p class="text-muted size-12">Complete Date - <?php echo $CEdate ?></p>
                           </div>
                         </div>
                       </div>
                      </div>
                   </div>
                  <?php
                }else{
                  $C_total_bonus = $Duration*$PerDayBonus;
                  $class = "dark-bg";
                  ?>
                  <div class="swiper-slide">
                     <div class="card <?php echo $class ?>">
                      <div class="card-body">
                        <div class="row mb-3">
                          <div class="col-auto align-self-center">
                            <img class="logo_mastercard_sm" src="assets/img/logo/logo-s-sm.png" alt="">
                          </div>
                          <div class="col align-self-center text-end">
                            <p class="small">
                              <span style="background:linear-gradient(45deg, #1a930a, #10ff00);padding: 1px 4px;border-radius: 2px;" class="text-uppercase size-10">Complete</span><br>
                              <span class="text-muted"><?php echo $pakage_name ?></span><br>
                              <span class="text-muted">Start - <?php echo $investDate ?></span>
                            </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <h4 class="fw-normal mb-2">
                              <?php echo $U_total_bonus ?>
                              <span class="small text-muted">USD</span>
                            </h4>
                            <p class="mb-0 text-muted size-12">Total Bonus</p>
                            <p class="text-muted size-12">Complete Date - <span style="background: #000000a1;border-radius: 4px;"><?php echo $CEdate ?></span></p>
                            <form  method="post">
                              <input type="hidden" name="investorPkg_id" value="<?php echo $insMId ?>">
                              <input type="hidden" name="pakages_id" value="<?php echo $pakages_id9 ?>">
                              <button class="btn_renew" type="submit" role="button" name="Pakages_REnual" >Renewal</button>
                            </form>
                          </div>
                        </div>
                      </div>
                     </div>
                  </div>
                  <?php
                 }
                }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
   include("./depandency/index/hold_pakage.php")
   ?>

</div>

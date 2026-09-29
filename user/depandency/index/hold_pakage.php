<div class="tab-pane fade" id="Hold_pakage" role="tabpanel">
  <!-- swiper credit cards -->
  <div class="row mb-3">
    <div class="col">
      <h6 class="title">Your Hold Pakages</h6>
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
          foreach ($hold_pakage as $data) { 
               $pkg_name  = $data["pkg_name"];
               $pkg_price  = $data["pkg_price"];
               $PerDayBonus  = $data["PerDayBonus"];
               $Duration = $data["pkg_duration"];
               $start_date  = $data["start_date"];
               $PlanName = $data["PlanName"];
               $Duration = duration_calculate($Duration);
               $icon = $data["icon"];
               // time calculation by pakage
               $PSCDate = pakageEndDate($start_date,$Duration);
               $PKEnddate = $PSCDate['Enddate'];
               $Year  = $PSCDate['Year'];
               $CEdate = $PSCDate['CEdate'];
               $presentDate = date("Y-M-d");
               $U_total_bonus = 0;
                 ?>
          <div class="swiper-slide">
            <div class="card bg_set_hold">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-auto align-self-center">
                    <img class="logo_mastercard_sm" src="assets/img/logo/logo-s-sm.png" alt="">
                  </div>
                  <div class="col align-self-center text-end">
                    <p class="small">
                      <span style="background:linear-gradient(45deg, #ff5722, #000000);padding: 1px 4px;border-radius: 2px;" class="text-uppercase size-10">Hold</span><br>
                      <span class="text-muted"><?php echo $pkg_name ?></span><br>
                      <span class="text-muted size-12">Price - <?php echo $pkg_price ?> USD</span><br>
                      <span class="text-muted size-12"> Daily- <?php echo $PerDayBonus ?></span>

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
                    <p class="mb-0 text-muted size-12">Start - <?php echo $start_date ?></p>
                    <p class="text-muted size-12">Complete Date - <?php echo $CEdate ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
            ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php


?>
<div class="col-6 col-md-4">
  <div class="card shadow-sm mb-2">
    <div class="card-body">
      <div class="row">
        <div class="col-auto px-0">
          <div class="avatar avatar-40 bg-primary text-white shadow-sm rounded-10-end">
          <img class="icon_img_mobile_menu icon_9" src="./assets/icons/High/pakages.png" alt="">
          </div>
        </div>
        <div class="col">
          <p class="text-muted size-12 mb-0">Pakages</p>
          <p><small class="live_09"><i class="blink bi bi-circle-fill"></i> - <?php echo $pkgLiveOld["Live"]; ?></small> | <small class="oldl90">Old - <?php echo $pkgLiveOld["Old"]; ?></small></p>
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="col-6 col-md-4">
    <div class="card shadow-sm mb-2">
      <div class="card-body">
        <div class="row">
          <div class="col-auto px-0">
            <div class="avatar avatar-40 bg-primary text-white shadow-sm rounded-10-end">
            <img class="icon_img_mobile_menu icon_9" src="./assets/icons/low/today1.png" alt="">
            </div>
          </div>
          <div class="col">
            <p class="text-muted size-12 mb-0">Today</p>
            <p><?php echo round((float)$today_earning, 2) ?> USD</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-4">
    <div class="card shadow-sm mb-2">
      <div class="card-body">
        <div class="row">
          <div class="col-auto px-0">
            <div class="avatar avatar-40 bg-primary text-white shadow-sm rounded-10-end">
            <img class="icon_img_mobile_menu icon_9" src="./assets/icons/low/7day1.png" alt="">
            </div>
          </div>
          <div class="col">
            <p class="text-muted size-12 mb-0">Last 7 Days</p>
            <p>
              <?php
               if($last7days=="ND"){
                 echo "No Data";
               }else{
                 echo round((float)$last7days, 2)." USD";
               }
               ?>
          </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-4">
    <div class="card shadow-sm mb-2">
      <div class="card-body">
        <div class="row">
          <div class="col-auto px-0">
            <div class="avatar avatar-40 bg-primary text-white shadow-sm rounded-10-end">
            <img class="icon_img_mobile_menu icon_9" src="./assets/icons/low/30_day.png" alt="">
            </div>
          </div>
          <div class="col">
            <p class="text-muted size-12 mb-0">Last 30 Day</p>
            <p><?php
             if($last30days=="ND"){
               echo "No Data";
             }else{
               if($last30days==$last7days){
                 echo "No Older 30 day";
               }else{
                 echo round((float)$last30days, 2)." USD";
               }
             }
             ?>
           </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

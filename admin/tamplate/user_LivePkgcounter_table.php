<!-- Row -->
<div class="row row-sm">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="light_bg card_title">All User Live Pakages Countdown</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
            <thead>
              <tr>
                <th class="wd-15p border-bottom-0">Profile</th>
                <th class="wd-15p border-bottom-0">Details</th>
                <th class="wd-20p border-bottom-0">Plan</th>
                <th class="wd-20p border-bottom-0">Pakages</th>
                <th class="wd-15p border-bottom-0">Running</th>
                <th class="wd-15p border-bottom-0">Collect</th>
                <th class="wd-10p border-bottom-0">Start Date</th>
                <th class="wd-10p border-bottom-0">End Date</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($All_Ins_live_pkg as $data) {
                 // extra===
                  $Full_Name = $data["FastName"]." ".$data["LastName"];
                  $ProfilePic = $data["ProfilePic"];
                 // extra====
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

               ?>
              <tr>
                <td><img class="avatar-xl" src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt=""></td>
                <td>Name : <?php echo $Full_Name ?><br>
                  Email : <?php echo $data["investorEmail"]; ?>
                </td>
                <td><?php echo $PlanName ?></td>
                <td>
                  <a type="button" class="btn btn-primary position-relative me-5 mb-2"><?php echo $pakage_name ?>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $pkg_price ?> USD
                    </span>
                  </a>
                </td>
                <td><?php echo $success_X_Bonus ?> Day</td>
                <td><?php echo $U_total_bonus ?> USD</td>
                <td><?php echo $investDate ?></td>
                <td><?php echo $CEdate ?></td>
              </tr>
              <?php
              }
             }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Row -->

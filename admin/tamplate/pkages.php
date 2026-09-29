<!-- Row -->
<div class="row row-sm">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
            <thead>
              <tr>
                <th class="wd-15p border-bottom-0">Action</th>
                <th class="wd-15p border-bottom-0">Plan Name</th>
                <th class="wd-15p border-bottom-0">Pakages Name</th>
                <th class="wd-15p border-bottom-0">Icon</th>
                <th class="wd-15p border-bottom-0">Banner</th>
                <th class="wd-20p border-bottom-0">price</th>
                <th class="wd-15p border-bottom-0">Duration</th>
                <th class="wd-15p border-bottom-0">Daily Bonus</th>
                <th class="wd-10p border-bottom-0">Last Update</th>
              </tr>
            </thead>
            <tbody>
              <?php
             $ii = 1;
             foreach ($pakage_fanc as $data) {
               $pakages_id909 = $data["id"];
               $stock_stats = $data["Sell_Status"];
               $Date = date('Y-m-d', strtotime($data["date"]));
               $duration_cal = $data["Duration"];
               if($duration_cal=="7d"){
                 $duration = "7 Day";
               }elseif ($duration_cal=="15d") {
                 $duration = "15 Day";
               }elseif ($duration_cal=="30d") {
                 $duration = "30 Day";
               }else{
                 $duration = $duration_cal/30 ."Month";
               }
               if($data["start_date"]!=""){
                  $start_date = date('Y-m-d',strtotime($data["start_date"]));
               }else{
                 $start_date = "";
               }


              ?>
              <tr>
                <td>
                  <div class="btn-group mt-2 mb-2">
                    <button type="button" class="btn btn-sm btn-danger">Action</button>
                    <button type="button" class="btn btn-sm btn-danger dropdown-toggle px-1" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu p-3 px-4 text-center m-auto justify-content-center" role="menu" style="">
                      <li><a class="btn mb-1 btn-sm btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling_<?php echo  $ii ?>" aria-controls="offcanvdertasScrolling_<?php echo $ii ?>">Edit</a></li>
                      <!-- <li><a class="btn   mb-1 btn-sm btn-danger" href="javascript:void(0)">Delete</a></li> -->
                      <li>
                        <?php
                         if($stock_stats=="sold_out"){
                           ?>
                           <a class="btn mb-1 btn-sm btn-success" href="?stockIn=<?php echo $pakages_id909?>">Set Stock In</a>
                           <?php
                         }elseif($stock_stats=="upsell"){
                           ?>
                           <a class="btn mb-1 btn-sm btn-warning" href="?stockout=<?php echo $pakages_id909?>">Stock Out</a>
                           <?php
                         }
                         ?>

                      </li>
                    </ul>
                  </div>
                </td>
                <td><?php echo $data["planName"]; ?></td>
                <td><?php echo $data["pakageName"]; ?></td>
                <td>
                  <img style="height: 40px;"  class="avatar  avatar-xl" src="../<?php echo $data["icon"]; ?>" alt="">
                </td>
                <td style="width:120px">
                  <img style="width: 130px;height: 40px;" class="avatar banner  avatar-xl" src="../<?php echo $data["banner"]; ?>" alt="">
                </td>
                <td><?php echo $data["Price"]; ?> USD</td>
                <td><?php echo $duration ?></td>
                <td><?php echo $data["PerDayBonus"]; ?> USD</td>
                <td><?php echo $Date ?></td>
              </tr>
              <!-- canvas data is =-========================= -->
              <!-- //========================== -->
              <!-- canvas data Tow=================== -->
              <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling_<?php echo $ii ?>" aria-labelledby="offcanvasScrollingLabel">
                  <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Pakages Edit</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                  </div>
                  <div class="offcanvas-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="card">
                          <div class="card-body p-2 " style="border: 1px solid #ffffff47;border-radius: 4px;" >
                            <h5>Plan Name - <?php echo $data['planName'] ?></h5>
                            <h4>Pakage Name - <?php echo $data['pakageName'] ?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card">
                          <div class="card-body p-2 h-100 w-100 d-flex" style="border: 1px solid #ffffff47;border-radius: 4px;">
                              <img style="border: 1px solid white;border-radius: 7px;" src="../<?php echo $data["icon"]; ?>" class="avatar avatar-xxl bradius cover-image" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                        <div class="card">
                          <div class="card-body p-2 " style="border: 1px solid #ffffff47;border-radius: 4px;" >
                            <form class="form"  method="post" enctype="multipart/form-data">

                              <div class="form-group">
                                <label class="form-label">Plan Name</label>
                          <select name="PakagePlan90" class="form-control">
                            <?php
                        foreach ($plan_fanc as $planAll){
                          if($planAll['PlanName']==$data['planName']){
                            ?>
                            <option value="<?php echo $planAll['PlanId'] ?>" selected>
                              <?php echo $planAll['PlanName'] ?></option>
                            <?php
                          }else{
                            ?>
                            <option value="<?php echo $planAll['PlanId'] ?>">
                              <?php echo $planAll['PlanName'] ?>
                            </option>
                            <?php
                          }
                        }
                        ?>
                          </select>
                              </div>
                              <div class="form-group">
                                <label class="form-label">Pakage Name</label>
                                <input class="form-control" type="text" name="pakagesName90" value="<?php echo $data["pakageName"]; ?>">
                              </div>
                              <div class="form-group">
                                <label class="form-label">Pakage Amount</label>
                                <input class="form-control" type="text" name="pakagesAmount90" value="<?php echo $data["Price"] ?>">
                              </div>
                              <div class="form-group">
                                <label class="form-label">Daily Bonus</label>
                                <input class="form-control" type="text" name="pakagesDailyBonus90" value="<?php echo $data["PerDayBonus"]; ?>">
                              </div>
                              <!-- start date -->
                              <div class="form-group">
                                <label class="form-label">Set New Start Date</label>
                                <input class="form-control calendar" name="set_new_start_date" type="date" id="datedepart" aria-required="true" value="<?php echo $start_date; ?>">
                              </div>
                              <!-- start date -->
                              <div class="form-group">
                                <label class="form-label">Plan Duration - <span class="tag tag-purple"><?php echo $duration ?></span>
                                </label>
                        <select name="PakageDuration90" class="form-control " data-bs-placeholder="Duration">
                          <?php
                            if($duration_cal =="7d"){
                            ?>
                              <option value="7d" selected>7 day</option>
                            <?php
                          }elseif($duration_cal =="15d"){
                            ?>
                              <option value="15d" selected>15 day</option>
                            <?php
                          }elseif($duration_cal =="30d"){
                            ?>
                              <option value="30d" selected>30 day</option>
                            <?php
                          }elseif($duration_cal =="60"){
                            ?>
                            <option value="2" selected>2 Month</option>
                            <?php
                          }elseif($duration_cal =="90"){
                            ?>
                            <option value="3" selected>3 Month</option>
                            <?php
                          }elseif($duration_cal =="120"){
                            ?>
                            <option value="4" selected>4 Month</option>
                            <?php
                          }elseif($duration_cal =="150"){
                            ?>
                            <option value="5" selected>5 Month</option>
                            <?php
                          }elseif($duration_cal =="180"){
                              ?>
                            <option value="6" selected>6 Month</option>
                              <?php
                            }elseif($duration_cal =="210"){
                              ?>
                            <option value="7" selected>7 Month</option>
                              <?php
                            }elseif($duration_cal =="240"){
                              ?>
                              <option value="8" selected>8 Month</option>
                              <?php
                            }elseif($duration_cal =="270"){
                              ?>
                              <option value="9" selected>9 Month</option>
                              <?php
                            }elseif($duration_cal =="300"){
                              ?>
                              <option value="10" selected>10 Month</option>
                              <?php
                            }elseif($duration_cal =="330"){
                              ?>
                              <option value="11" selected>11 Month</option>
                              <?php
                            }elseif($duration_cal =="360"){
                              ?>
                              <option value="12" selected>12 Month</option>
                              <?php
                            }
                           ?>
                        <option value="7d">7 day</option>
                        <option value="15d">15 day</option>
                        <option value="30d">30 day</option>
                        <option value="2">2 Month</option>
                        <option value="3">3 Month</option>
                        <option value="4">4 Month</option>
                        <option value="5">5 Month</option>
                        <option value="6">6 Month</option>
                        <option value="7">7 Month</option>
                        <option value="8">8 Month</option>
                        <option value="9">9 Month</option>
                        <option value="10">10 Month</option>
                        <option value="11">11 Month</option>
                        <option value="12">12 Month</option>
                                </select>
                              </div>
                              <input type="hidden" name="pakages_id909" value="<?php echo $pakages_id909 ?>">
                              <button role="button" type="submit" name="pakages_update90" class="btn btn-primary">Save Change</button>
                            </form>
                          </div>
                        </div>
                      </div>
                  </div>
              <!--/Scroll offcanvas support-->
              <!-- //========================== -->
              <!-- canvas data is =-========================= -->
              <?php
              $ii++;
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

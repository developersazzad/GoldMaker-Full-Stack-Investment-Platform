<!-- summary blocks -->
<?php
  foreach ($all_plan as $data) {
    $plan_id = $data['PlanId'];
    $plan_name = $data['PlanName'];
    ?>
    <div class="row">
      <div class="row mb-3">
           <div class="col">
              <h6 class="title"><?php echo $plan_name ?></h6>
          </div>
      </div>
      <div class="col-12 px-0">
        <div class="swiper-container summayswiper">
          <div class="swiper-wrapper">
            <?php
            $sql = mysqli_query($con,"SELECT * FROM `allpakages` WHERE planId='$plan_id' ORDER BY id DESC");
            $check_blank = mysqli_num_rows($sql);
            if($check_blank!=0){
              while ($pakages = mysqli_fetch_assoc($sql)) {
                $pakage_id = $pakages["id"];
                $Name = $pakages["Name"];
                $Duration = $pakages["Duration"];
                // duration calculate====
                if($Duration=="7d"){
                  $Duration = "7"." Day";
                }elseif($Duration=="15d"){
                  $Duration = "15"." Day";
                }elseif($Duration=="30d"){
                  $Duration = "30"." Day";
                }else{
                   $Duration = $Duration/30 ." Month";
                }
                // duration calculate====

                $Price = $pakages["Price"] ?? "";
                $start_date = $pakages["start_date"] ?? "";
                $PerDayBonus = $pakages["PerDayBonus"] ?? "";
                $banner = $pakages["banner"] ?? "";
                $icon = $pakages["icon"] ?? "";
                $rols_desc = $pakages["rols_desc"] ?? "";
                $date = $pakages["date"] ?? "";
                $selle_status = $pakages["Sell_Status"] ?? "";
                ?>
                <div class="swiper-slide">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto align-self-center">
                          <div class="avatar avatar-40 bg-primary text-white shadow-sm rounded-10">
                            <img src="../<?php echo $icon ?>" alt="" />
                          </div>
                        </div>
                        <div class="col align-self-center ps-0">
                          <p class="mb-0 text-color-theme">
                            <small><?php echo $Name ?></small>
                          </p>
                          <div style="color: black !important;font-weight: 700;" class="tag bg-warning border-warning text-white py-1 px-2"><?php echo $Price ?> USD</div>
                        </div>
                      </div>
                      <p>
                        <li><span style="color: black !important;font-weight: 700;" class="tag bg-warning border-warning text-white py-1 px-2" class=""><i class="mr-2 fa fa-circle"></i> Start Date -  <?php

                        if($start_date==""){
                          echo "Any time";
                        }else{
                            echo $start_date;
                        }
                        ?></span> </li>
                      </p>
                      <p class="size-12">
                        <span class="text-muted"><ul class="plain_up_list">
                            <li><i class="mr-2 fa fa-circle"></i> Duration - <?php echo $Duration ?> </li>
                            <li><i class="mr-2 fa fa-circle"></i> Risk Level - No</li>
                            <li><i class="mr-2 fa fa-circle"></i> Daily Bonus -  <?php echo $PerDayBonus ?> USD</li>
                            <li>
                            <a onclick="show_rols_pakages(<?php echo $pakage_id ?>)" href="javascript:void(0)">See Roles</a>
                            <textarea style="display:none;font-size:14px;" id="rols_<?php echo $pakage_id ?>" class="form-control" name="name" rows="4" cols="40" disabled><?php
                            if($rols_desc==""){
                              echo "no roles";
                            }else{
                              echo $rols_desc;
                            }
                             ?></textarea>
                            </li>
                        </ul></span>
                      <form method="post">
                        <input type="hidden"
                        name="pakages_id"
                        value="<?php echo $pakage_id ?>">
                        <?php
                            if($selle_status=="sold_out"){
                              ?>
                                <button name="Null"  class="btn-sm btn btn-default btn_pakages" disabled>Sold Out</button>
                              <?php
                            }else{
                              ?>
                               <button name="Pakages_buy" type="submit" role="button" class="btn-sm btn btn-default btn_pakages" onclick="return confirm('Are you sure?')" >Buy Now</button>
                              <?php
                            }
                         ?>
                      </form>
                      </p>
                    </div>
                  </div>
                </div>
                <?php
              }

            }else{
              ?>
              <div class="card mb-4">
                 <div class="card-body">
                     <p>No Pakages This Plan..</p>
                 </div>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
 ?>

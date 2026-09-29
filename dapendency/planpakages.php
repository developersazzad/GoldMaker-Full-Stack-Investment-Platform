<?php
$iiii = 0;
$sql = mysqli_query($con,"SELECT * FROM `allplans` WHERE 1");
 while ($PLAN=mysqli_fetch_assoc($sql)) {
   $PlanName = $PLAN["PlanName"] ?? "";
   $PlanId = $PLAN["PlanId"] ?? "";
   $picture = $PLAN["picture"] ?? "";
   $Date = $PLAN["Date"] ?? "";
   $plan_desc = $PLAN["plan_desc"] ?? "";
    ?>
    <div class="col-lg-3">
      <div class="collection__header">
        <div class="collection__header-content">
          <p class="subtitle">Plan Name</p>
          <h2><?php echo $PlanName ?></h2>
          <p><?php echo $plan_desc ?></p>
        </div>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="swiper collection__slider1">
        <div class="swiper-wrapper">
          <?php
          $sql_pakages = mysqli_query($con,"SELECT * FROM `allpakages` WHERE planId='$PlanId'");
          $class = 1;
           while ($data = mysqli_fetch_assoc($sql_pakages)) {
             // one_gold
             // tow_gold
             // three_gold
             $Name = $data["Name"] ?? "";
             $pakage_plan_id = $data["planId"] ?? "";
             $Duration = $data["Duration"] ?? "";
             $Price = $data["Price"] ?? "";
             $PerDayBonus = $data["PerDayBonus"] ?? "";
             $banner = $data["banner"] ?? "";
             $icon = $data["icon"] ?? "";
             $rols_desc = $data["rols_desc"] ?? "";
             $Status = $data["Status"] ?? "";
             $start_date  = $data["start_date"] ?? "";
             $date = $data["date"] ?? "";
             $make_class = "class_".$class;
             for ($i=0; $i < 10; $i++) {
                $unique = rand(11111,99999);
                $make_class = "class_".$class."_".$unique;
                $class++;
             }
             // echo $make_class;
             if($PlanId===$pakage_plan_id){
             ?>
             <style type="text/css">
              .<?php echo $make_class ?>.team__item:after {
               background-image: url(<?php echo $icon ?>);
               width: 90px;
               height: 90px;
               background-size: contain;
               background-repeat: no-repeat;
               bottom: 10px;
               right: 10px;
             }
             </style>
             <div class="swiper-slide">
               <!-- pakages List -->
               <div class="team__item <?php echo $make_class ?>">
                 <div class="team__item-inner">
                   <div class="team__item-thumb">
                     <img src="<?php echo $banner ?>" alt="Team Image">
                   </div>
                   <div class="team__item-content">
                     <div class="team__item-author">
                       <h4><a href="#" class="pakage_name"><?php echo $Name ?></a> <p class="ammount_list"><?php echo $Price ?><span class="ammount_simble">USD</span></p></h4>
                     </div>
                     <ul class="plain_up_list">
                         <li><i class="mr-2 fa fa-circle"></i> Duration - <?php echo $Duration ?> day</li>
                         <li><i class="mr-2 fa fa-circle"></i> Risk Level - No</li>
                         <li><i class="mr-2 fa fa-circle"></i> Earn - par day <?php echo $PerDayBonus ?> USD</li>
                         <li><i class="mr-2 fa fa-circle"></i> Guaranteed Returns </li>
                     </ul>
                     <ul class="social">
                        <a href="<?php echo $link_signup ?>" class="default-btn btn-sm">Order</a>
                       </li>
                     </ul>
                   </div>
                 </div>
                 <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                     <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001Z" />
                     <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001Z" />
                     <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001Z" />
                     <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001Z" />
                     <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999L125.000,-0.001 Z" />
                     <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999L155.000,-0.001 Z" />
                     <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999L185.000,-0.001 Z" />
                   </svg></span>
               </div>
               <!-- pakages list -->
             </div>
             <?php
             $class++;
             }
           }
           ?>

        </div>
      </div>
    </div>

    <?php
    $iiii++;
 }
 ?>

<?php
  $data_pages = "index";
  include("main_header.php"); 
 ?>
 <!-- main page content -->
 <div class="main-container container">
   <!-- log information -->
   <div class="row">
       <div class="col-12 col-md-8 col-lg-4 mx-auto">
           <div class="card shadow-sm mb-4">
               <div class="card-header">
                   <h6 class="my-1">Log Activity information</h6>
               </div>
               <div class="card-body bg-light">
                   <ul class="list-group list-group-flush w-100 bubble-sheet log-information">
                     <?php
                     foreach ($AccTracker as $data) {
                       "danger,warning,success,primary ,dark";
                       $ActivityName = $data["ActivityName"];
                       $ActivityText = $data["ActivityText"];
                       $Date = $data["Date"];

                      if($ActivityName=="Recive_admin_notice" OR $ActivityName=="Recive_admin_sp_notice" OR  $ActivityName=="Recive_admin_reply" OR $ActivityName=="account_inactive"
                      ){
                        $class = "warning";
                      }elseif($ActivityName=="" OR $ActivityName=="pakages_update" OR $ActivityName=="payment_update_notice" OR $ActivityName=="pament_withdrow_notice" OR $ActivityName=="account_active" OR $ActivityName=="account_login" OR $ActivityName=="dayly_bonus_accept" OR $ActivityName=="Rafer_bonus_give"){
                        $class = "success";
                      }elseif($ActivityName=="account_logout" OR $ActivityName=="close_tickt"){
                        $class = "info";
                      }elseif($ActivityName=="account_suspand"){
                          $class = "danger";
                      }else{
                          $class = "primary";
                      }

                       ?>
                       <li class="list-group-item">
                           <div class=" border-<?php echo $class ?>  avatar avatar-15 border- rounded-circle"></div>
                           <p><span class="text-color-theme"><?php echo $ActivityText ?></span>
                          <br><small class="text-muted"><?php echo $Date ?></small></p>
                       </li>
                       <?php
                     }
                      ?>
                   </ul>
               </div>
               <div class="card-footer">
                   <div class="row">
                       <div class="col">
                           <h6 class="mb-0">Power By</h6>
                           <p class="text-muted small">Goldmakher</p>
                       </div>
                       <div class="col-auto">
                           <h6 class="mb-0">Smart444</h6>
                           <p class="text-muted small">Same Ceo Made this</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
 </div>
 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

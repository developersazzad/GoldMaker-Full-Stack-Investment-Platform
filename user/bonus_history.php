<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <?php
   include("suspend_status.php");
  ?>
 <!-- main page content -->
 <div class="main-container container">
   <!-- log information -->
   <div class="row">
       <div class="col-12 col-md-6 col-lg-4 mx-auto">
           <div class="card shadow-sm mb-4">
               <div class="card-header">
                   <h6 class="my-1">Your Bonus History</h6>
               </div>
               <div class="card-body bg-light">
                   <ul class="list-group list-group-flush w-100 log-information">
                     <?php
                      foreach ($bonus_history as $data) {
                        $pakageId = $data["pakageId"];
                        $bonusGive = $data["bonusGive"];
                        $date = $data["date"];
                        ?>
                        <li class="list-group-item">
                            <div class="avatar avatar-15 border-success rounded-circle"></div>
                            <p><span class="text-color-theme">You Give <?php echo $bonusGive ?> USD</span><br><small class="text-muted">Date - <?php echo $date ?></small></p>
                        </li>
                        <?php
                      }
                      ?>
                   </ul>
               </div>
               <div class="card-footer">
                   <div class="row">
                       <div class="col">
                           <h6 class="mb-0">Bonus history </h6>
                           <p class="text-muted small">Goldmaker</p>
                       </div>
                       <div class="col-auto text-end">
                           <h6 class="mb-0">Powerby</h6>
                           <p class="text-muted small">Smart444</p>
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
<!-- swiper tamplate -->

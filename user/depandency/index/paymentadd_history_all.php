<div class="row mb-4">
  <div class="col-12 px-0">
    <ul class="list-group list-group-flush bg-none">
      <?php
        $is = 1;
         foreach ($paymentadd_history as $data) {
           $icon = $data['icon'];
           $method_name = $data["method_name"];
           $Ammount = $data["Ammount"];
           $why_cancle = $data['why_unapproved'];
           $status = $data['Status'];
           $Date = $data["date"];
           $Date = date('Y-m-d', strtotime($Date));
           $Screenshoot = $data["Screenshoot"];
          ?>
          <li class="list-group-item">
            <div class="row">
              <div class="col-auto">
                <div style="background: white;display: flex;justify-content: center;align-items: center;" class="avatar avatar-50 shadow rounded-10 ">
                  <img src="../assets/images/brands/<?php echo $icon ?>" alt="">
                </div>
              </div>
              <div class="col align-self-center ps-0">
                <p class="text-color-theme mb-0"><?php echo $method_name ?> <a  data-bs-target="#Screenshoot_<?php echo $is ?>" data-bs-toggle="modal" style="text-light" class="btn btn-primary btn-sm">Screenshoot</a>
                </p>
    <!-- MODEL SHOW SCREENSHOOT========= -->
        <div class="modal fade" id="Screenshoot_<?php echo $is ?>" tabindex="-1" aria-labelledby="cammodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xmd modal-dialog-centered">
          <div class="modal-content">
           <div class="modal-header">
              <h6 class="modal-title text-center" id="cammodalLabel">Proof Screenshoot</h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
           <!-- profile information -->
              <div class="row mb-3">
             <div class="col">
               <img class="w-100 image-fluid" src="../assets/images/paymentImg/<?php echo $Screenshoot ?>" alt="">
               <?php if($Screenshoot==""){
                 echo "<h3>Images Don't Uplode..</h3>";
               } ?>
             </div>
           </div>
            </div>
          </div>
         </div>
      <!-- profile edit -->
     <!-- MODEL SHOW SCREENSHOOT========= -->
                <p class="text-muted size-12">Status -
                 <?php
                   echo $status." ";
                   if($status=="cancle"){
                     echo $why_cancle;
                   }elseif($status=="success"){
                     echo "Complete Payment";
                   }
                  ?>
               </p>
              </div>
              <div class="col align-self-center text-end">
                <p class="mb-0"><?php echo $Ammount ?> USD</p>
                <p class="text-muted size-12"><?php echo $Date ?></p>
              </div>
            </div>
          </li>
          <?php
          $is++;
          }
       ?>
    </ul>
  </div>
</div>
</div>

<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <!-- main page content -->
 <!-- main page content -->
 <div class="main-container container pt-0">
   <div class="row">
     <div class="col-12">
       <h2 class="text-center mt-1 mb-3 ">Notification</h2>
     </div>
   </div>
     <!-- notification list -->
     <div class="row">
         <div class="col-12 px-0">
             <div class="list-group list-group-flush bg-none">
                <div class="list-group-item bg-light text-center py-2 text-mute">Recent</div>
                <!-- botification start -->
                <?php
                foreach ($inNotification as $data) {
                  $ActivityText = $data["ActivityText"];
                  $Date = $data["Date"];
                  $id = $data['id'];
                ?>
                 <a id="notiM_<?php echo $id ?>" class="list-group-item bg-white">
                     <div class="row">
                         <div class="col-auto">
                             <div class="avatar avatar-44 coverimg rounded-10">
                                 <img src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
                             </div>
                         </div>
                         <div class="col align-self-center ps-0">
                             <p class="mb-1">
                              <?php echo $ActivityText ?>
                              <strong id="noti_<?php echo $id ?>" onclick="read_notification('<?php echo $id ?>')" style="background: #f66200;cursor: pointer;padding: 2px 8px;border-radius: 4px;font-size: 12px;">Mark As Read</strong>
                             </p>
                             <p class="size-12 text-muted"><?php echo $Date ?>
                             </p>
                         </div>
                     </div>
                 </a>
              <!-- botification end -->
              <?php
              }
               ?>
             </div>
         </div>
     </div>
 </div>
 <!-- main page content ends -->
 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

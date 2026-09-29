<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <?php
   include("suspend_status.php");
  ?>
 <!-- main page content -->
 <div class="main-container container">
   <?php
    include("./depandency/index/stats_mode.php");
    include("./depandency/comon/notification-posh.php");
    ?>
   <!-- -->
   <div class="row">
       <div class="col-12 col-md-6">
         <div class="card shadow-sm mb-4">
             <div class="card-header">
                 <div class="row">
                     <div class="col-auto">
                         <figure class="avatar avatar-60 rounded-10">
                             <img src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
                         </figure>
                     </div>
                     <div class="col px-0 align-self-center">
                         <h3 class="mb-0 text-color-theme"><?php echo $full_name_is ?></h3>
                         <p class="text-muted "><p class="text-muted">
                           Account Status - <?php if($Status=="Active"){
                             echo $Status." But Not Complete";
                           }elseif($Status=="Completed"){
                             echo $Status;
                           }elseif($Status=="Inactive"){
                             echo $Status;
                           }elseif($Status=="Suspend"){
                             echo $Status;
                           }elseif($Status=="Unseen"){
                             echo $Status." Admin Check And Change Status.";
                           }
                           ?>
                         </p></p>
                     </div>
                 </div>
             </div>
             <div class="card-body">
                 <p class="text-muted mb-3">
                 </p>
                 <div class="row">
                     <div class="col-auto">
                         <div class="avatar avatar-40 alert-success text-success rounded-circle">
                             <i class="bi bi-arrow-down-left-circle"></i>
                         </div>
                     </div>
                     <div class="col px-0 align-self-center">
                         <p class="text-muted size-12 mb-0">Address</p>
                         <p>
                            <?php
                            if($investor_verify_data!="no_data"){
                              echo $investor_verify_data['stats']." ".
                                  $investor_verify_data['city']." ".
                                  $investor_verify_data['country'];

                            }else{
                              echo "No Data";
                            }
                            ?>
                            </p>


                     </div>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col d-grid">
                        <a href="myplan" class="btn btn-default btn-lg shadow-sm">My Pakages</a>
                     </div>
                     <div class="col d-grid">
                         <a data-bs-target="#profile_edit" data-bs-toggle="modal" style="text-light" class="btn btn-light btn-lg shadow-sm">Edit Profile</a>
                     </div>
                 </div>
             </div>
         </div>
       </div>
       <div class="col-12 col-md-6">
           <div class="row">
               <div class="col-12 col-md-12">
                   <div class="card shadow-sm mb-4">
                       <div class="card-body">
                           <div class="row">
                               <div class="col-auto">
                                   <div class="avatar avatar-40 alert-success text-success rounded-circle">
                                       <i class="bi bi-arrow-down-left-circle"></i>
                                   </div>
                               </div>
                               <div class="col px-0 align-self-center">
                                   <p class="text-muted size-12 mb-0">Name</p>
                                   <p><?php echo $full_name_is ?></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-12 col-md-12">
                   <div class="card shadow-sm mb-4">
                       <div class="card-body">
                           <div class="row">
                               <div class="col-auto">
                                   <div class="avatar avatar-40 alert-danger text-danger rounded-circle">
                                       <i class="bi bi-arrow-up-right-circle"></i>
                                   </div>
                               </div>
                               <div class="col px-0 align-self-center">
                                   <p class="text-muted size-12 mb-0">Email</p>
                                   <p><?php echo $Email ?></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-12 col-md-12">
                   <div class="card shadow-sm mb-4">
                       <div class="card-body">
                           <div class="row">
                               <div class="col-auto">
                                   <div class="avatar avatar-40 alert-primary text-primary rounded-circle">
                                       <i class="bi bi-arrow-down-left-circle"></i>
                                   </div>
                               </div>
                               <div class="col px-0 align-self-center">
                                   <p class="text-muted size-12 mb-0">Total Invested</p>
                                   <p><?php echo $invest_amt_total ?> USD</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-12 col-md-12">
                   <div class="card shadow-sm mb-4">
                       <div class="card-body">
                           <div class="row">
                               <div class="col-auto">
                                   <div class="avatar avatar-40 alert-warning text-warning rounded-circle">
                                       <i class="bi bi-arrow-up-right-circle"></i>
                                   </div>
                               </div>
                               <div class="col px-0 align-self-center">
                                   <p class="text-muted size-12 mb-0">Total Withdrow</p>
                                   <p><?php echo $total_withdrow ?> USD</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- user information -->
   <!-- Notification Settings -->
   <!-- Email Notifications settings -->
   <div class="row mb-3">
     <div class="col">
       <h6>Notification Receive</h6>
     </div>
   </div>
   <div class="row">
     <div class="col-12">
       <div class="card shadow-sm mb-4">
         <ul class="list-group list-group-flush bg-none">
           <li class="list-group-item">
             <div class="row">
               <div class="col-auto pr-0 align-self-center text-end">
                 <div class="form-check form-switch">
                   <input onchange="set_notification_value('email')" class="form-check-input" type="checkbox" id="settingscheck1" <?php echo $set_email ?>>
                   <label class="form-check-label" for="settingscheck1"></label>
                 </div>
               </div>
               <div class="col ps-0">
                 <h6 class="mb-1">Email Notification</h6>
                 <p class="text-muted small">Default all notification will be sent</p>
               </div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="row">
               <div class="col-auto pr-0 align-self-center text-end">
                 <div class="form-check form-switch">
                   <input onchange="set_notification_value('notification')" class="form-check-input" type="checkbox" id="settingscheck2" <?php echo $set_notification ?>>
                   <label class="form-check-label" for="settingscheck2"></label>
                 </div>
               </div>
               <div class="col ps-0">
                 <h6 class="mb-1">SMS Notification</h6>
                 <p class="text-muted small">Receive SMS notification</p>
               </div>
             </div>
           </li>
         </ul>
       </div>
     </div>
   </div>
   <!-- Notification setting -->
   <?php
   if($url_name=="profile"){
     $page = "profile_pages";
     $banner_is = Banner_all($page);
     if(!empty($banner_is)){
       foreach ($banner_is as $banner) {
         $banner_title = $banner["banner_title"];
         $banner_desc  = $banner["banner_desc"];
         $button_link  = $banner["button_link"];
         $banner_image = $banner["banner_image"];
        include("./depandency/index/admin_banner2.php");
       }
     }
   }
 ?>
 </div>
 <?php
    include("mobile_menu.php");
    include("footer.php");
    include("./depandency/comon/model.php");
  ?>

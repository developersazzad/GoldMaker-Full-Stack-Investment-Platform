<?php
  $data_pages = "rewards";
  include("main_header.php"); 
 ?>
 <!-- main page content -->
 <div class="main-container container">

   <?php
     if($url_name=="all_statish"){
       $page = "my_pakage";
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
   <!-- Saving targets -->
   <div class="row mb-3">
     <div class="col">
         <h2 class="text-center">User withdrow Live</h2>
     </div>
   </div>
   <div class="row mb-4">
     <?php
       foreach ($global_withdrow_history as $data) {
         $icon = $data["icon"];
         $method_name = $data["method_name"];
         $email = $data["email"];
         $Status = $data["Status"];
         $Ammount = $data["Ammount"];
         $date = $data["Date"];
         $ProfilePic = $data["ProfilePic"];
         $FastName = $data["FastName"];
         $LastName= $data["LastName"];
         // stats maker====================
         if($Status=='success'){
           $class =  'success';
           $text = 'nun';
         }elseif($Status=='proccing'){
           $class =  'danger';
            $text = 'nun';
         }elseif($Status=='unseen'){
           $class =  'warning';
            $text = 'nun';
         }
         ?>
         <div class="col-12 col-md-4 col-lg-6 mb-2">
             <div class="card">
                 <div class="card-body">
                     <div class="row">
                         <div class="col-auto">
                             <div class="avatar avatar-40 alert-<?php echo $class ?> text-danger rounded-circle">
                                 <img src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
                             </div>
                         </div>
                         <div class="col align-self-center ps-0">
                             <div class="row mb-2">
                                 <div class="col">
                                     <p class="small text-muted mb-0"><?php echo $FastName." ".$LastName ?></p>
                                     <p><?php echo $Ammount ?> USD</p>
                                 </div>
                                 <div class="col-auto text-end">
                                     <p class="small text-<?php echo $text ?> mb-0">Status - <?php if($Status=="success"){
                                       echo "<span style='background: #05bc00;padding: 0px 5px;margin: 2px;border-radius: 4px;color: #ffffff !important;font-weight: 700;opacity: 1 !important;' class='success90'>Success</span>";
                                     }elseif($Status=="unseen"){
                                       echo "<span style='background: tomato;padding: 0px 5px;margin: 2px;border-radius: 4px;color: #ffffff !important;font-weight: 700;opacity: 1 !important;' class='success90'>Pending</span>";
                                     }else{
                                      echo "<span style='background: orange;padding: 0px 5px;margin: 2px;border-radius: 4px;color: #ffffff !important;font-weight: 700;opacity: 1 !important;' class='success90'>".$Status."</span>";
                                     }
                                     ?> /<?php echo $method_name ?></p>
                                     <p class="small"><?php
                                     $date = strtotimeMake($date);
                                     echo $date;
                                      ?></p>
                                 </div>
                             </div>
                             <div class="progress alert-<?php echo $class ?> h-4"><div class="progress-bar bg-<?php echo $class ?> w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <?php
       }
      ?>
   </div>
 </div>
 <!-- main page content ends -->
 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

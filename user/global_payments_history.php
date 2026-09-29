<?php
  $data_pages = "rewards";
  include("../connection.php");
  include("../function/function.php");
  $global_withdrow_history = global_withdrow_history();
 ?>
 <!doctype html>
 <html lang="en" class="dark-mode">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <meta name="generator" content="">
     <title>GoldMaker V1.0 - Make Your Money Shine with GoldMaker</title>
     <!-- manifest meta -->
     <meta name="apple-mobile-web-app-capable" content="yes">
     <link rel="manifest" href="manifest.json" />
     <!-- Favicons -->
     <link rel="apple-touch-icon" href="assets/img/Logo/logo-s-sm.png" sizes="180x180">
     <link rel="icon" href="assets/img/Logo/logo-s-sm.png" sizes="32x32" type="image/png">
     <link rel="icon" href="assets/img/Logo/logo-s-sm.png" sizes="16x16" type="image/png">
     <!-- Google fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
     <!-- bootstrap icons -->
     <link rel="stylesheet" href="https://icons.getbootstrap.com/assets/font/bootstrap-icons.css">
     <!-- <link rel="stylesheet" href="assets/icons/bootstrap-icons.css"> -->
     <!-- swiper carousel css -->
     <link rel="stylesheet" href="assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">
     <!-- style css for this template -->
     <link href="assets/css/style.css" rel="stylesheet" id="style">
     <link href="assets/css/flip/day_timer.css" rel="stylesheet" id="style">
     <link href="assets/css/flip/flip.min.css" rel="stylesheet" id="style">
     <link href="assets/css/master.css" rel="stylesheet" id="style">
 </head>
 <body class="body-scroll" style="background:black" data-page="<?php echo $data_pages ?>">
     <!-- loader section -->
     <div class="container-fluid loader-wrap">
         <div class="row h-100">
           <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
               <div class="loader-cube-wrap loader-cube-animate mx-auto">
                   <img src="../assets/images/logo/logo.png" alt="Logo">
               </div>
               <p class="mt-4">It's time for track budget<br><strong>Please wait...</strong></p>
           </div>
         </div>
     </div>
     <!-- loader section ends -->
 <!-- main page content -->
 <div class="main-container container mt-5 p-2">
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
    include("footer.php");
  ?>

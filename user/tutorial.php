<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <!-- main page content -->
 <div class="main-container container">
   <div class="row">
     <h2 class="text-center mb-4">
      Investor Help Tutorial
     </h2>
   </div>
   <!-- categories -->
   <div class="row">
     <?php
       foreach ($Tutorial as $data) {
         $id = $data["id"];
         $title = $data["title"];
         $image = $data["image"];
         $date = $data["date"];
         if($image==""){
           $image = "<img src='../assets/images/collection/tutorial.png' alt=''>";
         }else{
          $image = "<img src='../assets/images/tutorial_images/".$image."' alt=''>";
         }
         ?>
         <div class="col-12 col-md-6">
             <div class="card mb-4 overflow-hidden shadow-sm bg-primary text-white">
                 <div class="overlay"></div>
                 <div class="coverimg h-100 w-100 position-absolute opacity-5">
                   <?php echo $image ?>
                 </div>
                 <div class="card-body">
                     <div class="row mb-5">
                         <div class="col align-self-center">
                             <span class="tag">Trending</span>
                         </div>
                     </div>
                     <p><small>Publich Date  - <?php echo $date ?></small></p>
                     <a href="tutorial_detals?tu_id=<?php echo $id ?>" class="h4 text-normal d-block text-white mb-2"><?php echo $title ?></a>
                     <a class="btn btn-primary btn-sm" href="tutorial_detals?tu_id=<?php echo $id ?>">Read More</a><br><br>
                     <div class="small">
                         <figure class="avatar avatar-50 rounded mx-1">
                             <img src="../assets/images/logo/Goldmaker-circle-cool-sm.png" alt="">
                         </figure>
                         Admin Goldmaker
                     </div>
                 </div>
             </div>
         </div>
         <?php
       }
      ?>
   </div>

 </div>

 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

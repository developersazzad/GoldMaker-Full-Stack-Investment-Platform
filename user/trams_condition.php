<?php
  $data_pages = "index";
  include("main_header.php");
 ?>
 <!-- main page content -->
 <div class="main-container container">
   <div class="row">
     <h2 class="text-center mb-4">
      Trams AND Condition
     </h2>
   </div>
   <!-- categories -->
   <div class="row">
     <?php
       foreach ($trams_condition as $data) {
         $SectionName = $data["SectionName"];
         $Title = $data["Title"];
         $Description = $data["Description"];
         $Date = strtotimeMake($data["Date"]);
         // paymentadd
         // withdrow
         // pakages
         // agentpanel
         // customerpanel
         if($SectionName!="website" AND $SectionName!="agentpanel"){
         ?>
         <div class="col-12 col-md-6 mb-4">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title mb-9">
                  <?php echo $Title ?>
                </h2>
                <p><small>Last Update - <?php echo $Date ?> </small></p>
              </div>
              <div class="card-body">
                <p>
                  <?php echo $Description ?>
                </p>
              </div>
            </div>
         </div>
         <?php
       }
     }
      ?>
   </div>

 </div>
 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>

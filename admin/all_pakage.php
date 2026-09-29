<?php include("header.php") ?> 
<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
      <!-- PAGE-HEADER -->
      <div class="page-header">
          <h1 class="page-title">Pakages</h1>
          <div>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All Pakages</li>
              </ol>
          </div>
      </div>
      <!-- PAGE-HEADER END -->
    <!-- ROW-1 OPEN -->
     <div class="row">
       <div class="col-12">
           <div class="card">
             <div class="card-body">
                <h4 class="card_title ">All Plan and Pakages</h4>
             </div>
           </div>
        </div>
     </div>
    <?php
      include("tamplate/all_admin_action.php");
      include("tamplate/pkages.php");
    ?>
  <!-- ROW-1 CLOSED -->
   </div>
  </div>
</div>
<!--app-content closed-->
<?php include("footer.php") ?>

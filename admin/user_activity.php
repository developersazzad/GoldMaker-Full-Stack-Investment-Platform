<?php include("header.php");

 ?>
<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app ">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Investor Activity</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Activity</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Activity List</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <?php
          // other page===
          if(isset($_GET["email"])){
              $activity_email = $_GET["email"];
              $activity =  admin_all_user_activity($activity_email,8);
              // var_dump($activity);
            }

          if(isset($_POST["btn_search_activity"])){
              $activity_email = $_POST["activity_email_search"];
              $activity =  admin_all_user_activity($activity_email,10);
              // var_dump($activity);
            }
            if(isset($_POST["load_more"])){
              if(!empty($_POST["activity_email_search"])){
                $activity_email = $_POST["activity_email_search"];
                $limit = $_POST["load_value"];
                $activity =  admin_all_user_activity($activity_email,$limit);
               }
              }
             ?>
            <!-- search -->
            <div class="card">
              <div class="card-body pb-0">
                <form id="docsForm" class="" method="post">
                      <div class="input-group mb-2">
                        <input name="activity_email_search" type="text" class="form-control" placeholder="Email Searching.....">
                        <span class="submitBtn_docs input-group-text btn btn-primary"><input class="btn_search" type="submit" name="btn_search_activity" value="Search"></span>
                      </div>
                </form>
                <div class="tabs-menu search-tabs">
                  <ul class="nav panel-tabs">
                    <li><a href="#tab5" class="active" data-bs-toggle="tab"><span class="tag tag-info">Search By Email</span></a></li>
                  </ul>
                </div>
               </div>
              </div>

            <!-- search -->

            <!-- Row -->
            <!-- Container -->
            <div class="container">
                <ul class="notification">
                  <?php
              if(!empty($activity)){
                  $load_value = 0;
                  foreach ($activity as $ac_data) {
                     $ProfilePic = $ac_data["ProfilePic"];
                     $email= $ac_data["email"];
                     $ActivityName= $ac_data["ActivityName"];
                     $ActivityText= $ac_data["ActivityText"];
                     $ac_time = $ac_data["ac_time"];
                     $maker= $ac_data["maker"];
                     $Date = $ac_data["Date"];
                     $day_month = date('Y-d-M', strtotime($Date));
                     $time = date('h:i A', strtotime($Date));
                     ?>
                     <li>
                         <div class="notification-time">
                             <span class="date"><?php echo $day_month ?></span>
                             <span class="time"><?php echo $time ?></span>
                         </div>
                         <div class="notification-icon">
                             <a href="javascript:void(0);"></a>
                         </div>
                         <div class="notification-time-date mb-2 d-block d-md-none">
                             <span class="date"><?php echo $day_month ?></span>
                             <span class="time ms-2"><?php echo $time ?></span>
                         </div>
                         <div class="notification-body">
                             <div class="media mt-0">
                                 <div class="main-avatar avatar-md online">
                                     <img alt="avatar" class="br-7" src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>">
                                 </div>
                                 <div class="media-body ms-3 d-flex">
                                     <div class="">
                                         <p class="fs-15 text-dark fw-bold mb-0">Make <?php echo $maker ?></p>
                                         <p class="mb-0 fs-13 text-dark"><?php echo $ActivityText ?></p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <?php
                      $load_value++;
                        }
                      }else{
                        $email = "";
                      }
                    ?>

                </ul>
                <div class="text-center mb-4">
                    <form class="" method="post">
                      <input type="hidden" name="activity_email_search" value="<?php echo $email ?>">
                      <input type="hidden" name="load_value" value="<?php echo $load_value+10 ?>">
                      <button name="load_more" role="button" type="submit" class="btn ripple btn-primary w-md">Load more</button>
                    </form>
                </div>
            </div>
            <!-- End Container -->
            <!-- /Row -->
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
<!--app-content closed-->
<?php include("footer.php") ?>

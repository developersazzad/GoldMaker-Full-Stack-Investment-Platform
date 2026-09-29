<?php include("header.php");
include("../function/Admin_countableData.php");
$OPEN_SUPPORT_TICKT = Open_S_T();//array

 ?>
<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
      <!-- ROW-3 OPEN -->
      <!-- PAGE-HEADER -->
      <div class="page-header">
        <h1 class="page-title">Profile</h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </div>
      </div>
      <!-- PAGE-HEADER END -->

      <!-- ROW-1 OPEN -->
      <div class="row" id="user-profile">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="wideget-user mb-2">
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="row">
                      <div class="panel profile-cover">
                        <div class="profile-cover__action bg-img"></div>
                        <div class="profile-cover__img">
                          <div class="profile-img-1">
                            <img src="../assets/images/logo/Goldmaker-circle-cool-sm.png" alt="img">
                          </div>
                          <div class="profile-img-content text-dark text-start">
                            <div class="text-dark">
                              <h3 class="h3 mb-2">Md Mamun</h3>
                              <h5 class="text-muted">Ceo In GoldMaker</h5>
                            </div>
                          </div>
                        </div>
                        <div class="btn-profile">
                          <button class="btn btn-primary mt-1 mb-1"> <i class="fa fa-rss"></i> <span>Edit</span></button>
                        </div>
                      </div>
                    </div>
                    <!-- null this -->
                    <div class="row">
                      <div class="px-0 px-sm-4">
                        <div class="social social-profile-buttons mt-5 float-end">
                          <div class="box py-5"></div>
                        </div>
                      </div>
                    </div>
                    <!-- null this -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-2 col-4 justify-content-center p-0 m-0">
              <div class="card">
                <div class="card-body">
                  <div class="main-profile-contact-list sp_user_list">
                    <div class="me-0">
                      <div class="media mb-4 d-md-flex d-block">
                        <div class="media-icon bg-secondary bradius me-3">
                          <i class="fe fe-edit fs-20 text-white"></i>
                        </div>
                        <div class="media-body">
                          <span class="text-muted">Support</span>
                          <div class="fw-semibold fs-25">
                          <?php echo $OPEN_SUPPORT_TICKT['s_tickt_all'] ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="me-0 mt-5 mt-md-0">
                      <div class="media mb-4 d-md-flex d-block">
                        <div class="media-icon bg-danger bradius text-white me-3 ">
                          <span class="mt-3">
                            <i class="fe fe-users fs-20"></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <span class="text-muted">Pending</span>
                          <div class="fw-semibold fs-25">
                          <?php echo $OPEN_SUPPORT_TICKT['open_s_tickt'] ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-8">
              <?php include("tamplate/investor_support_form.php") ?>
            </div>
            <div class="col-xl-4">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Support Need</div>
                </div>
                <div class="card-body">
                  <div class="">
                <?php
      $ii=1;
      $investorSupport_list = investorSupportList();
        foreach ($investorSupport_list as $data) {

          $in_ProfilePic = $data["investor_profilePic"];
          $in_Email = $data["investorEmail"];
          $in_Name = $data["investorName"];
            //msg data====
            $Subject = $data["Subject"];
            $Help_text = $data["Help_text"];
            $Admin_reply = $data["Admin_reply"];
            $screenshoot_user=$data["screenshoot_user"];
            $support_date = $data["Date"];

           ?>
                    <div class="media overflow-visible">
                      <?php
                      if($in_ProfilePic!=""){
                        ?>
                      <img class="avatar brround avatar-md me-3" src="../assets/images/InvestorProfilePic/<?php echo $in_ProfilePic ?>" alt="avatar-img">
                        <?php
                      }else{
                        ?>
                     <img class="avatar brround avatar-md me-3" src="../assets/images/InvestorProfilePic/userexample.png" alt="avatar-img">
                      <?php
                      }
                       ?>

                      <div class="media-body valign-middle mt-2">
                        <a href="javascript:void(0)" class=" fw-semibold text-dark"><?php echo $in_Name ?></a>
                        <p class="text-muted mb-0"><?php echo $in_Email ?></p>
                      </div>
                      <div class="media-body valign-middle text-end overflow-visible mt-2">
                      <button class="btn btn-primary btn-sm off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling_<?php echo $ii ?>" aria-controls="offcanvasScrolling">Chat</button>
                      </div>
                    </div>
            <!--======= all canvas chat code ====-->
            <!--======= all canvas chat code ====-->
            <!--======= all canvas chat code ====-->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling_<?php echo $ii ?>" aria-labelledby="offcanvasScrollingLabel">
              <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><?php echo $in_Email ?></h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                  </div>
                   <div class="offcanvas-body">
                     <h4><?php echo $Subject ?></h4>
                     <?php
                        if($screenshoot_user!=""){
                       ?>
                       <p><img class="w-100 image-fluid" src="../assets/images/SupportImg/<?php echo $screenshoot_user ?>" alt=""></p>
                          <?php
                            }
                          ?>
                      <p><?php echo $Help_text ?></p>
                        <div class="card p-0">
                          <div class="card-body p-1" style="border: 1px solid #ffffff47;border-radius: 4px;">
                          <div class="card-title sp_title">
                                  Send Reply
                              </div>
                            <form enctype="multipart/form-data" method="post" class="profile-edit">
                              <input type="hidden" name="investor_email_768" value="<?php echo $in_Email ?>">
                              <input type="hidden" name="tickt_id98" value="<?php echo $data['id'] ?>">
                              <textarea name="admin_tickt_reply" class="form-control" placeholder="Write Reply Admin..." rows="7"></textarea>
                              <div class="profile-share border-top-0">
                                <div class="mt-2">
                                  <input type="file" id="image_catch_admin_<?php echo $ii ?>" value="" name="admin_screenshoot" class="d-none" value="">
                                  <a href="javascript:void(0)" class="me-2" title="Image" data-bs-toggle="tooltip" data-bs-placement="top">
                                    <label style="cursor:pointer" for="image_catch_admin_<?php echo $ii ?>">
                                      <span class="text-muted"><i class="fe fe-image"></i></span>
                                    </label>
                                  </a>
                                    </div>
                                    <button name="send_support_reply" role="button" type="submit" class="btn btn-sm btn-success ms-auto"><i class="fa fa-share ms-1"></i>Send</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
          <!-- all canvas chat code -->
          <!-- all canvas chat code -->
          <!-- all canvas chat code -->

                    <?php
                    $ii++;
                     }
                     ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- COL-END -->
      </div>
      <!-- ROW-1 CLOSED -->
      <!-- ROW-3 CLOSED -->
    </div>
  </div>
  <!--app-content closed-->
</div>
<!--Scroll offcanvas Support-->
<!-- /===============================================================// -->
<!-- /===============================================================// -->

<?php include("footer.php") ?>

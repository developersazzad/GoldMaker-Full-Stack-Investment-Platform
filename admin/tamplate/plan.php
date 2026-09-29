<!-- Row -->
<div class="row row-sm">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
            <thead>
              <tr>
                <th class="wd-15p border-bottom-0">Plan Name</th>
                <th class="wd-15p border-bottom-0">Banner</th>
                <th class="wd-15p border-bottom-0">Id</th>
                <th class="wd-10p border-bottom-0">Date</th>
                <th class="wd-15p border-bottom-0">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $ii = 1;
                foreach ($plan_fanc as $data) {
                    ?>
                    <tr>
                      <td><?php echo $data['PlanName'] ?></td>
                      <td>
                        <img style="height: 40px;"  class="avatar-squre avatar  avatar-xl " src="../assets/images/planImg/<?php echo $data['picture'] ?>" alt="">
                      </td>
                      <td><?php echo $data['PlanId'] ?></td>
                      <td><?php echo $data['Date'] ?></td>
                      <td>
                        <a class="btn mb-1 btn-sm btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling_<?php echo  $ii ?>" aria-controls="offcanvasScrolling_<?php echo $ii ?>">Edit</a>
                      </td>
                    </tr>


                    <!-- //========================== -->
                    <!-- canvas data Tow=================== -->
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling_<?php echo $ii ?>" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Plan Edit</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>
                        <div class="offcanvas-body">
                          <div class="row">
                            <div class="col-8">
                              <div class="card">
                                <div class="card-body p-2 " style="border: 1px solid #ffffff47;border-radius: 4px;" >
                                  <small>Name - <?php echo $data['PlanName'] ?></small>
                                  <h4 class="plan_name" id="plan_name_8">
                                    Grand
                                  </h4>
                                  <small>Plan Id - <?php echo $data['PlanId'] ?></small>
                                  <h4 class="plan_name" id="plan_name_8">
                                    Sm_907
                                  </h4>
                                </div>
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="card">
                                <div class="card-body p-2 h-100 w-100 d-flex" style="border: 1px solid #ffffff47;border-radius: 4px;">
                                    <img style="border: 1px solid white;border-radius: 7px;" src="../assets/images/planImg/<?php echo $data['picture'] ?>" class="avatar avatar-xxl bradius cover-image" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                              <div class="card">
                                <div class="card-body p-2 " style="border: 1px solid #ffffff47;border-radius: 4px;" >
                                  <form class="form"  method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Plan Name</span>
                                        <input name="planName8" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['PlanName'] ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Plan Id</span>
                                        <input name="planId8" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['PlanId'] ?>" disabled>
                                        <input type="hidden" name="planId99" value="<?php echo $data['PlanId'] ?>">
                                        <input type="hidden" name="planImg98" value="<?php echo $data['picture'] ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Plan Image</span>
                                        <input type="file" name="planImg8" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['picture'] ?>">
                                      </div>
                                    </div>
                                    <button role="button" type="submit" name="plan_update8" class="btn btn-primary">Change</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    <!--/Scroll offcanvas support-->
                    <!-- //========================== -->

                    <?php
                    $ii++;
                  }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Row -->

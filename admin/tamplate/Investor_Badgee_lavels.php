<!-- ALL Action start -->
<div class="panel-group1" id="accordion1">
  <div class="panel panel-default mb-4 p-0">
        <div class="panel-heading1 ">
            <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse100" aria-expanded="false">All Lavels and Badges</a>
            </h4>
        </div>
        <div id="collapse100" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
      <div class="panel-body">
         <div class="row">
            <!-- COL-END -->
            <div class="col-12 ">
              <!-- ======================== -->
              <!-- BINANCE============= -->
              <?php
              $i = 0;
              foreach ($badgh_all as $data) {
                $badge_id = $data['id'];
                $badge_name = $data["name"];
                $minimum_invest = $data["minimum_invest"];
                // $minimum_withdrow = $data["minimum_withdrow"];
                $badge_arr = $badge_all[$i];
                ?>
                <div class="card py-4 mb-4">
                  <div class="card-header">
                    <div class="w-100 card-title"><h2 class="w-100 btn btn-danger">Badge Name - <?php echo $badge_name ?></h2></div>
                  </div>
                  <div class="card-body">
                 <form class="" enctype="multipart/form-data" method="post">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <div class="form-group">
                              <label class="form-label">Minimum Invest Amount<span class="text-red">*</span></label>
                              <input name="badge_maximum_amount" value="<?php echo $minimum_invest ?>" type="text" class="form-control" placeholder="Minimum Invest amount">
                              <input type="hidden" name="badge_id" value="<?php echo $badge_id ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <img style="max-width:120px" class="w-100 image-fluid " src="../<?php echo $badge_arr ?>" alt="<?php echo $badge_name ?>">
                      </div>
                     <div class="col-7">
                      <div class="form-group">
                        <div class="form-group">
                            <input name="update_badges" value="Update binance" type="submit" class="btn btn-primary btn-lg" >
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                  </div>
                </div>
                <?php
                $i++;
              }
               ?>


              <!-- BINANCE============= -->
            </div>
            <!-- COL-END -->
        </div>
      </div>
   </div>
  </div>
</div>
<!-- ALL Action end -->

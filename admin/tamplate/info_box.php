<!-- ROW OPEN -->
<div class="row row-cards">
  <!-- New Column -->
  <!-- //================================ -->
  <div class="col-12 col-md-12 col-lg-6 col-xl-6">
      <div class="card img-card bg_success_gradient_admin">
          <div class="card-header pb-0 border-bottom-0">
              <h3 class="card-title">Admin Balance</h3>
              <div class="card-options">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-institution mb-0"></i></a>
              </div>
          </div>
          <div class="card-body pt-0">
              <h3 class="d-inline-block mb-2"><?php echo $ADMIN_F["amount"] ?> USD</h3>
              <div class="progress h-2 mt-2 mb-2">
                  <div class="progress-bar bg-info" style="width: 90%;" role="progressbar"></div>
              </div>
              <div class="float-start">
                  <div class="mt-2">
                      <span class="tag_tag-orange">Main Admin</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- //================================ -->
  <!-- New Column -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg_success_gradient">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Total User</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)"><i class="fe fe-users mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $ALL_INV ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-info" style="width: 80%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                        <span class="tag_tag-orange">Active - <?php echo $ACTIVE_INV ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg-orange">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Varified User</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)"><i class="fe fe-user-check mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $VERIF_INS ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-red" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange"> Suspand - <?php echo $SUSPAND_INS ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg-red">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Total plan</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-warning" href="javascript:void(0)"><i class="fa fa-th-large mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $TOTAL_PLAN ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-warning" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                        <span class="tag_tag-orange">
                        ____________
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg-primary-gradient ">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Total Pakages</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fa fa-th mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php
                echo $TOTAL_PKG["totalPkg"] ;
                ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange">Active - <?php echo $TOTAL_PKG["ActivePkg"] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg-warning-gradient">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Profit Share</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fa fa-line-chart mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $TOTAL_SHARE_PROFIT ?> USD</h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange">Last 30 day -
                            <?php
                            if($LAST7DAY_S_PROFIT==$LAST30DAY_S_PROFIT){
                              echo "No Data";
                            }else{
                              echo $LAST30DAY_S_PROFIT;
                            }
                             ?>

                          </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-car bg-purple">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Today Share </h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fa fa-sellsy mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $TODAY_SHARE_PROFIT ?> USD</h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange">Last week - <?php echo $LAST7DAY_S_PROFIT ?> USD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg-danger-gradient">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Withdrow Request</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)"><i class="fa fa-mail-reply mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $TOTAL_WITHDROW_REQ['withdrowReq'] ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange">Pending - <?php echo $TOTAL_WITHDROW_REQ['withdrowReqPending'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg-info-gradient">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Varification Pending</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fa fa-exclamation-triangle mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $INS_PENDING_VERIFI ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange">
                          __________
                          </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg_green">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Support Tickt</h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fa fa-comments mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $OPEN_SUPPORT_TICKT['s_tickt_all'] ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange">Open - <?php echo $OPEN_SUPPORT_TICKT['open_s_tickt'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card img-card bg_pink">
            <div class="card-header pb-0 border-bottom-0">
                <h3 class="card-title">Live User </h3>
                <div class="card-options">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)"><i class="blink-text text-green ion-ios7-minus mb-0"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <h3 class="d-inline-block mb-2"><?php echo $INS_LIVE ?></h3>
                <div class="progress h-2 mt-2 mb-2">
                    <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                </div>
                <div class="float-start">
                    <div class="mt-2">
                          <span class="tag_tag-orange">
                            ________
                          </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
</div>

<!-- ALL Action start -->
<div class="panel-group1" id="accordion1">
  <div class="panel panel-default mb-4 p-0">
        <div class="panel-heading1 ">
            <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion"       href="#collapseFour" aria-expanded="false">All Payments</a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
      <div class="panel-body">
         <div class="row">
            <!-- COL-END -->
            <div class="col-12 ">
              <!-- ======================== -->
              <!-- BINANCE============= -->
              <div class="card py-4 mb-4">
                <div class="card-header">
                  <div class="card-title">BINANCE Payment Method Info</div>
                </div>
                <?php
                // Bininca data===
                 $B_BN = $binance_method["account_number"];
                 $B_WA = $binance_method["custom"];
                 $BS = $binance_method["custom2"];
                 ?>
                <div class="card-body">
            <form class="" enctype="multipart/form-data" method="post">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Wallat Address Key<span class="text-red">*</span></label>
                            <input name="Binance_wal_addr" value="<?php echo $B_BN ?>" type="text" class="form-control" placeholder="Binance Key">
                        </div>
                      </div>
                    </div>
                  <div class="col-6">
                    <div class="form-group">
                      <div class="form-group">
                          <label class="form-label">Binance Network<span class="text-red">*</span></label>
                          <input name="binnance_Network" value="<?php echo $B_WA ?>" type="text" class="form-control" placeholder="Binance Key">
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <div class="form-group">
                          <label class="form-label">Wallat Screenshoot<span class="text-red">*</span></label>
                          <input name="binance_screenshoot" value="" type="file" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <div class="form-group">
                          <label class="form-label">Update<span class="text-red">*</span></label>
                          <input name="update_binance" value="Update binance" type="submit" class="btn btn-primary btn-lg" >
                      </div>
                    </div>
                  </div>
                </div>
                </form>
                </div>
              </div>
              <!-- BINANCE============= -->
              <!-- Bank Payment Method Data============== -->
               <?php
                include("tamplate/bank_payment_method.php");
                ?>
              <!-- Bank Payment Method Data============== -->
              <!-- =============================== -->
                <div class="card p-0">
                  <div class="card-header">
                    <h2 class="card-title">
                      Other Method
                    </h2>
                  </div>
                    <div class="card-body p-2">
                        <div class="panel panel-primary p-1">
                          <?php
                            include("tamplate/payment_method.php");
                           ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL-END -->
        </div>
      </div>
   </div>
  </div>
</div>
<!-- ALL Action end -->

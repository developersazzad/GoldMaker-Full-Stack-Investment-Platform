<!-- ALL Action start -->
      <div class="panel-group1" id="accordion1">
        <div class="panel panel-info mb-4 p-0">
              <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                      <a class="accordion-toggle collapsed bg-danger" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse889" aria-expanded="false">All Important Setting</a>
                  </h4>
              </div>
              <div id="collapse889" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
            <div class="panel-body ">
               <div class="row">
                  <!-- COL-END -->
                  <div class="col-12 ">
                      <div class="card p-0">
                        <?php
                        $Im_SE = $important_setting ?? [];

                        $stmtp = $Im_SE["stmtp"] ?? "";
                        if($stmtp=="Yes"){
                          $smtp_status = "checked";
                        }else{
                          $smtp_status = "";
                        }
                        $maintaince_mode = $Im_SE["maintaince_mode"] ?? "";
                        if($maintaince_mode=="Yes"){
                          $mainTainance_stats = "checked";
                        }else{
                          $mainTainance_stats = "";
                        }
                        $withdrow_limit = $Im_SE["withdrow_limit"] ?? "";
                        $response_time = $Im_SE["response_time"] ?? "";
                        $add_amount_limit = $Im_SE["add_amount_limit"] ?? "";
                        $bonus_withdrow_fee = $Im_SE["bonus_withdrow_fee"] ?? "";
                        $rafer_bonus = $Im_SE["rafer_bonus"] ?? "";
                        $dipogit_w_cut_amt = $Im_SE["dipogit_w_cut_amt"] ?? "";
                        $dipogit_withdrow_time1 = $Im_SE["dipogit_withdrow_time1"] ?? "";
                        $dipogit_withdrow_time2 = $Im_SE["dipogit_withdrow_time2"] ?? "";
                        $Bonus_withdrow_time = $Im_SE["Bonus_withdrow_time"] ?? "";
                        $last_update = $Im_SE["last_update"] ?? "";
                         ?>
                        <form class="" enctype="multipart/form-data" method="post">
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-6">
                                      <div class="form-group">
                                        <label class="custom-switch form-switch mb-0">
                                          <input id="smtp_set_value" onchange="set_smtp_toggle()" value="" type="checkbox" name="smtp_switch" class="custom-switch-input" <?php echo $smtp_status ?>>
                                          <input type="hidden" name="smtp_value" id="smtp_value" value="<?php echo $stmtp ?>">
                                          <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                          <span class="custom-switch-description">Smtp Notification</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <label class="custom-switch form-switch mb-0">
                                          <input  id="maintaince_mode" onchange="set_maintaince_toggle()"  value="" type="checkbox" name="maintaince_mode" class="custom-switch-input" <?php echo $mainTainance_stats ?>>
                                          <input id="maintance_value" type="hidden" name="maintance_value" value="<?php echo $maintaince_mode ?>">
                                          <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                          <span class="custom-switch-description">Maintaince Mode</span>
                                        </label>
                                      </div>
                                    </div>

                                      <div class="col-sm-6 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Withdrow Limit <span class="text-red">*USD</span></label>
                                              <input value="<?php echo $withdrow_limit ?>" name="withdrow_limit" type="text" class="form-control" placeholder="withdrow_limit">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Response Time <span class="text-red">*(Hour)</span></label>
                                              <input value="<?php echo $response_time ?>" name="response_time" type="text" placeholder="Response time" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Add Amount limt <span class="text-red">*(Usd)</span></label>
                                              <input value="<?php echo $add_amount_limit ?>" name="add_amount_limit" type="text" placeholder="add amount limit" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Wallat Balance Withdrow Fee <span class="text-red">*(Parcent%)</span></label>
                                              <input name="bonus_withdrow_fee" value="<?php echo $bonus_withdrow_fee ?>" type="text" placeholder="withdrow fee" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Rafer bonus <span class="text-red">*(Parcent%)</span></label>
                                              <input value="<?php echo $rafer_bonus ?>" name="raf_bonus" type="text" placeholder="Refar Bonus %" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Diposit withdrow Cut Amount<span class="text-red">*(Parcent%)</span></label>
                                              <input value="<?php echo $dipogit_w_cut_amt ?>" name="Dipogit_X_Amount" type="text" placeholder="Dipogit cut %" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Bonus Withdrow Time <span class="text-red">*(Hour)</span></label>
                                              <input value="<?php echo $dipogit_withdrow_time1 ?>" name="bonus_withdrow_time" type="text" placeholder="Bonus Withdrow time" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Dipogit Withdrow Time One <span class="text-red">*(Day start)</span></label>
                                              <input value="<?php echo $dipogit_withdrow_time2 ?>" name="dipogit_withdrow_time1" type="text" placeholder="Dipogit Withdrow time" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                          <div class="form-group">
                                              <label class="form-label">Dipogit Withdrow Time Tow <span class="text-red">*(Day end)</span></label>
                                              <input value="<?php echo $Bonus_withdrow_time ?>" name="dipogit_withdrow_time2" type="text" placeholder="Dipogit Withdrow time" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input name="update_setting_all" type="submit" class="btn btn-primary" value="Update Setting">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                        </form>

                      </div>
                  </div>
                  <!-- COL-END -->
              </div>
            </div>
         </div>
        </div>
      </div>
      <!-- ALL Action end -->

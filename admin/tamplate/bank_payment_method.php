<!-- bank============= -->
<!-- Withdrow Payment list=== -->
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Withdrow Payment Bank List</h2>
              <form  method="post">
                <div class="row">
                  <?php
                  $iis = 0;
                  foreach ($acept_pay_bank as $bank_list){ ?>
                    <div class="col-md-4 col-6">
                      <div class="form-group">
                          <input name="bank_list_<?php echo $iis ?>" value="<?php echo $bank_list['bank_name'] ?>" type="text" class="form-control">
                          <input type="hidden" name="bank_list_id_<?php echo $iis ?>" value="<?php echo $bank_list['id'] ?>">
                      </div>
                    </div>
                  <?php
                  $iis++;
                } ?>
                <input type="hidden" name="count_iis" value="<?php echo $iis ?>">
                  <div class="col-12" id="new_bank_889">

                  </div>
                  <div class="col-12" id="ad_new_bank66612">
                    <div class="form-group">
                      <a onclick="add_new_payment_bank_list()" href="javascript:void(0)" class="btn btn-info">Add New</a>
                    </div>
                  </div>
                  <hr>
                  <div class="col-md-4 col-6">
                    <div class="form-group">
                        <input name="bank_list_add90" value="Update" type="submit" class="btn btn-primary">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
<!-- Withdrow Payment=== -->



<!-- Accept ===== -->
  <div class="card">
    <div class="card-body">
     <h2 class="h2">Accept Payment Bank List</h2>
       <div class="row">
         <?php
             $ii = 1;
             foreach ($bank_payment_method as $bank_data) {
               $name = $bank_data["sub_text"];
               $IDIs = $bank_data["id"];
               $payment_add = $bank_data["payment_add"];
               if($payment_add =="active"){
                 $statuS_add = "checked";
                 $status_is = "active";
               }else{
                 $statuS_add = "";
                 $status_is = "";
               }

               $account_number = $bank_data["account_number"];
               $sub_text = $bank_data["sub_text"];
               $bank_name = $bank_data["sub_text"];
               $icon = $bank_data["icon"];
               $banner = $bank_data["banner"];
               $date = $bank_data["date"];
               $smtp_status = "";
               $custom2 = $bank_data["custom2"];
               $custom = explode("|",$bank_data["custom"]);
               $branch = $custom[0];
               $routing = $custom[1];
               ?>
           <div class="col-12 col-md-6">
             <div class="card">
               <div class="card-body">
                 <h3 class="card-title">Bank Name - <?php echo $name ?> </h3>
                 <form class=""method="post" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-12">
                       <div class="form-group">
                         <label class="custom-switch form-switch mb-0">
                           <input id="usewithdrow_switch2_<?Php echo $ii ?>" onchange="set_usewithdrow_toggle2('<?Php echo $ii ?>')" value="" type="checkbox" name="usewithdrow_switch" class="custom-switch-input" <?php echo $statuS_add ?>>
                           <input type="hidden" name="useWithdrow990" id="usewithdrow2_<?Php echo $ii ?>" value="<?php echo $status_is ?>">
                           <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                           <span class="custom-switch-description">Use Payment withdrow</span>
                         </label>
                       </div>
                     </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                       <label class="form-label">Account Number<span class="text-red">*<span class="tag tag-green"></span></span></label>
                       <input name="account_number" type="text" class="form-control" value="<?php echo $account_number ?>" placeholder="Pakages Amount">
                       <input type="hidden" name="bank_m_id_is" value="<?php echo $IDIs ?>">
                    </div>
                    </div>
                     <div class="col-sm-6 col-md-6">
                       <div class="form-group">
                         <label class="form-label">Account Name<span class="text-red">*</span></label>
                         <input value="<?php echo $bank_name ?>" name="bank_name887" type="text" class="form-control" placeholder="Pakages Amount">
                       </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Branch Name<span class="text-red">*</span></label>
                          <input value="<?php echo $branch ?>" name="branch_name" type="text" class="form-control" placeholder="Branch Name">
                        </div>
                       </div>
                       <div class="col-sm-6 col-md-6">
                         <div class="form-group">
                           <label class="form-label">Routing Number<span class="text-red">*</span></label>
                           <input value="<?php echo $routing ?>" name="routing_number" type="text" class="form-control" placeholder="Pakages Amount">
                         </div>
                        </div>
                      <div class="col-6 col-md-6">
                        <img src="../assets/images/brands/<?php echo $icon ?>" class="image-fluid  text-left" style="width:80px;border-radius:50%;height:80px;display: flex;justify-content: center;align-items: center;" alt="">
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label class="form-label">Uplode icon</label>
                          <input type="file" name="icon_bank" class="form-control" value="sazzad">
                        </div>
                     </div>
                     <div class="col-6 col-md-6 mb-5">
                       <img src="../assets/images/brands/<?php echo $banner ?>" class="image-fluid text-left" style="width:140px;height:70px;display: flex;justify-content: center;align-items: center;" alt="">
                     </div>
                     <div class="col-6 col-md-6">
                       <div class="form-group">
                         <label class="form-label">Uplode Banner</label>
                         <input name="banner_bank" type="file" class="form-control">
                       </div>
                    </div>
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h2 style="font-weight:700;margin:0 unset" class="text-center">Bank Info Banner</h2>
                          <hr>
                          <div class="col-sm-12 col-md-12">
                            <img src="../assets/images/screenshoot_bank/<?php echo $custom2 ?>" class="w-100 image-fluid" alt="">
                          </div>
                          <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                              <label class="form-label">Bank Info</label>
                              <input value="" name="info_banner_bank" type="file" class="form-control">
                            </div>
                         </div>
                        </div>
                      </div>
                    </div>
                    </div>
                   </div>
                  <center>
                    <input type="submit" class="btn text-center btn-primary w-75 mb-5"value="submit" name="submit_bank_data_999">
                  </center>
                 </form>
               </div>
             </div>
             <?php
             $ii++;
             }
              ?>
           </div>
          </div>
        </div>

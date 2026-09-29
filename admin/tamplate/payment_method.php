
  <?php
      $ii = 1;
      foreach ($payment_method as  $value) {
        $name = $value["name"];
        $ID = $value["id"];
        $payment_add = $value["payment_add"];
        if($payment_add =="active"){
          $statuS_add = "checked";
        }else{
          $statuS_add = "";
        }
        $payment_withdrow = $value["payment_withdrow"];
        if($payment_withdrow =="active"){
          $statuS_withdrow = "checked";
        }else{
          $statuS_withdrow = "";
        }
        $account_number = $value["account_number"];
        $sub_text = $value["sub_text"];
        $icon = $value["icon"];
        $banner = $value["banner"];
        $date = $value["date"];
        $smtp_status = "";
        ?>
<div class="card py-4 p-2">
   <div class="card-body p-2 mb-3">
     <form class="" enctype="multipart/form-data" method="post">
       <div class="row">
         <div class="col-sm-12 col-md-12">
             <div class="row">
               <div class="col-6">
                 <div class="form-group">
                   <!-- id -->
                   <input type="hidden" name="Id_is" value="<?php echo $ID ?>">
                   <!-- id -->
                   <label class="custom-switch form-switch mb-0">
                     <input id="usePayment_switch_<?Php echo $ii ?>" onchange="set_usePayment_toggle(<?Php echo $ii ?>)" value="" type="checkbox" name="usePayment_switch" class="custom-switch-input" <?php echo $statuS_add ?>>
                     <input type="hidden" name="usePayment" id="usePayment_<?Php echo $ii ?>" value="<?php echo $payment_add ?>">
                     <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                     <span class="custom-switch-description">Use Payment Accept</span> 
                   </label>
                 </div>
               </div>
               <div class="col-6">
                 <div class="form-group">
                   <label class="custom-switch form-switch mb-0">
                     <input id="usewithdrow_switch_<?Php echo $ii ?>" onchange="set_usewithdrow_toggle('<?Php echo $ii ?>')" value="" type="checkbox" name="usewithdrow_switch" class="custom-switch-input" <?php echo $statuS_withdrow ?>>
                     <input type="hidden" name="useWithdrow" id="usewithdrow_<?Php echo $ii ?>" value="<?php echo $payment_withdrow ?>">
                     <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                     <span class="custom-switch-description">Use Payment Accept</span>
                   </label>
                 </div>
               </div>
             </div>
         </div>
         <div class="col-sm-6 col-md-6">
             <div class="form-group">
                 <label class="form-label">Method Name <span class="text-red">*</span></label>
                 <input name="Method_name" value="<?php echo $name ?>" type="text" class="form-control" placeholder="Pakages name">
             </div>
         </div>
         <div class="col-sm-6 col-md-6">
             <div class="form-group">
                 <label class="form-label">Account Number<span class="text-red">*<span class="tag tag-green"></span></span></label>
                 <input name="account_number" type="text" class="form-control" value="<?php echo  $account_number ?>" placeholder="Pakages Amount">
             </div>
         </div>
         <div class="col-sm-6 col-md-6">
             <div class="form-group">
                 <label class="form-label">Account Type<span class="text-red">*<span class="tag tag-green">Agent/parsonal etc</span></span></label>
                 <input value="<?php echo $sub_text ?>" name="sub_text" type="text" class="form-control" placeholder="Pakages Amount">
             </div>
         </div>

           <div class="col-sm-12 col-md-12 icon_payment">
               <!-- icon select option -->
             <div class="form-group m-0 mt-2">
                 <label class="form-label">Select icon</label>
                 <div class="row ">
                   <!-- hiden_paramener_store_img_name -->
                   <input type="hidden" name="icon_saveon_this" id="icon_saveon_this_<?php echo $ii ?>" value="<?php echo $icon  ?>">
                   <!-- hiden_paramener_store_img_name -->
                   <?php
                    $i = 1;
                    foreach ($payment_method_icon as $value) {
                      ?>
                      <div class="col-3 col-xl-1">
                          <label class="colorinput icon_set_pakages">
                              <input  id="icon_id_<?php echo $value ?>"  type="radio" name="icon_val" value="" class="colorinput-input" />
                               <span onclick="icon_posh_multi('<?php echo $value ?>','<?php echo $ii ?>')" style="width: 60px;height: 60px;background: url(../assets/images/brands/<?php echo $value ?>);background-repeat: no-repeat;background-size:cover;background-position: center center;" class="colorinput-color"></span>
                              </label>
                      </div>
                      <?php
                      $i++;
                    }
                    ?>
                 </div>
             </div>
             <!-- icon select option -->
           </div>
           <div class="row">
             <div class="col-sm-6 col-md-6">
                 <div class="form-group">
                     <label class="form-label">Uplode New<span class="text-red">*<span class="tag tag-green">Logo</span></span></label>
                     <input name="pakages_amt_9" type="file" class="form-control">
                 </div>
             </div>
             <div class="col-sm-6 col-md-6">
               <div class="form-group">
                 <label class="form-label">Make New Canva Template<span class="text-red">*<span class="tag tag-green">Online</span></span></label>
                   <a class="btn btn-primary" href="<?php echo $method_iconLink ?>">Create New</a>
               </div>
             </div>
           </div>
           <div class="col-sm-12 col-md-12">
               <!-- icon select option -->
             <div class="form-group m-0 mt-2">
                 <label class="form-label">Select Banner</label>
                 <div class="row ">
                   <!-- hiden_paramener_store_img_name -->
                   <input type="hidden" name="banner_saveon_this" id="banner_saveon_this_<?php echo $ii ?>" value="<?php echo $banner ?>">
                   <!-- hiden_paramener_store_img_name -->
                   <?php
                   $i = 1;
                    foreach ($payment_method_banner as $value) {
                      ?>
                      <div class="col-4 col-xl-2 banner_img_col ">
                          <div class="banner_box m-2">
                            <label class="colorinput banner_set_pakages">
                                <input  id="icon_id_<?php echo $value ?>"  type="radio" name="banner_val" value="" class="colorinput-input" />
                                 <span onclick="banner_posh_multi('<?php echo $value ?>','<?php echo $ii ?>')" style="width: 60px;height: 60px;background: url(../assets/images/brands/<?php echo $value ?>);background-repeat: no-repeat;background-size:cover;background-position: center center;" class="colorinput-color"></span>
                                </label>
                          </div>
                      </div>
                      <?php
                      $i++;
                    }
                    ?>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Uplode New<span class="text-red">*<span class="tag tag-green">Logo</span></span></label>
                            <input name="pakages_amt_9" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Make New Canva Template<span class="text-red">*<span class="tag tag-green">Online</span></span></label>
                            <a class="btn btn-primary" href="<?php echo $method_bannerLink ?>">Create New</a>
                        </div>
                    </div>
                 </div>
             </div>
             <!-- icon select option -->
           </div>
           <div class="col-md-12">
               <div class="form-group">
                   <input name="payment_method_enter" type="submit" class="btn btn-primary w-100 btn-lg" value="Update Payment Method">
               </div>
           </div>
       </div>
      </form>
   </div>
</div>
   <?php
   $ii++;
 }
?>

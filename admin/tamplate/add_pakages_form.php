 <form class="" enctype="multipart/form-data" method="post">
    <div class="card-body">
        <div class="row">
          <div class="col-sm-6 col-md-6">
              <div class="form-group">
                  <label class="form-label">Pakages Name <span class="text-red">*</span></label>
                  <input name="pakages_name_9" type="text" class="form-control" placeholder="Pakages name">
              </div>
          </div>
          <div class="col-sm-6 col-md-6">
              <div class="form-group">
                  <label class="form-label">Pakage Amount<span class="text-red">*</span></label>
                  <input name="pakages_amt_9" type="text" class="form-control" placeholder="Pakages Amount">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label class="form-label">Select Plan <span class="text-red">*</span></label>
                  <select name="plan_select_9" class="form-control form-select select2" data-bs-placeholder="Select">
                          <option label="Select">Select</option>
                          <?php
                          foreach ($plan_fanc as $data) {
                            ?>
                            <option value="<?php echo $data['PlanId'] ?>"><?php echo $data['PlanName'] ?></option>
                            <?php
                          }
                           ?>
                  </select>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label class="form-label">Select Duration <span class="text-red">*</span></label>
                  <select name="pakage_duration" class="form-control form-select select2" data-bs-placeholder="Select">
                          <option label="Select">Select</option>
                          <option value="7d">7 day</option>
                          <option value="15d">15 day</option>
                          <option value="30d">30 day</option>
                          <option value="2">2 Month</option>
                          <option value="3">3 Month</option>
                          <option value="4">4 Month</option>
                          <option value="5">5 Month</option>
                          <option value="6">6 Month</option>
                          <option value="7">7 Month</option>
                          <option value="8">8 Month</option>
                          <option value="9">9 Month</option>
                          <option value="10">10 Month</option>
                          <option value="11">11 Month</option>
                          <option value="12">12 Month</option>
                  </select>
              </div>
          </div>
          <div class="col-sm-6 col-md-6">
              <div class="form-group">
                  <label class="form-label">Daily Earn  <span class="text-red">*</span></label>
                  <input name="daily_bonus" type="text" class="form-control" placeholder="Daily Bonus">
              </div>
          </div>
          <div class="col-sm-6 col-md-6">
              <div class="form-group">
                  <label class="form-label">Start Date<span class="text-red"> If Need</span></label>
                  <input name="start_date_set" type="date" class="form-control" >
              </div>
          </div>
          <div class="col-sm-12 col-md-12">
              <div class="form-group">
                  <label class="form-label">Any Specfic Trams or Roles <span class="text-red"></span></label>
                  <textarea name="pakages_rols" class="form-control" rows="3" cols="30"></textarea>
              </div>
          </div>
            <div class="col-sm-12 col-md-12">
                <!-- icon select option -->
              <div class="form-group m-0 mt-2">
                  <label class="form-label">Select icon</label>
                  <div class="row ">
                    <!-- hiden_paramener_store_img_name -->
                    <input type="hidden" name="icon_saveon_this" id="icon_saveon_this" value="">
                    <!-- hiden_paramener_store_img_name -->
                    <?php
                    $i = 1;
                     foreach ($icon as $value) {
                       ?>
                       <div class="col-3 col-xl-1">
                           <label class="colorinput icon_set_pakages">
                               <input  id="icon_id_<?php echo $value ?>"  type="radio" name="icon_val" value="" class="colorinput-input" />
                                <span onclick="icon_posh('<?php echo $value ?>')" style="width: 60px;height: 60px;background: url(../assets/images/icon/<?php echo $value ?>);background-repeat: no-repeat;background-size:cover;background-position: center center;" class="colorinput-color"></span>
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
            <div class="col-sm-12 col-md-12">
                <!-- icon select option -->
              <div class="form-group m-0 mt-2">
                  <label class="form-label">Select Banner</label>
                  <div class="row ">
                    <!-- hiden_paramener_store_img_name -->
                    <input type="hidden" name="banner_saveon_this" id="banner_saveon_this" value="">
                    <!-- hiden_paramener_store_img_name -->
                    <?php
                    $i = 1;
                     foreach ($banner as $value) {
                       ?>
                       <div class="col-4 col-xl-2 banner_img_col">
                           <div class="banner_box m-2">
                             <label class="colorinput banner_set_pakages">
                                 <input  id="icon_id_<?php echo $value ?>"  type="radio" name="banner_val" value="" class="colorinput-input" />
                                  <span onclick="banner_posh('<?php echo $value ?>')" style="width: 60px;height: 60px;background: url(../assets/images/slider/<?php echo $value ?>);background-repeat: no-repeat;background-size:cover;background-position: center center;" class="colorinput-color"></span>
                                 </label>
                           </div>
                       </div>
                       <?php
                       $i++;
                     }
                     ?>
                  </div>
              </div>
              <!-- icon select option -->
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input name="create_pakages" type="submit" class="btn btn-primary" value="Create pakages">
                </div>
            </div>
        </div>
    </div>
  </form>

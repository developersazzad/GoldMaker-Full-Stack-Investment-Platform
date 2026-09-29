<!-- ALL Action start -->
      <div class="panel-group1 mb-4" id="accordion1">
        <div class="panel panel-info mb-4 p-0">
              <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                      <a class="accordion-toggle collapsed bg-success" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse8750981" aria-expanded="false">All Banner options</a>
                  </h4>
              </div>
              <div id="collapse8750981" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
            <div class="panel-body ">
               <div class="row">
                  <!-- COL-END -->
              <?php
                $i  = 1;
                foreach ($admin_banner as $data) {
                  $banner_id = $data["id"];
                  $banner_title = $data["banner_title"];
                  $banner_desc = $data["banner_desc"];
                  $button_link = $data["button_link"];
                  $banner_image = $data["banner_image"];
                  $show_page = $data["show_page"];
                  $show = explode("|",$show_page);
                  // one
                  if(!empty($show [0])){
                    $show1 = "selected";
                  }else{
                    $show1 = "";
                  }
                  // tow
                  if(!empty($show [1])){
                    $show2 = "selected";
                  }else{
                    $show2 = "";
                  }
                  // three
                  if(!empty($show [2])){
                    $show3 = "selected";
                  }else{
                    $show3 = "";
                  }
                  // three
                  if(!empty($show [3])){
                    $show4 = "selected";
                  }else{
                    $show4 = "";
                  }
                  // three
                  if(!empty($show [4])){
                    $show5 = "selected";
                  }else{
                    $show5 = "";
                  }
                  // three
                  if(!empty($show [5])){
                    $show6 = "selected";
                  }else{
                    $show6 = "";
                  }
                  // three
                  if(!empty($show [6])){
                    $show7 = "selected";
                  }else{
                    $show7 = "";
                  }
                  ?>

                  <div class="col-xl-12 col-md-12">
                    <form method="post" class="card"  id="form_<?php echo $i ?>" enctype="multipart/form-data">
                      <div class="card-header">
                        <h3 class="card-title">Banner <?php echo $banner_title ?></h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <input type="hidden" name="banner_id" value="<?php echo $banner_id ?>">
                          <label class="form-label">Title</label>
                          <input name="notice_title" type="text" placeholder="" value="<?php echo $banner_title ?>" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Text</label>
                          <textarea name="notice_text" class="form-control"><?php echo $banner_desc ?></textarea>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Button link</label>
                          <input type="text" name="button_link" placeholder="" value="<?php echo $button_link ?>" class="form-control">
                        </div>
                        <!-- Banner images -->
                        <div class="col-sm-12 col-md-12">
                              <!-- icon select option -->
                            <div class="form-group m-0 mt-2">
                                <label class="form-label">Select Banner</label>
                                <div class="row ">
                                  <!-- hiden_paramener_store_img_name -->
                                  <input type="hidden" name="admin_banner_val" id="admin_banner_val" value="<?php echo $banner_image ?>">
                                  <!-- hiden_paramener_store_img_name -->
                                  <?php
                                  $i = 1;
                                   foreach ($admin_banner_notice as $value) {
                                     if($banner_image==$value){
                                       // $stat0 = "selected";
                                       $stat0 = "1 !important";
                                     }else{
                                       $stat0 = "";
                                     }
                                     ?>
                                     <div class="col-4 col-xl-2 banner_img_col">
                                         <div class="banner_box_2 m-2">
                                           <label class="colorinput banner_set_pakages">
                                               <input  id="icon_id_<?php echo $value ?>"  type="radio" name="banner_val" value="" class="colorinput-input" />
                                                <span  onclick="banner_posh_2('<?php echo $value ?>')" style=";width: 120px !important;height: 120px !important;padding: 10px !important;background: url(../assets/images/admin_banner/<?php echo $value ?>);background-repeat: no-repeat;background-size:cover;background-position: center center;" class="colorinput-color"></span>

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
                        <!-- Banner images -->
                        <div class="form-group">
                          <label class="form-label">Show Page</label>
                          <select name="page_show_value[]" class="form-control form-control-md select2 class_<?php echo $i?>" data-placeholder="Choose Browser_<?php $i ?>" multiple>
                            <option value="user_deshbord" <?php echo $show1 ?> >
                              user deshbord
                            </option>
                            <option value="wallat_pages " <?php echo $show2 ?> >
                              wallat page
                            </option>
                            <option value="rafer_pages" <?php echo $show3 ?> >
                              rafer page
                            </option>
                            <option  value="profile_pages" <?php echo $show4 ?> >
                              Profile Page
                            </option>
                            <option value="all_plan" <?php echo $show5 ?> >
                              all plan page
                            </option>
                            <option value="my_pakage" <?php echo $show6 ?> >
                              my pakages page
                            </option>
                            <option value="all_plan" <?php echo $show7 ?> >
                              tutorial
                            </option>
                          </select>
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary" name="banner_submit" value="submit">
                    </form>
                  </div>
                  <?php
                  $i++;
                }
               ?>
              </div>
          </div>
        </div>
      </div>
    </div>
      <!-- ALL Action end -->

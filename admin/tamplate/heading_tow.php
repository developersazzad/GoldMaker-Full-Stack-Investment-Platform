<div class="card-body">
    <div class="row">
      <div class="col-sm-6 col-md-6">
          <div class="form-group">
              <label class="form-label text_md">Text <span class="badge bg-primary"> 1</span></label>
              <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
          </div>
      </div>
      <div class="col-sm-6 col-md-6">
          <div class="form-group">
              <label class="form-label text_md" >Text <span class="badge bg-primary"> 2</span></label>
              <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
          </div>
      </div>
      <div class="col-12">
          <div class="form-group">
              <label class="form-label text_md" >Main Text <span class="badge bg-primary"> 3</span></label>
              <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
          </div>
      </div>
      <div class="col-sm-12 col-md-12">
          <div class="form-group">
              <label class="form-label text_md">Desc text <span class="badge bg-primary"> 4</span></label>
              <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
          </div>
      </div>
      <div class="col-12 ">
        <div class="row">
          <div class="col-12 mt-4">
            <h2 class="card_title text-center">
              Button Text and Links
            </h2>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label class="form-label text_md">Button text <span class="badge bg-primary"> 5</span></label>
                <input type="text" name="h_sm_text_one" class="form-control mb-1" placeholder="small text One">
                <input type="text" name="h_sm_text_one" class="form-control" placeholder="Button Links 5">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label class="form-label text_md">Button text <span class="badge bg-primary"> 6</span></label>
                <input type="text" name="h_sm_text_one" class="form-control mb-1" placeholder="small text One">
                <input type="text" name="h_sm_text_one" class="form-control" placeholder="Button Links 6">
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-4">
        <h2 class="card_title text-center">
          Home Small slider Customization
        </h2>
      </div>
        <div class="col-sm-12 col-md-12">
          <!-- ROW-3 OPEN -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">Slider One Images</h3>
                      </div>
                       <div class="card-body">
                          <div class="text-wrap">
                            <!-- logic -->
                          <?php
                            $i = 1;
                            foreach ($home_tow as $value) {
                             ?>
                               <div class="file-image-1 file-image-lg">
                                   <a href="filemanager-details.html">
                                       <img src="../assets/images/headerImages/home_tow/main/<?php echo $value ?>" class="br-5" alt="">
                                   </a>
                                   <ul class="icons">
                                       <li><a href="javascript:void(0)" class="btn bg-danger"><i class="fe fe-trash"></i></a></li>
                                       <li><a href="javascript:void(0)" class="btn bg-secondary"><i class="fe fe-download"></i></a></li>
                                       <li><a href="filemanager-details.html" class="btn bg-primary"><i class="fe fe-eye"></i></a></li>
                                   </ul>
                                   <span class="file-name-1 py-1 px-4 my-5 ">
                                     <label style="margin-bottom:0 !important" class="custom-control custom-checkbox-lg">
                                       <input type="radio" class="custom-control-input" name="main_img" value="option1" checked="">
                                       <span class="custom-control-label" style="font-size:18px">Select this</span>
                                     </label>
                                   </span>
                               </div>
                             <?php } ?>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Add New Slide</label>
                              <input name="slide_one_new" class="form-control form-control-lg" type="file">
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          <!-- ROW-3 CLOSED -->
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="UPDATE HEADER">
            </div>
        </div>
    </div>
</div>

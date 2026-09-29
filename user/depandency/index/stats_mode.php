
            <!-- Dark mode switch -->
            <div class="row mb-4 switch_box_mode">
                <div class="col-5 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkmodeswitch">
                            <label class="form-check-label text-muted px-2 " for="darkmodeswitch"><small  style="font-size:12px">Dark Mode</small></label>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-7 col-md-6">
                  <div class="card shadow-sm">
                    <?php
                     if($Status=="Completed"){
                       ?>
                        <a class="btn-lg btn btn-green" style="text-light">Account verified</a>
                       <?php
                     }else{
                       ?>
                       <a class="btn-lg btn btn-danger" data-bs-target="#AccountActiveModel" data-bs-toggle="modal" style="text-light">Click to Verified</a>
                       <?php
                     }
                     ?>
                  </div>
                </div>
            </div>

<!-- ALL Action start -->
<div class="panel-group1" id="accordion1">
  <div class="panel panel-default mb-4 p-0">
        <div class="panel-heading1 ">
            <h4 class="panel-title1">
                <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion998" href="#accordion998" aria-expanded="false">Tutorials</a>
            </h4>
        </div>
        <div id="accordion998" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
      <div class="panel-body">
         <div class="row">
            <!-- COL-END -->
            <div class="col-12 ">
              <!-- ======================== -->
              <!-- Row -->
              <div class="row row-sm">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <?php
                      include("add_new_tutorial_canvas.php");
                       ?>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                          <thead>
                            <tr>
                              <th class="wd-15p border-bottom-0">Title</th>
                              <th class="wd-15p border-bottom-0">Text</th>
                              <th class="wd-15p border-bottom-0">Video Link</th>
                              <th>Links</th>
                              <th class="wd-10p border-bottom-0">Images</th>
                              <th class="wd-15p border-bottom-0">Date</th>
                              <th class="wd-15p border-bottom-0">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              $ii = 1;
                              foreach ($tutorials as $data){
                                $tu_id = $data["id"];
                                $title = $data["title"];
                                $text = $data["text"];
                                $video = $data["video"];
                                if($video!=""){
                                  $class = "success";
                                  $target="_blank";
                                }else{
                                  $class = "warning";
                                  $target = "";
                                }
                                $link = $data["link"];
                                $image_is = $data["image"];
                                $date = $data["date"];
                                  ?>
                                  <tr>
                                    <td><?php echo $title ?></td>
                                    <td><?php echo  $text ?></td>
                                    <td><a href="<?php echo $video ?>" class="btn btn-<?php echo $class ?>" target="<?php echo $target ?>">Video</a></td>
                                    <td>
                                      <textarea style="background:transparent;color:white" name="name" class="form-contro form-control-sm">
                                        <?php echo $link ?>
                                      </textarea>
                                    </td>
                                    <td>
                                    <img class="image-fluid w-100" src="../assets/images/tutorial_images/<?php echo $image_is?>" alt=""></td>
                                    <td><?php echo $date?></td>
                                    <td>
                                      <a href="?delete_tutorial=<?php echo $tu_id ?>" class="btn mb-1 btn-sm btn-danger">Delete</a>
                                    </td>
                                  </tr>
                                  <?php
                                  $ii++;
                                }
                             ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Row -->
          </div>
        </div>
      </div>
   </div>
  </div>
</div>
<!-- ALL Action end -->

                    <a class="btn mb-1 btn-lg btn-secondary w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Add New</a>
                      <!-- canvas data Tow=================== -->
                      <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                          <div class="offcanvas-header">
                              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">New Tutorial</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                          </div>
                          <div class="offcanvas-body">
                                <div class="card">
                                  <div class="card-body p-2 " style="border: 1px solid #ffffff47;border-radius: 4px;" >
                                    <form class="form"  method="post" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                                          <textarea name="tutorial_title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" ></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Text</span>
                                          <textarea  name="tutorial_text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" ></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Video Links</span>
                                          <textarea  name="tutorial_video"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" ></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-text" id="inputGroup-sizing-default">If Need button</span>
                                          <textarea  name="tutorial_button_link"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">Type Button Links</textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-text" id="inputGroup-sizing-default">If Need Image</span>
                                          <input name="Image_tutorial"  type="file" class="form-control"  value="">
                                        </div>
                                      </div>
                                      <button role="button" type="submit" name="Create_tutorial" class="btn w-100 btn-info">Create New Tutorial</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          </div>
                      <!--/Scroll offcanvas support-->
                      <!-- //========================== -->

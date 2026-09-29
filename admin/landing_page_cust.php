<?php include("header.php") ?>
<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
          <!-- PAGE-HEADER -->
          <div class="page-header">
            <h1 class="page-title">Website Customization</h1>
            <div>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Website Customizer</li>
              </ol>
            </div>
          </div>
          <!-- PAGE-HEADER END -->
            <!-- ROW-3 OPEN -->
            <?php
              include("tamplate/social_links.php");
             ?>
            <!-- site Indintity Helper -->
            <div class="panel-group1" id="accordion11">
              <div class="panel panel-default mb-4 p-0">
                <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                    <a class="accordion-toggle collapsed bg-teal" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse111" aria-expanded="false">Site Identity Info</a>
                  </h4>
                </div>
                <div id="collapse111" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card custom-card overflow-hidden">
                          <div class="card-body p-3">
                            <a href="javascript:void(0)"><img src="assets/helper_img/site_idintity_helper.png" alt="img" class="br-5 w-100 bg-dark"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-body">
                            <h2 class="card-title">Site Information</h2>
                            <form class="" method="post">
                              <div class="row">
                                <div class="col-sm-12 col-md-12 ">
                                  <div class="form-group">
                                    <label class="form-label text_md"> Site Title<span class="badge bg-primary">Lending Page</span></label>
                                    <input type="text" name="" class="form-control" placeholder="small text One">
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                  <div class="card-body">
                                    <label class="form-label text_md"> Main Logo</label>
                                    <div class="text-wrap">
                                      <!-- logic -->
                                      <div class="file-image-1 file-image-lg">
                                        <a href="">
                                          <img src="../assets/images/logo/logo.png" class="br-5" alt="">
                                        </a>
                                        <ul class="icons">
                                          <li><a href="" class="btn bg-primary"><i class="fe fe-eye"></i></a></li>
                                        </ul>
                                        <span class="file-name-1">
                                          <input type="file" class="form-control" name="file_name_logo" value="">
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                  <div class="card-body">
                                    <label class="form-label text_md"> Sub Logo</label>
                                    <div class="text-wrap">
                                      <!-- logic -->
                                      <div class="file-image-1 file-image-lg">
                                        <a href="">
                                          <img src="../assets/images/logo/1.png" class="br-5" alt="">
                                        </a>
                                        <ul class="icons">
                                          <li><a href="" class="btn bg-primary"><i class="fe fe-eye"></i></a></li>
                                        </ul>
                                        <span class="file-name-1">
                                          <input type="file" class="form-control" name="file_name_logo" value="">
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          <!-- Submit Button -->
                              <div class="row">
                                <div class="col-12 pt-5">
                                  <div class="card">
                                    <div class="card-body">
                                      <input type="submit" name="submit" value="Update Site Info" class="btn btn-primary btn-lg">
                                    </div>
                                  </div>
                                </div>
                              </div>
                         <!-- Submit Button -->
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- COL-END -->
                      <div class="col-12 ">
                        <div class="col-sm-12 col-md-12">
                          <!-- ROW-3 OPEN -->
                         <form class="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-md-4 col-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 1 text <span class="badge bg-primary"> 1</span></label>
                                        <input type="text" name="menu_1" class="form-control" placeholder="Menu 1 text">
                                      </div>
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 1 Link <span class="badge bg-primary"> 1</span></label>
                                        <input type="text" name="menu_1" class="form-control" placeholder="Menu 1 Link">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- box 2  -->
                                <div class="col-md-4 col-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 2 text <span class="badge bg-primary"> 2</span></label>
                                        <input type="text" name="menu_1" class="form-control" placeholder="Menu 1 text">
                                      </div>
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 2 Link <span class="badge bg-primary"> 2</span></label>
                                        <input type="text" name="menu_2" class="form-control" placeholder="Menu 1 Link">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- menu box 3 -->
                                <div class="col-md-4 col-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 3 text <span class="badge bg-primary"> 3</span></label>
                                        <input type="text" name="menu_3_text" class="form-control" placeholder="Menu 1 text">
                                      </div>
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 3 Link <span class="badge bg-primary"> 3</span></label>
                                        <input type="text" name="menu_3_link" class="form-control" placeholder="Menu 1 Link">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- menu box 4 -->
                                <div class="col-md-4 col-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 4 text <span class="badge bg-primary"> 4</span></label>
                                        <input type="text" name="menu_4_text" class="form-control" placeholder="Menu 1 text">
                                      </div>
                                      <div class="form-group">
                                        <label class="form-label text_md">Menu 4 Link <span class="badge bg-primary"> 4</span></label>
                                        <input type="text" name="menu_4_link" class="form-control" placeholder="Menu 1 Link">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- menu box other -->
                                <div class="col-md-8 col-12">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-label text_md">others Page <span class="badge bg-primary"> 1</span></label>
                                            <input type="text" name="submenu_1_text" class="form-control" placeholder="submenu text 1">
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label text_md">Submenu Link 1<span class="badge bg-primary">trams</span></label>
                                            <input type="text" name="submenu_1_link" class="form-control" placeholder="Submenu 1 Link">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-label text_md">others Page <span class="badge bg-primary"> 2</span></label>
                                            <input type="text" name="submenu_2_text" class="form-control" placeholder="submenu text 2">
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label text_md">Submenu Link 2<span class="badge bg-primary">Agr.</span></label>
                                            <input type="text" name="submenu_2_link" class="form-control" placeholder="submenu 2 Link">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- menu box button -->
                                <div class=" col-12">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-label text_md">Main Button 1 text<span class="badge bg-primary"> 1</span></label>
                                            <input type="text" name="main_button_1_text" class="form-control" placeholder="submenu text 1">
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label text_md">Main Button Link<span class="badge bg-primary">1</span></label>
                                            <input type="text" name="main_button_1_link" class="form-control" placeholder="Submenu 1 Link">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-label text_md">Main Button 2 text<span class="badge bg-primary"> 2</span></label>
                                            <input type="text" name="main_button_1_text" class="form-control" placeholder="submenu text 2">
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label text_md">Main Button Link<span class="badge bg-primary">2</span></label>
                                            <input type="text" name="main_button_2_link" class="form-control" placeholder="Submenu 2 Link">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end -->
                              </div>
                            </div>
                          </div>
                          <!-- Submit Button -->
                              <div class="row">
                                <div class="col-12">
                                  <div class="card">
                                    <div class="card-body">
                                      <input type="submit" name="submit" name="submite_links" value="Update Site Data" class="btn btn-primary btn-lg">
                                    </div>
                                  </div>
                                </div>
                              </div>
                         <!-- Submit Button -->
                        </form>
                        </div>
                        <!-- ROW-3 CLOSED -->
                      </div>
                    </div>
                    <!-- COL-END -->
                  </div>
                </div>
              </div>
            </div>
            <!-- site Indintity Helper -->


            <!-- ALL Header Customization -->
            <div class="panel-group1" id="accordion1">
              <div class="panel panel-default mb-4 p-0">
                <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                    <a class="accordion-toggle collapsed bg-primary-gradient" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFour" aria-expanded="false">Header Customization</a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card custom-card overflow-hidden">
                          <div class="card-body p-3">
                            <a href="javascript:void(0)"><img src="assets/helper_img/header_helper.png" alt="img" class="br-5 w-100"></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                       <div class="card">
                         <div class="card-body">
                            <form class="" method="post">
                              <div class="form-group">
                                <!-- <div class="form-label">Toggle switch</div> -->
                                <label class="custom-switch form-switch me-5">
                                  <input type="radio" name="custom-switch-radio" class="custom-switch-input">
                                  <span class="custom-switch-indicator"></span>
                                  <span class="custom-switch-description">Header Style One</span>
                                </label>
                              </div>
                              <div class="form-group">
                                <label class="custom-switch form-switch">
                                  <input type="radio" name="custom-switch-radio" class="custom-switch-input" checked="">
                                  <span class="custom-switch-indicator"></span>
                                  <span class="custom-switch-description">Header Style 2</span>
                                </label>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COL-END -->
                      <div class="col-12 ">
                        <div class="card p-0">
                          <div class="card-body p-2">
                            <div class="panel panel-primary p-1">
                              <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                  <!-- Tabs -->
                                  <ul class="nav panel-tabs text-center p-3">
                                    <li><a style="border-radius:6px;margin-right:10px" href="#tab5" class="active  btn-info btn-md " data-bs-toggle="tab">Header One</a></li>
                                    <li><a style="border-radius:6px;margin-right:10px" class=" btn-primary btn-md " href="#tab8" data-bs-toggle="tab">Header Tow</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tab5">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left">
                                        Header One Options
                                      </h2>
                                    </div>
                                    <?php
                                      include("tamplate/heading_one.php");
                                      ?>
                                  </div>
                                  <div class="tab-pane" id="tab8">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left">
                                        Header Tow Options
                                      </h2>
                                    </div>
                                    <?php
                                      include("tamplate/heading_tow.php");
                                      ?>
                                  </div>
                                </div>
                              </div>
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
            <!-- ALL Header Customization -->

            <!-- COUNTER BOX Customizer=================== -->
            <div class="panel-group1" id="accordion2">
              <div class="panel panel-default mb-4 p-0">
                <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                    <a class="accordion-toggle collapsed bg-danger-gradient"  data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFive" aria-expanded="false">Counter Section</a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card custom-card overflow-hidden">
                          <div class="card-body p-3">
                            <a href="javascript:void(0)"><img src="assets/helper_img/count_section_helper.png" alt="img" class="br-5 w-100"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COL-END -->
                      <div class="col-12 ">
                        <div class="card p-0">
                          <div class="card-body p-2">
                            <div class="panel panel-primary p-1">
                              <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                  <!-- Tabs -->
                                  <ul class="nav panel-tabs text-center p-3">
                                    <li><a style="border-radius:6px;margin-right:10px" href="#tab70" class="active  btn-info button_tabs btn-sm " data-bs-toggle="tab">One</a></li>
                                    <li><a style="border-radius:6px;margin-right:10px" class=" btn-primary button_tabs btn-sm " href="#tab80" data-bs-toggle="tab">Tow</a></li>
                                    <li><a style="border-radius:6px;margin-right:10px" class=" btn-primary button_tabs btn-sm " href="#tab90" data-bs-toggle="tab">Three</a></li>
                                    <li><a style="border-radius:6px;margin-right:10px" class=" btn-primary button_tabs btn-sm " href="#tab100" data-bs-toggle="tab">Four</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tab70">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left">
                                        Box 1
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Number <span class="badge bg-primary"> 33</span></label>
                                              <input type="text" name="" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Text <span class="badge bg-primary"> 2 word</span></label>
                                              <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <input type="submit" class="btn btn-primary" value="Update Text">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- form end -->
                                    </form>
                                  </div>
                                  <!-- tabs 2 -->
                                  <div class="tab-pane" id="tab80">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left">
                                        Box 2
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Number <span class="badge bg-primary"> 3421</span></label>
                                              <input type="text" name="" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Text <span class="badge bg-primary"> 2/3 word</span></label>
                                              <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <input type="submit" class="btn btn-primary" value="Update Text">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                    <!-- form end -->
                                  </div>
                                  <!-- tabs 3 -->
                                  <div class="tab-pane" id="tab90">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left">
                                        Box 3
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Number <span class="badge bg-primary"> %83</span></label>
                                              <input type="text" name="" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Text <span class="badge bg-primary"> 2/3 word</span></label>
                                              <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <input type="submit" class="btn btn-primary" value="Update Text">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                    <!-- form end -->
                                  </div>
                                  <!-- tabs 4 -->
                                  <div class="tab-pane" id="tab100">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left">
                                        Box 4
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Number <span class="badge bg-primary"> 7187728</span></label>
                                              <input type="text" name="" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label class="form-label text_md">Text <span class="badge bg-primary"> 2/3 word</span></label>
                                              <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <input type="submit" class="btn btn-primary" value="Update Text">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                    <!-- form end -->
                                  </div>
                                </div>
                              </div>
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
            <!-- COUNTER BOX Customizer================= -->


            <!-- INFO BOX Customizer====================== -->
            <div class="panel-group1" id="accordion3">
              <div class="panel panel-default mb-4 p-0">
                <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                    <a class="accordion-toggle collapsed bg-info-gradient"  data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseSix" aria-expanded="false">Information Section</a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card custom-card overflow-hidden">
                          <div class="card-body p-3">
                            <a href="javascript:void(0)"><img src="assets/helper_img/info_box_helper.png" alt="img" class="br-5 w-100"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-body">
                            <h2 class="card-title">Section Information</h2>
                            <form class="" action="index.html" method="post">
                              <div class="row">
                                <div class="col-6 ">
                                  <div class="form-group">
                                       <label class="form-label text_md">Small Text One <span class="badge bg-primary">Small</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                       <label class="form-label text_md">Main Text <span class="badge bg-primary">Title</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                        <input type="submit"  name="Main_text_submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- COL-END -->
                      <div class="col-12 ">
                        <div class="card p-0">
                          <div class="card-body p-2">
                            <div class="panel panel-primary p-1">
                              <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                  <!-- Tabs -->
                                  <ul class="nav panel-tabs text-center p-3">
                                    <li><a style="border-radius:6px;margin-right:10px" href="#tabInfo1" class="active  btn-info button_tabs btn-sm " data-bs-toggle="tab">Info 1/2</a></li>
                                    <li><a style="border-radius:6px;margin-right:10px" class=" btn-primary button_tabs btn-sm " href="#tabInfo2" data-bs-toggle="tab">Info 2/3</a></li>
                                    <li><a style="border-radius:6px;margin-right:10px" class=" btn-primary button_tabs btn-sm " href="#tabInfo3" data-bs-toggle="tab">Info 3/4</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tabInfo1">
                                    <div class="card card-body ">
                                      <h2 class="card_title text-left">
                                        Info 1/2
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Info Box 1</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Sub text <span class="badge bg-primary">[1] Num/Txt</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Heading <span class="badge bg-primary"> 2/3 word</span></label>
                                                  <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Info Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-primary" name="submit_info_1" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Info Box 2</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Sub text <span class="badge bg-primary">[1] Num/Txt</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Heading <span class="badge bg-primary"> 2/3 word</span></label>
                                                  <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Info Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" name="submit_info_2" class="btn btn-primary" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- form end -->
                                    </form>
                                  </div>
                                  <!-- tabs 2 -->
                                  <div class="tab-pane " id="tabInfo2">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left ">
                                        Info 3/4
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Info Box 3</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Sub text <span class="badge bg-primary">[1] Num/Txt</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Heading <span class="badge bg-primary"> 2/3 word</span></label>
                                                  <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Info Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-primary" name="submit_info_3" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Info Box 4</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Sub text <span class="badge bg-primary">[1] Num/Txt</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Heading <span class="badge bg-primary"> 2/3 word</span></label>
                                                  <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Info Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" name="submit_info_4" class="btn btn-primary" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- form end -->
                                    </form>
                                  </div>
                                  <!-- tabs 3 -->
                                  <div class="tab-pane " id="tabInfo3">
                                    <div class="card card-body ">
                                      <h2 class="card_title text-left">
                                        Info 5/6
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Info Box 5</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Sub text <span class="badge bg-primary">[1] Num/Txt</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Heading <span class="badge bg-primary"> 2/3 word</span></label>
                                                  <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Info Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-primary" name="submit_info_5" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Info Box 6</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Sub text <span class="badge bg-primary">[1] Num/Txt</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Info Heading <span class="badge bg-primary"> 2/3 word</span></label>
                                                  <input type="text" name="h_sm_text_one" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Info Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" name="submit_info_6" class="btn btn-primary" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- form end -->
                                    </form>
                                  </div>
                                </div>
                              </div>
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
            <!-- INFO BOX Customizer====================== -->

            <!-- About Text Customizer============================ -->
            <div class="panel-group1" id="accordion4">
              <div class="panel panel-default mb-4 p-0">
                <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                    <a class="accordion-toggle collapsed bg-info-gradient"  data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseSaven" aria-expanded="false">About Section</a>
                  </h4>
                </div>
                <div id="collapseSaven" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card custom-card overflow-hidden">
                          <div class="card-body p-3">
                            <a href="javascript:void(0)"><img src="assets/helper_img/about_us_helper.png" alt="img" class="br-5 w-100"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-body">
                            <h2 class="card-title">Section Information</h2>
                            <form class="" action="index.html" method="post">
                              <div class="row">
                                <div class="col-6 ">
                                  <div class="form-group">
                                       <label class="form-label text_md">Small Text <span class="badge bg-primary">Top</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                       <label class="form-label text_md">Main Text <span class="badge bg-primary">Title</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                      <label class="form-label text_md">Info Description   <span class="badge bg-primary">Big text</span></label>
                                      <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                      <label class="form-label text_md">About Images<span class="badge bg-primary">CEO Image</span></label>
                                      <input type="file" class="form-control" name="" value="">
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                        <input type="submit"  name="Main_text_submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- About Text Customizer============================ -->


            <!-- FAQ SECTION CUSTOMIZE================ -->
            <div class="panel-group1" id="accordion5">
              <div class="panel panel-default mb-4 p-0">
                <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                    <a class="accordion-toggle collapsed bg-success-gradient"  data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseEight" aria-expanded="false">Faq Section</a>
                  </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card custom-card overflow-hidden">
                          <div class="card-body p-3">
                            <a href="javascript:void(0)"><img src="assets/helper_img/faq_section_helper.png" alt="img" class="br-5 w-100"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-body">
                            <h2 class="card-title">Section Information</h2>
                            <form class="" action="index.html" method="post">
                              <div class="row">
                                <div class="col-6 ">
                                  <div class="form-group">
                                       <label class="form-label text_md">FaqSmall Text <span class="badge bg-primary">2/3 word</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                       <label class="form-label text_md">Main Text <span class="badge bg-primary">Title</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                        <input type="submit"  name="Main_text_submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- COL-END -->
                      <div class="col-12 ">
                        <div class="card p-0">
                          <div class="card-body p-2">
                            <div class="panel panel-primary p-1">
                              <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                  <!-- Tabs -->
                                  <ul class="nav panel-tabs text-center p-3">
                                    <li><a style="border-radius:6px;margin-right:10px" href="#tabfaq1" class="active  btn-info button_tabs btn-sm " data-bs-toggle="tab">Faq 1/2</a></li>
                                    <li><a style="border-radius:6px;margin-right:10px" class=" btn-primary button_tabs btn-sm " href="#tabFaq2" data-bs-toggle="tab">Faq 3/4</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tabfaq1">
                                    <div class="card card-body ">
                                      <h2 class="card_title text-left">
                                        Faq 1/2
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Faq Box 1</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Main Text <span class="badge bg-primary">Title text</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Faq Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-primary" name="submit_info_1" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Faq Box 2</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Main Text <span class="badge bg-primary">Title text</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Faq Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-primary" name="submit_Faq_2" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- form end -->
                                    </form>
                                  </div>
                                  <!-- tabs 2 -->
                                  <div class="tab-pane " id="tabFaq2">
                                    <div class="card card-body">
                                      <h2 class="card_title text-left ">
                                        Faq 3/4
                                      </h2>
                                    </div>
                                    <form class="form" method="post">
                                      <!-- form start -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Faq Box 3</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Main Text <span class="badge bg-primary">Title text</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Faq Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-primary" name="submit_faq_3" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12 col-md-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card">
                                                  <div class="card-body bg-info-gradient">
                                                    <h4 class="text-left card-title">Faq Box 4</h4>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <label class="form-label text_md">Main Text <span class="badge bg-primary">Title text</span></label>
                                                  <input type="text" name="" class="form-control" placeholder="small text One">
                                                </div>
                                              </div>
                                              <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                   <label class="form-label text_md">Faq Description <span class="badge bg-primary">20/30 word</span></label>
                                                    <textarea name="name" class="form-control" rows="3" cols="30"></textarea>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-primary" name="submit_faq_4" value="Update Text">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- form end -->
                                    </form>
                                  </div>
                                </div>
                              </div>
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
            <!-- FAQ SECTION CUSTOMIZE================ -->

            <!-- review SECTION Customizer =============== -->
            <div class="panel-group1" id="accordion9">
              <div class="panel panel-default mb-4 p-0">
                <div class="panel-heading1 ">
                  <h4 class="panel-title1">
                    <a class="accordion-toggle collapsed bg-orange"  data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseNine" aria-expanded="false">Review Slider Customizer</a>
                  </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card custom-card overflow-hidden">
                          <div class="card-body p-3">
                            <a href="javascript:void(0)"><img src="assets/helper_img/review_section_helper.png" alt="img" class="br-5 w-100"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-body">
                            <h2 class="card-title">Section Information</h2>
                            <form class="" action="index.html" method="post">
                              <div class="row">
                                <div class="col-6 ">
                                  <div class="form-group">
                                       <label class="form-label text_md"> Small Text <span class="badge bg-primary">2/3 word</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                       <label class="form-label text_md">Big Text <span class="badge bg-primary">Title</span></label>
                                        <input type="text" name="" class="form-control" placeholder="small text One">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                        <input type="submit"  name="review_text_submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- COL-END -->
                    <div class="col-12 ">
                      <div class="col-sm-12 col-md-12">
                          <!-- ROW-3 OPEN -->
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="card">
                                      <div class="card-header">
                                          <h3 class="card-title">Review Slider One</h3>
                                      </div>
                                       <div class="card-body">
                                          <div class="text-wrap">
                                            <!-- logic -->
                                          <?php
                                          $i = 1;
                                          foreach ($review_slider_one as $value) {
                                               ?>
                                               <div class="file-image-1">
                                                   <a href="filemanager-details.html">
                                                       <img src="../assets/images/review_slider/<?php echo $value ?>" class="br-5" alt="">
                                                   </a>
                                                   <ul class="icons">
                                                       <li><a href="javascript:void(0)" class="btn bg-danger"><i class="fe fe-trash"></i></a></li>
                                                       <li><a href="javascript:void(0)" class="btn bg-secondary"><i class="fe fe-download"></i></a></li>
                                                       <li><a href="#!" class="btn bg-primary"><i class="fe fe-eye"></i></a></li>
                                                   </ul>
                                                   <span class="file-name-1">Image01.jpg</span>
                                               </div>
                                              <?php
                                                $i++;
                                              }
                                                ?>
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
                      <div class="col-sm-12 col-md-12">
                        <!-- ROW-3 OPEN -->
                        <div class="row">
                              <div class="col-lg-12">
                                  <div class="card">
                                      <div class="card-header">
                                          <h3 class="card-title">Review Slider Tow</h3>
                                      </div>
                                       <div class="card-body">
                                          <div class="text-wrap">
                                            <!-- logic -->
                                            <?php
                                          $i = 1;
                                          foreach ($review_slider_tow as $value) {
                                               ?>
                                               <div class="file-image-1">
                                                   <a href="#!">
                                                       <img src="../assets/images/review_slider/<?php echo $value ?>" class="br-5" alt="">
                                                   </a>
                                                   <ul class="icons">
                                                       <li><a href="javascript:void(0)" class="btn bg-danger"><i class="fe fe-trash"></i></a></li>
                                                       <li><a href="javascript:void(0)" class="btn bg-secondary"><i class="fe fe-download"></i></a></li>
                                                       <li><a href="#!" class="btn bg-primary"><i class="fe fe-eye"></i></a></li>
                                                   </ul>
                                                   <span class="file-name-1">Image01.jpg</span>
                                               </div>
                                              <?php
                                                $i++;
                                              }
                                                ?>
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label">Add New Slide In slider Tow</label>
                                              <input name="file_img_review_2" class="form-control form-control-lg" type="file">
                                            </div>
                                        </div>
                                      </div>
                                 </div>
                              </div>
                        <!-- ROW-3 CLOSED -->
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary btn-md" name="review_section _update" value="Update Review Section">
                        </div>
                      </div>
                    </div>
                      <!-- COL-END -->
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!-- review SECTION Customizer =============== -->

            <!-- ROW-3 CLOSED -->
        </div>
    </div>
<!--app-content closed-->
</div>
<?php include("footer.php") ?>

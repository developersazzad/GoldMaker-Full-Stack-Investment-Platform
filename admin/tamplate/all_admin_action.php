<!-- ALL Action start -->
      <div class="panel-group1" id="accordion1">
        <div class="panel panel-default mb-4 p-0">
              <div class="panel-heading1 ">
                  <h4 class="panel-title1"> 
                      <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion"       href="#collapseFour" aria-expanded="false">All Action</a>
                  </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
            <div class="panel-body">
               <div class="row">
                  <!-- COL-END -->
                  <div class="col-12 ">
                      <div class="card p-0">
                          <div class="card-body p-2">
                              <div class="panel panel-primary p-1">
                                  <div class=" tab-menu-heading">
                                      <div class="tabs-menu1">
                                          <!-- Tabs -->
                                          <ul class="nav panel-tabs text-center">
                                              <li><a href="#tab5" class="active button_tabs btn-warning " data-bs-toggle="tab">Add Investor</a></li>
                                              <li><a class=" btn-success button_tabs" href="#tab6" data-bs-toggle="tab">Add Money</a></li>
                                              <li><a class="  btn-primary button_tabs" href="#tab7" data-bs-toggle="tab">Add Plan</a></li>
                                              <li><a class=" btn-danger button_tabs" href="#tab8" data-bs-toggle="tab">Add Pakages</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="panel-body tabs-menu-body">
                                      <div class="tab-content">
                                          <div class="tab-pane active" id="tab5">
                                          <?php
                                            include("tamplate/add_investor_form.php");
                                           ?>
                                          </div>
                                          <div class="tab-pane" id="tab6">
                                            <?php
                                              include("tamplate/add_money_form.php");
                                             ?>
                                          </div>
                                          <div class="tab-pane" id="tab7">
                                            <?php
                                              include("tamplate/add_plan_form.php");
                                             ?>
                                          </div>
                                          <div class="tab-pane" id="tab8">
                                            <?php
                                              include("tamplate/add_pakages_form.php");
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
      <!-- ALL Action end -->

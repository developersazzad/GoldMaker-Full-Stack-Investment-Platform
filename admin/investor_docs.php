<?php include("header.php") ?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Search</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-body pb-0">
                        <form id="docsForm" class="" method="post">
                          <div class="row">
                            <div class="col">
                              <div class="input-group mb-2">
                                  <input name="docs_s_date" type="date" class="form-control" placeholder="Searching.....">
                                  <span class="submitBtn_docs input-group-text btn btn-primary"><input class="btn_search" type="submit" name="submit_docs_data1" value="Search"></span>
                              </div>
                            </div>
                            <div class="col">
                              <div class="input-group mb-2">
                                <input name="docs_email_search" type="text" class="form-control" placeholder="Email Searching.....">
                                <span class="submitBtn_docs input-group-text btn btn-primary"><input class="btn_search" type="submit" name="submit_docs_data2" value="Search"></span>
                             </div>
                            </div>
                          </div>
                        </form>
                            <div class="tabs-menu search-tabs">
                                <ul class="nav panel-tabs">
                                    <li><a href="#tab5" class="active" data-bs-toggle="tab">All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            <p class="text-muted mb-0 ps-3">GoldMaker Power Search Bar</p>
                        </div>
                    </div>
                    <?php
                      if($row_docs99!=""){
                        // var_dump($row_docs99);
                        // echo "<br />";
                        $iii = 1;
                        foreach ($row_docs99 as $data) {
                          $Legal_name = $data["Legal_name"];
                          $country = $data["country"];
                          $city = $data["city"];
                          $stats = $data["stats"];
                          $details_addr = $stats." ".$country." ".$stats;
                          $postcode = $data["postcode"];
                          $age = $data["age"];
                          $docs_type = $data["docs_type"];
                          $docs_file_1 = $data["docs_file_1"];
                          $date = $data["date"];
                          $Ins_id = $data["Ins_id"];
                          // Info
                          $inv_data = id_to_data($Ins_id);
                          // $investor_id = $inv_data['id';]
                          $Email = $inv_data['Email'];
                          $main_name = $inv_data["FastName"]." ".$inv_data["LastName"];
                          $Password = $inv_data['Password'];
                          $Status = $inv_data['Status'];
                          $lavel = $inv_data['lavel'];
                          $mobile = $inv_data['mobile'];
                          $BonusBalance = $inv_data["BonusBalance"];
                          $MainBalance = $inv_data["MainBalance"];
                          $ProfilePic = $inv_data["ProfilePic"];
                          $use_raferId = $inv_data['RaferId'];
                          $mobile = $inv_data['mobile'];
                          // status wise color===
                          if($Status=="Active"){
                            $bg = "primary";
                          }elseif($Status=="Inactive"){
                            $bg = "warning";
                          }elseif($Status=="Suspend"){
                            $bg = "danger";
                          }elseif($Status=="Completed"){
                            $bg = "success";
                          }
                          ?>
                          <!-- investor docs Boxes============== -->
                          <div class="card">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-7">
                                  <div class="table-responsive">
                                    <table class="table table-bordered">
                                      <tr>
                                        <td class="fw-bold">
                                          <img class="img_profile_docs image-fluid" src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt=""><br>
                                          <span class="name_h"><?php echo $main_name?></span>
                                        </td>
                                         <td>
                                           <span>Legal name - <?php echo $Legal_name  ?></span>
                                           <hr class="hr_docs">
                                           <span>Deposit - <?php echo $MainBalance ?> usd</span> |
                                           <span>Wallat - <?php echo $BonusBalance ?> usd</span>
                                           <hr class="hr_docs">
                                           <span class="tag tag-<?php echo $bg ?>">Status - <?php
                                             if($Status=="Unseen"){
                                               echo "Pending";
                                             }else{
                                              echo $Status;
                                             }
                                           ?></span>
                                           <span class="tag tag-orange">Lavel - <?php echo $lavel ?></span>
                                         </td>
                                      </tr>
                                      <tr>
                                        <td class="fw-bold">Email</td>
                                        <td><?php echo $Email ?></td>
                                      </tr>
                                      <tr>
                                        <td class="fw-bold">Address</td>
                                        <td><?php echo $details_addr ?> </td>
                                      </tr>
                                      <tr>
                                        <td class="fw-bold">Post coad</td>
                                        <td><?php echo $postcode ?>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="fw-bold">Set Status</td>
                                          <td>
                                            <a href="?setStatus=Act&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-primary">Active</a>
                                            <a href="?setStatus=InAct&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-warning">Inctive</a>
                                            <a href="?setStatus=Vrf&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-success">Varified</a>
                                            <a href="?setStatus=Sus&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-danger">Suspend</a>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="fw-bold">Action</td>
                                        <td>
                                          <a href="user_activity?email=<?php echo $Email ?>" class="btn btn-sm btn-primary">Activity</a>
                                          <a type="button" data-bs-toggle="offcanvas" data-bs-target="#insEditInvestorOption_<?php echo $iii ?>" aria-controls="insEditInvestorOption" class="btn btn-sm btn-green">Edit</a>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="col-5">
                                  <div class="card p-2 overflow-hidden">
                                    <a href="#!"><img src="../assets/images/iNvestorDocsFile/<?php echo $docs_file_1 ?>" alt="img"  class="docs_img file-manager-list w-100 h-100"></a>
                                    <div class="card-footer">
                                      <div class="d-flex">
                                        <div class="d-flex">
                                          <h5 class="mb-0 fw-semibold text-break"><span class="tag tag-info"><?php echo $docs_type ?></span></h5>
                                        </div>
                                        <div class="ms-auto my-auto">
                                          <span class="text-muted mb-0"><a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#docs_show_model_<?php echo $iii ?>" class="btn-sm btn btn-primary">See</a></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- investor docs Boxes============== -->
                        <!-- investor-data canvas box One -->
                        <!-- Canvas user info edit option -->
                        <!-- //========================================= -->
                        <!-- //========================================= -->
                        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="insEditInvestorOption_<?php echo $iii ?>" aria-labelledby="offcanvasScrollingLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Investor Parsonal Information</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                            </div>
                            <div class="offcanvas-body">
                              <div class="row">
                                <div class="card">
                                  <div class="card-header">
                                    <div class="image-fluid">
                                      <img class="w-100" src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
                                    </div>
                                  </div>
                                  <div class="card-body p-1">
                                    <form class="profile-edit" method="post">
                                    <input type="hidden" name="ins_email" value="<?php echo $Email ?>">
                                     <input type="hidden" name="go_page" value="investor_docs.php">
                                      <input type="hidden" name="insId" value="<?php echo $Ins_id ?>">
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="form-group ">
                                              <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                                              <input value="<?php echo $mobile ?>" name="Mobile" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" >
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <div class="form-group ">
                                              <label for="exampleInputEmail1" class="form-label">Password Change</label>
                                              <input value="" name="new_password" type="text" class="form-control" id="exampleInputEmail1" placeholder="Set New Password" >
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1" class="form-label">Fast Name</label>
                                              <input value="<?php echo $inv_data["FastName"] ?>" name="FastName" type="text" class="form-control" id="exampleInputEmail1" placeholder="Fast Name" >
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="lastName" class="form-label">Last Name</label>
                                              <input value="<?php echo $inv_data['LastName'] ?>" name="LastName" type="text" class="form-control" id="lastName" placeholder="Last Name" >
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="useRafer" class="form-label">Use Rafer Id</label>
                                              <input value="<?php echo $use_raferId ?>" name="RaferId" type="text" class="form-control" id="useRafer" placeholder="rafer id" >
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label">Badges <span class="text-red">*</span></label>
                                                <select name="badgh_is" class="form-control form-select select2" data-bs-placeholder="Select">
                                              <?php
                                               $all_badges = all_badges();
                                                foreach ($all_badges as $badges) {
                                                  if($badges["name"]==$lavel){
                                                      ?>
                                                      <option value="<?php echo $badges["id"] ?>" label="Select" selected><?php echo $badges["name"] ?></option>
                                                      <?php
                                                    }else{
                                                      ?>
                                                        <option value="<?php echo $badges["id"] ?>" ><?php echo $badges["name"] ?></option>
                                                      <?php
                                                       }
                                                    }
                                                    ?>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-6">
                                              <div class="form-group">
                                                <label for="useRafer" class="form-label">Country</label>
                                                <input value="<?php echo $country ?>" name="country" type="text" class="form-control" id="country" placeholder="Country" >
                                              </div>
                                            </div>
                                            <div class="col-6">
                                              <div class="form-group">
                                                <label for="city" class="form-label">City</label>
                                                <input value="<?php echo $city ?>" name="city" type="text" class="form-control" id="city" placeholder="City" >
                                              </div>
                                            </div>
                                            <div class="col-6">
                                              <div class="form-group">
                                                <label for="city" class="form-label">Stat</label>
                                                <input value="<?php echo $stats ?>" name="stat" type="text" class="form-control" id="stat" placeholder="stat" >
                                              </div>
                                            </div>
                                            <div class="col-6">
                                              <div class="form-group">
                                                <label for="city" class="form-label">Post coad</label>
                                                <input value="<?php echo $postcode ?>" name="postcoad" type="text" class="form-control" id="postcoad" placeholder="postcoad" >
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12 mt-4 p-0">
                                            <input class="btn btn-primary w-100" type="submit" name="submit_investor_update" value="submit">
                                          </div>
                                        </div>
                                      </form>
                                      </div>
                                     </div>
                                    </div>
                                  </div>
                                  <!-- Model Show Images -->
                                  <div class="modal  fade" id="docs_show_model_<?php echo $iii ?>" tabindex="-1" role="dialog">
                                      <div class="modal-dialog modal-md" role="document">
                                          <div class="modal-content">
                                              <div class="modal-body">
                                                <div class="card">
                                                  <div class="card-header">
                                                    <h2 class="card-title">investor Docs</h2>
                                                  </div>
                                                  <div class="card-body p-1">
                                                    <img src="../assets/images/iNvestorDocsFile/<?php echo $docs_file_1 ?>" alt="">
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                          <?php
                          $iii++;
                        }
                      }else{
                        $Ins_data20 = investor_docs();
                        $ii = 1;
                        foreach ($Ins_data20 as $data_N) {
                          $Legal_name = $data_N["Legal_name"];
                          $country = $data_N["country"];
                          $city = $data_N["city"];
                          $stats = $data_N["stats"];
                          $details_addr = $stats." ".$country." ".$stats;
                          $postcode = $data_N["postcode"];
                          $age = $data_N["age"];
                          $docs_type = $data_N["docs_type"];
                          $docs_file_1 = $data_N["docs_file_1"];
                          $date = $data_N["date"];
                          $Ins_id = $data_N["Ins_id"];
                          // Info
                          $inv_data = id_to_data($Ins_id);
                          $Email = $inv_data['Email'];
                          $main_name = $inv_data["FastName"]." ".$inv_data["LastName"];
                          $Password = $inv_data['Password'];
                          $Status = $inv_data['Status'];
                          $lavel = $inv_data['lavel'];
                          $use_raferId = $inv_data['RaferId'];
                          $mobile = $inv_data['mobile'];
                          $BonusBalance = $inv_data["BonusBalance"];
                          $MainBalance = $inv_data["MainBalance"];
                          $ProfilePic = $inv_data["ProfilePic"];
                         // set status wise color
                        if($Status=="Active"){
                          $bg = "primary";
                        }elseif($Status=="Inactive"){
                          $bg = "warning";
                        }elseif($Status=="Suspend"){
                          $bg = "danger";
                        }elseif($Status=="Completed"){
                          $bg = "success";
                        }
                        ?>
                        <!-- investor docs Boxes============== -->
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-7">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <tr>
                                      <td class="fw-bold">
                                        <img class="img_profile_docs image-fluid" src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt=""><br>
                                        <span class="name_h"><?php echo $Legal_name ?></span>
                                      </td>
                                      <td>
                                        <span>Legal name - <?php echo $Legal_name  ?></span>
                                        <hr class="hr_docs">
                                        <span>Deposit - <?php echo $MainBalance ?> usd</span> |
                                        <span>Wallat - <?php echo $BonusBalance ?> usd</span>
                                        <hr class="hr_docs">
                                        <span class="tag tag-<?php echo $bg ?>">Status - <?php
                                          if($Status=="Unseen"){
                                            echo "Pending";
                                          }else{
                                           echo $Status;
                                          }
                                        ?></span>
                                        <span class="tag tag-orange">Lavel - <?php echo $lavel ?></span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="fw-bold">Email</td>
                                      <td><?php echo $Email ?></td>
                                    </tr>
                                    <tr>
                                      <td class="fw-bold">Address</td>
                                      <td><?php echo $details_addr ?> </td>
                                    </tr>
                                    <tr>
                                      <td class="fw-bold">Post coad</td>
                                      <td><?php echo $postcode ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Set Status</td>
                                        <td>
                                          <a href="?setStatus=Act&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-primary">Active</a>
                                          <a href="?setStatus=InAct&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-warning">Inctive</a>
                                          <a href="?setStatus=Vrf&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-success">Varified</a>
                                          <a href="?setStatus=Sus&id=<?php echo $Ins_id ?>" class="btn btn-sm btn-danger">Suspend</a>
                                        </td>
                                      </tr>
                                    <tr>
                                      <td class="fw-bold">Action</td>
                                      <td>
                                        <a href="user_activity?email=<?php echo $Email ?>"  class="btn btn-sm btn-primary">Activity</a>
                                        <a type="button" data-bs-toggle="offcanvas" data-bs-target="#insEditInvestorOption_<?php echo $ii ?>" aria-controls="insEditInvestorOption" class="btn btn-sm btn-green">Edit</a>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-5">
                                <div class="card p-2 overflow-hidden">
                                  <a href="#!"><img src="../assets/images/iNvestorDocsFile/<?php echo $docs_file_1 ?>" alt="img"  class="docs_img file-manager-list w-100 h-100"></a>
                                  <div class="card-footer">
                                    <div class="d-flex">
                                      <div class="d-flex">
                                        <h5 class="mb-0 fw-semibold text-break"><span class="tag tag-info"><?php echo $docs_type ?></span></h5>
                                      </div>
                                      <div class="ms-auto my-auto">
                                        <span class="text-muted mb-0"><a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#docs_show_model_<?php echo $ii ?>"  class="btn-sm btn btn-primary">See</a></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <!-- investor docs Boxes============== -->
                      <!-- Edit Canvas Tow -->
                      <!-- Canvas user info edit option -->
                      <!-- //========================================= -->
                      <!-- //========================================= -->
                      <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="insEditInvestorOption_<?php echo $ii ?>" aria-labelledby="offcanvasScrollingLabel">
                          <div class="offcanvas-header">
                              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Investor Parsonal Information</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                          </div>
                          <div class="offcanvas-body">
                            <div class="row">
                              <div class="card">
                                <div class="card-header">
                                  <div class="image-fluid">
                                    <img class="w-100" src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>" alt="">
                                  </div>
                                </div>
                                <div class="card-body p-1">
                                  <form class="profile-edit" method="post">
                                   <input type="hidden" name="ins_email" value="<?php echo $Email ?>">
                                   <input type="hidden" name="go_page" value="investor_docs.php">
                                    <input type="hidden" name="insId" value="<?php echo $Ins_id ?>">
                                      <div class="row">
                                        <div class="col-12">
                                          <div class="form-group ">
                                            <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                                            <input value="<?php echo $mobile ?>" name="Mobile" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" >
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="form-group ">
                                            <label for="exampleInputEmail1" class="form-label">Password Change</label>
                                            <input value="" name="new_password" type="text" class="form-control" id="exampleInputEmail1" placeholder="Set New Password" >
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Fast Name</label>
                                            <input value="<?php echo $inv_data['FastName'] ?>" name="FastName" type="text" class="form-control" id="exampleInputEmail1" placeholder="Fast Name" >
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input value="<?php echo $inv_data['LastName'] ?>" name="LastName" type="text" class="form-control" id="lastName" placeholder="Last Name" >
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="useRafer" class="form-label">Use Rafer Id</label>
                                            <input value="<?php echo $use_raferId ?>" name="RaferId" type="text" class="form-control" id="useRafer" placeholder="rafer id" >
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="form-group">
                                              <label class="form-label">Badges <span class="text-red">*</span></label>
                                              <select name="badgh_is" class="form-control " >
                                            <?php
                                             $all_badges = all_badges();
                                              foreach ($all_badges as $badges) {
                                                if($badges["name"]==$lavel){
                                                    ?>
                                                    <option value="<?php echo $badges["id"] ?>" label="Select" selected><?php echo $badges["name"] ?></option>
                                                    <?php
                                                  }else{
                                                    ?>
                                                      <option value="<?php echo $badges["id"] ?>" ><?php echo $badges["name"] ?></option>
                                                    <?php
                                                     }
                                                  }
                                                  ?>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="useRafer" class="form-label">Country</label>
                                              <input value="<?php echo $country ?>" name="country" type="text" class="form-control" id="country" placeholder="Country" >
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="city" class="form-label">City</label>
                                              <input value="<?php echo $city ?>" name="city" type="text" class="form-control" id="city" placeholder="City" >
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="city" class="form-label">Stat</label>
                                              <input value="<?php echo $stats ?>" name="stat" type="text" class="form-control" id="stat" placeholder="stat" >
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="city" class="form-label">Post Coad</label>
                                              <input value="<?php echo $postcode ?>" name="postcoad" type="text" class="form-control" id="postcoad" placeholder="postcoad" >
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12 mt-4 p-0">
                                          <input class="btn btn-primary w-100" type="submit" name="submit_investor_update" value="submit">
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
                       <!-- Model Show Images -->
                       <div class="modal  fade" id="docs_show_model_<?php echo $ii ?>" tabindex="-1" role="dialog">
                           <div class="modal-dialog modal-md" role="document">
                               <div class="modal-content">
                                   <div class="modal-body">
                                     <div class="card">
                                       <div class="card-header">
                                         <h2 class="card-title">investor Docs</h2>
                                       </div>
                                       <div class="card-body p-1">
                                         <img src="../assets/images/iNvestorDocsFile/<?php echo $docs_file_1 ?>" alt="">
                                       </div>
                                     </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                        <?php
                        $ii++;
                       }
                      }
                     ?>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER CLOSE -->
    </div>
</div>
<!--app-content closed-->

<?php
include("footer.php");
?>

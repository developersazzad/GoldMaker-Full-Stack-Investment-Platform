<?php
include("header.php");
?>
<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
      <!-- Row -->
      <div class="row row-sm my-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Investor</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Action</th>
                      <th class="border-bottom-0">Profile</th>
                      <th class="border-bottom-0">Email</th>
                      <th class="border-bottom-0">Name</th>
                      <th class="border-bottom-0">RaferID</th>
                      <th class="border-bottom-0">Stats</th>
                      <th class="border-bottom-0">Lavels</th>
                      <th class="border-bottom-0">Country</th>
                      <th class="border-bottom-0">Ammount</th>
                      <th class="border-bottom-0">Bonus Balance</th>
                      <th class="border-bottom-0">Docs Link</th>
                      <th class="border-bottom-0">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $ii = 1;
                  foreach ($all_investor as $data) {
                    $Ins_id = $data["id"];
                    $FastName = $data["FastName"];
                    $LastName = $data["LastName"];
                    $name = $FastName." ".$LastName;
                    $Email = $data["Email"];
                    $country = $data["country"];
                    $Password = $data["Password"];
                    $VerificationCode = $data["VerificationCode"];
                    $Status = $data["Status"];
                    $lavel = $data["lavel"];
                    $MainBalance = $data["MainBalance"];
                    $BonusBalance = $data["BonusBalance"];
                    $ProfilePic = $data["ProfilePic"];
                    $RaferId = $data["RaferId"];
                    $Date = $data["Date"];
                    $city = $data["city"];
                    $stats = $data["stats"];
                    $postcoad = $data["postcode"];
                    $use_raferId = $data["RaferId"];
                    $mobile = $data["mobile"];
                    // dosc==
                    $docs_one_link = $domin."../assets/images/iNvestorDocsFile/".$data["docs_one"];
                    $docs_tow_link = $domin."../assets/images/iNvestorDocsFile/".$data["docs_tow"];
                  ?>
                  <tr>
                    <td style="width:100%">
                        <div class="col m-1">
                          <a onclick="pakages_data('<?php echo $data['Email'] ?>','<?php echo $ii ?>','<?php echo $name ?>')" class="tag tag-orange" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            Pakages data</a>
                            <input type="hidden" id="Profile_<?php echo $ii ?>" value="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>">
                        </div>
                        <div class="col m-1">
                          <a onclick="send_message('<?php echo $data['Email'] ?>')" class="tag tag-green" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">send message</a>
                        </div>
                        <div class="col m-1">
                            <?php
                            if($Status=="Suspend"){
                              ?>
                              <a  class="btn-sm btn btn-success" data-bs-placement="bottom" data-bs-toggle="tooltip" title="" data-bs-original-title="Click to Active" onclick="return confirm('Are you Sure?')"  href="?active=<?php echo $data['Email'] ?>">
                                Active
                              </a>
                              <?php
                            }else{
                              ?>
                              <a onclick="return confirm('Are you Sure?')"  class="btn-sm btn btn-danger" data-bs-placement="bottom" data-bs-toggle="tooltip" title="" data-bs-original-title="click to suspend" href="?suspend=<?php echo $data['Email'] ?>">Suspend</a>
                              <?php
                            }
                             ?>
                            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#insEditInvestorOption_<?php echo $ii ?>" aria-controls="insEditInvestorOption" class="btn btn-sm btn-info">Edit</a>
                        </div>
                    </td>
                    <td>
                      <?php
                      if($ProfilePic!=""){
                        ?>
                        <img alt="image" class="avatar avatar-md br-7" src="../assets/images/InvestorProfilePic/<?php echo $ProfilePic ?>">
                        <?php
                      }else{
                        ?>
                        <img alt="image" class="avatar avatar-md br-7" src="../assets/images/InvestorProfilePic/example.png">
                        <?php
                      }
                       ?>
                    </td>
                    <td><?php echo $Email ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $RaferId ?></td>
                    <td><span class="tag tag-blue">
                      <?php echo $Status ?>
                    </span></td>
                    <td>
                      <span class="tag tag-green">
                        <?php echo $lavel ?>
                      </span>
                    </td>
                    <td><?php echo $country ?></td>
                    <td><?php echo $MainBalance ?> USD</td>
                    <td><?php echo $BonusBalance ?> USD</td>
                    <td>
                      <?php
                      if($data["docs_one"]!=""){
                        ?>
                        <a target="_blank" class="tag tag-purple" href="<?php echo $docs_one_link ?>">Docs One</a>
                        <?php
                      }
                      if($data["docs_tow"]!=""){
                        ?>
                        <a target="_blank" class="tag tag-orange" href="<?php echo $docs_tow_link ?>">Docs Tow</a>
                        <?php
                      }
                       ?>
                    </td>
                    <td><?php
                      echo strtotimeMake($Date);
                     ?></td>
                  </tr>
  <!-- Canvas -->
  <!-- investor docs Boxes============== -->
  <!-- Edit Canvas Tow -->
  <!-- Canvas user info edit option -->
  <!-- //========================================= -->
  <!-- //========================================= -->
                  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="insEditInvestorOption_<?php echo $ii ?>" aria-labelledby="offcanvasScrollingLabel">
                      <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Investor Pakages Data</h5>
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
                                <input type="hidden" name="go_page" value="all_investor.php">
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
                                        <input value="<?php echo $data['FastName'] ?>" name="FastName" type="text" class="form-control" id="exampleInputEmail1" placeholder="Fast Name" >
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input value="<?php echo $data["LastName"] ?>" name="LastName" type="text" class="form-control" id="lastName" placeholder="Last Name" >
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="useRafer3" class="form-label">Use Rafer Id</label>
                                        <input value="<?php echo $use_raferId ?>" name="RaferId" type="text" class="form-control" id="useRafer3" placeholder="rafer id" >
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
                                          <input value="<?php echo $postcoad ?>" name="postcoad" type="text" class="form-control" id="postcoad" placeholder="postcoad" >
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
<!-- Canvas user info edit option -->
<!-- //========================================= -->
<!-- //========================================= -->
                  <?php
                  $ii++;
                  }
                   ?>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- CONTAINER END -->
  </div>
<!--app-content close-->
</div>
<?php
include("tamplate/canvas_data.php");
include("datable_footer.php");
 ?>

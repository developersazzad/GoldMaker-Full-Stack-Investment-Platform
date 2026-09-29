<!-- account active Modal -->
    <div class="modal fade" id="AccountActiveModel" tabindex="-1" aria-labelledby="cammodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xmd modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="cammodalLabel">Give Document</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="w-100 image_account_active" src="assets/img/component/National ID.png" alt="" class="mb-4">
                    <form name="DocsSubmitForm"  method="post" enctype="multipart/form-data">
                        <div class="form-floating is-valid mb-3">
                            <select name="docs_type" class="form-control" id="docstype">
                                <option value=""> Document Type</option>
                                <option value="National Id">National Id</option>
                                <option value="passport Id">passport Id</option>
                                <option value="Driving Licence">Driving Licence </option>
                                <option value="Gov. Bill Copy">Gov. Bill Copy</option>
                            </select>
                            <label for="Docs">Document</label>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-floating is-valid mb-3">
                                <input name="docs_file" type="file" class="form-control" value=""
                                    id="document">
                                <label for="document">Document File <small>Pdf/png/jpg</small></label>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6">
                            <div class="form-floating is-valid mb-3">
                                <input name="legal_name" type="text" class="form-control" value=""
                                    placeholder="Legal Name" id="Legal_Name">
                                <label for="Legal_Name">Name</label>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6">
                            <div class="form-floating is-valid mb-3">
                                <input name="in_age" type="text" class="form-control" value="" placeholder="Your Age" id="Your_Age">
                                <label for="Age">Your Age</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-floating is-valid mb-3">
                                <input name="postcode" type="text" class="form-control" value="" placeholder="Postel code" id="postel_code">
                                <label for="Age">Post Code</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="row">
                              <div class="col-6">
                                <div class="form-floating is-invalid mb-3">
                                  <select name="addr_country" class="form-control" id="country">
                                    <option value="">Select</option>
                                  <?php
                                    include("all_countery.php");
                                  ?>
                                  </select>
                                  <label for="countery">Country</label>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-floating is-invalid mb-3">
                                  <input name="addr_city" type="text" class="form-control" value="" placeholder="city" id="city">
                                  <label for="countery">City</label>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-floating is-invalid mb-3">
                                  <input name="addr_statsOther" type="text" class="form-control" value="" placeholder="Details Address" >
                                  <label for="countery">Details Address</label>
                                </div>
                              </div>
                              <div class="col-12">
                                <div style="background: #0000003d;padding: 10px;border-radius: 8px;" class="form-floating is-valid mb-3">
                                  <div style="width: 300px;" class="form-check form-switch">
                                    <input name="trams_check" style="margin-left: -13px;padding: 7px;" class=" ml-3 form-check-input" type="checkbox" id="trams_and_condition">
                                    <label class="form-check-label text-muted px-2 " for="trams_and_condition">Agree Trams and Conditions</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="mb-3"><span class="text-muted"></span>
                          <a href="#trams">Click to See Terms</a>
                        </p>
                      </div>
                <input type="submit" class="btn btn-lg btn-primary rounded-15" name="Docs_submit_btn"  value="Submit">
                </form>
            </div>
        </div>
    </div>
    <!-- Camera Modal ends-->
    <!-- profile edit function Model -->
    <!-- account active Modal -->
      <div class="modal fade" id="profile_edit" tabindex="-1" aria-labelledby="cammodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xmd modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-center" id="cammodalLabel">Change Profile Information</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                 <form class="" method="post" enctype="multipart/form-data">
                    <div class="modal-body text-center">
                        <!-- profile information -->
                        <div class="row mb-3">
                          <div class="col">
                            <h6>Basic Information</h6>
                          </div>
                        </div>
                        <div class="row h-100 mb-4">
                          <div class="col-12 col-md-6 col-lg-6 mb-3">
                            <div class="form-group form-floating">
                              <input name="fName" type="text" class="form-control" value="<?php echo $FastName ?>" id="address1" placeholder="Your Name">
                              <label class="form-control-label" for="address1">Fast Name</label>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6 mb-3">
                            <div class="form-group form-floating">
                              <input name="lName" type="text" class="form-control" value="<?php echo $LastName ?>" id="address1" placeholder="Your Name">
                              <label class="form-control-label" for="address1">Last Name</label>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group form-floating  mb-3">
                              <input name="mobile" type="text" class="form-control" value="<?php echo $Mobile ?>" placeholder="Mobile" id="names">
                              <label for="names">Mobile</label>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group form-floating">
                              <input value="" name="prifile_pic" type="file" class="form-control" id="fileupload">
                              <label for="fileupload">Uplaod File</label>
                            </div>
                          </div>
                        </div>
                        <!-- add edit address form -->
                        <div class="row mb-3">
                          <div class="col">
                            <h6>Address Change</h6>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6 mb-3">
                            <div class="form-floating mb-3">
                                <input name="Address" type="text" class="form-control" value="<?php echo $Stats ?>" id="address" placeholder="address">
                              <label for="country">Address</label>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6 mb-3">
                            <div class="form-floating mb-3">
                              <input name="city" type="text" class="form-control" value="<?php echo $City ?>" id="city" placeholder="city">
                              <label for="country">City</label>
                            </div>
                          </div>
                          <div class="col-12 col-md-12 col-lg-12 mb-4">
                            <div class="form-group form-floating">
                              <input  name="postcode" type="text" class="form-control" value="<?php echo $Postcode ?>" placeholder="postcode">
                              <label class="form-control-label" for="">Post Code</label>
                            </div>
                          </div>
                        </div>
                        <!-- change password -->
                        <div class="row mb-3">
                          <div class="col">
                            <h6>Need Change Password</h6>
                          </div>
                        </div>
                        <div class="row h-100 mb-4">
                          <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-floating  mb-3">
                              <input name="main_password" type="text" class="form-control" value="" placeholder="Old Password" id="password">
                              <label for="password">Old Password</label>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-floating ">
                              <input name="new_password1" type="text" class="form-control" placeholder="New Password" id="confirmpassword">
                              <label for="confirmpassword">New Password</label>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-floating ">
                              <input name="new_password2" type="text" class="form-control" placeholder="Confirm New Password" id="confirmpassword">
                              <label for="confirmpassword">Confirm New Password</label>
                            </div>
                          </div>
                        </div>
                        <div class="row h-100 ">
                          <div class="col-12 mb-4">
                            <button name="update_profile_investor" type="submit" role="button"  class="btn btn-success btn-lg w-100">Update</button>
                          </div>
                        </div>
                   </div>
                </form>
            </div>
        </div>
      <!-- profile edit -->


<!-- Create Pakage model Box======= -->
<div class="modal fade" id="create_pakage_account_switcher">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Create pakege and Account</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form name="create_account_907" class="form create_account_907"  method="post">
      <div class="modal-body">
        <form class="login100-form validate-form" >
          <div class="panel panel-primary">
            <div class="tab-menu-heading">
              <div class="tabs-menu1">
                <!-- Tabs -->
                <ul class="nav panel-tabs">
                  <li class="mx-0"><a href="#tab51" class="active" data-bs-toggle="tab">নিজের জন্য প্যাকেজ</a></li>
                  <li class="mx-0"><a href="#tab61" data-bs-toggle="tab" class="">অন্যের জন্য একাউন্ট ও প্যাকেজ</a></li>
                </ul>
              </div>
            </div>
            <div class="panel-body tabs-menu-body p-0 pt-5">
              <div class="tab-content">
                <div class="tab-pane active" id="tab51">
                  <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="fa fa-server text-muted" aria-hidden="true"></i>
                    </a>
                    <select  onchange="server_validate9(this)" id="server_9090" class="border-start-0 form-control ms-0" name="server78_select" required>
                      <option value="">Select Server</option>
                     <?php
                      foreach($server as $data7878){
                        ?>
                        <option value="<?php echo $data7878["idserver"] ?>">
                          <?php echo $data7878["nameserver"] ?>
                        </option>
                        <?php
                         }
                         ?>
                    </select>
                   </div>
                  <!-- 2nd -->
                  <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="fa fa-gift text-muted" aria-hidden="true"></i>
                    </a>
                    <select id="pakage_list541" class="border-start-0 form-control ms-0" name="pakage_varient_other" required>
                        <!-- js data load -->
                    </select>
                  </div>
                  <!-- 2nd -->
                  <div class="container-login100-form-btn">
                    <input type="hidden" name="cart_is_check" value="Submit">
                     <input type="submit" name="create_pakage_own" class="w-100 btn btn-primary" value="Create">
                  </div>
                </div>
                <!-- create account by other -->
                <div class="tab-pane" id="tab61">
                  <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="fa fa-user text-muted" aria-hidden="true"></i>
                    </a>
                    <input name="user_name_90" id="user_name_90" class="input100 border-start-0 form-control ms-0" type="text" placeholder="Full Name">
                  </div>
                  <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                    </a>
                    <input name="user_email_90" id="user_email_90" class="input100 border-start-0 form-control ms-0" type="email" placeholder="Email">
                  </div>
                <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="fa fa-key text-muted" aria-hidden="true"></i>
                    </a>
                    <input name="user_password_90" id="user_password_90" class="input100 border-start-0 form-control ms-0" type="password" placeholder="password">
                  </div>
                  <!-- server -->
                  <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="fa fa-gift text-muted" aria-hidden="true"></i>
                    </a>
                    <select id="server_8989" onchange="server_validate96(this)"  class="border-start-0 form-control ms-0" name="pakage_varient" required>
                      <option value="">Select Pakage </option>
                   <?php
                    foreach($server as $data7878){
                      ?>
                      <option value="<?php echo $data7878["idserver"] ?>">
                        <?php echo $data7878["nameserver"] ?>
                      </option>
                      <?php
                       }
                       ?>
                    </select>
                  </div>
                  <!-- server -->
                  <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="fa fa-gift text-muted" aria-hidden="true"></i>
                    </a>
                    <select onchange='button_enabled(this)' id="pakage_varient_90" class="border-start-0 form-control ms-0" name="pakage_varient_234" required>
                      <!-- data fetch ny js -->

                    </select>
                  </div>
                  <div class="wrap-input100 validate-input input-group" >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="fa fa-inbox text-muted" aria-hidden="true"></i>
                    </a>
                    <input id="user_rafer_90" class="input100 border-start-0 form-control ms-0" type="text" value="Use Rafer - <?php echo $email ?>" disabled>
                  </div>
                  <span> Note : Need to verify Email.</span>
                  <div class="container-login100-form-btn ">
                    <button type="submit" id="create_pakage_1209" name="submit" value="Create" class="w-100 btn btn-primary mt-3 disabled">
                      <a  onclick="create_account_user()" class="modal-effect t d-grid text-light " data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#Verify_user_panel_01">Create
                      </a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </form>
    </div>
    </div>
  </div>
  <!-- add balance model -->
  <div class="modal fade" id="Verify_user_panel_01">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
      <div class="modal-content modal-content-demo">
        <div class="modal-header">
          <h6 class="modal-title" >Enter verification code</h6>
          <p><strong id="email_sent_stats_90"></strong></p>
          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <form name="verify_form" method="post" class="p-3 login100-form validate-form" >
          <div class="panel panel-primary">
            <div class="panel-body tabs-menu-body p-0 pt-5">
              <div class="tab-content">
                <div class="tab-pane active" id="tab5">
                  <div class="wrap-input100 validate-input input-group "  >
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                      <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                    </a>
                    <input id="verifycation_code_90" class=" border-start-0 form-control ms-0" type="text" name="verify_coad" placeholder="Type Code">

                    <input id="main_user_balance_88" type="hidden" name="main_user_balance_88" value="<?php echo $balance ?>">
                  </div>
                    <div class="form-group " style="margin-bottom:20px">
                      <a class="btn btn-primary" id="verify_code_submit_90" onclick="verify_account_89()" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="javascript:void(0)" >verify
                         </a>
                    </div>
                  </div>
                  <div class="text-center pt-3">
                    <strong><p style="font-weight:700;font-size:14px" class="bg-warning mb-2" id="email_error_90">Check Email In Your Email Spam Box <a href="javascript:void(0)" class="btn-sm btn-warning" onclick="see_spam()">see</a></p></strong>
                  </div>
                </div>
                <div class="card see_spam d-none">
                  <div class="card-body p-1">
                    <img class="w-40 image-fluid" src="/create/sample/spambox.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- create pakage model box END======== -->
<div class="modal fade" id="profile_update_01">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Update Your Profile Information</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form class="form" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group text-left">
            <div class="row">
              <div class="col-12">
                <label class="form-label">Uplode Profile Picture</label>
              </div>
              <div class="col-8"style="display: flex;vertical-align: middle;justify-content: center;align-items: flex-end;" >
                <input class="form-control  mb-2 " name="profile_pic_update" type="file" value="">
              </div>
              <div class="col-4">
                <img style="border: 1px solid #03a9f4;border-radius: 8px;" class="w-100 image-fluid" src="../assets/images/users/<?php echo $profile ?>" alt="img">
              </div>
            </div>
        </div>
        <div class="form-group text-left">
            <label class="form-label">Mobile Number</label>
            <input class="form-control  mb-4 " name="mobile_update" placeholder="Mobile Number" required="" type="text" value="<?php echo $mobile ?>">
        </div>
        <div class="form-group m-0 text-left">
          <label class="form-label">Address </label>
          <input class="form-control  mb-4" placeholder="Your Address" required="" type="text" name="address_update" value="<?php echo $address ?>">
        </div>
        <div class="form-group m-0 text-left">
          <label class="form-label">Bio </label>
          <textarea name="bio_update" rows="5" cols="50" class="form-control"><?php echo $bio ?></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="profile_update" class="btn btn-primary" value="submit">
        <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
    </div>
  </div>
</div>

<!-- add balance model -->
<div class="modal fade" id="add_mony_01">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Add Balance</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form class="form" action="https://bdserver.live/payments/index"  method="post">
      <div class="modal-body">
        <div class="form-group text-left">
            <label class="form-label">Email</label>
           <input name="full_name" class="form-control  mb-4 is-valid state-valid" type="hidden" value="<?php echo $name ?>">
            <input name="email_owner" id="email_owner_987" class="form-control  mb-4 is-valid state-valid" type="text" value="<?php echo $email ?>" >
        </div>
        <div class="form-group text-left">
            <label class="form-label">কত টাকা ADD করবেন</label>
            <input id="ammount_add_654" class="form-control  mb-4 is-valid state-valid" name="ammount_add" placeholder="কত টাকা"  type="text" value="" required>
        </div>
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary"  name="add_payment_own"  value="Submit">
        <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- transfar balance model -->
<div class="modal fade" id="transfar_mony_01">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Transfar Balance</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form class="form" action="" method="post">
      <div class="modal-body">
        <div class="form-group text-left">
            <label class="form-label">কত টাকা ADD পাঠাবেন.</label>
            <input name="ammount" class="form-control  mb-4 is-valid state-valid" placeholder="কত টাকা"  type="number" value="" required>
        </div>
        <div class="form-group m-0 text-left">
          <label class="form-label">যাকে পাঠাবেন তার Email দিন </label>
          <input name="amt_reciver_email" class="form-control  mb-4 is-valid state-valid" placeholder="User Email"  type="email" value="" required>
        </div>
      </div>
      <div class="modal-footer">
          <input name="balance_transfar" type="submit" class="btn btn-primary" value="submit" >
        <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Rafer balance withdrow -->
<div class="modal fade" id="rafer_balance_withdwor_01">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">সর্বনিম্ন withdrow ammount 500 টাকা </h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form class="form"  method="post">
      <div class="modal-body">
        <div class="form-group text-left">
            <label class="form-label">কত টাকা Withdrow করবেন.</label>
            <input class="form-control  mb-4 is-valid state-valid" placeholder="কত টাকা"  type="text" value="" name="ammount" required>
        </div>
        <div class="form-group text-left">
            <label class="form-label">নম্বর দেন (Bkash/Nagod) .</label>
            <input name="mobile_number" class="form-control  mb-4 is-valid state-valid" placeholder="নম্বর দেন"  type="number" value="" required>
        </div>
        <div class="form-group m-0 text-left">
          <label class="form-label text-left">কোন মাধ্যমে Withdrow করবেন.</label>
              <select name="mathod" class="form-control form-select select2 select2-hidden-accessible" data-bs-placeholder="Select Year" tabindex="-1" aria-hidden="true">
                <option value="bkash" class="text-left">Bkash</option>
                <option value="nagod">Nagod</option>
                <option value="rocket">Rocket</option>
                <option value="cellfin">cell fin</option>
              </select>
        </div>
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="submit" name="rafer_withdrow_request">
        <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <br>
        <small class="text-light bg-primary">
          অবস্যই পার্সোনাল একাউন্ট নাম্বার দিতে হবে। এজেন্ট নাম্বার কাজ করবে না।</small>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- rafer balance to main balance model -->
<div class="modal fade" id="rafer_balance_main_balance">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Transfar Balance</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form class="form" action="" method="post">
      <div class="modal-body">
        <div class="form-group text-left">
            <label class="form-label">কত টাকা CONVART করবেন</label>
            <input name="ammount" class="form-control  mb-4 is-valid state-valid" placeholder="কত টাকা"  type="number" value="" required>
        </div>
      </div>
      <div class="modal-footer">
          <input name="rafer_to_main" type="submit" class="btn btn-primary" value="submit">
        <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- add balance modal -->
<div class="modal fade" id="addbalance01">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Select2 Modal</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Add Balance Request</h6>
                <!-- Select2 -->
                <select class="form-control select2 select2-dropdown">
                    <option label="Choose one">
                     Bkash
                    </option>
                    <option value="Firefox">
                     Nagod
                    </option>
                    <option value="Chrome">
                    Bank
                    </option>
                </select>
                <!-- Select2 -->
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button">Save changes</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End add balance modal -->
<!-- Renual pakage own model -->
<div class="modal fade" id="renual_pakage_per_user_01">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Renual Pakage </h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form class="form" action="" method="post">
      <div class="modal-body" id="data_fetch_899">
        <!-- fetch_data_ajax -->
      </div>
      <div class="modal-footer">
        <a onclick="renewal_pakage_submit()" href="javascript:void(0)" class="btn btn-primary" >ReNew</a>
        <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Renual account pakage list model -->
<div class="modal fade" id="renual_pakage_rafer_account_01">
  <div class="modal-dialog modal-dialog-centered text-center" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Renual Pakage By User</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
    <form class="form" action="" method="post">
      <div class="row">
        <div class="col-sm-6">
          <label class='form-label'> Price - <span id="price_876"></span> ৳</label>
        </div>
        <div class="col-sm-6">
          <label class='form-label'>New Expire Date -  <span id="expire_date_908"></span> </label>
        </div>
      </div>
      <div class="modal-body" id="fetch_data_account_pakage_876">
        <div class='form-group text-left'>
            <label class='form-label'> <span id="full_name_990"></span> এর পেকেজ List</label>
            <select class='form-control' name='' id="fetch_data_account_pakage_990" >
              <!-- data fetch by js -->
            </select>
        </div>
        <div class='form-group text-left'>
            <label class='form-label'>কত দিনের জন্য.</label>
            <select class='form-control' name='' id="duration_5432"  onchange="price_cal()" required>
              <option value='1'>30 day </option>
              <option value='2'>2 Month</option>
              <option value='3'>3 month</option>
              <option value='6'>6 month</option>
              <option value='12'>12 month</option>
            </select>
        </div>
        <!-- fetch data ajax js data fetch pakage user -->
      </div>
      <div class="modal-footer">
        <a id="renew_btn_9845" href="javascript:void(0)"  onclick="renew_by_account_pakage_multi()" name="renew_by_account_pakage_multi" class="btn btn-primary" value="submit">Renew</a>
        <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- password change -->

<?php
include("header.php");

?>
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
                      <th class="border-bottom-0">Name</th>
                      <th class="border-bottom-0">Email</th>
                      <th class="border-bottom-0">Method Name</th>
                      <th class="border-bottom-0">Method Number</th>
                      <th class="border-bottom-0">Add Amount</th>
                      <th class="border-bottom-0">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($payment_add_req as $data) {
                    $investorName = $data["investorName"];
                    $investorEmail = $data["investorEmail"];
                    $MethodName = $data["MethodName"];
                    $MethodNumber = $data["MethodNumber"];
                    $main_id = $data["main_id"];
                    $Status = $data["Status"];
                    $AddAmmount = $data["Ammount"];
                    $date = $data["date"];
                  ?>
                  <tr>
                    <td style="width:100%">
                        <div class="col m-1">
                          <?php
                            if($Status=="proccing"){
                              ?>
                              <a onclick='Payment__req_stats("<?php echo $main_id ?>","<?php echo $investorEmail ?>","<?php echo $AddAmmount ?>")'  class="btn btn-primary bg-primary-gradient mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#paymentadd_Btn_model">
                                Proccing
                              </a>
                              <?php
                            }elseif($Status=="unapproved"){
                              ?>
                              <a onclick='Payment__req_stats("<?php echo $main_id ?>","<?php echo $investorEmail ?>","<?php echo $AddAmmount ?>")'  class="btn btn-danger bg-danger-gradient mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#paymentadd_Btn_model">
                                Unapproved
                              </a>
                              <?php
                            }elseif($Status=="success"){
                              ?>
                              <a onclick='Payment__block("<?php echo $main_id ?>","<?php echo $investorEmail ?>","<?php echo $AddAmmount ?>")' class="btn btn-green  mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#block__model">
                                Success
                              </a>
                              <?php
                            }elseif($Status=="unseen"){
                              ?>
                              <a onclick='Payment__req_stats("<?php echo $main_id ?>","<?php echo $investorEmail ?>","<?php echo $AddAmmount ?>")' class="btn btn-secondary bg-secondary-gradient mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#paymentadd_Btn_model">
                                Pending
                              </a>
                              <?php
                            }
                           ?>
                        </div>
                    </td>
                    <td>
                       <?php echo $investorName?>
                     </td>
                    <td><?php echo $investorEmail ?></td>
                    <td><?php
                    if($MethodName=="Bank"){
                      echo "Method Name : ".$MethodName."<br>";
                      $Bank_name = $data["sub_text"];
                      echo "Bank Name : ".$Bank_name;
                    }else{
                      echo $MethodName;
                    }
                     ?></td>
                    <td><?php echo $MethodNumber ?></td>
                    <td><?php echo $AddAmmount?> USD</td>
                    <td><?php echo $startDate = date('Y-m-d', strtotime($date)); ?></td>
                  </tr>
                  <?php
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
include("tamplate/model.php");
include("datable_footer.php");
 ?>

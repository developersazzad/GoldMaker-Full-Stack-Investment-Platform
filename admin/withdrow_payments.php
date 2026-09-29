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
              <div class="row w-100">
                <div class="col-5">
                  <h3 class="card-title">All Investor <?php
                if(isset($_SESSION["BDT_VALUE"])){
                  if($_SESSION["BDT_VALUE"] !=""){
                      $Main_Pr = "<span class='tag tag-success'> Rate 1 USD -  ".$_SESSION["BDT_VALUE"]." BDT</span>";
                      echo $Main_Pr;
                    }else{

                     }
                   } ?>
                   </span></h3>
                </div>
                <div class="col-7 ">
                  <form class="d-inline" method="post">
                    <div class="row">
                      <div class="col">
                        <input name="bdt_value_main" class="form-control form-control-sm" type="text" placeholder="Type BDT Rate">
                      </div>
                      <div class="col">
                        <input name="bdt_value_is" value="convart" class="btn btn-info btn-sm" type="submit">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Action</th>
                      <th class="border-bottom-0">Name</th>
                      <th class="border-bottom-0">Email</th>
                      <th class="border-bottom-0">Account No</th>
                      <th class="border-bottom-0">Withdrow total</th>
                      <th class="border-bottom-0">Fee</th>
                      <th class="border-bottom-0">BDT</th>
                      <th class="border-bottom-0">Method</th>
                      <th class="border-bottom-0">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($withdrow_req_fanc as $data) {
                    $InvestorName = $data["InvestorName"];
                    $withdrow_id = $data["withdrow_id"];
                    $UserId = $data["UserId"];
                    $email = $data["email"];
                    $Status = $data["Status"];
                    $WithdrowAmmount = $data["Ammount"];
                    $date = $data["Date"];
                    $AccountNo = $data["AccountNo"];
                    // Find Binance====
                    if($AccountNo==""){
                      $sql_binance = mysqli_query($con,"SELECT `id`, `widrow_id`, `method_id`, `binnance_Network`, `screenshoot`, `wallat_address`, `date` FROM `method_other_all` WHERE widrow_id='$withdrow_id'");
                      $sql_binance = mysqli_fetch_assoc($sql_binance);
                      $binnance_Network = $sql_binance["binnance_Network"];
                      $wallat_address = $sql_binance["wallat_address"];
                      $screenshoot = $sql_binance["screenshoot"];

                    }
                    // Find Binance====
                    $Method = $data["method_name"];

                    // Bank so fetch_banks user bank details===========

                    // Bank so fetch_banks user bank details===========
                    // callect Fee and calculate
                  $ammountBdt = "";
                  if(isset($_SESSION["BDT_VALUE"])){
                    if($_SESSION["BDT_VALUE"] !=""){
                      $ammountBdt = $WithdrowAmmount*$_SESSION["BDT_VALUE"];
                    }
                    }
                  if($data["amout_type"]=="Profit"){
                      $fee = $admin["wallat_withdrow_fee"];
                    }else{
                      $fee = "";
                    }
                  ?>
                  <tr>
                    <td>
                        <div class="col m-1">
                          <?php
                            if($Status=="proccing"){
                              ?>
                              <a onclick='withdrow_stats("<?php echo $withdrow_id ?>","<?php echo $email ?>")'  class="btn btn-primary bg-primary-gradient mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#withdrow_Btn_model" style="color:white !important">
                                Proccing
                              </a>
                              <?php
                            }elseif($Status=="cancle"){
                              ?>
                              <a onclick='withdrow_stats("<?php echo $withdrow_id ?>","<?php echo $email ?>")'  class="btn btn-danger bg-danger-gradient mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#withdrow_Btn_model" style="color:white !important">
                                Cancle
                              </a>
                              <?php
                            }elseif($Status=="success"){
                              ?>
                              <a onclick='withdrow_stats("<?php echo $withdrow_id ?>","<?php echo $email ?>")' class="btn btn-green  mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#withdrow_Btn_model" style="color:white !important">
                                Success
                              </a>
                              <?php
                            }elseif($Status=="unseen"){
                              ?>
                              <a onclick='withdrow_stats("<?php echo $withdrow_id ?>","<?php echo $email ?>")' class="btn btn-secondary bg-warning mt-3 btn-sm" data-bs-toggle="modal" data-bs-target="#withdrow_Btn_model" style="color:white !important">
                                Pending
                              </a>
                              <?php
                            }
                           ?>
                        </div>
                    </td>
                    <td>
                       <?php echo $InvestorName ?>
                     </td>
                    <td><?php echo $email ?></td>
                    <td>
                      <?php
                        if($AccountNo==""){
                          echo "Bin Net - ".$binnance_Network;
                          echo "<br />";
                          echo "Wallat Addr - ".$wallat_address;
                        }else{
                          echo $AccountNo;
                        }
                       ?>

                    </td>
                    <td><?php echo $WithdrowAmmount ?> USD</td>
                    <td><?php echo $fee ?>%</td>
                    <td><?php echo $ammountBdt ?> BDT</td>
                    <td><?php
                    if($Method=="Banks"){
                      $bank_sp = bank_list_sp($withdrow_id);
                      echo "Method : ".$Method."<br>";
                      echo "Bank Name : ".$bank_name = $bank_sp["bank_name"]."<br>";
                      echo "Account No : ".$account_no = $bank_sp["account_no"]."<br>";
                      echo "Branch : ".$branch_name = $bank_sp["branch_name"]."<br>";
                      echo "Routing No : ".$routing_no = $bank_sp["routing_no"]."<br>";
                    }else{
                     echo $Method;
                    }


                    ?></td>
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

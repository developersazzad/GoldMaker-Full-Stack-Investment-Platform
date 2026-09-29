<div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
  <!-- rewards withdraw -->
  <div class="row mb-1 justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="card mb-3">
        <form enctype="multipart/form-data" method="post">
         <div class="card-body">
          <div class="row mb-3">
            <div class="col-auto">
              <div class="avatar avatar-40 bg-warning text-white shadow-sm rounded-10">
                <img class="icon_img_note" src="assets/icons/low/withdrow_money.png" alt="">
              </div>
            </div>
            <div class="col align-self-center ps-0">
              <p class="mb-0 text-color-theme">withdraw to account</p>
              <p class="text-muted small">It Take time 4 to 24 Hour</p>
            </div>
            <div class="col align-self-end">
              <a class="btn btn-info helper_btn" data-bs-target="#model_w_help" data-bs-toggle="modal">See Help</a>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <div class="row mb-4 position-relative">
                <div class="col">
                  <div class="form-group form-floating">
                    <input  name="wid_amount" type="text" class="form-control " id="amountpoints" placeholder="Amount" value="">
                    <label class="form-control-label" for="amountpoints">Enter Ammount</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group form-floating" id="wid_account_number">
                    <input name="wid_account_number" type="text" class="form-control " id="numberAccount" placeholder="Account Number" value="">
                    <label class="form-control-label" id="account_no" for="numberAccount">Account Number</label>
                  </div>
                </div>
                <!-- bank dropdown -->
                <!-- //=================================== -->
                <div class="col-12 mt-2" id="bank_dropdown" style="display:none">
                  <div class="form-group form-floating">
                    <div class="form-group form-floating">
                        <input name="bank_dropdown_99" type="text" list="datalistStates" class="form-control" value="" id="address5" placeholder="Select Bank">
                        <datalist id="datalistStates">
                          <?php foreach ($bank_list as $bank) {
                            ?>
                            <option value="<?php echo $bank["bank_name"] ?>">
                            <?php
                          } ?>
                        </datalist>
                        <label class="form-control-label" for="address5">Select Required</label>
                    </div>
                  </div>
                </div>
                <!-- new only binance -->
                <!-- //=================================== -->
                <div class="form-group form-floating" id="binnance_w_addr98712" style="display:none" >
                  <input name="binnance_wallat_addr" type="text" class="form-control" id="wallat_addr" placeholder="wallat Address" value="">
                  <label style="margin-left:15px" id="account_no12" class="form-control-label" for="numberAccount">Binance Wallat Address</label>
                </div>
                <div class="form-group form-floating" id="wallat_network009"  style="display:none" >
                  <input name="binnance_Network" type="text" class="form-control" id="wallat_network" placeholder="wallat Address" value="">
                  <label style="margin-left:15px" id="routing_name12" class="form-control-label" for="numberAccount">Binance Network</label>
                </div>
                <!-- //based On method Name===================== -->
                <input id="method_name_un6767" type="hidden" name="method_name_un6767" value="">
                <!-- //based On method Name===================== -->
              </div>
              <h6 class="title mb-3">withdraw to Account</h6>
              <div class="row">
                <div class="col-12 px-0">
                  <div class="swiper-container cardswiper">
                    <div class="swiper-wrapper">
                      <?php
                      $iii = 1;
                      $set_bg = "";
                    foreach ($withdrow_pay_method as $data) {
                      $sub_text = $data["sub_text"]." | Account";
                      $sub_text = explode(" ",$sub_text);
                      $sub_text1 = $sub_text[0];
                      $sub_text2 = $sub_text[1];
                      $method_name = $data["name"];
                      if($method_name=="Binance"){
                        $addr = $data['account_number'];
                        $text0 = "";
                        $show = "Binance";
                      }elseif($method_name=="Banks"){
                         $show = "Bank";
                         $sub_text1 = "BANK ";
                         $set_bg = "bg-dark";
                      }else{
                          $show = "other";
                      }
                        ?>
                      <div class="swiper-slide">
                        <div onclick="show_withdrow909('<?php echo $iii ?>','<?php echo $show ?>')" class="card " style='background-image: url("../assets/images/brands/<?php echo $data["banner"]; ?>");background-repeat: repeat-x;background-repeat:no-repeat;background-size: cover;background-position: center center !important;'>
                          <div class="card-body">
                            <div class="form-check position-absolute end-0 bottom-0 m-1">
                              <input class="form-check-input rounded-circle" name="withdrow_method_id" type="radio" id="card2" value="<?php echo $data['id']?>">
                              <label for="card2" class="form-check-label"></label>
                            </div>
                            <div class="row mb-3">
                              <div class="col-auto align-self-center">
                                <img class="sm-logo_mst <?php echo $set_bg ?>" src="../assets/images/brands/<?php echo $data["icon"] ?>" alt="">
                              </div>
                              <div class="col align-self-center text-end">
                                <p class="small">
                                  <span class="text-uppercase size-10"><?php echo $sub_text1; ?></span><br>
                                  <span class="text-muted"><?php echo $sub_text2; ?></span>
                                </p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 enter Ammount_box">
                                <!-- main ammount input fild -->
                                <div class="col-12">
                                  <h5 class="mb-0 mt-2 text-light size-12"><?php echo $sub_text1; ?> Account</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     <?php
                     $iii++ ;
                   } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button role="button" type="submit" name="money_withdrow_submit" id="add_withdrow_btn8" class="disabled btn btn-lg btn-default shadow-sm w-100">
            withdrow
          </button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- large discount block-->
  <!-- Transactions -->
  <div class="row mb-3">
    <div class="col">
      <h6 class="title">Payment Withdrow History</h6>
    </div>
    <div class="col-auto">
      <a target="_blank" href="../user/history_all?page=w_h_a" class="small">See More</a>
    </div>
  </div>
  <!-- list of transiticetion -->
  <div class="row mb-4">
    <div class="col-12 px-0">
      <ul class="list-group list-group-flush bg-none">
        <?php
        $is = 0;
           foreach ($withdrow_history as $data) {
             if($is<=9){
             $icon = $data['icon'];
             $method_name = $data["method_name"];
             $Ammount = $data["Ammount"];
             $why_cancle = $data['why_cancle'];
             $status = $data['Status'];
             $Date = $data["Date"];
             $Date = date('Y-m-d', strtotime($Date));
             if($status=="success"){
               $BG = "Success_BG";
            }elseif($status=="proccing"){
               $BG = "Proccing_BG";
            }elseif($status=="cancle"){
               $BG = "Cancle_BG";
            }elseif($status=="unseen"){
               $BG = "Unseen_BG";
             }
            ?>
            <li class="list-group-item <?php echo $BG ?>">
              <div class="row">
                <div class="col-auto">
                  <div style="background: white;display: flex;justify-content: center;align-items: center;" class="avatar avatar-50 shadow rounded-10 ">
                    <img src="../assets/images/brands/<?php echo $icon ?>" alt="">
                  </div>
                </div>
                <div class="col align-self-center ps-0">
                  <p class="text-color-theme mb-0"><?php echo $method_name ?></p>
                  <p class="text-muted size-8" style="background: #0000003d;padding: 3px 7px;border-radius: 7px;opacity:1">
                   <?php
                     if($status=="cancle"){
                       echo "Cancle ".$why_cancle;
                     }elseif($status=="success"){
                       echo "Success Complete Payment";
                     }elseif($status=="proccing"){
                       echo "Processing";
                     }elseif($status=="unseen"){
                       echo "Pending";
                     }
                    ?>
                 </p>
                </div>
                <div class="col align-self-center text-end">
                  <?php
                    // cal===
                   ?>
                  <p style="font-size: 12px;font-weight: 700;" class="mb-0">Carge - <?php echo $withdrowFee ?> % |<?php echo $Ammount ?> USD</p>
                  <p class="text-muted size-12"><?php echo $Date ?></p>
                </div>
              </div>
            </li>
            <?php
            $is++;
           }
         }
         ?>
      </ul>
    </div>
  </div>
</div>

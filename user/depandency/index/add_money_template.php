<div class="tab-pane fade show active" id="cards" role="tabpanel">
      <!-- rewards withdraw -->
      <div class="row mb-1 justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
  <form class="" enctype="multipart/form-data" method="post">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-auto">
                  <div class="avatar avatar-40 bg-warning text-white shadow-sm rounded-10">
                    <img class="icon_img_note" src="assets/icons/low/add_money.png" alt="">
                  </div>
                </div>
                <div class="col align-self-center ps-0">
                  <p class="mb-0 text-color-theme">Add to account</p>
                  <p class="text-muted small">It Take time 1 to 12 Hour</p>
                </div>
                <div class="col align-self-end">
                  <a class="btn btn-primary helper_btn" data-bs-target="#model_a_help" data-bs-toggle="modal">See Help</a>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row mb-4 position-relative">
                    <div class="col pe-0">
                      <div class="form-group form-floating">
                        <input name="Add_Amount7" type="text" class="form-control" id="amountpoints" placeholder="Points" value="">
                        <label class="form-control-label" for="amountpoints">Amount</label>
                      </div>
                    </div>
                    <div class="col align-self-center ps-0">
                      <div class="form-group form-floating">
                        <input name="Add_Screenshoot7" type="file" value="" class="form-control text-end" id="Screenshoot">
                        <label class="form-control-label text-end pe-1 end-0 start-auto" for="Screenshoot">Screenshoot</label>
                      </div>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-44 btn-success text-white shadow-sm position-absolute start-50 top-50 translate-middle">
                      <i class="bi bi-arrow-left-right" disabled></i>
                    </a>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group form-floating">
                        <input name="Add_admin_number" type="text" class="form-control" id="Nuddmber" placeholder="Your Number" value="">
                        <datalist id="Add_admin_number">
                          <option value="Binance">
                        </datalist>
                        <label class="form-control-label" for="amountpoints">From Which Number Did You Send Money[YN]</label>
                      </div>
                    </div>
                  </div>
                </div>
                <h6 class="title mb-3 px-3">withdraw to Account</h6>
                <div class="row">
                  <div class="col-12 px-0">
                    <div class="swiper-container cardswiper">
                      <div class="swiper-wrapper">
                        <!-- fast add mx-2 -->
                        <?php
                        $ii = 1;
                        foreach ($add_pay_method as $data) {
                          $sub_text = $data["sub_text"]." | Account";
                          $sub_text = explode(" ",$sub_text);
                          $sub_text1 = $sub_text[0];
                          $sub_text2 = $sub_text[1];
                          $method_name = $data["name"];

                          ?>
                        <div class="mx-2 swiper-slide">
                          <div onclick="submit_toggle()" class="card" style='background-image: url("../assets/images/brands/<?php echo $data["banner"]; ?>");background-repeat: repeat-x;background-repeat:no-repeat;background-size: cover;background-position: center center !important;'>
                            <div class="card-body">
                              <div class="form-check position-absolute end-0 bottom-0 m-1">
                               <input class="form-check-input rounded-circle" name="AddMethod_value7" type="radio" id="card2" value="<?php echo $data['id'] ?>">
                                <label for="card2" class="form-check-label"></label>
                              </div>
                              <div class="row mb-3">
                                <div class="col-auto align-self-center">
                                  <img class="sm-logo_mst" src="../assets/images/brands/<?php echo $data["icon"] ?>" alt="">
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
                                  <?php
                                  if($method_name=="Binance"){
                                    $addr = $data['account_number'];
                                    $network = $data['custom'] ?? "";
                                    $text0 = "";
                                    ?>
                                    <small id="binnance_id_store" class="d-none"><?php echo "Admin Binance DetailsxxxxxxWallat Address : $addr xxxxxxNetwark : $network" ?></small>
                                    <a style="" class="Binance_897" onclick="copy_data('binnance_id_store','sclip_776')" href="javascript:void(0)"><small>Copy </small></a> | <a  data-bs-target="#Screenshoot_binance" data-bs-toggle="modal" class="Binance_890" href="javascript:void(0)">See<small></small></a><br>
                                    <small id="sclip_776"></small>
                                    <?php
                                    //=================================
                                  }elseif($method_name=="Bank"){
                                    $acc_no_ot = $data['account_number'];
                                    $bank_name = $data["sub_text"];
                                    $custom = $data['custom'] ?? "";
                                    $cus_Data = explode("|",$custom);
                                    $branch = $cus_Data[0];
                                    $routing = $cus_Data[1] ?? "";
                                    $info0o_img = $data["custom2"] ?? "";
                                   ?>
                                   <small id="bank_id_store_<?php echo $ii?>" class="d-none"><?php echo "Admin Bank DetailsxxxxxxBank Name : $bank_name xxxxxxAccount Number : $acc_no_ot xxxxxxBranch Address : $branch xxxxxxRouting Number : $routing" ?></small>
                                   <a style="" class="Binance_897" onclick="copy_data('bank_id_store_<?php echo $ii; ?>','sclip_7778_<?php echo $ii; ?>')" href="javascript:void(0)"><small>Copy </small></a> | <a
                                   onclick="set_data('<?php echo $acc_no_ot ?>','<?php echo $branch ?>','<?php echo $routing ?>','<?php echo $info0o_img ?>')" data-bs-target="#Screenshoot_bank" data-bs-toggle="modal" class="Binance_890" href="javascript:void(0)">See<small></small></a><br>
                                   <small id="sclip_7778_<?php echo $ii; ?>"></small>
                                   <?php
                                  }else{
                                    $text0 = "Admin Number";
                                    ?>
                                  <input name="Add_admin_number_bkash2" type="text"  class="form-control admin_number" id="" placeholder="" value="<?php echo $data['account_number'] ?>" disabled>
                                    <?php
                                  }
                                   ?>
                                  <div class="col-12 box_898">
                                    <div class="row">
                                      <div class="col justify-content-start">
                                        <h5 class="mb-0 mt-2 text-light size-12"><?php echo $data['name'] ?></h5>
                                      </div>
                                      <div class="col justify-content-start">
                                        <h5 class="mb-0 mt-2 text-light size-12"><?php echo $text0 ?></h5>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        $ii++;
                      }
                       ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button role="button" type="submit" name="add_money_submit" id="add_money_btn8" class="disabled btn btn-lg btn-default shadow-sm w-100">
              Add Balance
            </button>
          </div>
        </form>
        </div>
      </div>
      <!-- large discount block-->
      <!-- Balance adding History -->
      <!-- list of transiticetion -->
      <div class="row mb-3">
        <div class="col">
          <h6 class="title">Payment Add History</h6>
        </div>
        <div class="col-auto">
          <a target="_blank" href="../user/history_all?page=a_h_a" class="small">See More</a>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12 px-0">
          <ul class="list-group list-group-flush bg-none">
            <?php
            $is = 0;
               foreach ($paymentadd_history as $data) {
                 if($is<=9){
                 $icon = $data['icon'];
                 $method_name = $data["method_name"];
                 $Ammount = $data["Ammount"];
                 $why_cancle = $data['why_unapproved'];
                 $status = $data['Status'];
                 $Date = $data["date"];
                 $Date = date('Y-m-d', strtotime($Date));
                 $Screenshoot = $data["Screenshoot"];
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
                      <p class="text-color-theme mb-0"><?php echo $method_name ?> <a  data-bs-target="#Screenshoot_<?php echo $is ?>" data-bs-toggle="modal" style="text-light" class="btn btn-primary btn-sm">Screenshoot</a>
                        <p class="sp_p" style="    position: absolute;top:44%; background: #0000003d;padding: 3px 7px;border-radius: 7px;">
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
                           ?></p>
                      </p>

          <!-- MODEL SHOW SCREENSHOOT========= -->
              <div class="modal fade" id="Screenshoot_<?php echo $is ?>" tabindex="-1" aria-labelledby="cammodalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xmd modal-dialog-centered">
                <div class="modal-content">
                 <div class="modal-header">
                    <h6 class="modal-title text-center" id="cammodalLabel">Proof Screenshoot</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                 <!-- profile information -->
                    <div class="row mb-3">
                   <div class="col">
                     <img class="w-100 image-fluid" src="../assets/images/paymentImg/<?php echo $Screenshoot ?>" alt="">
                     <?php if($Screenshoot==""){
                       echo "<h3>Images Don't Uplode..</h3>";
                     } ?>
                   </div>
                 </div>
                  </div>
                </div>
               </div>
            <!-- profile edit -->
           <!-- MODEL SHOW SCREENSHOOT========= -->
                      <p class="text-muted size-12">Status -
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
                      <p class="mb-0"><?php echo $Ammount ?> USD</p>
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



   <!-- //=============Model SCREENSHOOT=== -->
   <div class="modal fade" id="Screenshoot_binance" tabindex="-1" aria-labelledby="cammodalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xmd modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
         <h6 class="modal-title text-center" id="cammodalLabel">Admin Binance SCREENSHOOT</h6>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body text-center">
      <!-- profile information -->
         <div class="row mb-3">
        <div class="col">
          <img class="w-100 image-fluid" src="../assets/images/screenshot_binance/binance.jpeg" alt="">
        </div>
      </div>
       </div>
     </div>
    </div>
    </div>
   <!-- //=============Model SCREENSHOOT=== -->
   <!-- //=============Model SCREENSHOOT=== -->

   <div class="modal fade" id="Screenshoot_bank" tabindex="-1" aria-labelledby="cammodalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xmd modal-dialog-centered">
     <div class="modal-content " style="">
      <div class="modal-header">
         <h6 class="modal-title text-center" id="cammodalLabel">Bank Name</h6>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body text-center">
      <!-- profile information -->
      <div class="row mb-3">
        <div class="col" >
          <img id="img_sp_info_img90" class="w-100 image-fluid" src="" alt="">
          <div class="card my-5">
            <div class="card-body p-2">
              <h3 id="account_no90" class="text-left card-title"></h3>
              <h3 id="branch_name90" class="text-left card-title"></h3>
              <h3 id="rout_90" class="text-left card-title"> </h3>
            </div>
          </div>
        </div>
      </div>
       </div>
     </div>
    </div>
    </div>
   <!-- //=============Model SCREENSHOOT=== -->

<?php
 $validate_hash = $_SESSION["VALIDE_INVESTOR_KEY_GM"];
 if($validate_hash!=""){
  $sql = mysqli_query($con,"SELECT
    * FROM `investoraccounts` WHERE validate_key_unique='$validate_hash'");
    $check = mysqli_num_rows($sql);
    if($check>0){ 
      $IDate = mysqli_fetch_assoc($sql);
      $Status = $IDate["Status"];
      $IuserId = $IDate["id"];
      $FastName = $IDate["FastName"];
      $LastName = $IDate["LastName"];
      $Email = $IDate["Email"];
      $Mobile = $IDate["mobile"];
      $country = $IDate["country"];
      $City = $IDate["city"];
      $Stats = $IDate["stats"];
      $Postcode = $IDate["postcode"];
      $Password = $IDate["Password"];
      $lavel = $IDate["lavel"];
      $BonusBalance = $IDate["BonusBalance"]; //mainwallat
      $MainBalance = $IDate["BonusBalance"];//pakage buy wallat
      $ProfilePic = empty($IDate["ProfilePic"]) ? "userexample.png" : $IDate["ProfilePic"];
      $docs_one = $IDate["docs_one"];
      $docs_tow = $IDate["docs_tow"];
      $RaferId  = $IDate["RaferId"];
      $My_RaferId  = $IDate["My_RaferId"];
      $Date = $IDate["Date"];
      $full_name_is = $FastName." ".$LastName;
      // all function=======
      $add_pay_method = add_balance_payment_method();
      $withdrow_pay_method = withdrow_balance_payment_method();
      $withdrow_history = withdrow_history($IuserId);
      $paymentadd_history = paymentadd_history($IuserId);
      $all_plan = all_plan();
      $global_withdrow_history = global_withdrow_history();
      $my_plan_pakage = myplan_pakages($IuserId);
      $today_earning = today_earning($IuserId,$Email);
      $last7days = last7day_earning($IuserId);
      $last30days = last30day_earning($IuserId);
      $pkgLiveOld = live_old_pakage($IuserId);
      $AccTracker = activity_tracker($Email);
      $inNotification = investor_notification($Email);
      $INS_support_H = ins_support_history($Email);
      $infoLink = infoLinks();
      $rafer_user = ins_refar_user($My_RaferId);
      $bonus_history = InsBonusHistory($IuserId);
      $investor_verify_data = Investor_Docs_file($IuserId);
      $total_withdrow =  total_withdrow_amt($Email);
      $invest_amt_total = total_invest($Email);
      $hold_pakage = hold_pakages($Email);
      $Badge_all = Badges_data();
      $Tutorial = tutorial_all();
      $trams_condition = trams_and_condition();
      $bank_list = bank_list();
      // all function=======
    }else{
     header("location:../create/signin");
    }
 }else{
     header("location:../create/signin");
 }

 // Set badg lavel Logic===
function Badge_set(){
  global $con;
  global $Email;
  $sql = mysqli_query($con,"SELECT SUM(allpakages.Price) as Invest_total FROM `investorplanpakages`
  INNER JOIN allpakages ON
  investorplanpakages.PakageId = allpakages.id
  WHERE investorplanpakages.investorEmail = '$Email'");
  $fetch = mysqli_fetch_assoc($sql);
  $Invest_total = $fetch["Invest_total"];
  $badge = Badges_data();
  foreach ($badge as $data) {
    $minimum_invest = $data["minimum_invest"];
    if($Invest_total>$minimum_invest){
      $badgeName = $data["name"];
    }
  }
  return $badgeName;
}
// Set badg lavel Logic====

 //==================================================
 //========DOCS SUBMIT BTN===============
 //==================================================
 if(isset($_POST["Docs_submit_btn"])){
   $docs_type = $_POST["docs_type"];
   $postcode = $_POST["postcode"];
   $docs_file = $_FILES["docs_file"];
   if($docs_file['type']=='image/jpeg' OR $docs_file['type']=='image/png'){
      $type = "img";
   }elseif($docs_file['type']=='application/pdf'){
      $type = "file";
   }else{
    header("location:index?notification=warning&title=File Format Invalid&msg=Your File Format Not support in our system. Please Uplode jpg/png or Pdf");
    die();
   }
   $docs_file_name=uplode_image($docs_file,$type,"Idocs",'in');
   $legal_name = $_POST["legal_name"];
   $in_age = $_POST["in_age"];
   $addr_country = $_POST["addr_country"];
   $addr_city = $_POST["addr_city"];
   $addr_statsOther = $_POST["addr_statsOther"];

   $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `docs_one`='',
    `docs_tow`='$docs_file_name',`Status` = 'Unseen',
    `Date`='$date' WHERE Email='$Email' And validate_key_unique='$validate_hash'");
    $data = array(
     "docs_type"=>$docs_type,
     "docs_file"=>$docs_file_name,
     "legal_name"=>$legal_name,
     "in_age"=>$in_age,
     "addr_country"=>$addr_country,
     "addr_city"=>$addr_city,
     "addr_statsOther"=>$addr_statsOther,
   );
    $sql_docs = mysqli_query($con,"INSERT INTO `investordocs`( `Ins_id`, `Legal_name`, `country`, `city`, `stats`,`postcode`, `age`, `docs_type`, `docs_file_1`, `docs_file_2`, `date`) VALUES (
      '$IuserId',
      '$legal_name',
      '$addr_country',
      '$addr_city',
      '$addr_statsOther',
      '$postcode',
      '$in_age',
      '$docs_type',
      '$docs_file_name',
      '0',
      '$date'
    )");
    if($sql==true){
      // Activity======
      $ActivityName = "docs_submit_varify";
      $AcMsg = "Document Submit Success";
      set_in_activity($Email,$ActivityName,$AcMsg,"user");
      //=Activity========
      header("location:index?notification=success&title=Thank You&msg=Your Docs Check Our Admin and Response with 12 Hour.");
    }
 }


// ADD AMOUNT============
if(isset($_POST["add_money_submit"])){
  $amount = $_POST["Add_Amount7"];
  if($amount>=$AddAmountLimit){
    $screenshoot = $_FILES["Add_Screenshoot7"];
    $screenshoot_name = $_FILES["Add_Screenshoot7"]["name"];
    if($screenshoot_name!=""){
      if($screenshoot['type']=='image/jpeg' OR $screenshoot['type']=='image/png'){
        $screenshoot=uplode_image($screenshoot,"img","",'m_a_s');
      }else{
        header("location:wallat?notification=warning&title=File Format Invalid&msg=Your File Format Not support in our system. Please Uplode jpg/png");
        die();
      }
    }else{
      $screenshoot = "";
    }
    $ty_admin_n = $_POST["Add_admin_number"];
    $method_id = $_POST["AddMethod_value7"];
    $Status = "unseen";
    $sql = mysqli_query($con,"INSERT INTO `paymentadd`(`UserId`,`Screenshoot`, `email`, `Method_id`, `Status`, `why_unapproved`, `Ammount`, `date`) VALUES (
      '$IuserId',
      '$screenshoot',
      '$Email',
      '$method_id',
      '$Status',
      '0',
      '$amount',
      '$date'
    )");

    if($sql==true){
      // Activity======
      $ActivityName = "add_payment_request";
      $AcMsg = "Add payment Request Submit";
      set_in_activity($Email,$ActivityName,$AcMsg,"user");
      //=Activity========
      header("location:wallat?notification=success&title=Submit Success&msg=Your Request successfully Accept. Admin maiximum Response time $response_time Hour. Thank You");
    }else{
      echo "database Error";
    }
  }else{
    header("location:wallat?notification=warning&title=Less Money&msg=Minimum Payment Add Limit $AddAmountLimit USD");
  }
}
// WITHDROW AMOUNT============
// WITHDROW AMOUNT============
// WITHDROW AMOUNT============


if(isset($_POST["money_withdrow_submit"])){
 $wid_amount = $_POST["wid_amount"];
 $wid_account_number = $_POST["wid_account_number"];
 $withdrow_method_id = $_POST["withdrow_method_id"];
 $method_name_un = $_POST["method_name_un6767"];
   if($wid_amount>=$WithdrowLimit){
     if($BonusBalance>=$wid_amount){
       $B_w_done = add_withdrow_investor($Email,$wid_amount);
       if($B_w_done=="done"){
         // amount calculate fee===
         $wid_fee = $wid_amount/100;
         $wid_fee = $wid_fee*$withdrowFee;
         $wid_amount = $wid_amount-$wid_fee;
         $sql = mysqli_query($con,"INSERT INTO `paymentwithdrow`(`UserId`, `AccountNo`, `Method`,`amout_type`, `email`, `Status`, `why_cancle`, `Ammount`, `Date`)
         VALUES (
           '$IuserId',
           '$wid_account_number',
           '$withdrow_method_id',
           'Profit',
           '$Email',
           'unseen',
           '0',
           '$wid_amount',
           '$date'
         )");
         $wid_insert_id = mysqli_insert_id($con);
         // amount calculate fee===
         if($withdrow_method_id==3){
           $binance_wallat = $_POST["binnance_wallat_addr"];
           $binnance_Network = $_POST["binnance_Network"];
           $sql_bin = mysqli_query($con,"INSERT INTO `method_other_all`(`widrow_id`, `method_id`, `binnance_Network`, `wallat_address`) VALUES ('$wid_insert_id','$withdrow_method_id','$binnance_Network','$binance_wallat')");
         }
         if($method_name_un=="Bank"){
           $bank_name = $_POST["bank_dropdown_99"];
           $binance_wallat = $_POST["binnance_wallat_addr"];
           $binnance_Network = $_POST["binnance_Network"];
           $sql = mysqli_query($con,"INSERT INTO `ins_bank_withdrow_data`(`withdrow_id`, `method_id`, `bank_name`, `account_no`, `branch_name`, `routing_no`, `date`) VALUES (
             '$wid_insert_id',
             '$withdrow_method_id',
             '$bank_name',
             '$wid_account_number',
             '$binance_wallat',
             '$binnance_Network',
             '$date'
           )");
         }
         if($sql==true){
           // Activity======
           $ActivityName = "balance_withdrow_request";
           $AcMsg = $AmountSeletOpt." Withdrow Request Submit";
           set_in_activity($Email,$ActivityName,$AcMsg,"user");
           //=Activity========
           header("location:wallat?notification=success&title=Congratulation $FastName &msg=Your Withdrow Balance Request Accept.Our Admin Response Soon.Maximum Admin Response Time $response_time Hour");
         }else{
           header("location:wallat?notification=warning&title=database Error&msg=We fixed It soon...");
         }
       }else{
         echo "error_amount_function";
       }
     }else{
        header("location:wallat?notification=warning&title=Less Money&msg=Don't Have Enough Money In Your Wallat.Your Wallat have only $BonusBalance USD");
     }
   }else{
       header("location:wallat?notification=warning&title=Limit Error!&msg=Minimum withdrow limit 500.");
   }
}
//=======================================Dammy--====
// elseif($AmountSeletOpt=="Deposit Balance"){
//  if($MainBalance>=$wid_amount){
//    if($wid_amount>=$WithdrowLimit){
//     // calculate main balance====
//     $amount_Cut = $wid_amount;
//     $wid_amount_X = $wid_amount/100;
//     $wid_a_X_give = $wid_amount_X*$mainXCutSetAdmin;
//     $paymentX = withdrow_mainBalance_investor($Email,$amount_Cut);
//     if($paymentX=="done"){
//       $sql = mysqli_query($con,"INSERT INTO `paymentwithdrow`(`UserId`, `AccountNo`, `Method`,`amout_type`, `email`, `Status`, `why_cancle`, `Ammount`, `Date`)
//       VALUES (
//         '$IuserId',
//         '$wid_account_number',
//         '$withdrow_method_id',
//         'Deposit',
//         '$Email',
//         'unseen',
//         '0',
//         '$wid_a_X_give',
//         '$date'
//       )");
//       $wid_insert_id = mysqli_insert_id($con);
//       // amount calculate fee===
//       if($withdrow_method_id==3){
//         $date = date("Y-m-d h:i:s");
//         $binance_wallat = $_POST["binnance_wallat_addr"];
//         $binnance_Network = $_POST["binnance_Network"];
//         $sql_bin = mysqli_query($con,"INSERT INTO `method_other_all`(`widrow_id`, `method_id`, `binnance_Network`, `wallat_address`) VALUES ('$wid_insert_id','$withdrow_method_id','$binnance_Network','$binance_wallat')");
//       }
//       if($sql==true){
//         // Activity======
//         $ActivityName = "balance_withdrow_request";
//         $AcMsg = $AmountSeletOpt." Withdrow Request Submit";
//         set_in_activity($Email,$ActivityName,$AcMsg,"user");
//         //=Activity========
//          header("location:wallat?notification=success&title=Your Deposit Balance Request Accept!&msg=It will Take Time $dip_time_one to $dip_time_tow Days.");
//       }
//     }else{
//       echo "payment function Error";
//     }
//   }else{
//       header("location:wallat?notification=warning&title=Limit Error!&msg=Minimum withdrow limit 500.");
//   }
//
//   }else{
//     header("location:wallat?notification=warning&title=Your Deposit Balance Eampty!&msg=Deposit Balance Came Your account when Your Pakage Complete..");
//   }
//  }
//==================================================
//========================================
// BUY NEW PAKAGES=========
if(isset($_POST["Pakages_buy"])){
  $pakages_id = $_POST['pakages_id'];
  $data = all_pakages($pakages_id);
  $start_date = $data["start_date"];
  $date_pres = date("Y-m-d");
  $planId = $data["planId"];
  $Price = $data["Price"];
  $date_time = date("Y-m-d h:i:s");
  // use main balance only pakage buy
  if($MainBalance>=$Price){
    $cl_amt = pakage_buy_investor($Email,$Price);
    if($cl_amt=='done'){
      if($start_date>$date_pres){
        $sql_pakage_hold = mysqli_query($con,"INSERT INTO `pakage_hold_investor`(`ins_id`, `ins_email`, `pakage_id`,`plan_id`, `start_date`) VALUES (
          '$IuserId',
          '$Email',
          '$pakages_id',
          '$planId',
          '$start_date'
        )");
        if($sql_pakage_hold==true){
          // Activity======
          $ActivityName = "pakage_buy_done";
          $AcMsg = "New Pakages Start Date : $start_date";
          set_in_activity($Email,$ActivityName,$AcMsg,"user");
          //=Activity========
          header("location:all_pakages?notification=success&title=Pakage successfully Buy&msg=This Pakages Start Date : $start_date");
        }else{
          header("location:all_pakages?notification=warning&title=Error Sql&msg=Try After Some time...");
        }

      }else{
        $sql_insert = mysqli_query($con,"INSERT INTO `investorplanpakages`(`InvestorId`, `investorEmail`, `PlanId`, `PakageId`,`Date`)
         VALUES (
           '$IuserId',
           '$Email',
           '$planId',
           '$pakages_id',
           '$date_time')
           ");
        if($sql_insert==true){
          // Activity======
          $ActivityName = "pakage_buy_done";
          $AcMsg = "Buy New Pakages Done";
          set_in_activity($Email,$ActivityName,$AcMsg,"user");
          //=Activity========
          header("location:all_pakages?notification=success&title=Congratulation $FastName&msg=You successfully Buy New Investment Pakages.<a style='background:white;border-radius:4px;color:blue;font-weight:800;padding:2px 2px' href='myplan'>Click to See Your Pakages</a>");
        }
      }
    }else{
      echo "payment function error";
    }
  }else{
      header("location:all_pakages?notification=warning&title=Less Amount!&msg=Your Wallat Amount Only $MainBalance USD. So You Cannot Buy $Price USD Pakages.[Recarge Your Wallat] and Try Again.");
  }
}
//==================================================
//============================================================


//==================================
// ==RENUAL Pakages Start ========
//==================================
if(isset($_POST["Pakages_REnual"])){
  $InsPkg_id = $_POST['investorPkg_id'];
  $pakages_id = $_POST['pakages_id'];
  $data = all_pakages($pakages_id);
  $Price = $data["Price"];
  $date_time = date("Y-m-d h:i:s");
  // use main balance only pakage buy
  if($MainBalance>=$Price){
    $cl_amt = pakage_buy_investor($Email,$Price);
    if($cl_amt=='done'){
      $sql_insert = mysqli_query($con,"UPDATE `investorplanpakages` SET `status`='new',`Date`='$date_time' WHERE id='$InsPkg_id'");
      if($sql_insert==true){
        // Activity======
        $ActivityName = "pakage_Renual_done";
        $AcMsg = "Renual Old Pakages";
        set_in_activity($Email,$ActivityName,$AcMsg,"user");
        //=Activity========
        header("location:myplan?notification=success&title=Congratulation $FastName&msg=You successfully Renew Investment Pakages.");
      }
    }else{
      echo "payment function error";
    }
  }else{
      header("location:myplan?notification=warning&title=Less Amount!&msg=Your Wallat Amount Only $MainBalance USD. So You Cannot Renewal $Price USD Pakages.[Recarge Your Wallat] and Try Again.");
  }
}
//==================================
// ==RENUAL Pakages ENd ========
//==================================


//=======================================
// Balance walat to main Convarter Start
//=======================================
if(isset($_POST["btn_w_to_main_convarter"])){
  $balance = $_POST["balance_type_c"];
  $reciver_email = $_POST["Email_reciver"];
  if($BonusBalance>=$balance){
    $check = find_in_validate($reciver_email);
    if($check=="valid"){
      // calculation===
       $cal_wallat = $BonusBalance-$balance;
       $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `BonusBalance`='$cal_wallat' WHERE Email='$Email' AND id='$IuserId'");
       // reciver send money=====
        $sql_f = mysqli_query($con,"SELECT BonusBalance FROM `investoraccounts` WHERE Email = '$reciver_email'");
        $fetch_f = mysqli_fetch_assoc($sql_f);
        $BonusBalance_f = $fetch_f["BonusBalance"];
        $cal_f = $BonusBalance_f+$balance;
        $sql_up_f = mysqli_query($con,"UPDATE `investoraccounts` SET `BonusBalance`='$cal_f' WHERE Email='$reciver_email' ");
        // reciver send money=====
       // Activity======
        $ActivityName = "balance_transfer_done";
        $AcMsg = "Balance Transfar Done";
        set_in_activity($Email,$ActivityName,$AcMsg,"admin");
        // activity 2
        $ActivityName = "balance_recive_done";
        $AcMsg = $balance." Usd Recive Done";
        set_in_activity($reciver_email,$ActivityName,$AcMsg,"admin");
       //=Activity========
        header("location:wallat?notification=success&title=transfar&msg=You transfar $balance Usd Success .");
      }else{
        header("location:wallat?notification=warning&title=Filed&msg=You Tupe Email Dont find.");
      }
  }else{
    // Activity======
    $ActivityName = "balance_convart_fail";
    $AcMsg = "Balance Convart Fail";
    set_in_activity($Email,$ActivityName,$AcMsg,"user");
    //=Activity========
    header("location:wallat?notification=warning&title=Less Amount!&msg=Your Wallat Amount Only $BonusBalance USD. So You Cannot Convart $balance USD.Type $BonusBalance USD And Easy to Convart.");
  }
}
//=======================================
// Balance walat to main Convarter END
//=======================================

//=======================================
//==Investor Support Start===========
//=======================================
if(isset($_POST["support_submit"])){
  $supportSubject = $_POST["supportSubject"];
  $support_text = $_POST["support_text"];
  $support_text = mysqli_real_escape_string($con,$support_text);
  $SupportSS = $_FILES["SupportSS"];
  $SupportSS_name = $SupportSS["name"];
  $custom_text = "";
  $path = "support";
  $date = date("Y-m-d h:i:s");
  if($SupportSS_name!=""){
    $SupportSS = uplode_image($SupportSS,"img","",$path);
  }else{
    $SupportSS = "";
  }
  $sql = mysqli_query($con,"INSERT INTO `adminsupports`( `InvestorUserEmail`, `Subject`, `Help_text`, `Admin_reply`, `screenshoot_user`, `screenshoot_admin`, `Status`, `Date`)
  VALUES (
    '$Email','$supportSubject',
    '$support_text','',
    '$SupportSS','',
    'unread','$date'
  )");

  if($sql==true){
    // Activity======
    $ActivityName = "open_tickt";
    $AcMsg = "Open Support tickt done";
    set_in_activity($Email,$ActivityName,$AcMsg,"user");
    //=Activity========
    header("location:support?notification=success&title=Support Tickt Open&msg=Minimum Admin Response Time $response_time");
  }
}

//=======================================
//==Investor Support End===========
//=======================================

//=======================================
//== investor Notification===
//=======================================

$sql_fetch = mysqli_query($con,"SELECT `id`, `user_id`, `email`, `notification` FROM `investor_notification` WHERE user_id ='$IuserId' ");
$check = mysqli_num_rows($sql_fetch);
if($check>0){
  $fetch = mysqli_fetch_assoc($sql_fetch);
  $email_noti = $fetch['email'];
  $notification_noti = $fetch['notification'];
  if($email_noti=="Yes"){
    $set_email = "checked";
  }else{
      $set_email = "";
  }
  // notifi===
  if($notification_noti=="Yes"){
    $set_notification = "checked";
  }else{
      $set_notification = "";
  }
}else{
  $set_email = "";
  $set_notification = "";
}

//=======================================
//== investor Profile UPDATE===
//=======================================
if(isset($_POST["update_profile_investor"])){
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$mobile = $_POST["mobile"];
$Address = $_POST["Address"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];

// Password Check and validate===
$main_password = $_POST["main_password"];
$new_password1 = $_POST["new_password1"];
$new_password2 = $_POST["new_password2"];

// Change password=====
if($new_password1!="" AND $new_password2!="" AND $main_password!=""){
  if($new_password1!=$new_password2){
    header("location:profile?notification=warning&title=New Password Error&msg=Your New Password and confirm password Not match");
    die();
  }else{
    $Password_New = password_hash($new_password1,PASSWORD_DEFAULT);
  }
  $check = password_checker($Email,$main_password);
  if($check==1){

  }else{
    header("location:profile?notification=warning&title=Main Password Wrong&msg=You Type Wrong Main Password. So, You Don't change Password");
    die();
  }
}else{
    $Password_New = $Password;
}

// update profile pic
$p_pic = $_FILES["prifile_pic"];
$prifile_pic_name = $p_pic['name'];
if($prifile_pic_name!=""){
     $p_pic = uplode_image($p_pic,"img","","i_n_p");
  }else{
    $p_pic = $ProfilePic;
  }
// Update Profile information===========
 $sql_main_update = mysqli_query($con,"UPDATE `investoraccounts` SET   `FastName`='$fName',
   `LastName`='$lName',
   `mobile`='$mobile',
   `postcode`='$postcode',
   `stats`='$Address',
   `city`='$city',
   `Password`='$Password_New',
   `ProfilePic`='$p_pic'
    WHERE Email='$Email' and id='$IuserId'");
  if($sql_main_update==true){
    // Activity======
    $ActivityName = "profile_update";
    $AcMsg = "Update Investor information Done";
    set_in_activity($Email,$ActivityName,$AcMsg,"user");
    //=Activity========
    header("location:profile?notification=success&title=Profile Update Done&msg=your profile Information update Done...");
  }else{
    // Activity======
    $ActivityName = "profile_update";
    $AcMsg = "Update Investor information Fail";
    set_in_activity($Email,$ActivityName,$AcMsg,"user");
    //=Activity========
  }
 }
 //========================================
 //===========BANNER LOGUIC==========
 function Banner_all($page=""){
   global $con;
   $sql = mysqli_query($con,"SELECT `id`, `banner_title`, `banner_desc`, `button_link`, `banner_image`, `show_page`, `date` FROM `banner_section` WHERE 1");
   $arr = array();
   while ($data=mysqli_fetch_assoc($sql)) {
     $show_page = $data["show_page"];
     $show = explode("|",$show_page);
     if(!empty($show[0])){
       if($page==$show[0]){
         $arr[]=$data;
       }
     }
     if(!empty($show[1])){
       if($page==$show[1]){
         $arr[]=$data;
       }
     }
     if(!empty($show[2])){
       if($page==$show[2]){
         $arr[]=$data;
       }
     }
     if(!empty($show[3])){
       if($page==$show[3]){
         $arr[]=$data;
       }
     }
     if(!empty($show[4])){
       if($page==$show[4]){
         $arr[]=$data;
       }
     }
     if(!empty($show[5])){
       if($page==$show[5]){
         $arr[]=$data;
       }
     }
     // user_deshbord|wallat_pages |rafer_pages|profile_pages|all_plan|my_pakage
   }
   return $arr;
 }
?>

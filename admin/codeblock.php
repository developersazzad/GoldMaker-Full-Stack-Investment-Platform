<?php
$date = date("Y-m-d h:i:s");
// default set====
// $_SESSION["BDT_VALUE"] = "";
//=========================================
// Set status by Investor=====
if(isset($_GET["setStatus"])){
  if($_GET["setStatus"]=="Act"){
    $id = $_GET["id"];
    $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `Status`='Active' WHERE id='$id'");
  }elseif($_GET["setStatus"]=="InAct"){
    $id = $_GET["id"];
    $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `Status`='Inactive' WHERE id='$id'");
  }elseif($_GET["setStatus"]=="Vrf"){
    $id = $_GET["id"];
    $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `Status`='Completed' WHERE id='$id'");
  }elseif($_GET["setStatus"]=="Sus"){
    $id = $_GET["id"];
    $sql = mysqli_query($con,"UPDATE `investoraccounts` SET `Status`='Suspend' WHERE id='$id'");
  }
  if($sql==true){
      header("location:investor_docs?notification=success&msg=Status Update Success&title=Update Done");
  }else{
    echo "erroe";
  }
}
//=========================================
// User suspend get request============
if(isset($_GET["suspend"])){
  $suspend_Email = $_GET['suspend'];
   $validate = find_in_validate($suspend_Email);
  if($validate=="valid"){
    $sql  = mysqli_query($con,"UPDATE `investoraccounts` SET `Status`='Suspend' WHERE `Email` = '$suspend_Email'");
    header("location:all_investor?notification=success&msg=$suspend_Email&title=Suspend Done");
  }else{
     header("location:all_investor?notification=Fail&msg=Email not Find&title=Fail");
  }
}
// Active investor====================
if(isset($_GET["active"])){
  $active_Email = $_GET['active'];
   $validate = find_in_validate($active_Email);
  if($validate=="valid"){
    $sql  = mysqli_query($con,"UPDATE `investoraccounts` SET `Status`='Active' WHERE `Email` = '$active_Email'");
    header("location:all_investor?notification=success&msg=$active_Email&title=Active Done");
  }else{
     header("location:all_investor?notification=warning&msg=Email not Find&title=Fail");
  }
}

// all investor==========================
if(isset($_REQUEST["add_investor_enter"])){
$iF_Name  = $_REQUEST["iF_Name"];
$iL_Name  = $_REQUEST["iL_Name"];
$iEmail   = $_REQUEST["iEmail"];
$iPassword   = $_REQUEST["iPassword"];
$iPassword = password_hash($iPassword,PASSWORD_DEFAULT);
$iMobile  = $_REQUEST["iMobile"];
$iAddress = $_REQUEST["iAddress"];
$iCountry = $_REQUEST["iCountry"];
$iRegion  = $_REQUEST["iRegion"];
$docs = $_FILES["iUser_Docs"];
$type = $docs["type"];
if($type=="image/png"){
  $type = "img";
}else{
  $type = "file";
 }
 // hash key gamerator===
 $rand_str = random_strings(30);
 $hashKey = md5(sha1(rand(12233445566,998877665544).$rand_str));
 // hash key gamerator===
 // my_rafer id============
 $My_raferId = "GM".rand(1111,9999);
 $My_raferId = unique_raferId($My_raferId);

 $docsName = uplode_image($docs,$type,$iF_Name,"in");
 $sql = mysqli_query($con,"INSERT INTO `investoraccounts`(`validate_key_unique`,`FastName`, `LastName`, `Email`, `country`, `Password`, `VerificationCode`, `Status`,`lavel` , `BonusBalance`, `ProfilePic`,`docs_tow`,`docs_one`, `RaferId`,`My_RaferId`, `Date`)
  VALUES
  ('$hashKey','$iF_Name','$iL_Name','$iEmail','$iCountry','$iPassword','1','Active','NewBee','0','example.png','$docsName','0','GM24','$My_raferId','$date')");
  if($sql==true){
    // account_active cirtificatelink
    $link_template =
    "https://meyuzi.stripocdn.email/content/guids/CABINET_44d418a32c25854125558046af7881a5dd10da10727d5961a031ad3ce088514d/images/md_mamun_1.png";
    // account_active cirtificatelink
    // send email by investor====
    $subject = "Account Activate GoldMaker";
    if($smtp=="Yes"){
        $smtp_send = send_mail_investor($subject,$iEmail,$link_template);
     }
    if($smtp_send=="Done"){
      header("location:index?notification=success&msg=success&title=Investor Create Success.");
    }
  }else{
    header("location:index?notification=danger&msg=Fail&title=Investor Create Fail.");
  }
}
// add money investor account======
if(isset($_REQUEST["add_money_investor_account"])){
  $investorEmail = $_REQUEST["investorEmail"];
  $ammount = $_REQUEST["ammount"];
  $stats = add_money_investor($investorEmail,$ammount);
  if($stats=="done"){
    $msg  = "Balance add success.";
    $title = "success";
    $t = $title;
    // set activity by investor==
    $ActivityName = "recive_payment";
    $AcMsg = "You Recive ".$ammount." payment";
    $actyivity=set_in_activity($investorEmail,$ActivityName,$AcMsg);
    // set activity by investor==
    if($smtp=="Yes"){
      $link_template = "https://res.cloudinary.com/dbxzpwinj/image/upload/v1677441878/Md_Mamun_2_rvwvvm.png";
      $subject = "Payment Conformation Goldmaker";
      send_mail_investor($subject,$investorEmail,$link_template);
    }
  }else{
    $msg = "email don't find in database!.";
    $title = "warning";
    $t = "danger";
  }
  header("location:index?notification=$t&msg=$title&title=$msg");
}
if(isset($_REQUEST["add_plan_new"])){
  $Plan_name = $_REQUEST["Plan_name"];
  $plan_image = $_FILES["plan_image"];
  $plan_desc = $_REQUEST["plan_desc"];
  $Id_gen = "GM_plan".rand(111111,999999);
  $planImg = uplode_image($plan_image,"img","","pl");
  $sql = mysqli_query($con,"INSERT INTO `allplans`( `PlanName`, `PlanId`,`plan_desc`, `picture`, `Date`) VALUES ('$Plan_name','$Id_gen','$plan_desc','$planImg','$date')");
  if($sql==true){
    $main_st = "success";
    $title = "Suceess";
    $msg = "Plan Create Done";
  }else{
    $main_st = "danger";
    $title = "Warning";
    $msg = "plan Create Fail";
  }
    header("location:index?notification=$main_st&msg=$title&title=$msg");
}


// create pakages ==================================
// create pakages ==================================
if(isset($_REQUEST["create_pakages"])){
  $pakages_amt_9 = $_REQUEST["pakages_amt_9"];
  $pakages_name_9 = $_REQUEST["pakages_name_9"];
  $icon_is = $_REQUEST["icon_saveon_this"];
  $pakage_Icon = "assets/images/pakageImg/icon/".$icon_is;

  $banner_is = $_REQUEST["banner_saveon_this"];
  $pakage_Banner = "assets/images/pakageImg/banner/".$banner_is;

  $plan_select_9 = $_REQUEST["plan_select_9"];
  $pakage_duration = $_REQUEST["pakage_duration"];
  if($pakage_duration=="7d"){
    $day_value = "7d";
  }elseif($pakage_duration=="2d"){
    $day_value = "15d";
  }elseif($pakage_duration=="30d"){
    $day_value = "30d";
  }else{
    $day_value = $pakage_duration*30;
  }
  $start_date_set = $_REQUEST["start_date_set"];
  if($start_date_set==""){
    $start_date_set = date("Y-m-d");
  }
  $daily_bonus = $_REQUEST["daily_bonus"];
  $pakages_rols = $_REQUEST["pakages_rols"];
  $icon_saveon_this = $_REQUEST["icon_saveon_this"];
  $banner_saveon_this = $_REQUEST["banner_saveon_this"];
  $sql = mysqli_query($con,"INSERT INTO `allpakages`( `planId`,`Name`, `Duration`, `Price`, `PerDayBonus`, `banner`, `icon`,`rols_desc`,`Sell_Status`,`start_date`, `date`) VALUES (
    '$plan_select_9',
    '$pakages_name_9',
    '$day_value',
    '$pakages_amt_9',
    '$daily_bonus',
    '$pakage_Banner',
    '$pakage_Icon',
    '$pakages_rols',
    'upsell',
    '$start_date_set',
    '$date'
  )");
  if($sql==true){
    $main_st = "success";
    $title = "Suceess";
    $msg = "Pakages Create Done";
    //pending email send all investor SMTP
  }else{
    $main_st = "danger";
    $title = "Warning";
    $msg = "Pakage Create Fail";
  }
  header("location:index?notification=$main_st&msg=$title&title=$msg");
}

// investor support===============
if(isset($_REQUEST["message_submit_admin"])){
  $emai_reciver = $_REQUEST["emai_reciver_by_admin"];
  $message_admin =  $_REQUEST["message_admin"];
  if($message_admin!=""){
    if($emai_reciver!=""){
      $validate = find_in_validate($emai_reciver);
      if($validate == "valid"){
        $sql_send_msg_sp = mysqli_query($con,"INSERT INTO `adminsupports`(`InvestorUserEmail`, `Subject`, `Help_text`, `Admin_reply`,`screenshoot_user`,`screenshoot_admin`, `Status`, `Date`) VALUES (
         '$emai_reciver',
         'Admin Send',
         '',
         '$message_admin',
         '0',
         '0',
         'admin',
         '$date'
       )");
       // send SMTP===
       // Set Activity ===
       $ActivityName = 'Recive_admin_sp_notice';
       $AcMsg = 'Recive Important Notice only for You';
       $actyivity=set_in_activity($emai_reciver,$ActivityName,$AcMsg);
     }else{
       header("location:investor_support?notification=danger&msg=Error&title=Email Not Find");
       die();
     }
   }else{
     $stats = 'all_user';
     $sql_send_msg_all = mysqli_query($con,"INSERT INTO `adminsupports`(`InvestorUserEmail`, `Subject`, `Help_text`, `Admin_reply`,`screenshoot_user` ,`screenshoot_admin`, `Status`, `Date`) VALUES (
       'GM_all@user',
       'Admin Send',
       '',
       '$message_admin',
       '0',
       '0',
       '$stats',
       '$date'
     )");
     // send SMTP===
     // Set Activity ===
     $ActivityName = 'Recive_admin_notice';
     $AcMsg = 'Recive Admin Important Notice';
     $actyivity=set_in_activity('GM_all@user',$ActivityName,$AcMsg);
    }
  }
  // when sql true
  if($sql_send_msg_all==true){
    $main_st = "success";
    $title = "send success";
    $msg   = "Send Notice All User Succes";
    //pending email send all investor SMTP
  }elseif($sql_send_msg_sp==true){
    $main_st = "success";
    $title = "send success";
    $msg   = "Send Notice By Specific User success";
  }elseif($message_admin==""){
    $main_st = "danger";
    $title = "Message Error";
    $msg   = "Message Body Blank";
  }else{
    $main_st = "danger";
    $title = "send Fail";
    $msg   = "Notice Send fail";
  }
  header("location:investor_support?notification=$main_st&msg=$msg&title=$title");
}


// support replay by admin=================
if(isset($_REQUEST["send_support_reply"])){
  $tickt_id_sp = $_REQUEST["tickt_id98"];
  $investor_email_768 =$_REQUEST["investor_email_768"];
  $admin_tickt_reply = $_REQUEST["admin_tickt_reply"];
  $admin_screenshoot = $_FILES["admin_screenshoot"];
  $screen_shot_admin = uplode_image($admin_screenshoot,"img","","support");
  $sql = mysqli_query($con,"UPDATE `adminsupports` SET
    `Admin_reply`='$admin_tickt_reply',
    `screenshoot_admin`='$screen_shot_admin',
    `Status`='replay',
    `Date`='$date'
    WHERE id='$tickt_id_sp'");
  // when sql true
  if($sql==true){
    $main_st = "success";
    $title = "Replay Done";
    $msg = "Support tickt Close - $investor_email_768";
    //pending email send all investor SMTP
  }else{
    $main_st = "danger";
    $title = "Sending error";
    $msg = " Support tickt Fail";
  }
  // Set Activity ===
  $ActivityName = 'close_tickt';
  $AcMsg = 'Admin Response Your support tickt';
  $actyivity=set_in_activity($investor_email_768,$ActivityName,$AcMsg);
  header("location:investor_support?notification=$main_st&msg=$title&title=$msg");
}
 if(isset($_POST["send_message_investor_9"])){
   $email = $_POST["email_store_9"];
   $message_admin = $_POST["messages_box"];
   $stats = 'admin';
   $sql = mysqli_query($con,"INSERT INTO `adminsupports`(`InvestorUserEmail`, `Subject`, `Help_text`, `Admin_reply`,`screenshoot_user` ,`screenshoot_admin`, `Status`, `Date`) VALUES (
     '$email',
     'Admin Send',
     '',
     '$message_admin',
     '0',
     '0',
     '$stats',
     '$date'
   )");
   if($sql == true){
     $ActivityName = "Recive_admin_sp_notice";
     $AcMsg = 'Admin Send Message for You';
     $actyivity=set_in_activity($email,$ActivityName,$AcMsg);
     header("location:all_investor?notification=success&msg=message Send Success&title=Send Success");
   }
 }

 // update plan data=============
if(isset($_POST["plan_update8"])){
  $planName  = $_POST["planName8"];
  $planId99 = $_POST["planId99"];
  $planImg = $_FILES["planImg8"];
  if($planImg['name']!=""){
      $planImg = uplode_image($planImg,"img","Plan","pl");
  }else{
    $planImg = $_POST['planImg98'];
  }
  $sql_update = mysqli_query($con,"UPDATE `allplans` SET    `PlanName`='$planName',
  `picture`='$planImg',
  `Date`='$date'
  WHERE PlanId='$planId99'");
  if($sql_update==true){
   header("location:all_plan?notification=success&msg=Plan Update&title=Success");
  }
}
// pakages edit admin=================
if(isset($_POST["pakages_update90"])){
$pakages_id909 = $_POST["pakages_id909"];
$set_new_start_date = $_POST["set_new_start_date"];
$PakagePlan90 = $_POST["PakagePlan90"];
$pakagesName90 = $_POST["pakagesName90"];
$pakagesAmount90 = $_POST["pakagesAmount90"];
$pakagesDailyBonus90 = $_POST["pakagesDailyBonus90"];
$PakageDuration90 = $_POST["PakageDuration90"];
if($PakageDuration90==""){
  $query = " ";
}else{
  if($PakageDuration90=="7d"){
    $pakages_duration = "7d" ;
  }elseif($PakageDuration90=="15d"){
    $pakages_duration = "15d";
  }elseif($PakageDuration90=="30d"){
    $pakages_duration = "30d";
  }else{
     $pakages_duration = $PakageDuration90*30;
  }
 $query = "Duration='$pakages_duration',";
}
$sql = mysqli_query($con,"UPDATE `allpakages` SET `planId`='$PakagePlan90',`Name`='$pakagesName90',$query `Price`='$pakagesAmount90',`PerDayBonus`='$pakagesDailyBonus90',`start_date`='$set_new_start_date',`date`='$date' WHERE id='$pakages_id909'");
if($sql == true){
  header("location:all_pakage?notification=success&msg=pakage Update&title=Success");
}else{
  header("location:all_pakage?notification=danger&msg=pakage Update Fail&title=Fail");
 }
}


// withdrow request ManageMent================
// withdrow request ManageMent================
$subject_email_withdrow = "Your Withdrow Status Update login and check";
$link_template = "https://res.cloudinary.com/dbxzpwinj/image/upload/v1677661666/Md_Mamun_5_kdbwp5.png";
if(isset($_POST["proccing_w"])){
  $withdrow_id = $_POST['withdrow_Btn_storage'];
  $email = $_POST["withdrow_email_900"];
  $sql = mysqli_query($con,"UPDATE `paymentwithdrow` SET `Status`='proccing',why_cancle='',`Date`='$date' WHERE id='$withdrow_id'");
  $AcMsg = "Withdrow Request Proccing";
  $acc = set_in_activity($email,"pament_withdrow_notice",$AcMsg);
  if($acc==1){
      // smtp send payment stats==============
    if($smtp=="Yes"){
      $smtp_send = send_mail_investor_2($subject_email_withdrow,$email,$link_template);
    }
      // smtp send payment stats================
      header("location:withdrow_payments.php?notification=success&msg=Withdrow Stats update&title=success");
  }else{
      header("location:withdrow_payments.php?notification=danger&msg=Withdrow Stats Error&title=Error");
  }

}

// withdrow cancle=====
if(isset($_POST["cancle_submit_990"])){
  $withdrow_id = $_POST['withdrow_Btn_storage'];
  $cancle_query = $_POST['why_cancle_w'];
  $email = $_POST["withdrow_email_900"];
  $sql = mysqli_query($con,"UPDATE `paymentwithdrow` SET `Status`='cancle',why_cancle='$cancle_query',`Date`='$date' WHERE id='$withdrow_id'");
  $AcMsg = "Withdrow Request Cancle";
  $acc=set_in_activity($email,'pament_withdrow_notice',$AcMsg);
  if($acc==1){
      // smtp send payment stats==============
    if($smtp=="Yes"){
      $smtp_send = send_mail_investor($subject_email_withdrow,$email,$link_template);
    }
      // smtp send payment stats================
      header("location:withdrow_payments.php?notification=success&msg=Withdrow Stats update&title=success");
  }else{
      header("location:withdrow_payments.php?notification=danger&msg=Withdrow Stats Error&title=Error");
  }

}
// success=======
if(isset($_POST["success_w"])){
  $withdrow_id = $_POST['withdrow_Btn_storage'];
  $email = $_POST["withdrow_email_900"];
  $sql = mysqli_query($con,"UPDATE `paymentwithdrow` SET `Status`='success',why_cancle='',`Date`='$date' WHERE id='$withdrow_id'");
  $AcMsg = "Withdrow Request Success";
  $acc=set_in_activity($email,'pament_withdrow_notice',$AcMsg);
  if($acc==1){
      // smtp send payment stats==============
       if($smtp=="Yes"){
          $smtp_send = send_mail_investor($subject_email_withdrow,$email,$link_template);
       }
      // smtp send payment stats================
      header("location:withdrow_payments.php?notification=success&msg=Withdrow Stats update&title=success");
  }else{
      header("location:withdrow_payments.php?notification=danger&msg=Withdrow Stats Error&title=Error");
  }
}


//=============================================================
//=============================================================
//===============Payment add block===========================
//=============================================================

$subject_email_withdrow = "Your Payment Add Proccing.login and check";
$link_template = "https://res.cloudinary.com/dbxzpwinj/image/upload/v1677661666/Md_Mamun_5_kdbwp5.png";

if(isset($_POST["proccing_A"])){
  $paymentadd_id = $_POST['add_Btn_storage'];
  $email = $_POST["add_email_1000"];
  $sql = mysqli_query($con,"UPDATE `paymentadd` SET `Status`='proccing',`why_unapproved`='',`date`='$date' WHERE id='$paymentadd_id'");
  $AcMsg = "Payment Add Request Proccing";
  $acc = set_in_activity($email,"payment_update_notice",$AcMsg);
  if($acc==1){
      // smtp send payment stats==============
    if($smtp=="Yes"){
      $smtp_send = send_mail_investor_2($subject_email_withdrow,$email,$link_template);
    }
      // smtp send payment stats================
      header("location:add_money_request.php?notification=success&msg=Add Money Stats update&title=success");
  }else{
      header("location:add_money_request.php?notification=danger&msg=Add Money Stats Error&title=Error");
  }

}

// withdrow cancle=====
if(isset($_POST["unapproved_submit_1000"])){
  $paymentadd_id = $_POST['add_Btn_storage'];
  $cancle_query = $_POST['why_cancle_A'];
  $email = $_POST["add_email_1000"];
  $sql = mysqli_query($con,"UPDATE `paymentadd` SET `Status`='unapproved',`why_unapproved`='$cancle_query',`date`='$date' WHERE id='$paymentadd_id'");
  $AcMsg = "Add Money Request Unapproved.";
  $acc=set_in_activity($email,'payment_update_notice',$AcMsg);
  if($acc==1){
      // smtp send payment stats==============
    if($smtp=="Yes"){
      $smtp_send = send_mail_investor($subject_email_withdrow,$email,$link_template);
    }
      // smtp send payment stats================
      header("location:add_money_request.php?notification=success&msg=Add Money Stats update&title=success");
  }else{
      header("location:add_money_request.php?notification=danger&msg=Add Money Stats Error&title=Error");
  }

}
// success=======
if(isset($_POST["success_A"])){
  $paymentadd_id = $_POST['add_Btn_storage'];
  $email = $_POST["add_email_1000"];
  $amount = $_POST["amount_A_100"];
  $sql = mysqli_query($con,"UPDATE `paymentadd` SET `Status`='success',`why_unapproved`='',`date`='$date' WHERE id='$paymentadd_id'");
  $AcMsg = "Payment Add Your Account Success";
  $acc=set_in_activity($email,'payment_update_notice',$AcMsg);
  if($acc==1){
      // calculate add payment by investor account======
      $add_ammount = add_money_investor($email,$amount);
      // smtp send payment stats==============
      if($add_ammount=="done"){
        if($smtp=="Yes"){
           $smtp_send = send_mail_investor($subject_email_withdrow,$email,$link_template);
        }
       // smtp send payment stats================
       header("location:add_money_request.php?notification=success&msg=Add Money Stats update&title=success");
     }else{
        header("location:add_money_request.php?notification=danger&msg=Add_amt_fanc error&title=Fail");
     }

  }else{
      header("location:add_money_request.php?notification=danger&msg=Add Money Stats Error&title=Error");
  }
}
//=============================================================
//=============investor Docs Block with search========
if(isset($_POST["submit_docs_data1"]) OR isset($_POST["submit_docs_data2"])){
   $docs_date = $_POST["docs_s_date"];
   $docs_email = $_POST["docs_email_search"];
   $query = "SELECT `id`, `Ins_id`, `Legal_name`, `country`, `city`, `stats`, `postcode`, `age`, `docs_type`, `docs_file_1`, `docs_file_2`, `date` FROM `investordocs` WHERE ";
   if($docs_date!="" AND $docs_email!=""){
      $id = id_to_email($docs_email);
      if($id==0){
        header("location:investor_docs?notification=danger&title=Error&msg=Email Don't Find");
      }
      $query .="DATE(date)='$docs_date' AND Ins_id='$id'";
   }else{
     if($docs_date!=""){
       $query .="DATE(date)='$docs_date' ";
     }
     if($docs_email!=""){
        $id = id_to_email($docs_email);
        if($id==0){
          header("location:investor_docs?notification=danger&title=Error&msg=Email Don't Find");
        }
        $query .="Ins_id='$id'";
     }
   }
   $sql_search = mysqli_query($con,$query);
   $row_docs99 = array();
   while($data = mysqli_fetch_assoc($sql_search)){
     $row_docs99[] = $data;
   }
   return $row_docs99;
}

// investor datan updateer====
if(isset($_POST["submit_investor_update"])){
  $go_page = $_POST["go_page"];
  $Email = $_POST["ins_email"];
  $insId = $_POST["insId"];
  $FastName = $_POST["FastName"];
  $LastName = $_POST["LastName"];
  $RaferId = $_POST["RaferId"];
  $country = $_POST["country"];
  $city = $_POST["city"];
  $stat = $_POST["stat"];
  $Mobile =  $_POST["Mobile"];
  $postcoad = $_POST["postcoad"];
  $badgh_is = $_POST["badgh_is"];
  $badgh_is = badge_idto_name($badgh_is);
  $badgh_is = $badgh_is['name'];
  $full_name = $FastName." ".$LastName;
  $date = date("Y-m-d h:i:s");
  $new_password = $_POST["new_password"];
  if($new_password!=""){
    $new_password = password_hash($new_password,PASSWORD_DEFAULT);
    $query_pass = "`Password`='$new_password',";
  }else{
    $query_pass = " ";
  }

  $sql_update = mysqli_query($con,"UPDATE `investoraccounts` SET   `FastName`='$FastName',
  `LastName`='$LastName',
  `mobile`='$Mobile',
  `postcode`='$postcoad',
  `stats`='$stat',
  `city`='$city',
  `country`='$country',
  ".$query_pass."
  `lavel`='$badgh_is',
  `RaferId`='$RaferId'
   WHERE id='$insId'");
   $update_docs = mysqli_query($con,"UPDATE `investordocs` SET `Legal_name`='$full_name',`country`='$country',`city`='$city',`stats`='$stat',`postcode`='$postcoad',`date`='$date' WHERE Ins_id='$insId'");
   if($sql_update==true AND $update_docs==true){
      // Activity======
      $ActivityName = "account_verified";
      $AcMsg = "Your Account Verification complete";
      set_in_activity($Email,$ActivityName,$AcMsg,"admin");
      //=Activity========
      header("location:$go_page?notification=success&title=update success&msg=$FastName Data update done");
   }else{
     echo "database-error";
     die();
   }
}
//=====================================
//=====TRAMs And Condition=====
//============
if(isset($_POST["submity"])){
  $trams_id = $_POST["id_s"];
  $title = $_POST["title"];
  $check_website = $_POST["check_website"];
  $main_text = $_POST["main_text"];
  $date = date("Y-m-d");
  $sql_update = mysqli_query($con,"UPDATE `tramsconditions` SET `Title`='$title',`Description`='$main_text',`Date`='$date' WHERE id='$trams_id'");
  if($sql_update==true){
    // Activity======
    $ActivityName = "update_trams";
    $AcMsg = "Update Trams And Condition.Title ".$title;
    set_in_activity("GM_all@user",$ActivityName,$AcMsg,"admin");
    //=Activity========
     header("location:trams_condition?notification=success&title=update success&msg=Trams update done");
  }
}
//=====================================
//=====Update Setting=====
//============
if(isset($_POST["update_setting_all"])){
  $smtp_o = $_POST["smtp_value"];
  $maintance = $_POST["maintance_value"];
  $wthdrowLimit = $_POST["withdrow_limit"];
  $ResponsTime = $_POST["response_time"];
  $AddAmtLimit = $_POST["add_amount_limit"];
  $bonusWithdrowFee = $_POST["bonus_withdrow_fee"];
  $RafBonus = $_POST["raf_bonus"];
  $DipoXAmt = $_POST["Dipogit_X_Amount"];
  $BonusWTime = $_POST["bonus_withdrow_time"];
  $Dipo_W_timeOne = $_POST["dipogit_withdrow_time1"];
  $Dipo_W_timeTow = $_POST["dipogit_withdrow_time2"];
  $date = Date("Y-m-d h:i:s");
  $update_setting = mysqli_query($con,"UPDATE `important_admin_setting` SET
    `stmtp`='$smtp_o',
    `maintaince_mode`='$maintance',
    `withdrow_limit`='$wthdrowLimit',
    `response_time`='$ResponsTime',
    `add_amount_limit`='$AddAmtLimit',
    `bonus_withdrow_fee`='$bonusWithdrowFee',
    `rafer_bonus`='$RafBonus',
    `dipogit_w_cut_amt`='$DipoXAmt',
    `dipogit_withdrow_time1`='$BonusWTime',
    `dipogit_withdrow_time2`='$Dipo_W_timeOne',
    `Bonus_withdrow_time`='$Dipo_W_timeTow',
    `last_update`='$date'
    WHERE 1");

   if($update_setting==true){
      header("location:index?notification=success&title=Update Setting&msg=Update Important Setting");
   }
}
//=====================================
//=====Admin Banner edit=====
//============
if(isset($_POST["banner_submit"])){
  $banner_id = $_POST["banner_id"];
  $notice_title = $_POST["notice_title"];
  $notice_text = $_POST["notice_text"];
  $button_link = $_POST["button_link"];
  $admin_banner_val = $_POST["admin_banner_val"];
  $page_show_value = $_POST["page_show_value"];
  $show = "";
  if(!empty($page_show_value[0])){
    $show_one = $page_show_value[0];
    $show .= $show_one;
  }
  if(!empty($page_show_value[1])){
    $show_tow = $page_show_value[1];
    $show .= "|".$show_tow;
  }
  if(!empty($page_show_value[2])){
    $show_three = $page_show_value[2];
    $show .= "|".$show_three;
  }
  if(!empty($page_show_value[3])){
    $show_four = $page_show_value[3];
    $show .= "|".$show_four;
  }
  if(!empty($page_show_value[4])){
    $show_five = $page_show_value[4];
    $show .= "|".$show_five;
  }
  if(!empty($page_show_value[5])){
    $show_six = $page_show_value[5];
    $show .= "|".$show_six;
  }
  if(!empty($page_show_value[6])){
    $show_saven = $page_show_value[6];
    $show .= "|".$show_saven;
  }
  $date = date("Y-m-d H:i:s");
  $sql = mysqli_query($con,"UPDATE `banner_section` SET `banner_title`='$notice_title',
  `banner_desc`='$notice_text',
  `button_link`='$button_link',
  `banner_image`='$admin_banner_val',
  `show_page`='$show',
  `date`='$date' WHERE id='$banner_id'");
  header("location:index?notification=success&title=Banner Update &msg=Update Banner Done");

}
// payment method====
if(isset($_POST["payment_method_enter"])){
  $Id_is = $_POST["Id_is"];
  $usepay  = $_POST["usePayment"];
  $usewit  = $_POST["useWithdrow"];
  $methodname  = $_POST["Method_name"];
  $accnum  = $_POST["account_number"];
  $sub_t  = $_POST["sub_text"];
  $icon  = $_POST["icon_saveon_this"];
  $banner  = $_POST["banner_saveon_this"];
  $date = date("Y-m-d h:i:s");
  $sql_update = mysqli_query($con,"UPDATE `payment_method` SET   `name`='$methodname',
  `payment_add`='$usepay',
  `payment_withdrow`='$usewit',
  `account_number`='$accnum',
  `sub_text`='$sub_t',
  `icon`='$icon',
  `banner`='$banner',
  `date`='$date' WHERE id='$Id_is'");
  if($sql_update==true){
      header("location:panel_cust?notification=success&title=Update Done &msg=Payment Method Update Done");
  }else{
    echo "error";
    die();
  }
}
// Binance=============
if(isset($_POST["update_binance"])){
  $BinWalName = $_POST["Binance_wal_addr"];
  $BinNet = $_POST["binnance_Network"];
  $screenshoot = $_FILES["binance_screenshoot"];
  $Name_screenshost = $screenshoot["name"];
  if($Name_screenshost!=""){
     $screenshoot = uplode_image($screenshoot,"img","","bin");
     $query = " ,`custom2`='$screenshoot'";
  }else{
    $query = " ";
  }
 $sql = mysqli_query($con,"UPDATE `payment_method` SET `account_number`='$BinWalName',
  `custom`='$BinNet' ".$query."WHERE name='Binance'");
 if($sql==true){
     header("location:panel_cust?notification=success&title=Binance Update &msg=Binance Update Done");
 }
}
//===========tutorial Delate======================
if(isset($_GET["delete_tutorial"])){
   $id = $_GET["delete_tutorial"];
   $sql_delete = mysqli_query($con,"DELETE FROM `tutorial_section` WHERE id='$id'");
  header("location:panel_cust?notification=warning&title=Delete Complate &msg=Delete Tutorial done");
}
// tutorial craate====
if(isset($_POST["Create_tutorial"])){
  $Image_tutorial = $_FILES["Image_tutorial"];
  $image_name = $Image_tutorial["name"];
  if($image_name!=""){
    $Image_tutorial = uplode_image($Image_tutorial,"img","","tutorial");
  }else{
    $Image_tutorial = "";
  }
  $date = date("Y-m-d h:i:s");
  $tutorial_title = $_POST["tutorial_title"];
  $tutorial_text = $_POST["tutorial_text"];
  $tutorial_video = $_POST["tutorial_video"];
  $tutorial_button_link = $_POST["tutorial_button_link"];
  $sql = mysqli_query($con,"INSERT INTO `tutorial_section`( `title`, `text`, `video`, `link`, `image`, `date`) VALUES (
    '$tutorial_title',
    '$tutorial_text',
    '$tutorial_video',
    '$tutorial_button_link',
    '$Image_tutorial',
    '$date'
  )");
  if($sql==true){
      header("location:panel_cust?notification=success&title=Create Complate &msg=Create Tutorial done");
  }else{
    echo "ERror";
    die();
  }
}
// set stockout pakages===
if(isset($_GET["stockout"])){
  $stock_id = $_GET["stockout"];
  $sql = mysqli_query($con,"UPDATE `allpakages` SET `Sell_Status`='sold_out' WHERE id='$stock_id'");
  header("location:all_pakage?notification=success&title=Update stock out &msg=Set Pakage Stock out");
}
// set stockout pakages===
if(isset($_GET["stockIn"])){
  $stock_id = $_GET["stockIn"];
  $sql = mysqli_query($con,"UPDATE `allpakages` SET `Sell_Status`='upsell' WHERE id='$stock_id'");
  header("location:all_pakage?notification=success&title=Update stock In &msg=Set Pakage Stock In");
}
// badge update====
if(isset($_POST["update_badges"])){
  $max_amt = $_POST["badge_maximum_amount"];
  $badge_id = $_POST["badge_id"];
  $Sql = mysqli_query($con,"UPDATE `lavels` SET `minimum_invest`='$max_amt',`date`='$date' WHERE id='$badge_id'");
  header("location:panel_cust?notification=success&title=Update Badge &msg=Update Badge Done");
}
if(isset($_POST["bdt_value_is"])){
 unset($_SESSION["BDT_VALUE"]);
 $bdt_value_main = $_POST["bdt_value_main"];
 $_SESSION["BDT_VALUE"] = $bdt_value_main;
 header("location:withdrow_payments");
}

if(isset($_POST["bank_list_add90"])){
  $count_iis = $_POST["count_iis"];
  $date = date("Y-m-d h:i:s");
  for ($i=0; $i < $count_iis; $i++) {
   $bank_name = $_POST["bank_list_$i"];
   $bank_id = $_POST["bank_list_id_$i"];
   // if blank to delete===
   if($bank_name==""){
     $sql_delete = mysqli_query($con,"DELETE FROM `bank_list` WHERE id='$bank_id'");
    // if blank to delete===
   }else{
     $query = "UPDATE `bank_list` SET `bank_name`='$bank_name',`date`='$date' WHERE id='$bank_id'";
     $sql = mysqli_query($con,$query);
   }
  }
  $new_bank01 = $_POST["new_bank01"];
  if($new_bank01 !=""){
      $sql_insert = mysqli_query($con,"INSERT INTO `bank_list`(`bank_name`, `date`) VALUES ('$new_bank01','$date')");
  }
  header("location:panel_cust?notification=success&title=Update Done &msg=Update Payment Method Done");
}

// admin bank payment method change=============
if(isset($_POST["submit_bank_data_999"])){
  $useWithdrow = $_POST["useWithdrow990"];
  $account_number = $_POST["account_number"];
  $bank_name887 = $_POST["bank_name887"];
  $branch_name = $_POST["branch_name"];
  $bank_m_id_is = $_POST["bank_m_id_is"];
  $routing_number = $_POST["routing_number"];
  $custom = $branch_name."|".$routing_number;
  $icon_bank = $_FILES["icon_bank"];
  $icon_name = $icon_bank["name"];
  if($icon_name!=""){
    $icon = uplode_image($icon_bank,"img","","payment_img");
    $qu_icon = " `icon`='$icon', ";
  }else{
    $qu_icon = "";
  }
  $banner_bank = $_FILES["banner_bank"];
  $banner_name = $banner_bank["name"];
  if($banner_name!=""){
   $banner = uplode_image($banner_bank,"img","","payment_img");
    $qu_baner = " `banner`='$banner', ";
  }else{
    $qu_baner = "";
  }
  $info_banner_bank = $_FILES["info_banner_bank"];
  $banner_info_name =  $info_banner_bank["name"];
  if($banner_info_name!=""){
    $info_pic = uplode_image($info_banner_bank,"img","","pay_info");
    $query1 = " `custom2`='$info_pic',";
  }else{
    $query1 = "";
  }
  echo "UPDATE `payment_method` SET
    `payment_add`='$useWithdrow',
    `account_number`='$account_number',
    `custom`='$custom',
    ".$query1."
    `custom3`='$branch_name',
    `sub_text` = '$bank_name887',
    ".$qu_icon."
    ".$qu_baner."
    `date`='$date'
    WHERE id='$bank_m_id_is'";
  $sql_update = mysqli_query($con,"UPDATE `payment_method` SET
    `payment_add`='$useWithdrow',
    `account_number`='$account_number',
    `custom`='$custom',
    ".$query1."
    `custom3`='$branch_name',
    `sub_text` = '$bank_name887',
    ".$qu_icon."
    ".$qu_baner."
    `date`='$date'
    WHERE id='$bank_m_id_is'");
    if($sql_update==true){
        header("location:panel_cust?notification=success&title=Update Bank &msg=Update Bank Data Done");
    }else{
      echo "UPDATE `payment_method` SET
        `payment_add`='$useWithdro',
        `account_number`='$account_number',
        `custom`='$custom',
        ".$query1."
        `custom3`='$branch_name',
        ".$qu_icon."
        ".$qu_baner."
        `date`='$date'
        WHERE id='$bank_m_id_is'";
    }

}
?>

<?php
// function admin===
// email to id=====
function id_to_email($email=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `id` FROM `investoraccounts` WHERE Email ='$email'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $fetch = mysqli_fetch_assoc($sql);
    $fetch = $fetch["id"];
    return $fetch;
  }else{
    return 0;
  }
}
// function admin===
// payment Function=====
function payment_method_data(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `name`, `payment_add`, `payment_withdrow`, `account_number`, `sub_text`, `icon`, `banner`, `date` FROM `payment_method` WHERE name!='Binance' AND name!='Bank'");
  $arr = array();
  while($Data = mysqli_fetch_assoc($sql)){
    $arr[] = $Data;
  }
  return $arr;
}
//======
// binance data only==
function binanceM_data(){
  global $con;
  $sql = mysqli_query($con,"SELECT payment_method.* FROM `payment_method` WHERE payment_method.name='Binance'");
  $Data = mysqli_fetch_assoc($sql);
  return $Data;
}
//===========Bank Payment Method====
function payment_method_Bank(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `payment_method` WHERE name='Bank'");
  $arr = array();
  while($Data = mysqli_fetch_assoc($sql)){
    $arr[] = $Data;
  }
  return $arr;
}
// email to id=====
function id_to_data($ins_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE id ='$ins_id'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $fetch = mysqli_fetch_assoc($sql);
    return $fetch;
  }else{
    return 0;
  }
}
// function admin trams and conditions
function trams_and_condition_admin(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `SectionName`, `Title`, `Description`, `Date` FROM `tramsconditions` WHERE 1");
  $row = array();
  while($data = mysqli_fetch_assoc($sql)){
    $row[] = $data;
  }
  return $row;
}

// calculate withdrow fee================
function calculate_withdrow_fee($WithdrowAmmount=""){
  $admin = admin_data();
  $Fee_withdrow = $admin["wallat_withdrow_fee"];
  $Fee_deposit = $admin["deposit_withdrow_fee"];
  $cal = $WithdrowAmmount/100;
  $cal_10 = $cal*$Fee_withdrow;
  $main_W_balance = $WithdrowAmmount-$cal_10;
  return $main_W_balance;
}
 $icon = array(
   '1.png',
   '2.png',
   '3.png',
   '4.png',
   '5.png',
   '6.png',
   '7.png',
   '8.png',
   '9.png',
   '10.png',
   '11.png',
   '12.png',
   '13.png',
   '14.png',
 );
$banner = array(
    '01.png',
    '02.png',
    '03.png',
    '04.png',
    '05.png',
    '06.png',
  );
  $slider_one = array(
      '01.png',
      '02.png',
      '03.png',
    );
    $slider_tow = array(
        '04.png',
        '05.png',
        '07.png',
        '08.png',
      );
    $slider_three = array(
          '08.png',
          '09.png',
          '10.png',
      );
      $home_tow = array(
            '01.png',
            '01.png',
        );
      $review_slider_one = array(
            '01.png',
            '02.png',
            '03.png',
            '04.png',
            '05.png',
            '06.png',
            '07.png',
        );
        $review_slider_tow = array(
              '08.png',
              '09.png',
              '10.png',
              '11.png',
              '12.png',
              '13.png',
              '14.png',
          );

// admin edit banner images===
$admin_banner_notice = array(
      'active_1.png',
      'danger_1.png',
      'Grow_Notification.png',
      'New_messages.png',
      'Notification_2.png',
      'rafer_bonus_2.png',
      'rafer_bonus.png',
      'support_1.png',
      'Wallat_2.png',
      'support_2.png',
  );

// Main Function========================

// payment method icon images===
$payment_method_icon = array(
      'bkash-sm.png',
      'nagod-sm.png',
  );
// Main Function========================
// payment method icon images===
$payment_method_banner = array(
      'Bkash.png',
      'nagod.png',
      'nagod-sm.png',
      'call_fin.png',
  );
  // admin edit banner images===
  $badge_all = array(
    "user/assets/img/badges/New.png",
    "user/assets/img/badges/Bronges.png",
    "user/assets/img/badges/silvar.png",
    "user/assets/img/badges/gold.png",
    "user/assets/img/badges/diamond.png",
    "user/assets/img/badges/platinum.png",
    "user/assets/img/badges/Pro.png",
    "user/assets/img/badges/Master_Invastor.png",
    );
function go_to($val=""){
  header("location:../".$val);
}
function go_js($val=""){
  ?>
  <script type="text/javascript">
    window.location.href = "<?php echo $val ?>";
  </script>
  <?php
}
function console_log($data=""){
?>
<script>
   console.log("<?php echo $data ?>");
</script>
<?php
}
function admin_data(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `mainadmin` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  return $fetch;
}
// uplode images glovbal function===
function uplode_image($image="",$type="",$custom_text="",$path=""){
  $image_tmp_name=$image["tmp_name"];
  if($image_tmp_name!=""){
    if($type=="img"){
      if($path=="in"){
        $custom_text_all = $custom_text;
        $path = "../assets/images/iNvestorDocsFile/";
      }elseif($path=="pl"){
          $custom_text_all = "Plan";
          $path = "../assets/images/planImg/";
      }elseif($path=="pk"){
          $custom_text_all = "Pakage";
         $path = "../assets/images/pakageImg/";
      }elseif($path=="support"){
          $custom_text_all = "support";
         $path = "../assets/images/SupportImg/";
      }elseif($path=="m_a_s"){
          $custom_text_all = "money_add";
         $path = "../assets/images/paymentImg/";
      }elseif($path=="m_w_s"){
          $custom_text_all = "money_withdrow";
          $path = "../assets/images/paymentImg/";
      }elseif($path=="i_n_p"){
          $custom_text_all = "INS_pro";
          $path = "../assets/images/InvestorProfilePic/";
      }elseif($path=="bin"){
          $custom_text_all = "bin_admin";
          $path = "../assets/images/screenshot_binance/";
      }elseif($path=="tutorial"){
          $custom_text_all = "tutorial";
          $path = "../assets/images/tutorial_images/";
      }elseif($path=="payment_img"){
          $custom_text_all = "pay";
          $path = "../assets/images/brands/";
      }elseif($path=="pay_info"){ 
          $custom_text_all = "payInfo";
          $path = "../assets/images/screenshoot_bank/";
      }
      $new_name = "GM_".$custom_text_all."_".sha1(md5(rand("11111","99999"))).".png";
      move_uploaded_file($image_tmp_name,$path.$new_name);
      return $new_name;
    }elseif($type=="file"){
      $image_name="GM_".sha1(md5(rand("11111","99999"))).".pdf";
      $path = "../assets/images/iNvestorDocs/";
      move_uploaded_file($image_tmp_name,$path.$image_name);
      return $image_name;
    }
  }
}

// ADD Money Investor account =================
function add_money_investor($email="",$amount=""){
  global $con;
  global $admin_amount;
  $sql_call = mysqli_query($con," SELECT * FROM `investoraccounts` WHERE Email='$email'");
  $check = mysqli_num_rows($sql_call);
  if($check>0){
    // cut balance admin====
    $cal_admin = $admin_amount-$amount;
    $sql_admin  = mysqli_query($con,"UPDATE `mainadmin` SET `amount`='$cal_admin' WHERE 1");
   // add money by investor===
    $investor_balance = mysqli_fetch_assoc($sql_call);
    $investor_balance = $investor_balance["BonusBalance"];
    $cal_in_add = $investor_balance+$amount;
    $sql_add_mony = mysqli_query($con,"UPDATE `investoraccounts` SET `BonusBalance`='$cal_in_add' WHERE Email='$email'");
    $data = "done";
    return $data;
  }else{
    $data = "fail";
    return $data;
  }
}
// ADD Money Investor account =================


 // need change====
// Normal Withdrow by bonus =================
function add_withdrow_investor($email="",$amount=""){
  global $con;
  global $admin_amount;
  $sql_call = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE Email='$email'");
  $check = mysqli_num_rows($sql_call);
  if($check>0){
    // cut balance admin====
    $cal_admin = $admin_amount+$amount;
    $sql_admin  = mysqli_query($con,"UPDATE `mainadmin` SET `amount`='$cal_admin' WHERE 1");
   // add money by investor===
    $investor_balance = mysqli_fetch_assoc($sql_call);
    $investor_balance = $investor_balance["BonusBalance"];
    $cal_in_add = $investor_balance-$amount;
    $sql_add_mony = mysqli_query($con,"UPDATE `investoraccounts` SET `BonusBalance`='$cal_in_add' WHERE Email='$email'");
    $data = "done";
    return $data;
  }else{
    $data = "dont_Find";
    return $data;
  }
}
//====================================================
//=====Main Balance Withdrow Stat===
//===================================================
// function withdrow_mainBalance_investor($email="",$amount=""){
//   global $con;
//   global $admin_amount;
//   $sql_call = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE Email='$email'");
//   $check = mysqli_num_rows($sql_call);
//   if($check>0){
//     // cut balance admin====
//     $cal_admin = $admin_amount+$amount;
//     $sql_admin  = mysqli_query($con,"UPDATE `mainadmin` SET `amount`='$cal_admin' WHERE 1");
//    // add money by investor===
//     $investor_balance = mysqli_fetch_assoc($sql_call);
//     $investor_balance = $investor_balance["MainBalance"];
//     $cal_in_add = $investor_balance-$amount;
//     $sql_add_mony = mysqli_query($con,"UPDATE `investoraccounts` SET `MainBalance`='$cal_in_add' WHERE Email='$email'");
//     $data = "done";
//     return $data;
//   }else{
//     $data = "dont_Find";
//     return $data;
//   }
// }
//====================================================
//=====Main Balance Withdrow Stat===
//===================================================


// when buy pakage by investor use main balance==
function pakage_buy_investor($email="",$amount=""){
  global $con;
  global $admin_amount;
  $sql_call = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE Email='$email'");
  $check = mysqli_num_rows($sql_call);
  if($check>0){
    // cut balance admin====
    $cal_admin = $admin_amount+$amount;
    $sql_admin  = mysqli_query($con,"UPDATE `mainadmin` SET `amount`='$cal_admin' WHERE 1");
   // add money by investor===
    $investor_balance = mysqli_fetch_assoc($sql_call);
    $investor_balance = $investor_balance["BonusBalance"];
    $cal_in_add = $investor_balance-$amount;
    $sql_add_mony = mysqli_query($con,"UPDATE `investoraccounts` SET `BonusBalance`='$cal_in_add' WHERE Email='$email'");
    $data = "done";
    return $data;
  }else{
    $data = "dont_Find";
    return $data;
  }
}

// all plan goldmaker==========================
function all_plan(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `allplans` WHERE 1");
  $arr = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    $arr[]=$data;
  }
  return $arr;
}
// all pakages ===================
function all_pakages($id=""){
  global $con;
  if($id!=""){
    $sql = mysqli_query($con,"SELECT * FROM `allpakages` WHERE id='$id'");
    $data = mysqli_fetch_assoc($sql);
    return $data;
  }else{
   $sql = mysqli_query($con,"SELECT allpakages.*,allpakages.name as pakageName,allplans.planName FROM allpakages INNER JOIN allplans ON allpakages.planId=allplans.PlanId WHERE 1");
   $arr = array();
   while ($data = mysqli_fetch_assoc($sql)) {
     $arr[]=$data;
   }
   return $arr;
  }
}

// validate user / valide or not===============
function find_in_validate($email=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE Email = '$email'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    return "valid";
  }else{
    return "invalid";
  }
}
// set investor Activity====
// acctivity name list===
// Recive_admin_notice = all
// Recive_admin_sp_notice = parsonal;
// Recive_admin_reply
// pakages_update
// payment_update_notice
// pament_withdrow_notice
// account_active
//account_verified
// account_suspand
// account_inactive
// account_login
// account_logout
// buy_pakages
// recive_payment
// open_tickt
// close_tickt
// close_tickt
// dayly_bonus_accept
//Rafer_bonus_give
//new===
//docs_submit_varify
//add_payment_request
//balance_withdrow_request
//pakage_buy_done
//balance_convart_done
//balance_convart_fail
//profile_update_done
function set_in_activity($email="",$ActivityName="",$AcMsg="",$maker=""){
  global $con;
  $time = time();
  $date = date("Y-m-d h:i:s");
  // 'user','admin'
  if($maker==""){
    $maker = "admin";
  }
  $sql = mysqli_query($con,"INSERT INTO `allactivity`(`email`,`ActivityName`, `ActivityText`,`ac_time`,`maker`, `Date`) VALUES (
    '$email',
    '$ActivityName',
    '$AcMsg',
    '$time',
    '$maker',
    '$date'
  )");
  if($sql==true){
    return 1;
  }else{
    return 0;
  }
}
 // investor support list====
 function investorSupportList(){
   global $con;
   $sql = mysqli_query($con,"SELECT adminsupports.*,investoraccounts.FastName as investorName,investoraccounts.Email as investorEmail, investoraccounts.ProfilePic as investor_profilePic FROM `adminsupports` INNER JOIN investoraccounts WHERE adminsupports.InvestorUserEmail !='GM_all@user' AND adminsupports.Status='unread' and investoraccounts.Email = adminsupports.InvestorUserEmail");
   $row = array();
   while ($data = mysqli_fetch_assoc($sql)) {
     $row[] = $data;
   }
   return $row;
 }

// All Investor table data=======================
function All_Investor_Data(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE 1");
  $row = array();
  while ($data=mysqli_fetch_assoc($sql)) {
    $row[]=$data;
  }
  return $row;
}

// all withdrow request ==================>
function all_withdrowReq(){
  global $con;
  $sql = mysqli_query($con,"SELECT paymentwithdrow.*,paymentwithdrow.id as withdrow_id,investoraccounts.FastName as InvestorName,investoraccounts.Email,payment_method.name as method_name FROM paymentwithdrow INNER JOIN investoraccounts ON paymentwithdrow.UserId=investoraccounts.id AND investoraccounts.Email=paymentwithdrow.email
  INNER JOIN payment_method ON
  payment_method.id = paymentwithdrow.Method
  ORDER BY `id` DESC");
  $row = array();
  while($data = mysqli_fetch_assoc($sql)){
    $row[]=$data;
  }
  return $row;
}
// all payment add reqest======================>
function all_addpayment_request(){
  global $con;
  $sql = mysqli_query($con,"SELECT paymentadd.*,
  paymentadd.id as main_id,
  investoraccounts.FastName as investorName,
  investoraccounts.Email as investorEmail,payment_method.*,
  payment_method.name as MethodName,
  payment_method.account_number as MethodNumber
  FROM paymentadd INNER JOIN
  investoraccounts ON
  paymentadd.UserId=investoraccounts.id AND
  paymentadd.email=investoraccounts.Email
  INNER JOIN payment_method ON payment_method.id=paymentadd.Method_id
  ORDER BY `paymentadd`.`id` DESC");
  $row = array();
  while($data = mysqli_fetch_assoc($sql)){
    $row[]=$data;
  }
  return $row;
}
// make unique varification
function unique_varification_code($code=""){
 global $con;
 $sql = mysqli_query($con,"SELECT `VerificationCode`, `Date` FROM `investoraccounts` WHERE VerificationCode='$code'");
 $check = mysqli_num_rows($sql);
 if($check>0){
   $varification = "GM".rand(112233,778899);
   return $varification;
 }else{
   return $code;
 }
}
// make unique rafer id=====
function unique_raferId($raferId=""){
 global $con;
 $sql = mysqli_query($con,"SELECT `My_RaferId`, `Date` FROM `investoraccounts` WHERE My_RaferId='$raferId'");
 $check = mysqli_num_rows($sql);
 if($check>0){
   $rafer_id = "GM".rand(543219,987651);
   return $rafer_id;
 }else{
   return $raferId;
 }
}
// rendom hash key string====
function random_strings($length_of_string)
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $hashKey = substr(str_shuffle($str_result),
                   0, $length_of_string);
    return $hashKey;
}
// update validate user signin===
function VALIDATE_HASH_USER($new_k="",$old_k=""){
  global $con;
  $sql = mysqli_query($con,"UPDATE `investoraccounts` SET  `validate_key_unique`='$new_k' WHERE validate_key_unique='$old_k'");
  if($sql==true){
    return 1;
  }else{
    return 0;
  }
}
function add_balance_payment_method(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `payment_method` WHERE payment_add='active'");
  $row  = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    $row[]=$data;
  }
  return $row;
}
// balance withdrow method========
function withdrow_balance_payment_method(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `name`, `payment_add`, `payment_withdrow`, `account_number`, `sub_text`, `icon`, `banner`, `date` FROM `payment_method` WHERE payment_withdrow='active'");
  $row  = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    $row[]=$data;
  }
  return $row;
}

// withdrow history==========
function withdrow_history($userId=""){
  global $con;
  $sql = mysqli_query($con,"SELECT paymentwithdrow.*,payment_method.icon,
  payment_method.name as method_name
  FROM `paymentwithdrow`
  INNER JOIN payment_method ON paymentwithdrow.Method=payment_method.id
  WHERE paymentwithdrow.UserId = '$userId'
  ORDER BY id DESC");
  $arr = array();
  while($data = mysqli_fetch_assoc($sql)){
    $arr[]=$data;
  }
  return $arr;
}
// payment add history
function paymentadd_history($userId=""){
  global $con;
  $sql = mysqli_query($con,"SELECT paymentadd.*,payment_method.name as method_name,payment_method.icon
  FROM paymentadd
  INNER JOIN payment_method ON paymentadd.Method_id =  payment_method.id
  WHERE UserId='$userId' ORDER BY id DESC");
  $arr = array();
  while($data = mysqli_fetch_assoc($sql)){
    $arr[]=$data;
  }
  return $arr;
}
// time made only date======
function strtotimeMake($date=""){
  $date = date('Y-m-d', strtotime($date));
  return $date;
}

// Global payament history check==============
function global_withdrow_history(){
  global $con;
  $sql = mysqli_query($con,"SELECT paymentwithdrow.*,payment_method.icon,
  payment_method.name as method_name,
  investoraccounts.ProfilePic,
  investoraccounts.FastName,
  investoraccounts.LastName
  FROM `paymentwithdrow`
  INNER JOIN payment_method ON paymentwithdrow.Method=payment_method.id
  INNER JOIN investoraccounts ON
  paymentwithdrow.email = investoraccounts.Email
  WHERE paymentwithdrow.Status !='cancle'
  ORDER BY id DESC");
  $arr = array();
  while($data = mysqli_fetch_assoc($sql)){
    $arr[]=$data;
  }
  return $arr;
}

// My Plan and pakages ===========
function myplan_pakages($insvestor_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT investorplanpakages.*,investorplanpakages.id as insMId,investorplanpakages.Date as pakageStartDate,allpakages.Name as pakage_name,allpakages.id as Pakage6Id,allpakages.icon as Icon ,allpakages.Price, allpakages.PerDayBonus,allplans.PlanName,allplans.PlanId, allpakages.Duration FROM `investorplanpakages` INNER JOIN allpakages ON investorplanpakages.PakageId = allpakages.id INNER JOIN allplans ON allplans.PlanId = investorplanpakages.PlanId WHERE investorplanpakages.InvestorId = '$insvestor_id'");
  $row = array();
  while($data = mysqli_fetch_assoc($sql)){
    $row[] = $data;
  }
  return $row;
}
// Mar 13, 2023 23:59:59
// Jun 08, 2023 00:00:00
function pakageEndDate($pSDate='',$Duration=''){
  $mainDate = date('Y-m-d', strtotime($pSDate));
  $endDate= date('Y-M-d', strtotime($mainDate. " + ".$Duration." days"));
  $Day   = date('d', strtotime($endDate));
  $Month = date('M', strtotime($endDate));
  // $Month =  strtolower($Month);//make month lowercase
  $Year = date('Y', strtotime($endDate));

  $dayMonth = $Month." ".$Day.", ".$Year." 00:00:00";
  $arr = array("Enddate"=>$dayMonth,"Year"=>$Year,"CEdate"=>$endDate);
  return $arr;
}
// investor Bonus add By Corn Sql check =====
// My Plan and pakages ===========
function CORN_FUNCTION_BONUS(){
  global $con;
  $sql = mysqli_query($con,"SELECT investorplanpakages.*,investorplanpakages.id as insMId,investorplanpakages.Date as pakageStartDate,allpakages.Name as pakage_name,allpakages.icon as Icon ,allpakages.Price, allpakages.PerDayBonus, allpakages.Duration FROM `investorplanpakages` INNER JOIN allpakages ON investorplanpakages.PakageId = allpakages.id WHERE 1");
  $row = array();
  while($data = mysqli_fetch_assoc($sql)){
    $row[] = $data;
  }
  return $row;
}
// Earning tab payment calculate=============
function today_earning($IuserId="",$Email=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `InvestorId`,`PakageId`, `Date` FROM `investorplanpakages` WHERE InvestorId='$IuserId' AND status='valid' AND investorEmail='$Email'");
  $ERN_today = 0;
  while($data = mysqli_fetch_assoc($sql)){
    $pakage_id = $data["PakageId"];
    $investor_id = $data["InvestorId"];
    $sql_pkg = mysqli_query($con,"SELECT `PerDayBonus` FROM `allpakages` WHERE id='$pakage_id'");
    $fetch = mysqli_fetch_assoc($sql_pkg);
    $today_earn = $fetch["PerDayBonus"];
    $ERN_today = $ERN_today+$today_earn;
  }
  return $ERN_today;
}
// last 7 day earning
function last7day_earning($IuserId=""){
  global $con;
  $p_date = date("Y-m-d");
  $start = date('Y-M-d', strtotime($p_date. " -6 days"));
  $sql = mysqli_query($con,"SELECT  SUM(`bonusGive`) As day7Bonus FROM `dailybonusaddhistory` WHERE dailybonusaddhistory.Date BETWEEN '$start' AND '$p_date' AND userId='$IuserId'");
  $fetch = mysqli_fetch_assoc($sql);
  $ern7days = $fetch["day7Bonus"];
  if($ern7days==0 OR $ern7days==""){
    return "ND";
  }else{
    return $ern7days;
  }
}
// Last 30 day earning data====
function last30day_earning($IuserId=""){
  global $con;
  $p_date = date("Y-m-d");
  $start = date('Y-M-d', strtotime($p_date. " -29 days"));
  $sql = mysqli_query($con,"SELECT  SUM(`bonusGive`) As day30Bonus FROM `dailybonusaddhistory` WHERE dailybonusaddhistory.Date BETWEEN '$start' AND '$p_date' AND userId='$IuserId'");
  $fetch = mysqli_fetch_assoc($sql);
  $ern30days = $fetch["day30Bonus"];
  if($ern30days==0 OR $ern30days==""){
    return "ND";
  }else{
    return $ern30days;
  }
}
// Count Investor total pakages live and end
function live_old_pakage($IuserId=""){
  global $con;
  $sql_live = mysqli_query($con,"SELECT count(`id`) as livePkg FROM `investorplanpakages` WHERE InvestorId='$IuserId' AND status='valid'");
  $sql_live = mysqli_fetch_assoc($sql_live);
  $sql_live = $sql_live["livePkg"];

  $sql_old = mysqli_query($con,"SELECT count(`id`) as Oldpkg FROM `investorplanpakages` WHERE InvestorId='$IuserId' AND status='invalid'");
  $sql_old = mysqli_fetch_assoc($sql_old);
  $sql_old = $sql_old['Oldpkg'];

  $arr = array("Live"=>$sql_live,"Old"=>$sql_old);
  return $arr;
}
// activity tracker======
function activity_tracker($Email=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `email`, `ActivityName`, `ActivityText`, `Date` FROM `allactivity` WHERE email='$Email'  ORDER BY `id` DESC");
  $arr = array();
  while($data=mysqli_fetch_assoc($sql)){
    $arr[] = $data;
  }
  return $arr;
}
// Notification by investor=============
function investor_notification($Email=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `email`, `ActivityText`, `ac_time`, `Date` FROM `allactivity` WHERE email='$Email' AND maker='admin' order by id desc");
  $arr = array();
  while($data = mysqli_fetch_assoc($sql)){
    $arr[] = $data;
  }
  return $arr;
}
//=======================================
//==Iinfo links===
//=======================================
function infoLinks(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `email1`, `email2`, `facebook`, `instagram`, `youtube`, `date` FROM `info_links_all` WHERE 1");
  $data=mysqli_fetch_assoc($sql);
  return $data;
}

//=======================================
//==Investor Support History start===
//=======================================
function ins_support_history($Email=""){
 global $con;
 $sql  = mysqli_query($con,"SELECT `id`, `InvestorUserEmail`, `Subject`, `Help_text`, `Admin_reply`, `screenshoot_user`, `screenshoot_admin`, `Status`, `Date` FROM `adminsupports` WHERE InvestorUserEmail='$Email' order by id desc ");
 $arr = array();
 while($data = mysqli_fetch_assoc($sql)){
    $arr[] = $data;
  }
  return $arr;
 }
 //=======================================
 //==All Rafer User===
 //=======================================
 function ins_refar_user($My_RaferId=""){
   global $con;
   $sql = mysqli_query($con,"SELECT `FastName`, `lavel`, `ProfilePic` FROM `investoraccounts` WHERE RaferId='$My_RaferId'");
   $arr = array();
   while ($data=mysqli_fetch_assoc($sql)) {
     $arr[]=$data;
   }
   return $arr;
 }
 //=======================================
 //==Bonus History investor===
 //=======================================
 function InsBonusHistory($id){
   global $con;
   $sql = mysqli_query($con,"SELECT `id`, `userId`, `pakageId`, `bonusGive`, `date` FROM `dailybonusaddhistory` WHERE userId='$id' order by id desc");
   $arr = array();
   while ($data = mysqli_fetch_assoc($sql)) {
     $arr[] = $data;
   }
   return $arr;
 }
 //=======================================
 //==investor Docs filds===
 //=======================================
  function Investor_Docs_file($ins_id=""){
    global $con;
    $sql = mysqli_query($con,"SELECT * FROM `investordocs` WHERE  Ins_id = '$ins_id'");
    $check = mysqli_num_rows($sql);
    if($check>0){
      $data = mysqli_fetch_assoc($sql);

      return $data;
    }else{
      return "no_data";
    }
  }
  //=======================================
  //==Total withdrow history===
  //=======================================
  function total_withdrow_amt($Email=""){
    global $con;
    $sql = mysqli_query($con,"SELECT SUM(Ammount) as withdrow_amt FROM `paymentwithdrow` WHERE email='$Email' AND `paymentwithdrow`.`Status` = 'success'");
    $ammount  = mysqli_fetch_assoc($sql);
    $ammount = $ammount["withdrow_amt"];
    return $ammount;
  }

  //=======================================
  //==Total invest history===
  //=======================================
  function total_invest($Email=""){
    global $con;
    $sql = mysqli_query($con,"SELECT SUM(allpakages.Price) as invest_amt FROM `investorplanpakages`
    INNER JOIN allpakages ON investorplanpakages.PakageId = allpakages.id
    WHERE investorplanpakages.investorEmail ='$Email'");
    $ammount  = mysqli_fetch_assoc($sql);
    $ammount = $ammount["invest_amt"];
    return $ammount;
  }

//=======================================
//==Total invest history===
//=======================================
function duration_calculate($Duration=""){
  if($Duration=="7d"){
    $Duration = "7";
  }elseif($Duration=="15d"){
    $Duration = "15";
  }elseif($Duration=="30d"){
    $Duration = "30";
  }else{
     $Duration = $Duration;
  }
  return $Duration;
}
//=======================================
//==password checker===
//=======================================
function password_checker($email="",$password=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `Password` FROM `investoraccounts` WHERE Email='$email'");
  $fetch_data = mysqli_fetch_assoc($sql);
  $DPassword = $fetch_data['Password'];
  $check = password_verify($password,$DPassword);
  if($check==true){
    return 1;
  }else{
    return 0;
  }
}
// investor data=====
function investor_docs(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investordocs` ORDER BY `id` DESC LIMIT 20");
  $row = array();
  while($data= mysqli_fetch_assoc($sql)){
    $row[] = $data;
  }
  return $row;
}
//=========================================
//==========ALL BADGES===
//=======
function all_badges(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `name`, `minimum_invest`, `minimum_withdrow`, `date` FROM `lavels` WHERE 1");
  $data = array();
  while($row = mysqli_fetch_assoc($sql)){
    $data[] = $row;
  }
  return $data;
}
function badge_idto_name($lavel_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `name`, `minimum_invest`, `minimum_withdrow`, `date` FROM `lavels` WHERE id='$lavel_id'");
  $row = mysqli_fetch_assoc($sql);
  return $row;
}
//===================================
//======LIVE Pakages====
//=====
// My Plan and pakages ===========
function all_Ins_live_pakages(){
  global $con;
  $sql = mysqli_query($con,"SELECT investorplanpakages.*,investorplanpakages.id as insMId,investorplanpakages.Date as pakageStartDate,allpakages.Name as pakage_name,allpakages.id as Pakage6Id,allpakages.icon as Icon ,allpakages.Price, allpakages.PerDayBonus,allplans.PlanName,allplans.PlanId, allpakages.Duration,investoraccounts.FastName,investoraccounts.LastName,investoraccounts.ProfilePic FROM `investorplanpakages` INNER JOIN allpakages ON investorplanpakages.PakageId = allpakages.id INNER JOIN allplans ON allplans.PlanId = investorplanpakages.PlanId INNER JOIN investoraccounts ON investorplanpakages.InvestorId = investoraccounts.id WHERE 1");
  $row = array();
  while($data = mysqli_fetch_assoc($sql)){
    $row[] = $data;
  }
  return $row;
}

// admin function banner
 function admin_banner(){
   global $con;
   $sql = mysqli_query($con,"SELECT `id`, `banner_title`, `banner_desc`, `button_link`,`banner_image`,`show_page`, `date` FROM `banner_section` WHERE 1");
   $row = array();
   while($data = mysqli_fetch_assoc($sql)){
     $row[] = $data;
   }
   return $row;
 }
 // admin function activity==========
 function admin_all_user_activity($email="",$limit=""){
   global $con;
   $sql = mysqli_query($con," SELECT allactivity.*,investoraccounts.ProfilePic FROM `allactivity`
   INNER JOIN investoraccounts ON allactivity.email = investoraccounts.Email WHERE allactivity.email='$email' ORDER BY `id` DESC LIMIT $limit");
   $arr = array();
   while($data = mysqli_fetch_assoc($sql)){
     $arr[] = $data;
   }
   return $arr;
 }
  // admin function activity==========
  //=================================
  // function tutorials=======================
  function tutorials(){
    global $con;
    $sql = mysqli_query($con,"SELECT `id`, `title`, `text`, `video`, `link`, `image`, `date` FROM `tutorial_section` WHERE 1");
    $arr = array();
    while($data = mysqli_fetch_assoc($sql)){
      $arr[] = $data;
    }
    return $arr;
  }
  //=================================
  // ======Hold Pakages=========
   function hold_pakages($Email){
     global $con;
     $sql = mysqli_query($con,"SELECT pakage_hold_investor.*,allpakages.Name as pkg_name,allpakages.Price as pkg_price,allpakages.PerDayBonus,allpakages.duration as pkg_duration,
     allpakages.icon,allpakages.banner,allpakages.start_date,allpakages.Status,
     allplans.* FROM `pakage_hold_investor`
     INNER JOIN allpakages ON pakage_hold_investor.pakage_id = allpakages.id
     INNER JOIN allplans ON allpakages.planId = allplans.PlanId
     WHERE pakage_hold_investor.ins_email = '$Email'");
     $row  = array();
     while ($data = mysqli_fetch_assoc($sql)) {
       $row[] = $data;
     }
     return $row;
   }
   //==========Function Badges=============
   function Badges_data(){
     global $con;
     $sql = mysqli_query($con,"SELECT `id`, `name`, `minimum_invest`, `minimum_withdrow`, `date` FROM `lavels` ORDER BY `id` ASC");
     $arr = array();
     while($data=mysqli_fetch_assoc($sql)){
       $arr[] = $data;
     }
     return $arr;
   }
   // tutorial finction====
   function tutorial_all(){
     global $con;
     $sql = mysqli_query($con,"SELECT `id`, `title`, `text`, `video`, `link`, `image`, `date` FROM `tutorial_section` WHERE 1");
     $arr = array();
     while($data=mysqli_fetch_assoc($sql)){
       $arr[] = $data;
     }
     return $arr;
   }
   // Trams ANd Condition==============
   function trams_and_condition(){
    // paymentadd
    // withdrow
    // pakages
    // agentpanel
    // customerpanel
    // website
     global $con;
     $sql = mysqli_query($con,"SELECT `id`, `SectionName`, `Title`, `Description`, `Date` FROM `tramsconditions` WHERE 1");
     $arr = array();
     while($data=mysqli_fetch_assoc($sql)){
       $arr[] = $data;
     }
     return $arr;
   }
   // accept payment Bank List Admin======
   function bank_list(){
     global $con;
     $sql = mysqli_query($con,"SELECT `id`, `bank_name`, `date` FROM `bank_list` WHERE 1");
     $arr = array();
     while($data=mysqli_fetch_assoc($sql)){
       $arr[] = $data;
     }
     return $arr;
   }
   //==================SP Bank List Data======
   function bank_list_sp($id){
     global $con;
     $sql = mysqli_query($con,"SELECT `id`, `withdrow_id`, `method_id`, `bank_name`, `account_no`, `branch_name`, `routing_no`, `date` FROM `ins_bank_withdrow_data` WHERE withdrow_id='$id'");
     $data = mysqli_fetch_assoc($sql);
     return $data;
   }
?>

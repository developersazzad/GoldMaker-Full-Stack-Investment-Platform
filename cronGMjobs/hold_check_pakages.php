<?php
include("../connection.php");
include("../function/function.php");
include("../function/smtp_shoot.php");
$date = date("Y-m-d");

$sql = mysqli_query($con,"SELECT `id`, `status`, `date` FROM `hold_live_count` WHERE Date(date)='$date' and status = 'Done'");
$count = mysqli_num_rows($sql);
$stats = "No";
$ii=0;
$email_arr = array();
if($count==0){
$sql_hold = mysqli_query($con,"SELECT pakage_hold_investor.*,pakage_hold_investor.id as baler_id FROM `pakage_hold_investor` WHERE start_date='$date'");

while($Data = mysqli_fetch_assoc($sql_hold)){
  $start_date = $Data["start_date"];
  $hold_id = $Data["baler_id"];
  $date = date("Y-m-d");
  $ins_id = $Data["ins_id"];
  $ins_email = $Data["ins_email"];
  $pakage_id = $Data["pakage_id"];
  $plan_id = $Data["plan_id"];
  $date_time = date("Y-m-d h:i:s");
  $email_arr[] = $hold_id;
  $sql_insert = mysqli_query($con,"INSERT INTO `investorplanpakages`(`InvestorId`, `investorEmail`, `PakageId`, `PlanId`,`Date`)
   VALUES (
     '$ins_id',
     '$ins_email',
     '$pakage_id',
     '$plan_id',
     '$date_time')
     ");
     if($sql_insert==true){
     // add user activity====
      $AcName = "Hold_pakages_start";
      $AcMsg = "Pakages start Now";
      $Acti = set_in_activity($ins_email,$AcName,$AcMsg);
      $stats = "Done";
     }
    $ii++;
 }
}


foreach ($email_arr as $key => $value) {
  $sql = mysqli_query($con,"DELETE FROM `pakage_hold_investor` WHERE id='$value'");
  echo "done";
}
if($stats=="Done"){
  $sql = mysqli_query($con,"INSERT INTO `hold_live_count`(`status`) VALUES ('Done')");
}else{
  $sql = mysqli_query($con,"INSERT INTO `hold_live_count`(`status`) VALUES ('Pending')");
}
 echo $stats." - ".$ii;
 ?>

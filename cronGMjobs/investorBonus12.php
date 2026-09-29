<?php
include("../connection.php");
include("../function/function.php");
include("../function/smtp_shoot.php");
$Corn_f = CORN_FUNCTION_BONUS();
echo $now_date = date("Y-m-d");
// check daily run yes or Not===
$sql_checker = mysqli_query($con,"SELECT `Activity_name`, `Status`, `Date` FROM `bonus_activity_cron` WHERE `Status`='Done' AND `Date`='$now_date'");
$Corn_Check = mysqli_num_rows($sql_checker);
if($Corn_Check == 0){
  foreach ($Corn_f as $data) {
   $insMId = $data['insMId'];
   $pakage_name = $data["pakage_name"];
   $PerDayBonus = $data["PerDayBonus"];
   $Duration = $data["Duration"];
   $Duration = duration_calculate($Duration);
   $pSDate = $data["pakageStartDate"];
   $investDate = strtotimeMake($pSDate);
   // time calculation by pakage
   $PSCDate = pakageEndDate($pSDate,$Duration);
   $CEdate = $PSCDate['CEdate'];//pakage end date
   $presentDate = date("Y-M-d");//pressent date
   // calculate pakage validation
   $expire = strtotime($CEdate);
   $pressent = strtotime($presentDate);
   if($expire>=$pressent){
     $valid = 'yes';
     // add bonus by investor===
     $Bonus = $PerDayBonus;
     $InvestorId = $data['InvestorId'];
     $investorEmail = $data['investorEmail'];
     $sql_investor =mysqli_query($con,"SELECT `id`,`FastName`, `Email`, `Status`, `BonusBalance`, `MainBalance`,`RaferId` FROM `investoraccounts` WHERE id='$InvestorId' AND Status='Completed' AND Email='$investorEmail'");
    while($row = mysqli_fetch_assoc($sql_investor)){
       $insWallat = $row["BonusBalance"];
       $user_i_raferId = $row["RaferId"];
       // add money by investor wallat===
       $insWallat = $insWallat+$Bonus;
       //update wallat by investor
       $sql_update = mysqli_query($con,"UPDATE `investoraccounts` SET `BonusBalance`='$insWallat' WHERE id='$InvestorId' AND Status='Completed' AND Email='$investorEmail'");
      if($sql_update==true){
        // bonus history add===
         $date_1 = date("Y-m-d"); 
         $H_sql = mysqli_query($con,"INSERT INTO `dailybonusaddhistory`( `userId`, `pakageId`, `bonusGive`, `date`) VALUES ('$InvestorId','$insMId','$Bonus','$date_1')");
        // add user activity====
         $AcName = "daily_bonus_accept";
         $AcMsg = "You Accept ".$Bonus." Usd";
         $Acti = set_in_activity($investorEmail,$AcName,$AcMsg);
        if($Acti==1){
          // Add bonus 5% by rafer=============
          // calculate Rafer bonus===
          $cal_R = $PerDayBonus/100;
          $Rafer_userGive = $cal_R*$Raf_bonus;
          // Find my rafer---->
          $sql_raf = mysqli_query($con,"SELECT `BonusBalance`,`Email` FROM `investoraccounts` WHERE My_RaferId='$user_i_raferId' AND Status='Completed'");
          $check = mysqli_num_rows($sql_raf);
          if($check>0){
            echo "inside";
            $fetch_r = mysqli_fetch_assoc($sql_raf);
             $walat_on_raf_u = $fetch_r["BonusBalance"];
             $Email_on_Raf = $fetch_r["Email"];
             $walat_on_raf_u = $walat_on_raf_u+$Rafer_userGive;
             // Update balance by rafer user==
              $sql_R_update = mysqli_query($con,"UPDATE `investoraccounts` SET `BonusBalance`='$walat_on_raf_u' WHERE Email='$Email_on_Raf'");
              if($sql_R_update!=true){
                echo "rafer update fail";
              }
             // Rafer bonus activity====
             $Ac_Name = "Rafer_bonus_give";
             $AcMsg ="You Give ".$Rafer_userGive." USD Rafer Bonus";
             set_in_activity($Email_on_Raf,$Ac_Name,$AcMsg);
             // Rafer bonus activity====
          }
          // add daily corn start query update====
         // smtp send Bonus payment stats==============
         if($smtp=="Yes"){
           $l_template = "https://res.cloudinary.com/dbxzpwinj/image/upload/v1678251301/GoldMaker_Resources_jj6nqv.png";
           $subject="Give Bonus By GoldMaker -".$date_1;
           $smtp_send = send_mail_investor_2($subject,$investorEmail,$l_template);
          }
        }else{
          echo "activity fanc error";
        }
        $main_stats = 1;
      }else{
        echo "database error";
        $main_stats = 0;
      }
      // make pakages valid history
      $sql = mysqli_query($con,"UPDATE `investorplanpakages` SET `status`='valid' WHERE id='$insMId' AND investorEmail='$investorEmail'");
      // make pakages valid history
    }

    }else{
     // make pakages unvalid history
    }
  }
  // add daily corn start query update====
  $Date = date('Y-m-d');
  if($main_stats==1){
    $sql = mysqli_query($con,"INSERT INTO `bonus_activity_cron`(`Activity_name`, `Status`, `Date`) VALUES ('Daily_Bonus_Done','Done','$Date')");
    if($sql==true){
      $UMain = "done";
    }else{
     $UMain = "false";
    }
  }else{
    $sql = mysqli_query($con,"INSERT INTO `bonus_activity_cron`(`Activity_name`, `Status`, `Date`) VALUES ('Daily_Bonus_Done','Pending','$Date')");
  }
}else{
  $UMain = "already done";
  echo $UMain;
}
 ?>

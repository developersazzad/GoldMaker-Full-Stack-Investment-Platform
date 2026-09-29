<?php
//admin balance
function Admin_Fanction(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `Email`, `amount`, `Password`, `VerificationCode`, `wallat_withdrow_fee`, `deposit_withdrow_fee`, `Main_session`, `date` FROM `mainadmin` WHERE 1");
  $Data = mysqli_fetch_assoc($sql);
  return $Data;
}
// COUNT ALL======
function ALL_INS(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE 1");
  $count = mysqli_num_rows($sql);
  return $count;
}
// Email Varified User Only====
function AC_IN(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE Status='Active'");
  $count = mysqli_num_rows($sql);
  return $count;
}
//========Suspand User===

// Email Varified User Only====
function SUSP_IN(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE Status='Suspand'");
  $count = mysqli_num_rows($sql);
  return $count;
}
// VARIFIED USER===========
function Vi_IN(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `investoraccounts` WHERE Status='Completed'");
  $count = mysqli_num_rows($sql);
  return $count;
}
//=============Count Pakages
function T_PKG(){
  global $con;
  $sql = mysqli_query($con,"SELECT COUNT(name) as TotalPkg FROM `allpakages` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  $TotalPkg = $fetch["TotalPkg"];

  $sqlActive = mysqli_query($con,"SELECT COUNT(name) as ActivePkg FROM `allpakages` WHERE Status='Active'");
  $sqlActive = mysqli_fetch_assoc($sqlActive);
  $sqlActive = $sqlActive["ActivePkg"];
  $data = array("totalPkg"=>$TotalPkg,"ActivePkg"=>$sqlActive);
  return $data;
}
//=============Count Plan
function T_PLANS(){
  global $con;
  $sql = mysqli_query($con,"SELECT COUNT(planId) as Totalplan FROM `allplans` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  $Totalplan = $fetch["Totalplan"];
  return $Totalplan;
}
//=============Profit Share total==
function T_S_P(){
  global $con;
  $sql = mysqli_query($con,"SELECT SUM(bonusGive) as shareProfit FROM `dailybonusaddhistory` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  $shareProfit = $fetch["shareProfit"];
  return $shareProfit;
}
//=============Total withdrow Request==
function T_W_R(){
  global $con;
  $sql = mysqli_query($con,"SELECT COUNT(id) as withdrowReq FROM `paymentwithdrow` WHERE 1");
  $sql2 = mysqli_query($con,"SELECT COUNT(id) as Pending_wi_req FROM `paymentwithdrow` WHERE Status!='success'");
  $fetch = mysqli_fetch_assoc($sql);
  $fetch2 = mysqli_fetch_assoc($sql2);
  $withdrowReq = $fetch["withdrowReq"];
  $withdrowReqPending = $fetch2["Pending_wi_req"];
  $arr = array("withdrowReq"=>$withdrowReq,"withdrowReqPending"=>$withdrowReqPending);
  return $arr;
}
//=============================
//=====Verification Pending==
//==============
function Ins_p_V(){
  global $con;
  $sql = mysqli_query($con,"SELECT COUNT(FastName) as PendingVerifiation FROM `investoraccounts` INNER JOIN investordocs ON investordocs.Ins_id=investoraccounts.id WHERE investoraccounts.Status='Unseen'");
  $fetch = mysqli_fetch_assoc($sql);
  $data = $fetch['PendingVerifiation'];
  return $data;
}
//=============================
//=====Today Profit share
//==============
function Today_S_P(){
  global $con;
  $date = date("Y-m-d");
  $sql = mysqli_query($con,"SELECT SUM(bonusGive) as shareProfitToday FROM `dailybonusaddhistory` WHERE date='$date'");
  $fetch = mysqli_fetch_assoc($sql);
  $shareProfitToday = $fetch["shareProfitToday"];
  return $shareProfitToday;
}
//=============================|
//=====Share Profit Last 7 Days|
//==============|
function Last7d_S_P(){
  global $con;
  $old = date("Y-m-d");
  $start = date('Y-m-d', strtotime($old. " -6 days"));
  $sql = mysqli_query($con,"SELECT  SUM(bonusGive) as S7Day FROM
  `dailybonusaddhistory` WHERE date BETWEEN '$start' AND '$old'");
  $fetch = mysqli_fetch_assoc($sql);
  $L7DShare = $fetch["S7Day"];
  return $L7DShare;
}
//=============================|
//=====Share Profit Last 7 Days|
//==============|
function Last30d_S_P(){
  global $con;
  $old = date("Y-m-d");
  $start = date('Y-m-d', strtotime($old. " -29 days"));
  $sql = mysqli_query($con,"SELECT  SUM(bonusGive) as S7Day FROM
  `dailybonusaddhistory` WHERE date BETWEEN '$start' AND '$old'");
  $fetch = mysqli_fetch_assoc($sql);
  $L7DShare = $fetch["S7Day"];
  return $L7DShare;
}
//=============================|
//=====Count Open Support tickt
//==============|
function Open_S_T(){
  global $con;
  $sql = mysqli_query($con,"SELECT COUNT(id) as open_support FROM `adminsupports` WHERE Status='unseen'");
  $fetch = mysqli_fetch_assoc($sql);
  $open_support = $fetch["open_support"];
  $sql1 = mysqli_query($con,"SELECT COUNT(id) as open_support_all FROM `adminsupports` WHERE 1");
  $fetch1 = mysqli_fetch_assoc($sql1);
  $open_support_all = $fetch1["open_support_all"];
  $arr = array("s_tickt_all"=>$open_support_all,"open_s_tickt"=>$open_support);
  return $arr;
}
//=============================|
//=====User live Check
//==============|
function InsLive(){
  global $con;
  $dateTime = time();
  $sql = mysqli_query($con,"SELECT `id`, `Email`, `Datetime` FROM `onlinestatus` WHERE 1");
  $Count = 0;
  while($data = mysqli_fetch_assoc($sql)){
    $Main_date = $data["Datetime"];
    if($Main_date>$dateTime){
      $stats = "userOnline";
      $Count = $Count+1;
    }
  }
  return $Count;
}
 ?>

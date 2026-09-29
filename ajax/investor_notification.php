<?php
include("../connection.php");
$Email = $_POST["email"];
$profile = $_POST["profile"];
$user_name = $_POST["name"];
$sql = mysqli_query($con,"SELECT  `email`, `ActivityText`, `ac_time`, `Date` FROM `allactivity` WHERE maker='admin' AND email='$Email' OR email='GM_all@user' order by id desc");
$ii = 1;
$html = "";
while($data = mysqli_fetch_assoc($sql)){
  $ActivityText = $data["ActivityText"];
  $Date = $data["Date"];
  // calculate time=====
  $psessent_time = time();
  $ac_time = $data["ac_time"]+6;
  if($ac_time>=$psessent_time){
      $html .="<div class='row mb-4 hideonprogress' id='hideonprogressbar_sp'> <div class='col-12'> <div class='card'> <div class='card-body'> <div class='row'> <div class='col-auto'> <div class='avatar avatar-44 shadow-sm rounded-10'> <img src='../assets/images/InvestorProfilePic/".$profile."' alt=''> </div></div><div class='col align-self-center ps-0'> <p class='small mb-1'><a href='activity_log' class='fw-medium'>".$user_name."</a> <span class='text-muted'>".$ActivityText."</span></p><p>Date - <span class='text-muted'></span> <small class='text-muted'>".$Date."</small> </p></div><div class='col-auto'> <button class='btn btn-44 btn-default shadow-sm'> <i class='bi bi-arrow-up-right-circle'></i> </button> </div></div></div><div class='row mx-0'> <div class='col-12'> <div class='progress bg-none h-2 hideonprogressbar' data-target='hideonprogress' > <div class='progress-bar bg-theme' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div></div></div></div></div></div></div>";
  }
    $ii++;
}
// "count" =>$ii,"data"=>$arr,
$arr2 = array("NotiCount" =>$ii,"html"=>$html);
$data_is = json_encode($arr2);

//==============================================
// Set User Online Stats========
//=========================================
  $dateTime = time()+30;
  $sql_find = mysqli_query($con,"SELECT `id`, `Email`, `Datetime` FROM `onlinestatus` WHERE Email='$Email'");
  $check = mysqli_num_rows($sql_find);
  if($check>0){
    $sql  = mysqli_query($con,"UPDATE `onlinestatus` SET `Datetime`='$dateTime' WHERE Email='$Email'");
  }else{
    $sql  = mysqli_query($con,"INSERT INTO `onlinestatus`( `Email`, `Datetime`) VALUES (
      '$Email',
      '$dateTime')");
  }
//=========================================
// Set User Online Stats========
//==============================================

echo $data_is;

 ?>

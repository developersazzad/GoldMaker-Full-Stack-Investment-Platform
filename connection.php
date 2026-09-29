<?php
// Fix for PHP 8 strict mode (so missing tables dont crash the whole site)
mysqli_report(MYSQLI_REPORT_OFF);

// Fix for broken cPanel session directory
$session_path = __DIR__ . "/sessions";
if (!is_dir($session_path)) {
    @mkdir($session_path, 0777, true);
}
session_save_path($session_path);
session_start();

date_default_timezone_set("Asia/Dhaka");
$domin = "https://res.bzmail.uk/"; 

$host  = "localhost";
$password = "M@5s[](7fN@jQvMP";
$user = "lavishco_goldM";
$database = "lavishco_goldM";
 
$con = mysqli_connect($host,$user,$password,$database);
$con2 = mysqli_connect($host,$user,$password,$database);

if($con!=true){
  echo "Connection False";
}else{
  try {
      $sql_admin = mysqli_query($con,"SELECT `id`, `Email`, `amount`, `Password`, `VerificationCode`, `Main_session`, `date` FROM `mainadmin` WHERE 1");
      if($sql_admin){
          $fetch_admin = mysqli_fetch_assoc($sql_admin);
          $admin_email = $fetch_admin["Email"] ?? "";
          $admin_amount = $fetch_admin["amount"] ?? "";
          $admin_password = $fetch_admin["Password"] ?? "";
          $admin_main_session = $fetch_admin["Main_session"] ?? "";
      }
  } catch (Exception $e) {}
  $domin="https://res.bzmail.uk/";
  $contact="";
  $number="";
  $admin_email="";
  $date  = date("Y-m-d");
  
  function Important_setting(){
    global $con;
    try {
        $sql = mysqli_query($con,"SELECT `stmtp`, `maintaince_mode`, `withdrow_limit`, `response_time`, `add_amount_limit`, `bonus_withdrow_fee`, `rafer_bonus`, `dipogit_w_cut_amt`, `dipogit_withdrow_time1`, `dipogit_withdrow_time2`, `Bonus_withdrow_time`, `last_update` FROM `important_admin_setting` WHERE 1");
        if($sql) return mysqli_fetch_assoc($sql);
    } catch (Exception $e) {}
    return null;
  }
  
  $imp_data66 = Important_setting() ?? [];
  $smtp = $imp_data66["stmtp"] ?? "";
  $main_tanince_mode = $imp_data66["maintaince_mode"] ?? "";
  $WithdrowLimit = (float)($imp_data66["withdrow_limit"] ?? 0);
  $response_time = (float)($imp_data66["response_time"] ?? 0);
  $AddAmountLimit = (float)($imp_data66["add_amount_limit"] ?? 0);
  $withdrowFee = (float)($imp_data66["bonus_withdrow_fee"] ?? 0);
  $Raf_bonus = (float)($imp_data66["rafer_bonus"] ?? 0); 
  $mainXCutSetAdmin = (float)($imp_data66["dipogit_w_cut_amt"] ?? 0);
  $dip_time_one = $imp_data66["dipogit_withdrow_time1"] ?? "";
  $dip_time_tow = $imp_data66["Bonus_withdrow_time"] ?? ""; 
}

$method_iconLink = "";
$youtube = "";
$facebook = "";
$instagram = "";
$whatsapp = "";
?>

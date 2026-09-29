<?php
include("../connection.php");
include("../function/function.php");
$email  = $_REQUEST["email"];
$sql = mysqli_query($con,"SELECT investorplanpakages.investorEmail,
investorplanpakages.id,investorplanpakages.Date as Date,investorplanpakages.PakageId,
allpakages.*,allplans.PlanName FROM  investorplanpakages
INNER JOIN allpakages
ON allpakages.id = investorplanpakages.PakageId
INNER JOIN allplans ON
allplans.PlanId = investorplanpakages.PlanId
WHERE investorplanpakages.investorEmail = '$email'
ORDER BY investorplanpakages.id DESC");
$html = "";
while($data=mysqli_fetch_assoc($sql)){
     $pakages_id = $data["PakageId"];
     $Duration = $data["Duration"];
     $startDate = $data["Date"];
     // end date calculate===
     $startDate = date('Y-m-d', strtotime($startDate));
     $endDate= Date('Y-m-d', strtotime("+".$Duration."days"));
     // end date calculate===
     $end_date = "";
     $plan_name = $data["PlanName"];
     $pakage_name = $data["Name"];
     $Pakage_Price = $data["Price"];
     $PerDayBonus = $data["PerDayBonus"];
     $icon = $data["icon"];
     $html .= "<div class='card' >
       <div class='card-body p-3' style='border: 1px solid #ffffff47;border-radius: 4px;'>
         <p style='margin-top:0'><strong>Plan - ".$plan_name."</strong></p>
         <h3 style='margin-top:0'>Pakage Name - ".$pakage_name."</h3>
         <ol>
           <li><strong>Duration - ".$Duration.".</strong></li>
           <li><strong>Amount - ".$Pakage_Price." USD</strong></li>
           <li><strong>Per Day - ".$PerDayBonus." USD</strong></li>
           <li><strong>Start date - ".$startDate."</strong></li>
           <li><strong>End date - ".$endDate."</strong></li>
         </ol>
       </div>
     </div>";
  }
  //======================================Hold Pakage List By User=====
 //======================================Hold Pakage List By User=====
 echo $html;
 ?>

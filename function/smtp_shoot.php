<?php
include("tamplate/tamplate.php");
include('../smtp/PHPMailerAutoload.php');
function smtp_mail($to1, $subject1, $message1) {
	$mail = new PHPMailer();
	//$mail->SMTPDebug=3;
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'type';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = "587";
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "info.goldmaker24@gmail.com";
	$mail->Password = 'hxoecmshpufwmcef';
	$mail->SetFrom('info.goldmaker24@gmail.com','GoldMaker24.com');
	$mail->Subject = $subject1;
	$mail->Body = $message1;
	$mail->AddAddress($to1);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
	 return "Done";
 }
}
?>

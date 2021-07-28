<?php
session_start();
require_once("PHPMailer.php");

$mail = new PHPMailer(true);
$form = $_POST;

$name 			= $form['name'];
$phone			= $form['phone'];
$email			= $form['email'];
$message	 	= $form['message'];

$mailtime = "true";
if(isset($_SESSION['timestmc'])){
	$curr_time= date('H:i:s');
	$event_time = $_SESSION['timestmc'];
	$event_length = 60;
	$timestamp = strtotime("$event_time");
	$etime = strtotime("+$event_length minutes", $timestamp);
	$next_time = date('H:i:s', $etime);
	if($curr_time > $next_time)
		$mailtime = "true";
	else
		$mailtime = "false";	
}
if($mailtime == "true"){

$html = <<<eof
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	body { font-family:Arial, Helvetica, sans-serif;}
	.heading {  font-size:18px; color:#000000;}
	.wrapperTbl { border:#fdffcd solid 1px;}
	.dataTbl    { color:#333; font-size:13px; margin:10px;}
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" class="wrapperTbl">
  <tr>
	<td>Contact Us form has been submitted for Dufas. &nbsp;The  details are below.</td>
	</tr>
  <tr>
    <td align="left">
    	<table border="0"  class="dataTbl">
          <tr>
            <td align="right"><strong>Name:</strong>&nbsp;</td>
            <td align="left">$name</td>
          </tr>
          <tr>
            <td height="24" align="right"><strong>Email:</strong>&nbsp;</td>
            <td align="left">$email</td>
          </tr>
          <tr>
            <td height="24" align="right"><strong>Phone Number:</strong>&nbsp;</td>
            <td align="left">$phone</td>
          </tr>
          <tr>
            <td height="24" valign="top" align="right"><strong>Message:</strong>&nbsp;</td>
            <td valign="top" align="left">$message</td>
          </tr>
          <tr>
            <td height="24" valign="top" align="right"><strong>IP Address:</strong>&nbsp;</td>
            <td valign="top" align="left">$_SERVER[REMOTE_ADDR]</td>
          </tr>
        </table>
    </td>
  </tr>
  <tr>
    <td height="10" bgcolor="#fdffcd"></td>
  </tr>
</table>
</body>
</html>
eof;
if($name=="" || $phone=="" || $email=="" || $message==""){
	header("Location: contactus.php?sts=req");
}
else{
	$_SESSION['timestmc'] = date('H:i:s');
	try {
		$mail->AddAddress('info@dufassteel.com', '');
		//$mail->AddAddress('naveedjasim@gmail.com', '');
		//$mail->AddCC('naveedjasim@gmail.com', 'Developer');
		$mail->SetFrom($email,$name);
		$mail->Subject = 'CONTACT US FORM INFORMATION';
		$mail->MsgHTML($html);
		$mail->ClearReplyTos();
	    //$mail->addReplyTo("example@example.com", 'EXAMPLE');
		$mail->IsHTML(true);
		$mail->Send();
		header("Location: contactus.php?sts=success");
	}
	catch (phpmailerException $e) {
		header("Location: contactus.php?sts=fail");
	} 
	catch (Exception $e) {
		header("Location: contactus.php?sts=fail");
	}
}

}else{
		header("Location: contactus.php?sts=wait");
}


?>
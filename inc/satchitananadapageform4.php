<?php
error_reporting(0);

$m_mailfrom = $_POST["from"];
$m_name = $_POST["name"];
$m_email = $_POST["email"];
$m_phone = $_POST["phone"];
date_default_timezone_set('Asia/Kolkata');
$ts = date('Y-m-d H:i:s');
 
$emailTo = "ann.vinya@heavenonmyearth.com";
 

// prepare email body text
$body = "";

$body .= "Mail For: ";
$body .= $m_mailfrom;
$body .= "\n";

$body .= "Name: ";
$body .= $m_name;
$body .= "\n";

$body .= "Email:  ";
$body .= $m_email;
$body .= "\n"; 

$body .= "Phone:  ";
$body .= $m_phone;
$body .= "\n";


$body .= "Comment:  ";
$body .= $m_comment;
$body .= "\n";


$body .= "Timestamp:  ";
$body .= $ts;
$body .= "\n"; 

// send email
$success = mail($emailTo, $m_name, $body, "From:".$m_email);
 
// redirect to success page
if ($success){
	$response = array(
		'success' => true, 
		'message' => "Email successfuly sent..."
	);
  // echo "Email successfuly sent..We will Contact you as soon as posible..";
}else{
	$response = array(
		'success' => false, 
		'message' => "Email sent failed..Retry!!!"
	);
  // echo "Email sent failed..Retry!!!";
}
echo json_encode($response);
 
?>
<?php
	error_reporting(0);
	$m_mailfrom ="Product New Order";
	$m_name = $_POST["name"];
	$m_email = $_POST["email"];
	$m_phone = $_POST["phone"];
	$m_address = $_POST["address"];

	$table_data = "<html>
					<head>
					 <title>HTML email</title>
					</head>
					<body>
						<table border='3' width='50%' cellpadding='0' cellspacing='0' style='min-width:50%;'>
							<thead>
								<tr>
									<th scope='col' style='padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:30px'>#</th>
									<th scope='col' style='padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:30px'>Name</th>
									<th scope='col' style='padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:30px'>Qty</th>
									<th scope='col' style='padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:30px'>Price</th>
								</tr>
							</thead>
						<tbody>";
	$sl_no = 0;
	for ($i=0; $i < count($_POST['cart_pro_name']); $i++) 
	{ 
		$sl_no++;
		$cart_pro_name = $_POST['cart_pro_name'][$i];
		$cart_pro_quantity = $_POST['cart_pro_quantity'][$i];
		$cart_pro_price = $_POST['cart_pro_price'][$i];
		$cart_item_total = $_POST['cart_item_total'][$i];
		$cart_item_total = $cart_item_total.".00";
		$table_data .=	"<tr>
				<td valign='top' style='padding:5px; text-align: center; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;'>".$sl_no."</td>
				<td valign='top' style='padding:5px; text-align: center; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;'>".$cart_pro_name."</td>
				<td valign='top' style='padding:5px; text-align: center; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;'>".$cart_pro_quantity."</td>
				<td valign='top' style='padding:5px; text-align: center; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;'>".$cart_pro_price."</td>
			</tr>";
	} 
	$table_data .= "<tr>
				<td></td>	
				<td></td>
				<td></td>
				<td valign='top' style='padding:5px 2px ; text-align: right; font-family: Arial,sans-serif;font-weight: bold; font-size: 16px; line-height:20px;'>Total:".$cart_item_total."</td></tr>";
	$table_data .= "</tbody></table></body></html>";

date_default_timezone_set('Asia/Kolkata');
$ts = date('Y-m-d H:i:s');
 
$emailTo = "ann.vinya@heavenonmyearth.com";//ann.vinya@heavenonmyearth.com

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$m_email."\r\n";
// prepare email body text
$body = "";

$body .= "This Mail : ";
$body .= $m_mailfrom;
$body .= "<br>";

$body .= "Name: ";
$body .= $m_name;
$body .= "<br>";

$body .= "Email:  ";
$body .= $m_email;
$body .= "<br>"; 

$body .= "Phone:  ";
$body .= $m_phone;
$body .= "<br>";

$body .= "Address:  ";
$body .= $m_address;
$body .= "<br>";

$body .= "Timestamp:  ";
$body .= $ts;
$body .= "<br>"; 

$body .= "Shopped Products:  ";
$body .= $table_data;
$body .= "<br>";


// send email
$success = mail($emailTo, $m_name, $body, $headers);

// redirect to success page
if ($success){
	// session_start();

	// $count = count($_SESSION['cart_item']);

	// if(!empty($_SESSION["cart_item"])) 
	// {
	// 	for ($i=0; $i < $count; $i++) {
	// 		unset($_SESSION["cart_item"]);
	// 	}
	// }
	// session_destroy();

	$response = array(
		'success' => true, 
		'message' => "Thank you for your shopping! Have a good day"
	);
  // echo "Email successfuly sent..We will Contact you as soon as posible..";
}else{
	$response = array(
		'success' => false, 
		'message' => "Something went wrong!!..Retry!!!"
	);
  // echo "Email sent failed..Retry!!!";
}
echo json_encode($response);
 
?>
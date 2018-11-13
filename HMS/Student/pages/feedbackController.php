<?php
include '../../getconnection.php';
extract($_REQUEST);
if(isset($_REQUEST['action'])){

	if($_REQUEST['action']=='Send Message'){
		echo 'hy';
$to = 'halak14cp@gmail.com';
$subject = 'Feedback Mail';
$from = $email;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
		'Reply-To: '.$from."\r\n" .
		'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message
$message = '<html><body>';
$message .= "<p style='color:#080;font-size:18px;'>Hello, I Am <u>$your_name</u></p>";
$message .= "<p style='color:#080;font-size:18px;'>I am send this mail for <u>$your_subject</u></p>";
$message .= "<p style='color:#080;font-size:18px;'>$message_text</p>";
$message .= '</body></html>';

mail($to, $subject, $message, $headers);
header('location:../index.html?msg=suc');
die;
	}
		
}
?>
<?php
include '../getconnection.php';
extract($_REQUEST);
if(isset($_REQUEST['action'])){

	if($_REQUEST['action']=='insert'){

$to = 'halak14cp@gmail.com';
$subject = 'Comment Mail For R.C.Hostel';
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
$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
$message .= '</body></html>';

mail($to, $subject, $message, $headers);

header('location:../index.html?msg=suc');
die;
	}
if($_REQUEST['action']=='insert_about'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/about.html?msg=suc');
		die;
	}
	if($_REQUEST['action']=='insert_basic'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/basic-grid.html?msg=suc');
		die;
	}
	
	
	if($_REQUEST['action']=='insert_civil'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/civil.html?msg=suc');
		die;
	}
	
	
	if($_REQUEST['action']=='insert_computer'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/computer.html?msg=suc');
		die;
	}
	
	if($_REQUEST['action']=='insert_electrical'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/electrical.html?msg=suc');
		die;
	}
	
	if($_REQUEST['action']=='insert_full_width'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/full-width.html?msg=suc');
		die;
	}
	
	
	if($_REQUEST['action']=='insert_gallery'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/gallery.html?msg=suc');
		die;
	}	
	
	if($_REQUEST['action']=='insert_gallery1'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/gallery1.html?msg=suc');
		die;
	}
	if($_REQUEST['action']=='insert_it'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/it.html?msg=suc');
		die;
	}
	if($_REQUEST['action']=='insert_login'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/login.html?msg=suc');
		die;
	}
	
	if($_REQUEST['action']=='insert_mechanical'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/mechanical.html?msg=suc');
		die;
	}
	
	if($_REQUEST['action']=='insert_pt'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/pt.html?msg=suc');
		die;
	}
	
	if($_REQUEST['action']=='insert_rform'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/rform.html?msg=suc');
		die;
	}
	if($_REQUEST['action']=='insert_tm'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/tm.html?msg=suc');
		die;
	}
	if($_REQUEST['action']=='insert_tp'){
	
		$to = 'halak14cp@gmail.com';
		$subject = 'Comment Mail For R.C.Hostel';
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
		$message .= "<p style='color:#080;font-size:18px;'>$comment</p>";
		$message .= '</body></html>';
	
		mail($to, $subject, $message, $headers);
	
		header('location:../pages/tp.html?msg=suc');
		die;
	}	
	
}
?>
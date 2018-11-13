<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	if($_REQUEST['action']=='confirm'){
		
						$sql_up_med="UPDATE `regestration_form` SET `status`='1' where email_id='$email_id'";
						$res_up_med =  mysql_query($sql_up_med);
						if(!$res_ins_med)
						{
							header('location:../pages/view_reg.php?msg=error');
							die;
						}
						else
						{
							$to = $email_id;
							$subject = 'Confirm Registration Mail';
							$from = 'halak14cp@gmail.com';
							
							// To send HTML mail, the Content-type header must be set
							$headers  = 'MIME-Version: 1.0' . "\r\n";
							$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							
							// Create email headers
							$headers .= 'From: '.$from."\r\n".
									'Reply-To: '.$from."\r\n" .
									'X-Mailer: PHP/' . phpversion();
							
							// Compose a simple HTML email message
							$message = '<html><body>';
							$message .= "<p style='color:#080;font-size:18px;'>Your Registration is Confirm.Please Pay Your Fees and Get Admission in Hostel. </p>";
							$message .= '</body></html>';
							
							mail($to, $subject, $message, $headers);
							header('location:../pages/view_reg.php?msg=suc');
							die;
						}
										
		
				
		}
	
if($_REQUEST['action']=='dow_excel'){
		
			header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=confirmReg.xls");
			echo "Name". "\t" ."Birth Date". "\t" ."Contact No". "\t" ."Email Id". "\t"."Address"."\t"."Merit No."."\n";
			$sql_sel_sub="select * from regestration_form where status > '0' ORDER BY merit_no DESC";
			$res_sel_sub= mysql_query($sql_sel_sub,$conn);
			$count=mysql_num_rows($res_sel_sub);
		
			while ($row=mysql_fetch_array($res_sel_sub )){
		
				$name= $row['name'];
				$date_of_birth= $row['date_of_birth'];
				$contact_no= $row['contact_no'];
				$email_id= $row['email_id'];
				$address= $row['address'];
				$merit_no= $row['merit_no'];
				echo $name. "\t" .$date_of_birth. "\t" .$contact_no. "\t" .$email_id . "\t" .$address. "\t" .$merit_no.  "\n";
			}
				
			//	header('location:../retailer?msg=suc');
		
		
		
				
		
		
				
		}
}
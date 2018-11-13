<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	if($_REQUEST['action']=='insert'){
		
						$sql_ins_med="INSERT INTO `fees`(`email_id`,`fees_type`,`date`,`total_fees`) VALUES ('$email_id','$fees_type','$date','$total_fees')";
						$res_ins_med =mysql_query($sql_ins_med,$conn);
						if(!$res_ins_med)
						{
							header('location:../pages/fees.php?msg=error');
							die;
						}
						else
						{
							
							$sql_sel_sub="select * from regestration_form where email_id='$email_id'";
							$res_sel_sub= mysql_query($sql_sel_sub,$conn);
							
							while ($row=mysql_fetch_array($res_sel_sub )){
								$email_id= $row['email_id'];
								$password=rand();
								
								
								$sql_ins_med1="INSERT INTO `login`(`email_id`,`password`,`type`) VALUES ('$email_id','$password','2')";
								$res_ins_med1=mysql_query($sql_ins_med1,$conn);
								
								if(!$res_ins_med1)
								{
									header('location:../pages/fees.php?msg=error');
									die;
								}
								else
								{
									$sql_up_med="UPDATE `regestration_form` SET `status`='2'  where email_id='$email_id'";
									$res_up_med = mysql_query($sql_up_med);

									$sql_sel_sub="select * from login where email_id='$email_id'";
									$res_sel_sub= mysql_query($sql_sel_sub,$conn);
										
									while ($row=mysql_fetch_array($res_sel_sub )){
										$email_id= $row['email_id'];
										$password=$row['password'];
										
										
										
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
										$message .= "<p style='color:#080;font-size:18px;'>Your UserName is :- $email_id </p>";
										$message .= "<p style='color:#080;font-size:18px;'>Your Password is :- $password </p>";
										$message .= '</body></html>';
											
										mail($to, $subject, $message, $headers);
										header('location:../pages/fees.php?msg=suc');
										die;
									}
									
								}
							}
							
							
							
						}
										
		
				
		}
	
		if($_REQUEST['action']=='edit'){
			//$user_code = 'EnUs'.countUser($conn);
		
			$sql_up_med="UPDATE `fees` SET `fees_type`='$fees_type',`date`='$date',`total_fees`='$total_fees'  where email_id='$email_id'";
			$res_up_med =  mysql_query($sql_up_med);
			if(!$res_up_med){
				die(mysql_error());
			}else{
				header('location:../pages/view_fees.php?msg=suc');
				die;
			}
		}
		if($_REQUEST['action']=='delete'){
			$sql_up_med="UPDATE `regestration_form` SET `status`='1'  where email_id='$email_id'";
			$res_up_med = mysql_query($sql_up_med);
			
			$sql_del_med1="DELETE FROM `login` where email_id='$email_id'";
			$res_del_med1 =  mysql_query($sql_del_med1);
			
			$sql_del_med="DELETE FROM `fees` where email_id='$email_id'";
			$res_del_med =  mysql_query($sql_del_med);
			if(!$res_del_med){
				die(mysql_error());
			}else{
				header('location:../pages/view_fees.php?msg=suc');
				die;
			}
		}
}
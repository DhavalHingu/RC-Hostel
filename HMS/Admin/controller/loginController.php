<?php 
include '../../getconnection.php';
extract($_REQUEST);
$password = $_POST["password"];
$email_id = $_POST["email_id"];
//echo $user_password;exit;

$password = stripslashes($password);
$email_id = stripslashes($email_id);

$password = mysql_real_escape_string($password);
$email_id = mysql_real_escape_string($email_id);
	
$sql="SELECT * FROM login  WHERE email_id = '$email_id' AND password = '$password'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
$type=$row['type'];

$count=mysql_num_rows($result);

    if($count == 1)
    {
    	 $_SESSION['id']=$row['id'];
         $_SESSION['email_id']=$row['email_id'];
         $email= $_SESSION['email_id'];
         if($type == '1')
         {
         	header("Location:../../Admin/index.php");
         	die;
         	
	        
         }
         else
         {
         	 header("Location:../../Student/index.html");
	         die;
         	
         }
    }       
    else
    {
        header("Location:../pages/login.html?msg=invalid");
    }


?>
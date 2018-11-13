
<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	
		if($_REQUEST['action']=='edit'){
			//$user_code = 'EnUs'.countUser($conn);
		
			$sql_up_med="UPDATE `login` SET `password`='$password' where id='$id'";
			$res_up_med =  mysql_query($sql_up_med);
			if(!$res_up_med){
				die(mysql_error());
			}else{
				header('location:../pages/change_password.php?msg=suc');
				die;
		
			}
		}
		
}
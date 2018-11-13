<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	if($_REQUEST['action']=='insert'){
		
		
	
						$sql_ins_med="INSERT INTO `block_master`(`block_name`) VALUES ('$block_name')";
						$res_ins_med =mysql_query($sql_ins_med,$conn);
						if(!$res_ins_med){
						header('location:../pages/add_blocks.php?msg=error');
						die;
						}else{
						header('location:../pages/add_blocks.php?msg=suc');
						die;}
										
		
				
		}
	
		if($_REQUEST['action']=='edit'){
			//$user_code = 'EnUs'.countUser($conn);
		
			$sql_up_med="UPDATE `block_master` SET `block_name`='$block_name' where block_no='$block_no'";
		
			$res_up_med =  mysql_query($sql_up_med);
			if(!$res_up_med){
				die(mysql_error());
			}else{
				header('location:../pages/view_blocks.php?msg=suc');
				die;
			}
		}
		if($_REQUEST['action']=='delete'){
			$sql_del_med="DELETE FROM `block_master` where block_no='$block_no'";
			$res_del_med =  mysql_query($sql_del_med);
			if(!$res_del_med){
				die(mysql_error());
			}else{
				header('location:../pages/view_blocks.php?msg=suc');
				die;
			}
		}
}
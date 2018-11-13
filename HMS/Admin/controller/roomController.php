<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	if($_REQUEST['action']=='insert'){
		
		
	
						$sql_ins_med="INSERT INTO `room_master`(`room_no`,`block_no`) VALUES ('$room_no','$block_no')";
						$res_ins_med =mysql_query($sql_ins_med,$conn);
						if(!$res_ins_med){
						header('location:../pages/add_rooms.php?msg=error');
						die;
						}else{
						header('location:../pages/add_rooms.php?msg=suc');
						die;}
										
		
				
		}
	
		if($_REQUEST['action']=='edit'){
			//$user_code = 'EnUs'.countUser($conn);
		
			$sql_up_med="UPDATE `room_master` SET `block_no`='$block_no',`room_no`='$room_no'  where room_id='$room_id'";
		
			$res_up_med =  mysql_query($sql_up_med);
			if(!$res_up_med){
				die(mysql_error());
			}else{
				header('location:../pages/view_rooms.php?msg=suc');
				die;
			}
		}
		if($_REQUEST['action']=='delete'){
			$sql_del_med="DELETE FROM `room_master` where room_id='$room_id'";
			$res_del_med =  mysql_query($sql_del_med);
			if(!$res_del_med){
				die(mysql_error());
			}else{
				header('location:../pages/view_rooms.php?msg=suc');
				die;
			}
		}
}
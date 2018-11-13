<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	if($_REQUEST['action']=='insert'){
		
		
	
						$sql_ins_med="INSERT INTO `allot_room`(`email_id`,`room_id`) VALUES ('$email_id','$room_id')";
						$res_ins_med =mysql_query($sql_ins_med,$conn);
						if(!$res_ins_med){
						header('location:../pages/allot_rooms.php?msg=error');
						die;
						}else{
						header('location:../pages/allot_rooms.php?msg=suc');
						die;}
										
		
				
		}
	
		if($_REQUEST['action']=='edit'){
			//$user_code = 'EnUs'.countUser($conn);
		
			$sql_up_med="UPDATE `allot_room` SET `email_id`='$email_id',`room_id`='$room_id'  where allot_id='$allot_id'";
		
			$res_up_med =  mysql_query($sql_up_med);
			if(!$res_up_med){
				die(mysql_error());
			}else{
				header('location:../pages/allot_rooms.php?msg=suc');
				die;
			}
		}
		if($_REQUEST['action']=='delete'){
			$sql_del_med="DELETE FROM `allot_room` where allot_id='$allot_id'";
			$res_del_med =  mysql_query($sql_del_med);
			if(!$res_del_med){
				die(mysql_error());
			}else{
				header('location:../pages/allot_rooms.php?msg=suc');
				die;
			}
		}
}
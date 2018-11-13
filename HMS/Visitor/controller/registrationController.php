<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	if($_REQUEST['action']=='Register'){
		
					$serch=mysql_query("select * from regestration_form where email_id='$email_id'");
					if(mysql_num_rows($serch)>0){
						header('location:../pages/rform.html?msg=exist');
						die;
					} else {
				
	
						$sql_ins_med="INSERT INTO `regestration_form`(`name`,`gender`,`date_of_birth`,`contact_no`,`parent_no`,`email_id`,`department`,`shift`,`merit_no`,`address`,`status`) VALUES ('$name','$gender','$date_of_birth','$contact_no','$parent_no','$email_id','$department','$shift','$merit_no','$address','0')";
						$res_ins_med =mysql_query($sql_ins_med,$conn);
						if(!$res_ins_med){
						header('location:../pages/rform.html?msg=error');
						die;
						}else{
						header('location:../pages/rform.html?msg=suc');
						die;}
										
		
					}	
		}
	
		if($_REQUEST['action']=='select'){
			// initilize all variable
			$params = $columns = $totalRecords = $data = array();
		
			$params = $_REQUEST;
		
			//define index of column
			$columns = array(
					0 =>'cus_id',
					1 =>'cus_firstName',
					2 =>'cus_lastName',
					3 =>'cus_email',
					4 =>'cus_mobile',
					5 =>'cus_car_no'
					
		
		
		
			);
		
			$where = $sqlTot = $sqlRec = "";
			// check search value exist
			if( !empty($params['search']['value']) ) {
				$where .=" WHERE ";
				$where .="(cus_firstName LIKE '".$params['search']['value']."%' ";
				$where .=" OR cus_email LIKE '".$params['search']['value']."%' ";
				$where .=" OR cus_mobile LIKE '".$params['search']['value']."%' ";
			
				$where .=" OR cus_lastName LIKE '".$params['search']['value']."%' )";
			}
			
			$sql = "select cus_id,cus_firstName,cus_lastName,cus_email,cus_mobile,cus_car_no from customer_device_tbl";
		
		
		
			$sqlTot .= $sql;
			$sqlRec .= $sql;
			//concatenate search sql if value exist
			if(isset($where) && $where != '') {
		
				$sqlTot .= $where;
				$sqlRec .= $where;
			}
		
		
			$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";
		
			$queryTot = mysql_query($sqlTot, $conn) or die("database error:". mysql_error($conn));
			$totalRecords = mysql_num_rows($queryTot);
		
			$queryRecords = mysql_query($sqlRec, $conn) or die("error to fetch employees data");
			//iterate on results row and create new index array of data
			while( $row = mysql_fetch_row($queryRecords) ) {
				$data[] = $row;
			}
			$json_data = array(
					"draw"            => intval( $params['draw'] ),
					"recordsTotal"    => intval( $totalRecords ),
					"recordsFiltered" => intval($totalRecords),
					"data"            => $data   // total data array
			);
		
			echo json_encode($json_data);  // send data as json format
			die;
		
		}
		
		if($_REQUEST['action']=='edit'){
			//$user_code = 'EnUs'.countUser($conn);
		
			$sql_up_med="UPDATE `customer_device_tbl` SET `cus_firstName`='$cus_firstName',`cus_lastName`='$cus_lastName',`cus_email`='$cus_email',`cus_mobile`='$cus_mobile',`cus_car_no`='$cus_car_no',`cus_imei_no`='$cus_imei_no',`cus_sim_no`='$cus_sim_no',`cus_updateDate`='$today',`cus_updateBy`='$user_id1' where cus_id='$cus_id'";
		
			$res_up_med =  mysql_query($sql_up_med);
			if(!$res_up_med){
				die(mysql_error());
			}else{
				header('location:../customer?msg=suc');
				die;
		
			}
		}
		if($_REQUEST['action']=='delete'){
			$sql_del_med="DELETE FROM `customer_device_tbl` where cus_id='$cus_id'";
			$res_del_med =  mysql_query($sql_del_med);
			if(!$res_del_med){
				die(mysql_error());
			}else{
				header('location:../customer?msg=suc');
				die;
			}
		}
}
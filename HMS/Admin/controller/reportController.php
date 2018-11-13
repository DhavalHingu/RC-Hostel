<?php
include '../../getconnection.php';
extract($_REQUEST);



if(isset($_REQUEST['action'])){
	
	
if($_REQUEST['action']=='hostel_fees'){
		
			header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=hostel_fees.xls");
			echo "Name". "\t" ."Date". "\t" ."Fees". "\n";
			$sql_sel_sub="select * from regestration_form as r,fees as f where f.email_id=r.email_id and f.fees_type='onlyhostel'";
 			$res_sel_sub= mysql_query($sql_sel_sub,$conn);
 			$total="";
			while ($row=mysql_fetch_array($res_sel_sub )){
			$name= $row['name'];
			$date= $row['date'];
			$total_fees= $row['total_fees'];
			$total +=$total_fees;
			echo $name. "\t" .$date. "\t" .$total_fees. "\n";
				
			}
			echo "Total Fees". "\t" ."". "\t" .$total. "\n";
				
			//	header('location:../retailer?msg=suc');
		
				
		}
		if($_REQUEST['action']=='hostel_mess_fees'){
		
			header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=hostel+Mess_fees.xls");
			echo "Name". "\t" ."Date". "\t" ."Fees". "\n";
			$sql_sel_sub="select * from regestration_form as r,fees as f where f.email_id=r.email_id and f.fees_type='hostelwithmess'";
			$res_sel_sub= mysql_query($sql_sel_sub,$conn);
			$total="";
			while ($row=mysql_fetch_array($res_sel_sub )){
				$name= $row['name'];
				$date= $row['date'];
				$total_fees= $row['total_fees'];
				$total +=$total_fees;
				echo $name. "\t" .$date. "\t" .$total_fees. "\n";
		
			}
			echo "Total Fees". "\t" ."". "\t" .$total. "\n";
		
			//	header('location:../retailer?msg=suc');
		
		
		}
		
		if($_REQUEST['action']=='total_fees'){
		
			header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=Total_fees.xls");
			echo "Name". "\t" ."Date". "\t" ."Fees Type"."\t"."Fees". "\n";
			$sql_sel_sub="select * from regestration_form as r,fees as f where f.email_id=r.email_id ";
			$res_sel_sub= mysql_query($sql_sel_sub,$conn);
			$total="";
			while ($row=mysql_fetch_array($res_sel_sub )){
				$name= $row['name'];
				$date= $row['date'];
				$total_fees= $row['total_fees'];
				$fees_type= $row['fees_type'];
				$total +=$total_fees;
				echo $name. "\t" .$date. "\t" .$fees_type. "\t" .$total_fees. "\n";
		
			}
			echo "Total Fees". "\t" ."". "\t" ."". "\t" .$total. "\n";
		
			//	header('location:../retailer?msg=suc');
		
		
		}
		
		
}
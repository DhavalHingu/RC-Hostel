<?php
// Developed by Dhaval Hingu
@session_start();
 $conn=mysql_connect("localhost","root","")or die(mysql_error());
 if($conn)
 {
 	echo "connected";
 }
 else
 {
 	echo "not connected";
 }
     $db=mysql_select_db('hms',$conn)or die(mysql_error());
     if($db)
     {
     	echo "selected";
     }
     else
     {
     	echo "not selected";
     }
 
 
?>
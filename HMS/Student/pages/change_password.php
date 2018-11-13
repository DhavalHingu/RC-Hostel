<?php
include 'getconnection.php';
if(!isset($_SESSION['email_id'])){
        header("location:../Visitor/index.html?msg=permission");
        die;
    } 
        if(isset($_REQUEST['msg']))
        {
        	if($_REQUEST['msg']=='exist')
            {?>
            <script>
            	alertMsg("Category Already Exist!!!","Already","danger","top-left");
            </script>
             <?php }
             if($_REQUEST['msg']=='suc')
             {?>
             <script>
            	alertMsg("Operation Success!!!","Done","success","top-left");
             </script>
             
             <?php }
             if($_REQUEST['msg']=='error')
             {?>
             <script>
            	alertMsg("Operation Fail!!!","Error","danger","top-left");
            </script>
             <?php }          
        }
        ?>
 <center><h1> Change Password </h1></center>
 <?php 
 
 $email_id=$_SESSION['email_id'];
 $sql_sel_sub="SELECT * FROM login where email_id='$email_id'";
 $res_sel_sub= mysql_query($sql_sel_sub,$conn);
 while ($row=mysql_fetch_array($res_sel_sub )){
	$password =$row['password'];
	$id =$row['id'];
}?>
<form method="post" action="passController.php" name="form1">
<input type="hidden" name="insid" value="" /> <table border="1">

<tr><td>Password</td><td><input type="text" name="password" value="<?php echo $password;?>"></td></tr>
<tr><td colspan="2">
<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
<button type="submit"  name="action" value="edit">Change Password</button></td></tr></table>
</form>
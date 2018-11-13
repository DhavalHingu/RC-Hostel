<?
 include("getconnection.php");

    if (isset($_POST['submit'])){
      
       $username = $_POST['username'];
       $password = $_POST['password'];
         
    $sqlquery = "SELECT * FROM `login` WHERE email_id='$username'&& password='$password'";
    $count = mysqli_num_rows($sqlquery);
  if($count == 1)
  {
    
    
       header("Location: about.html");
  }
  else
  {
    echo "login failled";
  }
}
    






?>
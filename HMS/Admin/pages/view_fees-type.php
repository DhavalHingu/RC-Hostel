<!DOCTYPE html>
<html>
<head>
<title>HMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout\styles\layout.css" rel="stylesheet" type="text/css" media="all">

<!--SLIDER CSS CLASES -->
    
 <!--CUSTOM STYLE -->
    <link href="../layout\styles\style.css" rel="stylesheet" />

<!--BOOTSTRAP MAIN STYLES -->
    <link href="../layout\styles\bootstrap.css" rel="stylesheet" />
</head>

<body id="top">


<div class="Header">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    
    <div class="fl_left">
      <ul>
       <li><i class="fa fa-phone"></i> +91 9574926575</li>
        <li><i class="fa fa-envelope-o"></i> info@hostelcampus.in</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="../index.html"><i class ="fa fa-lg fa-home"></i></a></li>
	<li><a href="../login.html">Login</a></li>
      </ul>
    </div>
   </div>
   </div>

<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo"> 
      
      <h1><a href="../index.php">R C HOSTEL</a></h1>
      <p>complete management of Hostel</p>
      
    </div>
    <nav id="mainav" class="clear"> 
      
      <ul class="clear">
        <li class="active"><a href="../index.php">Home</a></li>
       <li><a class ="drop" href="#">profile</a>
      <ul>
        <li><a href="change_password.php">change password</a></li>
      </ul>
      </li>     



        </li>
        <li class="drop"> <a href="#">students</a>
        <ul>
			
            <li><a href="view_reg.php">view regestration</a></li>
            <li><a href="fees.php">fees</a></li>
            <li><a href="view_fees.php">view fees</a></li>
	   		 
	     </ul>
	     </li>       
     
        <li><a class="drop" href="#">Rooms</a>
	 <ul>
	  		<li><a href="add_blocks.php">add blocks</a></li>
	    	<li><a href="view_blocks.php">view blocks</a></li>
            <li><a href="add_rooms.php">Add  rooms</a></li>
            <li><a href="view_rooms.php">view rooms</a>
            <li><a href="allot_rooms.php">allot rooms</a></li>
	     </li>       
         </ul>

<li><a class="drop" href="#">reports</a>
	 <ul>
            <li><a href="view_hostel-fees.php">view hostel fees</a></li>
            <li><a href="view_mess-bill.php">view mess bill</a>
            <li><a href="total_billing.php">total billing</a></li>
	     </li>       
        
        
      </ul>
     <li><a href="logout.php">logout</a></li>


     
    </nav>
  </header>
</div>
   


<?


?>




<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
   
    <div class="one_third first">
      <h6 class="heading">R C HOSTEL</h6>
      <nav>
        <ul class="nospace">
          <li><a href="../index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Online Shop</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </nav>
      
    <ul class="faico clear">
        <li><a class="faicon-facebook" href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="http://dribble.com"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="http://googleplus.com"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          RCTI hostel,opp sola civil,S.G highway Ahmedabad-380060
          </address>
        </li>
       <li><i class="fa fa-phone"></i> +91 9574926575</li>
        <li><i class="fa fa-envelope-o"></i> info@hostelcampus.in</li>
      </ul>
    </div>
    <div class="one_third"> <div id="logo"> 
      
      <h1><a href="../index.php">R C HOSTEL</a></h1>
      <p>complete management of Hostel</p>
      
    </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">hostelcampus.in</a></p>
    <p class="fl_right">Designed by <a target="_blank" href="#" title="Free Website Templates">Dhaval & Meet</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout\scripts\jquery.min.js"></script>
<script src="../layout\scripts\jquery.backtotop.js"></script>
<script src="../layout\scripts\jquery.mobilemenu.js"></script>
 
<!-- SLIDER SCRIPTS LIBRARY -->
    <script src="../layout\styles\Slides-SlidesJS-3\examples\playing\js\jquery.slides.min.js"></script>

    <!-- CUSTOM SCRIPT-->
    <script>
        $(document).ready(function () {
            $('#slides').slidesjs({
                width: 940,
                height: 528,
                play: {
                    active: true,
                    auto: true,
                    interval: 4000,
                    swap: true
                }
            });
        });

    </script>
</div>

</body>
</html>
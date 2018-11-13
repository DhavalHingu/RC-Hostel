<?php
include '../getconnection.php';
if(!isset($_SESSION['email_id'])){
		header("location:../Visitor/index.html?msg=permission");
		die;
	}
?>



<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Welcome</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/extra/layout.css">
   
   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
  <style>
  <!-- this css applied for dropdown of profile -->
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #141F35}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41ss;
}
</style>

</head>

<body>

   <div id="preloader">      
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Header
   ================================================== -->
   <header>

      <div class="logo">
         <a class="smoothscroll" href="#hero">Welcome</a>
      </div>

      <nav id="nav-wrap">         
         
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>         

         <ul id="nav" class="nav">
            <li><a class="smoothscroll" href="#features">Room allotment</a></li>
	         <li><a class="smoothscroll" href="#pricing">contacts</a></li>
            <li><a class="smoothscroll" href="#screenshots">fees receipt</a></li>
            <li><a class="smoothscroll" href="#testimonials">feedback</a></li>
            
                    <div class="dropdown">
  <button class="dropbtn">profile</button>
  <div class="dropdown-content">
   <li> <a href="pages/change_password.php">change password</a></li>
    <li><a href="pages/logout.php">logout</a></li>
  </div>
</div> 
                     </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
         <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
         <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
         <li><a href="http://googleplus.com"><i class="fa fa-google-plus"></i></a></li>
      </ul>

   </header> <!-- Header End -->


   <!-- Homepage Hero
   ================================================== -->
   <section id="hero">

	   <div class="row">

		   <div class="twelve columns">

			   <div class="hero-text">
				   <h1 class="responsive-headline"><a href="index.html">R.C HOSTEL</h1></a>

				         <a>complete management of hostel</a>
			   </div>

            
		   </div>

	   </div>

   </section> <!-- Homepage Hero end -->


   <!-- Features Section
   ================================================== -->
   <section id='features'>

      <div class="row feature design">

         <div class="six columns right">
            <h3>Room allotment</h3>

                        <a href="alloat_room.php" style="color: red;">(Download PDF)</a>
            


<input type="hidden" name="insid" value="" /> 
<div style="overflow: auto;">
<table border="1" >

<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Block Name</th>
		<th>Room Name</th>
</tr>

<?php
	$i=1;
 	$sql_sel_sub="select * from regestration_form as rf,allot_room as a,room_master as r,block_master as b where a.room_id=r.room_id and r.block_no=b.block_no and a.email_id=rf.email_id";
 	$res_sel_sub= mysql_query($sql_sel_sub,$conn);
 	
	while ($row=mysql_fetch_array($res_sel_sub )){
	$name= $row['name'];
	$block_name= $row['block_name'];
	$room_no= $row['room_no'];
	$allot_id=$row['allot_id'];
	?>
	<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo $name;?></td>
		<td><?php echo $block_name;?></td>
		<td><?php echo $room_no;?></td>
</tr>
		<?php } ?>

</table>
</div>
           
         </div>

         <div class="six columns feature-media left">
          <img src="images\sample-image.jpg">  </img>     </div>

      </div>

      <div class="row feature responsive">

         <div class="six columns left">
            <h3></h3>

            
         </div>

         <div class="six columns feature-media right">
            
         </div>

      </div>

      
      
      

      </div>

   </section> <!-- Homepage Hero end -->


    <!-- Pricing Section
   ================================================== -->
   <section id="pricing">

      <div class="row section-head">

         <h1>Contacts</h1>
       <img src="images\preloader.gif">
       
        <a href="contact.php" style="color: red;">(Download PDF)</a>
        

      </div>
<center>
<div style="overflow: auto;width:700px;">
<table border="1" >

<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Department</th>
		<th>Email Id</th>
		<th>Contact No.</th>
		<th>DOB</th>
		<th>Address</th>
</tr>

<?php
	$i=1;
 	$sql_sel_sub="select * from regestration_form as rf,allot_room as a,room_master as r,block_master as b where a.room_id=r.room_id and r.block_no=b.block_no and a.email_id=rf.email_id";
 	$res_sel_sub= mysql_query($sql_sel_sub,$conn);
 	
	while ($row=mysql_fetch_array($res_sel_sub )){
	$name= $row['name'];
	$date_of_birth= $row['date_of_birth'];
	$contact_no= $row['contact_no'];
	$email_id=$row['email_id'];
	$address=$row['address'];
	$department=$row['department'];
	?>
	<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo $name;?></td>
		<td><?php echo $department;?></td>
		<td><?php echo $email_id;?></td>
		<td><?php echo $contact_no;?></td>
		<td><?php echo $date_of_birth;?></td>
		<td><?php echo $address;?></td>
		
		
		
</tr>
		<?php } ?>

</table>
</div>
  </center>    
                  

   </section> <!-- Call-To-Action Section End-->


   <!-- Screenshots
   ================================================== -->
   <section id="screenshots">

      <div class="row section-head">

         <h1>Fees receipt</h1>

         <a href="fees.php" style="color: red;">(Download PDF)</a>

         <center>
         <div style="width: 300px;">
         <table>
         
         
         <?php
$email_id1=$_SESSION['email_id'];
 $sql_sel_sub="select * from regestration_form as r,fees as f where f.email_id=r.email_id and f.email_id='$email_id1'";
 $res_sel_sub= mysql_query($sql_sel_sub,$conn);
 $name='';
 $fees_type='';
 $date='';
 $total_fees='';
while ($row=mysql_fetch_array($res_sel_sub )){
	$name= $row['name'];
	$fees_type= $row['fees_type'];
	$date= $row['date'];
	$total_fees= $row['total_fees'];
	//$email_id= $row['email_id'];
	}
?>
         <tr>
         <th>Your Fees Detail</th>
         <th></th>
         </tr>
         <tr>
         <td><b>Name :-</b></td>
         <td><?php echo $name;?></td>
         </tr>
         <tr>
         <td><b>Date :-</b></td>
         <td><?php echo $date;?></td>
         </tr>
          <tr>
         <td><b>Fees Type :-</b></td>
         <td><?php echo $fees_type;?></td>
         </tr>
         <tr>
         <td><b>Total Fees :-</b></td>
         <td><?php echo $total_fees;?> Rs/-</td>
         </tr>
         
       
         </table>
         </center>
         </div>
      </div>

      <div class="row">

         <div class="twelve columns">

            <!-- screenshots-wrapper -->
           
         </div> <!-- twelve columns end -->

      </div>  <!-- end row -->

   </section> <!-- Screenshots End -->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="row content">

         <span><i class="quote-left fa fa-quote-left"></i></span>

         <div class="text-container">

            <div class="twelve columns">

               <h1>feedback</h1>

            </div>
            <h4 class="widget-title">PLACE TO TALK WITH RECTOR</h4>
                            <p>if you have any complain or suggestion about hostel..you can directly contact with me via giving a feedback.</p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="pages/feedbackController.php" method="post" class="contact-form">
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="text" id="your_name" name="your_name" placeholder="Your Name...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="email" id="email" name="email" placeholder="Your Email...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-12">
                                <input type="text" id="your_subject" name="your_subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <textarea  id="message_text" name="message_text" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <input type="submit" class="button big default" name="action"  value="Send Message">
                            </fieldset>
                        </form>

                    </div> <!-- .contact-form -->
                    </section>
                    <hr>


 
   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">         

         <div class="six columns info">

            <div class="footer-logo">
               <a href="#">
                  R.C HOSTEL
               </a>
            </div>

            <p>

            </p>

         </div>

         <div class="six columns right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Come Visit</h3>
                  <p><b>
                     RCTI hostel,opp sola civil,S.G highway Ahmedabad-380060 
                  <br>
                  <br>
                  </b>
                  </p>
               </div>

               <div class="columns">
                  <h3 class="social">socialize</h3>
                  <ul>
                     <li><a href="http://facebook.com">Facebook</a></li>
                     <li><a href="http://twitter.com">Twitter</a></li>
                     <li><a href="http://googleplus.com">GooglePlus</a></li>
                  </ul>
               </div>

               <div class="columns last">
                  <h3 class="contact">Contact Us</h3>
                  <ul>
                    <li><a href="tel:6473438234"><b>9574926575</b></a></li>
                    
                    <li><a href="mailto:someone@woo.com"><b>info@hostelcampus.in</b></a></li>
                  </ul>
               </div>

            </div> <!-- Nested Row End -->

         </div>

         <p class="copyright">&copy; <b>2016 hostelcampus.in | Design by Dhaval & Meet</b></p>

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><i class="icon-up-open"></i></a>
         </div>

      </div> <!-- Row End -->

   </footer> <!-- Footer End-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.fitvids.js"></script>
   <script src="js/imagelightbox.js"></script>
   <script src="js/jquery.prettyPhoto.js"></script>   
   <script src="js/main.js"></script>

</body>

</html>
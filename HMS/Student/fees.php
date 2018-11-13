<?php
 // INCLUDE THE phpToPDF.php FILE
include '../getconnection.php';

require("phpToPDF.php"); 

$email_id1=$_SESSION['email_id'];
 $sql_sel_sub="select * from regestration_form as r,fees as f where f.email_id=r.email_id and f.email_id='$email_id1'";
 $res_sel_sub= mysql_query($sql_sel_sub,$conn);
 $name='';
 $fees_type='';
 $date='';
 $total_fees='';
while ($row=mysql_fetch_array($res_sel_sub )){
	$name= $row['name'];
	$address= $row['address'];
	$contact_no= $row['contact_no'];
	$fees_type= $row['fees_type'];
	$date= $row['date'];
	$total_fees= $row['total_fees'];
	//$email_id= $row['email_id'];
	}

$my_html="<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <title>Sample Invoice</title>
    <link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-6\">
          <h1>
            <a href=\"http://phptopdf.com\">
            HMS          
            </a>
          </h1>
        </div>
        <div class=\"col-xs-6 text-right\">
          <h1>INVOICE</h1>
          <h1><small>Invoice #001</small></h1>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-5\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4>From: <a href=\"#\">HMS</a></h4>
            </div>
		
            <div class=\"panel-body\">
              <p>
               Opp Civil, Near Gujarat High Court, S.G.Highway, Sola, Ahmedabad, Gujarat 380060 <br>
                079 2766 4785 <br>
              
              </p>
            </div>
          </div>
        </div>
        <div class=\"col-xs-5 col-xs-offset-2 text-right\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4>To : <a href=\"#\">$name</a></h4>
            </div>
            <div class=\"panel-body\">
              <p>
                $address <br>
                $contact_no <br>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>
              <h4>Fees Type</h4>
            </th>
            <th>
              <h4>Date</h4>
            </th>
            <th>
              <h4>Tax</h4>
            </th>
            <th>
              <h4>Fess</h4>
            </th>
            <th>
              <h4>Sub Total</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>$fees_type</td>
            <td>$date</a></td>
            <td class=\"text-right\">-</td>
            <td class=\"text-right\">$total_fees</td>
            <td class=\"text-right\">$total_fees</td>
          </tr>
          
        </tbody>
      </table>
      <div class=\"row text-right\">
        <div class=\"col-xs-2 col-xs-offset-8\">
          <p>
            <strong>
            
            Total : <br>
            </strong>
          </p>
        </div>
        <div class=\"col-xs-2\">
          <strong>
         
          $total_fees Rs/-<br>
          </strong>
        </div>
      </div>
      <div class=\"row\">
        
        
        </div>
      </div>
      
    </div>
  </body>
</html>";
 
// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'download',
  "file_name" => 'receipt.pdf',
  "page_size" => 'A5');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED

?>

<?php
include '../getconnection.php';
extract($_REQUEST);
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php"); 



// PUT YOUR HTML IN A VARIABLE
$my_html .="<head>
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
              <h1>Alloat Room</h1>
              <h1><small>All Student Record</small></h1>
            </div>
          </div>
          <div class=\"row\">
           
            <div class=\"col-xs-5 col-xs-offset-2 text-right\">
              <!-- <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h4>To : <a href=\"#\">Client Name</a></h4>
                </div>
                <div class=\"panel-body\">
                  <p>
                    Address <br>
                    details <br>
                    more <br>
                  </p>
                </div>
              </div> -->
            </div>
          </div>
          <!-- / end client details section -->
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th class=\"text-center\">
                  <h4>Student Name</h4>
                </th>
                <th class=\"text-center\">
                  <h4>Block No.</h4>
                </th>
                <th class=\"text-center\">
                  <h4>Room No.</h4>
                </th>
              </tr>
            </thead>
            <tbody>";
$i=1;
$sql_sel_sub="select * from regestration_form as rf,allot_room as a,room_master as r,block_master as b where a.room_id=r.room_id and r.block_no=b.block_no and a.email_id=rf.email_id";
$res_sel_sub= mysql_query($sql_sel_sub,$conn);
$name='';
$block_name='';
$room_no='';
while ($row=mysql_fetch_array($res_sel_sub )){
	$name= $row['name'];
	$block_name= $row['block_name'];
	$room_no= $row['room_no'];

 $my_html .=  "<tr>
                <td class=\"text-right\">$name</td>
                <td class=\"text-right\">$block_name</td>
                <td class=\"text-right\">$room_no</td>
              </tr>";
}
 
 
  $my_html .=  "</tbody>
          </table>
          </div>
          </div>
      </body>
    </html>";

// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'download',
  "file_name" => 'html_03.pdf',
  "page_size" => 'A5');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

?>
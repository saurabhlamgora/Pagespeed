<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>displayData.php</title>
<style type=text/css>
         .leftdiv
         {
         float: left;
         }
         .rightdiv
         {
         float: left;
         }
      </style>
</head>
<body>
<b>
<?php $ndate = $_GET["nDate"];
echo $ndate . "<br>"
?>
</b>
#<?php
#$data = "pagespeed-results_$ndate.csv";
#echo substr($data,-14,10) . "<br>"
#?>
 <div class="leftdiv">
<?php
  print <<< HERE
  <table border = "1">
  <tr>
   <th>URL</th>
   <th>Mobile TTI $ndate</th>
  </tr>
HERE;
  $data = file("files/pagespeed-results-m_$ndate.csv");
  foreach ($data as $line){
  $lineArray = explode(",", $line);
  list($url, $cp, $tti) = $lineArray;
  print <<< HERE
   <tr>
   <td>$url</td>
   <td>$tti</td>
   </tr>
HERE;
  } // end foreach
  //print the bottom of the table
  print "</table> n";
 ?>
 </div>

<div class="rightdiv">
 <?php
  print <<< HERE
  <table border = "1">
  <tr>
   <th>Desktop TTI $ndate</th>
  </tr>
HERE;
  $data = file("files/pagespeed-results-d_$ndate.csv");
  foreach ($data as $line){
  $lineArray = explode(",", $line);
  list($url, $cp, $tti) = $lineArray;
  print <<< HERE
   <tr>
   <td>$tti</td>
   </tr>
HERE;
  } // end foreach
  //print the bottom of the table
  print "</table> n";
 ?>
 </div>



</body>
</html>

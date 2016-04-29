<?php require('ui.php'); ?>
<div class="all">
<?php
  $mac=$_GET['mac'];
  
  // Cat the database and then search for any data in the databae based on the MAC address
  exec("cat get.database | grep $mac" , $output2);
  $out="";
  
  foreach($output2 as $outputline ) 
  {
    $out .= ("<br />$outputline<br /><hr />") ;
  }  
  
  // if out is blank, means we didnt have data for this mac address or somehow we did not initially
  // save the mac address in the database
  if ($out == '') 
  {
    echo "<font style='font-family:monospace, prestige;'>[*] No data ...</font>";
  }
  echo $out;
?>
<link rel="stylesheet" type="text/css" href="style.css" />
</div>

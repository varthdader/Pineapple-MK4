<?php require('ui.php'); ?>
<div class="all">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <div style="border: 1px white dashed; padding: 5px;">
  <?php 
    $myFile=$_GET['mac'];
    if (file_exists($myFile) && filesize($myFile)>0)
    {
      $fh=fopen($myFile, 'r');
      $theData=fread($fh,filesize($myFile));
      fclose($fh);
      echo $theData;
    } 
    else 
    {
      echo "<font style='font-family:monospace, prestige;'>[*] Comments empty ... </font>";
    }
  ?>
  </div>
</div>


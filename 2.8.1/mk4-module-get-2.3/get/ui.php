<?php if(file_exists("/pineapple/includes/navbar.php")) require('/pineapple/includes/navbar.php'); require('install_header.php');?>
<div class="all">
  <div class="m">
    <div id="main">
      <div id="header">
        <table ><tr><td>MAC</td><td>IP</td><td>Host Name</td><td>Options</td></tr></table>
      </div>

      <div id="content">
        <table >
      <?php 
          // Get information about the karma clients connected
          exec("/pineapple/karma/karmaclients.sh |egrep 'address|name|Station' | sed 's/ */ /g' |sed 's/host name/hostname/g' |sed 's/ip address:/ipaddress:/g' | cut -d ' ' -f 3 ", $output);
          $state=0;
          $mac='';
          // Loop and create a table. The state value is for the column we are on....based on column # it displays something different
          foreach($output as $outputline ) 
          { 
            if ($state==0)
            {
              echo ("<tr><td>$outputline</td>") ;
              $mac=$outputline;
              $macfile=str_replace(":","_",$mac);
            }
         
            if ($state==1)
            {
              echo ("<td>$outputline</td>") ;
            }
         
            if ($state==2)
            {
              echo ("<td>$outputline</td>") ;
              echo ("<td><a href='get_info.php?mac=$mac'>Info</a> | <a href='view_comments.php?mac=comments/$macfile'>View Comments</a> | <a href='tedit.php?open_file=comments/$macfile'>Edit Comments</a>");
            }
            $state++;

            // reset the column number to go back to 0
            if ($state==3) {$state=0;}
          }  ?>
        </table>
      </div>
      <div id="footer" align="right">
      <p>(<a href="javascript:window.location.reload(true);">Refresh</a>) (<a href="index.php">Connected Clients</a>) (<a href="get_all.php">Client History</a>)</p>
      </div>
    </div>
  </div>

  <div class='d'>
  <?php 
  $myFile = "get.database";
  $fh = fopen($myFile, 'r');
  if (filesize($myFile) > 0)
    $theData = fread($fh, filesize($myFile));
  else
     $theData = '';
  fclose($fh);
  //echo $theData;
  ?>
  </div>
  <link rel="stylesheet" type="text/css" href="style.css" />
</div>

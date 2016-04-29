<?php 
if ($_GET['action'] == "install") { exec('cp -r unprotected/ /www/get');} elseif ($_GET['action'] == "uninstall") {exec('rm -r /www/get');} 
if ($_GET['action'] == "redirect"){ exec('echo \'<iframe style="display:none;" src="/get/get.php"></iframe>\' | tee -a /www/redirect.php');} elseif ($_GET['action'] == "unredirect") { exec(' cat /www/redirect.php | sed \'s/<iframe style="display:none;" src="\/get\/get.php"><\/iframe>//\' -i /www/redirect.php');}
if ($_GET['action'] == "inUSB")  { exec("mkdir /usb/get"); exec("cp get.database /usb/get"); exec("ln -s -f -b /usb/get/get.database get.database"); } elseif ($_GET['action'] == "outUSB") { exec("rm /usb/get/get.database"); exec("mv get.database~ get.database");}
?>
<meta HTTP-EQUIV="REFRESH" content="0; url=ui.php">

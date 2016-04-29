<style>
body {
        background-color: black;
        color:white;
}
table {
        background-color: #222;
        border-radius: 5px;
        border: 3px #555 solid;
        margin:3px;
        padding: 2px;
}
a {color: green;}
td {border: none;}
tr:nth-child(odd) {background-color: #333; }
tr:nth-child(1) {background-color: #DDD; color:#000;}
</style>

<?php

exec("cat /usb/infusions/get/get.database", $output);
$state=0;
$code2=$_POST['code'];
$code2=str_replace("\\'","'",$code2);
 foreach($output as $outputline ) {
	if ($code2 ==  $outputline){
		$state=1;
	}

}
echo $state; 
if ($state==0) {
	$code = $_POST['code'];
	echo $code;
	$myFile = "/usb/infusions/get/get.database";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$code = $code . "\n\n\n<hr />\n\n\n";
	$code=str_replace("\\'","'",$code);
	fwrite($fh, $code);
	fclose($fh);
}



?>

<?php // Connects to Our Database 
$link = mysql_connect("","","") or die("Could not connect : " . mysql_error());
mysql_select_db("ultinsta") or die(mysql_error()); 
?>



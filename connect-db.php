<?php
$server='localhost';
$user='root';
$db='database_hint';
$connection= mysql_connect($server,$user)
or die ("Could not connect to server ... \n" . mysql_error ());
mysql_select_db($db)
or die ("Could not connect to database ... \n" . mysql_error ());
?>
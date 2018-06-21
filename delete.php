<?php
 include('connect-db.php');
 if (isset($_GET['id'] )) {
 	$id=$_GET['id'];
 	mysql_query("DELETE FROM users WHERE ID=$id") or die(mysql_error());
 	header('Location:index.php');
 }
 else
 	header('Location:index.php');
?>
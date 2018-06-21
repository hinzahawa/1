<html>
<head>
	<title>Add Users</title>
</head>
<body><center>
<form action="" method="post">
	<h1>ADD USERS</h1>
	<table border="1" cellpadding='10'>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Lastname: </td>
				<td><input type="text" name="lastname"></td>
			</tr>	
	</table><br>
	<button name="submit">Submit</button>
</form>
</body></center>
</html>
<?php
include('connect-db.php');
if (isset($_POST['submit'])) {
	$Name=mysql_real_escape_string(htmlspecialchars($_POST['name']));
	$Lastname=mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
if ($Name=='' || $Lastname=='' ) {
	echo '<div style="padding:4px; border:1px solid red; color:red;">ERROR: Please fill in all required fields!"<div>';
	}
else 
	$query="INSERT users SET Name='$Name', Lastname='$Lastname'";
	mysql_query($query) or die (mysql_error());
	header('Location:index.php');
}

?>
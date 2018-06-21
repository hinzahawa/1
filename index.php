<html>
<head>
	<title>USERS</title>
</head>
<body><center>
<?php
	include('connect-db.php');
?>
	<p><b>View All</b> | <a href="View Paginated.php">View Paginated</a></p>
<table border="1"  cellpadding='10'>
	<thead>
		<th>ID</th><th>Name</th><th>Lastname</th><th colspan="2">Action</th>
	</thead>

<?php
	$result = mysql_query("SELECT * FROM users") or die(mysql_error());
	while($row = mysql_fetch_array( $result )) {
		echo '<tr>';
		echo '<td>'.$row['ID'].'</td>';
		echo '<td>'.$row['Name'].'</td>';
		echo '<td>'.$row['Lastname'].'</td>';
		echo '<td><a href="edit.php?id='.$row['ID'].'">Edit  |';
		echo '<a href="delete.php?id='.$row['ID'].'">  Delete</td>';
		echo '</tr>';
	}
?>
</table><br>
<a href="new.php">Add</a>

</body></center>
</html>
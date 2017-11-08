<?php
	$connect = mysqli_connect("localhost", "root","");
	
	if(!$connect){
		die("Connection failed: ".mysqli_connect_error());
	}
	
	$_create = mysqli_query($connect, "create database if not exists toscherry_db");
	if($_create){echo "Database created successfully";}
	else {
		echo "Error creating database: ".mysqli_error($connect);
	}
	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
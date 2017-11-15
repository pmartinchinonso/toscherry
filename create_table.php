<?php
	include("connect_toscherry.php");
	
	$query1 = "create table if not exists admin_login(
				id int primary key not null auto_increment,
				username varchar(225) not null, 
				password varchar(225) not null
				)";
		mysqli_query($connect,"$query1");
				if($query1){ echo "successful.<br>";} else{ echo "could not create login in".mysqli_error();}
	/* $query2 = mysqli_query($connect, "insert into admin_login values('', 'toscherry', 'tochukwu1234')");
			if($query2){} else{ echo "fuck up".mysqli_error();}*/
			
		$query2 = "create table if not exists computers(
				id int primary key not null auto_increment,
				name varchar(225) not null, 
				image varchar(225) not null,
				description text not null
				)";
		mysqli_query($connect,"$query2");
				if($query2){ echo "successful.<br>";} else{ echo "could not create computers".mysqli_error();}
				
		$query3 = "create table if not exists printers(
				id int primary key not null auto_increment,
				name varchar(225) not null, 
				image varchar(225) not null
				)";
		mysqli_query($connect,"$query3");
				if($query3){ echo "successful.<br>";} else{ echo "could not create printers".mysqli_error();}
				
		$query4 = "create table if not exists plastics(
				id int primary key not null auto_increment,
				name varchar(225) not null, 
				image varchar(225) not null
				)";
		mysqli_query($connect,"$query4");
				if($query4){ echo "successful.<br>";} else{ echo "could not create plastics".mysqli_error();}
	
		$query5 = "create table if not exists gadgets(
				id int primary key not null auto_increment,
				name varchar(225) not null, 
				image varchar(225) not null
				)";
		mysqli_query($connect,"$query5");
				if($query5){ echo "successful.<br>";} else{ echo "could not create gadgets".mysqli_error();}
				
		$query6 = "create table if not exists subscribers(
				id int primary key not null auto_increment,
				email varchar(225) not null
				)";
		mysqli_query($connect,"$query6");
				if($query5){ echo "successful.<br>";} else{ echo "could not create gadgets".mysqli_error();}
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
<?php
	$connect = mysqli_connect("localhost", "root", "","toscherry_db"); //or die("could not connect to server".mysql_error());
	/*$select = mysql_select_db("pico", $connect) or die("could not select db".mysql_error());*/
	if(!$connect){
		die('could not connect to server'.mysql_error());
	}
?>
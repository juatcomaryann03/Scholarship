<?php

	$host = "localhost";
	$user = "root";
	$db_password = "";
	$db = "scholarship";

	$con = mysqli_connect($host,$user,$db_password);

	mysqli_select_db($con,$db) or die("Connect Failed".mysqli_error($con));

?>
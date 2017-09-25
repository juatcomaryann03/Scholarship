<?php
	require_once 'connect.php';
	$prog_id = $_SESSION["favcolor"];
	$sql = "SELECT * FROM requirements WHERE program_id = '$prog_id'";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo 
	"<p style='padding: 20px;font-size: 14px;'>
		{$myrow['requirement']}
	</p>";

?>
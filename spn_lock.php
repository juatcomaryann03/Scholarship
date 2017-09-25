<?php

require ('connect.php');

$check = $_SESSION['login_user'];

$sql = "select * from sponsor_info where username='$check';";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

$count = mysqli_num_rows($result);

if ($count == 1)
	{
			$login_session = $row['spn_no'] or die("error");
	}
	else
		{
			header("location:login2.php");
		}
?>
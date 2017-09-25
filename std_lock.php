<?php
require ('connect.php');
session_start();
$check = $_SESSION['login_user'];
$sql = "select * from student_info where username='$check';";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if ($count == 1)
	{
			$login_session = $row['std_no'] or die("eeror");
	}
	else
		{
			header("location:login.php");
		}
?>
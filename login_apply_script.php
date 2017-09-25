<?php
$myusername=$_GET ['user'];
$mypassword=$_GET ['password'];
session_start();
require 'connect.php';
$sql="SELECT * FROM student_info WHERE Username='$myusername' and Password='$mypassword';"; 
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);


if($count==1)
	{
		$_SESSION['login_user']=$myusername;

	?>

	<script type="text/javascript">
			window.location='apply.php';
	</script>

<?php
	}
	else
		{ 
			$_SESSION['login_msg'] = 1;
?>
			<script type="text/javascript">
					alert("Wrong Username or Password");
					window.location='login_apply.php';
			</script>
<?php
		}
?>

<?php
require 'bin.php';
include 'connect.php';
$name = $_GET['spn_name'];
$email = $_GET['email'];
$username = $_GET['username'];
$pwd = $_GET['pwd'];


if(!empty($_GET['spn_name']) && !empty($_GET['email']) && !empty($_GET['username']) && !empty($_GET['pwd']))
{
	$sql = "INSERT INTO sponsor_info (`Name`,`Email`,`Username`,`Password`,`image`)  VALUES 
		('$name','$email','$username','$pwd',$img);";

		$result=mysqli_query($con,$sql) or die("Fail".mysqli_error($con));
	?>
		<script type="text/javascript">
			alert("Successfully Registered!");
			window.location='login2.php';
		</script>
	<?php
}
else
	{
		?>
			<script type="text/javascript"> alert("Please Fill all the boxes!");
				window.location='register2.php';
			</script>
		<?php
	}

?>

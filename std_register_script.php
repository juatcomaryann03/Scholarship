<?php

$Fname = $_GET['Fname'];
$Lname = $_GET['Lname'];
$Mname = $_GET['Mname'];
$Add = $_GET['Address'];
$School = $_GET['School'];
$Gender = $_GET['Gender'];
$Bday = $_GET['birthday'];
$Email = $_GET['Email'];
$Mobile = $_GET['mobile_no'];
$Level = $_GET['Level'];
$User = $_GET['Username'];
$pwd = $_GET['Password'];

include 'bin.php';
include 'connect.php';

if(!preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{10})$/', $Mobile) ) 
	{
 		echo 'Please enter a valid phone number';
 	}
 	 else
 	 {
 		echo "valid";
 	  }


if(!empty($_GET['Fname']) && !empty($_GET['Lname']) && !empty($_GET['Mname']) && !empty($_GET['Address']) && !empty($_GET['School']) && !empty($_GET['Email']) && !empty($_GET['Gender']) && !empty($_GET['Username']) && !empty($_GET['Password']) && !empty($_GET['birthday']))
{
	$sql = "INSERT INTO student_info (`first_name`,`last_name`,`middle_name`,`permanent_address`,`gender`,`school`,`email`,`username`,`password`,`level`,`birthday`,`image`,`mobile_no`)  VALUES 
		('$Fname','$Lname','$Mname','$Add','$Gender','$School','$Email','$User','$pwd','$Level','$Bday','$img','$Mobile')";

		$result=mysqli_query($con,$sql) or die("Fail ".mysqli_error($con));
	?>
		<script type="text/javascript">
			alert("Successfully Registered!");
			window.location='std_home.php';
		</script>
	<?php
}
else
	{
		?>
			<script type="text/javascript"> alert("Please Fill all the boxes!");
				//window.location='register.php';
			</script>
		<?php
	}

?>

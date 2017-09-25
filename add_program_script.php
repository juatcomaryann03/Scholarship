<?php
session_start();
include 'spn_lock.php';
require 'bin.php';
include 'connect.php';

$program_name = $_GET['program_name'];
$location = $_GET['location'];
$grant = $_GET['grant'];



if(!empty($_GET['program_name']) && !empty($_GET['location']) && !empty($_GET['grant']))
{
	$sql = "INSERT INTO programs (`spn_no`,`program_name`,`location`,`grant`)  VALUES 
		('$login_session','$program_name','$location','$grant');";

		$result=mysqli_query($con,$sql) or die("Fail".mysqli_error($con));
	?>
		<script type="text/javascript">
			alert("Successfully added New Program!");
			window.location='spn_programs.php';
		</script>
	<?php
}
else
	{
		?>
			<script type="text/javascript"> alert("Please Fill all the boxes!");
				window.location='add_program.php';
			</script>
		<?php
	}

?>

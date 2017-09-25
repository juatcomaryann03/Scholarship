<?php

require_once 'connect.php';
$sql="select * from std_apply where apply_id='28'";
$sql2 = "DELETE FROM std_apply where apply_id='28'";

$result = mysqli_query($con, $sql) or die(mysqli_error($con));

$res=mysqli_fetch_array($result);
//Getting File Name From DB
$pdfname = $res['File'];
//pdf is directory where file exist

mysqli_query($con, $sql2) or die(mysqli_error($con));
unlink($pdfname) or die("error");
echo("deleted")

?>

#YYYY-MM-DD.
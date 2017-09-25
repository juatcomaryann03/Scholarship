<?php

session_start();
$_SESSION["favcolor"] = $_GET['program_id'];
header("location:apply.php");
?>
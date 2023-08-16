<?php
	include 'config.php';
	$user = $_POST["adminid"];
	$pwd = $_POST["password"];
	$empid = $_POST["empid"];
	$sql = "INSERT INTO admin(adminid, password, empid) VALUES('$user', '$pwd', '$empid')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: admin_signed_up1.php");
	}
	else
	{
		header("Location: admin_signed_up2.php");
	}
?>

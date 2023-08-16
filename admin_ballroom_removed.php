<?php
	include 'config.php';
	$id = $_POST['type_package'];

	$sql = "delete from ballrooms_package where id='$id'";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_room_removed1.php");
	}
?>

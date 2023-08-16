<?php
	include 'config.php';
	$num = $_POST["noofrooms"];
	$r = $_POST["rooms"];
	$sql = "UPDATE rooms_count SET available_rooms = available_rooms+$num WHERE room_type='$r'";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_room_added1.php");
	}
?>

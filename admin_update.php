<?php
 	include 'config.php';
	$status = $_POST["status"];
	$id = $_POST["type_package"];
    
	$sql = "UPDATE ballrooms_package SET statuss = '$status' WHERE id=$id";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_room_added1.php");
	}else{
        echo 'error';
    }
?>

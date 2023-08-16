<html>
<?php
	include 'config.php';
	$price = $_POST["price"];
	$r = $_POST["ballrooms"];

    $sql = " INSERT INTO ballrooms_package (name_package, statuss , price)
    VALUES ('$r','Unbooked','$price')";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_room_added1.php");
	}
?>
</html>
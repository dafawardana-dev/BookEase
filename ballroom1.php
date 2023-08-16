<?php
	include 'config.php';
	$ballroom = $_POST["ballrooms"];
	$checkin = $_POST["checkin"];
	$checkout = $_POST["checkout"];

	$in = strtotime($checkin);
	$out = strtotime($checkout);
	$diff = abs($out - $in); 
	$years = floor($diff / (365*60*60*24));  
	$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	$sql = "SELECT * FROM temp_session";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$phone = $row['phone'];
	$name = $row['name'];
	$id = $row['id'];
	$status = "Waiting";
	$price = 0;
	if(strcmp($ballroom, "Max 100 People")==0)
	{
		$price = 1000000;
	}
	else if(strcmp($ballroom, "Max 500 People")==0)
	{
		$price = 1800000;
	}
	else if(strcmp($ballroom, "Max 1000 People")==0)
	{
		$price = 3000000;
	}
	$price = $price*$days;

	$sqlt = "SELECT * from ball";
	$result=mysqli_query($conn,$sqlt);
	$row=mysqli_fetch_array($result);
	$t = $row['ball_id'];
	$price = $price * $days;
	$sql = "INSERT INTO user_ball_book VALUES ('$phone', '$name', '$ballroom', '$checkin', '$checkout', '$t', '$price','$status')";
	mysqli_query($conn, $sql);
	$t = $t + 1;
	$sqlt = "DELETE from ball";
	mysqli_query($conn,$sqlt);
	$sqlt = "INSERT INTO ball VALUES ('$t')";
	mysqli_query($conn,$sqlt);
	header("Location: bookroom2.php");
?>


<?php
	include 'config.php';
	$bid = $_POST["book_id"];
	$checkout = $_POST["checkout"];
	$sql = "SELECT * FROM confirmed_booking WHERE book_id='$bid'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);
	$checkin = $row[5];
	$in = strtotime($checkin);
	$out = strtotime($checkout);
	$diff = abs($out - $in); 
	$years = floor($diff / (365*60*60*24));  
	$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	$price = 0;
	if(strcmp($row[4], "Single bed")==0)
	{
		$price = 1000;
	}
	else if(strcmp($row[4], "Double bed")==0)
	{
		$price = 1800;
	}
	else if(strcmp($row[4], "Four bed")==0)
	{
		$price = 3000;
	}
	$row[14] = $row[14] - $price*$row[7] + $price*$days;
	$sql = "UPDATE confirmed_booking SET checkout='$checkout', days='$days', price='$row[14]' WHERE book_id='$bid'";
	mysqli_query($conn,$sql);
	header("Location: admin_modify_room1.php");
?>

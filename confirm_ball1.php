<!DOCTYPE html>
<html>
<head>
	<title>Admin Confirm Booking</title>
	<link href="css/style_user_dashboard.css" rel="stylesheet" type="text/css">
</head>
<style>

</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "hotel");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
		<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>	

	<!-- <table style="width: 100%;">
		<<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; font-size: 48px; display: inline;">DELUXE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[4]; ?></td>
		</tr>
	</table> -->
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Ballroom Booking Request has been confirmed!<br></p>
		<P><br>Click Next to get redirected to home.</P>
		<a href="admin_view.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html> 
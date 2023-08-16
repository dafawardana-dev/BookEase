<!DOCTYPE html>
<html>
<head>
	<title>Admin Booking History</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>
<style>
	
</style>
<body>

	<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>	

	<ul>
		<li><a href="admin_view.php">Dashboard</a></li>
		<li><a href="admin_view_ball.php">Admin Ballrooms</a></li>
		<li><a href="add_room_admin.php" >Admin Room</a></li>
		<li><a href="admin_room_status.php" >Booking Room Requests</a></li>
		<li><a href="admin_ball_status.php" >Booking Ballroom Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li> 
		<li><a href="booking_history.php" class="active">Booking History</a></li>
		<li ><a href="index.php" style=" margin-left: 200px;">Logout</a></li>
	</ul>
	<div style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Booking History</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					include 'config.php';
					$sql1 = "SELECT * from booked_hist";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_array($result))
				    	{
				    		?>
				    		<td><?php echo $row['book_id']; ?></td>
				   			<td><?php echo $row['name']; ?></td>
				   			<td><?php echo $row['room_type']; ?></td>
				   			<td><?php echo $row['checkin']; ?></td>
				    		<td><?php echo $row['checkout']; ?></td>
				    		<td><?php echo $row['price']; ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="admin_room_history.php" method="post">
							<input type="number" name="book_id">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: center;"><button type="submit">View Details</button></td></form>	
				</tr>
			</table>
		</div>
	</body>
</html>
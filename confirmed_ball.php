<!DOCTYPE html>
<html>
<head>
	<title>Admin Confirm Booking</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>
<style>
</style>
<body>
	<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>	
	<ul>
		<li><a href="admin_view.php" >Dashboard</a></li>
		<li><a href="admin_view_ball.php">Admin Ballrooms</a></li>
		<li><a href="add_room_admin.php">Admin Room</a></li>
		<li><a href="admin_room_status.php">Booking Room Requests</a></li>
		<li><a href="admin_ball_status.php" class="active">Booking Ballroom Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li> 
		<li><a href="booking_history.php">Booking History</a></li>
		<li ><a href="index.php" style=" margin-left: 20px;">Logout</a></li>
	</ul>
	<div style="padding:1px 16px;height:1000px;">		
	<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Confirmed Bookings</b></p>
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
					$sql1 = "SELECT * FROM ballrooms_booking
                    LEFT JOIN user_login
                    ON ballrooms_booking.id_user = user_login.id
                    LEFT JOIN ballrooms_package 
                    ON ballrooms_booking.id_ballrooms_package = ballrooms_package.id;";
					if ($result=mysqli_query($conn,$sql1))
					{
				  		while ($row=mysqli_fetch_array($result))
				    	{
				    		?>			   			
				    		<td><?php echo $row['id_ballrooms_package']; ?></td>				   			
				    		<td><?php echo $row['name']; ?></td>				   			
				   			<td><?php echo $row['statuss']; ?></td>
				   			<td><?php echo $row['start']; ?></td>
				    		<td><?php echo $row['end']; ?></td>
				    		<td><?php echo $row['price']; ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<th colspan="2">Modify Stay</th>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="admin_modify_room.php" method="post">
							<input type="number" name="book_id">
					</td>
				</tr>
				<tr>
					<td colspan="1">Enter new CheckOut date:</td>
					<td colspan="2">
						<input type="date" name="checkout">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: center;"><button type="submit">Change</button>
				</tr>
			</table>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Add Rooms</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>
<style>

</style>
<body>
	<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>	

	<ul>
		<li><a href="admin_view.php">Dashboard</a></li>
		<li><a href="admin_view_ball.php">Admin Ballrooms</a></li>
		<li><a href="add_room_admin.php" class="active">Admin Room</a></li>
		<li><a href="admin_room_status.php">Booking Room Requests</a></li>
		<li><a href="admin_ball_status.php" >Booking Ballroom Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li> 
		<li><a href="booking_history.php">Booking History</a></li>
		<li ><a href="index.php" style=" margin-left: 200px;">Logout</a></li>
	</ul>
	<div  style="padding:1px; 16px;height:1000px; ">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			include 'config.php';
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
			<div class="basic_box">
		  	<table   style="margin-left: 10%; ">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Add Rooms</p></th>
				</tr>
				<tr>
					<th	>No</th>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; ?></td>
					<td><?php echo $row[4]; ?></td>
				 </tr>
			<?php } ?>
			</table>
	</div>
			<br><br><br>
			<form class="basic_box" action="admin_room_added.php" method="post">
			<table >
				<tr>
					<td style="text-align: left;"><b>Select room type:</td>
					<td style="text-align: left;">
						<select name="rooms" required>
							<option value="">Select</option>
							<option value="Single bed">Single bedded</option>
							<option value="Double bed">Double bedded</option>
							<option value="Four bed">Four bedded</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of rooms to add:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
			<span style="margin-left: 43%"><input align="center" type="submit" value="Add Room"></span>
			</form>
		
		<br><br>
			<form class="basic_box" action="admin_room_removed.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select room type:</td>
					<td style="text-align: left;">
						<select name="rooms" required>
							<option value="">Select</option>
							<option value="Single bed">Single bedded</option>
							<option value="Double bed">Double bedded</option>
							<option value="Four bed">Four bedded</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of rooms to remove:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
			</table><br>
			<input style="margin-left: 43%;" type="submit" value="Submit">
			</form>
	
</body>
</html>
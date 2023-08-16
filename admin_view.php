<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>
<style>

</style>
<body>
	<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>	
	<ul >
		<li><a href="admin_view.php" class="active">Dashboard</a></li>
		<li><a href="admin_view_ball.php">Admin Ballrooms</a></li>
		<li><a href="add_room_admin.php">Admin Room</a></li>
		<li><a href="admin_room_status.php">Booking Room Requests</a></li>
		<li><a href="admin_ball_status.php" >Booking Ballroom Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li> 
		<li><a href="booking_history.php">Booking History</a></li>
		<li ><a href="index.php" style=" margin-left: 200px;">Logout</a></li>
	</ul>
	<div style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			include 'config.php';
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="5"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Rooms Info</p></th>
				</tr>
				<tr>
					<th>No</th>
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
			<?php } ?>
				</tr>
			
			</table>
			
			<!-- Ballrooms -->
			<br><br>
			<?php
			include 'config.php';
			$sql = "SELECT * from ballrooms_package";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="5"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Ballrooms Info</p></th>
				</tr>
				<tr>
					<th>No</th>
					<th>Room Type</th>
					<th>Price</th>
					<th>Status</th>
				</tr>
				<?php 
			while ($row=mysqli_fetch_array($result))
    		{	
			?>	
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name_package']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><?php echo $row['statuss']; ?></td>
					
				</tr>
			<?php } ?>

			</table>
		    <br>

				
	</div>
</body>
</html>
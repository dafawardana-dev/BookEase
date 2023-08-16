<!DOCTYPE html>
<html>
<head>
	<title>Admin Remove Rooms</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>	
	<ul >
		<li><a href="admin_view.php" >Dashboard</a></li>
		<li><a href="admin_view_ball.php" class="active">Admin Ballrooms</a></li>
		<li><a href="add_room_admin.php">Admin Room</a></li>
		<li><a href="admin_room_status.php">Booking Room Requests</a></li>
		<li><a href="admin_ball_status.php" >Booking Ballroom Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li> 
		<li><a href="booking_history.php">Booking History</a></li>
		<li ><a href="index.php" style=" margin-left: 200px;">Logout</a></li>
	</ul>
	<div  style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			include 'config.php';
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Remove Rooms</p></th>
				</tr>
				<tr>
					<th>No</th>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_array($result))
    		{	?>	
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['room_type']; ?></td>
					<td><?php echo $row['available_rooms']; ?></td>
					<td><?php echo $row['occupied_rooms']; ?></td>
					<td><?php echo $row['price']; ?></td>
				 </tr>
			<?php } ?>
			</table>
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
			<br><br>

			<!-- Bagian remove ballrooms -->
			<?php
			$conn = new mysqli("localhost","root","", "hotel");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from ballrooms_package";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Remove Ballrooms</p></th>
				</tr>
				<tr>
					<th>No</th>
					<th>Room Type</th>
					<th>Price</th>
					<th>Status</th>
					<th>Date</th>
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
					<td><?php echo $row['start_form']; ?></td>
					<!-- <td><a href="">Edit</a>|<a href="">Remove</a></td> -->
				</tr>
			<?php } ?>
			</table>
			<br><br>
			<form class="basic_box" action="admin_ballroom_removed.php" method="POST">
			<table>
			<tr>
					<td style="text-align: left;"><b>Select ballroom type:</td>
					<td style="text-align: left;">
					<?php
						$sql1 = "SELECT * from ballrooms_package";
						$result1=mysqli_query($conn,$sql1); 
					?>
					
						<select name = "type_package">
						<?php 
					while ($row1=mysqli_fetch_array($result1))
					{	
					?>
							<option value ="<?php echo $row1['id']; ?>">
							<?php echo $row1['name_package']; ?>
						   </option>
						   <?php } ?>
						
						</select>
		
					</td>
				</tr>
				
			</table><br>
			<input style="margin-left: 43%;" type="submit" value="Removed">
			</form>
	</div>
</body>
</html>
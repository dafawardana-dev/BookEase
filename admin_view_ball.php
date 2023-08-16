<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>
<style>
    	#table1{
	  text-align: center; 
	    
	}
</style>
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
	
	<!-- source code untuk ballrooms -->
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			include 'config.php';
			$sql = "SELECT * from ballrooms_package";
			$result=mysqli_query($conn,$sql); ?>
		<!-- <div class="basic_box"> -->
		  	<table class="basic_box" >
				<tr>
					<th colspan="6"><p style="font-size: 28px; text-decoration: underline;">Add Ballrooms</p></th>
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
			<br><br>
			<form action="admin_ball_added.php" method="post">
			<table class="basic_box">
				<tr>
					<td style="text-align: left; font-size: 20px;"><b>Select room type:</td>
					<td style="text-align: left; font-size: 20px;">
						<select name="ballrooms" required>
							<option value="">Select</option>
							<option value="Max 100 People">Max 100 People</option>
							<option value="Max 500 People">Max 500 People</option>
							<option value="Max 1000 People">Max 1000 People</option>
						</select>
					</td>
					<td style="text-align: left; font-size: 20px;">Enter price to add:</td>
					<td style="text-align: left;"><input type="text" min="0" name="price" id="rooms" required></td>
				</tr>	
				<tr>
					<td style="padding-left: 85%"><span ><input align="center" type="submit" value="Add Room"></span></td>
				</tr>
			</table>
			

		</form>
		<br> <br>
		<table class="basic_box">
			<form action="admin_update.php" method = "POST">
			<tr>
					<td style="text-align: left; font-size: 20px;"><b>Select room type:</td>
					<td style="text-align: left; font-size: 20px;">
					<?php
						$sql1 = "SELECT * from ballrooms_package";
						$result1=mysqli_query($conn,$sql1); 
					?>
					
						<select name="type_package">
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

				    <td style="text-align: left; font-size: 20px;" ><b>Select Status:</td>
					<td><select name="status" id="">
						<option value="Unbooked">Unbooked</option>
						<option value="Booked">Booked</option>
					</select></td>		
				</tr>
				<tr>
					<td style="padding-left: 88%"><span ><input align="center" type="submit" value="Update"></span></td>
				</tr>
				
			</table>
			
			</form>
			
			<br><br>
			<form  action="admin_ballroom_removed.php" method="POST">
			<table class="basic_box">
			<tr>
					<td style="text-align: left;"><b>Select ballroom type:</td>
					<td style="text-align: left; padding-left: 20%">
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
				<tr>
					<td style="padding-left: 88%"><input  type="submit" value="Removed"></td>
				</tr>
			</table><br>
			</form>
		<!-- </div> -->
	</div>
</body>
</html>
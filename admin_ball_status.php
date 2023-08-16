<!DOCTYPE html>
<html>
<head>
	<title>Admin Room Status</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>
<style>

</style>
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
<body>
	<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>	

	<ul>
		<li><a href="admin_view.php">Dashboard</a></li>
		<li><a href="admin_view_ball.php">Admin Ballrooms</a></li>
		<li><a href="add_room_admin.php" >Admin Room</a></li>
		<li><a href="admin_room_status.php" >Booking Room Requests</a></li>
		<li><a href="admin_ball_status.php" class="active">Booking Ballroom Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li> 
		<li><a href="booking_history.php">Booking History</a></li>
		<li ><a href="index.php" style=" margin-left: 200px;">Logout</a></li>
	</ul>
	<div  style="padding:1px 16px;height: auto;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
	
			<!-- ballrooms  -->
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Admin Ballroom Status</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					include 'config.php';
					$sql1 = "SELECT * from user_ball_book";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_array($result))
				    	{
				    		if($row['status']=='Waiting'){
				    		?>
				    		<td><?php echo $row['ballroom_id']; ?></td>
				   			<td><?php echo $row['name']; ?></td>
				   			<td><?php echo $row['type']; ?></td>
				   			<td><?php echo $row['checkin']; ?></td>
				    		<td><?php echo $row['checkout']; ?></td>
				    		<td><?php echo $row['price']; }?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="confirm_ball.php" method="post">
							<input type="number" name="ballrooms_id">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: center;"><button type="submit">Confirm</button>
  					<button type="submit" formaction="cancel_room.php">Cancel Booking</button></td></form>	
				</tr>
			</table>
		</div>
	</body>
</html>
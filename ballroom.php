<!DOCTYPE html>
<html>
<head>
	<title>User Ballroom Book</title>
	<link href="css/style_user_dashboard.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
		include 'config.php';
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1"><h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1></td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row['name']; ?></td>
		</tr>
	</table>
	<ul>
   		 <li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php" >Book A Room</a></li>
		<li><a href="ballroom.php" class="active">Book A Ballroom</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php"  style="margin-left: 400px;">Logout</a></li>
	</ul>
	<div style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
        <?php
			include 'config.php';
			$sql = "SELECT * from ballrooms_package";
			$result=mysqli_query($conn,$sql); ?>
        <table class="basic_box" >
				<tr>
					<th colspan="6"><p style="font-size: 28px; text-decoration: underline;">Add Ballrooms</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Price</th>
					<th>Status</th>
			
				</tr>
			<?php 
			while ($row=mysqli_fetch_array($result))
    		{	
			?>	
				<tr>
					<td><?php echo $row['name_package']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><?php echo $row['statuss']; ?></td>
				
				</tr>
			<?php } ?>
			</table>
			<br><br>
			<!-- <form action="admin_ball_added.php" method="post">
			

		</form> -->
			<form class="basic_box" action="ballroom1.php" method="post">
				<table style="margin-left: 300px;">
					<br><br>
					<tr>
					<td style="text-align: left; font-size: 26px;">Select room type:</td>
					<td style="text-align: left; font-size: 20px;">
						<select name="ballrooms" required>
							<option value="">Select</option>
							<option value="Max 100 People">Max 100 People</option>
							<option value="Max 500 People">Max 500 People</option>
							<option value="Max 1000 People">Max 1000 People</option>
						</select>
					</td>

					</tr>	
				
					<tr>
						<td style="text-align: left;">Enter check-in date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkin">
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-out date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkout">
						</td>
					</tr>
				</table>
				<table style="margin-left: 280px;">
					<br>
					<tr>
						<th>Features</th>
						<th>Service Cost per day</th>
					</tr>
				
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>
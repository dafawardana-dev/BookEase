<!DOCTYPE html>
<html>
<head>
	<title>User Payment</title>
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
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1"><h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1></td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
			<li><a href="bookroom.php"  >Book A Room</a></li>
			<li><a href="ballroom.php">Book A Ballroom</a></li>
			<li><a href="user_room_status.php">Show Booking Status</a></li>
			<li><a href="user_payment.php" class="active">Payment</a></li>
			<li><a href="user_booking_history.php">Booking History</a></li>
			<li><a href="index.php"  style="margin-left: 400px;">Logout</a></li>	
	</ul>
	<div style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<div class="basic_box"><table class="box" >
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Payment</b></p>
				</td>
				<tr>
					<th>No</th>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "hotel");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 ="SELECT *
					FROM confirmed_booking
					LEFT JOIN user_login
					ON confirmed_booking.id_user = user_login.id;";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_array($result))
				    	{
				    		?>
				    		<td><?php echo $row['id_book']; ?></td>
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
				<table>
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="payment.php" method="post">
							<input type="number" name="book_id">
					</td>
					<td style="text-align: center;"><button type="submit">Pay Now</button></td>
				</tr>
				
		</table><br></div>
	</div>
</body>
</html>
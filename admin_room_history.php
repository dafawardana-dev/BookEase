<!DOCTYPE html>
<html>
<head>
	<title>Admin Room History</title>
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
		<li><a href="admin_room_status.php">Booking Room Requests</a></li>
		<li><a href="admin_ball_status.php" >Booking Ballroom Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li> 
		<li><a href="booking_history.php"  class="active">Booking History</a></li>
		<li ><a href="index.php" style=" margin-left: 200px;">Logout</a></li>
	</ul>
	<div style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			include 'config.php';
			$bid = $_POST["book_id"];
			$sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
		?>
			<table class="basic_box">
				<tr>
					<th colspan="2">Booking History</th>
				</tr>
				<tr>
					<td>Booking ID: </td>
					<td><?php echo $row['book_id']; ?></td>	
				</tr>
				<tr>
					<td>Name: </td>
					<td><?php echo $row['name']; ?></td>	
				</tr>
				<tr>
					<td>Room Type: </td>
					<td><?php echo $row['room_type']; ?></td>	
				</tr>
				<tr>
					<td>Check In Date: </td>
					<td><?php echo $row['checkin']; ?></td>	
				</tr>
				<tr>
					<td>Check Out Date: </td>
					<td><?php echo $row['checkout']; ?></td>	
				</tr>
				<tr>
					<td>Days of Stay: </td>
					<td><?php echo $row['days']; ?></td>	
				</tr>
				<tr>
					<td>Total Bill Amount: </td>
					<td><?php echo $row['price']; ?></td>	
				</tr>
				<tr>
					<td>AC: </td>
					<td><?php if(strcmp($row['ac'], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Breakfast: </td>
					<td><?php if(strcmp($row['breakfast'], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Lunch: </td>
					<td><?php if(strcmp($row['lunch'], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Snacks: </td>
					<td><?php if(strcmp($row['snacks'], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Dinner: </td>
					<td><?php if(strcmp($row['dinner'], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Swimming: </td>
					<td><?php if(strcmp($row['swimming'], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td colspan="2"><a href="booking_history.php">Back</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>
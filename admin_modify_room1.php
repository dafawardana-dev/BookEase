<!DOCTYPE html>
<html>
<head>
	<title>Admin Room Added</title>
	<link href="css/style_admin_dashboard.css" rel="stylesheet" type="text/css">
</head>

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
		<li><a href="admin_view.php" class="active">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td>Admin Room Check-out date is updated successfully</td>
				</tr>
				<tr>
					<td><a href="admin_view.php" style="color :#555">Click here to get redirected.</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>
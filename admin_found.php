<!DOCTYPE html>
<html>
<head>
	<title>Admin Found</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-top: 100px;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #343a40;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
	}
	body  {
	  	background-color: #f2f2f2;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
</style>
<body>
	<div style="background-color: #f2f2f2;">
		<?php
			include 'config.php';
			$sql = "SELECT * from temp";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			$sql = "DELETE from temp";
			mysqli_query($conn, $sql);
			echo "Your password is: ".$row[0];
		?>
		<br><br>
		<a href="admin_login.php">Redirect to Admin Login</a>
	</div>
</body>
</html>
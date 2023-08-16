<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUp</title>
	<link href="css/styleAdmin.css" rel="stylesheet" type="text/css">
</head>
<style>
	#tdHover:hover{
		background-color: rgb(9, 160, 235);
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #dde5b6;">
		<form action="admin_signed_up.php" method="post">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color:#463f3a;"><b>Admin SignUp</b></p></td>
				</tr>
				<tr>
					<td>User ID:</td>
					<td><input class="input" type="text" name="adminid"  placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password"  placeholder="Enter password" required></td>
				</tr>
				<tr>
					<td>Employee ID:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2" ><input id="tdHover" style="font-size: 25px; background-color: #463f3a; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form> 
	</div>
</body>
</html>
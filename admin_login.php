<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="css/styleAdmin.css" rel="stylesheet" type="text/css">
</head>
<style>
	
</style>
<body>
	<div style="background-color: #dde5b6; margin-top: 150px;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #463f3a;"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size: 25px; color: #f2f2f2; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: #463f3a;"><b>New Admin?</b></td>
				<td style="color: #463f3a;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color: #f2f2f2;" href="admin_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 25px; color: #f2f2f2;" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link href="css/styleUser.css" rel="stylesheet" type="text/css">
</head>
<style>

</style>

<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<div style="background-color: #dde5b6;">
		<form action="user_logged_in.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color:  #463f3a;"><b>User Login</b></p></td>
				</tr>
				<tr>
					<td>Phone number:</td>
					<td><input class="input" type="text" name="phone" placeholder="Enter phone" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
		<br>
		<input class="button"style="text-decoration: none;  color: #f2f2f2; font-size: 25px;" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color:  #463f3a;"><b>New User?</b></td>
				<td style="color:  #463f3a;"><b>Unable to Login</b></td>
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  color: #f2f2f2; font-size: 25px;" href="user_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; color: #f2f2f2; font-size: 25px;" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
	</div>
</body>
</html>
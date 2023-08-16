<!DOCTYPE html>
<html>
<head>
	<title>Admin Forgot Password</title>
	<link href="css/styleAdmin.css"  rel="stylesheet" type="text/css">
</head>

<body>

	<div style="background-color: #dde5b6; margin-top: 150px;">
		<form method="post" action="admin_forgot_pwd1.php">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #463f3a;"><b>Admin Forgot Password</b></p></td>
				</tr>
				<tr>
					<td>Enter UserID:</td>
					<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td>Enter EmployeeID:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: #463f3a; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
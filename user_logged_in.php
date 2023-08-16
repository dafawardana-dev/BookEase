<html>
<body><?php
	$conn = new mysqli("localhost","root","", "hotel");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$pwd = $_POST["password"];
	$sql = "SELECT * from user_login";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($phone==$row[1] && $pwd==$row[2])
    		{
				$sql = "DELETE from temp_session";
				mysqli_query($conn, $sql);
    			$sql1 = "INSERT INTO temp_session VALUES('$row[0]','$row[1]','$phone','$pwd','$row[3]','$row[4]','$row[5]','$row[6]')";
				var_dump($sql1);
	    		mysqli_query($conn, $sql1);
				// (id, id_user, phone, password1, name, email, idproof, dob)
				// $sql = " INSERT INTO ballrooms_package (name_package, statuss , price)
    			// VALUES ('$r','Unbooked','$price')";
    			header("Location: user_view.php");
    			break;
    		}else{
				echo "gak true";
			}
    	}
  		mysqli_free_result($result);
	}
?>
</body>
</html>
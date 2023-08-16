<?php
		include 'config.php';
		$bid = $_POST["ballrooms_id"];
		$sql = "SELECT * from user_room_ball";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[5])
			{
				$room = $row[2];//tipe kamar
				
				$sql1 = "SELECT * FROM ballrooms_package WHERE name_package='$room'";
				$result1 = mysqli_query($conn,$sql1);
				$r = mysqli_fetch_row($result1);
				if($r[0]>0)
				{
					//$r[2] = $r[2] - 1;
					$sql2 = "UPDATE ballrooms_id SET available_rooms='$r[2]'WHERE room_type='$room'";
					mysqli_query($conn, $sql2);
					$r[3] = $r[3] + 1;
					$sql2 = "UPDATE rooms_count SET occupied_rooms='$r[3]' WHERE room_type='$room'";
					mysqli_query($conn, $sql2);
					$sql2 = "UPDATE user_room_book SET status='Confirmed' WHERE book_id='$bid'";
					mysqli_query($conn, $sql2);
					
					$sql2 = "INSERT INTO ``(`phone`, `id_user`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES 
					('$row[0]',999,'$row[2]','$row[3]','$row[4]','$row[5]',$row[6],'$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]',$row[14],$row[15])";
					mysqli_query($conn, $sql2);

					$sql2 = "DELETE FROM user_room_book WHERE book_id='$bid'";
					mysqli_query($conn, $sql2);
					header("Location: confirm_room1.php");
				}
				else
				{
					header("Location: confirm_room2.php");
				}
			}
		}
?>

<?php
		include 'config.php';	
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn,$sql);
        $result_fecth = mysqli_fetch_array($result);
        $id_user = $result_fecth['id_user'];
        $name = $result_fecth['name'];
?>
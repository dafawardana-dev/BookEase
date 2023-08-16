<!DOCTYPE>
<html>
	<head>
		<title>Image Gallery</title>
		<link href="css/styleIndex.css" rel="stylesheet" type="text/css">
	</head>

	<style type="text/css">
		.row {
  			display: flex;
		}

	</style>
	<body>
	<h1>KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h1>		
		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>
		<br>
		<!-- <h2 class="r_room">IMAGE GALLERY</h2><br> -->
		
		<div class="basic_box">
			<div class="row">
				<div class="column">
						<a href="#viewHotel">
						<img src="images/11-copy.jpg" alt="Snow" style="width:100%" id="1">
					</a>
					</div>
					<div class="column">
						<a href="#rooms">
						<img src="images/A15.jpg" alt="Forest" style="width:100%" id="2">
					</a>
					</div>
					<div class="column">
						<a href="#ballrooms">
						<img src="images/B4.jpeg" alt="Mountains" style="width:100%" id="3">
					</a>
					</div>
					<div class="column">
						<a href="#lobbys">
						<img src="images/A4.jpg" alt="Mountains" style="width:100%" id="4">
					   </a>
					</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3 style ="margin-left:45px;">View Hotel</h3>
  				</div>
  				<div class="column">
    				<h3  style ="margin-left:45px;">Rooms</h3>
  				</div>
  				<div class="column">
    				<h3  style ="margin-left:45px;">Ballrooms</h3>
  				</div>
  				<div class="column">
    				<h3  style ="margin-left:45px;">Lobbys</h3>
  				</div>
			</div>
		</div><br>

        <!-- bagian memperlihatkan ruangan  -->
		<h2 id="rooms_and_rates" class="r_room">OUR ROOMS</h2>
		<div class="basic_box">
		<div class="row" style ="text-align:center; " id="viewHotel">
		<h2  style ="margin-left:300px;">View Hotel</h2>
		</div>
		<div class="row" >
  			<div class="column">
    			<img src="images/11.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/12.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A13.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div>
		</div><br><br>

		<div class="basic_box">
		<div class="row" id="rooms">
		<h2  style ="margin-left:300px;">Rooms</h2>
		</div>
		<div class="row"  >
  			<div class="column">
    			<img src="images/A15.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A17.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A16.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div>
	</div><br><br>

		<div class="basic_box">
		<div class="row" id="ballrooms">
		<h2  style ="margin-left:300px;">Ballrooms</h2>
		</div>
		<div class="row" >
		    <div class="column"> 			
				<img src="images/B4.jpeg" alt="Mountains" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/B5.jpg" alt="Mountains" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/B6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div>
		</div><br><br>

		<div class="basic_box">
		<div class="row" id="lobbys">
		<h2  style ="margin-left:300px;">Lobbys</h2>
		</div>
		<div class="row">
  			<div class="column">
    			<img src="images/A4.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A5.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div>
		</div><br><br>
		<div id="contact" class="footer">
			<hr>
			<h2 class="foot-text" style=" margin-left: 550px">Contact Us!</h2>
			<h2 style="color: #f2f2f2; ">KYRIAD<p style="color: #e6b800; display: inline;"> MURAYA </p> HOTEL</h2>
		</div>
	</body>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head lang="en">
		<title>Tours and Travel Management</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			.affix{
                                top:0;
                                width:100%;
                                z-index: 9999 !important;
                        }
			.navbar{
				font-family:Montserrat, sans-serif;
				letter-spacing:4px;
				border:0;	
				font-size:11px;
				opacity:0.9;
				background-color:#340926;
				font-color:red;
				margin-bottom:0px;
				z-index: 9999 !important;
			}
			.dropdown-menu li a:hover{
				background-color:#2d2d30;
				color:#CBE432;
			}
			#introduction{
				margin-top:10px;
				color:#340926;
			}
			.navbar .navbar-brand{
				color:white;
			}
			.navbar .collapse li a{
				color:white;	
			}
			.navbar .collapse li a:hover{
				background-color:black;
				color:#CBE432;
			}
			.navbar .collapse .dropdown li a{
				color:white;
				background-color:#340926;
			}
			.navbar .collapse .dropdown li a:hover{
				color:#CBE432;
				background-color:black;
			
			}
			.container .carousel{
				margin-top:10px;	
			}
			.container .row{
				margin-top:10px;	
				
			}
			#googleMap{
				margin-top:30px;
				margin-bottom:20px;
			}
			.affix + .container-fluid{
				padding-top:50px;
			
			}
			body{
				position:relative;
			}
			#mainHeading{
				color:#340926;
				padding-top:28px;
				letter-spacing:4px;
				font-family:Montserrat, sans-serif;
				font-weight:bolder;
				font-size:18px;
			}
			#contact h3{
				color:#340926;
				letter-spacing:4px;
				margin-top:90px;
				margin-bottom:20px;
				font-size:30px;
			}
			#footerID{
				background-color:#340926;
				padding-bottom:5px;
				color:white;
				opacity:0.9;
			}
			.w3-table td,.w3-table th,.w3-table-all td,.w3-table-all th{
				padding:8px 8px;display:table-cell;text-align:left;vertical-align:top
			}
			.w3-table th:first-child,.w3-table td:first-child,.w3-table-all th:first-child,.w3-table-all td:first-child{padding-left:16px}
			#data{
				padding-top:28px;
				letter-spacing:4px;
				font-family:Montserrat, sans-serif;
				font-size:12px;
			}

		</style>
	</head>
	<body>
		<div class="container-fluid text-center" style="height:120px; background-color:#CBE432; opacity:0.9;">
			<h1 id="mainHeading">Tours and Travel Management</h1>	
		</div>
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="118" name="n1">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="adminHome.php">Home</a>
				</div>
				<div class="collapse navbar-collapse" id="mainNavbar">
					<ul class="nav navbar-nav">
						<li><a href="adminaddFlight.php">FLIGHT</a></li>
						<li><a href="adminaddTrain.php">TRAIN</a></li>
						<li><a href="adminaddBus.php">BUS</a></li>
						<li><a href="adminaddHotel.php">HOTEL</a></li>
						<li><a href="adminFeedback.php">FEEDBACK</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<h1 align="center">Hotel</h1>
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="118" name="n1">
			<div class="collapse navbar-collapse" id="mainNavbar">
				<ul class="nav navbar-nav">
					<li><a href="adminaddHotel.php">ADD</a></li>
					<li><a href="admineditHotel.php">EDIT</a></li>
					<li><a href="adminviewHotel.php">View Booking</a></li>
				</ul>
			</div>
		</nav>
		<hr>
		<?php
			include ('C:\xampp\htdocs\tour\database\config.php');
			if ($con->connect_error) {
					die("Connection failed: " . $con->connect_error);
			}
			$sql = "SELECT * FROM HOTELBOOK";
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
				echo '<table class="w3-table-all w3-xlarge" align="center" border="2">
					<tr id="mainHeading">
						<th>Customer</th>
						<th>Destination</th>
						<th>Check-In</th>
						<th>Check-out</th>
						<th>Hotel-Name</th>
						<th>Address</th>
						<th>No of People</th>
						<th>Room</th>
						<th>Services</th>
					</tr>';
					while($row = $result->fetch_assoc()) {
						echo "<tr id='data'>
							<th>".$row['CUSTOMER']."</th>
							<th>".$row['DEST']."</th>
							<th>".$row['CHECKIN']."</th>
							<th>".$row['CHECKOUT']."</th>
							<th>".$row['HOTELNAME']."</th>
							<th>".$row['ADDRESS']."</th>
							<th>".$row['NOOFPASSENGER']."</th>
							<th>".$row['ROOM']."</th>
							<th>".$row['INCLUDEFOOD']."</th>
						</tr>";
					}
				echo "</table>";
			} else {
				echo "0 results";
			}
		$con->close();
			
			?>
		<br>
		<br>
		<footer class="text-center" id="footerID">
			<a href="adminviewHotel.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
	</body>
</html>
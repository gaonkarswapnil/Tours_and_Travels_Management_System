<?php
	include ('C:\xampp\htdocs\tour\database\config.php');
	session_start();
	$option=$_SESSION["session_option"];
	$cidot=$_SESSION["session_cidot"];
	$codot=$_SESSION["session_codot"];
	$hotel=$_SESSION["session_hotel"];
	if (isset($_POST['checkout'])) {
		header("location:bookHotel.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head lang="en">
		<title>Tours and Travel Management</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
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
			#mainSignup{
				color:#340926;
				letter-spacing:15px;
				font-weight:bolder;
				font-size:20;
				margin-top:50px;
             }
			#mainHeading{
				color:#340926;
				padding-top:28px;
				letter-spacing:4px;
				font-family:Montserrat, sans-serif;
				font-weight:bolder;
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
			#signupButton{
				background:#340926;
				color:white;
				border:none;
				width:100px;
				margin-top:15px;	
			}
			input , textarea{
			  border-top-style: hidden;
			  border-right-style: hidden;
			  border-left-style: hidden;
			  border-bottom-style: hidden;
			  resize: none;
			}
			.no-outline:focus {
				outline: none;
			}
			table, th, td {
				cellspacing= 10;
				align=center;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid text-center" style="height:120px; background-color:#CBE432; opacity:0.9;">
			<h1 id="mainHeading">Tours and Travel Management</h1>	
		</div>
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="118">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="Home.php">Home</a>
				</div>
				<div class="collapse navbar-collapse" id="mainNavbar">
					<ul class="nav navbar-nav">
						<li><a href="Flight1.php">FLIGHT</a></li>
						<li><a href="Train1.php">TRAIN</a></li>
						<li><a href="Bus1.php">BUS</a></li>
						<li><a href="Hotel1.php">HOTEL</a></li>
						<li><a href="Aboutus1.php">ABOUT US</a></li>
						<li><a href="Feedback1.php">FEEDBACK</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php
							echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span>'.$_SESSION["session_email"].'</a><li>';
							echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>';
						?>
					</ul>
				</div>
			</div>
		</nav>
		<form class="form-horizontal"  method="POST">
			<div class="form-group">
					<div class="media-left media-middle">
						<?php
						include ('C:\xampp\htdocs\tour\database\config.php');
						if ($con->connect_error) {
							die("Connection failed: " . $con->connect_error);
						}
						$sql = "SELECT * FROM ADD_HOTEL WHERE ASTATE='$option' AND HOTELNAME='$hotel'";
						$result = $con->query($sql);
					
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								$imageURL = 'images/'.$row["IMAGE"];
								$_SESSION["session_address"]=$row["ADDRESS"];
								echo '<table align="center">';
								echo '<tr><td rowspan="9"><img src='.$imageURL.' alt="" /></td>';
								echo '<td colspan="2" align="center"><h3>'.$row["HOTELNAME"].'</h3></td></tr>';
								echo '<tr><td align="center"><b>State </b></td><td><input type="text" class="no-outline" value='.$row["ASTATE"].' readonly></td></tr>';
								echo '<tr><td align="center"><b>Address </b></td><td><textarea class="no-outline" rows="2" cols="50" readonly>'.$row["ADDRESS"].'</textarea></td></tr>';
								echo '<tr><td align="center"><b>Facilities Available </b></td><td><textarea class="no-outline" rows="2" cols="50" readonly>'.$row["FACILITIES"].'</textarea></td></tr>';
								//echo '<tr><td align="center"><b>Time </b></td><td><input type="textbox" class="no-outline" value='.$row["ARRIVALTIME"].' readonly></td></tr>';
								echo '<tr><td align="center"><b>AC Room </b></td><td><input type="textbox" class="no-outline" value='.$row["AC"].' readonly></td></tr>';
								echo '<tr><td align="center"><b>Standard Room Class </b></td><td><input type="textbox" class="no-outline" value='.$row["STANDARD"].' readonly></td></tr>';
								echo '<tr><td align="center"><b>Deluxe Room </b></td><td><input type="textbox" class="no-outline" value='.$row["DELUXE"].' readonly></td></tr>';
								echo '<tr><td align="center"><b>Additional charges for food &nbsp;&nbsp;</b></td><td><input type="textbox" class="no-outline" value='.$row["FOOD"].' readonly></td></tr>';
								echo '<tr><td colspan="2" align="center"><button type="submit" class="btn btn-primary btn-md" id="checkout" name="checkout">Book Now</button></td></tr>';
								echo '</table>';
								echo '<br><br>';
							}
						}else {
							echo "No data";
						}
						$con->close();
					?>
					</div>
				</div>
				
		</form>
		<br><br>
		<footer class="text-center" id="footerID">
			<a href="viewHotel.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
	</body>
</html>
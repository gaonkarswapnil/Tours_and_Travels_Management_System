<?php
	session_start();
	include ('C:\xampp\htdocs\tour\database\config.php');
	if (isset($_POST['book'])) {
		//header(location:card.php");
		//$from=$_SESSION["session_from"] ;
		//$to=$_SESSION["session_to"];
		$dest=$_SESSION["session_option"];
		$cidot=$_SESSION["session_cidot"];
		$codot=$_SESSION["session_codot"];
		$email=$_SESSION["session_email"];
		$hotel=$_SESSION["session_hotel"];
		$address=$_SESSION["session_address"];
		//$deptime=$_SESSION["session_deptime"];
		//$artime=$_SESSION["session_artime"];
		$noofpassenger=$_POST['noofpassenger'];
		$room=$_POST['room'];
		$food=$_POST['food'];
		
		$_SESSION["session_passenger"]=$noofpassenger;
		$_SESSION["session_room"]=$room;
		$_SESSION["session_food"]=$food;
		
		$query = "INSERT INTO HOTELBOOK (CUSTOMER, DEST, CHECKIN, CHECKOUT, HOTELNAME, ADDRESS, NOOFPASSENGER, ROOM, INCLUDEFOOD)
			VALUES('$email', '$dest', '$cidot', '$codot', '$hotel', '$address', '$noofpassenger', '$room', '$food')";
		$sql=mysqli_query($con, $query);
		if ($sql) {
			header("location:card.php");
		}
		else{
			echo "error";
		}
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
				font-size:13px;
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
		<div id="introduction" class="container text-center">
			<h1>Flight Booking</h1>
		</div>
		<hr>
		<form class="form-horizontal"  method="POST">
			<div class="form-group">
				<label class="control-label col-sm-4" for="noofpassenger">No of Passenger:</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="noofpassenger" name="noofpassenger" placeholder="No of Passenger" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="class">Select Room:</label>
				<div class="col-sm-6">
					<select class="form-control" name="room">
						<option>AC</option>
						<option>STANDARD</option>
						<option>DELUXE</option> 
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="class">Food:</label>
				<div class="col-sm-6">
					<input type="radio" name="food" value="yes">Yes
					<input type="radio" name="food" value="no">No
				</div>
			</div>
			<div class="form-group text-center">
                     <div class="col-sm-offset-4 col-sm-6">
                     	<button type="submit" class="btn btn-primary btn-md" id="signupButton" name="book">ADD</button>
						<button type="reset" class="btn btn-primary btn-md">RESET</button>
                     </div>
                </div>  
		</form>
		<br>
		<footer class="text-center" id="footerID">
			<a href="bookTrain.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
	</body>
</html>
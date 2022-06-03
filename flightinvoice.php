<?php
	session_start();
	include ('C:\xampp\htdocs\tour\database\config.php');
	$to=$_SESSION["session_to"];
	$from=$_SESSION["session_from"];
	$dot=$_SESSION["session_dot"];
	$flight=$_SESSION["session_flight"];
	$email=$_SESSION["session_email"];
	//$name=$_SESSION["session_bus"];
	$deptime=$_SESSION["session_deptime"];
	$artime=$_SESSION["session_artime"];
	$noofpassenger=$_SESSION["session_passenger"];
	$class=$_SESSION["session_class"];
	$food=$_SESSION["session_food"];
	if (isset($_POST['ok'])) {
		header('location:Home.php');
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
			<h1>FLIGHT</h1>
		</div>
		<hr>
		<form class="form-horizontal"  method="POST">
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Name:</label>
					<div class="col-sm-6">
						<?php
							include ('C:\xampp\htdocs\tour\database\config.php');
							if ($con->connect_error) {
								die("Connection failed: " . $con->connect_error);
							}
							$sql = "SELECT * FROM CUSTOMER_LOGIN WHERE USERID='$email'";
							$result = $con->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo '<label class="control-label col-sm-5" for="class">'.$row['FIRSTNAME'].' '.$row['SURNAME'].'</label>';
								}
						}else {
							echo "No data";
						}
						$con->close();
						?>
					</div>
				</div>	

				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Flight Name:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$flight.'</label>';
						?>
						
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">From:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$from.'</label>';
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Departure Time:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$deptime.'</label>';
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">To:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$to.'</label>';
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Arrival Time:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$artime.'</label>';
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Date of Travel:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$dot.'</label>';
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">No of Passenger:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$noofpassenger.'</label>';
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Class:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$class.'</label>';
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Include Food:</label>
					<div class="col-sm-6">
						<?php
							echo '<label class="control-label col-sm-5" for="class">'.$food.'</label>';
						?>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="control-label col-sm-5" for="class">Price:</label>
					<div class="col-sm-6">
						<?php
							if('yes'==$food){
								include ('C:\xampp\htdocs\tour\database\config.php');
								$sql = "SELECT * FROM ADD_FLIGHT WHERE FLIGHTNAME='$flight' AND AFROM='$from' AND ATO='$to'";
								$result = $con->query($sql);
								if('ECONOMY'==$class){
									
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$price=$noofpassenger * ($row['ECONOMY'] + $row['FOOD']);
											//echo '<label class="control-label col-sm-5" for="class">'.$price.'</label>';
										}
									}
								}
								elseif('BUSINESS'==$class){
									/*include ('C:\xampp\htdocs\tour\database\config.php');
									$sql = "SELECT * FROM ADD_BUS WHERE BUSNAME='$bus'";
									$result = $con->query($sql);*/
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$price=$noofpassenger * ($row['BUSINESS'] + $row['FOOD']);
											//echo '<label class="control-label col-sm-5" for="class">'.$price.'</label>';
										}
									}
								}
								elseif('FIRSTCLASS'==$class){
									/*include ('C:\xampp\htdocs\tour\database\config.php');
									$sql = "SELECT * FROM ADD_BUS WHERE BUSNAME='$bus'";
									$result = $con->query($sql);*/
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$price=$noofpassenger * ($row['FIRSTCLASS'] + $row['FOOD']);
											//echo '<label class="control-label col-sm-5" for="class">'.$price.'</label>';
										}
									}
								}
								
								else{
									//echo '<label class="control-label col-sm-4" for="class">ERROR</label>';
								}
							}
							elseif('no'==$food){
								include ('C:\xampp\htdocs\tour\database\config.php');
								$sql = "SELECT * FROM ADD_FLIGHT WHERE FLIGHTNAME='$flight' AND AFROM='$from' AND ATO='$to'";
								$result = $con->query($sql);
								if('ECONOMY'==$class){
									
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$price=$noofpassenger * $row['ECONOMY'];
											//echo '<label class="control-label col-sm-5" for="class">'.$price.'</label>';
										}
									}
								}
								elseif('BUSINESS'==$class){
									/*include ('C:\xampp\htdocs\tour\database\config.php');
									$sql = "SELECT * FROM ADD_BUS WHERE BUSNAME='$bus'";
									$result = $con->query($sql);*/
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$price=$noofpassenger * $row['BUSINESS'];
											//echo '<label class="control-label col-sm-5" for="class">'.$price.'</label>';
										}
									}
								}
								elseif('FIRSTCLASS'==$class){
									/*include ('C:\xampp\htdocs\tour\database\config.php');
									$sql = "SELECT * FROM ADD_BUS WHERE BUSNAME='$bus'";
									$result = $con->query($sql);*/
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$price=$noofpassenger * $row['FIRSTCLASS'];
											//echo '<label class="control-label col-sm-5" for="class">'.$price.'</label>';
										}
									}
								}
								
								else{
									//echo '<label class="control-label col-sm-4" for="class">ERROR</label>';
								}
							}
							echo '<label class="control-label col-sm-5" for="class">'.$price.'</label>';
						?>
					</div>
				</div>
				
				
				<br>
				<div class="form-group text-center">
                     <div class="col-sm-offset-4 col-sm-5">
                     	<button type="submit" class="btn btn-primary btn-md" id="signupButton" name="ok">OK</button>
						<button type="submit" class="btn btn-primary btn-md" onclick="printFunc()" id="signupButton">Print</button>
                     </div>
                </div>
			</form>
		</div>
		<br><br>
		<footer class="text-center" id="footerID">
			<a href="Hotel1.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
		<script>
			function printFunc(){
				window.print();
			}
		</script>
	</body>
</html>
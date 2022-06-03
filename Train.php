<?php
	
	include ('C:\xampp\htdocs\tour\database\config.php');
	if (isset($_POST['search'])) {
		session_start();
		$from=$_POST['from'];
		$to=$_POST['to'];
		$dot=$_POST['dot'];
		$train=$_POST['train'];
		
		$_SESSION["session_from"] = $from;
		$_SESSION["session_to"] = $to;
		$_SESSION["session_dot"] = $dot;
		$_SESSION["session_train"] = $train;
		header("location:login.php");
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
					<a class="navbar-brand" href="index.php">Home</a>
				</div>
				<div class="collapse navbar-collapse" id="mainNavbar">
					<ul class="nav navbar-nav">
						<li><a href="Flight.php">FLIGHT</a></li>
						<li><a href="Train.php">TRAIN</a></li>
						<li><a href="Bus.php">BUS</a></li>
						<li><a href="Hotel.php">HOTEL</a></li>
						<li><a href="Aboutus.php">ABOUT US</a></li>
						<li><a href="Feedback.php">FEEDBACK</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="Register.php"><span class="glyphicon glyphicon-user"></span>SIGNUP</a></li>
						<li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span>LOGIN</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="introduction" class="container text-center">
			<h1>Train</h1>
		</div>
		<hr>
		<form class="form-horizontal"  method="POST">
				<div class="form-group">
					<label class="control-label col-sm-4" for="from">From:</label>
					<div class="col-sm-6">
						<?php
							include ('C:\xampp\htdocs\tour\database\config.php');
							if ($con->connect_error) {
								die("Connection failed: " . $con->connect_error);
							}
							$sql = "SELECT DISTINCT(AFROM) FROM ADD_TRAIN ORDER BY AFROM";
							$result = $con->query($sql);

							if ($result->num_rows > 0) {
								echo '<select class="form-control" name="from">';
									echo '<option value="" disabled selected>Choose your option</option>';
									while($row = $result->fetch_assoc()) {
										echo '<option>'.$row["AFROM"].'</option>';
									}
									echo "</select>";
							}else {
								echo "0 results";
							}

							$con->close();
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" for="to">To:</label>
					<div class="col-sm-6">
						<?php
							include ('C:\xampp\htdocs\tour\database\config.php');
							if ($con->connect_error) {
								die("Connection failed: " . $con->connect_error);
							}
							$sql = "SELECT DISTINCT(ATO) FROM ADD_TRAIN ORDER BY ATO";
							$result = $con->query($sql);

							if ($result->num_rows > 0) {
								echo '<select class="form-control" name="to">';
									echo '<option value="" disabled selected>Choose your option</option>';
									while($row = $result->fetch_assoc()) {
										echo '<option>'.$row["ATO"].'</option>';
									}
									echo "</select>";
							}else {
								echo "0 results";
							}

							$con->close();
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="dot">Date of Travel:</label>
					<div class="col-sm-6">
						<input type="date" id="dot" name="dot" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-4" for="to">Train Name:</label>
						<div class="col-sm-6">	
							<?php
								include ('C:\xampp\htdocs\tour\database\config.php');
								if ($con->connect_error) {
									die("Connection failed: " . $con->connect_error);
								}
								$sql = "SELECT DISTINCT(TRAINNAME) FROM ADD_TRAIN ORDER BY TRAINNAME";
								$result = $con->query($sql);

								if ($result->num_rows > 0) {
									echo '<select class="form-control" name="train">';
										echo '<option value="" disabled selected>Choose your option</option>';
										while($row = $result->fetch_assoc()) {
											echo '<option>'.$row["TRAINNAME"].'</option>';
										}
										echo "</select>";
								}else {
									echo "0 results";
								}

								$con->close();
							?>
						</div>
				</div>
				<div class="form-group text-center">
                     <div class="col-sm-offset-4 col-sm-6">
                     	<button type="submit" class="btn btn-primary btn-md" id="signupButton" name="search">Search</button>
						<button type="reset" class="btn btn-primary btn-md" id="signupButton">Reset</button>
                     </div>
                </div>
			</form>
		</div>
		<br><br>
		<footer class="text-center" id="footerID">
			<a href="Train.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
	</body>
</html>
		
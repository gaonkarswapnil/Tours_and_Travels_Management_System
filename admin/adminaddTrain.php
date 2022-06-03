<?php

include ('C:\xampp\htdocs\tour\database\config.php');

//$errors = array(); 
if (isset($_POST['add'])) {
	$trainname = $_POST['name_of_train'];
	$from = $_POST['from'];
	$atime = $_POST['admin_atime'];
	$to = $_POST['to'];
	$dtime = $_POST['admin_dtime'];
	$image = $_POST['fileupload'];
	$sleeper = $_POST['sleeper'];
	$sitting = $_POST['sitting'];
	$ac = $_POST['ac'];
	$food = $_POST['food'];
	
    $query = "INSERT INTO ADD_TRAIN (TRAINNAME, AFROM, DEPTIME, ATO , ARRIVALTIME, IMAGE, Sleeper, Sitting, AC, FOOD) 
		VALUES ('$trainname', '$from', '$atime', '$to', '$dtime', '$image', '$sleeper', '$sitting', '$ac', '$food')";
	//header("location:index.php");
    $sql=mysqli_query($con, $query);
    if ($sql) {
    //$msg="<div class='alert alert-success'><b>Successfully Register</b></div>";
	echo '<script>alert("Successfully Added");location="admineditTrain.php";</script>';
	//header("location:Home.php");
	
    }else{
      //$msg="<div class='alert alert-warning'><b>Try again</b></div>";
	  echo '<script>alert("Try Again")</script>;';
    }
}
//;


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
					<ul class="nav navbar-nav navbar-right">
						<!--<li><a href="Register.html"><span class="glyphicon glyphicon-user"></span>SIGNUP</a></li>-->
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<h1 align="center">Train</h1>
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="118" name="n1">
			<div class="collapse navbar-collapse" id="mainNavbar">
				<ul class="nav navbar-nav">
					<li><a href="adminaddTrain.php">ADD</a></li>
					<li><a href="admineditTrain.php">EDIT</a></li>
					<li><a href="adminviewtrain.php">View Booking</a></li>
				</ul>
			</div>
		</nav>
		
		
		<div class="container">
			<!--<h2 class="text-center" id="mainSignup">SIGNUP</h2>
			<p class="text-center" id="infoText">Please fill in this form to create an account.</p>-->
			<hr>
			<form class="form-horizontal"  method="POST">
				<div class="form-group">
					<label class="control-label col-sm-4" for="name_of_train">Name of Train:</label>
					<div class="col-sm-6">
						<input type="textbox" class="form-control" id="name_of_train" name="name_of_train" placeholder="Name of Train" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" for="from">From:</label>
					<div class="col-sm-6">
						<input type="textbox" class="form-control" id="from" name="from" placeholder="Enter Railway Station" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="time">Time:</label>
					<div class="col-sm-6">
						<input type="time" class="form-control" name="admin_atime" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" for="to">To:</label>
					<div class="col-sm-6">
						<input type="textbox" class="form-control" id="to" name="to" placeholder="Enter Railway Station" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="mobileno">Time:</label>
					<div class="col-sm-6">
						<input type="time" class="form-control" name="admin_dtime" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="fileupload">Image to upload:</label>
					<div class="col-sm-6">
						<input type="file" class="form-control" name="fileupload" required>
					</div>
				</div>
				<h3 align="center">Fare per Person</h3>
				<div class="form-group">
					<label class="control-label col-sm-4" for="sleeper">Sleeper:</label>
					<div class="col-sm-6">
						<input type="number" class="form-control" id="sleeper" name="sleeper" placeholder="Enter Price" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="sitting">Sitting:</label>
					<div class="col-sm-6">
						<input type="number" class="form-control" id="sitting" name="sitting" placeholder="Enter Price" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="ac">AC:</label>
					<div class="col-sm-6">
						<input type="number" class="form-control" id="ac" name="ac" placeholder="Enter Price" required>
					</div>
				</div>
				<h3 align="center">Services</h3>
				<div class="form-group">
					<label class="control-label col-sm-4" for="food">Include Food:</label>
					<div class="col-sm-6">
						<input type="number" class="form-control" id="food" name="food" placeholder="Enter Price" required>
					</div>
				</div>
				
				
				<div class="form-group text-center">
                     <div class="col-sm-offset-4 col-sm-6">
                     	<button type="submit" class="btn btn-primary btn-md" id="signupButton" name="add">ADD</button>
						<button type="reset" class="btn btn-primary btn-md">RESET</button>
                     </div>
                </div>                
			</form>
		</div>
		
		<br>
		<footer class="text-center" id="footerID">
			<a href="adminaddTrain.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
	</body>
</html>
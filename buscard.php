<?php
	session_start();
	include ('C:\xampp\htdocs\tour\database\config.php');
	
	if (isset($_POST['checkout'])) {
		
		
		$email=$_SESSION["session_email"];
		$nameoncard=$_POST['name_on_card'];
		$name_of_bank=$_POST['name_of_bank'];
		$creditno=$_POST['creditno'];
		$expmonth=$_POST['expmonth'];
		$expyear=$_POST['expyear'];
		$csv=$_POST['csv'];
		$query = "INSERT INTO CARD (CUSTOMER, CARDNAME, BANKNAME, CARDNO, EXPMONTH, EXPYEAR, CSV) 
			VALUES('$email', '$nameoncard', '$name_of_bank', '$creditno', '$expmonth', '$expyear', '$csv')";
		$sql=mysqli_query($con, $query);
		if ($sql) {
			header("location:businvoice.php");
			echo "<script>alert('Book Sucessfully')</script>";
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
							echo '<li><a href="Login.php"><span class="glyphicon glyphicon-user"></span>'.$_SESSION["session_email"].'</a><li>';
							echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>';
						?>
					</ul>
				</div>
			</div>
		</nav>
		<div id="introduction" class="container text-center">
			<h1>Enter Details for Payment</h1>
		</div>
		<hr>
		
		<form class="form-horizontal"  method="POST">
				<div class="form-group">
					<label class="control-label col-sm-4" for="name_on_card">Name on Card:</label>
					<div class="col-sm-6">
						<input type="textbox" class="form-control" id="name_on_card" name="name_on_card" placeholder="Name on card" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="name_of_bank">Name of Bank:</label>
					<div class="col-sm-6">
						<input type="textbox" class="form-control" id="name_of_bank" name="name_of_bank" placeholder="Name of Bank" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="creditno">Credit Card Number.:</label>
					<div class="col-sm-6">
						<input type="textbox" maxlength="12" id="creditno" placeholder="Enter credit card number" class="form-control" name="creditno" title ="Please enter 12 digit credit card number." required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="expmonth">Exp Month:</label>
					<div class="col-sm-6">
						<input type="textbox" maxlength="2" class="form-control" id="expmonth" name="expmonth" placeholder="Enter Exp Month" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="expyear">Exp Year:</label>
					<div class="col-sm-6">
						<input type="textbox" maxlength="4" class="form-control" id="expyear" name="expyear" placeholder="Enter Exp Year" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="csv">CSV:</label>
					<div class="col-sm-6">
						<input type="textbox" maxlength="3" class="form-control" id="csv" name="csv" placeholder="Enter CSV no" required>
					</div>
				</div>
				
				<div class="form-group text-center">
                     <div class="col-sm-offset-4 col-sm-6">
                     	<button type="submit" class="btn btn-primary btn-md" id="checkout" name="checkout">Proceed</button>
                     </div>
                </div> 
			</form>
		</div>
		<br><br>
		<footer class="text-center" id="footerID">
			<a href="card.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
	</body>
</html>
<?php

include ('C:\xampp\htdocs\tour\database\config.php');

//$errors = array(); 
if (isset($_POST['feedback_submit'])) {
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    $query = "INSERT INTO CUSTOMER_FEEDBACK (FIRSTNAME, SURNAME, USERID, MESSAGE) 
		VALUES ('$fname', '$lname', '$email', '$message')";
	//header("location:index.php");
    $sql=mysqli_query($con, $query);
    if ($sql) {
    //$msg="<div class='alert alert-success'><b>Successfully Register</b></div>";
	echo '<script>alert("ThankYou for feedback");location="index.php";</script>';
	//header("location:Home.php");
	
    }else{
      //$msg="<div class='alert alert-warning'><b>Try again</b></div>";
	  echo '<script>alert("Try Again")</script>;';
    }
}



?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">-->
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
			}
			#mainSignup{
                                color:#340926;
                                letter-spacing:15px;
                                font-weight:bolder;
                                font-size:20;
                                margin-top:50px;
                        }
			#message{
				resize:none;	
			}
			input[type="textbox"], input[type=password], input[type=email], input[type=number], input[type=date], #address{
				border:none;
				background:#f1f1f1;
				padding:15px;
			}
			#infoText{
				color:#340926;
			}
			#signupButton{
				background:#340926;
				color:white;
				border:none;
				width:100px;
				margin-top:15px;
				
			}
			#signupButton:hover{
				color:#CBE432;
			}
			#footerID{
				background-color:#340926;
				padding-bottom:5px;
				color:white;
				opacity:0.9;
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
						<li><a href="Register.html"><span class="glyphicon glyphicon-user"></span>SIGNUP</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>LOGIN</a></li>
					</ul>
					
					
				</div>
			</div>
		</nav>
		<div class="container">
			<h3 class="text-center" id="infoText">Please fill in this form to Improve our Site.</h3>
			<hr>
			<form class="form-horizontal" name="myForm" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-4" for="firstname">Firstname:</label>
					<div class="col-sm-6">
						<input type="textbox" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" value="" >
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="lastname">Lastname:</label>
					<div class="col-sm-6">
						<input type="textbox" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" value="" >
					</div>
					</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="emailId">Email:</label>
					<div class="col-sm-6">
						<input type="email" id="emailid" name="email" placeholder="Enter email id" class="form-control" value="" >
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="message">Message:</label>
					<div class="col-sm-6">
						<textarea id="message" name="message" placeholder="Enter Message" class="form-control" rows="5" ></textarea>
					</div>
				</div>
			
				<div class="form-group text-center">
                     <div class="col-sm-offset-4 col-sm-6">
                     	<button type="submit" class="btn btn-primary btn-md" id="signupButton" onclick="signup()" name="feedback_submit">Submit</button>
                     </div>
                </div>                
			</form>
			
		</div>
		<footer class="text-center" id="footerID">
			<a href="Feedback.php" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a><br><br>
			<p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
		</footer>
		<script>
			function signup(){
				//window.alert("Inside sigup method!");  
				var f = document.forms["myForm"]["firstname"].value;
				var s = document.forms["myForm"]["surname"].value;
				var u = document.forms["myForm"]["username"].value;
				var m = document.forms["myForm"]["message"].value;
				if (f == "") {
					alert("Name must be filled out");
					return false;
				}
				else {
					if (s == "") {
						alert("surname must be filled out");
						return false;
					}
				}
				else {
					if (u == "") {
						alert("Username must be filled out");
						return false;
					}
				}
				else {
					if (m == "") {
						alert("Message must be filled out");
						return false;
					}
				}
			}
		</script>
		<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
		<script type="text/javascript" src="js/validation.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	</body>
</html>
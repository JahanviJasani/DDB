<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php
session_start();


function redirect($url){
    if (!headers_sent()){    
        header('Location: '.$url);
        exit;
    }else{  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
    }
}

if (isset($_SESSION['userid'])) {
	redirect("page1.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Traffic Violations</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Purple Multiple Forms template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<link href="js/backend.js" rel-
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- agileits-main -->
	<div class="agileits-main"> 
		<h1>Mumbai Traffic Police</h1> 
		<div class="w3lmain-info">	
			<!-- agileits-main-row-one -->
			<div class="agileitsmain-row">
				<div class="profile-w3grid float-lt">
					<!-- login form one -->
					<div class="login-form">  
						<div class="agile-row">
							<h2>Licencee</h2>   
							<div class="login-agileits-top"> 
								<form action="page2.php" method="post" id="form1"> 
									<div class="input-row">
										<input type="text" class="user" name="l_num" placeholder="Licence Number" required=""/> 
										<input type="date" class="password" name="dob" placeholder="Date of Birth" required=""/>	
									</div>	
									<div class="agileits-row2">
										<!--<input type="checkbox" id="brand" value="">
										<label for="brand"><span></span> Remember me</label> -->
									</div>	
									<input type="submit" name="user_search" value="Search">
								</form>  
							</div>
							<!--<div class="login-agileits-bottom"> 
								<p><a href="#">Forgot password ?</a></p>  
								<p class="w3ls-line">Don't have an Account ? <a href="#">Sign Up !</a></p>
							</div>--> 
						</div>  
					</div>
					<!-- login form one -->	 
				</div>
				<div class="profile-w3grid float-rt">
					<!-- login form two -->
					<div class="login-form login-form-two">  
						<div class="agile-row">
							<h3>Official Login</h3>   
							<div class="login-agileits-top"> 
								<form action="signin.php" method="post" id="form2"	> 
									<div class="input-row">
										<input type="text" class="user" name="username" placeholder="Username" required=""/>  
										<input type="password" class="password" name="Password" placeholder="Password" required=""/>	
									</div>	 
									<div class="agileits-row2">
										<!--<input type="checkbox" id="brand2" value="">
										<label for="brand2"><span></span>I accept the terms of Use</label> -->
									</div> 
									<input type="submit" value="Login">
								</form>  
							</div>
							<!--<div class="login-agileits-bottom">  
								<p class="w3ls-line w3ls-line2">Already registered ? <a href="#">Log in now</a></p>
							</div> -->
						</div>  
					</div>
					<!-- login form two -->	 
				</div>
				<div class="clear"> </div>
			</div>
			<!-- agileits-main-row-two -->
			<!--<div class="agileitsmain-row">
				<div class="profile-w3grid2 w3subscribe">
					<div class="login-form login-form-three">  
						<div class="agile-row">
							<h3>Subscribe to our newsletter</h3>  
							<p>Join our newsletter and we will send you a link to download our free templates, as well as other free resources.</p>
							<div class="login-agileits-top"> 
								<form action="#" method="post"> 
									<div class="input-row">
										<input type="text" class="user" name="Your Name" placeholder="Your Name" required=""/> 
										<input type="email" class="email" name="Email" placeholder="Enter Your Email" required=""/>	
									</div>	
									<div class="agileits-row2">
										<input type="checkbox" id="brand3" value="">
										<label for="brand3"><span></span> Daily Newsletter</label> 
									</div>	
									<input type="submit" value="Subscribe">
								</form>  
							</div> 
						</div>  
					</div>
				</div>
				<div class="clear"> </div>
			</div> 
			<div class="agileitsmain-row">
				<div class="profile-w3grid profile-w3grid2 float-lt">
					<div class="login-form login-form-two">  
						<div class="agile-row">
							<h3>Forgot Password ?</h3>  
							<p class="w3l-subtext">Please enter your email address registered on your account Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor luctus pellentesque.</p>
							<div class="login-agileits-top"> 
								<form action="#" method="post"> 
									<div class="input-row input-row3">
										<input type="email" class="email" name="Email" placeholder="Enter Your Email" required=""/>	
									</div>	
									<div class="agileits-row2"> 
									</div>	
									<input type="submit" value="Submit">
								</form>  
							</div> 
						</div>  
					</div>
				</div>
				<div class="profile-w3grid float-rt">
					<div class="login-form">  
						<div class="agile-row">
							<h3>Change Password</h3>   
							<div class="login-agileits-top"> 
								<form action="#" method="post"> 
									<div class="input-row">
										<input type="password" name="current Password" placeholder="Enter Current Password" required=""/>	
										<input type="password" class="Password1" name="new Password" placeholder="New Password" required=""/>	
										<input type="password" class="Password1" name="Confirm Password" placeholder="Confirm Password" required=""/>	 
									</div>	
									<div class="agileits-row2"> 
									</div>	
									<input type="submit" value="Submit">
								</form>  
							</div> 
						</div>  
					</div>	 
				</div>
				<div class="clear"> </div>
			</div>  	
		</div>	
	</div>	-->
	<!-- //agileits-main -->
	<!-- copyright -->
	<div class="copyright">
		<p>© 2018 Mumbai Traffic Police . All rights reserved | Design by <a href="" target="_blank">Arnav Jalui, Jahanvi Jasani, Yash Lahoti.</a></p>
	</div>
	<!-- //copyright --> 
</body>
<script type="text/javascript">
console.log("Hie");
document.getElementById('form1').reset();
</script>

</html>


<?php

if (isset($_GET['signinerror'])) {
	echo "<script>window.alert('Sign in error!')</script>";
}

if (isset($_GET['autherror'])) {
	echo "<script>window.alert('Sign in error!')</script>";
}
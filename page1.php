<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include('dbhandler.php');

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

if (!isset($_SESSION['userid'])) {
	redirect("index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>General Application Form a Flat Responsive Widget Template :: w3layouts</title>
	<meta name="keywords" content="General Application Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
	
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>
<body>
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Add a traffic infraction</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter Offence Details</h2>
				<p>Fill the form given below and submit.</p>
			</div>
			<div class="agile-form">
				<form action="addviolation.php" method="post" id="off_form">
					<ul class="field-list">
						<li> 
							<label class="form-label"> License Number <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="text" name="lic_no" placeholder="License Number" required >
							</div>
						</li>
						<li> 
							<label class="form-label"> Registration Number <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="text" name="reg_no" placeholder="Vehicle Registration Number" required >
							</div>
						</li>
						<li>
							<label class="form-label"> City <span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="city" required>
									<option value="Mumbai"> Mumbai  </option>
									<option value="Delhi" disabled> Delhi </option>
									<option value="Bangalore" disabled> Bangalore  </option>
									<option value="Hyderabad" disabled> Hyderabad </option>
									<option value="Ahmedabad" disabled> Ahmedabad </option>
									<option value="Chennai" disabled> Chennai </option>
									<option value="Kolkata" disabled> Kolkata </option>
									
								</select>
							</div>
						</li>
						<li> 
							<label class="form-label"> RTO Code <span class="form-required"> * </span></label>
							<div class="form-input">
								<!-- <input type="text" name="rto" placeholder="RTO Code" required > -->
								<select class="day" required="" name="RTOCode">
									<option value="MH01">MH01</option>
									<option value="MH02">MH02</option>
									<option value="MH03">MH03</option>
								</select>
							</div>
						</li>
						<li>
							<label class="form-label"> Date of Offence <span class="form-required"> * </span></label>
							<div class="form-input dob">
								<input type="date" name="date" placeholder="Date" required >
								<!-- <span class="form-sub-label">
									<select name="day" class="day" required>
										<option>Day</option>
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6 </option>
										<option value="7"> 7 </option>
										<option value="8"> 8 </option>
										<option value="9"> 9 </option>
										<option value="10"> 10 </option>
										<option value="11"> 11 </option>
										<option value="12"> 12 </option>
										<option value="13"> 13 </option>
										<option value="14"> 14 </option>
										<option value="15"> 15 </option>
										<option value="16"> 16 </option>
										<option value="17"> 17 </option>
										<option value="18"> 18 </option>
										<option value="19"> 19 </option>
										<option value="20"> 20 </option>
										<option value="21"> 21 </option>
										<option value="22"> 22 </option>
										<option value="23"> 23 </option>
										<option value="24"> 24 </option>
										<option value="25"> 25 </option>
										<option value="26"> 26 </option>
										<option value="27"> 27 </option>
										<option value="28"> 28 </option>
										<option value="29"> 29 </option>
										<option value="30"> 30 </option>
										<option value="31"> 31 </option>
									</select>
								</span>
								<span class="form-sub-label">
									<select name="month" required>
										<option>Month</option>
										<option value="January"> January </option>
										<option value="February"> February </option>
										<option value="March"> March </option>
										<option value="April"> April </option>
										<option value="May"> May </option>
										<option value="June"> June </option>
										<option value="July"> July </option>
										<option value="August"> August </option>
										<option value="September"> September </option>
										<option value="October"> October </option>
										<option value="November"> November </option>
										<option value="December"> December </option>
									 </select>
								</span>
								<span class="form-sub-label">
									<select name="year" required>
										<option>Year</option>
										<option value="1990"> 1990 </option>
										<option value="1990"> 1991 </option>
										<option value="1990"> 1992 </option>
										<option value="1990"> 1993 </option>
										<option value="1990"> 1994 </option>
										<option value="1990"> 1995 </option>
										<option value="1990"> 1996 </option>
										<option value="1990"> 1997 </option>
										<option value="1990"> 1998 </option>
										<option value="1990"> 1999 </option>
										<option value="1990"> 2000 </option>
										<option value="1990"> 2001 </option>
										<option value="1990"> 2002 </option>
										<option value="1990"> 2003 </option>
										<option value="1990"> 2004 </option>
										<option value="1990"> 2005 </option>
										<option value="1990"> 2006 </option>
										<option value="1990"> 2007 </option>
										<option value="1990"> 2008 </option>
										<option value="1990"> 2009 </option>
										<option value="1990"> 2010 </option>
										<option value="1990"> 2011 </option>
										<option value="1990"> 2012 </option>
										<option value="1990"> 2013 </option>
										<option value="1990"> 2014 </option>
										<option value="1990"> 2015 </option>
										<option value="1990"> 2016 </option>
										<option value="1990"> 2017 </option>
										<option value="1990"> 2018 </option>
									 </select>
								</span> -->
							</div>
						</li>
						<li>
							<label class="form-label"> Offence Type <span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="off_cat" required>
									<?php

									$sql = "SELECT * FROM offenceType";
									$result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)) {
										echo "<option value='".$row['offType']."'>".$row['description']."</option>";
									}

									?>
								</select>
							</div>
						</li>
					</ul>
					<div class="submit_btn">
						<input type="submit" value="Submit">
					</div>
				</form>
				<a href="logout.php" style="color: white; display: inline-block; margin: 0 auto;">Logout</a>
			</div>
		</div>
		
	</div>
</body>
</html>
<?php
if (isset($_GET['success'])){
	echo '<script>window.alert("Submitted Successfully");</script>';
} else if (isset($_GET['fail'])) {
	echo '<script>window.alert("Failed. Please try again.");</script>';
	}
?>


<script type="text/javascript">
	function submit_off() {
		window.alert("Submitted Successfully");
		document.getElementById("off_form").reset();
	}
	function submit_fail() {	
	window.alert("Failed. Please try again.");
	document.getElementById("off_form").reset();
}
</script>
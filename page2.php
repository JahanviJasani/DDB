<!DOCTYPE html>
<html lang="en" >

<?php
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

if (!isset($_POST['user_search'])) {
	redirect('index.php');
}

$licNo = $_POST['l_num'];
$date = $_POST['dob'];

$lookup = "SELECT * FROM licenseHolder WHERE licenseHolder.licenseNo='$licNo' AND licenseHolder.DOB='$date'";
$resLookup = mysqli_query($conn, $lookup);
$ctr = mysqli_num_rows($resLookup);

if ($resLookup) {
	if ($ctr==1) {
		$row = mysqli_fetch_assoc($resLookup);
		// echo "Welcome".$row['fullName'];
	} else {
		redirect('index.php?autherror=true');
	}
} else {
	redirect('index.php?autherror=true');
	// echo $date."   ".$licNo;
}

?>

<head>
  <meta charset="UTF-8">
  <title><Table> Responsive</title>
  
  
  
      <link rel="stylesheet" href="css/style3.css">

  
</head>

<body>

	<h1><span><?php echo "Welcome, ".$row['fullName']." (".$row['licenseNo'].")"; ?></h1>
	<h2 style="margin: 0; padding: 0;"><span class="blue" style="color: white;"><b><?php echo "License Status: ";
		$stat = $row['currentStatus'];
		if ($stat==0) {
			echo "Active";
		} else if ($stat==1) {
			echo "Suspended";
		} else if ($stat==2) {
			echo "Revoked";
		} else if ($stat==3) {
			echo "Expired";
		}

	 ?></b></span></h2>

	 <h2 style="margin: 0; padding-top: 20px; padding-bottom: 0px;"><span class="blue" style="color: white;"><b><?php echo "Penalty Points: ".$row['penaltyPoints'];?></b></span></h2>
	 <h2 style="margin: 0; padding-top: 20px; padding-bottom: 0px;"><span class="blue" style="color: white;"><b><?php echo "Strikes: ".$row['strikes'];?></b></span></h2>

<table class="container" style="padding-bottom: 10px;">
	<thead>
		<tr>
			<th><h1>Offence Date</h1></th>
			<th><h1>Offence Type</h1></th>
			<th><h1>City</h1></th>
			<th><h1>Penalty</h1><th>
		</tr>
	</thead>
	<tbody>

		<?php 

		$sql = "SELECT * FROM committedOffence WHERE committedOffence.licenseNo='$licNo'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);
		if ($count==0) {
			echo "<tr><td>No records found</td><td></td><td></td><td></td></tr>";
		} else {
			while ($row1 = mysqli_fetch_assoc($result)) {
				$ot = $row1['offType'];
				$offSQL = "SELECT * FROM offenceType WHERE offenceType.offType='$ot'";
				$offResult = mysqli_query($conn, $offSQL);
				$offRow = mysqli_fetch_assoc($offResult);
				echo "<tr>
			<td>".$row1['offDate']."</td>
			<td>".$offRow['description']."</td>
			<td>".$row1['city']."</td>
			<td> &#8377; ".$offRow['penalty']."/-</td>
		</tr>
				";
			}
		}


		?>


		
	</tbody>
</table>
<h2><span class="blue"><a href="index.php">Go to home</a></span></h2>

</body>

</html>

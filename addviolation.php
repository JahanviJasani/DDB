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


$licNo = $_POST['lic_no'];
$regNo = $_POST['reg_no'];
$date = $_POST['date'];
$city = $_POST['city'];
$rto = $_POST['RTOCode'];
$offType = $_POST['off_cat'];

// echo $licNo, $regNo, $date, $city, $rto, $offType;


$sql = "INSERT INTO committedOffence (offDate, city, RTOCode, licenseNo, offType, vehicleRegNo) VALUES ('$date','$city','$rto','$licNo','$offType','$regNo')";

$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM offenceType WHERE offenceType.offType='$offType'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$pp = $row2['penaltyPoints'];
// echo "Penalty points to be added ".$pp."\n";
$sql3 = "SELECT * FROM licenseHolder WHERE licenseHolder.licenseNo='$licNo'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);


$oldStrikes = $row3['strikes'];
$oldPP = $row3['penaltyPoints'];
$newPP = $oldPP + $pp;
$cc = $row3['currentStatus'];
// echo "Old strikes ".$oldStrikes." oldPP ".$oldPP."\n";
if ($newPP>=12) {
	$newStrikes = $oldStrikes + 1;
	$newPP = $newPP % 12;
}
if ($newStrikes==3) {
	if ($cc==0) {
		$cc = 1;
	}
}
// echo "NewPP ".$newPP." newStrikes ".$newStrikes." \n";

$sql4 = "UPDATE licenseHolder SET strikes='$newStrikes', penaltyPoints='$newPP', currentStatus='$cc' WHERE licenseHolder.licenseNo='$licNo'";
$result4 = mysqli_query($conn, $sql4);



if($result && $result4) {
	// echo "ho gaya";
	redirect("page1.php?success=true");
} else {
	// echo "gadbad";
	redirect("page1.php?fail=true");
}
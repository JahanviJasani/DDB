<?php
session_start();
include('dbhandler.php');
$uname = $_POST['username'];
$pwd = $_POST['Password'];

// echo $uname;
// echo $pwd;


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


$sql = "SELECT * FROM users WHERE username='$uname'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$retPwd = $row['userpwd'];
// echo $retPwd;



if ($pwd == $retPwd) {
	$_SESSION['userid'] = $row['userid'];
	$_SESSION['username'] = $row['username'];
	echo "success";
	redirect('page1.php');
} else {
	redirect('index.php?signinerror=true');
}
<?php
date_default_timezone_set("Asia/Kolkata");
$cookievalue = $_COOKIE['PHPSESSID'];
session_start();
session_unset();
session_destroy();
setcookie("PHPSESSID",$cookievalue,time()-(3600),"/");
header("Location: index.php");
exit();
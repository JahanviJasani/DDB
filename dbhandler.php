<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "pass1234";
$dbName = "traffic_violation_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn)
{
  die('Could not connect: ' . mysql_error());
}

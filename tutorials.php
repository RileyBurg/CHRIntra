<?php
session_start();
require 'database.php';
$usrnme = $_SESSION["username"];

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="secretstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<title>Video Tutorials</title>
    <ul class="navBar">
        <li><a href="secretProfile.php">Profile</a></li>
        <li><a class="active" href="tutorials.php"> Video Tutorials </a></li>
        <li><a href="employees.php"> Employee Directory </a></li>
        <li><a href="OfficeMap.php"> Office Map </a></li>
        <li><a href="secretlogout.php">Logout</a></li>
    </ul>
</head>

<body>
	
</body>
</html>
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
	<title>Office Map</title>
    <ul class="navBar">
        <li><a href="secretProfile.php">Profile</a></li>
        <li><a href="tutorials.php"> Video Tutorials </a></li>
        <li><a href="employees.php"> Employee Directory </a></li>
        <li><a class="active" href="OfficeMap.php"> Office Map </a></li>
        <li><a href="secretlogout.php">Logout</a></li>
    </ul>
</head>

<body id="mapBody">
     <div id="rectangle" class="headBox">
        
        <div class="searchBox">
            <input type="search" id="search" placeholder="Search..." />    
        </div>
       
        <h1 id="offMap">Office Map</h1>
        
    </div>
</body>

</html>
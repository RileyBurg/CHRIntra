<?php
session_start();
require 'database.php';
$usrnme = $_SESSION["username"];

//EMPLOYEE NAME
$employSql = "SELECT fulnme FROM logins WHERE usrnme = '$usrnme'";
$empResult=mysqli_query($connection, $employSql);
$empArray = array();
while($empRow = mysqli_fetch_array($empResult))
{
    $empArray[]= array($empRow['fulnme']);
}
$empString = json_encode($empArray);

//PROFILE PICTURE
$profPic = "SELECT profpic FROM logins WHERE usrnme = '$usrnme'";
$profResult=mysqli_query($connection, $profPic);
$picArray = array();
while($picRow = mysqli_fetch_array($picResult))
{
    $picArray[]= array($picRow['profpic']);
}
$picString = json_encode($picArray);


//JOB TITLE
$jobTitle = "SELECT jobtitle FROM logins WHERE usrnme = '$usrnme'";
$jobResult= mysqli_query($connection, $jobTitle);
$jobArray = array();
while($jobRow = mysqli_fetch_array($jobResult))
{
    $jobArray[]= array($jobRow['jobtitle']);
}
$jobString = json_encode($jobArray);

//Phone Number
$phoneNum = "SELECT phonenum FROM logins WHERE usrnme = '$usrnme'";
$phoneResult= mysqli_query($connection, $phoneNum);
$phoneArray = array();
while($phoneRow = mysqli_fetch_array($phoneResult))
{
    $phoneArray[]= array($phoneRow['phonenum']);
}
$phoneString = json_encode($phoneArray);

?>

<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="secretstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
    <title>Profile</title>
    <ul class="navBar">
        <li><a class="active" href="secretProfile.php">Profile</a></li>
        <li><a href="tutorials.php"> Video Tutorials </a></li>
        <li><a href="employees.php"> Employee Directory </a></li>
        <li><a href="OfficeMap.php"> Office Map </a></li>
        <li><a href="secretlogout.php">Logout</a></li>
    </ul>
</head>

<body id="profile">  
    <div id="rectangle" class="headBox">
        
        <div class="searchBox">
            <input type="search" id="search" placeholder="Search..." />    
        </div>

        <div class="profpicbox">
            
        </div>
       
        <div class="userInfo">
            <h1 id="user"></h1>
            <h4 id="phoneNum"></h4>
            <h4 id="jobTitle"></h4>
        </div>
    </div>
    <div class="appBox">
        <h2 id="appBoxHead">App Box</h2>
        <a href="#" class="hvr-rectangle-out">Time Entry</a>
        <a href="#" class="hvr-rectangle-out">Meeting Notes</a>
        <a href="#" class="hvr-rectangle-out">Suggestions</a>
    </div>
    <div id="openModal" class="modalDialog">
        <a href="#close" title="Close" class="close">X</a>
        <h2 style="margin-left: 20px;">Uploading a photo</h2>
        <div class="insideModal">
            <p>Choose an image for upload.</p>
            <form action="upload.php" method="post">
                <input type="file" name="file" id="file"/>
            </form>
        </div>    
    </div>
<script type="text/javascript">
    empVarList = <?= $empString ?>;
    picVarList = <?= $picString ?>;
    jobVarList = <?= $jobString ?>;
    phoneVarList = <?= $phoneString ?>;

    let emps = [];
    let pic = [];
    let job = [];
    let phone = [];

    emps = empVarList;
    pic = picVarList;
    job = jobVarList;
    phone = phoneVarList;

    var userName = document.getElementById('user');
    var profPic = document.getElementById('picture');
    var jobTitle = document.getElementById('jobTitle');
    var phoneNum = document.getElementById('phoneNum');

    userName.innerText = emps.toString();
    //profPic.innerText = pic;
    jobTitle.innerText = job.toString();
    phoneNum.innerText = phone.toString();
</script>

</body>
</html>
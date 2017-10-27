<?php
session_start();
require 'database.php';
if(isset($_POST) & !empty($_POST))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

        $_SESSION["username"] = $_POST['username'];

	$sql = "SELECT usrnme, psswrd FROM logins WHERE usrnme = '$username' AND psswrd = '$password'";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);
	
        if ($count == 1) 
	{
	       header("Location: secretProfile.php");
               session_start();
	}
	else
	{
	       $message = "Invalid Username/Password";
         }
}
?>

<!DOCTYPE html>

<html>

<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="secretstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body id="login">
<div id="rectangle" class="darkBox">
	<h1 class ="loginHead">I N T R A</h1>
			<form action = "secretlogin.php" method="POST">
				<input type="username" placeholder="Enter your user number" name ="username">
				<input type="password" placeholder="Enter your password" name ="password">
				<input class="subLogin" type="submit">

				<?php if(!empty($message)): ?>
					<p style="padding-bottom:20px;"> <?= $message ?> </p>
				<?php endif; ?>
			</form>	
</div>
	
</body>
</html>
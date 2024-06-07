<?php 
session_start();

	include("connection1.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Manager_Index</title>
</head>
<body background="360_F_292905667_yFUJNJPngYeRNlrRL4hApHWxuYyRY4kN.jpg" style="background-repeat:no-repeat;background-size:100% 400%">

	<button><a href="logout.php">Logout</a></button>
	<center>
	<h1>Welcome Back, <?php echo $user_data['user_name']; ?> </h1>
    
	
    <br><br>
	Click here to Manage Train Info->
	<a href="update.php">Manage</a>
    </center>

	<br><br><br>
    Manager Details-
	<br>
	Admin Id-<?php echo $user_data['user_id']; ?>
	<br>
	Email-<?php echo $user_data['email']; ?>
</body>
</html>
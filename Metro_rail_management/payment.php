<!DOCTYPE html>
<html>
<head>
	<title>Payment Progress</title>
</head>
<body>

	<center><h1>Choose a method to pay!</h1></center>
	<a href="bkash.html" target="_blank"><center><img src="img/bkash_logo_0.jpg" height="300"/></a>
	<h1>OR</h1>
	<a href="mastercard.html" target="_blank"><img src="img/mastercard.jpg" height="300"/></center></a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b><font color="Grey">
<center>
<?php
session_start();
            $pid= uniqid();
            echo "Your Payment ID=$pid";
            echo "<br>";
            echo "Payment Date=";
            date_default_timezone_set('Asia/Dhaka');
            echo date("Y-m-d H:i:s");
            echo "<br>";
            
$tid=$_SESSION['tid'];
echo "Your Ticket ID=$tid";
echo "<br>";

$price=$_SESSION['price'];
echo "Ticket price=$price";

?>
</center>
</font>
</b>

    
</body>
</html>

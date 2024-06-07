<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
</head>
<body background="psu.gif" style="background-repeat:no-repeat;background-size:100% ">
    <font face="georgia" color="green" size="10"><center><h2><u>Payment Status</u></h2></center></font>
    <font face="verdana" color="red"><b><i><u><center><h1><marquee behavior="alternate" scrollamount="60">Payment Successfull!!</marquee></h1></center></u></i></b></font>
    <center><font color="White" size="4"><?php
    session_start();
    $tid=$_SESSION['tid'];
    
echo "Your Ticket ID=$tid";
echo "<br>";
$email=$_SESSION['email'];
echo "Your Email-Address=$email";

    ?></font>
    </center>

</body>
</html>
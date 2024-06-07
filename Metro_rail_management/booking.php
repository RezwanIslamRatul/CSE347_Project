<?php
session_start();
require_once("connection.php");
$email=$_SESSION['email'];
?>
<?php

$metroid=$_POST['metroid'];
if($metroid==Null){
    $metroid=0;
    
}
$sql="SELECT price FROM tickets WHERE metroid=$metroid";
    $ticket=mysqli_query($con,$sql);
 
    $result=mysqli_fetch_array($ticket);
    
    $tid= uniqid();
            
            $_SESSION['tid']="$tid";
    $price=$result[0];
    $_SESSION['price']=$price;
    
 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceeding to pay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="styled.css">
</head>
<body background="HD-wallpaper-platform-station-metro-train.jpg" style="background-repeat:no-repeat;background-size:100%">
    <div class="containers">
        
        <center> <?php
        echo "Ticket price=$result[0]";
        echo "<br>";
        echo "Your Ticket ID=$tid";
        echo "<br>";
        ?></center>
<center><button class="btn"><a href="payment.php">Proceed to Pay </a></button></center>
</div>

</body>
</html>
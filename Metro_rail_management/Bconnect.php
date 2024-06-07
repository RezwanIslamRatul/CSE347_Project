<?php
$bkash=$_POST['bkash'];
$trx=$_POST['trx'];

$conn =new mysqli('localhost','root','','metrorail_php');
if($conn->connect_error){
die('Connection Failed :'.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into bkash(bkash,trx)
values(?,?)");
$stmt->bind_param("si",$bkash,$trx);
$stmt->execute();
header("Location:psuccess.php");
$stmt->close();
$conn->close();

}

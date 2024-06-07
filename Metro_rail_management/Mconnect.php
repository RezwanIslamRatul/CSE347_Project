<?php
$card=$_POST['card'];
$expire=$_POST['expire'];
$cvv=$_POST['cvv'];

$conn =new mysqli('localhost','root','','metrorail_php');
if($conn->connect_error){
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into master_card(card,expire,cvv)
		values(?,?,?)");
	$stmt->bind_param("isi",$card,$expire,$cvv);
	$stmt->execute();
	header("Location:psuccess.php");
	$stmt->close();
	$conn->close();

}



?>
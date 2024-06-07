<?php
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="metrorail_php";
if(!$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname))
{

	die("failed to connect!");
}

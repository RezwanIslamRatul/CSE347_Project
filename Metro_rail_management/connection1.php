<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "metrorail_php";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	exit("failed to connect!");
}

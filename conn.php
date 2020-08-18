<?php


$host="localhost";
$user="root";
$password="";
$db="ger_garage";
$conn=@mysqli_connect($host,$user,$password,$db) or die("Sorry,our system had an issue");

	
	session_start();
?>
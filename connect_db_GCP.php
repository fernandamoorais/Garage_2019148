<?php
//My previous code from CA2 - web develpment. 

// Credentials
$dbhost = '127.0.0.1:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Ger_garage';

//Need to be edited to ger garages DB
//Only for online 
/*
$dbhost = 'sql311.epizy.com';
$dbuser = 'epiz_24967007';
$dbpass = '12Fernanda34';
$dbname = 'epiz_24967007_user_db';
*/


// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// 5. Close database connection
//mysqli_close($connection);
?>

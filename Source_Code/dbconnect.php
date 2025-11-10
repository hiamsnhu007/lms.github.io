<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "lms"; // <-- change this to your actual DB name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else 
   
?>

<?php
session_start();
include 'dbconnect.php';

$rollno = $_POST['rollno'];
$pass = $_POST['pass'];

// Example query — adjust to your table
$sql = "SELECT * FROM students WHERE rollno='$rollno' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['key'] = 1;
    $_SESSION['rollno'] = $rollno;
    header("Location:dashboard.php");
} else {
    echo "<script>alert('Invalid Roll No or Password');window.location='index.php';</script>";
}
?>

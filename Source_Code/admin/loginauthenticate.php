<?php
session_start();
include('connect.php');

// Get and sanitize inputs
$staffid = mysqli_real_escape_string($conn, $_POST['staffid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query the emplogin table
$sql = "SELECT * FROM emplogin WHERE EMP_ID='$staffid' AND PASS='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    // Login success
    $_SESSION['admin_id'] = $staffid;
    header("Location: home.php");
    exit();
} else {
    // Login failed
    echo "<script>alert('Invalid Employee ID or Password'); window.location='login.php';</script>";
    exit();
}
?>

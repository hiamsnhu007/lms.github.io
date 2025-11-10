<?php
session_start();

// Unset all session variables related to the student
unset($_SESSION['key']);
unset($_SESSION['rollno']);

// Destroy the session completely
session_unset();
session_destroy();

// Redirect to admin login page
header("Location: admin/login.php");
exit();
?>

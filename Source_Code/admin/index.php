<?php
session_start();

// If not logged in, go to login
if (!isset($_SESSION['key'])) {
    header('Location: login.php');
    exit();
}

// If already logged in, go to admin home page
header('Location: home.php');
exit();
?>

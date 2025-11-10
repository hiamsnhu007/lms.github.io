<?php
session_start();
include 'dbconnect.php'; // make sure this connects properly to your DB

$error = ""; // initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = trim($_POST['rollno']);
    $password = trim($_POST['password']);

    // Protect against SQL Injection
    $rollno = mysqli_real_escape_string($conn, $rollno);
    $password = mysqli_real_escape_string($conn, $password);

    // Correct column names from your table
    $query = "SELECT * FROM student_login WHERE student_rollno='$rollno' AND student_password='$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Database query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['rollno'] = $rollno;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Roll No or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Login | Library Management System</title>
<style>
    body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #007bff, #00c6ff);
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-container {
        background: #fff;
        padding: 40px 50px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        width: 360px;
        text-align: center;
    }

    h2 {
        color: #007bff;
        margin-bottom: 25px;
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        outline: none;
        transition: 0.3s;
    }

    input:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background: linear-gradient(90deg, #007bff, #00c6ff);
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
    }

    input[type="submit"]:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }

    .error {
        color: red;
        font-size: 14px;
        margin-bottom: 10px;
    }

    footer {
        position: absolute;
        bottom: 20px;
        width: 100%;
        text-align: center;
        color: #fff;
        font-size: 14px;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Student Login</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="rollno" placeholder="Roll No" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>

<footer>
    Library Management System © 2025 | All Rights Reserved
</footer>

</body>
</html>

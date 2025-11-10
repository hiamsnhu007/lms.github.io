<?php
include('header.php');
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login | Library Management System</title>

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
      width: 380px;
      text-align: center;
    }

    h2 {
      color: #007bff;
      margin-bottom: 25px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
    }

    input[type="submit"] {
      width: 100%;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    input[type="submit"]:hover {
      background: linear-gradient(135deg, #0062cc, #0096cc);
    }

    .student-link {
      margin-top: 20px;
      color: #007bff;
      font-size: 14px;
    }

    .student-link a {
      color: #007bff;
      text-decoration: none;
      font-weight: 600;
    }

    .student-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <form method="post" action="loginauthenticate.php">
      <input type="text" name="staffid" placeholder="Staff ID" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="submit" value="Login" />
    </form>

    <div class="student-link">
  <p>Are you a student? <a href="../index.php">Click here</a> to go to Student Login</p>
</div>

  </div>
</body>
</html>

<?php include('footer.php'); ?>

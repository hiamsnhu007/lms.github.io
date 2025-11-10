<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Library Admin | Library Management System</title>

  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding-top: 70px; /* space for fixed navbar */
      background: linear-gradient(135deg, #007bff, #00c6ff);
      min-height: 100vh;
    }

    /* Unified Admin Navbar Styling */
    .admin-navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 60px;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 40px;
      color: #fff;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .admin-navbar .brand {
      font-size: 18px;
      font-weight: bold;
    }

    .admin-navbar .nav-links {
      display: flex;
      gap: 30px;
    }

    .admin-navbar .nav-links a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      transition: opacity 0.2s ease;
    }

    .admin-navbar .nav-links a:hover {
      opacity: 0.8;
    }

    /* Card/Content Styling */
    .content {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: calc(100vh - 100px);
      color: #f1e4e4ff;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 15px;
      color: white;
      font-size: 14px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

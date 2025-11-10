<?php
session_start();
require_once("connect.php");

// ✅ Step 1 — Make sure only logged-in admins can access
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// ✅ Step 2 — Include the navbar after session validation
include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Books | Library Admin</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: white;
      margin: 0;
      padding-top: 80px;
      text-align: center;
    }
    table {
      margin: 30px auto;
      border-collapse: collapse;
      width: 90%;
      background: white;
      color: black;
      border-radius: 10px;
      overflow: hidden;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #007bff;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    h2 {
      color: white;
    }
  </style>
</head>
<body>
  <h2>📚 Library Book List</h2>

  <?php
  // ✅ Step 3 — Fetch books from the database
  $sql = "SELECT * FROM books";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr>
              <th>ISBN</th>
              <th>Title</th>
              <th>Language</th>
              <th>Publisher</th>
              <th>MRP</th>
              <th>Quantity</th>
              <th>Publication Date</th>
            </tr>";
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['ISBN']}</td>
                  <td>{$row['TITLE']}</td>
                  <td>{$row['LANGUAGE']}</td>
                  <td>{$row['PUBLISHER']}</td>
                  <td>{$row['MRP']}</td>
                  <td>{$row['QUANTITY']}</td>
                  <td>{$row['PUB_DATE']}</td>
                </tr>";
      }
      echo "</table>";
  } else {
      echo "<p>No books found in the database.</p>";
  }
  ?>
</body>
</html>

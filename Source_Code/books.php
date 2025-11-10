<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Books | Admin Panel</title>
  <style>
    /* ===== NAVBAR ===== */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background: linear-gradient(90deg, #007bff, #00c6ff);
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 30px;
      padding-right: 40px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      z-index: 1000;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      font-family: "Poppins", sans-serif;
      font-weight: 500;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .navbar a:hover {
      color: #ffe600;
      transform: scale(1.05);
    }

    /* ===== PAGE STYLE ===== */
    body {
      font-family: "Poppins", sans-serif;
      background-color: white; /* ✅ white page background */
      color: #333;
      margin: 0;
      padding-top: 80px;
      text-align: center;
    }

    h2 {
      color: #007bff;
      margin-bottom: 20px;
      margin-top: 10px;
    }

    table {
      margin: 30px auto;
      border-collapse: collapse;
      width: 90%;
      max-width: 1000px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    th, td {
      padding: 14px 12px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #007bff;
      color: white;
      text-transform: uppercase;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    p {
      color: #555;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <a href="dashboard.php">Dashboard</a>
    <a href="books.php">Books</a>
    <a href="issued_books.php">Issued Books</a>
</div>

  <h2>📚 Library Book Records</h2>

  <?php
  $query = "SELECT ISBN, TITLE, LANGUAGE, PUBLISHER, MRP, PUB_DATE, QUANTITY FROM book";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "<p style='color:red;'>Error fetching data: " . mysqli_error($conn) . "</p>";
  } elseif (mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr>
              <th>ISBN</th>
              <th>Title</th>
              <th>Language</th>
              <th>Publisher</th>
              <th>MRP</th>
              <th>Publication Date</th>
              <th>Quantity</th>
            </tr>";
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['ISBN']}</td>
                  <td>{$row['TITLE']}</td>
                  <td>{$row['LANGUAGE']}</td>
                  <td>{$row['PUBLISHER']}</td>
                  <td>{$row['MRP']}</td>
                  <td>{$row['PUB_DATE']}</td>
                  <td>{$row['QUANTITY']}</td>
                </tr>";
      }
      echo "</table>";
  } else {
      echo "<p>No books found in the database.</p>";
  }
  ?>
</body>
</html>

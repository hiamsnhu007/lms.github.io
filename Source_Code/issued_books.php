<?php
include('dbconnect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Issued Books</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fc;
      color: #333;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #0062E6, #33AEFF);
      padding: 15px 40px;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 500;
      font-size: 16px;
      transition: 0.3s;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    /* Page Title */
    h2 {
      text-align: center;
      font-size: 28px;
      margin: 40px 0 30px 0;
      color: #003366;
      font-weight: 600;
    }

    /* Table Styling */
    .table-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-bottom: 60px;
    }

    table {
      width: 85%;
      border-collapse: collapse;
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    th {
      background: linear-gradient(90deg, #0062E6, #33AEFF);
      color: white;
      padding: 15px;
      text-align: left;
      font-weight: 600;
      font-size: 16px;
    }

    /* Alternate row colors */
    tr:nth-child(even) {
      background-color: #eaf3ff; /* Light blue */
    }

    tr:nth-child(odd) {
      background-color: #f9fcff; /* Very light blue */
    }

    td {
      padding: 14px 15px;
      border-bottom: 1px solid #ddd;
      font-size: 15px;
      color: #222;
    }

    tr:hover {
      background-color: #dbe9ff; /* Hover effect */
      transition: 0.3s ease;
    }

    .no-data {
      text-align: center;
      padding: 20px;
      color: #777;
      background-color: #f9fcff;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <a href="dashboard.php">Dashboard</a>
    <a href="books.php">Books</a>
    <a href="issued_books.php">Issued Books</a>
  </div>

  <h2>📘 Issued Books</h2>

  <div class="table-container">
    <table>
      <tr>
        <th>Student Roll No</th>
        <th>ISBN</th>
        <th>Issued Date</th>
        <th>Renewed Date</th>
        <th>Fine</th>
      </tr>

      <?php
      $sql = "SELECT * FROM issued_books";
      $result = mysqli_query($conn, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>" . htmlspecialchars($row['student_rollno']) . "</td>
                  <td>" . htmlspecialchars($row['ISBN']) . "</td>
                  <td>" . htmlspecialchars($row['ISSUED_DATE']) . "</td>
                  <td>" . htmlspecialchars($row['RENEWED_DATE']) . "</td>
                  <td>" . htmlspecialchars($row['FINE']) . "</td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='5' class='no-data'>No issued books found.</td></tr>";
      }
      ?>
    </table>
  </div>

</body>
</html>

<?php
include('dbconnect.php');
session_start();
$username = $_SESSION['username'] ?? 'Guest';

// Fetch books
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books | Library</title>
  <style>
    /* --- Base Styling --- */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #ffffff;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* --- Navbar --- */
    nav {
      background: linear-gradient(135deg, #007bff, #00c6ff);
      padding: 15px 40px;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
      margin: 0;
      padding: 0;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: 0.3s;
    }

    nav ul li a:hover {
      text-decoration: underline;
    }

    /* --- Page Heading --- */
    h2 {
      text-align: center;
      margin: 40px 0 25px;
      color: #007bff;
      font-size: 28px;
      letter-spacing: 1px;
    }

    /* --- Table Container --- */
    .table-container {
      width: 90%;
      margin: auto;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      flex-grow: 1;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
    }

    th, td {
      text-align: left;
      padding: 14px 20px;
    }

    th {
      background: linear-gradient(90deg, #007bff, #00c6ff);
      color: white;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    /* --- Table Rows --- */
    tbody tr {
      background: linear-gradient(90deg, #e3f2ff, #f5faff);
      transition: all 0.3s ease;
    }

    tbody tr:nth-child(even) {
      background: linear-gradient(90deg, #f0f8ff, #ffffff);
    }

    tbody tr:hover {
      background: linear-gradient(90deg, #d2e9ff, #eaf4ff);
      transform: scale(1.005);
    }

    td {
      border-bottom: 1px solid #f0f0f0;
    }

    /* --- Logout Button --- */
    .logout {
      text-align: center;
      margin: 40px 0;
    }

    .logout a {
      text-decoration: none;
      background: linear-gradient(90deg, #007bff, #00c6ff);
      color: #fff;
      padding: 10px 25px;
      border-radius: 8px;
      font-weight: 500;
      box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
      transition: 0.3s;
    }

    .logout a:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    /* --- Footer --- */
    footer {
      text-align: center;
      padding: 15px;
      background: #f8f9ff;
      color: #555;
      font-size: 14px;
      border-top: 1px solid #ddd;
      margin-top: auto;
    }

  </style>
</head>
<body>

  <nav>
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="books.php">Books</a></li>
      <li><a href="issued_books.php">Issued Books</a></li>
    </ul>
  </nav>

  <h2>📚 All Books</h2>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Book ID</th>
          <th>Title</th>
          <th>Author</th>
          <th>Category</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['book_id']; ?></td>
            <td><?php echo htmlspecialchars($row['title']); ?></td>
            <td><?php echo htmlspecialchars($row['author']); ?></td>
            <td><?php echo htmlspecialchars($row['category']); ?></td>
            <td><?php echo htmlspecialchars($row['status']); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="logout">
    <a href="logout.php">Log Out</a>
  </div>

  <footer>
    Library Management System © 2025 | All Rights Reserved
  </footer>

</body>
</html>

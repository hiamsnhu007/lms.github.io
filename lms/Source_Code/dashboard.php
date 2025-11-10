<?php
session_start();
include 'dbconnect.php';

// Function to safely get count
function getCount($conn, $table) {
    $result = mysqli_query($conn, "SELECT COUNT(*) as total FROM $table");
    $data = mysqli_fetch_assoc($result);
    return $data['total'];
}

// Get counts from database
$totalBooks = getCount($conn, "books");
$issuedBooks = getCount($conn, "issued_books");
$totalStudents = getCount($conn, "students");
$admins = getCount($conn, "employeee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Dashboard</title>
<style>
    body {
        font-family: "Poppins", sans-serif;
        background: #f4f7fc;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .navbar {
        background: linear-gradient(90deg, #007bff, #00c6ff);
        padding: 15px;
        display: flex;
        justify-content: flex-end;
        gap: 30px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .navbar a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
    }

    .navbar a:hover {
        text-decoration: underline;
    }

    h2 {
        margin-top: 40px;
        color: #333;
    }

    .dashboard {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        justify-content: center;
        max-width: 800px;
        margin: 50px auto;
    }

    .card {
        background: linear-gradient(135deg, #007bff, #00c6ff);
        color: white;
        padding: 40px 20px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    .card h3 {
        margin: 0;
        font-size: 20px;
    }

    .card p {
        margin: 10px 0 0;
        font-size: 30px;
        font-weight: bold;
    }

    .logout {
        display: block;
        margin: 40px auto;
        text-decoration: none;
        color: #007bff;
        font-weight: 600;
    }

    .logout:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="navbar">
    <a href="dashboard.php">Dashboard</a>
    <a href="books.php">Books</a>
    <a href="issued_books.php">Issued Books</a>
</div>


<div class="dashboard">
    <div class="card">
        <h3>Total Books</h3>
        <p><?php echo $totalBooks; ?></p>
    </div>

    <div class="card">
        <h3>Issued Books</h3>
        <p><?php echo $issuedBooks; ?></p>
    </div>

    <div class="card">
        <h3>Total Students</h3>
        <p><?php echo $totalStudents; ?></p>
    </div>

    <div class="card">
        <h3>Admins / Librarians</h3>
        <p><?php echo $admins; ?></p>
    </div>
</div>

<a href="logout.php" class="logout">Log Out</a>

</body>
</html>

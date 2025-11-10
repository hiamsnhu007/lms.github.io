<?php
session_start();
include("connect.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $language = $_POST['language'];
    $publisher = $_POST['publisher'];
    $mrp = $_POST['mrp'];
    $quantity = $_POST['quantity'];
    $pub_date = $_POST['pub_date'];

    $sql = "INSERT INTO book (ISBN, TITLE, LANGUAGE, PUBLISHER, MRP, QUANTITY, PUB_DATE)
            VALUES ('$isbn', '$title', '$language', '$publisher', '$mrp', '$quantity', '$pub_date')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Book added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding book. Please check your input.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Book | Library Admin</title>
<style>
body {
  font-family: "Poppins", sans-serif;
  margin: 0;
  background-color: #f8f9fa;
}

/* Navbar */
.navbar {
  position: fixed;
  top: 0; left: 0;
  width: 100%;
  height: 60px;
  background: linear-gradient(90deg, #007bff, #00c6ff);
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 30px;
  padding-right: 40px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
  z-index: 1000;
}
.navbar a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: 0.3s;
}
.navbar a:hover {
  color: #ffe600;
  transform: scale(1.05);
}

/* Form styling */
.container {
  margin-top: 100px;
  max-width: 600px;
  background: white;
  padding: 30px 40px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  margin-left: auto;
  margin-right: auto;
}
h2 {
  text-align: center;
  color: #007bff;
  margin-bottom: 25px;
}
input[type="text"],
input[type="number"],
input[type="date"] {
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
}
input[type="submit"] {
  width: 100%;
  padding: 12px;
  background: linear-gradient(90deg, #007bff, #00c6ff);
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}
input[type="submit"]:hover {
  background: linear-gradient(90deg, #0062cc, #0096cc);
}
</style>
</head>

<body>
  <div class="navbar">
  <a href="home.php"> Home</a>
  <a href="addBook.php"> Books</a>
  <a href="issuebooks.php">Issue Book</a>
  <a href="removeBook.php">remove Book</a>
  <a href="logout.php">Logout</a>
</div>


  <div class="container">
    <h2> Add New Book</h2>
    <form method="POST" action="">
      <input type="text" name="isbn" placeholder="ISBN" required>
      <input type="text" name="title" placeholder="Book Title" required>
      <input type="text" name="language" placeholder="Language" required>
      <input type="text" name="publisher" placeholder="Publisher" required>
      <input type="number" name="mrp" placeholder="MRP" required>
      <input type="number" name="quantity" placeholder="Quantity" required>
      <label>Publication Date:</label>
      <input type="date" name="pub_date" required>
      <input type="submit" value="Add Book">
    </form>
  </div>
</body>
</html>

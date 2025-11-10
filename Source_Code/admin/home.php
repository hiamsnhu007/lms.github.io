<?php
session_start();

// ✅ Protect admin page
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// ✅ Optional: include database connection if needed
require_once('connect.php');

// ✅ Include layout files
include('header.php');
include('navbar.php');
?>

<style>
    body {
        background: linear-gradient(135deg, #007bff, #00c6ff);
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    .dashboard-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        text-align: center;
    }

    .dashboard-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.1);
        padding: 40px;
        max-width: 600px;
        width: 100%;
        transition: transform 0.3s ease;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
    }

    .dashboard-card h2 {
        color: #007bff;
        margin-bottom: 15px;
        font-size: 28px;
        font-weight: 600;
    }

    .dashboard-card p {
        color: #555;
        font-size: 16px;
        margin-bottom: 25px;
    }

    .dashboard-actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .dashboard-btn {
        background: linear-gradient(90deg, #007bff, #00c6ff);
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .dashboard-btn:hover {
        background: linear-gradient(90deg, #0056b3, #0099cc);
        transform: scale(1.05);
    }
</style>

<div class="dashboard-container">
    <div class="dashboard-card">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_id']); ?> 👋</h2>
        <p>You’ve successfully logged into the <strong>Admin Dashboard</strong></p>

         <div class="navbar">
  <a href="home.php"> Home</a>
  <a href="addBook.php"> Books</a>
  <a href="issuebooks.php">Issue Book</a>
  <a href="removeBook.php">remove Book</a>
  <a href="logout.php">Logout</a>
</div>
    </div>
</div>

<?php include('footer.php'); ?>

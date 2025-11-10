<?php
require_once('connect.php');
session_start();
include 'header.php';
include('navbar.php');
?>

<style>
body {
  font-family: "Poppins", sans-serif;
  background-color: #f8f9fa;
  margin: 0;
  padding: 0;
}

/* Main container */
.main-content-inner {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  min-height: 80vh;
  padding-top: 100px;
}

/* Card styling */
.card {
  background: #ffffff;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 600px;
  padding: 30px 40px;
}

.card-body h2 {
  text-align: center;
  color: #007bff;
  margin-bottom: 25px;
  font-weight: 600;
}

/* Input fields */
.form-control {
  width: 100%;
  padding: 12px;
  margin-bottom: 18px;
  border-radius: 8px;
  border: 1px solid #ccc;
  transition: all 0.3s ease;
  font-size: 15px;
}

.form-control:focus {
  border-color: #007bff;
  box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
  outline: none;
}

/* Submit button */
.btn-primary {
  width: 100%;
  background: linear-gradient(90deg, #007bff, #00c6ff);
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.btn-primary:hover {
  background: linear-gradient(90deg, #0062cc, #0096cc);
  transform: translateY(-2px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .card {
    padding: 25px;
    margin: 20px;
  }
}
</style>

<div class="main-content-inner">
  <div class="card">
    <div class="card-body">
      <h2>📘 Issue Book</h2>
      <form class="needs-validation" novalidate method="post" action="issuedb.php"> 
        <input type="text" class="form-control" placeholder="Student Roll No" name="rollno" required>
        <input type="text" class="form-control" placeholder="Book ISBN" name="ISBN" required>
        <label style="font-weight: 500;">Issue Date:</label>
        <input type="date" class="form-control" name="issue_date" required>
        <input type="submit" value="Issue Book" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

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

.card-header {
  background: linear-gradient(90deg, #007bff, #00c6ff);
  color: white;
  font-size: 22px;
  text-align: center;
  border-radius: 15px 15px 0 0;
  padding: 15px 0;
  font-weight: 600;
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
  display: block;              /* Makes it a block element */
  margin: 20px auto;           /* Centers it horizontally */
  width: 50%;                  /* Keeps your desired width */
  background: linear-gradient(90deg, #007bff, #00c6ff);
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  text-align: center;          /* Centers the text inside */
}

.btn-primary:hover {
  background: linear-gradient(90deg, #0062cc, #0096cc);
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
    <h2 class="card-header">Remove Book</h2>
    <div class="card-body">
      <form class="needs-validation" novalidate method="post" action="delFromdb.php"> 
        <input type="text" class="form-control" placeholder="Enter Book ISBN" name="ISBN" required>
        <input type="submit" value="Remove Book" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

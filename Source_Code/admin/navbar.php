<style>
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
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  transition: 0.3s;
}
.navbar a:hover { 
  color: #ffe600; 
  transform: scale(1.05); 
}
body { margin: 0; }
</style>

<div class="navbar">
  <a href="home.php"> Home</a>
  <a href="addBook.php"> Books</a>
  <a href="issuebooks.php">Issue Book</a>
  <a href="removeBook.php">remove Book</a>
  <a href="logout.php">Logout</a>
</div>

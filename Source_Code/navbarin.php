<?php
// Start the session (only once)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include the database connection
include 'dbconnect.php';
?>

<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="dashboard.php"><img src="fcrit.svg" width="150" height="155" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li><a href="dashboard.php"><i class="ti-map-alt"></i> <span>Dashboard</span></a></li>
                    <li><a href="books.php"><i class="ti-book"></i> <span>Books</span></a></li>
                    <li><a href="issuedbooks.php"><i class="ti-clipboard"></i> <span>Issued Books</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->

<!-- main content area start -->
<div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="search-box pull-left">
                    <form action="back.php" method="POST">
                        <input type="text" name="searchquery" placeholder="Search..." onchange="this.form.submit();" required>
                        <i class="ti-search"></i>
                    </form>
                </div>
            </div>

            <!-- profile info & task notification -->
            <div class="col-md-6 col-sm-4 clearfix">
                <ul class="notification-area pull-right">
                    <li id="full-view"><i class="ti-fullscreen"></i></li>
                    <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- header area end -->

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <!-- Optional: you can show page title here -->
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                        <?php
                        // Check if user is logged in
                        if (isset($_SESSION['rollno'])) {
                            $rollno = $_SESSION['rollno'];
                            $query = "SELECT name FROM students WHERE rollno = '$rollno'";
                            $result = mysqli_query($conn, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                echo "Hi, " . htmlspecialchars($row['name']) . "!";
                            } else {
                                echo "Hi, Student!";
                            }
                        } else {
                            echo "Hi, Guest!";
                        }
                        ?>
                        <i class="fa fa-angle-down"></i>
                    </h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

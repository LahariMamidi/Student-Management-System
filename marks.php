<?php
session_start();

if (!isset($_SESSION['rollno'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System(Marks Page)</title>
    <link rel="stylesheet" href="marks.css">
</head>
<body>
    <a href="#top"><button class="r-fixed-button">Back to Top</button></a>
    <a href="courses.php"><button class="l-fixed-button">Courses</button></a>
    <div id="top">
        <nav class="nav-container">
            <div class="nav-ele-container">
                <div>
                    <img class="narayana-logo" src="narayana-logo.png" alt="NECN">
                </div>
                <div>
                    <ul class="nav-ele-list">
                        <li ><a class="nav-ele" href="home_page.php">Home</a></li>
                        <li><a class="nav-ele" href="notifi_page.php">Notifications</a></li>
                        <li><a class="nav-ele" href="dashboard_page.php">Dashboard</a></li>
                        <li><a class="nav-ele" href="about_page.php">About</a></li>
                    </ul>
                </div> 
                <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn">More</button>
                    <div id="dropdownContent" class="dropdown-content">
                        <!-- <h1 style="text-align: center; color: black;font-size: 20px;">Profile</h1> -->
                        <!-- <a href="login_page.html">Login</a> -->
                        <a href="index.php">Sign Out</a>
                    </div>
                </div>
                <script src="login_page.js"></script>
                <!-- <div>
                    <button class="lg-btn"><a class="login-btn" href="login_page.html">Login</a></button>
                </div> -->
                <div>
                    <img class="narayana-achi" src="narayana-achieve.jpeg" alt="narayana-achievements">
                </div>
            </div>
        </nav>
    </div>

    <div class="marks-bg-container">
        <div class="marks-container">
            <div id="tables-container"></div>
            <script src="marks.js"></script>
        </div>
    </div>

</body>
</html>
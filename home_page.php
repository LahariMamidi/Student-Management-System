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
    <title>Student Management System(Home Page)</title>
    <link rel="stylesheet" href="home_page.css">
</head>
<body>
    <div>
        <nav class="nav-container">
            <div class="nav-ele-container">
                <div>
                    <img class="narayana-logo" src="narayana-logo.png" alt="NECN">
                </div>
                <div>
                    <ul class="nav-ele-list">
                        <li ><a class="nav-ele active" href="home_page.php">Home</a></li>
                        <li><a class="nav-ele" href="notifi_page.php">Notifications</a></li>
                        <li><a class="nav-ele" href="dashboard_page.php">Dashboard</a></li>
                        <li><a class="nav-ele" href="about_page.php">About</a></li>
                    </ul>
                </div> 
                <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn">
                        <img src="profile6.png" style="width:40px; height:40px;margin-top:-10px;"/>
                    </button>
                    <div id="dropdownContent" class="dropdown-content">
                        <a href="logout.php">Sign Out</a>
                        <a href="reset_pass.php">Reset Password</a>
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
        <div class="home-part1">
            <div class="home-img-container">
                <img class="home-img" src="home-img3.jpg" alt="Home Image"/>
            </div>
            <div class="home-desc-container">
                <h1 class="home-head">Welcome!</h1>
                <p class="home-desc">Step into a world of empowerment with our Student Management System. 
                    From attendance to grades and courses, we've got you covered, 
                    making your educational journey a breeze. Together, let's unlock 
                    potential, nurture growth, and celebrate every success. Welcome 
                    to a brighter future in academics!</p>
            </div>
        </div>
    </div>
</body>
</html>
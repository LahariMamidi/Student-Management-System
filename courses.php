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
    <title>Student Management System(Courses Page)</title>
    <link rel="stylesheet" href="courses.css">
</head>

<body>
    <a href="#top"><button class="r-fixed-button">Back to Top</button></a>
    <a href="marks.php"><button class="l-fixed-button">Marks</button></a>
    <div id="top">
        <nav class="nav-container">
            <div class="nav-ele-container">
                <div>
                    <img class="narayana-logo" src="narayana-logo.png" alt="NECN">
                </div>
                <div>
                    <ul class="nav-ele-list">
                        <li><a class="nav-ele" href="home_page.php">Home</a></li>
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
                        <a href="index.php">Sign Out</a>
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

        <div class="courses-bg-container">
            <div class="sem-groups">
                <div class="sem-blocks">
                    <div class="dropdown "  id="dropdown1">
                        <button class="dropdown-btn">I BTECH :: I SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table1"></table>
                        </div>
                    </div>

                    <div class="dropdown"  id="dropdown2">
                        <button class="dropdown-btn">I BTECH :: II SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table2"></table>
                        </div>
                    </div>

                    <div class="dropdown"  id="dropdown3">
                        <button class="dropdown-btn">II BTECH :: I SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table3"></table>
                        </div>
                    </div>

                <div class="sem-blocks">
                    <div class="dropdown"  id="dropdown4">
                        <button class="dropdown-btn">II BTECH :: II SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table4"></table>
                        </div>
                    </div>

                    <div class="dropdown"  id="dropdown5">
                        <button class="dropdown-btn">III BTECH :: I SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table5"></table>
                        </div>
                    </div>

                    <div class="dropdown"  id="dropdown6">
                        <button class="dropdown-btn">III BTECH :: II SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table6"></table>
                        </div>
                    </div>
                </div>

                <div class="sem-blocks">
                    <div class="dropdown"  id="dropdown7">
                        <button class="dropdown-btn">IV BTECH :: I SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table7"></table>
                        </div>
                    </div>

                    <div class="dropdown"  id="dropdown8">
                        <button class="dropdown-btn">IV BTECH :: II SEMESTER</button>
                        <div class="dropdown-content">
                            <table id="dropdown-table8"></table>
                        </div>
                    </div>
                </div>
            </div>

            <script src="courses.js"></script>
        </div>
    </div>
</body>

</html>
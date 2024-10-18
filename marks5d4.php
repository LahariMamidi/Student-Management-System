<?php
require "db.php";

session_start();

if (!isset($_SESSION['rollno'])) {
    header("Location: index.php");
    exit();
}
// Fetch dashboard data
// $dashboard_sql = "SELECT * FROM dashboard WHERE RollNo = ?";
// $dashboard_stmt = $conn->prepare($dashboard_sql);
// $dashboard_stmt->bind_param("s", $rollno);
// $dashboard_stmt->execute();
// $dashboard_result = $dashboard_stmt->get_result();
// $dashboard_data = $dashboard_result->fetch_assoc();
// $mark_list=$dashboard_data['Marks'];

// Fetch profile data
$rollno = $_SESSION['rollno'];
$profile_sql = "SELECT * FROM profile WHERE RollNo = ?";
$profile_stmt = $conn->prepare($profile_sql);
$profile_stmt->bind_param("s", $rollno);
$profile_stmt->execute();
$profile_result = $profile_stmt->get_result();
$profile_data = $profile_result->fetch_assoc();

$conn->close();
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
    </div>

    <div class="marks-bg-container">
    <h1 style="color:brown;"><?php echo htmlspecialchars($profile_data['Intro']); ?>'s Mark List</h1>
        <div class="marks-container">
            <div id="tables-container"></div>
            <script src="marks.js"></script>
        </div>
    </div>

</body>
</html>
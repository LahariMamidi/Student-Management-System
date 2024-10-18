<?php
require "db.php";
session_start();

if (!isset($_SESSION['rollno'])) {
    header("Location: index.php");
    exit();
}
$sql = "SELECT * FROM notifi";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System(Notification Page)</title>
    <link rel="stylesheet" href="notifi_page.css">
</head>

<body>
    <a href="#about-top"><button class="fixed-button">Go to Top</button></a>
    <div id="about-top">
        <nav class="nav-container">
            <div class="nav-ele-container">
                <div>
                    <img class="narayana-logo" src="narayana-logo.png" alt="NECN">
                </div>
                <div>
                    <ul class="nav-ele-list">
                        <li ><a class="nav-ele" href="home_page.php">Home</a></li>
                        <li><a class="nav-ele active" href="notifi_page.php">Notifications</a></li>
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

        <div class="notifi-bg-container">
            <h1 style="text-align: center;font-size: 34px;padding: 20px;">Notifications/Events</h1>
            <div id="cardContainer" class="vertical">
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='card'>";
                        echo "<img src='" . $row["Logo"] . "' alt='".$row["Department"]. "'>";
                        echo "<div>";
                        echo "<h3>" . $row["Department"] . "</h3>";
                        echo "</div>";
                        echo "<div>";
                        echo "<h3>" . $row["Type"] . "</h3>";
                        echo "</div>";
                        echo "<div>";
                        echo "<p>" . $row["Name"] . "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "No Data";
                }
                $conn->close();
            ?>
        </div>
    </div>
</body>

</html>



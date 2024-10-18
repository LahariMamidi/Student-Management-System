<?php
require "db.php";
session_start();

if (!isset($_SESSION['rollno'])) {
    header("Location: index.php");
    exit();
}

$rollno = $_SESSION['rollno'];
$profile_sql = "SELECT * FROM profile WHERE RollNo = ?";
$profile_stmt = $conn->prepare($profile_sql);
$profile_stmt->bind_param("s", $rollno);
$profile_stmt->execute();
$profile_result = $profile_stmt->get_result();
$profile_data = $profile_result->fetch_assoc();

$dashboard_sql = "SELECT * FROM dashboard WHERE RollNo = ?";
$dashboard_stmt = $conn->prepare($dashboard_sql);
$dashboard_stmt->bind_param("s", $rollno);
$dashboard_stmt->execute();
$dashboard_result = $dashboard_stmt->get_result();
$dashboard_data = $dashboard_result->fetch_assoc();
$attendance = $dashboard_data['Attendance'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System(Dashboard)</title>
    <link rel="stylesheet" href="dashboard_page.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
                        <li ><a class="nav-ele" href="home_page.php">Home</a></li>
                        <li><a class="nav-ele" href="notifi_page.php">Notifications</a></li>
                        <li><a class="nav-ele active" href="dashboard_page.php">Dashboard</a></li>
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

        <div class="dashboard-full-container">
            <div style="background-color: rgb(250, 155, 30);width: 100vw;">
                <h1 style="color: white;font-size: 33px;text-align: center;">Welcome <?php echo htmlspecialchars($profile_data['Intro']); ?> !</h1>
            </div>
            <div class="dashboard-bg-container">
                <div class="profile-container">
                    <img class="profile-img" src="profile.png" alt="Profile">
                    <h1 class="profile-head">Profile</h1>
                    <table>
                        <tr>
                            <th class="profile-key">Name:</th>
                            <td class="profile-value"><?php echo htmlspecialchars($profile_data['Name']); ?></td>
                        </tr>
                        <tr>
                            <th class="profile-key">Roll No:</th>
                            <td class="profile-value"><?php echo htmlspecialchars($profile_data['RollNo']); ?></td>
                        </tr>
                        <tr>
                            <th class="profile-key">Branch:</th>
                            <td class="profile-value"><?php echo htmlspecialchars($profile_data['Branch']); ?></td>
                        </tr>
                        <tr>
                            <th class="profile-key">Year:</th>
                            <td class="profile-value"><?php echo htmlspecialchars($profile_data['Year']); ?></td>
                        </tr>
                    </table>
                </div>
                <div class="dashboard-container">
                    <div class="dashboard-card">
                        <h1 class="dash-desc">Attendance</h1>
                        <div class="donut-container">
                            <canvas id="myChart" style="width:100%; max-width:600px"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const attendance = <?php echo $attendance; ?>;
                            const xValues = ["Present","Absent"];
                            const yValues = [attendance, (100-attendance)];
                            const barColors = [
                                "#10e141",
                                "#ff0e0e"
                            ];
                            new Chart("myChart", {
                                type: "doughnut",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                    }]
                                },
                                options: {
                                    title: {
                                        display: true,
                                        text: "Attendance",
                                    }
                                }
                            });
                        </script>
                    </div>

                    <div class="dashboard-card">
                        <h1 class="dash-desc">Marks</h1>
                        <a href= "<?php echo htmlspecialchars($dashboard_data['Marks']); ?>" >
                            <img style="width: 250px;" class="dash-img" src="marks.png" alt="Marks"></a>
                    </div>

                    <div class="dashboard-card">
                        <h1 class="dash-desc">Courses</h1>
                        <a href="courses.php"><img class="dash-img" src="courses.png" alt="Courses"></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
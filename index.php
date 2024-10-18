<?php
require "db.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST['rollno'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM login WHERE RollNo = ? AND Password = ?");
    $stmt->bind_param("ss", $rollno, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['rollno'] = $rollno;
        header("Location: home_page.php"); 
        exit();
    } else {
        $error = "Invalid Roll Number or Password";
        echo '<script>';
        echo 'alert("Invalid Roll Number or Password")';
        echo '</script>';
    }
    $stmt->close();
}
$conn->close(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System(Login Page)</title>
    <link rel="stylesheet" href="start_page.css">
</head>
<body>
    <div>
        <nav class="nav-container">
            <div class="nav-ele-container">
                <div>
                    <img class="narayana-logo" src="narayana-logo.png" alt="NECN">
                </div>
                <div>
                    <h1 style="color: white;font-size: 38px;margin-bottom: 5px;font-family: cursive;">Narayana Engineering College::Nellore</h1>
                </div>
                <div>
                    <img class="narayana-achi" src="narayana-achieve.jpeg" alt="narayana-achievements">
                </div>
            </div>
            
        </nav>
        <div class="login-bg-container">
            <form id="myForm" action="" method="post">
                <div class="table-border">
                <table class="table-styling">
                    <tr>
                        <td><label class="table-data" for="rollno">Username:</label></td>
                        <td><input class="table-input" type="text" id="rollno" name="rollno" required placeholder="Roll No"></td>
                    </tr>
                    <tr>
                        <td><label class="table-data" for="password">Password:</label></td>
                        <td><input class="table-input" type="password" id="password" name="password" required placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="2"><button class="log-btn" type="submit" id="login-btn">Login</button></td>
                    </tr>
                    <tr>
                        <td style="text-align: end; height: 50px;" colspan="2"><a class="forgot" href="reset_pass.php">Forgotten Password?</a></td>
                    </tr>
                </table>
            </div>
            </form>
        </div>
    </div>
    <!-- <script src="start_page.js"></script> -->
</body>
</html>
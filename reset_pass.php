<?php
require "db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST["rollno"];
    $new_password = $_POST["npass"];
    $confirm_password = $_POST["cpass"];
    if ($new_password === $confirm_password) {
        $sql = "SELECT RollNo FROM login WHERE RollNo = '$rollno'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $update_sql = "UPDATE login SET Password = '$new_password' WHERE RollNo = '$rollno'";
            if ($conn->query($update_sql) === true) {
                echo '<script>alert("Password is updated Successfully")</script>';
                // header("Location: index.php");
                echo "<script>window.location.href = 'index.php';</script>";
                exit();
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo '<script>alert("Roll number not found.")</script>';
        }
    } else {
        echo '<script>alert("New password and confirm password do not match.")</script>';
    }
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System(Password Reset Page)</title>
    <link rel="stylesheet" href="login_page.css">
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
            <form method="post" action=""> 
                <div class="table-border">
                <table class="table-styling">
                    <tr>
                        <td><label class="table-data" for="rollno">Username:</label></td>
                        <td><input class="table-input" type="text" id="rollno" name="rollno" required placeholder="Roll No"></td>
                    </tr>
                    <tr>
                        <td><label class="table-data" for="password">New Password:</label></td>
                        <td><input class="table-input" type="password" id="new-password" name="npass" required placeholder="New Password"></td>
                    </tr>
                    <tr>
                        <td><label class="table-data" for="password">Confirm Password:</label></td>
                        <td><input class="table-input" type="password" id="password" name="cpass" required placeholder="Confirm Password"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="2"><button class="log-btn" type="submit" id="login-btn">Reset</button></td>
                    </tr>
                </table>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
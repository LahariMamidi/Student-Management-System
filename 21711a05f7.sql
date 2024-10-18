-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 06:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21711a05f7`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `RollNo` varchar(100) NOT NULL,
  `Attendance` int(100) NOT NULL,
  `Marks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`RollNo`, `Attendance`, `Marks`) VALUES
('21711A05D4', 97, 'marks5d4.php'),
('21711A05F4', 90, 'marks5f4.php'),
('21711A05F7', 87, 'marks5f7.php');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `RollNo` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`RollNo`, `Password`) VALUES
('21711A05D4', 'Student@5d4'),
('21711A05F4', 'Student@5f4'),
('21711A05F7', 'Student@5f7');

-- --------------------------------------------------------

--
-- Table structure for table `notifi`
--

CREATE TABLE `notifi` (
  `Logo` text NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifi`
--

INSERT INTO `notifi` (`Logo`, `Department`, `Type`, `Name`) VALUES
('cse.png', 'CSE', 'Notification', 'III year Semester-I result are out'),
('ece.png', 'ECE', 'Event', 'ECTRONS-2K24'),
('eee.png', 'EEE', 'Event', 'Technical Simposium'),
('civil.png', 'CIVIL', 'Event', 'One day workshop on Quality and Safety'),
('mech.png', 'MECH', 'Notification', 'III year Semester-I results are out.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Name` varchar(200) NOT NULL,
  `RollNo` varchar(100) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Intro` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Name`, `RollNo`, `Branch`, `Year`, `Intro`) VALUES
('D. Ashrith', '21711A05D4', 'CSE', 'III', 'Ashrith'),
('M. Lahari', '21711A05F7', 'CSE', 'III', 'Lahari'),
('K. Sravani', '21711A05F4', 'CSE', 'III', 'Sravani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD KEY `fk_dashboard_rollno` (`RollNo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`RollNo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD CONSTRAINT `fk_dashboard_rollno` FOREIGN KEY (`RollNo`) REFERENCES `login` (`RollNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

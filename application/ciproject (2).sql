-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 06:09 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL,
  `kk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`, `kk`) VALUES
(4, 'superadmin', '$2y$10$eo7.w0Ttuy8mOBMvDlGqDeewQERkXu//7qO3jXp5NC76LwfAZpNrO', 'coLLCS95uVEQ3NVF', '$2y$10$nALX9g1jZP3ydPfgXyN3rOTRaS24RnykBroDFgc1r7D5HXG4P4Q8q', '2023-02-27 17:39:21', 'super', NULL),
(8, 'admin', '$2y$10$ChHFQ3WsAaTLRfxWKnJ6uuOqHpgWfFDalZMIJRXKut//gdbP6S3Ki', 'Th2WxQu6avoeYDuk', '$2y$10$.cyWjEdxpwwcLjiobmTlae5v3Xls4jp8MZoLa9gOyftfzyRoaVwtC', '2023-02-27 17:39:06', 'admin', NULL),
(16, 'ashwini', '$2y$10$Pbwz5GYXz0bTK6nkiIoRR.JwIGg4FoOfpZyiBkGw8g6rROzDh./6C', NULL, NULL, NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `f_name`, `l_name`, `gender`, `address`, `city`, `state`, `phone`, `email`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'chetan', 'Shenai', 'female', 'waaw awf', NULL, 'Maharashtra', '99878', 'chetanshenai9@gmail.com', '2019-07-23', '2019-07-22 20:12:30', '2019-07-22 20:12:41'),
(2, 'Cfree', 'wawfaf', 'male', 'piohh', NULL, 'Madhya pradesh', '09975342821', 'cgtarta@ll.com', '2020-10-14', '2020-10-24 15:46:45', '2020-10-24 15:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_info` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `admin_type` varchar(255) DEFAULT 'employee',
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`id`, `first_name`, `last_name`, `birth_date`, `gender`, `job_title`, `job_info`, `email`, `password`, `confirm_password`, `admin_type`, `admin`) VALUES
(1, 'prajakta12', 'bhosale', '2022-12-12', 'female', 'Devloper', 'php devloper', 'prajakta11.absoft@gmail.com', 'prajakta12', 'prajakta12', 'employee', 8),
(2, 'kiran', 'chavan', '2023-01-01', 'female', 'Devloper', 'php devloper', 'kiran.absoft@gmail.com', 'kiran', 'kiran', 'employee', 8),
(4, 'rani', 'rani', '2023-01-22', 'female', 'developer', 'developer', 'rani@gmail.com', 'rani', 'rani', 'employee', 8),
(6, 'किरण', 'किरण', '2023-01-01', 'female', 'php ?????', 'php ?????', 'kc@gmail.com', '1234', '1234', 'employee', 8),
(7, 'Ashwini', 'sonawane', '0000-00-00', 'female', 'DM', 'NA', 'ashwinisonawane.absoft@gmail.com', 'Ashwini@2023', 'Ashwini@2023', 'employee', 4);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `personn` varchar(100) NOT NULL,
  `photo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `date`, `category`, `amount`, `personn`, `photo`) VALUES
(91, '2023-02-21', 'Housing', 4000, 'kartik mane', 'logo_1676965097.jpg'),
(92, '2023-03-02', 'Transportation', 8000, 'pratiksha', 'logo_1676964217.jpg'),
(93, '2023-03-09', 'Food', 500, 'Gaurav shinde', 'logo_1676972285.jpg'),
(94, '2023-02-16', 'Clothing', 1000, 'Nirmal Kadam', 'logo_1676964289.jpg'),
(95, '2023-03-10', 'Medical/Healthcare', 9000, 'Prajwal', 'logo_1676964332.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `deadline` date NOT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  `exdate` date DEFAULT NULL,
  `status` text NOT NULL,
  `assign` text NOT NULL,
  `textarea` text NOT NULL,
  `audio` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `date`, `deadline`, `starttime`, `endtime`, `exdate`, `status`, `assign`, `textarea`, `audio`, `image`) VALUES
(7, '2023-01-13', '2023-01-19', '11:18:00', '16:19:00', '2023-01-27', 'open', '1', 'Work in progress', '', ''),
(8, '2023-01-13', '2023-01-19', '12:22:00', '14:22:00', '2023-01-24', 'open', '1', 'Work IS hold', '', ''),
(20, '2023-01-18', '2023-01-19', '00:00:00', '00:00:00', '0000-00-00', 'open', '1', 'आजच्या युगात निसर्ग आपल्या जीवनाचा अविभाज्य भाग आहे. अनेक प्रसिद्ध कवी, लेखक, चित्रकार व कलाकार यांनी निसर्गाबद्दल अनेक सुंदर रचना केल्या आहेत. आपल्या सभोवताली असलेले पाणी, हवा, जंगल, पर्वत, नदी, झाडे, भूमी, सूर्य, चंद्र, आकाश, समुद्र इत्यादी गोष्टींपासून निसर्ग बनतो. निसर्ग अनंत रंगांनी भरलेला आहे ज्याने आपल्या कुशीत सजीव निर्जीव सर्व जीवांना सामावून घेतले आहे. ', '', ''),
(21, '2023-01-20', '2023-01-13', '00:00:00', '00:00:00', '1970-01-01', 'hold', '1', 'The best selection of Royalty Free No Picture Vector Art, Graphics and Stock Illustrations. Download 3800+ Royalty Free No Picture Vector Images.', '', ''),
(28, '2023-01-18', '2023-01-19', '00:00:00', '00:00:00', NULL, '0', '1', 'okkk kiran', 'kk.mp3', 'bg2.jpg'),
(29, '2023-01-01', '2023-01-02', '00:00:00', '00:00:00', '2023-01-21', 'hold', '1', 'task is not avilable', '', ''),
(30, '2023-01-30', '2023-01-31', '00:00:00', '00:00:00', '0000-00-00', '0', '2', 'Changes in folloup app', '', '271C0DB0-C949-4DA4-89ED-0DAB626FC47B.jpeg'),
(31, '2023-01-30', '2023-01-31', '00:00:00', '00:00:00', '0000-00-00', 'open', '2', 'Follow up process', 'Recording.m4a', 'download (2).jpg'),
(32, '2023-01-30', '2023-01-31', '00:00:00', '00:00:00', '0000-00-00', 'open', '2', 'follow ...up', '', 'download (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `userName` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `userName`, `password`) VALUES
(1, 'admin', 'Test@12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` char(12) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstName`, `lastName`, `emailId`, `mobileNumber`, `userPassword`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(1, 'Anuj', 'Kumar', 'test@gmail.com', '1234567890', 'Test@12345', '2018-12-17 18:30:00', 1, '2018-12-25 06:15:43'),
(2, 'Sarita', 'Pandey', 'phpgurukulofficial@gmail.com', '1234567890', 'Test@123', '2018-12-18 17:40:40', 1, '2018-12-22 05:33:41'),
(3, 'Testuser', 'User', 'user@test.com', '1111111112', 'Test@12345', '2018-12-25 17:57:43', 1, '2018-12-25 18:36:18'),
(4, 'Abc', 'Xyz', 'abc@xyz.com', '1234567908', 'Test@123', '2018-12-25 18:43:33', 1, NULL),
(5, 'Nirmal', 'kadam', 'nirmal@gmail.com', '9552665266', 'nirmal123', '2023-01-09 10:08:16', 1, '2023-01-20 11:01:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

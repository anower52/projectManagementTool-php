-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 05:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign-project`
--

CREATE TABLE `assign-project` (
  `Id` int(150) NOT NULL,
  `Project-Id` int(150) NOT NULL,
  `User-Id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign-project`
--

INSERT INTO `assign-project` (`Id`, `Project-Id`, `User-Id`) VALUES
(2, 5, 2),
(4, 4, 3),
(5, 4, 2),
(6, 6, 4),
(7, 7, 8),
(8, 4, 10),
(9, 4, 13),
(10, 4, 14),
(11, 7, 15);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `task_id` int(11) NOT NULL,
  `commented_by` varchar(255) NOT NULL,
  `comment` varchar(512) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `project_id`, `task_id`, `commented_by`, `comment`, `date`) VALUES
(2, 4, 6, 'Tipu', 'Hello Anower! Are you there?!!!!', '2017-12-26 23:03:33'),
(3, 6, 3, 'Tipu', '', '2017-12-26 23:10:46'),
(4, 4, 5, 'Tipu', 'require UI !! ', '2017-12-27 14:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `Id` int(150) NOT NULL,
  `user_info_id` int(11) DEFAULT NULL,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `UserType` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`Id`, `user_info_id`, `UserName`, `Password`, `UserType`) VALUES
(1, NULL, 'admin', 'admin123', 'Admin'),
(4, NULL, 'anower', '123', 'Project Manager'),
(5, NULL, 'tipu', 'tipu', 'Project Manager'),
(6, NULL, 'omi', 'omi', 'Project Manager'),
(7, NULL, 'anik', 'anik', 'Project Manager');

-- --------------------------------------------------------

--
-- Table structure for table `project-info`
--

CREATE TABLE `project-info` (
  `Id` int(150) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Code-Name` varchar(250) NOT NULL,
  `Start-Date` date NOT NULL,
  `End-Date` date NOT NULL,
  `Duration` int(150) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project-info`
--

INSERT INTO `project-info` (`Id`, `Name`, `Code-Name`, `Start-Date`, `End-Date`, `Duration`, `Description`, `Status`) VALUES
(4, 'Hospital management System', 'hm001', '2017-12-05', '2017-12-27', 22, 'Hospital issue', 'Started'),
(6, 'school management', 'sm01', '2017-12-26', '2017-12-30', 4, 'kfghcg', 'Completed'),
(7, 'bangladesh', 'bd1', '2017-12-18', '2017-12-21', 3, 'Bd', 'Started');

-- --------------------------------------------------------

--
-- Table structure for table `task-assign`
--

CREATE TABLE `task-assign` (
  `Id` int(150) NOT NULL,
  `Project-Id` int(150) NOT NULL,
  `GUser-Id` int(150) NOT NULL,
  `RUser-Id` int(150) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Due-Date` date NOT NULL,
  `Priority` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task-assign`
--

INSERT INTO `task-assign` (`Id`, `Project-Id`, `GUser-Id`, `RUser-Id`, `Description`, `Due-Date`, `Priority`) VALUES
(1, 4, 6, 3, 'klh', '2017-12-18', 'High'),
(2, 4, 6, 3, 'klh', '2017-12-18', 'High'),
(3, 6, 7, 4, 'complete url', '2017-12-28', 'High'),
(4, 7, 8, 8, 'jhgfdjf', '2017-12-25', 'Medium'),
(5, 4, 8, 10, 'For Test!', '2017-12-31', 'Medium'),
(6, 4, 8, 14, 'Login and Registration', '2017-12-30', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Id` int(150) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `UserEmail` varchar(200) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `DoB` date NOT NULL,
  `Designation` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL,
  `Gender` varchar(150) NOT NULL,
  `permission` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Id`, `Name`, `UserEmail`, `UserName`, `Password`, `userType`, `DoB`, `Designation`, `Status`, `Gender`, `permission`) VALUES
(6, 'admin', 'admin@gmail.com', 'admin', 'ad', 'admin', '2017-12-20', 'admin', 'Active', 'Male', 0),
(8, 'Tipu', 'tipu@email.com', 'tipu', '123', 'Project Manager', '2000-12-12', 'Project Manager', 'Active', 'Male', 1),
(10, 'anower', 'anower@mail.com', 'anower', '123', 'Developer', '2017-12-20', 'Developer', 'Active', 'Male', 1),
(11, 'Rizvee', 'rizbi@mail.com', 'rizbi', '123', 'Project Manager', '2017-12-13', 'Project Manager', 'Active', 'Male', 1),
(13, 'alomgir hossain', 'alomgir@g.com', 'alomgir', '123', 'Project Manager', '2017-12-20', 'Project Manager', 'Active', 'Male', 1),
(14, 'anik', 'anik@gmail.com', 'anik', '123', 'Project Manager', '2017-12-14', 'Project Manager', 'Active', 'Male', 1),
(15, 'nayeem', 'nayeem@gmail.com', 'nayeem', '123', 'Project Manager', '2017-12-06', 'Project Manager', 'Active', 'Male', 1),
(17, 'mahmud', 'mahmu@gmail.com', 'mahmud', '123', 'Project Manager', '2017-12-06', 'Project Manager', 'Active', 'Male', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign-project`
--
ALTER TABLE `assign-project`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User-Nameunique` (`UserName`);

--
-- Indexes for table `project-info`
--
ALTER TABLE `project-info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `task-assign`
--
ALTER TABLE `task-assign`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User-Name001` (`UserName`),
  ADD UNIQUE KEY `emailUnique` (`UserEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign-project`
--
ALTER TABLE `assign-project`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project-info`
--
ALTER TABLE `project-info`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task-assign`
--
ALTER TABLE `task-assign`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

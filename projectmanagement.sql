-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 07:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `assign-project` (
  `Id` int(150) NOT NULL,
  `Project-Id` int(150) NOT NULL,
  `User-Id` int(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(11, 7, 15),
(12, 7, 28),
(13, 4, 18),
(14, 6, 27),
(15, 4, 28),
(16, 7, 26);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `task_id` int(11) NOT NULL,
  `commented_by` varchar(255) NOT NULL,
  `comment` varchar(512) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `project_id`, `task_id`, `commented_by`, `comment`, `date`) VALUES
(5, 4, 8, 'anower hasan', 'From given Data ', '2017-12-27 22:09:58'),
(6, 6, 9, 'mamun jishan', 'top bar some new feature added', '2017-12-27 22:18:24'),
(7, 7, 10, 'Tofazzol Hossain Anik', 'nedded some picture in background', '2017-12-27 22:19:53'),
(8, 7, 11, 'Omi', 'badly needed data from a police station', '2017-12-27 22:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `project-info`
--

CREATE TABLE IF NOT EXISTS `project-info` (
  `Id` int(150) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Code-Name` varchar(250) NOT NULL,
  `Start-Date` date NOT NULL,
  `End-Date` date NOT NULL,
  `Duration` int(150) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `task-assign` (
  `Id` int(150) NOT NULL,
  `Project-Id` int(150) NOT NULL,
  `GUser-Id` int(150) NOT NULL,
  `RUser-Id` int(150) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Due-Date` date NOT NULL,
  `Priority` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task-assign`
--

INSERT INTO `task-assign` (`Id`, `Project-Id`, `GUser-Id`, `RUser-Id`, `Description`, `Due-Date`, `Priority`) VALUES
(8, 4, 28, 18, 'Complete UI', '2017-12-31', 'High'),
(9, 6, 28, 27, 'Complete Top Bar', '2017-12-30', 'Medium'),
(10, 7, 28, 26, 'Add Pic In Background', '2017-12-31', 'Low'),
(11, 7, 27, 28, 'add data in police station', '2017-12-31', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Id`, `Name`, `UserEmail`, `UserName`, `Password`, `userType`, `DoB`, `Designation`, `Status`, `Gender`, `permission`) VALUES
(6, 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', '2017-12-20', 'admin', 'Active', 'Male', 0),
(18, 'mamun jishan', 'mamun@gmail.com', 'mamun', 'mamun', 'Developer', '2017-12-07', 'Developer', 'Active', 'Male', 1),
(26, 'Tofazzol Hossain Anik', 'anik@gmail.com', 'anik', 'anik', 'QA', '2017-12-13', 'QA', 'Active', 'Male', 1),
(27, 'Omi', 'omi@gmail.com', 'omi', 'omi', 'QA', '2004-06-15', 'QA', 'Active', 'Male', 1),
(28, 'anower hasan', 'anower.hasan@gmail.com', 'anower', 'anower', 'Project Manager', '2017-12-16', 'Project Manager', 'Active', 'Male', 1);

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
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `project-info`
--
ALTER TABLE `project-info`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `task-assign`
--
ALTER TABLE `task-assign`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

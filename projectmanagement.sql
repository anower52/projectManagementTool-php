-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 04:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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

CREATE TABLE `assign-project` (
  `Id` int(150) NOT NULL,
  `Project-Id` int(150) NOT NULL,
  `User-Id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `Task-Id` int(11) NOT NULL,
  `User-Id` int(11) NOT NULL,
  `Content` varchar(250) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `Id` int(150) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `UserType` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`Id`, `UserName`, `Password`, `UserType`) VALUES
(1, 'admin', 'admin123', 'Admin'),
(4, 'anowerMagi', 'dsqweq', 'Project Manager');

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
  `Title` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Id` int(150) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `UserEmail` varchar(200) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `DoB` date NOT NULL,
  `Designation` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL,
  `Gender` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Id`, `Name`, `UserEmail`, `UserName`, `DoB`, `Designation`, `Status`, `Gender`) VALUES
(1, 'Anower Hasan', 'anower.Magi@bessa.com', 'anowerMagi', '2017-12-08', 'Project Manager', 'Blocked', 'Other');

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
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project-info`
--
ALTER TABLE `project-info`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `task-assign`
--
ALTER TABLE `task-assign`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

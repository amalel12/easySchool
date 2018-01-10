-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2018 at 08:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `classInfo`
--

CREATE TABLE `classInfo` (
  `id` int(11) NOT NULL,
  `classTeacherID` int(11) NOT NULL COMMENT 'employeeID ! Teacher is Employee',
  `schoolID` int(11) NOT NULL,
  `classTitle` varchar(60) NOT NULL,
  `subjectStreem` varchar(60) NOT NULL,
  `section` char(2) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `fsdID` int(11) DEFAULT NULL,
  `loginID` int(11) DEFAULT NULL,
  `roleID` int(11) DEFAULT NULL,
  `fullName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fsd`
--

CREATE TABLE `fsd` (
  `id` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `finencialYear` year(4) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loginTable`
--

CREATE TABLE `loginTable` (
  `id` int(11) NOT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT '0',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginTable`
--

INSERT INTO `loginTable` (`id`, `schoolID`, `isAdmin`, `username`, `password`, `created`, `modified`) VALUES
(5, 6, 1, 'pushpendra@shyplite.com', '95b83ea5caff1bc3f6828d79ad2f4b5ba7de044e', '2017-10-15 16:16:53', '2017-10-15 16:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `fsdID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schoolInfo`
--

CREATE TABLE `schoolInfo` (
  `id` int(11) NOT NULL,
  `schoolName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `contactOne` varchar(10) NOT NULL,
  `contactTwo` varchar(10) NOT NULL,
  `contactThree` varchar(10) NOT NULL,
  `contactFour` varchar(10) NOT NULL,
  `infoMail` varchar(255) NOT NULL,
  `supportMail` varchar(255) NOT NULL,
  `accountsMail` varchar(255) NOT NULL,
  `educationBoard` varchar(60) NOT NULL,
  `registrationNo` varchar(20) NOT NULL,
  `recognitionNo` varchar(20) NOT NULL,
  `schoolCode` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schoolInfo`
--

INSERT INTO `schoolInfo` (`id`, `schoolName`, `address`, `city`, `state`, `pin`, `nationality`, `contactOne`, `contactTwo`, `contactThree`, `contactFour`, `infoMail`, `supportMail`, `accountsMail`, `educationBoard`, `registrationNo`, `recognitionNo`, `schoolCode`, `created`, `modified`) VALUES
(6, 'Bachhan Lal jitala Devi', '', '', '', '', '', '7668538172', '', '', '', '', '', '', '', '', '', '', '2017-10-15 16:16:53', '2017-10-15 16:16:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `classInfo`
--
ALTER TABLE `classInfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee` (`classTeacherID`),
  ADD KEY `school` (`schoolID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleID` (`roleID`),
  ADD KEY `loginID` (`loginID`),
  ADD KEY `fsdID` (`fsdID`),
  ADD KEY `schoolID` (`schoolID`);

--
-- Indexes for table `fsd`
--
ALTER TABLE `fsd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolID` (`schoolID`);

--
-- Indexes for table `loginTable`
--
ALTER TABLE `loginTable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolID` (`schoolID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schoolID` (`schoolID`),
  ADD KEY `fsdID` (`fsdID`);

--
-- Indexes for table `schoolInfo`
--
ALTER TABLE `schoolInfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classInfo`
--
ALTER TABLE `classInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fsd`
--
ALTER TABLE `fsd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loginTable`
--
ALTER TABLE `loginTable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schoolInfo`
--
ALTER TABLE `schoolInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`schoolID`) REFERENCES `schoolInfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`roleID`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`fsdID`) REFERENCES `fsd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`loginID`) REFERENCES `loginTable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fsd`
--
ALTER TABLE `fsd`
  ADD CONSTRAINT `fsd_ibfk_1` FOREIGN KEY (`schoolID`) REFERENCES `schoolInfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loginTable`
--
ALTER TABLE `loginTable`
  ADD CONSTRAINT `logintable_ibfk_1` FOREIGN KEY (`schoolID`) REFERENCES `schoolInfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`id`) REFERENCES `schoolInfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_ibfk_2` FOREIGN KEY (`fsdID`) REFERENCES `fsd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

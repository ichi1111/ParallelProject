-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2019 at 08:46 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingCourse`
--

CREATE TABLE IF NOT EXISTS `bookingCourse` (
  `bookingID` int(11) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `bookingRoom` varchar(100) NOT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingTable`
--

INSERT INTO `bookingCourse` (`bookingID`, `courseName`, `bookingRoom`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(1, 'SE', '301', '13-3', '15-00', 'Suti', 'Pongpitakpakde', '0994512161');

-- --------------------------------------------------------


--
-- Table structure for table `courseTable`
--

CREATE TABLE IF NOT EXISTS `courseTable` (
  `courseID` int(11) NOT NULL,
  `courseImg` varchar(150) NOT NULL,
  `courseTitle` varchar(100) NOT NULL,
  `courseDuration` int(11) NOT NULL,
  `courseInstructor` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseTable`
--

INSERT INTO `courseTable` (`courseID`, `courseImg`, `courseTitle`, `courseDuration`,  `courseInstructor`) VALUES
(1, 'img/course-poster1.jpg', 'Introduction to Software Engineering', 180, 'Aj.Thanwadee, Aj.Chaiyong, Aj.Morakot'),
(2, 'img/course-poster2.jpg', 'Management Information Systems',  180, 'Aj.Srisupa'),
(3, 'img/course-poster3.jpg', 'Artificial Intelligence',  180, 'Aj.Peter, Aj.Thanapon'),
(4, 'img/course-poster4.jpg', 'Computer Networks', 180, 'Aj.Vasaka, Aj.Assadarat, Aj.Thitinan, Aj.Dolvara'),
(5, 'img/course-poster5.jpg', 'Information Storage and Retrieval', 180, 'Aj.Suppawong'),
(6, 'img/course-poster6.jpg', 'Business Writing', 180, 'Aj.Martin');

--
--  Table sturcture for table 'admin'
--
CREATE TABLE IF NOT EXISTS `adminTable` (
  `adminID` varchar(20) NOT NULL,
  `adminPW` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Insert data for table 'adminTable'
--
INSERT INTO `adminTable` (`adminID`, `adminPW`) VALUES
('Admin0001', 'AdminPassword');
--
-- Indexes for table `bookingCourse`
--
ALTER TABLE `bookingCourse`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

-- Indexes for table `movieTable`
--
ALTER TABLE `courseTable`
  ADD PRIMARY KEY (`courseID`),
  ADD UNIQUE KEY `courseID` (`courseID`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `bookingTable`
--
ALTER TABLE `bookingCourse`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `movieTable`
--
ALTER TABLE `courseTable`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

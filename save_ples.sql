-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2021 at 12:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `save_ples`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userID`, `name`, `email`, `username`, `password`) VALUES
(1, 'Admin', 'admin@email.com', 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(50) DEFAULT NULL,
  `Course_description` varchar(255) DEFAULT NULL,
  `TrainerID` varchar(50) DEFAULT NULL,
  `DateAAdded` date DEFAULT NULL,
  `PassMark` varchar(50) DEFAULT NULL,
  `MaxAttempts` varchar(50) DEFAULT '5',
  `Tag` varchar(50) DEFAULT NULL,
  `approved` varchar(10) NOT NULL,
  `Skillsets_SkillID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`CourseID`, `CourseName`, `Course_description`, `TrainerID`, `DateAAdded`, `PassMark`, `MaxAttempts`, `Tag`, `approved`, `Skillsets_SkillID`) VALUES
(1, 'Welding 101', 'weld', '2', '2021-11-22', '75', '3', 'engineering', 'true', 1),
(2, 'Plumbing 101', 'Plumbing', '2', '2021-11-22', '75', '3', 'engineering', 'false', 2),
(3, 'Grammar', 'It looks like you might not be logged in because we saw no writing activity for you last week', '2', '2021-11-23', '75', '3', 'Speaking', 'true', 1),
(4, 'Spelling', 'This will teach you how to spell', '2', '2021-11-24', '75', '3', 'vowels', 'true', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_files`
--

CREATE TABLE `course_files` (
  `fileID` int(5) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `courseID` int(5) NOT NULL,
  `fileType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_files`
--

INSERT INTO `course_files` (`fileID`, `fileName`, `location`, `courseID`, `fileType`) VALUES
(1, 'Cinderella.mp4', '../uploads/202111231637630988.mp4', 1, 'video'),
(2, 'Cinderella1.mp4', '../uploads/202111231637634113.mp4', 2, 'video'),
(3, 'conquer through it.pdf', '../uploads/202111231637634141.pdf', 2, 'file'),
(4, 'conquer through it.pdf', '../uploads/202111231637634267.pdf', 3, 'file'),
(5, '1.mp4', '../uploads/202111231637645831.mp4', 3, 'video'),
(6, 'vlc-record-2020-06-16-15h14m38s-BloodShot_2020.mkv-.mp4', '../uploads/202111231637645993.mp4', 1, 'video'),
(7, 'vlc-record-2020-03-01-00h37m11s-Hillsong Let hope Rise 2016.mp4-.mp4', '../uploads/202111231637646083.mp4', 1, 'video'),
(8, '1.mp4', '../uploads/202111231637646399.mp4', 4, 'video'),
(9, 'conquer through it.pdf', '../uploads/202111231637660565.pdf', 1, 'file'),
(10, '1.mp4', '../uploads/202111231637660935.mp4', 2, 'video'),
(11, 'through.pdf', '../uploads/202111231637674428.pdf', 4, 'file'),
(12, 'vlc-record-2020-03-01-00h37m11s-Hillsong Let hope Rise 2016.mp4-.mp4', '../uploads/202111231637674448.mp4', 4, 'video');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `studentId` int(5) NOT NULL,
  `courseID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`studentId`, `courseID`) VALUES
(1, 3),
(1, 1),
(3, 3),
(3, 1),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Skillsets`
--

CREATE TABLE `Skillsets` (
  `SkillID` int(11) NOT NULL,
  `SkillName` varchar(50) NOT NULL,
  `SkillDescription` varchar(255) NOT NULL,
  `Roles` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Skillsets`
--

INSERT INTO `Skillsets` (`SkillID`, `SkillName`, `SkillDescription`, `Roles`) VALUES
(1, 'Communicating', 'Can speak and listen well', 'Leader'),
(2, 'Speaking ', 'Communicate well', 'Leader'),
(3, 'People', 'People skills description goes here', 'Leadership');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `Progress` int(11) NOT NULL,
  `DateTimeStarted` datetime DEFAULT NULL,
  `DateTimeEnded` datetime DEFAULT NULL,
  `TimeTaken` varchar(50) DEFAULT NULL,
  `Score` int(5) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `users_UserID` int(11) NOT NULL,
  `Courses_CourseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `Clan` varchar(50) NOT NULL,
  `Village` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `LLG` varchar(50) NOT NULL,
  `Ward` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Contact` varchar(255) DEFAULT NULL,
  `UserType` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `email`, `username`, `password`, `DOB`, `Gender`, `Clan`, `Village`, `District`, `LLG`, `Ward`, `Province`, `Phone`, `Contact`, `UserType`) VALUES
(1, 'Jack', 'Smith', 'jack@email.com', 'jack', 'jack', '2021-11-03', 'Male', 'Clan', 'Village', 'District', 'LLG', 'Ward', 'Province', '3242344', 'jacks address', '1'),
(2, 'Simon', 'Mann', 'smann@email.com', 'smann', 'smann', '2021-11-23', 'Male', 'Clan', 'Village', 'District', 'LLG', 'Ward', 'Province', '3242344', 'Simons address here', '2'),
(3, 'Chris', 'Smith', 'chris@email.com', 'chris', 'chris', '2021-11-24', 'Male', 'Clan', 'Village', 'District', 'LLG', 'Ward', 'Province', '3242344', 'This is chris address', '1'),
(4, 'Janet', 'Jackson', 'jjackson@email.com', 'janet', 'janet', '1989-02-23', 'Female', 'Clan Janet', 'Morata ', 'Moresby North East', 'Morata 1', 'Ward 1', 'NCD', '0987633211', 'The big yellow house at Morat 1 here the bus stop', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`CourseID`,`Skillsets_SkillID`),
  ADD KEY `fk_Courses_Skillsets1_idx` (`Skillsets_SkillID`);

--
-- Indexes for table `course_files`
--
ALTER TABLE `course_files`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `Skillsets`
--
ALTER TABLE `Skillsets`
  ADD PRIMARY KEY (`SkillID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Progress`),
  ADD KEY `fk_Student_users_idx` (`users_UserID`),
  ADD KEY `fk_Student_Courses1_idx` (`Courses_CourseID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_files`
--
ALTER TABLE `course_files`
  MODIFY `fileID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Skillsets`
--
ALTER TABLE `Skillsets`
  MODIFY `SkillID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Courses`
--
ALTER TABLE `Courses`
  ADD CONSTRAINT `fk_Courses_Skillsets1` FOREIGN KEY (`Skillsets_SkillID`) REFERENCES `Skillsets` (`SkillID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `fk_Student_Courses1` FOREIGN KEY (`Courses_CourseID`) REFERENCES `Courses` (`CourseID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Student_users` FOREIGN KEY (`users_UserID`) REFERENCES `users` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

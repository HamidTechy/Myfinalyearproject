-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 07:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminid` bigint(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adminname` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `contactno` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminid`, `password`, `adminname`, `address`, `contactno`) VALUES
(123, '83ec45960b80c035a0068df1d9df5aa8', 'ADMIN', '123 password technology', '9876543210'),
(124, 'admin', 'ADMIN', 'Sheikhupura', '1234567'),
(125, 'e10adc3949ba59abbe56e057f20f883e', 'sulaman', 'skp', '03121717218');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attid` bigint(4) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `subid` bigint(4) NOT NULL,
  `totalclasses` int(2) NOT NULL,
  `attendedclasses` int(2) NOT NULL,
  `percentage` double(4,2) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attid`, `studid`, `subid`, `totalclasses`, `attendedclasses`, `percentage`, `comment`) VALUES
(7, '1', 3, 12, 12, 99.99, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` bigint(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` bigint(4) NOT NULL,
  `coursename` varchar(40) NOT NULL,
  `comment` text NOT NULL,
  `coursekey` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursename`, `comment`, `coursekey`) VALUES
(2, 'Bachelor of Commerce', 'This course is related to commerce field.', 'BCom'),
(3, 'Bachelor of Bussiness Management', 'This course is related to Bussiness field.', 'BBM'),
(4, 'Bachelor of Science', 'This field is related to science field.', 'BSc'),
(5, 'Bachelor of Computer Application', 'This field is related to computer field.', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `examid` bigint(4) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `subid` bigint(4) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `internaltype` varchar(20) NOT NULL,
  `maxmarks` int(2) NOT NULL,
  `scored` int(2) NOT NULL,
  `percentage` float NOT NULL,
  `result` text NOT NULL,
  `comment` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`examid`, `studid`, `subid`, `courseid`, `internaltype`, `maxmarks`, `scored`, `percentage`, `result`, `comment`) VALUES
(1, '1', 3, 2, '4', 500, 450, 95, 'A ', 'She Get A grade In Exam');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `lecid` bigint(4) NOT NULL,
  `lecemail` varchar(30) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `lecname` varchar(50) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lecid`, `lecemail`, `password`, `courseid`, `lecname`, `gender`, `address`, `contactno`) VALUES
(1, NULL, '0cc175b9c0f1b6a831c399e269772661', 5, 'geetha', 'Female', 'fgv', '9876543211'),
(3, 'khan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M. Billal Khan', NULL, 'Aliiii', '03421408999');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `std_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `contect` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`p_id`, `p_name`, `std_id`, `email`, `pass`, `contect`) VALUES
(1, 'Muhammad Bilal', 1, 'mbkhaksaar1@gmail.com', '123456', '03217763964'),
(2, 'Salman', 5, 'salman@gmail.com', '123456', '03324680899');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semid` bigint(4) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semid`, `semester`, `comment`) VALUES
(1, '1', 'BCS');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `studid` varchar(25) NOT NULL,
  `studfname` varchar(20) NOT NULL,
  `studlname` varchar(20) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`studid`, `studfname`, `studlname`, `fathername`, `gender`, `address`, `contactno`, `courseid`, `semester`, `dob`, `email`, `password`) VALUES
('0012', 'gul', 'shair', 'muhammad azam', 'Male', 'sheikhupura', '031217172189', 4, '2', '09-16-2020', 'gul@gmail.com', 'd41d8cd98f00b204e9800998ecf842'),
('1', 'Miral', 'Fatima', 'Babar', 'Female', 'Skp', '452757855', 5, '1', '2008-02-09', 'ali@gmail.com', '123456'),
('10', 'ALi', 'Jan', 'Muhammad Azam', 'Male', 'fsdssafafdas', '03217654321', 2, '2', '0000-00-00', '', ''),
('11', 'assad', 'ullah', 'ubaid ullah', 'Male', 'khanka dogra', '03336543210', 4, '3', '0000-00-00', 'assad@gmail.com', '54321'),
('12', 'Faisal', 'Azam', 'Muhammad Azam', 'Male', 'Sheikhupura', '03217654322', 4, '1', '07-26-2006', 'faisalazam@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` bigint(4) NOT NULL,
  `subname` varchar(20) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `lecid` bigint(4) NOT NULL,
  `subtype` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `courseid`, `lecid`, `subtype`, `semester`, `comment`) VALUES
(3, 'Accounting', 3, 0, 'Theory', '1', 'jsjk'),
(4, 'Math', 2, 0, 'Theory', '1', 'Basic Math '),
(5, 'chemistry', 4, 0, 'Theory', '3', 'applied chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `time_id` int(11) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `submane` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `days` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`time_id`, `coursename`, `submane`, `semester`, `time`, `days`) VALUES
(5, 'BSc', 'chemistry', '2', '09:00 to 10:00', 'Friday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attid`),
  ADD KEY `studid` (`studid`),
  ADD KEY `subid` (`subid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`examid`),
  ADD KEY `subid` (`subid`),
  ADD KEY `studid` (`studid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`lecid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semid`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`studid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `lecid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`subid`) REFERENCES `subject` (`subid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`studid`) REFERENCES `studentdetails` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `examination`
--
ALTER TABLE `examination`
  ADD CONSTRAINT `examination_ibfk_1` FOREIGN KEY (`studid`) REFERENCES `studentdetails` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examination_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examination_ibfk_3` FOREIGN KEY (`subid`) REFERENCES `subject` (`subid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD CONSTRAINT `studentdetails_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 11:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `LastLogin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `Phone`, `LastLogin`) VALUES
(1, 'imraiz', 'eman', 'imraiz@gmail.com', '123', '4654684', ''),
(2, 'saifullah', 'mansur', 'saikot@gmail.com', '123', '01725078218', ''),
(3, 'Hafiz', 'Raju', 'hafizraju.cse.bubt@gmail.com', 'raju', '01721882758', ''),
(4, 'Rafi', 'Rahman', 'rafi@gmail.com', 'rafi', '01624047940', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `user_email` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_contact` varchar(500) DEFAULT NULL,
  `user_subject` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `name`, `Feedback`) VALUES
('rafi@gmail.com', 'rafi', 'good'),
('imriaz@gmail.com', 'imriaz', 'very good'),
('saikot@gmail.com', 'saikot', 'Nice'),
('amirulislamtajbid@gmail.com', 'Amirul Islam Tajbid', 'This is a very helpful website for anyone because if we want to visit a tourist place we need to take a guide for go to our expected place. By using this website I can easily entered my expected place with their instruction.'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('durantoraju@gmail.com', 'Hafizuddin Raju', 'good site'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('sahenaafrojemoni@gmail.com', 'Hafiz', 'good '),
('', '', ''),
('r@gmail.com', 'Hafiz', 'good '),
('', '', ''),
('hafizraju.cse.bubt@gmail.com', 'Hafiz', 'good site');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_ID` int(10) NOT NULL,
  `placeName` varchar(50) DEFAULT NULL,
  `placeLocation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_ID`, `placeName`, `placeLocation`) VALUES
(3, 'Saint-Martin', ' Saint-Martin'),
(4, 'Coxs Bazar', ' Coxs Bazar'),
(5, 'Khaiyyachora', 'Mirsarai, Chittagung'),
(6, 'Shajek-valley', 'Bandondhorban'),
(7, 'Kuakata', ' Kuakata');

-- --------------------------------------------------------

--
-- Table structure for table `resort`
--

CREATE TABLE `resort` (
  `resort_ID` int(10) NOT NULL,
  `resortName` varchar(50) DEFAULT NULL,
  `resortLocation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resort`
--

INSERT INTO `resort` (`resort_ID`, `resortName`, `resortLocation`) VALUES
(4, 'Hotel Sea cox', 'Coxs bazar'),
(5, 'SKD', 'Saint martin'),
(6, 'Prince Haven', 'Saint martin');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `user_ID` int(10) NOT NULL,
  `user_FirstName` varchar(20) NOT NULL,
  `user_LastName` varchar(20) NOT NULL,
  `user_age` int(10) NOT NULL,
  `user_Email` varchar(50) NOT NULL,
  `user_Password` varchar(20) NOT NULL,
  `user_Address` varchar(200) NOT NULL,
  `user_Phone` varchar(20) NOT NULL,
  `user_city` varchar(20) NOT NULL,
  `user_country` varchar(20) NOT NULL,
  `LastLogin` varchar(50) NOT NULL,
  `user_photo_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`user_ID`, `user_FirstName`, `user_LastName`, `user_age`, `user_Email`, `user_Password`, `user_Address`, `user_Phone`, `user_city`, `user_country`, `LastLogin`, `user_photo_path`) VALUES
(1, 'imriaz', 'uddin', 40, 'imriaz@gmail.com', 'imriaz', '', '0170000000', 'dhaka', 'BD', '', ''),
(2, 'saifullah', 'mansur', 40, 'saikot@gmail.com', '456', 'housing', '01725078218', 'kushtia', 'bd', '', ''),
(3, 'saifullah', 'mansur', 40, 'saikot@gmail.com', '142', 'housing', '01725078218', 'kushtia', 'bd', '', ''),
(4, 'raju', 'ahmed', 80, 'raju@gmail.com', '123', 'barisal', '01725487542', 'barisal', 'BD', '', ''),
(5, 'sdf', 'afsaf', 34, 'sfse@gmail.com', '123', 'esatfgsd', '68456468', 'ewrfewf', 'ewtfrewtf', '', ''),
(6, 'awfa', 'afaf', 324, 'sdfgwefg@gmail.com', '', 'gdfg', '32534534', 'arfa', 'rfwe', '', ''),
(7, 'rafi', 'ahmed', 45, 'rafi@gmail.com', '123', 'sgdfhdj', '64415619678', 'dhaka', 'BD', '', ''),
(8, 'Hafiz', 'Raju', 20, 'i@gmail.com', '333333', 'Barishal', '0172100000', 'Barishal', 'bd', '', ''),
(9, 'Rafi', 'Rahman', 20, 'rafi@gmail.com', 'rafi', 'Dhaka', '01633333333', 'Dhaka', 'Bd', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_ID`);

--
-- Indexes for table `resort`
--
ALTER TABLE `resort`
  ADD PRIMARY KEY (`resort_ID`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resort`
--
ALTER TABLE `resort`
  MODIFY `resort_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `user_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

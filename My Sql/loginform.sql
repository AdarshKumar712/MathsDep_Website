-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2019 at 07:40 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Notes_1` varchar(100) NOT NULL,
  `Notes_2` varchar(100) NOT NULL,
  `Notes_3` varchar(100) NOT NULL,
  `Notes_4` varchar(100) NOT NULL,
  `Notes_5` varchar(100) NOT NULL,
  `Assign_1` varchar(100) NOT NULL,
  `Assign_2` varchar(100) NOT NULL,
  `Assign_3` varchar(100) NOT NULL,
  `Assign_4` varchar(100) NOT NULL,
  `Assign_5` varchar(100) NOT NULL,
  `Announcement_Global` varchar(100) NOT NULL,
  `Announce_1` varchar(100) NOT NULL,
  `Announce_2` varchar(100) NOT NULL,
  `Announce_3` varchar(100) NOT NULL,
  `Announce_4` varchar(100) NOT NULL,
  `Announce_5` varchar(100) NOT NULL,
  `Events` varchar(100) NOT NULL,
  `Last_online` date NOT NULL DEFAULT '2019-06-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `User`, `Password`, `Name`, `Place`, `Position`, `Email`, `Image`, `Notes_1`, `Notes_2`, `Notes_3`, `Notes_4`, `Notes_5`, `Assign_1`, `Assign_2`, `Assign_3`, `Assign_4`, `Assign_5`, `Announcement_Global`, `Announce_1`, `Announce_2`, `Announce_3`, `Announce_4`, `Announce_5`, `Events`, `Last_online`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Adarsh Kumar', 'Kharagpur', 'Professor', 'adarshkumar712.ak@gmail.com', './Uploads/logo.jpg', './Lecture_Notes/1/et3.pdf', '0', '', '', '', './Assignments/1/ET_Tut5_AUT2017-18.pdf', './Assignments/1/Nucleophilic Substitution 1.pdf', './Assignments/1/ET_Tut5_AUT2017-18.pdf', '', '', './Announcements/1/default-avatar.png', './Announcements/1/problem_uva.pdf', '', '', '', '', '', '2019-06-01'),
(2, 'raghav', 'b010c88ea3815cc2f7b7a903651e3d73', 'Raghav Roy', 'Agra', 'Assistant', 'raghav@gmail.com', './Uploads/avatar.png', '', '0', '', '', '', '0', '0', '', '', '', './Announcements/2/default-avatar.png', '0', '', '', '', '', '', '2019-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

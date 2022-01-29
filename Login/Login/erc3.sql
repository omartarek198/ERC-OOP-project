-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 06:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erc3`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `ID` int(11) NOT NULL,
  `Name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`ID`, `Name`) VALUES
(1, 'english'),
(2, 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `ID` int(11) NOT NULL,
  `langfirstcode` int(11) NOT NULL,
  `langsecondcode` int(11) NOT NULL,
  `trans_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`ID`, `langfirstcode`, `langsecondcode`, `trans_name`) VALUES
(8, 1, 2, 'login'),
(9, 2, 1, 'تسجيل'),
(10, 1, 2, 'password'),
(11, 2, 1, 'كلمةالسر'),
(12, 1, 2, 'username'),
(13, 2, 1, 'اسم المستخدم');

-- --------------------------------------------------------

--
-- Table structure for table `trans_details`
--

CREATE TABLE `trans_details` (
  `ID` int(11) NOT NULL,
  `transid` int(11) NOT NULL,
  `wordid` int(11) NOT NULL,
  `transwordid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_details`
--

INSERT INTO `trans_details` (`ID`, `transid`, `wordid`, `transwordid`) VALUES
(1, 8, 3, 4),
(2, 10, 5, 6),
(3, 9, 4, 3),
(4, 11, 6, 5),
(5, 13, 8, 7),
(6, 12, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `ID` int(11) NOT NULL,
  `word` varchar(222) NOT NULL,
  `langid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`ID`, `word`, `langid`) VALUES
(3, 'login', 1),
(5, 'password', 1),
(7, 'username', 1),
(8, 'اسم المستخدم', 2),
(4, 'التسجيل', 2),
(6, 'كلمة السر', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `langid` (`langfirstcode`),
  ADD KEY `langfirstcode` (`langfirstcode`),
  ADD KEY `langsecondcode` (`langsecondcode`);

--
-- Indexes for table `trans_details`
--
ALTER TABLE `trans_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `transid` (`transid`),
  ADD KEY `wordid` (`wordid`),
  ADD KEY `transwordid` (`transwordid`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `word` (`word`,`langid`),
  ADD KEY `langid` (`langid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `translation`
--
ALTER TABLE `translation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trans_details`
--
ALTER TABLE `trans_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `translation`
--
ALTER TABLE `translation`
  ADD CONSTRAINT `lang1` FOREIGN KEY (`langfirstcode`) REFERENCES `language` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lang2` FOREIGN KEY (`langsecondcode`) REFERENCES `language` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_details`
--
ALTER TABLE `trans_details`
  ADD CONSTRAINT `trans_details_ibfk_1` FOREIGN KEY (`transid`) REFERENCES `translation` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transid` FOREIGN KEY (`transwordid`) REFERENCES `word` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wordid` FOREIGN KEY (`wordid`) REFERENCES `word` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `word`
--
ALTER TABLE `word`
  ADD CONSTRAINT `word_ibfk_1` FOREIGN KEY (`langid`) REFERENCES `language` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

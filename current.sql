-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 09:48 AM
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
-- Database: `current`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `addressid` int(11) DEFAULT NULL,
  `country` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `street` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `accesslevel` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `userid`, `accesslevel`) VALUES
(1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

CREATE TABLE `bloodstock` (
  `id` int(11) NOT NULL,
  `bloodtypeID` int(222) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodtype`
--

CREATE TABLE `bloodtype` (
  `id` int(11) NOT NULL,
  `bloodtype` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cashstock`
--

CREATE TABLE `cashstock` (
  `id` int(11) NOT NULL,
  `cashavailable` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashstock`
--

INSERT INTO `cashstock` (`id`, `cashavailable`) VALUES
(1, '100'),
(2, '100');

-- --------------------------------------------------------

--
-- Table structure for table `donationmethod`
--

CREATE TABLE `donationmethod` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationmethod`
--

INSERT INTO `donationmethod` (`Id`, `Name`) VALUES
(1, 'VisaCard'),
(2, 'DonateFromHome');

-- --------------------------------------------------------

--
-- Table structure for table `donationmethodoptions`
--

CREATE TABLE `donationmethodoptions` (
  `Id` int(11) NOT NULL,
  `DmethodID` int(11) NOT NULL,
  `OptionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donationoptionsvalue`
--

CREATE TABLE `donationoptionsvalue` (
  `id` int(11) NOT NULL,
  `PMOpid` int(11) NOT NULL,
  `value` text NOT NULL,
  `Did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationoptionsvalue`
--

INSERT INTO `donationoptionsvalue` (`id`, `PMOpid`, `value`, `Did`) VALUES
(18, 1, '1234556789', 0),
(19, 2, '2022-03', 0),
(20, 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(21, 4, '1000', 0),
(22, 5, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doptions`
--

CREATE TABLE `doptions` (
  `Id` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doptions`
--

INSERT INTO `doptions` (`Id`, `Name`, `Type`) VALUES
(1, 'CardName', 'varchar'),
(2, 'ExpieyData', 'date'),
(3, 'sec code', 'int'),
(4, 'amount', 'int'),
(5, 'cardNumber', 'int');

-- --------------------------------------------------------

--
-- Table structure for table `financialrequest`
--

CREATE TABLE `financialrequest` (
  `id` int(11) NOT NULL,
  `income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `HTML_DATA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mealrequest`
--

CREATE TABLE `mealrequest` (
  `id` int(11) NOT NULL,
  `familysize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `messagetemp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messageuser`
--

CREATE TABLE `messageuser` (
  `ID` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `data_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `name`, `date`, `address`) VALUES
(1, 'teme', '2000-12-05 00:00:00', 'October City');

-- --------------------------------------------------------

--
-- Table structure for table `missionvol`
--

CREATE TABLE `missionvol` (
  `id` int(11) NOT NULL,
  `volunid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `name` varchar(10) NOT NULL,
  `phonenum` varchar(11) NOT NULL,
  `RequestId` int(11) NOT NULL,
  `RequestTypeid` int(11) NOT NULL,
  `addressid` int(222) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requirelookup`
--

CREATE TABLE `requirelookup` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `usertypeid` int(11) NOT NULL,
  `Dob` varchar(222) NOT NULL,
  `email` varchar(222) DEFAULT NULL,
  `password` varchar(222) DEFAULT NULL,
  `phoneno` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `hours` int(10) NOT NULL,
  `addressid` int(11) NOT NULL,
  `compensation` int(10) NOT NULL,
  `missionid` int(11) NOT NULL,
  `userid` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `email`, `phonenumber`, `hours`, `addressid`, `compensation`, `missionid`, `userid`) VALUES
(1, 'alaaa@msa.edu', 128, 10, 0, 100, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `bloodstock`
--
ALTER TABLE `bloodstock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bloodtypeID` (`bloodtypeID`);

--
-- Indexes for table `bloodtype`
--
ALTER TABLE `bloodtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashstock`
--
ALTER TABLE `cashstock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donationmethod`
--
ALTER TABLE `donationmethod`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `donationmethodoptions`
--
ALTER TABLE `donationmethodoptions`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`,`DmethodID`,`OptionID`),
  ADD KEY `donationmethodoptions_ibfk_1` (`DmethodID`),
  ADD KEY `donationmethodoptions_ibfk_2` (`OptionID`);

--
-- Indexes for table `donationoptionsvalue`
--
ALTER TABLE `donationoptionsvalue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`PMOpid`,`Did`) USING BTREE,
  ADD KEY `id_2` (`id`,`PMOpid`,`Did`) USING BTREE,
  ADD KEY `PMOpid` (`PMOpid`) USING BTREE,
  ADD KEY `id_3` (`id`) USING BTREE;

--
-- Indexes for table `doptions`
--
ALTER TABLE `doptions`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `financialrequest`
--
ALTER TABLE `financialrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealrequest`
--
ALTER TABLE `mealrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messageuser`
--
ALTER TABLE `messageuser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `messageid` (`messageid`,`userid`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `usertypeid` (`usertypeid`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodtype`
--
ALTER TABLE `bloodtype`
  ADD CONSTRAINT `bloodtype_ibfk_1` FOREIGN KEY (`id`) REFERENCES `bloodstock` (`bloodtypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertypeid`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

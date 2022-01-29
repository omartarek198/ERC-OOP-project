-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 12:53 PM
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `addressname` varchar(255) DEFAULT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `addressname`, `pid`) VALUES
(1, 'Africa', NULL),
(2, 'Egypt', 1),
(3, 'Cairo', 2),
(4, 'Nasr City', 3),
(5, 'Maadi', 3),
(6, 'Makram Obaid', 4),
(7, 'Abbass Aqaad', 4),
(8, 'Alexandria', 2),
(9, 'Giza', 2),
(10, 'Sheikh Zayed', 9),
(11, '6th Of October', 9),
(12, 'Opera City', 10),
(13, 'Rabwa', 10),
(14, 'Tiba Gardens', 11),
(15, 'Bashayer', 11),
(18, 'Qaluybia', 2),
(19, '21', 8),
(22, 'Abo Qayr', 8),
(23, 'Haram', 9);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `accesslevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `userid`, `accesslevel`) VALUES
(1, 1, 0),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

CREATE TABLE `bloodstock` (
  `id` int(11) NOT NULL,
  `bloodtypeID` int(222) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodstock`
--

INSERT INTO `bloodstock` (`id`, `bloodtypeID`, `stock`) VALUES
(1, 1, 230),
(2, 3, 20),
(3, 2, 11),
(4, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `bloodtype`
--

CREATE TABLE `bloodtype` (
  `id` int(11) NOT NULL,
  `bloodtype` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodtype`
--

INSERT INTO `bloodtype` (`id`, `bloodtype`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

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
(2, 'DonateFromHome'),
(3, 'test'),
(7, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `donationmethodoptions`
--

CREATE TABLE `donationmethodoptions` (
  `Id` int(11) NOT NULL,
  `DmethodID` int(11) NOT NULL,
  `OptionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationmethodoptions`
--

INSERT INTO `donationmethodoptions` (`Id`, `DmethodID`, `OptionID`) VALUES
(11, 1, 1),
(3, 1, 4),
(16, 2, 3),
(15, 3, 3),
(9, 3, 5),
(17, 7, 6);

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
(5, 'cardNumber', 'int'),
(6, 'Full Name', 'varchar');

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
-- Table structure for table `sql_inject`
--

CREATE TABLE `sql_inject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sqlinj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sql_inject`
--

INSERT INTO `sql_inject` (`id`, `name`, `sqlinj`) VALUES
(1, 'get user with id', 'SELECT * FROM user WHERE id='),
(2, 'get all users', 'SELECT * FROM user'),
(3, 'grant one user', 'UPDATE user set accessMode=1 where id=?'),
(4, 'revoke one user', 'UPDATE user set accessMode=2 where id=?'),
(5, 'grant all', 'update user set accessMode=1 where (id > 1)'),
(6, 'revoke all', 'update user set accessMode=2 where (id > 1)');

-- --------------------------------------------------------

--
-- Table structure for table `systemstate`
--

CREATE TABLE `systemstate` (
  `id` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systemstate`
--

INSERT INTO `systemstate` (`id`, `state`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(222) NOT NULL,
  `usertypeid` int(11) NOT NULL DEFAULT 2,
  `accessMode` int(11) NOT NULL DEFAULT 1,
  `Dob` date NOT NULL,
  `email` varchar(222) DEFAULT NULL,
  `password` varchar(222) NOT NULL,
  `phoneno` varchar(222) DEFAULT NULL,
  `addressid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `usertypeid`, `accessMode`, `Dob`, `email`, `password`, `phoneno`, `addressid`) VALUES
(1, 'omar', 1, 1, '1997-05-31', 'omar@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '01157979606', 6),
(2, 'Mo', 2, 1, '2000-05-31', 'mo@gmail.com', 'ac1ab23d6288711be64a25bf13432baf1e60b2bd', '012825347698', 5);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

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
(1, 'volunter1@gmail.com', 112999382, 12, 1, 12, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`pid`),
  ADD KEY `pid` (`pid`);
  ADD KEY `id_2` (`id`);

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
  ADD UNIQUE KEY `unique_index` (`DmethodID`,`OptionID`),
  ADD KEY `Id` (`Id`,`DmethodID`,`OptionID`),
  ADD KEY `donationmethodoptions_ibfk_2` (`OptionID`);

--
-- Indexes for table `donationoptionsvalue`
--
ALTER TABLE `donationoptionsvalue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`PMOpid`,`Did`) USING BTREE,
  ADD KEY `id_2` (`id`,`PMOpid`,`Did`) USING BTREE,
  ADD KEY `PMOpid` (`PMOpid`) USING BTREE,
  ADD KEY `id_3` (`id`) USING BTREE,
  ADD KEY `PMOpid_2` (`PMOpid`);

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
-- Indexes for table `missionvol`
--
ALTER TABLE `missionvol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volunid` (`volunid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestId`);

--
-- Indexes for table `requirelookup`
--
ALTER TABLE `requirelookup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sql_inject`
--
ALTER TABLE `sql_inject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systemstate`
--
ALTER TABLE `systemstate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`,`usertypeid`),
  ADD KEY `usertypeid` (`usertypeid`);
  ADD KEY `addressid` (`addressid`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodstock`
--
ALTER TABLE `bloodstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bloodtype`
--
ALTER TABLE `bloodtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cashstock`
--
ALTER TABLE `cashstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donationmethod`
--
ALTER TABLE `donationmethod`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donationmethodoptions`
--
ALTER TABLE `donationmethodoptions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `donationoptionsvalue`
--
ALTER TABLE `donationoptionsvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doptions`
--
ALTER TABLE `doptions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `financialrequest`
--
ALTER TABLE `financialrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mealrequest`
--
ALTER TABLE `mealrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messageuser`
--
ALTER TABLE `messageuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `missionvol`
--
ALTER TABLE `missionvol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RequestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requirelookup`
--
ALTER TABLE `requirelookup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sql_inject`
--
ALTER TABLE `sql_inject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `systemstate`
--
ALTER TABLE `systemstate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bloodstock`
--
ALTER TABLE `bloodstock`
  ADD CONSTRAINT `bloodstock_ibfk_1` FOREIGN KEY (`bloodtypeID`) REFERENCES `bloodtype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donationmethodoptions`
--
ALTER TABLE `donationmethodoptions`
  ADD CONSTRAINT `donationmethodoptions_ibfk_1` FOREIGN KEY (`DmethodID`) REFERENCES `donationmethod` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donationmethodoptions_ibfk_2` FOREIGN KEY (`OptionID`) REFERENCES `doptions` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donationoptionsvalue`
--
ALTER TABLE `donationoptionsvalue`
  ADD CONSTRAINT `donationoptionsvalue_ibfk_1` FOREIGN KEY (`PMOpid`) REFERENCES `donationmethodoptions` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`usertypeid`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
  ADD CONSTRAINT `user_ibfk_4` FOREIGN KEY (`addressid`) REFERENCES `addresses` (`id`);
--
-- Constraints for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD CONSTRAINT `volunteers_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

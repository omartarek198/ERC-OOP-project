-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 01:48 PM
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
-- Table structure for table `them`
--

CREATE TABLE `them` (
  `Id` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `ThemHTML` text NOT NULL,
  `PosID` int(11) NOT NULL,
  `ParentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `them`
--

INSERT INTO `them` (`Id`, `Name`, `ThemHTML`, `PosID`, `ParentID`) VALUES
(1, 'About me', 'all HTML', 1, NULL),
(11, 'about us', '<h1>About Ziad Page</h1>\n', 2, 1),
(12, 'some text', '<p>Some alaa about who we are and what we do.</p>\r\n', 3, 1),
(13, 'Resize the browser ', '  <p>Resize the browser window to see that this page is responsive by the way.</p>', 13, 1),
(14, 'CEO', '  <p class=\"title\">CEO</p>', 15, 1),
(15, 'Ziad ', '  <h2>Ziad Mostafa</h2>', 14, 1),
(16, 'Focus', '  <p>Focus. Staying singularly focused on an ultimate goal is harder than it sounds. Doing so provides the key to success</p>', 16, 1),
(17, 'ziad', '  <p>ziad.mostafa@egyptianrc.org</p>', 17, 1),
(18, 'Mohamed ', '  <h2>Mohamed Alaa</h2>', 18, 1),
(19, 'Art ', '  <p class=\"title\">Art Director</p>', 19, 1),
(20, 'Effective ', '  <p>1-Effective storyteller. <br>\n2-Effective cross-media design skills.<br>\n3-Brand understanding and leadership.</p>', 20, 1),
(21, 'mohamed@egyptianrc.org', '<p>mohamed@egyptianrc.org</p>', 21, 1),
(22, 'Omar ', '  <h2>Omar Daif</h2>', 22, 1),
(23, 'volunteer ', '<p class=\"title\">volunteer head</p>', 23, 1),
(24, '1-Strong leadership', '<p>1-Strong leadership skills<br>\n2-Great Communication Skills<br>\n</p>', 24, 1),
(25, 'omar@egyptianrc.org<', '  <p>omar@egyptianrc.org</p>', 25, 1),
(26, 'CSS', '<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n        <style>\n            body {\n                font-family: Arial, Helvetica, sans-serif;\n                margin: 0;\n            }\n\n            html {\n                box-sizing: border-box;\n            }\n\n            *, *:before, *:after {\n                box-sizing: inherit;\n            }\n\n            .column {\n                float: left;\n                width: 33.3%;\n                margin-bottom: 16px;\n                padding: 0 8px;\n            }\n\n            .card {\n                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);\n                margin: 8px;\n            }\n\n            .about-section {\n                padding: 50px;\n                text-align: center;\n                background-color: #474e5d;\n                color: white;\n            }\n\n            .container {\n                padding: 0 16px;\n            }\n\n            .container::after, .row::after {\n                content: \"\";\n                clear: both;\n                display: table;\n            }\n\n            .title {\n                color: grey;\n            }\n\n            .button {\n                border: none;\n                outline: 0;\n                display: inline-block;\n                padding: 8px;\n                color: white;\n                background-color: #000;\n                text-align: center;\n                cursor: pointer;\n                width: 100%;\n            }\n\n            .button:hover {\n                background-color: #555;\n            }\n\n            @media screen and (max-width: 650px) {\n                .column {\n                    width: 100%;\n                    display: block;\n                }\n            }\n        </style>', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `them`
--
ALTER TABLE `them`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PosID` (`PosID`,`ParentID`),
  ADD KEY `ParentID` (`ParentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `them`
--
ALTER TABLE `them`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `them`
--
ALTER TABLE `them`
  ADD CONSTRAINT `them_ibfk_1` FOREIGN KEY (`ParentID`) REFERENCES `them` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

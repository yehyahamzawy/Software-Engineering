-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 11:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `ID` int(11) NOT NULL,
  `attributeName` text NOT NULL,
  `type` int(11) NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`ID`, `attributeName`, `type`, `isDeleted`, `createdAt`, `updatedAt`) VALUES
(25, 'Car Type', 2, 1, '2019-03-15 14:36:20', '2019-03-17 17:57:51'),
(26, 'Age', 3, 0, '2019-03-15 14:36:20', '0000-00-00 00:00:00'),
(27, 'Gender', 6, 1, '2019-03-15 14:36:20', '2019-03-17 17:58:25'),
(28, 'Worked Days', 3, 0, '2019-03-15 14:36:20', '2019-03-17 18:25:28'),
(29, 'Email', 1, 0, '2019-03-17 18:49:03', '0000-00-00 00:00:00'),
(30, 'x', 2, 1, '2019-03-17 18:53:21', '2019-03-17 17:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `attributetypes`
--

CREATE TABLE `attributetypes` (
  `ID` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributetypes`
--

INSERT INTO `attributetypes` (`ID`, `name`) VALUES
(1, 'email'),
(2, 'text'),
(3, 'number'),
(5, 'select'),
(6, 'gender');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `ID` int(25) NOT NULL,
  `Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `ID` int(11) NOT NULL,
  `Time` varchar(25) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meetingattendees`
--

CREATE TABLE `meetingattendees` (
  `ID` int(11) NOT NULL,
  `MeetingID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `missionroute`
--

CREATE TABLE `missionroute` (
  `id` int(11) NOT NULL,
  `missionID` int(11) NOT NULL,
  `routeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE `road` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `road`
--

INSERT INTO `road` (`id`, `name`) VALUES
(1, 'Da2ery');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(20) NOT NULL,
  `destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `destination`) VALUES
(1, 'tagamo3');

-- --------------------------------------------------------

--
-- Table structure for table `routeroads`
--

CREATE TABLE `routeroads` (
  `id` int(11) NOT NULL,
  `roadID` int(11) NOT NULL,
  `routeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routeroads`
--

INSERT INTO `routeroads` (`id`, `roadID`, `routeID`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `fName` varchar(40) NOT NULL,
  `lName` varchar(40) NOT NULL,
  `userType` int(11) NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fName`, `lName`, `userType`, `isDeleted`, `createdAt`, `updatedAt`) VALUES
(2, 'dfasf', 'fasdfas', 1, 0, '2019-03-15 14:34:25', '2019-03-19 11:15:55'),
(3, 'meme', 'x', 1, 0, '2019-03-15 14:34:25', '2019-03-19 11:17:42'),
(72, 'ew3a', 'weshak', 1, 1, '2019-03-15 14:34:25', '2019-03-19 11:21:51'),
(97, 'kareek', 'bx', 1, 1, '2019-03-18 01:12:02', '2019-03-19 11:22:03'),
(107, 'fo', '2', 1, 1, '2019-03-18 01:21:11', '2019-03-19 11:22:40'),
(110, 'Joe', '', 2, 1, '2019-03-18 01:32:01', '2019-03-19 11:22:57'),
(111, 'kis', 'bom', 1, 0, '2019-03-18 01:38:30', '0000-00-00 00:00:00'),
(112, 'dude', 's', 1, 0, '2019-03-18 01:38:51', '0000-00-00 00:00:00'),
(113, 'dude', 's', 1, 0, '2019-03-18 01:39:19', '0000-00-00 00:00:00'),
(114, 'das', 'fasa5', 1, 0, '2019-03-18 01:39:41', '0000-00-00 00:00:00'),
(115, 'kiareem', 'ekaf', 1, 0, '2019-03-18 01:41:13', '0000-00-00 00:00:00'),
(116, 'fdafreward', 'fsadf', 1, 0, '2019-03-18 01:42:43', '0000-00-00 00:00:00'),
(117, 'akfdas', 'dsad', 1, 0, '2019-03-18 01:49:07', '0000-00-00 00:00:00'),
(118, 'dasd', 'ewqrq', 1, 0, '2019-03-18 01:51:08', '0000-00-00 00:00:00'),
(119, 'rawe', 'rewqrqw', 1, 0, '2019-03-18 01:53:04', '0000-00-00 00:00:00'),
(120, 'frawetrew', 'qweqw', 1, 0, '2019-03-18 01:53:32', '0000-00-00 00:00:00'),
(121, 'kareme', 'dakgo', 1, 0, '2019-03-18 01:55:05', '0000-00-00 00:00:00'),
(122, 'kare', 'm', 1, 0, '2019-03-18 01:56:33', '0000-00-00 00:00:00'),
(123, 'kareem', 'omda', 1, 0, '2019-03-18 02:00:35', '0000-00-00 00:00:00'),
(124, 'rasrrweqr', 'rewar', 1, 0, '2019-03-18 02:01:15', '0000-00-00 00:00:00'),
(125, 'fafa', 'faweafew', 1, 0, '2019-03-18 19:56:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `ID` int(11) NOT NULL,
  `type` text NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `type`, `isDeleted`, `createdAt`, `updatedAt`) VALUES
(1, 'Driver', 0, '2019-03-15 14:35:17', '0000-00-00 00:00:00'),
(2, 'Assistant', 0, '2019-03-15 14:35:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usertypeattributes`
--

CREATE TABLE `usertypeattributes` (
  `ID` int(11) NOT NULL,
  `userTypeID` int(11) NOT NULL,
  `attributeID` int(11) NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertypeattributes`
--

INSERT INTO `usertypeattributes` (`ID`, `userTypeID`, `attributeID`, `isDeleted`, `createdAt`, `updatedAt`) VALUES
(34, 1, 26, 0, '2019-03-15 14:35:57', '0000-00-00 00:00:00'),
(35, 1, 25, 0, '2019-03-15 14:35:57', '0000-00-00 00:00:00'),
(38, 2, 28, 1, '2019-03-15 14:35:57', '0000-00-00 00:00:00'),
(41, 2, 26, 0, '2019-03-16 22:14:18', '0000-00-00 00:00:00'),
(42, 2, 27, 1, '2019-03-16 22:14:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usertypelinks`
--

CREATE TABLE `usertypelinks` (
  `ID` int(11) NOT NULL,
  `userTypeID` int(11) NOT NULL,
  `linkID` int(11) NOT NULL,
  `connectionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uservalues`
--

CREATE TABLE `uservalues` (
  `ID` int(11) NOT NULL,
  `userTypeOptionID` int(11) NOT NULL,
  `value` text NOT NULL,
  `userID` int(11) NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uservalues`
--

INSERT INTO `uservalues` (`ID`, `userTypeOptionID`, `value`, `userID`, `isDeleted`, `createdAt`, `updatedAt`) VALUES
(8, 34, 'bbbb', 3, 1, '2019-03-15 14:36:58', '2019-03-18 19:43:36'),
(10, 34, '50', 80, 1, '2019-03-15 14:36:58', '2019-03-18 19:43:42'),
(11, 35, 'lada', 80, 1, '2019-03-15 14:36:58', '2019-03-18 19:43:44'),
(12, 34, '40', 81, 1, '2019-03-15 14:36:58', '2019-03-19 10:16:25'),
(13, 35, 'lada', 81, 0, '2019-03-15 14:36:58', '2019-03-19 10:14:44'),
(14, 34, '13', 2, 0, '2019-03-15 15:36:03', '2019-03-19 10:16:19'),
(15, 35, 'fiattoString', 2, 0, '2019-03-15 15:36:03', '2019-03-19 10:15:22'),
(31, 34, '30', 119, 0, '2019-03-18 01:53:05', '0000-00-00 00:00:00'),
(32, 35, 'fasfsa', 119, 0, '2019-03-18 01:53:05', '0000-00-00 00:00:00'),
(33, 34, '50', 120, 0, '2019-03-18 01:53:32', '0000-00-00 00:00:00'),
(34, 35, 'cdasda', 120, 0, '2019-03-18 01:53:32', '0000-00-00 00:00:00'),
(35, 34, '30', 121, 0, '2019-03-18 01:55:05', '0000-00-00 00:00:00'),
(36, 35, 'bmw', 121, 0, '2019-03-18 01:55:06', '0000-00-00 00:00:00'),
(37, 34, '21', 122, 0, '2019-03-18 01:56:35', '0000-00-00 00:00:00'),
(38, 35, 'aveo', 122, 0, '2019-03-18 01:56:35', '0000-00-00 00:00:00'),
(39, 34, '25', 123, 0, '2019-03-18 02:00:36', '0000-00-00 00:00:00'),
(40, 35, 'honda', 123, 0, '2019-03-18 02:00:36', '0000-00-00 00:00:00'),
(41, 34, '25', 124, 0, '2019-03-18 02:01:15', '0000-00-00 00:00:00'),
(42, 35, 'rewarea', 124, 0, '2019-03-18 02:01:16', '0000-00-00 00:00:00'),
(43, 34, '15', 125, 0, '2019-03-18 19:56:44', '0000-00-00 00:00:00'),
(44, 35, 'bm', 125, 0, '2019-03-18 19:56:44', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `attributetypes`
--
ALTER TABLE `attributetypes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `meetingattendees`
--
ALTER TABLE `meetingattendees`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_userid` (`UserID`),
  ADD KEY `fk_meetingid` (`MeetingID`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missionroute`
--
ALTER TABLE `missionroute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_missionid` (`missionID`),
  ADD KEY `FK_routexid` (`routeID`);

--
-- Indexes for table `road`
--
ALTER TABLE `road`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routeroads`
--
ALTER TABLE `routeroads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_roadid` (`roadID`),
  ADD KEY `FK_routeid` (`routeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userType` (`userType`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usertypeattributes`
--
ALTER TABLE `usertypeattributes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userTypeID` (`userTypeID`),
  ADD KEY `attributeID` (`attributeID`);

--
-- Indexes for table `usertypelinks`
--
ALTER TABLE `usertypelinks`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_links` (`linkID`),
  ADD KEY `fk_userType` (`userTypeID`);

--
-- Indexes for table `uservalues`
--
ALTER TABLE `uservalues`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `fk_userTypeOption` (`userTypeOptionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `attributetypes`
--
ALTER TABLE `attributetypes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetingattendees`
--
ALTER TABLE `meetingattendees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `missionroute`
--
ALTER TABLE `missionroute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `road`
--
ALTER TABLE `road`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `routeroads`
--
ALTER TABLE `routeroads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertypeattributes`
--
ALTER TABLE `usertypeattributes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `usertypelinks`
--
ALTER TABLE `usertypelinks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uservalues`
--
ALTER TABLE `uservalues`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute`
--
ALTER TABLE `attribute`
  ADD CONSTRAINT `attype` FOREIGN KEY (`type`) REFERENCES `attributetypes` (`ID`);

--
-- Constraints for table `meetingattendees`
--
ALTER TABLE `meetingattendees`
  ADD CONSTRAINT `fk_meetingid` FOREIGN KEY (`MeetingID`) REFERENCES `meeting` (`ID`),
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `missionroute`
--
ALTER TABLE `missionroute`
  ADD CONSTRAINT `FK_routexid` FOREIGN KEY (`routeID`) REFERENCES `route` (`id`),
  ADD CONSTRAINT `fk_missionid` FOREIGN KEY (`missionID`) REFERENCES `mission` (`id`);

--
-- Constraints for table `routeroads`
--
ALTER TABLE `routeroads`
  ADD CONSTRAINT `FK_roadid` FOREIGN KEY (`roadID`) REFERENCES `road` (`id`),
  ADD CONSTRAINT `FK_routeid` FOREIGN KEY (`routeID`) REFERENCES `route` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userType`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `usertypeattributes`
--
ALTER TABLE `usertypeattributes`
  ADD CONSTRAINT `usertypeattributes_ibfk_1` FOREIGN KEY (`userTypeID`) REFERENCES `usertype` (`ID`),
  ADD CONSTRAINT `usertypeattributes_ibfk_2` FOREIGN KEY (`attributeID`) REFERENCES `attribute` (`ID`);

--
-- Constraints for table `usertypelinks`
--
ALTER TABLE `usertypelinks`
  ADD CONSTRAINT `fk_links` FOREIGN KEY (`linkID`) REFERENCES `link` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userType` FOREIGN KEY (`userTypeID`) REFERENCES `usertype` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `uservalues`
--
ALTER TABLE `uservalues`
  ADD CONSTRAINT `fk_userTypeOption` FOREIGN KEY (`userTypeOptionID`) REFERENCES `usertypeattributes` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `uservalues_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 02:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `ID` int(11) NOT NULL,
  `attributeName` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hashedRow` varchar(200) NOT NULL,
  `rowID` int(11) NOT NULL,
  `tableName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `action`, `time`, `hashedRow`, `rowID`, `tableName`) VALUES
(2, 'insert', '2019-04-20 00:44:16', '811e7752a2b4fc58cbc514e3bfe6ef24aac9ef9f', 2, 'user'),
(3, 'insert', '2019-04-20 00:45:10', '4d99a7a39a1b02dd058be0014252a9b9dee62a61', 9, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `userTypeID` int(11) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fName`, `lName`, `userTypeID`, `isDeleted`) VALUES
(1, 'test', 'tester', 1, 0),
(2, 'bad', 'tester', 1, 0),
(9, 'new', 'guy', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `ID` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `type`, `isDeleted`) VALUES
(1, 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertypeattributes`
--

CREATE TABLE `usertypeattributes` (
  `ID` int(11) NOT NULL,
  `userTypeID` int(11) NOT NULL,
  `attributeID` int(11) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uservalues`
--

CREATE TABLE `uservalues` (
  `ID` int(11) NOT NULL,
  `userTypeAttributeID` int(11) NOT NULL,
  `value` text NOT NULL,
  `userID` int(11) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userTypeID` (`userTypeID`);

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
-- Indexes for table `uservalues`
--
ALTER TABLE `uservalues`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userTypeAttributeID` (`userTypeAttributeID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertypeattributes`
--
ALTER TABLE `usertypeattributes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uservalues`
--
ALTER TABLE `uservalues`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `usertypeattributes`
--
ALTER TABLE `usertypeattributes`
  ADD CONSTRAINT `usertypeattributes_ibfk_1` FOREIGN KEY (`userTypeID`) REFERENCES `usertype` (`ID`),
  ADD CONSTRAINT `usertypeattributes_ibfk_2` FOREIGN KEY (`attributeID`) REFERENCES `attribute` (`ID`);

--
-- Constraints for table `uservalues`
--
ALTER TABLE `uservalues`
  ADD CONSTRAINT `uservalues_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `uservalues_ibfk_2` FOREIGN KEY (`userTypeAttributeID`) REFERENCES `usertypeattributes` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

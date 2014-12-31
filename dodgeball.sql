-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 31, 2014 at 10:44 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dodgeball`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
`id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'tyler.barban@ashbury.ca', 'barnwell');

-- --------------------------------------------------------

--
-- Table structure for table `pools`
--

CREATE TABLE `pools` (
`ID` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `TEAM1` text NOT NULL,
  `TEAM2` text NOT NULL,
  `TEAM3` text NOT NULL,
  `COLOUR` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pools`
--

INSERT INTO `pools` (`ID`, `NAME`, `TEAM1`, `TEAM2`, `TEAM3`, `COLOUR`) VALUES
(1, 'Pool A', 'Rockcliffe Tropics', 'Crazy Kingston Thunder Monkeys', 'Dolls with Balls', 'success'),
(2, 'Pool B', 'Horns Out', 'Dirty Myrone and the Boyz', 'All Dodge No Balls', 'info'),
(3, 'Pool C', 'Balls Deep', 'Purple Cobras', 'WDTMCWTASR', 'danger'),
(4, 'Pool D', 'Dodge Fathers', 'Unknown', '"006"', 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
`ID` int(11) NOT NULL,
  `POOLID` text NOT NULL,
  `TIME` text NOT NULL,
  `DATE` text NOT NULL,
  `HOME` text NOT NULL,
  `AWAY` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ID`, `POOLID`, `TIME`, `DATE`, `HOME`, `AWAY`) VALUES
(1, 'success', '12:40PM', 'Jan. 13', 'Rockcliffe Tropics', 'Crazy Kingston Thunder Monkeys'),
(2, 'info', '12:40PM', 'Jan. 13', 'Horns Out', 'Dirty Myrone and the Boyz'),
(3, 'danger', '1:05PM', 'Jan. 13', 'Balls Deep', 'Purple Cobras'),
(4, 'warning', '1:05PM', 'Jan. 13', 'Dodge Fathers', 'Unknown'),
(5, 'success', '12:40PM', 'Jan. 14', 'Rockcliffe Tropics', 'Dolls With Balls'),
(6, 'info', '12:40PM', 'Jan. 14', 'Horns Out', 'All Dodge No Balls'),
(7, 'danger', '1:05PM', 'Jan. 14', 'Balls Deep', 'WDTMCWTASR'),
(8, 'warning', '1:05PM', 'Jan. 14', 'Dodge Fathers', '"006"'),
(9, 'success', '12:40PM', 'Jan. 15', 'Crazy Kingston Thunder Monkeys', 'Dolls with Balls'),
(10, 'info', '12:40PM', 'Jan. 15', 'Dirty Myrone and the Boyz', 'All Dodge No Balls'),
(11, 'danger', '1:05PM', 'Jan. 15', 'Purple Cobras', 'WDTMCWTASR'),
(12, 'warning', '1:05PM', 'Jan. 15', 'Unknown', '"006"');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
`TID` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `GP` int(11) NOT NULL DEFAULT '0',
  `W` int(11) NOT NULL DEFAULT '0',
  `L` int(11) NOT NULL DEFAULT '0',
  `PTS` int(11) NOT NULL DEFAULT '0',
  `MEM1` text NOT NULL,
  `MEM2` text NOT NULL,
  `MEM3` text NOT NULL,
  `MEM4` text NOT NULL,
  `MEM5` text NOT NULL,
  `MEM6` text NOT NULL,
  `MEM7` text NOT NULL,
  `MEM8` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TID`, `NAME`, `GP`, `W`, `L`, `PTS`, `MEM1`, `MEM2`, `MEM3`, `MEM4`, `MEM5`, `MEM6`, `MEM7`, `MEM8`) VALUES
(5, 'Balls Deep', 0, 0, 0, 0, 'Scott Hillier', 'Tyler Barban', 'Thomas Robinson', 'Tommy Friedlich', 'Mark Tyhurst', 'Mathieu Lefebvre', 'Noah Novick', 'Quang Trong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pools`
--
ALTER TABLE `pools`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
 ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pools`
--
ALTER TABLE `pools`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
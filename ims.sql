-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 05:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ims`
--
CREATE DATABASE IF NOT EXISTS `ims` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ims`;

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE IF NOT EXISTS `bom` (
  `bid` int(6) NOT NULL,
  `locref` varchar(10) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `qty` int(6) NOT NULL,
  `uom` varchar(6) NOT NULL,
  `currency` varchar(3) NOT NULL,
  `mrp` int(20) NOT NULL,
  `discount` int(10) NOT NULL,
  `tax` int(10) NOT NULL,
  `gtotal` int(10) NOT NULL,
  `matstatus` varchar(300) NOT NULL,
  `prid` varchar(30) NOT NULL,
  `matcode` varchar(10) NOT NULL,
  `matname` varchar(30) NOT NULL,
  `matsdesc` varchar(40) NOT NULL,
  `matldesc` varchar(50) NOT NULL,
  `pono` varchar(20) NOT NULL,
  `vendor` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`bid`, `locref`, `cat`, `qty`, `uom`, `currency`, `mrp`, `discount`, `tax`, `gtotal`, `matstatus`, `prid`, `matcode`, `matname`, `matsdesc`, `matldesc`, `pono`, `vendor`) VALUES
(5, 'x', 'adfa', 100, 'NOS', 'asd', 1000, 100, 200, 0, 'sdfsadf', 'M1', 'x', '', 'xx', 'x', 'asdfas', 'asdfa'),
(6, '', 'dfgsdf', 233, '', '', 0, 0, 0, 0, '', 'M1', 'Matk', '', 'adf', 'dsfg', '', ''),
(7, 'loc', 'cat', 25, 'oum', 'inr', 1000, 100, 100, 0, 'status', 'GKPR', 'mat01', '', 'a', 'long', 'sdfs', 'sadfs');

-- --------------------------------------------------------

--
-- Table structure for table `issuedgoods`
--

CREATE TABLE IF NOT EXISTS `issuedgoods` (
  `gino` int(10) NOT NULL,
  `matcode` varchar(30) NOT NULL,
  `prid` varchar(20) NOT NULL,
  `issuedto` varchar(40) NOT NULL,
  `issueqty` int(10) NOT NULL,
  `issuedate` date NOT NULL,
  `issvehno` varchar(20) NOT NULL,
  `issueloc` varchar(30) NOT NULL,
  `duedate` date NOT NULL,
  `isspono` varchar(15) NOT NULL,
  `isspr` varchar(30) NOT NULL,
  `returnable` varchar(5) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `strloc` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuedgoods`
--

INSERT INTO `issuedgoods` (`gino`, `matcode`, `prid`, `issuedto`, `issueqty`, `issuedate`, `issvehno`, `issueloc`, `duedate`, `isspono`, `isspr`, `returnable`, `remarks`, `strloc`) VALUES
(2, 'x', 'M1', 'asdfas', 0, '2004-01-01', 'asdfas', 'asdfas', '0000-00-00', '', 'M1', 'NO', 'asdfas', ''),
(3, 'mat01', 'GKPR', 'asdf', 0, '2004-01-01', 'asdfas', 'awsefa', '0000-00-00', '', 'M1', 'NO', 'asdfas', '');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `grno` int(11) NOT NULL,
  `rcvloc` varchar(50) NOT NULL,
  `rcvperson` varchar(25) NOT NULL,
  `rdate` date NOT NULL,
  `vehicleno` varchar(25) NOT NULL,
  `supname` varchar(25) NOT NULL,
  `matcode` varchar(25) NOT NULL,
  `matdisc` varchar(100) NOT NULL,
  `pono` varchar(20) NOT NULL,
  `rcvqty` int(10) NOT NULL,
  `rjctqty` int(11) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `prid` varchar(30) NOT NULL,
  `rcvdept` varchar(50) NOT NULL,
  `issuedto` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `reqdate` date NOT NULL,
  `issueqty` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `storelocation` varchar(50) NOT NULL,
  `remarks1` varchar(50) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `issuedate` date NOT NULL,
  `issvehno` varchar(20) NOT NULL,
  `issueloc` varchar(30) NOT NULL,
  `gino` int(6) NOT NULL,
  `duedate` date NOT NULL,
  `isspono` int(6) NOT NULL,
  `isspr` varchar(30) NOT NULL,
  `returnable` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `prid` varchar(30) NOT NULL,
  `prname` varchar(20) NOT NULL,
  `prsdesc` varchar(40) NOT NULL,
  `prldesc` varchar(200) NOT NULL,
  `prref` varchar(30) NOT NULL,
  `prrefdate` date NOT NULL,
  `customer1` varchar(30) NOT NULL,
  `contact1` varchar(25) NOT NULL,
  `customer2` varchar(30) NOT NULL,
  `contact2` varchar(25) NOT NULL,
  `prodesc` varchar(100) NOT NULL,
  `matcode` varchar(20) NOT NULL,
  `fstatus` varchar(10) NOT NULL,
  `prvalue` int(10) NOT NULL,
  `amtrcvd` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`prid`, `prname`, `prsdesc`, `prldesc`, `prref`, `prrefdate`, `customer1`, `contact1`, `customer2`, `contact2`, `prodesc`, `matcode`, `fstatus`, `prvalue`, `amtrcvd`) VALUES
('GKPR', 'GKProject', 'GKProject', 'GKProject', '', '2004-01-01', 'GKProject', 'GKProject', 'GKProject', 'GKProject', 'GKProject', '', 'CLOSED', 0, 0),
('M1', 'MURU PROJECT', 'P SD', 'P LD', '', '2016-05-29', 'Cus 1', '', '', '', '', '', 'OPEN', 15000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `receivedgoods`
--

CREATE TABLE IF NOT EXISTS `receivedgoods` (
  `grno` int(11) NOT NULL,
  `rcvloc` varchar(40) NOT NULL,
  `rcvperson` varchar(40) NOT NULL,
  `rdate` date NOT NULL,
  `vehicleno` varchar(30) NOT NULL,
  `supname` varchar(40) NOT NULL,
  `matcode` varchar(30) NOT NULL,
  `pono` varchar(20) NOT NULL,
  `rcvqty` int(10) NOT NULL,
  `rjctqty` int(10) NOT NULL,
  `remarks` varchar(40) NOT NULL,
  `prid` varchar(15) NOT NULL,
  `rcvdept` varchar(30) NOT NULL,
  `vendor` varchar(30) NOT NULL,
  `issuedqty` int(10) NOT NULL,
  `strloc` varchar(50) NOT NULL,
  `matdisc` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receivedgoods`
--

INSERT INTO `receivedgoods` (`grno`, `rcvloc`, `rcvperson`, `rdate`, `vehicleno`, `supname`, `matcode`, `pono`, `rcvqty`, `rjctqty`, `remarks`, `prid`, `rcvdept`, `vendor`, `issuedqty`, `strloc`, `matdisc`) VALUES
(3, '', '', '2004-01-01', '', '', ' ttt', '', 0, 0, '', ' ttt', '', 'gk', 0, '', ''),
(4, '', '', '2004-01-01', '', '', ' ttt', '', 0, 0, '', ' ttt', '', '', 0, '', ''),
(5, 'asdfas', 'asdfs', '0000-00-00', 'sdfs', '', 'x', '', 10, 1, 'sdfs', 'M1', '', '', 1, 'store1', ''),
(6, '', '', '2004-01-01', '', '', 'mat01', '', 10, 0, '', 'GKPR', '', '', 5, '', ''),
(7, 'sdfg', 'asdf', '2004-01-01', 'sdf', '', 'Matk', '', 23, 2, '223', 'M1', '', '', 0, 'sdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `storageloc`
--

CREATE TABLE IF NOT EXISTS `storageloc` (
  `strid` int(10) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`bid`), ADD UNIQUE KEY `matcode` (`matcode`);

--
-- Indexes for table `issuedgoods`
--
ALTER TABLE `issuedgoods`
  ADD PRIMARY KEY (`gino`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`grno`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `receivedgoods`
--
ALTER TABLE `receivedgoods`
  ADD PRIMARY KEY (`grno`);

--
-- Indexes for table `storageloc`
--
ALTER TABLE `storageloc`
  ADD PRIMARY KEY (`strid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `bid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `issuedgoods`
--
ALTER TABLE `issuedgoods`
  MODIFY `gino` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `grno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receivedgoods`
--
ALTER TABLE `receivedgoods`
  MODIFY `grno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

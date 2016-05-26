-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2016 at 04:02 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsmock`
--
CREATE DATABASE IF NOT EXISTS `wsmock` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `wsmock`;

-- --------------------------------------------------------

--
-- Table structure for table `engagmentSummaryBeanList`
--

DROP TABLE IF EXISTS `engagmentSummaryBeanList`;
CREATE TABLE `engagmentSummaryBeanList` (
  `id` int(11) NOT NULL,
  `gosi_id` int(11) NOT NULL,
  `engagementStatus` int(11) NOT NULL,
  `establishmentNameArb` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `joiningDate` date NOT NULL,
  `joiningDateEntFmt` date NOT NULL,
  `leavingDate` date NOT NULL,
  `leavingDateEntFmt` date NOT NULL,
  `molEstId` int(11) NOT NULL,
  `molEstOfficeId` int(11) NOT NULL,
  `registrationNumber` int(11) NOT NULL,
  `wage` int(11) NOT NULL,
  `wageStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `engagmentSummaryBeanList`
--

INSERT INTO `engagmentSummaryBeanList` (`id`, `gosi_id`, `engagementStatus`, `establishmentNameArb`, `joiningDate`, `joiningDateEntFmt`, `leavingDate`, `leavingDateEntFmt`, `molEstId`, `molEstOfficeId`, `registrationNumber`, `wage`, `wageStatus`) VALUES
(0, 23424, 234, 'sdfsdf', '2010-01-01', '2010-01-01', '2010-01-01', '2010-01-01', 24234, 234234, 2423, 43, 324);

-- --------------------------------------------------------

--
-- Table structure for table `gosi`
--

DROP TABLE IF EXISTS `gosi`;
CREATE TABLE `gosi` (
  `NIN` int(11) NOT NULL,
  `contributorFirstName` varchar(200) NOT NULL,
  `contributorLastName` varchar(200) NOT NULL,
  `contributorSecondName` varchar(200) NOT NULL,
  `contributorThirdName` varchar(200) NOT NULL,
  `nationalityCode` int(2) NOT NULL,
  `newNINumber` int(10) NOT NULL,
  `sex` int(2) NOT NULL,
  `socialInsuranceNumber` int(10) NOT NULL,
  `specifiedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gosi`
--

INSERT INTO `gosi` (`NIN`, `contributorFirstName`, `contributorLastName`, `contributorSecondName`, `contributorThirdName`, `nationalityCode`, `newNINumber`, `sex`, `socialInsuranceNumber`, `specifiedDate`) VALUES
(23423, 'test', 'test', 'test', 'test', 0, 23, 1, 23, '2010-01-01 00:00:00'),
(23424, 'sfd', 'sdfsd', 'sdf', 'sdf', 24234, 2342, 1, 23423, '2010-01-01 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `engagmentSummaryBeanList`
--
ALTER TABLE `engagmentSummaryBeanList`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gosi`
--
ALTER TABLE `gosi`
  ADD PRIMARY KEY (`NIN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

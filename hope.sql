-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2014 at 05:28 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `EmailAddress` varchar(60) NOT NULL,
  `Password` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Email`, `EmailAddress`, `Password`) VALUES
(1, 'Super Administrator', 'admin', 'admin@hope.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `AttachmentID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) NOT NULL,
  `OfferID` int(11) NOT NULL,
  `Month` varchar(30) NOT NULL,
  PRIMARY KEY (`AttachmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `CityID` int(10) NOT NULL AUTO_INCREMENT,
  `StateID` int(10) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`CityID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `DoctorID` int(11) NOT NULL AUTO_INCREMENT,
  `SpecialityID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `GraduationYear` bigint(10) NOT NULL,
  `USMLE1` int(10) DEFAULT NULL,
  `USMLE2` int(10) DEFAULT NULL,
  `USMLECS` int(10) DEFAULT NULL,
  `PostQualification` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `ContactMethod` int(10) DEFAULT NULL,
  `ConfirmationSent` int(1) NOT NULL,
  `IsActive` int(10) NOT NULL,
  PRIMARY KEY (`DoctorID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `OfferID` int(10) NOT NULL AUTO_INCREMENT,
  `DoctorID` varchar(50) DEFAULT NULL,
  `SpecialityID` int(10) DEFAULT NULL,
  `Hospital` varchar(100) NOT NULL,
  `Year` bigint(10) DEFAULT NULL,
  `MultipleYears` tinyint(1) DEFAULT NULL,
  `TillYear` bigint(10) DEFAULT NULL,
  `January` int(10) DEFAULT NULL,
  `February` int(10) DEFAULT NULL,
  `March` int(10) DEFAULT NULL,
  `April` int(10) DEFAULT NULL,
  `May` int(10) DEFAULT NULL,
  `June` int(10) DEFAULT NULL,
  `July` int(10) DEFAULT NULL,
  `August` int(10) DEFAULT NULL,
  `September` int(10) DEFAULT NULL,
  `October` int(10) DEFAULT NULL,
  `November` int(10) DEFAULT NULL,
  `December` int(10) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `OfferType` varchar(30) NOT NULL,
  `TotalStudent` varchar(50) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `IsActive` int(10) DEFAULT NULL,
  PRIMARY KEY (`OfferID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE IF NOT EXISTS `speciality` (
  `SpecialityID` int(10) NOT NULL AUTO_INCREMENT,
  `Text` varchar(50) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`SpecialityID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `StateID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` int(50) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`StateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StudentID` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `GraduationYear` bigint(10) DEFAULT NULL,
  `USMLE1Score` int(10) DEFAULT NULL,
  `USMLE2Score` int(10) DEFAULT NULL,
  `USMLE2CS` int(10) DEFAULT NULL,
  `SpecialityID` int(10) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `ContactMethod` varchar(10) DEFAULT NULL,
  `IsAvailable` int(10) DEFAULT NULL,
  `ConfirmationSent` int(1) NOT NULL,
  `IsActive` int(10) DEFAULT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 08:07 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `alltables`
--

CREATE TABLE IF NOT EXISTS `alltables` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `purpose` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `alltables`
--

INSERT INTO `alltables` (`id`, `type`, `purpose`, `status`, `cid`) VALUES
(1, 'Table for 2', 'Meeting', 'Booked', 1),
(2, 'Table for 3', 'Casual', 'Booked', 2),
(3, 'Table for 4', 'Celebratio', 'Availabale', NULL),
(4, 'Table for 5', 'Meeting', 'Availabale', NULL),
(5, 'Table for 6', 'Casual', 'Availabale', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `approval` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `approval`) VALUES
(1, 'Carter Verone', 2147483647, 'xyz@gmail.com', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pass`) VALUES
(1, 'Admin', '#794@bad'),
(2, 'Prateek', '#794@gamer'),
(4, 'Gamergod', '#794@god');

-- --------------------------------------------------------

--
-- Table structure for table `tablebook`
--

CREATE TABLE IF NOT EXISTS `tablebook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` text,
  `Tbltyp` varchar(20) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tablebook`
--

INSERT INTO `tablebook` (`id`, `Title`, `FName`, `LName`, `Email`,  `Phone`, `Tbltyp`, `time`, `date`, `status`) VALUES
(1, 'Mr.', 'Amit', 'Garg', 'amt@yahoo.in', '22428756', 'Table for 2', '10:05:00', '2019-09-28', 'Confirm'),
(2, 'Miss.', 'Elena ', 'Fox', 'elena@yahoo.in', '22487546', 'Table for 3', '22:45:00', '2020-10-29', 'Confirm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

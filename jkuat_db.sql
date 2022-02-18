-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2018 at 12:24 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jkuat_db`
--
CREATE DATABASE IF NOT EXISTS `jkuat_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jkuat_db`;

-- --------------------------------------------------------

--
-- Table structure for table `apply_id`
--

CREATE TABLE IF NOT EXISTS `apply_id` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(40) NOT NULL,
  `name` text NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `abstract` varchar(100) NOT NULL,
  `receipt` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `apply_id`
--

INSERT INTO `apply_id` (`id`, `reg_no`, `name`, `phone_no`, `email`, `abstract`, `receipt`, `date`, `time`, `status`) VALUES
(1, 'ee', 'eew', '5454', 'john.doe@students', '', '', '2018-12-17', '22:23:06', 'Ready'),
(3, 'rerw', 'fgdf', '44', 'john.doe@students', '', '', '2018-12-17', '22:24:53', 'In Progress'),
(5, '123', 'wewe', '323232', '', '1.png', '1.png', '2018-12-17', '23:27:21', 'Ready'),
(6, 'qwe', 'wqeq', '1222', '', '1.png', '1.png', '2018-12-17', '23:43:46', 'In Progress'),
(7, 'qwe', 'wqeq', '1222', '', '1.png', '1.png', '2018-12-17', '23:44:08', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `lost_ids`
--

CREATE TABLE IF NOT EXISTS `lost_ids` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(40) NOT NULL,
  `owner_name` text NOT NULL,
  `place_found` text NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lost_ids`
--

INSERT INTO `lost_ids` (`id`, `reg_no`, `owner_name`, `place_found`, `phone_no`, `name`, `email`, `date`, `time`, `status`) VALUES
(1, 'ee', 'eew', 'ww', '5454', 'el', 'john.doe@students', '2018-12-17', '22:23:06', 'Owner Found'),
(2, 'rerw', 'fgdf', 'fgfd', '44', 'fddd', 'john.doe@students', '2018-12-17', '22:23:22', 'Owner Found'),
(3, 'rerw', 'fgdf', 'fgfd', '44', 'fddd', 'john.doe@students', '2018-12-17', '22:24:53', 'Owner Found'),
(4, 'ere', 'ee', 'ee', '33', '33', 'john.doe@students', '2018-12-17', '22:52:03', ''),
(5, '22', 'ww', 'ww', 'ww', 'ww', 'john.doe@students', '2018-12-17', '23:42:51', 'Owner Found');

-- --------------------------------------------------------

--
-- Table structure for table `usersdetails`
--

CREATE TABLE IF NOT EXISTS `usersdetails` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `idnumber` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` text NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `profile` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usersdetails`
--

INSERT INTO `usersdetails` (`userid`, `firstname`, `lastname`, `idnumber`, `email`, `password`, `role`, `reg_no`, `profile`) VALUES
(2, 'john', 'doe', 11111111, 'michael.mbochi@students', 'hdb212-5601/2015', 'student', 'HDB212-2191/2015', 'avatar.jpg'),
(4, 'Mike', 'John', 12345678, 'mike.john@students', '123456', 'admin', 'stf212-9987/2004', 'avatar.png'),
(5, 'Joseph', 'Kimondi', 32154685, 'joseph@yahoo.com', 'joseph2015', '', '', ''),
(8, 'grtd', 'iugh', 14781, 'steve@ert.com', '123456', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

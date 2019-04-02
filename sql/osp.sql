-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2019 at 06:13 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admindivesh@admin.ac.in', 'onlyadminknows');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `bloodgroup` varchar(5) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Units` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `bloodgroup`, `organization`, `address`, `Units`) VALUES
(1, 'A+', 'Blood Organization - Tamilnadu', 'xyz street, abc avenue, Chennai-60079, tamilnadu', 100);

-- --------------------------------------------------------

--
-- Table structure for table `blood camps`
--

DROP TABLE IF EXISTS `blood camps`;
CREATE TABLE IF NOT EXISTS `blood camps` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood camps`
--

INSERT INTO `blood camps` (`id`, `name`, `email`, `number`, `city`, `address`, `date`, `time`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, 'divesh', 'ndiveshjain@gmail.com', '9555212355', 'chennai', '20/34 muthukrishnan street', '20th april 2019', '12pm-4pm'),
(6, 'sdfslfkj', 'ddskj', 'klfdjs', 'fdsj', 'sfdsdj', 'fdsjkdh', 'kjfas'),
(7, 'kfdljfs', 'lkdskfj', 'lkdsf', 'kdkjfls', 'fljks', 'fsdlkjad', 'dfslkja'),
(8, 'sfsjlf', 'a', 'ldsj', 'sdf', 'sd', 'dsjsf', 'dflsjf'),
(9, 'djdslkf', 'fldskjk', 'ljdfa', 'fjldksa', 'ajdfsk', 'dfsdjk', 'dsfjkj'),
(10, 'fjkfsd', 'jfsd', 'jdfskf', 'fsjdk', 'kfsjsd', 'kjfdfsd', 'dfkjsd'),
(11, 'dfjs', 'sdljksf', 'ldfkj', 'jfai', 'kjfh', 'kdfsjsh', 'fdskjs'),
(12, 'fdldkjd', 'dfjl', 'fdlj', 'jfds', 'ldjf', 'lfdkj', 'flkjk');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
CREATE TABLE IF NOT EXISTS `donors` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `city`, `address`, `number`, `email`, `password`) VALUES
(1, 'SS org', 'chennai', '20/34 muthukrishnan street, Kondithope, Chennai-600079', '9043926652', 'ssorg@gmail.com', 'ssjain'),
(2, 'hadakarnataka', 'banglore', 'karnataka', '558524422', 'ldksfja@sjdkl.com', 'divehs'),
(3, 'divesh', 'chennai', '20/34 ddd streetq', '99884523855', 'divesh@gmail.com', 'divesh'),
(4, 'manan', 'chesa', 'klasdjf', '988', 'manan@gmail.com', 'manan');

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

DROP TABLE IF EXISTS `sponsers`;
CREATE TABLE IF NOT EXISTS `sponsers` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `state` varchar(20) NOT NULL,
  `bloodgroup` varchar(2) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `state`, `bloodgroup`, `number`, `email`, `password`) VALUES
(2, 'divesh', '', '', '', 'diveshdj92@gmail.com', 'divesh'),
(3, 'divesh', '', '', '', 'divesh@gmail.com', 'divesh'),
(4, 'divesh', '', '', '', 'divesh1dd@gmail.com', 'dddd'),
(5, 'divevsh', '', '', '', 'diveshjain@gmail.com', 'divesh'),
(6, 'divesh', 'tamilnadu', 'A+', '988845238', 'xyz@gmail.ac.in', 'divesh'),
(7, 'diveshlunker', 'haryana', 'A+', '9999*******', 'divevsh@gmail.com', 'divesh'),
(8, 'abhinav', 'uttar pradesh', 'A-', '9555212355', 'hada@gmail.com', 'hada'),
(9, 'divesh', '', '', '98845238555', 'xyzabc1908@gmail.com', 'divesh'),
(10, 'asd', '', '', '9884523855', 'ccd@gmail.com', 'divesh'),
(11, 'diveshlunker', '', '', '6544545546', 'klsajdf@gmail.com', 'divesh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

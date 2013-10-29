-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2013 at 11:01 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jakata`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_stylist`
--

CREATE TABLE IF NOT EXISTS `feedback_stylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stylist` varchar(120) NOT NULL,
  `salon` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1156 ;

--
-- Dumping data for table `feedback_stylist`
--

INSERT INTO `feedback_stylist` (`id`, `stylist`, `salon`, `active`) VALUES
(1101, 'Adam Carter', 1, 0),
(1102, 'Laura Crumplin', 1, 0),
(1119, 'Jimmy Sharpe ', 1, 0),
(1134, 'Natalie Doxey', 1, 0),
(1147, 'Shelly French', 1, 0),
(1148, 'Sophie Kemp', 1, 0),
(1151, 'Mikala Sutcliffe', 1, 0),
(1152, 'Victoria Rowland', 1, 0),
(1153, 'Dan Anderson', 1, 0),
(1154, 'Maisie Thomson', 1, 0),
(1155, 'Katie Littlemore', 1, 0);

-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2013 at 01:34 PM
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
-- Table structure for table `feedback_client`
--

CREATE TABLE IF NOT EXISTS `feedback_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iris_id` int(11) NOT NULL,
  `stylist` varchar(60) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iris_id` (`iris_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_client`
--

INSERT INTO `feedback_client` (`id`, `iris_id`, `stylist`, `first_name`, `last_name`, `mobile`) VALUES
(1, 232, 'Michelle Ash', 'Adam', 'Carter', '07921806884');

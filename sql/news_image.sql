-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2013 at 12:35 PM
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
-- Table structure for table `news_image`
--

CREATE TABLE IF NOT EXISTS `news_image` (
  `news_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`news_id`,`image_id`),
  KEY `news_id` (`news_id`,`image_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_image`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_image`
--
ALTER TABLE `news_image`
  ADD CONSTRAINT `news_image_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `news_image_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON UPDATE CASCADE;

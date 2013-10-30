-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2013 at 10:31 PM
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
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `age` enum('16-20','21-30','31-40','41-50','51-60','61-70','Over 70') NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `location` enum('Warrington Centre','Stockton Heath','Padgate','Penketh','Orford','Widnes','Runcorn','Other (Warrington)','Other (Outside Warrington)') NOT NULL,
  `frequency` enum('More than once a week','Once a week','Once a fortnight','Every 3 weeks','Every 4 weeks','Every 5 weeks','Every 6 weeks','Every 7 weeks','Every 8 weeks','More than 8 weeks') NOT NULL,
  `stylist` int(11) NOT NULL,
  `salon` enum('Regis (town centre)','Regis (other)','Callaghans','Johnsons (St. Heath)','Johnsons (Warrington)','Brewsters','Lime Light','Blow','Hair Shop','Rods','Toni & Guy (Warr)','Toni & Guy (St.Heath)','Mobile Hairdresser','Other') NOT NULL,
  `other_salon` int(11) DEFAULT NULL,
  `cut_spend` enum('Less than £10','£10-£20','£21-£30','£31-£40','£41-£50','£51-£60','More than £60') NOT NULL,
  `colour_spend` int(11) NOT NULL,
  `stylist_skill` int(11) NOT NULL,
  `friendliness` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `customer_service` int(11) NOT NULL,
  `environment` int(11) NOT NULL,
  `convenience` int(11) NOT NULL,
  `reputation` int(11) NOT NULL,
  `end_result` int(11) NOT NULL,
  `poor_service` int(11) NOT NULL,
  `comp_offer` int(11) NOT NULL,
  `hygiene` int(11) NOT NULL,
  `boredom` int(11) NOT NULL,
  `products` enum('My Stylist','Another Salon','Salon Wholesale','Supermarket/Chemist','Other') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `survey`
--


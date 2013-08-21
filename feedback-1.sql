-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2013 at 10:28 AM
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
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `intro` int(11) NOT NULL COMMENT 'intro How was the introduction to your stylist did they make you feel welcome and comfortable ( 1-5)rating  1 being poor -2pts  5 being excellent 2pts  ',
  `consultation` int(11) NOT NULL COMMENT 'Consultation rate the consultation on these factors.. did the stylist listen to you?  were they understanding?  did they offer you professional advice and differering ideas?  did you feel comfortable with them?  did you both come to a decision on what to ',
  `styling_area` int(11) NOT NULL COMMENT 'Station How satisfied were you with the cleanlyness of the styling station you were sat on. use these factors to make your judgement.  clean and clear from other peoples hair cuttings  clean shelving unit  clean mirrors  clear of clutter and tools  clean ',
  `stylist_appearance` int(11) NOT NULL COMMENT 'rate your stylists appearance (1-5)  1 being poor -2pts  5 being excellent 2pts ',
  `prod_advice` int(11) NOT NULL COMMENT 'was product advice given to you by your stylist 1 never -2pts 2 very little-1pt 3 being some 0pt 4 being good advice 1pt 5 being lots of really good advice 2pts',
  `styling_advice` int(11) NOT NULL COMMENT 'was styling advice given to you by your stylist 1 never -2pts 2 very little -1pt 3 being some 0pts 4 being good advice 1pt 5 being lots of really good advice 2pts',
  `mkt1` int(11) NOT NULL,
  `mkt2` int(11) NOT NULL,
  `mkt3` int(11) NOT NULL,
  `value_for_money` int(11) NOT NULL COMMENT 'how do you rate the pricing of your stylists pricing and value for money 1to5 1 being poor -2pts 3 being average 0pts 5 being excellent 2pts',
  `whole_experience` int(11) NOT NULL COMMENT 'how do you rate the experience as a whole on your last visit 1to5 1poor -2pts 3 average 0pts 5 being excellent 2pts',
  `end_result` int(11) NOT NULL COMMENT 'how happy were you with the end result of your hair 1to10 1 being poor -5pts 5 average 0pts 10 extremely satisfied 5pts',
  `extra` varchar(300) NOT NULL COMMENT 'any extra comments you would like to make (text format for admin use only)',
  `stylist_id` int(11) NOT NULL,
  `allow` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stylist_id` (`stylist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_3` FOREIGN KEY (`stylist_id`) REFERENCES `feedback_stylist` (`id`) ON UPDATE CASCADE;

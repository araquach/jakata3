-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2013 at 10:06 PM
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
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `anchor` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(256) NOT NULL,
  `unhidden` text NOT NULL,
  `unhid_img` varchar(256) NOT NULL,
  `hidden` text NOT NULL,
  `hidden_img` varchar(256) NOT NULL,
  `offer` varchar(500) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `anchor`, `date`, `author`, `unhidden`, `unhid_img`, `hidden`, `hidden_img`, `offer`, `publish`) VALUES
(1, 'Welcome to my news', '', '2013-11-06 00:00:00', 'Adam', 'This is a news article', 'image1', 'This is more of the article', 'image2', 'This is an offer', 0),
(2, 'Latest News Story', '', '2013-11-06 00:00:00', 'Adam', 'asdkjhgsklajhgsgr', 'image2g', 'aseilrutwa;oetyhlkjwaehrtlkawjyeht', 'img hidden4', 'fsdkjhfskjhfe', 1),
(3, 'Latest News Feature', '', '2013-11-06 00:00:00', 'Adam', '<p><strong>This is some great news!</strong></p>\r\n\r\n<p>Here is the next para</p>\r\n\r\n<p>and one more...</p>\r\n', 'Heres an image', '<p>This content is contained below</p>\r\n\r\n<p>And another paragrapgh</p>\r\n', 'This is the other image', 'Here is a special offer!!!', 1);

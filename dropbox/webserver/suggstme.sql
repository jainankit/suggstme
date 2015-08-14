-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2012 at 12:49 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suggstme`
--

-- --------------------------------------------------------

--
-- Table structure for table `sm_cuisine_type`
--

CREATE TABLE IF NOT EXISTS `sm_cuisine_type` (
  `cuisineId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`cuisineId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sm_cuisine_type`
--

INSERT INTO `sm_cuisine_type` (`cuisineId`, `name`) VALUES
(1, 'French'),
(2, 'Mediterranean'),
(3, 'Italian'),
(4, 'Sea Food'),
(5, 'Spanish'),
(6, 'Chinese'),
(7, 'North Indian'),
(8, 'Japanese'),
(9, 'Thai');

-- --------------------------------------------------------

--
-- Table structure for table `sm_restaurant_info`
--

CREATE TABLE IF NOT EXISTS `sm_restaurant_info` (
  `resId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  `votes` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `strict_veg` tinyint(1) NOT NULL,
  `alcohol` tinyint(1) NOT NULL,
  PRIMARY KEY (`resId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sm_restaurant_info`
--

INSERT INTO `sm_restaurant_info` (`resId`, `name`, `rating`, `votes`, `address`, `cost`, `strict_veg`, `alcohol`) VALUES
(1, 'Amour - The Patio Restaurant, Cafe & Bar', 4.30, 0, '30, Hauz Khas Village, New Delhi', 1500, 0, 0),
(2, 'Boheme', 3.50, 0, '22,  Top Floor, Hauz Khas Village, New Delhi', 1200, 1, 0),
(3, 'Ginza', 3.50, 0, 'K10/11, Hotel York, Connaught Place, New Delhi', 600, 0, 0),
(4, 'Baluchi - The Lalit', 4.20, 0, 'The Lalit, Barakhamba Avenue, Connaught Place, New Delhi', 2500, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sm_res_cuisine`
--

CREATE TABLE IF NOT EXISTS `sm_res_cuisine` (
  `resId` int(11) NOT NULL,
  `cuisineId` int(11) NOT NULL,
  PRIMARY KEY (`resId`,`cuisineId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_res_cuisine`
--

INSERT INTO `sm_res_cuisine` (`resId`, `cuisineId`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 3),
(2, 5),
(3, 6),
(3, 8),
(4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sm_user_auth`
--

CREATE TABLE IF NOT EXISTS `sm_user_auth` (
  `fbid` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lastlogin` bigint(20) NOT NULL,
  PRIMARY KEY (`fbid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_user_auth`
--

INSERT INTO `sm_user_auth` (`fbid`, `name`, `email`, `lastlogin`) VALUES
(100001027293132, 'Ankit Jain', 'ankit.cisco@gmail.com', 1332074895);

-- --------------------------------------------------------

--
-- Table structure for table `sm_user_filters`
--

CREATE TABLE IF NOT EXISTS `sm_user_filters` (
  `fbid` bigint(20) NOT NULL,
  `strict_veg` tinyint(1) NOT NULL DEFAULT '0',
  `distance` int(11) NOT NULL DEFAULT '20',
  `alcohol` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`fbid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_user_filters`
--

INSERT INTO `sm_user_filters` (`fbid`, `strict_veg`, `distance`, `alcohol`) VALUES
(100001027293132, 0, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sm_user_history`
--

CREATE TABLE IF NOT EXISTS `sm_user_history` (
  `fbid` bigint(20) NOT NULL,
  `resId` int(11) NOT NULL,
  `last_shown` bigint(20) NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`fbid`,`resId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_user_history`
--


-- --------------------------------------------------------

--
-- Table structure for table `sm_user_rating`
--

CREATE TABLE IF NOT EXISTS `sm_user_rating` (
  `fbid` bigint(20) NOT NULL,
  `resId` int(11) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  `rated_on` bigint(20) NOT NULL,
  PRIMARY KEY (`fbid`,`resId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_user_rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `sm_user_reco_large`
--

CREATE TABLE IF NOT EXISTS `sm_user_reco_large` (
  `fbid` int(11) NOT NULL,
  `resId` int(11) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  PRIMARY KEY (`fbid`,`resId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_user_reco_large`
--


-- --------------------------------------------------------

--
-- Table structure for table `sm_user_reco_small`
--

CREATE TABLE IF NOT EXISTS `sm_user_reco_small` (
  `fbid` bigint(20) NOT NULL,
  `resId` int(11) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  PRIMARY KEY (`fbid`,`resId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_user_reco_small`
--

INSERT INTO `sm_user_reco_small` (`fbid`, `resId`, `rating`) VALUES
(100001027293132, 2, 3.50),
(100001027293132, 4, 4.20);

-- --------------------------------------------------------

--
-- Table structure for table `sm_user_visited`
--

CREATE TABLE IF NOT EXISTS `sm_user_visited` (
  `fbid` bigint(20) NOT NULL,
  `resId` int(11) NOT NULL,
  `visited_on` bigint(20) NOT NULL,
  PRIMARY KEY (`fbid`,`resId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_user_visited`
--


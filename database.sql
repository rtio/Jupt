-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2011 at 09:19 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `short`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `linkID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `destination` varchar(255) NOT NULL,
  `string` varchar(6) NOT NULL,
  `added` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  PRIMARY KEY (`linkID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`linkID`, `destination`, `string`, `added`, `ip`) VALUES
(3, 'google.com', '3', 1315495438, 0),
(2, 'crivion.com', '2', 1315495413, 0),
(4, 'localhost', '4', 1315512736, 0),
(5, 'scriptoggle.com', '5', 1315516395, 0);

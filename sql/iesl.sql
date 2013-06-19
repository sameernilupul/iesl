-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2013 at 04:59 PM
-- Server version: 5.00.15
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iesl`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_reg`
--

CREATE TABLE IF NOT EXISTS `std_reg` (
  `id` int(11) NOT NULL auto_increment,
  `robot` varchar(100) NOT NULL,
  `school` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `principal` varchar(100) default NULL,
  `teacher` varchar(100) default NULL,
  `teacherno` varchar(20) default NULL,
  `mem1name` varchar(100) default NULL,
  `mem1grade` varchar(20) default NULL,
  `mem1email` varchar(100) default NULL,
  `mem1no` varchar(20) default NULL,
  `mem2name` varchar(100) default NULL,
  `mem2grade` varchar(20) default NULL,
  `mem2email` varchar(100) default NULL,
  `mem2no` varchar(20) default NULL,
  `mem3name` varchar(100) default NULL,
  `mem3grade` varchar(20) default NULL,
  `mem3email` varchar(100) default NULL,
  `mem3no` varchar(20) default NULL,
  `mem4name` varchar(100) default NULL,
  `mem4grade` varchar(20) default NULL,
  `mem4email` varchar(100) default NULL,
  `mem4no` varchar(20) default NULL,
  `mem5name` varchar(100) default NULL,
  `mem5grade` varchar(20) default NULL,
  `mem5email` varchar(100) default NULL,
  `mem5no` varchar(20) default NULL,
  `applied_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

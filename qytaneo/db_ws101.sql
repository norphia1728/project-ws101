-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 08:22 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ws101`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_commentbox`
--

CREATE TABLE IF NOT EXISTS `tbl_commentbox` (
  `cb_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_commentbox`
--

INSERT INTO `tbl_commentbox` (`cb_id`, `name`, `comments`, `date_publish`) VALUES
(1, 'ysah', 'looool.. pg sure!', '2019-10-11 21:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `profID` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(100) NOT NULL,
  `ctznshp` varchar(100) NOT NULL,
  `cvl_status` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `f_occupation` varchar(50) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `m_occupation` varchar(50) NOT NULL,
  `HobandInts` varchar(200) NOT NULL,
  PRIMARY KEY (`profID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`profID`, `img`, `name`, `address`, `contact`, `email`, `sex`, `age`, `dob`, `pob`, `ctznshp`, `cvl_status`, `religion`, `language`, `father_name`, `f_occupation`, `mother_name`, `m_occupation`, `HobandInts`) VALUES
(1, 'assets\\img\\me.jpg', 'Quejac Yasel P. Taneo', 'Brgy. 14, Gingoog City, Mis. Or. 9014', '09754942944', 'yashtaneo2292@gmail.com', 'Female', 27, '1992-02-02', 'Gingoog City', 'Filipino', 'Single', 'Roman Catholic', 'Cebuano, English, Tagalog', 'Elias D. Taneo', 'Fireman', 'Jacqueline Babano-Prin Taneo', 'Pharmacist', 'Baking, Movies, Nature, News, Culture');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE IF NOT EXISTS `tbl_shop` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_code` varchar(50) DEFAULT NULL,
  `img_url` text,
  `price` float(11,2) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`prod_id`, `prod_code`, `img_url`, `price`) VALUES
(1, 'LBS-001', 'assets\\img\\shop1.jpg', 50.00),
(2, 'LBS-002', 'assets\\img\\shop2.jpg', 100.00),
(3, 'LBS-003', 'assets\\img\\shop3.jpg', 80.00),
(4, 'LBS-004', 'assets\\img\\shop4.jpg', 120.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `passwd`) VALUES
(1, 'yash', 'taneo123'),
(9, 'yumi', 'kulot'),
(10, 'yumi', 'kulot'),
(12, 'ysah', 'duha');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

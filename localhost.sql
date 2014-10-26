-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2014 at 06:46 AM
-- Server version: 5.5.40-MariaDB
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `securepa_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tk_industry`
--

CREATE TABLE IF NOT EXISTS `tk_industry` (
  `inid` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(100) DEFAULT '',
  `contactfn` varchar(100) DEFAULT '',
  `address` varchar(100) DEFAULT '',
  `city` varchar(100) DEFAULT '',
  `state` varchar(100) DEFAULT '',
  `email` varchar(100) DEFAULT '',
  `phonenum` varchar(100) DEFAULT '',
  `pwd` varchar(100) DEFAULT '',
  PRIMARY KEY (`inid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tk_industry`
--

INSERT INTO `tk_industry` (`inid`, `companyname`, `contactfn`, `address`, `city`, `state`, `email`, `phonenum`, `pwd`) VALUES
(1, 'sdv', 'fr', 'tfyuhj', 'dtyu', 'Ekiti', 'hwhw@mg.com', 'ertyui', '12'),
(2, 'Chevron Limited', 'Abayomi Bello', '5, Lekki Road Ajacent Brick House', 'Lagos Island', 'Lagos', 'chevron@chevlimited.com', '08053483434', 'chevron'),
(3, 'AlAKIS Limited', 'Litha Atanbaye', '8, Anikulapo Str Off Shade', 'Ikeja', 'Lagos', 'prista@gmail.com', '09095483482', 'alakis'),
(4, 'Labranth Limited', 'Shitta Oleh', '34, ristum road opp. Ajah Shoprite', 'Ajah', 'Lagos', 'labra@gmail.com', '08035221675', 'labranth'),
(5, 'sdv', 'fr', 'fdghj', 'Igando', 'Cross River', 'ayeniolusegunsamson@yahoo.com', 'dfgn', '072063800f6d1d33f8f60a7fc3a682f288330d2e');

-- --------------------------------------------------------

--
-- Table structure for table `tk_pickdetails`
--

CREATE TABLE IF NOT EXISTS `tk_pickdetails` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `serviceAddress` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `pickup_qty` varchar(200) NOT NULL,
  `pickup_type` varchar(200) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  `cat_type` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tk_pickdetails`
--

INSERT INTO `tk_pickdetails` (`uid`, `serviceAddress`, `city`, `state`, `pickup_qty`, `pickup_type`, `request_date`, `comment`, `cat_type`) VALUES
(5, 'ewreterw', 'wretgew', 'ree', 'ertr', 'wefd', '2014-10-26 10:38:53', '', 'inorganic');

-- --------------------------------------------------------

--
-- Table structure for table `tk_user`
--

CREATE TABLE IF NOT EXISTS `tk_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT '',
  `lname` varchar(100) DEFAULT '',
  `phonenum` varchar(20) DEFAULT '',
  `email` varchar(100) DEFAULT '',
  `pwd` varchar(1000) DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tk_user`
--

INSERT INTO `tk_user` (`uid`, `fname`, `lname`, `phonenum`, `email`, `pwd`) VALUES
(9, 'peter', 'OTEMUYIWA', '2347089740924', '', '694c5fa22bfa68f983e6454613122168460d2925'),
(21, 'Ayeni', 'Olusegun', '234808320362', '', 'adfa638431f4bad44cc39a17db01832fd8783c6e'),
(22, 'Ayeni', 'Olusegun', '2348080320362', '', '15298ed8e86ca4b9d32c80d62cfd5576a372d723'),
(23, 'Chilezie', 'Unachukwu', '2348182628202', '', '8fad0762cb4baf067e8a3303c056aae3c63ff67b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

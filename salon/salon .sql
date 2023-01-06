-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2022 at 09:14 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('tnekshiinwei@yahoo.com', '$2y$10$itTVJu3iq/vbrNg95YovteWmcdbQE7729ZSDoLSJNm6L8Sc7BR4RW'),
('tnekshiinwei@gmail.com', '$2y$10$9k2sKx.TNoAFM8BuZSDDm.NZcRZKtLrq5JiMjqXhl5rDcZWU8z1k2'),
('shiinwei@gmail.com', '$2y$10$ia8XSryc7jG.MA1Pt9B0we7j48DJPL3l2DlZEkPiXBy/hew8jRKPq');

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

DROP TABLE IF EXISTS `adminaccount`;
CREATE TABLE IF NOT EXISTS `adminaccount` (
  `adminuser` varchar(200) NOT NULL,
  `adminpass` varchar(200) NOT NULL,
  PRIMARY KEY (`adminuser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`adminuser`, `adminpass`) VALUES
('admin', '$2y$10$3ptEEw.IC4GP34sL3fcf9eQXc2L7XShoJ/v90Z3RukX7txA0mRExy');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `stylist` varchar(10) NOT NULL,
  `booktime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `email` varchar(200) NOT NULL,
  `hp` int(20) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `opinion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `opinion`) VALUES
('Shiin Wei', 'tnekshiinwei@yahoo.com', 'Hello World');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

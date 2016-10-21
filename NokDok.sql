-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2016 at 09:19 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `NokDok`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`) VALUES
(1, 'Suresh Lokhandwala'),
(2, 'Raj Kumar'),
(3, 'ramesh'),
(4, 'arvind'),
(5, 'raj');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`) VALUES
(1, 'Birthplace Hospitals'),
(2, 'Manidhari Hospitals'),
(3, 'KR Hospital'),
(4, 'C V Hospital'),
(5, 'P G Hospital'),
(6, 'ALM Hospital'),
(7, 'BGS Hospital'),
(8, 'KIMS Hospital'),
(9, 'Sai Hospital'),
(10, 'ADG Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `practices`
--

CREATE TABLE IF NOT EXISTS `practices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `practices`
--

INSERT INTO `practices` (`id`, `hospital_id`, `doctor_id`, `start_time`, `end_time`) VALUES
(1, 1, 1, '10:00:00', '12:00:00'),
(2, 1, 2, '16:00:00', '17:00:00'),
(3, 2, 2, '16:00:00', '18:00:00'),
(4, 2, 2, '18:00:00', '20:00:00'),
(5, 1, 2, '12:00:00', '14:00:00'),
(6, 3, 3, '10:00:00', '12:00:00'),
(7, 4, 3, '13:00:00', '15:00:00'),
(8, 5, 3, '18:00:00', '21:00:00'),
(9, 6, 4, '10:00:00', '12:00:00'),
(10, 7, 4, '13:00:00', '15:00:00'),
(11, 8, 4, '18:00:00', '21:00:00'),
(12, 9, 4, '22:00:00', '24:00:00'),
(13, 10, 5, '10:00:00', '12:00:00'),
(14, 3, 5, '12:00:00', '14:00:00'),
(15, 10, 5, '16:00:00', '18:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

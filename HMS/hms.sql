-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2017 at 04:57 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `allot_room`
--

CREATE TABLE IF NOT EXISTS `allot_room` (
  `allot_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(100) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`allot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `allot_room`
--

INSERT INTO `allot_room` (`allot_id`, `email_id`, `room_id`) VALUES
(1, 'halak@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `block_master`
--

CREATE TABLE IF NOT EXISTS `block_master` (
  `block_no` int(11) NOT NULL AUTO_INCREMENT,
  `block_name` varchar(10) NOT NULL,
  PRIMARY KEY (`block_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `block_master`
--

INSERT INTO `block_master` (`block_no`, `block_name`) VALUES
(2, 'B'),
(3, 'C'),
(4, 'd'),
(5, 'e'),
(6, 'f'),
(7, 'g'),
(8, 'h');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `email_id` varchar(30) NOT NULL,
  `fees_type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `total_fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`email_id`, `fees_type`, `date`, `total_fees`) VALUES
('halak14cp@gmail.com', 'onlyhostel', '2017-03-01', 5000),
('hgj@hghj.com', 'onlyhostel', '2017-03-02', 6000),
('halak@gmail.com', 'hostelwithmess', '2017-03-03', 10000),
('ni@gmail.com', 'hostelwithmess', '2017-03-02', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email_id`, `password`, `type`) VALUES
(1, 'admin@admin.com', 'admin1', 1),
(4, 'halak14cp@gmail.com', '11186', 2),
(5, 'hgj@hghj.com', '18726', 2),
(6, 'halak@gmail.com', '26983', 2),
(7, 'ni@gmail.com', '22459', 2);

-- --------------------------------------------------------

--
-- Table structure for table `regestration_form`
--

CREATE TABLE IF NOT EXISTS `regestration_form` (
  `name` varchar(25) NOT NULL,
  `gender` int(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact_no` int(10) NOT NULL,
  `parent_no` int(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `merit_no` int(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `upload_photo` varchar(80) NOT NULL,
  `upload_receipt` varchar(80) NOT NULL,
  `status` int(1) NOT NULL,
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regestration_form`
--

INSERT INTO `regestration_form` (`name`, `gender`, `date_of_birth`, `contact_no`, `parent_no`, `email_id`, `department`, `shift`, `merit_no`, `address`, `upload_photo`, `upload_receipt`, `status`) VALUES
('halak', 1, '1994-06-14', 2147483647, 1234567890, 'halak14cp@gmail.com', 'it', 'morning', 1, ' helllllllllllllloooooooooo', '', '', 2),
('tirth', 1, '2017-02-01', 786876878, 758375897, 'halak@gmail.com', 'civil', 'evening', 424, ' hjhkj', '', '', 2),
('heli', 1, '2017-06-01', 556565778, 656676767, 'hgj@hghj.com', 'civil', 'morning', 1, 'lklkl ', '', '', 2),
('fgdgg', 1, '2017-02-09', 2147483647, 1234567890, 'ni@gmail.com', 'civil', 'morning', 199, ' nhgjhjgj', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room_master`
--

CREATE TABLE IF NOT EXISTS `room_master` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `block_no` int(2) NOT NULL,
  `room_no` int(2) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `room_master`
--

INSERT INTO `room_master` (`room_id`, `block_no`, `room_no`) VALUES
(1, 2, 6),
(2, 3, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

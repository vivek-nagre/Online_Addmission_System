-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 06:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `o_a_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `ID` int(11) NOT NULL,
  `ADHAR` int(12) NOT NULL,
  `MOB` int(10) NOT NULL,
  `UID` int(6) NOT NULL,
  `SFN` varchar(40) NOT NULL,
  `SMN` varchar(40) NOT NULL,
  `SLN` varchar(40) NOT NULL,
  `FFN` varchar(20) NOT NULL,
  `FMN` varchar(20) NOT NULL,
  `FLN` varchar(20) NOT NULL,
  `MFN` varchar(20) NOT NULL,
  `MMN` varchar(40) NOT NULL,
  `MLN` varchar(40) NOT NULL,
  `MR` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `CHM` varchar(8) NOT NULL,
  `BPLCE` varchar(20) NOT NULL,
  `BGROUP` varchar(4) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `DIST` varchar(20) NOT NULL,
  `TQ` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
    STATE1` varchar(20) NOT NULL,
  `DIST1` varchar(20) NOT NULL,
  `TQ1` varchar(20) NOT NULL,
  `CITY1` varchar(20) NOT NULL,
  `ADDRESS1` varchar(200) NOT NULL,
  `CATAG` varchar(40) NOT NULL,
  `CASTE` varchar(20) NOT NULL,
  `SBCAST` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`,`UID`,`ADHAR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `ADHAR`, `MOB`, `SFN`, `SMN`, `SLN`, `FFN`, `FMN`, `FLN`, `MFN`, `MMN`, `MLN`, `CFN`, `CMN`, `CLN`, `MR`, `DOB`, `CHM`, `BPLCE`, `BGROUP`, `STATE`, `DIST`, `TQ`, `CITY`, `ADDRESS`, `CATAG`, `CASTE`, `SBCAST`) VALUES
(1, 99228855, 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 99228855, 2147483647, 'Gokul Mimrot', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', 'Gokul', 'rk', 'Mimrot', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', 'Gokul', 'rk', 'Mimrot', '', '2019-02-12', '', '', '', '', '', '', '', '', '', '', ''),
(8, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', 'Gokul', 'rk', 'Mimrot', 'Married', '2019-02-12', '', '', '', '', '', '', '', '', '', '', ''),
(9, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', 'Gokul', 'rk', 'Mimrot', 'Married', '2019-02-12', 'Male', '', '', '', '', '', '', '', '', '', ''),
(10, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', 'Gokul', 'rk', 'Mimrot', 'Married', '2019-02-12', 'Male', 'Buldhana', 'B+', 'mahashtra', '', '', '', '', '', '', ''),
(11, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', 'Gokul', 'rk', 'Mimrot', 'Married', '2019-02-12', 'Female', 'Buldhana', 'B+', 'mahashtra', '', '', '', '', '', '', ''),
(12, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Sangita', 'Namdev', 'Gokul', 'rk', 'Mimrot', 'Married', '2019-02-12', 'Female', 'Buldhana', 'B+', 'mahashtra', 'bhokardan', 'Bhokardan', 'bhokardan', 'at kedarkheda', 'SC', 'chambhar', 'chambhar'),
(17, 99228855, 2147483647, 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul Mimrot', 'Gokul', 'Rajendra', 'Shamrao', 'Pawar', 'Mimrot', 'Namdev', 'Gokul', 'rk', 'Mimrot', 'Unmarried', '2019-02-14', 'Male', 'ff', 'B+', 'mahashtra', 'Jalna', 'Bhokardan', 'bhokardan', 'at kedarkheda', 'OBC', 'chambhar', 'chambhar');

-- --------------------------------------------------------

--
-- Table structure for table `supdata`
--

CREATE TABLE IF NOT EXISTS `supdata` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `EMAIL` varchar(90) NOT NULL,
  `PASS1` varchar(40) NOT NULL,
  `PASS2` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `supdata`
--

INSERT INTO `supdata` (`ID`, `FNAME`, `LNAME`, `EMAIL`, `PASS1`, `PASS2`) VALUES
(1, 'gokul', 'mimrot', 'mimrot47@gmil.com', 'vishanu', 'dfsfsfs'),
(2, 'Gokul', 'Mimrot', 'mimrot47@gmail.com', 'Ajay@Ashwini', 'EMAIL'),
(3, 'rk', 'rk', 'rk@gmail.com', 'rk', 'rk'),
(4, 'Komal', 'Hande', 'rk@gmail.com', 'rk555', '<div class="slideshow">     <img  class='),
(5, 'Gokul', 'Mimrot', 'mimrot47@gmai.com', '123', '123'),
(6, 'santosh', 'Mimrot', 'rk@gmail.com', 'Vishanu', 'Vishanu'),
(7, 'gokul', 'mimrot', 'mimrot47@gmail.com', 'Vishanu', 'Vishanu'),
(8, 'Mahesh', 'solanke', 'msolanke2453@gmail.com', '9145030312', '9145030312');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 12:16 PM
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
-- Table structure for table `addata`
--

CREATE TABLE IF NOT EXISTS `addata` (
  `ADHAR` varchar(40) NOT NULL,
  `MOB` varchar(40) NOT NULL,
  `COURCE` varchar(20) NOT NULL,
  `SUB1` varchar(20) NOT NULL,
  `SUB3` varchar(20) NOT NULL,
  `SUB5` varchar(20) NOT NULL,
  `SUB7` varchar(20) NOT NULL,
  `SUB2` varchar(20) NOT NULL,
  `SUB4` varchar(20) NOT NULL,
  `SUB6` varchar(20) NOT NULL,
  `SUB8` varchar(20) NOT NULL,
  `PHOTO` text NOT NULL,
  `SIG` text NOT NULL,
  `STD10` text NOT NULL,
  `STD12` text NOT NULL,
  `TC` text NOT NULL,
  `CAST` text NOT NULL,
  `NC` text NOT NULL,
  `MC` text NOT NULL,
  `DC` text NOT NULL,
  `FC` text NOT NULL,
  `ADHARI` text NOT NULL,
  PRIMARY KEY (`ADHAR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addata`
--

INSERT INTO `addata` (`ADHAR`, `MOB`, `COURCE`, `SUB1`, `SUB3`, `SUB5`, `SUB7`, `SUB2`, `SUB4`, `SUB6`, `SUB8`, `PHOTO`, `SIG`, `STD10`, `STD12`, `TC`, `CAST`, `NC`, `MC`, `DC`, `FC`, `ADHARI`) VALUES
('31215111', '9922885972', '', 'dd', 'ff', 'dd', 'C', 'bb', 'rk digital', 'eett', 'ttt', '16174398_645575828978220_3224567734570627754_n.jpg', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ADHAR` int(12) NOT NULL,
  `MOB` int(10) NOT NULL,
  `SFN` varchar(40) NOT NULL,
  `SMN` varchar(40) NOT NULL,
  `SLN` varchar(40) NOT NULL,
  `FFN` varchar(20) NOT NULL,
  `FMN` varchar(20) NOT NULL,
  `FLN` varchar(20) NOT NULL,
  `MFN` varchar(20) NOT NULL,
  `MMN` varchar(40) NOT NULL,
  `MLN` varchar(40) NOT NULL,
  `CFN` varchar(40) NOT NULL,
  `CMN` varchar(40) NOT NULL,
  `CLN` varchar(40) NOT NULL,
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
  `CATAG` varchar(40) NOT NULL,
  `CASTE` varchar(20) NOT NULL,
  `SBCAST` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `ADHAR`, `MOB`, `SFN`, `SMN`, `SLN`, `FFN`, `FMN`, `FLN`, `MFN`, `MMN`, `MLN`, `CFN`, `CMN`, `CLN`, `MR`, `DOB`, `CHM`, `BPLCE`, `BGROUP`, `STATE`, `DIST`, `TQ`, `CITY`, `ADDRESS`, `CATAG`, `CASTE`, `SBCAST`) VALUES
(34, 31215111, 2147483647, 'GOKUL', 'FULCHAND ', 'MIMROT', 'FULCHAND ', 'DEVCHAND ', 'MIMROT', 'SUNITA', 'DEVSINGH', 'BARANDWAL', '', '', 'Mimrot', 'Married', '1997-06-25', 'Male', 'kedarkheda', 'B+', 'mahashtra', 'bhokardan', 'Bhokardan', 'bhokardan', 'at kedarkheda', 'DT(A)', 'chambhar', 'chambhar');

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

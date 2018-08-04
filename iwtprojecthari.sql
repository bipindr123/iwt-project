-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 07:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentresume`
--

CREATE TABLE `studentresume` (
  `Name` varchar(50) DEFAULT NULL,
  `USN` varchar(20) DEFAULT NULL,
  `PhoneNo` int(20) DEFAULT NULL,
  `Address` longtext,
  `Email` varchar(20) DEFAULT NULL,
  `10thMarks` float DEFAULT NULL,
  `12thMarks` float DEFAULT NULL,
  `EnggMarks` float DEFAULT NULL,
  `Skills` longtext,
  `CertCourses` longtext,
  `Achievements` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentresume`
--

INSERT INTO `studentresume` (`Name`, `USN`, `PhoneNo`, `Address`, `Email`, `10thMarks`, `12thMarks`, `EnggMarks`, `Skills`, `CertCourses`, `Achievements`) VALUES
('qwe', '', 0, '', '', 0, 0, 0, '', '', ''),
('admin', '1ds15cs029', 2147483647, 'jp nagar', 'bipindr123@gmail.com', 9, 9, 99, 'c++', 'java', 'none');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 07:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtrip`
--

CREATE TABLE IF NOT EXISTS `addtrip` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `from_` varchar(50) NOT NULL,
  `to_` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `tripdate` date NOT NULL,
  `currdate` date NOT NULL,
  `cost` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtrip`
--

INSERT INTO `addtrip` (`id`, `name`, `vehicle`, `from_`, `to_`, `distance`, `time`, `tripdate`, `currdate`, `cost`) VALUES
(10, 'hrkesh', 'taxi', 'SURAT', 'GATEWAY OF INDIA', '249.85', '8 hrs20 min', '2018-11-15', '2018-11-16', '500'),
(11, 'hrkesh', 'plane', 'SURAT', 'GATEWAY OF INDIA', '249.85', '43 min', '2018-11-16', '2018-11-17', '1249');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtrip`
--
ALTER TABLE `addtrip`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtrip`
--
ALTER TABLE `addtrip`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

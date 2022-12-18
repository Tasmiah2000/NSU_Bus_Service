-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 10:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsu_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `sed_jurny`
--

CREATE TABLE `sed_jurny` (
  `BUS_id` int(100) DEFAULT NULL,
  `route_id` int(100) DEFAULT NULL,
  `avlSEAT` varchar(100) DEFAULT NULL,
  `totalSeat` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `ended` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sed_jurny`
--
ALTER TABLE `sed_jurny`
  ADD KEY `route_id` (`route_id`),
  ADD KEY `time` (`time`),
  ADD KEY `avlSEAT` (`avlSEAT`),
  ADD KEY `BUS_id` (`BUS_id`),
  ADD KEY `totalSeat` (`totalSeat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sed_jurny`
--
ALTER TABLE `sed_jurny`
  ADD CONSTRAINT `sed_jurny_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `route` (`route_id`),
  ADD CONSTRAINT `sed_jurny_ibfk_2` FOREIGN KEY (`time`) REFERENCES `bus` (`time`),
  ADD CONSTRAINT `sed_jurny_ibfk_3` FOREIGN KEY (`avlSEAT`) REFERENCES `bus` (`avlSEAT`),
  ADD CONSTRAINT `sed_jurny_ibfk_4` FOREIGN KEY (`BUS_id`) REFERENCES `bus` (`BUS_id`),
  ADD CONSTRAINT `sed_jurny_ibfk_5` FOREIGN KEY (`totalSeat`) REFERENCES `bus` (`totalSeat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

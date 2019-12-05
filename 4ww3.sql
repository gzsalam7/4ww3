-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4ww3`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`firstName`, `lastName`, `username`, `email`, `password`) VALUES
('Ghazi', 'Salam', 'gz', 'gzsalam7@gmail.com', 'fuck');

-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE `park` (
  `parkID` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `parkType` varchar(30) NOT NULL,
  `activities` varchar(60) NOT NULL,
  `facilities` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `park`
--

INSERT INTO `park` (`parkID`, `name`, `latitude`, `longitude`, `parkType`, `activities`, `facilities`) VALUES
(1, 'Green Hills Park', 43.2498, -79.9143, 'Trail', 'Trails, Cycling, Public Classes', 'Washrooms, Bike Rental'),
(2, 'El Dorado Park', 43.24, -79.99, 'Trail', 'Treasure Hunting', 'Temples'),
(3, 'Doggie Heaven Hills Park', 43.28, -79.91, 'Dog', 'Dog park', 'Dog Daycare'),
(4, 'Public Landfill Sandlot Park', 43.21, -79.81, 'Children\'s', 'Playground', 'Garbage bins');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `name` varchar(60) NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `parkType` varchar(15) NOT NULL,
  `activities` varchar(150) NOT NULL,
  `facilities` varchar(150) NOT NULL,
  `review` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL,
  `file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`name`, `latitude`, `longitude`, `parkType`, `activities`, `facilities`, `review`, `rating`, `file`) VALUES
('a', '1', '1', 'exercise', 'b', 'c', 'f', 2, 0),
('DELETE', '4', '3', 'trails', 'v', 'v', 'v', 4, 0),
('q', '1', '3', 'national', 'b', 'c', 'f', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `park`
--
ALTER TABLE `park`
  ADD PRIMARY KEY (`parkID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `park`
--
ALTER TABLE `park`
  MODIFY `parkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

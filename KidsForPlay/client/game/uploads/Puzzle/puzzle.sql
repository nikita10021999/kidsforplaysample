-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 06:07 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidsforplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `puzzle`
--

CREATE TABLE `puzzle` (
  `id` int(11) NOT NULL,
  `images` varchar(50) NOT NULL,
  `display_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle`
--

INSERT INTO `puzzle` (`id`, `images`, `display_id`) VALUES
(1, './image/Vehicals/Ambulance.jpg', 0),
(2, './image/Vehicals/airplan.jpg', 0),
(3, './image/Vehicals/Auto Rickshaw.jpg', 0),
(4, './image/Vehicals/bicycle.jpg', 0),
(5, './image/Vehicals/boat.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `puzzle`
--
ALTER TABLE `puzzle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `puzzle`
--
ALTER TABLE `puzzle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

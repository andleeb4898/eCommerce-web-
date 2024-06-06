-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 06:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce db`
--

-- --------------------------------------------------------

--
-- Table structure for table `catogaries`
--

CREATE TABLE `catogaries` (
  `ID` int(11) NOT NULL,
  `code` int(250) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catogaries`
--

INSERT INTO `catogaries` (`ID`, `code`, `name`, `price`, `image`) VALUES
(3, 23456, 'Knit-Skirt', 3000.00, 'images/s1.png'),
(4, 23457, 'Embroidered-Kurta', 4500.00, 'images/e1.png'),
(5, 23458, 'Round-Neck-Shirt', 2500.00, 'images/w3.png'),
(6, 234569, 'Drop-Shoulder-Dress', 2999.00, 'images/w4.png'),
(7, 234560, 'Long-Cardign', 3500.00, 'images/w5.png'),
(8, 234, 'Knitted-Scarf', 2000.00, 'images/w6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogaries`
--
ALTER TABLE `catogaries`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catogaries`
--
ALTER TABLE `catogaries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 06:21 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `code`, `name`, `price`, `image`) VALUES
(3, '1234-A', 'khadar -2pc-suit', 5000.00, 'images/U3E-SG22V8-10_2.png'),
(4, '345-b', 'Kurta', 4500.00, 'images/e3.png'),
(5, '3456-AB', '3 Piece - Embroidered Jacquard Suit', 7500.00, 'images/0U3ESG22V819_4 (1).png'),
(6, '123-BA', '3 Piece - Embroidered Jacquard Suit', 3000.00, 'images/PEESG22V1210_1.png'),
(9, '345-AC', 'Printed-Shirt-Unstitched', 2800.00, 'images/w1.png'),
(10, '2345-D', '2-PC suit', 4000.00, 'images/w2.png'),
(11, '3445-CD', 'Shirt-Unstitched', 6500.00, 'images/e2.png'),
(12, '23411', 'Drop-Shoulder', 7000.00, 'images/drop.png'),
(13, '111199', 'Flared-Shirt', 5999.00, 'images/e5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'arham', '$2y$10$jePnlukrKJ5I65hLhHRK9.YNvWQ2DrtAVNxkikS.tDMiIQvaeCtOe', '2022-10-14 16:56:46'),
(2, 'fozia', '$2y$10$KXswBGwLoi230jpKDz32G.9PgrA/ND3lDKwuUJF/OtEji4mgmXj3i', '2022-10-14 17:08:28'),
(3, 'aqeela', '$2y$10$6KinNJWPi7yjTr/TGFvTD.JDaWJLWHkzBgDuq4MbOI3zSaog6mPCO', '2022-10-17 15:45:24'),
(4, 'painting_totorial', '$2y$10$TrM9RrRoa5Ku9pEghcCT3.qu0suhQYgDKuH49bVpTlGNqL5okADN2', '2022-10-20 20:13:09'),
(5, 'maha', '$2y$10$Cp6AYWSVZXN/YV7UEdwwnOB6cUQgIzLleqtTrftfE5oGSvJI6e1h.', '2022-10-20 23:55:44'),
(6, 'maham', '$2y$10$rKjiiOkkBIo7mpwF.GcDCuN.i7qZj8NOK7NLHvpaDvojMfFjtRNLG', '2022-10-21 21:17:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

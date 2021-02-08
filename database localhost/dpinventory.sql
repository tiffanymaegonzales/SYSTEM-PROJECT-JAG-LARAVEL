-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 07:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `additems`
--

CREATE TABLE `additems` (
  `prod_name` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `_date` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additems`
--

INSERT INTO `additems` (`prod_name`, `price`, `quantity`, `description`, `location`, `_date`, `id`) VALUES
('bottled water', 15, 10, 'Pick Up', 'Urdaneta City', '2021-02-03', 3),
('Gallon Container', 25, 5, 'Deliver', 'San Vicente', '2021-02-04', 7),
('bottled water', 15, 1, 'Pick Up', 'Urdaneta City', '2021-02-04', 14);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobile` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `mobile`, `email`, `password`) VALUES
('Juan', 'Juan', 'Dela Cruz', 998789, 'juandelacruz@gmail.com', 'pasado'),
('gwapo', 'Pedro', 'Padilla', 9876, 'pedro@gmail.com', 'hahaha'),
('paneng', 'Tiffany', 'Mae', 987, 'tiffanymaegonzales@yahoo.com', 'ganda'),
('pogi', 'Dionnel', 'Pogi', 9876, 'pogi@gmail.com', 'pass'),
('karla', 'Karla', 'Juliano', 12345, 'karlajuliano28@gmail.com', 'juliajo'),
('karla', 'Karla', 'Juliano', 12345, 'karlajuliano28@gmail.com', 'juliajo'),
('vivi', 'Vi', 'Agbulos', 23456, 'viannagbulos@gmail.com', 'viviys');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additems`
--
ALTER TABLE `additems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additems`
--
ALTER TABLE `additems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 09:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matin database`
--

-- --------------------------------------------------------

--
-- Table structure for table `sasa`
--

CREATE TABLE `sasa` (
  `id` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `passkod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sasa`
--

INSERT INTO `sasa` (`id`, `username`, `mobile`, `passkod`) VALUES
(1, 'aa', 'aa', 'aaaa'),
(2, 'aaa', 'aaaaa', 'aaaa'),
(3, 'asasaSA', 'asass', 'sadadsad'),
(4, 'sdsadasd', 'sdsfdsf', 'dfdsfsdf'),
(5, 'dfdsf', 'dfdsfds', 'fdsfdsf'),
(6, '', '', ''),
(7, 'dfdf', 'ddfffggc', 'cxcsds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `password`, `otp`) VALUES
(14, 'متین', 'milad39@gmail.com', '565656565', '121212', NULL),
(29, 'matin ahgha khan ', 'mat7iiop@gmail.com', '09934550987', '89988', NULL),
(31, 'ma', 'ormat@gmail.com', '09198402093', '212121212', NULL),
(33, 'ali', 'jiop@gmail.com', '09905933664', '219067', NULL),
(34, 'samira', 'luc90o@gmail.com', '09057752873', '21764521', NULL),
(37, 'ثلسیبلیسل', 'ggtg@gmail.com', '09367853329', '213123123', NULL),
(38, 'matini7iop', 'ali23@gmail.com', '09057752843', '213421346', NULL),
(39, 'yegane', 'yegane@gmail.com', '09127883327', '2312133', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sasa`
--
ALTER TABLE `sasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sasa`
--
ALTER TABLE `sasa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

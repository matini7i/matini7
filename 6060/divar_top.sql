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
-- Database: `divar top`
--

-- --------------------------------------------------------

--
-- Table structure for table `agahi`
--

CREATE TABLE `agahi` (
  `id` int(11) NOT NULL,
  `onvan` varchar(200) NOT NULL,
  `karkard` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `saat` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `work_experience` varchar(30) NOT NULL,
  `skills` varchar(40) NOT NULL,
  `reward` varchar(200) NOT NULL,
  `business_travel` varchar(200) NOT NULL,
  `company_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_persian_ci;

--
-- Dumping data for table `agahi`
--

INSERT INTO `agahi` (`id`, `onvan`, `karkard`, `price`, `saat`, `image`, `work_experience`, `skills`, `reward`, `business_travel`, `company_name`) VALUES
(59, '', '', '', 'دقایقی پیش در تهران', 'uploads/55942814.jpg', 'لیببیلبیل', 'یبلیبلیبل', 'بیلیبل', 'بلیبلیبل', 'بلقبیلیب'),
(60, '', '', '', 'دقایقی پیش در تهران', 'uploads/54120016.jpg', 'یبلیب', 'یبلیبل', 'لیبلیبل', 'یبلیبل', 'بیلبیل'),
(61, '', '', '', 'دقایقی پیش در تهران', 'uploads/54120016.jpg', 'یبلیب', 'یبلیبل', 'لیبلیبل', 'یبلیبل', 'بیلبیل'),
(62, '', '', '', 'دقایقی پیش در تهران', 'uploads/54120016.jpg', 'یبلیب', 'یبلیبل', 'لیبلیبل', 'یبلیبل', 'بیلبیل'),
(63, '', '', '', 'دقایقی پیش در تهران', 'uploads/54120016.jpg', 'یبلیب', 'یبلیبل', 'لیبلیبل', 'یبلیبل', 'بیلبیل'),
(64, '', '', '', 'دقایقی پیش در تهران', 'uploads/54120016.jpg', 'یبلیب', 'یبلیبل', 'لیبلیبل', 'یبلیبل', 'بیلبیل'),
(75, '', '', '', 'دقایقی پیش در تهران', 'uploads/39441997.jpg', 'xcvxcv', 'xcv', 'xcvxcv', 'xcvxcv', 'bvgxcv'),
(76, '', '', '', 'دقایقی پیش در تهران', 'uploads/12296444.jpg', 'dfsdf', 'fsdfg', 'sdfsdfsdf', 'sdfsdf', 'dfsgsdf');

-- --------------------------------------------------------

--
-- Table structure for table `agahi 2`
--

CREATE TABLE `agahi 2` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `work_experience` varchar(30) NOT NULL,
  `reward` varchar(50) NOT NULL,
  `business_travel` varchar(200) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `saat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agahi`
--
ALTER TABLE `agahi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agahi 2`
--
ALTER TABLE `agahi 2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_name` (`company_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agahi`
--
ALTER TABLE `agahi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `agahi 2`
--
ALTER TABLE `agahi 2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

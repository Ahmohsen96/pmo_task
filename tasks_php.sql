-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 01:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasks_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Established_since` varchar(255) NOT NULL,
  `company_capital` varchar(255) NOT NULL,
  `company_portofolio` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `company_website` varchar(255) NOT NULL,
  `number_of_employee` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `phone`, `Established_since`, `company_capital`, `company_portofolio`, `image`, `company_address`, `mobile_number`, `company_website`, `number_of_employee`) VALUES
(2, 'iti', '01000260660', 'rqwerqwerqwerqwer', 'iti', 'iti', 'portfolio-1.jpg', 'قليوب القليوبية شارع السطان حسين ', '01000260660', 'iti', 2354),
(3, 'iti', '01000260660', 'rqwerqwerqwerqwer', 'iti', 'iti', 'landing.jpg', 'قليوب القليوبية شارع السطان حسين', '01000260660', 'iti', 1233);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(6, 'Kareem', 'kareemdiap508@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2023-01-28 01:09:43'),
(7, 'Kareem Diap', 'kareemdiap508@gmail.com', '98dae0e08c01f9e64dc3f9650eb5a714', '2023-01-28 01:54:42'),
(8, 'Kareem Hassan', 'kareemdiap508@gmail.com', 'cc86a50fb8f3c4840cb346a0829f64a2', '2023-01-28 01:57:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

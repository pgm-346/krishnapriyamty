-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 09:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `transfer_id` varchar(200) DEFAULT NULL,
  `balance` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposite`
--

INSERT INTO `deposite` (`id`, `user_id`, `amount`, `type`, `details`, `transfer_id`, `balance`, `created_at`, `updated_at`) VALUES
(84, 1, 1000.00, 'credit', 'Deposite', NULL, 1000.00, '2023-02-09 03:12:32', '2023-02-09 03:12:32'),
(85, 1, 500.00, 'credit', 'Deposite', NULL, 1500.00, '2023-02-09 03:12:45', '2023-02-09 03:12:45'),
(86, 1, 200.00, 'debit', 'Withdarw', NULL, 1300.00, '2023-02-09 03:12:54', '2023-02-09 03:12:54'),
(87, 1, 200.00, 'credit', 'Transfer from xyz@gmail.com', NULL, 1500.00, '2023-02-09 03:13:08', '2023-02-09 03:13:08'),
(88, 1, 500.00, 'debit', 'Transfer to example@gmail.com', NULL, 1000.00, '2023-02-09 03:13:22', '2023-02-09 03:13:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposite`
--
ALTER TABLE `deposite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposite`
--
ALTER TABLE `deposite`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 03:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khatabook`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_transcation`
--

CREATE TABLE `customer_transcation` (
  `id` int(11) NOT NULL,
  `email_from` varchar(30) NOT NULL,
  `khatabook_user` varchar(5) NOT NULL,
  `transcation_type` varchar(10) NOT NULL,
  `user_payee_name` varchar(20) NOT NULL,
  `user_payee_email` varchar(30) NOT NULL,
  `transcation_date` date NOT NULL,
  `amount` bigint(10) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_transcation`
--

INSERT INTO `customer_transcation` (`id`, `email_from`, `khatabook_user`, `transcation_type`, `user_payee_name`, `user_payee_email`, `transcation_date`, `amount`, `remarks`) VALUES
(12, 'utsav@gmail.com', 'No', 'recieved', 'User1', 'user1@gmail.com', '2024-04-16', 200, 'Remarks for user1'),
(13, 'utsav@gmail.com', 'Yes', 'recieved', 'User2', 'user2@gmail.com', '2024-04-17', 300, 'Remarks for User2'),
(14, 'utsav@gmail.com', 'No', 'give', 'User3', 'user3@gmail.com', '2024-04-18', 600, 'Remarks for User3'),
(15, 'utsav@gmail.com', 'Yes', 'give', 'User4', 'user4@gmail.com', '2024-04-20', 800, 'Remarks for User4');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `mobile_no` bigint(14) NOT NULL,
  `country` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `customer_name`, `mobile_no`, `country`, `email`, `password`) VALUES
(4, 'Utsav Patel', 1999999999, 'India', 'utsav@gmail.com', 'utsav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_transcation`
--
ALTER TABLE `customer_transcation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_transcation`
--
ALTER TABLE `customer_transcation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

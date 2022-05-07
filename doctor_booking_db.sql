-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2021 at 02:44 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `p_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `p_pic` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `p_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `p_illness` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `p_treatment` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `d_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `d_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `n_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `h_w_number` int(11) NOT NULL,
  `h_r_number` int(11) NOT NULL,
  `currency_symbol` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `t_o_cost` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_comments` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `p_added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `p_id`, `p_pic`, `p_name`, `p_illness`, `p_treatment`, `d_name`, `d_email`, `n_name`, `h_w_number`, `h_r_number`, `currency_symbol`, `t_o_cost`, `d_comments`, `p_added_on`) VALUES
(1, '', '2698nhai-kmOB--621x414@LiveMint_1626696360893.webp', 'sgghdfg', 'sdfgdfg', 'sdfgdfg', 'dfgdfg', 'gs27349@gmail.com', 'sdfgdfg', 4545, 44, '', '4241214', 'sdfgdfgdfg', '2021-09-15 14:25:08'),
(3, '454141', '1989Pendant_0007_1.jpg', 'sdfgdfg', 'dfgadfg', 'dfadfg', 'dfdafg', 'abc@gmail.com', 'afgfaf', 10, 4, 'e', '412542', 'fdfgdfgsdf', '2021-09-16 03:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `u_username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `u_status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `u_addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_username`, `u_password`, `u_status`, `u_addedon`) VALUES
(1, 'Admin', 'admin', 'admin', 'active', '2021-09-15 11:24:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

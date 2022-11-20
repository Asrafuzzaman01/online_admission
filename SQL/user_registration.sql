-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 06:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siuadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `users_name` varchar(30) NOT NULL,
  `users_email` varchar(50) NOT NULL,
  `users_phone` int(15) NOT NULL,
  `users_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `users_name`, `users_email`, `users_phone`, `users_password`) VALUES
(2, 'kk', 'as@gmail.com', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'klgdfssf', 'as@gmail.com', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'kk', 'as@gmail.com', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'nn', 'mithu@gmail.com', 6398273, '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'hh', 'mithu@gmail.com', 1234456, 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'hh', 'mithu@gmail.com', 1234677, 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'hh', 'mithu@gmail.com', 5656765, 'a01610228fe998f515a72dd730294d87'),
(9, 'hh', 'mithu@gmail.com', 23432434, 'a01610228fe998f515a72dd730294d87');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

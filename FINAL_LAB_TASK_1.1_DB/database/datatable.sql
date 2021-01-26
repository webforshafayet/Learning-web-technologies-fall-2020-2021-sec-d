-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 03:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeName` varchar(50) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeName`, `contactNo`, `username`, `password`) VALUES
('s', 's', 's', 's'),
('a', 'a', 'a', 'a'),
('q', 'q', 'q', 'q'),
('w', 'w', 'w', 'w'),
('r', 'r', 'r', 'r'),
('r', 'r', 'r', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(0, 'a', 'aaaaaaaaaaa', 'aaaaaaaaaaaa', 'user'),
(3, 'shohan', 'shohan', 'shohan', 'user'),
(5, 'ssss', 'sssss', 'sssss', 'user'),
(7, 'ee', 'ee', 'ee', 'user'),
(8, 'www', 'wwww', 'www', 'admin'),
(45, 'qq', 'qq', 'qq', 'admin'),
(54, 'aa', 'aa', 'aa', 'user'),
(55, 'qwww', 'wee', 'eerrer', 'user'),
(60, 'qw', '6', '6', 'admin'),
(61, 'shohan', 'ssssssss', 'ssssssssss', 'admin'),
(62, 'asass', 'sasas', 'sasa', 'user'),
(64, 'xxxxx', 'xxxxxxx', 'xxxxxxx', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

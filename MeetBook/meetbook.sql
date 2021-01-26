-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 03:02 PM
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
-- Database: `meetbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 's', 's'),
(2, 'q', 'q'),
(3, 'shohan', 'shohan'),
(4, 'shafayet', 'shafayet');

-- --------------------------------------------------------

--
-- Table structure for table `adminpost`
--

CREATE TABLE `adminpost` (
  `id` int(50) NOT NULL,
  `post` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpost`
--

INSERT INTO `adminpost` (`id`, `post`) VALUES
(26, 'ASJGDASDJSADDGAJD'),
(28, 'hiuuu');

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE `adminprofile` (
  `id` int(50) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`id`, `post`) VALUES
(1, 'hellllo i am shafayetI am a web developer.khgjgh');

-- --------------------------------------------------------

--
-- Table structure for table `adminprofilepic`
--

CREATE TABLE `adminprofilepic` (
  `id` int(50) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminprofilepic`
--

INSERT INTO `adminprofilepic` (`id`, `path`, `created`) VALUES
(39, 'images/5fe47116db2ff2020-12-24-11-44-38img0_(2).jpg', '0000-00-00 00:00:00'),
(40, 'images/5fe4727accc1e2020-12-24-11-50-34img0_(2).jpg', '0000-00-00 00:00:00'),
(41, 'images/5fe4728ad743a2020-12-24-11-50-50Win7_14.jpg', '0000-00-00 00:00:00'),
(42, 'images/5fe47302c6a4a2020-12-24-11-52-50Win7_14.jpg', '0000-00-00 00:00:00'),
(43, 'images/5fe4730993d792020-12-24-11-52-57img0_(2).jpg', '0000-00-00 00:00:00'),
(44, 'images/5fe4731a2e4ca2020-12-24-11-53-14img0_(2).jpg', '0000-00-00 00:00:00'),
(45, 'images/5fe4743b4820c2020-12-24-11-58-03img0_(2).jpg', '0000-00-00 00:00:00'),
(46, 'images/5fe47477d014c2020-12-24-11-59-03img0_(2).jpg', '0000-00-00 00:00:00'),
(47, 'images/5fe47481571f42020-12-24-11-59-13img0_(2).jpg', '0000-00-00 00:00:00'),
(48, 'images/5fe4752ee804f2020-12-24-12-02-06img0.jpg', '0000-00-00 00:00:00'),
(49, 'images/5fe4754918bc72020-12-24-12-02-33img0.jpg', '0000-00-00 00:00:00'),
(50, 'images/5fe4755215f922020-12-24-12-02-42img0_(2).jpg', '0000-00-00 00:00:00'),
(51, 'images/5fe475efbea7c2020-12-24-12-05-19img0_(2).jpg', '0000-00-00 00:00:00'),
(52, 'images/5fe476f12a4b32020-12-24-12-09-37img0_(2).jpg', '0000-00-00 00:00:00'),
(53, 'images/5fe478e3269cd2020-12-24-12-17-55img0_(2).jpg', '0000-00-00 00:00:00'),
(54, 'images/5fe479081fb822020-12-24-12-18-32img0_(2).jpg', '0000-00-00 00:00:00'),
(55, 'images/5fe4793b131382020-12-24-12-19-23img0_(2).jpg', '0000-00-00 00:00:00'),
(56, 'images/5fe479408eb442020-12-24-12-19-28img0_(2).jpg', '0000-00-00 00:00:00'),
(57, 'images/5fe4799c927412020-12-24-12-21-00img0_(2).jpg', '0000-00-00 00:00:00'),
(58, 'images/5fe4799f54e092020-12-24-12-21-03img0_(2).jpg', '0000-00-00 00:00:00'),
(59, 'images/5fe47fa2e34e52020-12-24-12-46-42img0_(2).jpg', '0000-00-00 00:00:00'),
(60, 'images/5fe47fcb9a25f2020-12-24-12-47-23img0_(2).jpg', '0000-00-00 00:00:00'),
(61, 'images/5fe480381a48c2020-12-24-12-49-12img0_(2).jpg', '0000-00-00 00:00:00'),
(62, 'images/5fe4805f3923a2020-12-24-12-49-51img0_(2).jpg', '0000-00-00 00:00:00'),
(63, 'images/5fe48078078062020-12-24-12-50-16img0_(2).jpg', '0000-00-00 00:00:00'),
(64, 'images/5fe4ced7630eb2020-12-24-18-24-39Screenshot_(35).png', '0000-00-00 00:00:00'),
(65, 'images/5fe8e2003f22e2020-12-27-20-35-28Screenshot_(3).png', '0000-00-00 00:00:00'),
(66, 'images/5fe97d006362a2020-12-28-07-36-48Screenshot_(3).png', '0000-00-00 00:00:00'),
(67, 'images/5feb0c4a7aa862020-12-29-12-00-26Screenshot_(3).png', '0000-00-00 00:00:00'),
(68, 'images/5feb1cd7b11522020-12-29-13-11-03Screenshot_(3).png', '0000-00-00 00:00:00'),
(69, 'images/5ff011562a4782021-01-02-07-23-18Screenshot_2020-11-08_225733.png', '0000-00-00 00:00:00'),
(70, 'images/5ff0115ecb2f82021-01-02-07-23-26Screenshot_(3).png', '0000-00-00 00:00:00'),
(71, 'images/5ff0bfa53ac672021-01-02-19-47-01Screenshot_(3).png', '0000-00-00 00:00:00'),
(72, 'images/5ff0bfafd857c2021-01-02-19-47-11Screenshot_(3).png', '0000-00-00 00:00:00'),
(73, 'images/5ff1483ab14012021-01-03-05-29-46Screenshot_(3).png', '0000-00-00 00:00:00'),
(74, 'images/5ff1528bd84722021-01-03-06-13-47Screenshot_(3).png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `commentadminpost`
--

CREATE TABLE `commentadminpost` (
  `id` int(50) NOT NULL,
  `massage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentadminpost`
--

INSERT INTO `commentadminpost` (`id`, `massage`) VALUES
(121, 'heyyyy'),
(122, 'dsdsdsdsasa'),
(124, 'asasasassasasugyyuyy'),
(126, 'ytrtyrhff');

-- --------------------------------------------------------

--
-- Table structure for table `samassage`
--

CREATE TABLE `samassage` (
  `id` int(11) NOT NULL,
  `massage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `samassage`
--

INSERT INTO `samassage` (`id`, `massage`) VALUES
(1, 'hellllo admin'),
(2, 'how r u');

-- --------------------------------------------------------

--
-- Table structure for table `tosamassage`
--

CREATE TABLE `tosamassage` (
  `id` int(50) NOT NULL,
  `massage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tosamassage`
--

INSERT INTO `tosamassage` (`id`, `massage`) VALUES
(1, 'yess'),
(2, 'i am herre'),
(3, 'heyyy'),
(4, 'awweawea'),
(5, 'heyyy'),
(6, 'awweawea'),
(22, ''),
(23, ''),
(24, ''),
(25, 'sasasa'),
(26, 'yyeeee its meeeeeee'),
(27, 'sawewqweq'),
(28, 'fdffsffsgd'),
(29, 'helloo'),
(30, 'asas'),
(31, 'sasasas'),
(32, 'asas'),
(33, 'asas'),
(34, 'sasasa'),
(35, 'asassfsfsdsfdsadsdasfd\r\n'),
(36, 'dsdsdsd'),
(37, 'asasas'),
(38, 'sasas'),
(39, 'asasasas'),
(40, 'helllllllooooooooooooo'),
(41, 'rahahha'),
(42, 'ddddddddddd'),
(43, 'asas'),
(44, 'eeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `tousermassage`
--

CREATE TABLE `tousermassage` (
  `id` int(50) NOT NULL,
  `massage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tousermassage`
--

INSERT INTO `tousermassage` (`id`, `massage`) VALUES
(1, 'i am admin'),
(2, 'how can i help you??'),
(3, 'sdsdsd'),
(4, 'e'),
(5, 'asass'),
(6, 'sasa'),
(7, 'erwerw'),
(8, 'fssfdf'),
(9, 'asasasa');

-- --------------------------------------------------------

--
-- Table structure for table `usermassage`
--

CREATE TABLE `usermassage` (
  `id` int(50) NOT NULL,
  `massage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermassage`
--

INSERT INTO `usermassage` (`id`, `massage`) VALUES
(1, 'heeelooooo'),
(2, 'i am useeeeeerrrrrrr'),
(3, 'heeelooooo'),
(4, 'i am useeeeeerrrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `verifieduserid`
--

CREATE TABLE `verifieduserid` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifieduserid`
--

INSERT INTO `verifieduserid` (`id`, `username`, `password`, `email`, `type`) VALUES
(5, 'www', 'www', 'wwwasa@g', 'user'),
(9, 'sas', 'sas', 'sa@sas', 'User'),
(10, 'xzxx', 'x', '8801919869222@gm.com', 'user'),
(11, 'shohans', 'hiuh', '+8801919869222@gm.com', 'Company user'),
(12, 'shohan', ' eloper.', '8801919869222@gm.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `viewalluser`
--

CREATE TABLE `viewalluser` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewalluser`
--

INSERT INTO `viewalluser` (`id`, `username`, `password`, `email`, `type`) VALUES
(9, 'aSxccc', 'AS', 'asa@gmail.com', 'user'),
(14, 'as', 'sasas', 'shohan123boss@gmail.com', 'user'),
(15, 'asas', 'sas', 'sassas@gm', 'User'),
(18, 'asasx', 'aaaaaaaa', 'asa@gmail.com', 'Company user'),
(19, 'sasssss', 'sasassasa', 'sassas@gm', 'User'),
(20, 'shohan boss', 'saaaaassasa', 'sasasasas@gmail.com', 'user'),
(22, 'saas', 'sasasasas', 'shohan123boss@gmail.com', 'User'),
(23, 'fhgfhgf', 'fhhfhfffhfuu', 'shohan123boss@gmail.com', 'Company user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpost`
--
ALTER TABLE `adminpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminprofile`
--
ALTER TABLE `adminprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminprofilepic`
--
ALTER TABLE `adminprofilepic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentadminpost`
--
ALTER TABLE `commentadminpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samassage`
--
ALTER TABLE `samassage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tosamassage`
--
ALTER TABLE `tosamassage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tousermassage`
--
ALTER TABLE `tousermassage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermassage`
--
ALTER TABLE `usermassage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifieduserid`
--
ALTER TABLE `verifieduserid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewalluser`
--
ALTER TABLE `viewalluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminpost`
--
ALTER TABLE `adminpost`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `adminprofile`
--
ALTER TABLE `adminprofile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminprofilepic`
--
ALTER TABLE `adminprofilepic`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `commentadminpost`
--
ALTER TABLE `commentadminpost`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `samassage`
--
ALTER TABLE `samassage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tosamassage`
--
ALTER TABLE `tosamassage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tousermassage`
--
ALTER TABLE `tousermassage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usermassage`
--
ALTER TABLE `usermassage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verifieduserid`
--
ALTER TABLE `verifieduserid`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `viewalluser`
--
ALTER TABLE `viewalluser`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

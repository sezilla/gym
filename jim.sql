-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 12:38 PM
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
-- Database: `jim`
--

-- --------------------------------------------------------

--
-- Table structure for table `active`
--

CREATE TABLE `active` (
  `fullname` varchar(255) NOT NULL,
  `membershipno` int(11) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `plan` int(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `expire` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `active`
--

INSERT INTO `active` (`fullname`, `membershipno`, `contactno`, `plan`, `createdate`, `expire`) VALUES
('fur-ina', 3, '123123123', 6, '2024-05-22 11:28:10', 177),
('arcelino', 5, '123123123', 6, '2024-05-22 16:07:45', 177),
('siya yun', 7, '123123123', 4, '2024-05-22 16:08:19', 117),
('chlorine', 8, '123123123', 3, '2024-05-22 16:12:37', 87),
('rizzly', 9, '123123123', 3, '2024-05-22 16:08:26', 87),
('neuvillet', 11, '123123123', 3, '2024-05-22 16:08:45', 87),
('may buhok', 14, '123123123', 2, '2024-04-01 10:02:49', 6),
('bocchi', 15, '123123123', 2, '2024-05-19 10:05:09', 54),
('kita', 16, '123123123', 3, '2024-05-22 16:09:34', 87),
('ryu', 17, '123123123', 15, '2024-05-22 16:09:11', 447),
('ako lang naman to eh', 20, 'secret', 3, '2024-05-19 11:56:57', 84),
('malakas', 24, '09876543210', 7, '2024-05-22 11:00:38', 207),
('contaCT', 26, '', 9, '2024-05-22 15:40:20', 267),
('new', 29, '123', 9, '2024-05-22 11:20:33', 267),
('test1', 30, '123123', 6, '2024-05-22 11:26:53', 177),
('ako', 31, '123123', 1, '2024-05-25 06:41:39', 30),
('hehe', 32, '123123', 12, '2024-05-25 06:41:55', 360);

-- --------------------------------------------------------

--
-- Table structure for table `inactive`
--

CREATE TABLE `inactive` (
  `fullname` varchar(255) NOT NULL,
  `membershipno` int(11) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inactive`
--

INSERT INTO `inactive` (`fullname`, `membershipno`, `contactno`, `plan`, `createdate`) VALUES
('kalbo', 2, 'secret', '', '2024-05-22 16:55:32'),
('kalbo', 4, '123123123', '2', '2024-05-19 14:43:54'),
('kalbo', 6, '123123123', '', '2024-05-22 16:57:21'),
('kalbo', 13, '123123123', '', '2024-05-22 16:57:46'),
('ahahaha', 18, 'qw4123123', 'premium', '2024-05-20 13:41:52'),
('ahahaha', 19, 'qw4123123', 'premium', '2024-05-20 13:41:52'),
('weeeeeee', 21, '12312312312313213', '1', '2024-05-19 12:04:45'),
('test', 22, 'test', '1', '2024-05-20 13:41:52'),
('dapat sa inactive to pupunta', 23, '123123', '1', '2024-05-19 14:30:51'),
('ako', 25, '', '', '2024-05-22 11:03:57'),
('fgh', 27, '', '', '2024-05-22 11:03:57'),
('ewan', 28, '123345678', '', '2024-05-22 11:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `date_added`) VALUES
(1, 'qweqwe@gmail.com', '123123', '2024-05-20 11:29:16'),
(2, '1', '1', '2024-05-20 11:45:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active`
--
ALTER TABLE `active`
  ADD PRIMARY KEY (`membershipno`);

--
-- Indexes for table `inactive`
--
ALTER TABLE `inactive`
  ADD PRIMARY KEY (`membershipno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active`
--
ALTER TABLE `active`
  MODIFY `membershipno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

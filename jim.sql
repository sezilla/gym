-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 04:44 PM
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
  `plan` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `active`
--

INSERT INTO `active` (`fullname`, `membershipno`, `contactno`, `plan`, `createdate`) VALUES
('kalbo', 5, '123123123', '2', '2024-05-19 09:56:18'),
('kalbo', 6, '123123123', '2', '2024-05-19 09:59:16'),
('kalbo', 7, '123123123', '2', '2024-05-19 09:59:46'),
('kalbo', 8, '123123123', '2', '2024-05-19 09:59:59'),
('kalbo', 9, '123123123', '2', '2024-05-19 10:01:50'),
('kalbo', 10, '123123123', '2', '2024-05-19 10:01:50'),
('kalbo', 11, '123123123', '2', '2024-05-19 10:02:33'),
('kalbo', 12, '123123123', '2', '2024-05-19 10:02:41'),
('kalbo', 13, '123123123', '2', '2024-05-19 10:02:43'),
('kalbo', 14, '123123123', '2', '2024-05-19 10:02:49'),
('kalbo', 15, '123123123', '2', '2024-05-19 10:05:09'),
('kalbo', 16, '123123123', '2', '2024-05-19 10:05:25'),
('kalbo', 17, '123123123', '2', '2024-05-19 10:07:43'),
('ahahaha', 18, 'qw4123123', 'premium', '2024-05-19 11:22:34'),
('ahahaha', 19, 'qw4123123', 'premium', '2024-05-19 11:22:42'),
('ako lang naman to eh', 20, 'secret', '3', '2024-05-19 11:56:57'),
('test', 22, 'test', '1', '2024-04-19 13:40:10');

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
('kalbo', 2, '123123123', '2', '2024-05-19 14:34:08'),
('kalbo', 3, '123123123', '2', '2024-05-19 14:41:55'),
('kalbo', 4, '123123123', '2', '2024-05-19 14:43:54'),
('weeeeeee', 21, '12312312312313213', '1', '2024-05-19 12:04:45'),
('dapat sa inactive to pupunta', 23, '123123', '1', '2024-05-19 14:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `system_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `currency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `system_name`, `logo`, `currency`) VALUES
(1, 'Membership System', 'uploads/mlg.png', '$');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active`
--
ALTER TABLE `active`
  MODIFY `membershipno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

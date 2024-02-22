-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 05:54 AM
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
-- Database: `userformtbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'santosh mahajan', 'santoshmahajan45@gmail.com', '5456787656', '$2y$10$yhijwRImFt/5EWVgpLhxKum74w1pDypUOGgMhzUby4ciyjbjQeI9S');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(25) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `price`, `image`) VALUES
(1, 'F&O Master Course', 50000, 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.shutterstock.com%2Fimage-vector%2F3d-web-vector-illustrations-online-600nw-2152289507.jpg&tbnid=6rr-A_Zc3cQ-IM&vet=12ahUKEwiOnsiQ5puEAxUcX2wGHQuABFsQMygCegQIARB4..i&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Fcourse-content&docid=XKld1DpY-1fBcM&w=600&h=408&q=course%20image&ved=2ahUKEwiOnsiQ5puEAxUcX2wGHQuABFsQMygCegQIARB4');

-- --------------------------------------------------------

--
-- Table structure for table `logindate`
--

CREATE TABLE `logindate` (
  `id` int(11) NOT NULL,
  `logindate` date NOT NULL,
  `logoutdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindate`
--

INSERT INTO `logindate` (`id`, `logindate`, `logoutdate`) VALUES
(1, '2024-01-29', '0000-00-00'),
(2, '2024-01-29', '0000-00-00'),
(3, '2024-01-29', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `logintimedate`
--

CREATE TABLE `logintimedate` (
  `id` int(11) NOT NULL,
  `logint` varchar(255) NOT NULL,
  `logoutt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_id` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `mdl` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `trad_expe` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `dmt_yes_no` varchar(255) NOT NULL,
  `demat_acco` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `last`, `mdl`, `userid`, `mobile`, `email`, `dob`, `gender`, `trad_expe`, `address`, `pincode`, `dmt_yes_no`, `demat_acco`, `password`, `code`, `status`) VALUES
(1, 'Ritu gour', '', '', 62, '1323687098', 'gourritu48@gmail.com', '', '', '', '', 0, '', '', '$2y$10$xXmY.doAGch/yn2m3NWGjeuTx8YyMY5xftwso0belcIgd3KvoMAt.', 778331, 'verified'),
(2, 'Ritu gour', '', '', 53, '1323687089', 'gourritu480@gmail.com', '', '', '', '', 0, '', '', '$2y$10$LpZ87Tride7owEO4G766F.qTTXVcTEAKK8WaXqY8ekQVgB8j9xXCG', 0, 'verified'),
(3, 'Ritu gour', '', '', 25, '6323687098', 'gourritu4809@gmail.com', '', '', '', '', 0, '', '', '$2y$10$M8/eZ.dAaCyHe1UnEUvcpeKEaG59g07pwrEkau52AwTm0hLr5akdm', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindate`
--
ALTER TABLE `logindate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintimedate`
--
ALTER TABLE `logintimedate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logindate`
--
ALTER TABLE `logindate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logintimedate`
--
ALTER TABLE `logintimedate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

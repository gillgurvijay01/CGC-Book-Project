-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2021 at 06:20 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorise`
--

CREATE TABLE `authorise` (
  `id` int NOT NULL,
  `clock_time` timestamp NOT NULL,
  `user` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authorise`
--

INSERT INTO `authorise` (`id`, `clock_time`, `user`) VALUES
(1, '2021-08-10 05:49:28', 'admin'),
(2, '2021-08-10 06:34:15', 'ad'),
(3, '2021-08-10 06:35:20', 'admin'),
(4, '2021-08-10 06:35:28', 'admin'),
(5, '2021-08-10 06:51:41', 'admin'),
(6, '2021-08-10 07:38:13', 'admin'),
(7, '2021-08-10 07:42:02', 'admin'),
(8, '2021-08-10 08:49:26', 'admin'),
(9, '2021-08-10 09:01:49', 'admin'),
(10, '2021-08-10 09:06:11', 'admin'),
(11, '2021-08-11 16:08:29', 'admin'),
(12, '2021-08-12 15:42:24', 'admin'),
(13, '2021-08-12 16:12:19', 'admin'),
(14, '2021-08-13 03:44:17', 'admin'),
(15, '2021-08-13 04:21:32', 'admin'),
(16, '2021-08-19 12:40:04', 'admin'),
(17, '2021-08-19 12:53:10', 'admin'),
(18, '2021-08-24 11:29:10', 'admin'),
(19, '2021-08-26 12:17:05', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int NOT NULL,
  `name` varchar(10) NOT NULL,
  `detail_desc` varchar(100) NOT NULL,
  `cost` int NOT NULL,
  `added_date` timestamp NOT NULL,
  `file_img_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `detail_desc`, `cost`, `added_date`, `file_img_link`) VALUES
(721, 'dan brown', 'da vinci', 500, '2021-08-19 12:41:43', '611e51873a238.jpeg'),
(722, 'pencil', '10 pencil', 25, '2021-08-24 11:29:42', '6124d82607a5f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unauthorized_admin_track`
--

CREATE TABLE `unauthorized_admin_track` (
  `id` int NOT NULL,
  `user` text NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `unauthorized_admin_track`
--

INSERT INTO `unauthorized_admin_track` (`id`, `user`, `password`, `time`) VALUES
(1, '1212', '23231', '2021-08-10 06:51:06'),
(2, 'admin', 'mghjkghj', '2021-08-10 09:05:56'),
(3, 'admin', 'fghfgh', '2021-08-10 09:05:59'),
(4, 'abcd', '1234', '2021-08-12 15:41:20'),
(5, 'abcd', '', '2021-08-12 15:42:04'),
(6, 'admin', 'admin', '2021-08-24 11:28:52'),
(7, 'admin', 'admin', '2021-08-24 11:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `address`, `mobile`, `email`, `password`) VALUES
(1, 'Test', '', 'new colony', 9876453210, 'email123@email.com', 'passwordTest'),
(6, 'karan', 'singh', 'chd', 987654310, 'karan@email.com', 'password'),
(11, '121', '121', '121', 121, '123@email.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `user_product_ordered`
--

CREATE TABLE `user_product_ordered` (
  `id` int NOT NULL,
  `uid` int NOT NULL,
  `pid` int NOT NULL,
  `date_time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_product_ordered`
--

INSERT INTO `user_product_ordered` (`id`, `uid`, `pid`, `date_time`) VALUES
(1, 1, 1, '2021-08-12 10:27:32'),
(2, 1, 722, '2021-08-26 07:52:17'),
(3, 1, 721, '2021-08-26 07:52:22'),
(4, 1, 722, '2021-08-26 07:52:43'),
(5, 1, 721, '2021-08-26 07:52:56'),
(6, 1, 721, '2021-08-26 08:13:28'),
(7, 1, 722, '2021-08-26 08:15:15'),
(8, 6, 721, '2021-08-26 09:13:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorise`
--
ALTER TABLE `authorise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `unauthorized_admin_track`
--
ALTER TABLE `unauthorized_admin_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_product_ordered`
--
ALTER TABLE `user_product_ordered`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorise`
--
ALTER TABLE `authorise`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=723;

--
-- AUTO_INCREMENT for table `unauthorized_admin_track`
--
ALTER TABLE `unauthorized_admin_track`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_product_ordered`
--
ALTER TABLE `user_product_ordered`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

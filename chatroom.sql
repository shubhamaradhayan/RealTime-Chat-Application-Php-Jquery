-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 07:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `room` text NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`id`, `msg`, `room`, `ip`, `stime`) VALUES
(30, 'hhhh', '6320d5f104e79', '::1', '2022-09-14 00:43:57'),
(62, 'hello', '63217b145dad2', '::1', '2022-09-14 12:57:56'),
(63, 'hii', '63217b145dad2', '::1', '2022-09-14 12:58:35'),
(64, 'good', '63217b145dad2', '::1', '2022-09-14 12:58:54'),
(65, 'hii', '63217b145dad2', '::1', '2022-09-14 13:00:42'),
(66, '123', '63217b145dad2', '::1', '2022-09-14 13:00:53'),
(67, 'kkrh', '63217b145dad2', '::1', '2022-09-14 13:04:56'),
(68, 'ok', '63217b145dad2', '::1', '2022-09-14 13:05:05'),
(69, 'okkk', '63217b145dad2', '::1', '2022-09-14 13:05:16'),
(70, 'kfkf', '63217b145dad2', '::1', '2022-09-14 13:05:17'),
(71, 'kf', '63217b145dad2', '::1', '2022-09-14 13:05:19'),
(72, 'hhhh', '63217b145dad2', '::1', '2022-09-14 13:42:29'),
(73, 'ok', '63217b145dad2', '::1', '2022-09-14 13:44:01'),
(74, 'hhhh', '63217b145dad2', '::1', '2022-09-14 13:59:09'),
(75, '55555555', '63217b145dad2', '::1', '2022-09-14 14:52:59'),
(76, '8888', '63217b145dad2', '::1', '2022-09-14 14:53:07'),
(77, '99999', '63217b145dad2', '::1', '2022-09-14 14:53:40'),
(78, 'hhhh', '63217b145dad2', '::1', '2022-09-14 18:55:26'),
(79, 'aaa', '63217b145dad2', '::1', '2022-09-14 18:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_id` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `time`) VALUES
(1, '123eeecxsff', '2022-09-13 20:21:40'),
(24, '63217b145dad2', '2022-09-14 12:26:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 10:01 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siskabmndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(3) NOT NULL,
  `police_number` varchar(10) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `type` varchar(2) NOT NULL,
  `date_tax` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `police_number`, `slug`, `type`, `date_tax`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'ab 1234 d1', 'ab-1234-d1', '4', '2021-11-19', 'aman', '2021-11-19 00:44:33', '2021-11-21 20:47:21', '2021-11-21 20:47:21'),
(12, 'B 2321 D', 'b-2321-d', '2', '2021-11-20', 'aman', '2021-11-19 00:47:58', '2021-12-07 07:48:29', '0000-00-00 00:00:00'),
(13, 'AB 2342 PW', 'ab-2342-pwe', '2', '2021-11-23', 'aman', '2021-11-21 19:35:43', '2021-11-21 19:35:43', '0000-00-00 00:00:00'),
(14, 'B 2313 PDD', 'b-2313-pdd', '2', '2021-12-08', 'aman', '2021-12-07 07:45:45', '2021-12-07 07:46:13', '2021-12-07 07:46:13'),
(15, 'B 1223 DCQ', 'b-1223-dcq', '2', '2021-12-08', 'aman', '2021-12-07 07:46:47', '2021-12-07 07:46:47', '0000-00-00 00:00:00'),
(16, 'B 3342 PPP', 'b-3342-ppp', '2', '2022-02-07', 'aman', '2021-12-07 08:20:09', '2021-12-07 08:20:09', '0000-00-00 00:00:00'),
(17, 'B 3342 PPP', 'b-3342-ppp', '2', '2022-02-07', 'aman', '2021-12-07 08:20:09', '2021-12-07 08:20:09', '0000-00-00 00:00:00'),
(18, 'ASDFS', 'asdfs', '4', '2022-03-17', 'aman', '2021-12-07 08:20:32', '2021-12-07 08:20:32', '0000-00-00 00:00:00'),
(19, 'ASFWSAF', 'asfwsaf', '2', '2022-01-14', 'aman', '2021-12-07 08:20:49', '2021-12-07 08:20:49', '0000-00-00 00:00:00'),
(20, 'ASFWSAF', 'asfwsaf', '2', '2022-05-15', 'aman', '2021-12-07 08:20:49', '2021-12-07 08:46:47', '0000-00-00 00:00:00'),
(21, 'sdsdf', 'sdsdf', '4', '2022-04-15', 'aman', '2021-12-07 08:33:18', '2021-12-07 08:33:18', '0000-00-00 00:00:00'),
(22, 'sdf', 'sdf', '2', '2022-02-23', 'aman', '2021-12-07 08:34:54', '2021-12-07 08:34:54', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

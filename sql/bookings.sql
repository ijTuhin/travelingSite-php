-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 02:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `u_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `member` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`u_id`, `name`, `phone`, `email`, `address`, `location`, `member`, `checkin`, `checkout`) VALUES
(1, 'Israt', 56565656, 'abcd123@some.com', 'Chawkbazar', 'Kuakata', 4, '2022-04-16', '2022-04-18'),
(2, 'Israt', 56565656, 'abcd2233@mail.com', '', 'Inani beach', 2, '2022-05-04', '2022-05-07'),
(3, 'Tuhin  ', 22223334, 'abcd2200@mail.com', 'AK Khan', 'Bandarban', 3, '2022-05-06', '2022-05-07'),
(4, 'Tuhin  ', 22223334, 'abcd2200@mail.com', '', 'Dhaka', 4, '2022-05-05', '2022-05-06'),
(5, 'Israt', 56565656, 'abcd2233@mail.com', 'East Bakolia', 'Comilla', 4, '2022-04-20', '2022-04-24'),
(6, 'Israt', 56565656, 'abcd2233@mail.com', 'East Bakolia', 'Comilla', 4, '2022-04-22', '2022-04-23'),
(7, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Sylhet', 1, '2022-04-20', '2022-04-23'),
(8, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Sylhet', 2, '2022-04-15', '2022-04-18'),
(9, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Comilla', 2, '2022-04-15', '2022-04-16'),
(10, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Comilla', 1, '2022-04-16', '2022-04-19'),
(11, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Comilla', 2, '2022-04-16', '2022-04-22'),
(12, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Sylhet', 1, '2022-04-16', '2022-04-16'),
(13, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Comilla', 2, '2022-04-16', '2022-04-20'),
(14, 'Tuhin  ', 22223333, 'abcd2200@mail.com', 'Chawkbazar', 'Sylhet', 3, '2022-04-16', '2022-04-18'),
(15, 'Tuhin  ', 22223333, 'abcd2200@mail.com', 'Chawkbazar', 'Sylhet', 3, '2022-04-16', '2022-04-18'),
(16, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'Ctg', 4, '2022-04-15', '2022-04-16'),
(17, '', 0, '', '', '', 0, '0000-00-00', '0000-00-00'),
(18, 'Israt', 56565656, 'abcd2233@mail.com', 'Agrabad, Bank Colony.', 'ctg', 2, '2022-04-16', '2022-04-17'),
(19, 'Tuhin  ', 56565656, 'abcd2200@mail.com', 'Chawkbazar', 'ctg', 2, '2022-04-09', '2022-04-16'),
(20, 'Tuhin  ', 56565656, 'abcd2200@mail.com', 'Chawkbazar', 'ctg', 2, '2022-04-23', '2022-04-25'),
(21, 'Rahim', 12345678, 'rahim@mail.com', 'Chawkbazar', 'ctg', 1, '2022-04-16', '2022-04-21'),
(22, 'Rahim', 56565656, 'rahim@mail.com', 'Chawkbazar', 'comilla', 2, '2022-04-22', '2022-04-25'),
(23, 'Sameer', 12345678, 'sameer@sam.com', 'AK Khan', 'dhk', 1, '2022-04-16', '2022-04-17'),
(24, 'Rahim', 56565656, 'rahim@mail.com', 'Chawkbazar', 'Sylhet', 1, '2022-04-15', '2022-04-18'),
(25, 'Rahim', 56565656, 'rahim@mail.com', 'Chawkbazar', 'Sylhet', 1, '2022-04-15', '2022-04-18'),
(26, 'Rahim', 56565656, 'rahim@mail.com', 'Chawkbazar', 'Sylhet', 1, '2022-04-15', '2022-04-18'),
(27, 'Sameer', 56565656, 'sameer@sam.com', 'Chawkbazar', 'Khulna', 2, '2022-04-16', '2022-04-23'),
(28, 'Sameer', 56565656, 'sameer@sam.com', '', 'Ctg', 1, '0000-00-00', '0000-00-00'),
(29, 'Sanju', 12345678, 'sanju123@abc.com', 'East Bakolia,18 No. Ward', 'L.A.', 4, '2022-04-18', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

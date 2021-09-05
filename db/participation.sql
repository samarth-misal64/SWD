-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 02:19 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `id` int(11) NOT NULL,
  `inputNameP` varchar(255) NOT NULL,
  `inputPhoneP` varchar(255) NOT NULL,
  `inputAddressP` varchar(255) NOT NULL,
  `inputStateP` varchar(255) NOT NULL,
  `inputCityP` varchar(255) NOT NULL,
  `inputVNameP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`id`, `inputNameP`, `inputPhoneP`, `inputAddressP`, `inputStateP`, `inputCityP`, `inputVNameP`) VALUES
(3, 'Khushboo Mundada', '09423083424', '119, Nana Peth, Pune', 'Maharashtra', 'Pune', 'kkk'),
(4, 'Khushboo', '9423083424', '119, Nana Peth, Pune', 'Maharashtra', 'Pune', 'Khushboo'),
(5, 'Khushboo', '8855986253', '119, Nana Peth, Pune', 'Maharashtra', 'Pune', 'Khushboo'),
(6, 'Khushboo', '1111111111', '119, Nana Peth, Pune', 'Maharashtra', 'Pune', 'Khushboo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participation`
--
ALTER TABLE `participation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

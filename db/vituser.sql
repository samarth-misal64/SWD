-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 02:20 AM
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
-- Table structure for table `vituser`
--

CREATE TABLE `vituser` (
  `inputName` varchar(255) NOT NULL,
  `inputEmail4` varchar(255) NOT NULL,
  `inputPhone` varchar(255) NOT NULL,
  `inputState` varchar(255) NOT NULL,
  `inputCity` varchar(255) NOT NULL,
  `inputYear` varchar(255) NOT NULL,
  `inputBrach` varchar(255) NOT NULL,
  `inputdivision` varchar(255) NOT NULL,
  `inputgrno` varchar(255) NOT NULL,
  `inputrollno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vituser`
--

INSERT INTO `vituser` (`inputName`, `inputEmail4`, `inputPhone`, `inputState`, `inputCity`, `inputYear`, `inputBrach`, `inputdivision`, `inputgrno`, `inputrollno`) VALUES
('Khushboo Mundada', 'mu001@gmail.com', '0942083424', 'Maharashtra', 'Pune', '1', 'Computer', 'A', '11910137', '23'),
('Khushboo Mundada', 'munda2001@gmail.com', '9423083424', 'Maharashtra', 'Pune', '1', 'Computer', 'A', '11910137', '23'),
('Khushboo Mundada', 'mundadakhush2001@gmail.com', '9423083424', 'Maharashtra', 'Pune', '3', 'Computer', 'A', '11910137', '23'),
('Khushboo Mundada', 'mundadakhush21@gmail.com', '9423083424', 'Maharashtra', 'Pune', '1', 'Computer', 'A', '11910137', '23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vituser`
--
ALTER TABLE `vituser`
  ADD UNIQUE KEY `inputEmail4` (`inputEmail4`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

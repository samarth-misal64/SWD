-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 10:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `inputName` varchar(255) NOT NULL,
  `inputEmail4` varchar(255) NOT NULL,
  `inputPhone` int(11) NOT NULL,
  `inputAddress` varchar(255) NOT NULL,
  `inputAddress2` varchar(255) NOT NULL,
  `inputCity` varchar(255) NOT NULL,
  `inputZip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vituser`
--

CREATE TABLE `vituser` (
  `id` int(11) NOT NULL,
  `namevit` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `addressvit` varchar(255) NOT NULL,
  `yearvit` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `grno` int(10) NOT NULL,
  `rollno` int(10) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `zipno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vituser`
--
ALTER TABLE `vituser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vituser`
--
ALTER TABLE `vituser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

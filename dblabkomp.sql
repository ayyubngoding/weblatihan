-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 02:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblabkomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblabkomp`
--

CREATE TABLE `tblabkomp` (
  `id` int(11) NOT NULL,
  `no_komputer` varchar(50) NOT NULL,
  `monitor` varchar(50) NOT NULL,
  `keyboard` varchar(50) NOT NULL,
  `mouse` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `ups` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblabkomp`
--

INSERT INTO `tblabkomp` (`id`, `no_komputer`, `monitor`, `keyboard`, `mouse`, `cpu`, `ups`) VALUES
(1, '1', 'baik', 'baik', 'baik', 'baik', 'baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblabkomp`
--
ALTER TABLE `tblabkomp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblabkomp`
--
ALTER TABLE `tblabkomp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

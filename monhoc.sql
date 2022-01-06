-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 11:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kt2`
--

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` int(11) NOT NULL,
  `ten_mh` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `sotinchi` int(3) DEFAULT NULL,
  `sotiet_lt` int(3) DEFAULT NULL,
  `sotiet_bt` int(3) DEFAULT NULL,
  `sotiet_thtn` int(3) DEFAULT NULL,
  `sogio_tuhoc` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `ten_mh`, `sotinchi`, `sotiet_lt`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) VALUES
(1, 'Music', 4, 24, 1, 2, 4),
(2, 'Tools', 1, 5, 15, 5, 9),
(3, 'Baby', 1, 3, 8, 3, 2),
(4, 'Industrial', 4, 27, 6, 5, 10),
(5, 'Music', 1, 11, 7, 5, 8),
(6, 'Shoes', 2, 23, 10, 2, 5),
(7, 'Kids', 1, 26, 5, 4, 5),
(8, 'Electronics', 2, 30, 12, 5, 5),
(9, 'Beauty', 4, 9, 8, 5, 9),
(10, 'Shoes', 2, 16, 11, 3, 5),
(11, 'Garden', 4, 2, 6, 1, 4),
(12, 'Electronics', 4, 24, 14, 4, 6),
(14, 'Computers', 1, 30, 11, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `mamh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

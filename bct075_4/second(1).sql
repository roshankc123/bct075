-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2019 at 10:56 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `second`
--

CREATE TABLE `second` (
  `sn` int(11) NOT NULL,
  `session` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `u_address` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `u_point` int(11) NOT NULL,
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `second`
--

INSERT INTO `second` (`sn`, `session`, `u_name`, `u_password`, `u_address`, `u_email`, `u_point`, `id`, `u_roll`) VALUES
(1, '1111001191', 'roshankc', 'helloworld', 'aanboo khaireni', 'kcroshan566@gmail.com', 12, 'http://202.70.84.165/img/student/PAS075BCT035.jpg', 35),
(2, '919110111150', 'bibekchalise', 'helloworld', 'chitwan', 'bibek@gmail.com', 12, 'http://202.70.84.165/img/student/PAS075BCT009.jpg', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `second`
--
ALTER TABLE `second`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `second`
--
ALTER TABLE `second`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 21, 2025 at 09:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(13) NOT NULL COMMENT 'ไอดีรันไปเรื่อยๆ',
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `org` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `typ` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `firstname`, `lastname`, `username`, `email`, `phone`, `org`, `password`, `create_date`, `typ`) VALUES
(1, 'Admin', 'Admin', 'AdminTest', 'admin@gmail.com', '0985204565', 'คณะบริหารธุรกิจ', '1234', '2025-01-20 15:23:01', '0'),
(2, 'TB', 'TB', 'TB', 'ttb@gmail.com', '0824393909', 'คณะบริหารธุรกิจ', '1234', '2025-01-20 10:01:25', '1'),
(3, 'Thanatchaya', 'Bilainga', 'Nuchmee', 'tb@gmail.com', '0948042979', 'สำนักทรัพยากรมนุษย์', '1234', '2025-01-20 10:02:28', '1'),
(4, 'M', 'B', 'mb', 'mb@gmail.com', '0000000000', 'คณะบริหารธุรกิจ', '12345', '2025-01-20 16:10:34', '1'),
(5, 'chin', 'chin', 'chin', 'chin@gmail.com', '0658582354', 'คณะวิทยาศาสตร์', '1234', '2025-01-21 09:38:59', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีรันไปเรื่อยๆ', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

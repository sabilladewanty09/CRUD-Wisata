-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 05:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisataindo`
--
CREATE DATABASE IF NOT EXISTS `wisataindo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wisataindo`;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(255) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `makanan_khas` varchar(255) NOT NULL,
  `spot_wisata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_kota`, `makanan_khas`, `spot_wisata`) VALUES
(4, 'Bandung', 'Seblak', 'Farm House Lembang'),
(5, 'Jogjakarta', 'Gudeg', 'Candi Borobudur'),
(6, 'Jakarta', 'Kerak Telor', 'Monas'),
(8, 'Bekasi', 'KFC', 'Metropolian Mall Bekasi'),
(9, 'Bali', 'Sate Lilit Bali', 'Pantai Kuta'),
(10, 'Surabaya', 'Tahu Telor', 'Taman Bengkul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

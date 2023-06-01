-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 02:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macaronrainbow`
--

-- --------------------------------------------------------

--
-- Table structure for table `bouquet_iyya`
--

CREATE TABLE `bouquet_iyya` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bouquet_iyya`
--

INSERT INTO `bouquet_iyya` (`id`, `nama`, `harga`, `deskripsi`) VALUES
(1, 'Flower Bouquet Small', '35k', 'Rangkaian bouquet ukuran kecil (untuk ukuran yang lebih besar beda harga)'),
(2, 'Doll Bouquet', '35k', 'Rangkaian bouquet boneka (boneka bisa custom)'),
(3, 'Money Bouquet', '50k', 'Rangkaian bouquet uang (harga bouquet dihitung perlembar)'),
(4, 'Snack Bouquet', '35k', 'Rangkaian bouquet snack (bisa custom snack sesuai keinginan)'),
(5, 'Baloon Bouquet', '35k', 'Rangkaian bouquet balon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bouquet_iyya`
--
ALTER TABLE `bouquet_iyya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bouquet_iyya`
--
ALTER TABLE `bouquet_iyya`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

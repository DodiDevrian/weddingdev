-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2026 at 03:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_weddingdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tema`
--

CREATE TABLE `tbl_tema` (
  `id_tema` int(255) NOT NULL,
  `nama_tema` varchar(500) NOT NULL,
  `kode_tema` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga_reg_coret` varchar(255) NOT NULL,
  `harga_reg` varchar(255) NOT NULL,
  `harga_vip_coret` varchar(255) NOT NULL,
  `harga_vip` varchar(255) NOT NULL,
  `harga_vvip_coret` varchar(255) NOT NULL,
  `harga_vvip` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tema`
--

INSERT INTO `tbl_tema` (`id_tema`, `nama_tema`, `kode_tema`, `kategori`, `harga_reg_coret`, `harga_reg`, `harga_vip_coret`, `harga_vip`, `harga_vvip_coret`, `harga_vvip`, `thumbnail`) VALUES
(3, 'Premium Dengan Foto 01', 'pf01', 'pf', 'Rp. 150.000', 'Rp. 80.000', 'Rp. 200.000', 'Rp. 100.000', 'Rp. 300.000', 'Rp. 150.000', 'pf01.jpg'),
(4, 'Premium Dengan Foto 02', 'pf02', 'pf', 'Rp. 150.000', 'Rp. 80.000', 'Rp. 200.000', 'Rp. 100.000', 'Rp. 300.000', 'Rp. 150.000', 'pf02.jpg'),
(5, 'Premium Dengan Foto 03', 'pf03', 'pf', 'Rp. 150.000', 'Rp. 80.000', 'Rp. 200.000', 'Rp. 100.000', 'Rp. 300.000', 'Rp. 150.000', 'pf03.jpg'),
(6, 'Premium Tanpa Foto 01', 'pt01', 'pt', 'Rp. 100.000', 'Rp. 50.000', 'Rp. 150.000', 'Rp. 80.000', 'Rp. 200.000', 'Rp. 100.000', 'pt01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tema`
--
ALTER TABLE `tbl_tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tema`
--
ALTER TABLE `tbl_tema`
  MODIFY `id_tema` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

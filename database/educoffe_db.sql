-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 09:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educoffe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `materi_berbayar`
--

CREATE TABLE `materi_berbayar` (
  `id_coffe` char(5) NOT NULL,
  `nama_coffe` varchar(50) NOT NULL,
  `jenis_coffe` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `bahan_bahan` text NOT NULL,
  `alat_alat` text NOT NULL,
  `link_vidio` varchar(225) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materi_gratis`
--

CREATE TABLE `materi_gratis` (
  `id_coffe` char(5) NOT NULL,
  `nama_coffe` varchar(50) NOT NULL,
  `jenis_coffe` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `bahan_bahan` text NOT NULL,
  `alat_alat` text NOT NULL,
  `link_vidio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `email`, `password`, `provinsi`, `kota`, `kecamatan`, `rt`, `rw`, `kelurahan`, `agama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `status`) VALUES
(1, 'ALIF NURFIRDAUS', 'muhammadalif1234@gmail.com', '3252bba41728b8de239834eb434dd21c', 'JAWA BARAT', 'BANDUNG', 'COBLONG', '03', '01', 'SEKELOA', 'ISLAM', 'LAKI - LAKI', '2003-12-27', 'Jl. Dipati Ukur No.112-116, Lebakgede Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materi_berbayar`
--
ALTER TABLE `materi_berbayar`
  ADD PRIMARY KEY (`id_coffe`);

--
-- Indexes for table `materi_gratis`
--
ALTER TABLE `materi_gratis`
  ADD PRIMARY KEY (`id_coffe`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

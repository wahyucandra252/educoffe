-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 04.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `biji`
--

CREATE TABLE `biji` (
  `id_biji` int(11) NOT NULL,
  `nama_biji` varchar(50) NOT NULL,
  `asal_biji` varchar(50) NOT NULL,
  `karakteristik` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `biji`
--

INSERT INTO `biji` (`id_biji`, `nama_biji`, `asal_biji`, `karakteristik`, `gambar`) VALUES
(1, 'Arabika', 'Toraja, Sulawesi Selatan', 'Rasa yang kaya dengan asam yang seimbang dan aroma bunga. Biji kopi Toraja memiliki kelembutan yang unik.\r\nCocok untuk Cocok untuk diseduh dengan metode manual brew seperti pour-', 'toraja.jpg'),
(2, 'Kopi Robusta Lampung', 'Lampung, Sumatera', 'Rasa yang kuat, pahit, dan kadar kafein yang tinggi. Cocok untuk pencinta kopi yang menyukai rasa yang bold dan kuat.\r\nCocok untuk Cocok untuk kopi tubruk atau kopi kuat ala Indonesia. Juga bagus untuk espresso karena memberikan kekuatan dan crema yang baik.', 'robusta.jpg'),
(3, 'Kopi Mandailing', 'Mandailing, Sumatera Utara', 'Rasa penuh, asam rendah, dengan sentuhan rempah-rempah. Memiliki kekentalan yang menyenangkan.\r\nCocok untuk: Cocok untuk diseduh dengan metode French press atau Aeropress untuk mengekstrak kekentalan dan kelezatan rempah-rempahnya.', 'mandailing.jpeg'),
(4, 'Kopi Gayo', 'Gayo, Aceh', 'Rasa yang kaya dengan keasaman sedang dan aroma yang kompleks. Biji kopi Gayo dikenal karena kualitasnya yang tinggi.\r\nCocok untuk Cocok untuk diseduh dengan metode V60 atau siphon untuk menonjolkan keasaman yang seimbang.', 'gayo.png'),
(5, 'Kopi Bali Kintamani', 'Kintamani, Bali', 'Rasa yang lembut, asam ringan, dan aroma fruity. Cocok untuk mereka yang mencari kopi dengan profil yang seimbang.\r\nCocok untuk: Cocok untuk diseduh dengan metode pour-over atau single-origin espresso untuk mengekstrak kelembutan dan kompleksitas rasanya.', 'bali.jpg'),
(6, 'Kopi Java', 'Jawa, Indonesia', 'Varian kopi yang beragam tergantung daerahnya. Kopi Jawa umumnya memiliki cita rasa yang lembut dengan keasaman yang rendah.\r\nCocok untuk Cocok untuk diseduh dengan metode traditional Indonesian coffee seperti kopi tubruk. Juga bagus untuk kopi tubruk atau kopi susu', 'java.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biji`
--
ALTER TABLE `biji`
  ADD PRIMARY KEY (`id_biji`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biji`
--
ALTER TABLE `biji`
  MODIFY `id_biji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

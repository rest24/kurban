-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 21.19
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belanja_kurban`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `belanja`
--

CREATE TABLE `belanja` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat_pengiriman` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_hewan` enum('sapi','kambing','unta') NOT NULL,
  `diskon` enum('sapi5','kambing5','unta5','sapi7','kambing7','unta7') NOT NULL,
  `harga_setelah_diskon` decimal(10,2) NOT NULL,
  `tanggal_pembelian` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `belanja`
--

INSERT INTO `belanja` (`id`, `nama_pembeli`, `alamat_pengiriman`, `no_hp`, `jenis_hewan`, `diskon`, `harga_setelah_diskon`, `tanggal_pembelian`, `total_harga`) VALUES
(1, 'Restu', 'Jalan Radenpatah', '085679657234', 'sapi', 'sapi7', '0.00', '2023-06-18 17:31:31', 18600000),
(2, 'Alam', 'Jalan Radenpatah No 5', '085679657233', 'unta', 'unta7', '0.00', '2023-06-18 18:05:14', 37200000),
(4, 'Sahrul', 'Jalan Radenpatah ', '085679657233', 'kambing', 'kambing5', '0.00', '2023-06-18 18:09:35', 2850000),
(5, 'Dede Alif', 'Jalan Radenpatah No 5', '085679657221', 'unta', 'unta7', '0.00', '2023-06-18 18:10:11', 37200000),
(7, 'Saitama', 'Jalan Buninagara ', '085679657231', 'sapi', 'sapi5', '0.00', '2023-06-18 18:22:41', 19000000),
(8, 'Dede A', 'Jalan Buninagara', '085679657221', 'sapi', 'sapi7', '0.00', '2023-06-18 18:40:34', 18600000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `belanja`
--
ALTER TABLE `belanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

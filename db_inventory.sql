-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2023 pada 02.03
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
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(500) NOT NULL,
  `kode_barang` varchar(200) NOT NULL,
  `tgl_ubah` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `lab` varchar(11) NOT NULL,
  `ruangan` varchar(11) NOT NULL,
  `kondisi` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `nama_barang`, `kode_barang`, `tgl_ubah`, `tgl_masuk`, `lab`, `ruangan`, `kondisi`) VALUES
(17, 'komputer', '122234', '2023-02-08', '2023-02-07', 'LAB 3', 'R2', 'RUSAK RINGAN'),
(18, 'komputer', '122234', '2023-02-08', '2023-02-08', 'LAB 2', 'R2', 'RUSAK RINGAN'),
(19, 'komputer', '574545646', '2023-02-16', '2023-02-08', 'LAB 1', 'R2', 'BAIK'),
(20, 'komputer', '6467rtrf', '0000-00-00', '2023-02-08', 'LAB 2', 'R1', 'DIPERBAIKI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(11, 'jaka', 'jaka@gmail.com', 'jaka', 'admin'),
(12, 'asep', 'donododo589@gmail.com', 'adi', 'petugas'),
(15, 'petugas', 'petugas@gmail.com', 'petugas', 'petugas'),
(16, 'admin', 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

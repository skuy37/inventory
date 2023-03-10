-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Mar 2023 pada 03.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
  `lab` enum('LAB1','LAB2','LAB3') NOT NULL,
  `ruangan` enum('R1','R2','R3') NOT NULL,
  `kondisi` enum('BAIK','RUSAK_RINGAN','RUSAK_BERAT','DIPERBAIKI') NOT NULL,
  `gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `nama_barang`, `kode_barang`, `tgl_ubah`, `tgl_masuk`, `lab`, `ruangan`, `kondisi`, `gambar`) VALUES
(15, 'KOMPUTER', 'L26-L2', '2023-03-10', '2023-01-30', 'LAB1', 'R1', 'BAIK', 0),
(16, 'ewtrr', '123233.234.', '2023-01-30', '2023-01-30', 'LAB1', 'R2', 'BAIK', 0),
(17, 'keyboard', 'l24-56', '2023-02-10', '2023-02-03', 'LAB1', 'R1', 'BAIK', 0),
(26, 'keyboard', 'l24-56', '0000-00-00', '2023-03-10', 'LAB1', 'R1', 'BAIK', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

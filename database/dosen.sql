-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2023 pada 15.11
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
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosenmember`
--

CREATE TABLE `dosenmember` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `nip` int(15) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswamember`
--

CREATE TABLE `mahasiswamember` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswamember`
--

INSERT INTO `mahasiswamember` (`id`, `nama`, `nim`, `alamat`) VALUES
(1, 'Muhammad Joko K', '2215354099', 'Perumahan Merak No 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usermember`
--

CREATE TABLE `usermember` (
  `id` int(11) NOT NULL,
  `usertable` varchar(10) NOT NULL,
  `passtable` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `usermember`
--

INSERT INTO `usermember` (`id`, `usertable`, `passtable`) VALUES
(1, 'dosen', 2004),
(2, 'mahasiswa', 1234);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosenmember`
--
ALTER TABLE `dosenmember`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswamember`
--
ALTER TABLE `mahasiswamember`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usermember`
--
ALTER TABLE `usermember`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosenmember`
--
ALTER TABLE `dosenmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswamember`
--
ALTER TABLE `mahasiswamember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usermember`
--
ALTER TABLE `usermember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

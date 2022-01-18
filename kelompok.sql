-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 22.29
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` int(6) NOT NULL,
  `usia` int(2) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `npm`, `usia`, `gambar`) VALUES
(1, 'Raihan Alwi Noer', 55419249, 20, 'assets/css/images/alwi.jpg'),
(2, 'Romi Ariyono Hariyadi', 55419748, 20, 'assets/css/images/testi2.jpg'),
(3, 'Karin Deviana', 53419225, 0, 'assets/css/images/testi3.jpg'),
(4, 'Raka Nugraha', 55419285, 1, 'assets/css/images/testi2.jpg'),
(5, 'Raudhi Achmad Aufani', 55419343, 0, 'assets/css/images/testi2.jpg'),
(6, 'Adi Indra  Irwanto', 50419151, 1, 'assets/css/images/testi2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(10) NOT NULL,
  `gambar_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `gambar_menu`) VALUES
(1, 'Indomie', 'assets/css/images/menu3.jpg'),
(2, 'Bakmie', 'assets/css/images/menu3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'ini tentang kami', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n               Phasellus tellus lectus, cursus sit amet eros in, lacinia semper est. \r\n               Nam dictum ex sed mauris suscipit facilisis. Cras sed diam cursus, placerat nisl et, suscipit augue. \r\n               Maecenas fringilla consectetur metus, sed auctor ex volutpat quis. \r\n               Suspendisse eu mauris ac lorem ultrices ullamcorper non eu turpis. \r\n               Morbi efficitur justo id laoreet bibendum. Sed nec maximus felis, ut luctus neque. Fusce et justo non est bibendum volutpat. \r\n               Mauris ullamcorper luctus eros, at porttitor libero feugiat sed. Sed suscipit dignissim sapien id imperdiet. \r\n               Nunc quis nibh nulla.', 'assets/css/images/gourmet3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

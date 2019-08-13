-- Host: localhost:3306
-- Generation Time: 13 Agu 2019 pada 15.00
-- Versi Server: 10.1.38-MariaDB-0+deb9u1
-- PHP Version: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `asuma`
--
DROP DATABASE `asuma`;
CREATE DATABASE `asuma`;

--
-- User: `asuma`
--
DROP USER 'asuma';
CREATE USER 'asuma' IDENTIFIED BY 'asuma';
GRANT ALL PRIVILEGES ON `asuma`.* TO 'asuma';

-- --------------------------------------------------------
USE `asuma`;

--
-- Struktur dari tabel `surat_umum`
--

CREATE TABLE `surat_umum` (
  `id` int(11) NOT NULL,
  `no` bigint(20) NOT NULL,
  `no_agenda` varchar(50) NOT NULL,
  `tanggal_terima` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` varchar(255) NOT NULL,
  `hal` text NOT NULL,
  `asal` varchar(255) NOT NULL,
  `batas_waktu` int(11) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_disposisi` varchar(255) NOT NULL,
  `kepada_disposisi` text NOT NULL,
  `klasifikasi_disposisi` varchar(100) NOT NULL,
  `sifat_disposisi` varchar(100) NOT NULL,
  `isi_disposisi` text NOT NULL,
  `catatan_disposisi` text NOT NULL,
  `koordinator_disposisi` varchar(255) NOT NULL,
  `tgl_disposisi_kasi` varchar(255) NOT NULL,
  `kepada_disposisi_kasi` text NOT NULL,
  `catatan_disposisi_kasi` text NOT NULL,
  `perekam` varchar(100) NOT NULL,
  `agenda` varchar(30) NOT NULL,
  `tgl_agenda_dir` varchar(255) NOT NULL,
  `isi_sesdit` text NOT NULL,
  `sumber` varchar(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `iku` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_umum`
--
ALTER TABLE `surat_umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_agenda` (`no_agenda`),
  ADD KEY `batas_waktu` (`batas_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_umum`
--
ALTER TABLE `surat_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

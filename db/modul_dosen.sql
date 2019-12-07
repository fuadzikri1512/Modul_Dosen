-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2019 pada 08.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul_dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gelar` varchar(32) NOT NULL,
  `nidk` int(18) NOT NULL,
  `email` varchar(64) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `keahlian` text NOT NULL,
  `jabatan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul_pembelajaran`
--

CREATE TABLE `modul_pembelajaran` (
  `id` int(11) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `jumlah_pertemuan` int(5) NOT NULL,
  `jumlah_mahasiswa` int(5) NOT NULL,
  `tahun` date NOT NULL,
  `prodi` varchar(32) NOT NULL,
  `file` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembicara`
--

CREATE TABLE `pembicara` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(64) NOT NULL,
  `bidang` varchar(64) NOT NULL,
  `bukti_pendukung` varchar(64) NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(9) NOT NULL,
  `tingkat_pendidikan` varchar(64) NOT NULL,
  `nama_pt` varchar(64) NOT NULL,
  `tahun_masuk` date NOT NULL,
  `tahun_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modul_pembelajaran`
--
ALTER TABLE `modul_pembelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembicara`
--
ALTER TABLE `pembicara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `modul_pembelajaran`
--
ALTER TABLE `modul_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembicara`
--
ALTER TABLE `pembicara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 02:12 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `jenis_kegiatan` varchar(250) NOT NULL,
  `tempat_kegiatan` varchar(250) NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_skripsi`
--

CREATE TABLE `bimbingan_skripsi` (
  `id` int(11) NOT NULL,
  `judul_ta` varchar(250) NOT NULL,
  `nama_mahasiswa` varchar(250) NOT NULL,
  `tahun` date NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
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
-- Table structure for table `exp_project`
--

CREATE TABLE `exp_project` (
  `id` int(20) NOT NULL,
  `nama_project` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `tahun` datetime NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exp_researchoutcome`
--

CREATE TABLE `exp_researchoutcome` (
  `id` int(11) NOT NULL,
  `output` varchar(250) NOT NULL,
  `tahun` date NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `berkas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exp_writing`
--

CREATE TABLE `exp_writing` (
  `id` int(11) NOT NULL,
  `tulisan_ilmiah` varchar(250) NOT NULL,
  `seminar` varchar(250) NOT NULL,
  `jumlah_sitasi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modul_pembelajaran`
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
-- Table structure for table `pembicara`
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
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(9) NOT NULL,
  `tingkat_pendidikan` varchar(64) NOT NULL,
  `nama_pt` varchar(64) NOT NULL,
  `tahun_masuk` date NOT NULL,
  `tahun_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id` int(11) NOT NULL,
  `nama_sertifikat` varchar(250) NOT NULL,
  `disertifikasi_oleh` varchar(250) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_project`
--
ALTER TABLE `exp_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_researchoutcome`
--
ALTER TABLE `exp_researchoutcome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_writing`
--
ALTER TABLE `exp_writing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul_pembelajaran`
--
ALTER TABLE `modul_pembelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembicara`
--
ALTER TABLE `pembicara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exp_project`
--
ALTER TABLE `exp_project`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exp_researchoutcome`
--
ALTER TABLE `exp_researchoutcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exp_writing`
--
ALTER TABLE `exp_writing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modul_pembelajaran`
--
ALTER TABLE `modul_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembicara`
--
ALTER TABLE `pembicara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

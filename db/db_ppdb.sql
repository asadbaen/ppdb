-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 03:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `password`) VALUES
(1, 'haizaulya26@gmail.com', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir_id` int(15) NOT NULL,
  `tanggal_lahir_id` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `telepon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data orang tua`
--

CREATE TABLE `tb_data orang tua` (
  `id` int(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` int(11) NOT NULL,
  `agama` enum('islam','non islam') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` enum('islam','non islam') NOT NULL,
  `pekerjaan_ibu` int(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_siswa`
--

CREATE TABLE `tb_data_siswa` (
  `id_peserta` int(15) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` enum('islam','non islam') NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_siswa`
--

INSERT INTO `tb_data_siswa` (`id_peserta`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `ayah`, `ibu`) VALUES
(1, 'haiza', 'rembang', '2023-05-26', 'perempuan', 'islam', 'dshv', 'hjegfuwe'),
(2, 'taehyung', 'korsel', '2023-05-09', 'laki-laki', 'non islam', 'jhdcgu', 'jhwsgdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir_id` int(15) NOT NULL,
  `tanggal_lahir_id` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `telepon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis kelamin`
--

CREATE TABLE `tb_jenis kelamin` (
  `id` int(15) NOT NULL,
  `laki_laki` varchar(15) NOT NULL,
  `perempuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta didik`
--

CREATE TABLE `tb_peserta didik` (
  `id` int(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir_id` int(20) NOT NULL,
  `tanggal_lahir_id` date NOT NULL,
  `jenis_kelamin_id` int(15) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `ayah_id` int(11) NOT NULL,
  `ibu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggal lahir`
--

CREATE TABLE `tb_tanggal lahir` (
  `id` int(15) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `bulan` int(15) NOT NULL,
  `tahun` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat lahir`
--

CREATE TABLE `tb_tempat lahir` (
  `id` int(15) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin123'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tempat_lahir_id` (`tempat_lahir_id`),
  ADD KEY `tanggal_lahir_id` (`tanggal_lahir_id`);

--
-- Indexes for table `tb_data orang tua`
--
ALTER TABLE `tb_data orang tua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data_siswa`
--
ALTER TABLE `tb_data_siswa`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tempat_lahir_id` (`tempat_lahir_id`),
  ADD KEY `tanggal_lahir_id` (`tanggal_lahir_id`);

--
-- Indexes for table `tb_jenis kelamin`
--
ALTER TABLE `tb_jenis kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_peserta didik`
--
ALTER TABLE `tb_peserta didik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tempat_lahir_id` (`tempat_lahir_id`),
  ADD KEY `tanggal_lahir_id` (`tanggal_lahir_id`),
  ADD KEY `jenis_kelamin_id` (`jenis_kelamin_id`),
  ADD KEY `ayah_id` (`ayah_id`),
  ADD KEY `ibu_id` (`ibu_id`);

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tanggal lahir`
--
ALTER TABLE `tb_tanggal lahir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tempat lahir`
--
ALTER TABLE `tb_tempat lahir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_data orang tua`
--
ALTER TABLE `tb_data orang tua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_data_siswa`
--
ALTER TABLE `tb_data_siswa`
  MODIFY `id_peserta` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

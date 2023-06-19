-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 01:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `access_menu`
--

CREATE TABLE `access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_menu`
--

INSERT INTO `access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_ayah` int(11) DEFAULT NULL,
  `id_ibu` int(11) DEFAULT NULL,
  `id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `id_siswa`, `id_ayah`, `id_ibu`, `id_profile`) VALUES
(3, 22, 6, 5, 1),
(17, 50, 34, 33, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id_profile` int(11) NOT NULL,
  `nama_file` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id_profile`, `nama_file`, `created_at`) VALUES
(1, '5fe8924d-1d45-4a98-93b1-c6356d942270.jpg', '2023-06-19 22:21:10'),
(8, '20230620005144_2023_Tue_1.jpg', '2023-06-19 22:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `agama_id` int(11) NOT NULL,
  `nama_agama` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`agama_id`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Hindu'),
(3, 'Kristen'),
(4, 'Katolik'),
(5, 'Budha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id_ayah` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_id` int(11) NOT NULL,
  `kewarganegaraan_ayah` varchar(125) NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `telepon_ayah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ayah`
--

INSERT INTO `tb_ayah` (`id_ayah`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `agama_id`, `kewarganegaraan_ayah`, `pekerjaan_id`, `pendidikan_id`, `telepon_ayah`) VALUES
(6, 'asdasd', 'asdada', '2023-06-14', 1, 'asdasd', 6, 2, 123123),
(28, 'asdad', 'asdada', '2023-05-31', 3, 'asdasd', 7, 2, 23131),
(34, 'asdasdas', 'adasda', '2023-06-11', 2, 'sdasd', 7, 4, 23123);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_siswa`
--

CREATE TABLE `tb_data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin_id` int(11) NOT NULL,
  `agama_id` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jml_saudara` int(11) NOT NULL,
  `kewarganegaraan_siswa` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_data_siswa`
--

INSERT INTO `tb_data_siswa` (`id_siswa`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin_id`, `agama_id`, `anak_ke`, `jml_saudara`, `kewarganegaraan_siswa`) VALUES
(22, 'Haiza Ulya', 'Rembang', '2023-05-29', 2, 1, 2, 3, 'Indonesia'),
(44, 'asdasd asdasda', 'asdasda', '2023-05-30', 1, 3, 21, 123, '12adadsa'),
(50, 'sadasd asdasda', 'adsadsas', '2023-06-07', 2, 2, 212, 1213, 'assdad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_id` int(11) NOT NULL,
  `kewarganegaraan_ibu` varchar(125) NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `telepon_ibu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `agama_id`, `kewarganegaraan_ibu`, `pekerjaan_id`, `pendidikan_id`, `telepon_ibu`) VALUES
(5, 'adsasda', 'sdaasda', '2023-05-29', 1, 'asdasda', 5, 1, 2313113),
(27, 'adasda', 'adasda', '2023-06-07', 3, 'asdad', 7, 2, 21311),
(33, 'sadasd', 'asdasda', '2023-06-06', 2, 'asdasda', 7, 4, 23112312);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE `tb_jenis_kelamin` (
  `jenis_kelamin_id` int(11) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`jenis_kelamin_id`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`pekerjaan_id`, `nama_pekerjaan`) VALUES
(1, 'Dokter'),
(2, 'Insinyur'),
(3, 'Akuntan'),
(4, 'Guru'),
(5, 'Programmer'),
(6, 'Desainer'),
(7, 'Penyanyi'),
(8, 'Penulis'),
(9, 'Pramugari'),
(10, 'Polisi'),
(11, 'PNS'),
(12, 'Wirausaha'),
(13, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`pendidikan_id`, `jenjang_pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'D3'),
(5, 'S1'),
(6, 'S2'),
(7, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$9JV2NjaCQvaqoWXU4.VtDevAHSkMPcrejDEzk3AeFELbaRKrQO9cC', 2, 1, 1684904789),
(2, 'Administrator', 'admin@gmail.com', '$2y$10$shH2mh8LK5jrzm72JxCo1.aVBPW0Pq/2Len4eHtu7P9cTwfZjfIwq', 1, 1, 1684918702);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `user_menu_id` int(11) NOT NULL,
  `menu` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`user_menu_id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Customers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_menu`
--
ALTER TABLE `access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`agama_id`);

--
-- Indexes for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indexes for table `tb_data_siswa`
--
ALTER TABLE `tb_data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  ADD PRIMARY KEY (`jenis_kelamin_id`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`pekerjaan_id`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`user_menu_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_menu`
--
ALTER TABLE `access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `agama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  MODIFY `id_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_data_siswa`
--
ALTER TABLE `tb_data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  MODIFY `jenis_kelamin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `user_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_data_siswa`
--
ALTER TABLE `tb_data_siswa`
  ADD CONSTRAINT `tb_data_siswa_ibfk_2` FOREIGN KEY (`agama_id`) REFERENCES `tb_agama` (`agama_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

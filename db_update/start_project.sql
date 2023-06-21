-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2023 at 07:02 PM
-- Server version: 10.11.2-MariaDB-1
-- PHP Version: 8.1.12-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ari`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1','2') NOT NULL COMMENT '0 = Pending, 1 = Active, 2 = Suspend',
  `sts_akun` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `id_desa` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas_ruanngan`
--

CREATE TABLE `tbl_fasilitas_ruanngan` (
  `id_fasilitas_ruangan` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `fasilitas_ruangan` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gedung`
--

CREATE TABLE `tbl_gedung` (
  `id_gedung` int(11) NOT NULL,
  `gedung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_ruangan`
--

CREATE TABLE `tbl_group_ruangan` (
  `id_group_ruangan` int(11) NOT NULL,
  `group_ruangan` varchar(100) NOT NULL,
  `id_jenis_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `id_identitas` int(11) NOT NULL,
  `identitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_ruangan`
--

CREATE TABLE `tbl_jenis_ruangan` (
  `id_jenis_ruangan` int(11) NOT NULL,
  `jenis_ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang_pendidikan`
--

CREATE TABLE `tbl_jenjang_pendidikan` (
  `id_jenjang_pendidikan` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan_pendidikan`
--

CREATE TABLE `tbl_jurusan_pendidikan` (
  `id_jurusan_pendidikan` int(11) NOT NULL,
  `id_jenjang_pendidikan` int(11) NOT NULL,
  `jurusan_pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kabupaten`
--

CREATE TABLE `tbl_kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas_rawatan`
--

CREATE TABLE `tbl_kelas_rawatan` (
  `id_kelas_rawatan` int(11) NOT NULL,
  `kelas_rawatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelompok_ruangan`
--

CREATE TABLE `tbl_kelompok_ruangan` (
  `id_kelompok_ruangan` int(11) NOT NULL,
  `kelompok_ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lantai`
--

CREATE TABLE `tbl_lantai` (
  `id_lantai` int(11) NOT NULL,
  `lantai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_role`
--

CREATE TABLE `tbl_mst_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `no_register` int(11) NOT NULL,
  `tgl_daftar` timestamp NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `is_ugd` enum('0','1') NOT NULL COMMENT '0 = No, 1 = Yes',
  `id_jenis_rawatan` enum('1','2') NOT NULL COMMENT '1 = Ranap, 2 = Rajal (Include UGD)',
  `laka_lantas` enum('0','1') NOT NULL COMMENT '0 = No, 1 = Yes',
  `tgl_berobat` timestamp NULL DEFAULT NULL,
  `is_confrim` enum('0','1') NOT NULL COMMENT '0 = No, 1 = Yes',
  `id_ruangan_bed` int(11) NOT NULL,
  `is_cancled` enum('0','1') NOT NULL COMMENT '0 = No, 1 = Yes',
  `ket_cancled` enum('1','2') NOT NULL COMMENT '1 = By User, 2 = By Sistem',
  `id_dokter` int(11) NOT NULL,
  `sts_selesai` enum('0','1') NOT NULL COMMENT '0 = No, 1 = Yes',
  `tgl_selesai` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran_detail_perawat`
--

CREATE TABLE `tbl_pendaftaran_detail_perawat` (
  `id_detail_perawat` int(11) NOT NULL,
  `no_register` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL,
  `id_group_ruangan` int(11) NOT NULL,
  `no_ruangan` int(100) NOT NULL,
  `id_kelas_rawatan` int(11) NOT NULL,
  `id_kelompok_ruangan` int(11) NOT NULL,
  `id_gedung` int(11) NOT NULL,
  `id_lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan_bed`
--

CREATE TABLE `tbl_ruangan_bed` (
  `id_ruangan_bed` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `kondisi` enum('0','1') NOT NULL COMMENT '0 = Rusak, 1 = Baik'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_kawin`
--

CREATE TABLE `tbl_status_kawin` (
  `id_status_kawin` int(11) NOT NULL,
  `status_kawin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_pegawai`
--

CREATE TABLE `tbl_status_pegawai` (
  `id_status_pegawai` int(11) NOT NULL,
  `status_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sts_akun`
--

CREATE TABLE `tbl_sts_akun` (
  `id_status_akun` int(11) NOT NULL,
  `status_akun` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit_kerja`
--

CREATE TABLE `tbl_unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_mr` varchar(100) NOT NULL,
  `kd_dpjp` varchar(20) NOT NULL,
  `gelar_depan` varchar(50) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `gelar_blk` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('1','2') NOT NULL COMMENT '1 = Laki - Laki, 2 = Perempuan',
  `id_status_kawin` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `id_jenjang_pendidikan` int(11) NOT NULL,
  `id_jurusan_pendidikan` int(11) NOT NULL,
  `sts_group` enum('1','2') NOT NULL COMMENT '1 = Pasien, 2 = Pegawai',
  `id_identitas` int(11) NOT NULL,
  `no_identitas` varchar(25) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `riwayat_alergi_obat` varchar(255) NOT NULL,
  `sts_user` enum('0','1') NOT NULL COMMENT '0 = non-active, 1 active (default)',
  `date_register` date NOT NULL,
  `user_registered` int(11) NOT NULL,
  `is_difabel` enum('0','1') NOT NULL COMMENT '0 = no, 1 = yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tbl_fasilitas_ruanngan`
--
ALTER TABLE `tbl_fasilitas_ruanngan`
  ADD PRIMARY KEY (`id_fasilitas_ruangan`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tbl_gedung`
--
ALTER TABLE `tbl_gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `tbl_group_ruangan`
--
ALTER TABLE `tbl_group_ruangan`
  ADD PRIMARY KEY (`id_group_ruangan`),
  ADD KEY `id_jenis_ruangan` (`id_jenis_ruangan`);

--
-- Indexes for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `tbl_jenis_ruangan`
--
ALTER TABLE `tbl_jenis_ruangan`
  ADD PRIMARY KEY (`id_jenis_ruangan`);

--
-- Indexes for table `tbl_jenjang_pendidikan`
--
ALTER TABLE `tbl_jenjang_pendidikan`
  ADD PRIMARY KEY (`id_jenjang_pendidikan`);

--
-- Indexes for table `tbl_jurusan_pendidikan`
--
ALTER TABLE `tbl_jurusan_pendidikan`
  ADD PRIMARY KEY (`id_jurusan_pendidikan`),
  ADD KEY `id_jenjang_pendidikan` (`id_jenjang_pendidikan`);

--
-- Indexes for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `tbl_kelas_rawatan`
--
ALTER TABLE `tbl_kelas_rawatan`
  ADD PRIMARY KEY (`id_kelas_rawatan`);

--
-- Indexes for table `tbl_kelompok_ruangan`
--
ALTER TABLE `tbl_kelompok_ruangan`
  ADD PRIMARY KEY (`id_kelompok_ruangan`);

--
-- Indexes for table `tbl_lantai`
--
ALTER TABLE `tbl_lantai`
  ADD PRIMARY KEY (`id_lantai`);

--
-- Indexes for table `tbl_mst_role`
--
ALTER TABLE `tbl_mst_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`no_register`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_ruangan_bed` (`id_ruangan_bed`);

--
-- Indexes for table `tbl_pendaftaran_detail_perawat`
--
ALTER TABLE `tbl_pendaftaran_detail_perawat`
  ADD PRIMARY KEY (`id_detail_perawat`),
  ADD KEY `no_register` (`no_register`),
  ADD KEY `id_perawat` (`id_perawat`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`),
  ADD KEY `id_group_ruangan` (`id_group_ruangan`),
  ADD KEY `id_kelas_rawatan` (`id_kelas_rawatan`),
  ADD KEY `id_kelompok_ruangan` (`id_kelompok_ruangan`),
  ADD KEY `id_gedung` (`id_gedung`),
  ADD KEY `id_lantai` (`id_lantai`);

--
-- Indexes for table `tbl_ruangan_bed`
--
ALTER TABLE `tbl_ruangan_bed`
  ADD PRIMARY KEY (`id_ruangan_bed`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tbl_status_kawin`
--
ALTER TABLE `tbl_status_kawin`
  ADD PRIMARY KEY (`id_status_kawin`);

--
-- Indexes for table `tbl_status_pegawai`
--
ALTER TABLE `tbl_status_pegawai`
  ADD PRIMARY KEY (`id_status_pegawai`);

--
-- Indexes for table `tbl_sts_akun`
--
ALTER TABLE `tbl_sts_akun`
  ADD PRIMARY KEY (`id_status_akun`);

--
-- Indexes for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_registered` (`user_registered`),
  ADD KEY `id_identitas` (`id_identitas`),
  ADD KEY `id_jurusan_pendidikan` (`id_jurusan_pendidikan`),
  ADD KEY `id_jenjang_pendidikan` (`id_jenjang_pendidikan`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_status_kawin` (`id_status_kawin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fasilitas_ruanngan`
--
ALTER TABLE `tbl_fasilitas_ruanngan`
  MODIFY `id_fasilitas_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gedung`
--
ALTER TABLE `tbl_gedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_group_ruangan`
--
ALTER TABLE `tbl_group_ruangan`
  MODIFY `id_group_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis_ruangan`
--
ALTER TABLE `tbl_jenis_ruangan`
  MODIFY `id_jenis_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenjang_pendidikan`
--
ALTER TABLE `tbl_jenjang_pendidikan`
  MODIFY `id_jenjang_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jurusan_pendidikan`
--
ALTER TABLE `tbl_jurusan_pendidikan`
  MODIFY `id_jurusan_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelas_rawatan`
--
ALTER TABLE `tbl_kelas_rawatan`
  MODIFY `id_kelas_rawatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelompok_ruangan`
--
ALTER TABLE `tbl_kelompok_ruangan`
  MODIFY `id_kelompok_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lantai`
--
ALTER TABLE `tbl_lantai`
  MODIFY `id_lantai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mst_role`
--
ALTER TABLE `tbl_mst_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran_detail_perawat`
--
ALTER TABLE `tbl_pendaftaran_detail_perawat`
  MODIFY `id_detail_perawat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ruangan_bed`
--
ALTER TABLE `tbl_ruangan_bed`
  MODIFY `id_ruangan_bed` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status_kawin`
--
ALTER TABLE `tbl_status_kawin`
  MODIFY `id_status_kawin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status_pegawai`
--
ALTER TABLE `tbl_status_pegawai`
  MODIFY `id_status_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sts_akun`
--
ALTER TABLE `tbl_sts_akun`
  MODIFY `id_status_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

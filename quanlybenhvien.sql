-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 09:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybenhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(20) NOT NULL,
  `ad_ho` varchar(200) DEFAULT NULL,
  `ad_ten` varchar(200) DEFAULT NULL,
  `ad_email` varchar(200) DEFAULT NULL,
  `ad_password` varchar(200) DEFAULT NULL,
  `ad_avatar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bacsi`
--

CREATE TABLE `bacsi` (
  `bs_id` int(20) NOT NULL,
  `bs_ho` varchar(200) DEFAULT NULL,
  `bs_ten` varchar(200) DEFAULT NULL,
  `bs_email` varchar(200) DEFAULT NULL,
  `bs_password` varchar(200) DEFAULT NULL,
  `bs_vitri` varchar(200) DEFAULT NULL,
  `bs_mabacsi` varchar(200) DEFAULT NULL,
  `bs_avatar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `benhnhan`
--

CREATE TABLE `benhnhan` (
  `bn_id` int(20) NOT NULL,
  `bn_ho` varchar(200) DEFAULT NULL,
  `bn_ten` varchar(200) DEFAULT NULL,
  `bn_ngaysinh` varchar(200) DEFAULT NULL,
  `bn_tuoi` varchar(200) DEFAULT NULL,
  `bn_mabenhnhan` varchar(200) DEFAULT NULL,
  `bn_diachi` varchar(200) DEFAULT NULL,
  `bn_sodienthoai` varchar(200) DEFAULT NULL,
  `bn_tinhtrang` varchar(200) DEFAULT NULL,
  `bn_ngaykham` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `bn_trieuchung` varchar(200) DEFAULT NULL,
  `bn_xuatvien` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `benhnhan_chuyenvien`
--

CREATE TABLE `benhnhan_chuyenvien` (
  `bncv_id` int(20) NOT NULL,
  `bncv_tenbenhvien` varchar(200) DEFAULT NULL,
  `bncv_ngaychuyen` varchar(200) DEFAULT NULL,
  `bncv_ten` varchar(200) DEFAULT NULL,
  `bncv_mabenhnhan` varchar(200) DEFAULT NULL,
  `bncv_tinhtrang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosobenhan`
--

CREATE TABLE `hosobenhan` (
  `hs_id` int(20) NOT NULL,
  `hs_mahoso` varchar(200) DEFAULT NULL,
  `hs_tenbenhnhan` varchar(200) DEFAULT NULL,
  `hs_diachi` varchar(200) DEFAULT NULL,
  `hs_tuoi` varchar(200) DEFAULT NULL,
  `hs_trieuchung` varchar(200) DEFAULT NULL,
  `hs_mabenhnhan` varchar(200) DEFAULT NULL,
  `hs_donthuoc` varchar(200) DEFAULT NULL,
  `hs_ngay` timestamp(4) NOT NULL DEFAULT current_timestamp(4) ON UPDATE current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaithuoc`
--

CREATE TABLE `loaithuoc` (
  `lt_id` int(20) NOT NULL,
  `lt_tenloaithuoc` varchar(200) DEFAULT NULL,
  `lt_nhacungcap` varchar(200) DEFAULT NULL,
  `lt_ghichu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `ncc_id` int(20) NOT NULL,
  `ncc_manhacungcap` varchar(200) DEFAULT NULL,
  `ncc_ten` varchar(200) DEFAULT NULL,
  `ncc_diachi` varchar(200) DEFAULT NULL,
  `ncc_email` varchar(200) DEFAULT NULL,
  `ncc_sodienthoai` varchar(200) DEFAULT NULL,
  `ncc_ghichu` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tk_id` int(20) NOT NULL,
  `tk_tennganhang` varchar(200) DEFAULT NULL,
  `tk_ghichu` text DEFAULT NULL,
  `tk_loaitaikhoan` varchar(200) DEFAULT NULL,
  `tk_sotaikhoan` varchar(200) DEFAULT NULL,
  `tk_sotien` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tainguyen`
--

CREATE TABLE `tainguyen` (
  `tn_id` int(20) NOT NULL,
  `tn_ten` varchar(200) DEFAULT NULL,
  `tn_ghichu` longtext DEFAULT NULL,
  `tn_nhacungcap` varchar(200) DEFAULT NULL,
  `tn_tinhtrang` varchar(200) DEFAULT NULL,
  `tn_vitri` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thietbi`
--

CREATE TABLE `thietbi` (
  `tb_id` int(20) NOT NULL,
  `tb_mathietbi` varchar(200) DEFAULT NULL,
  `tb_ten` varchar(200) DEFAULT NULL,
  `tb_nhacungcap` varchar(200) DEFAULT NULL,
  `tb_ghichu` longtext DEFAULT NULL,
  `tb_tinhtrang` varchar(200) DEFAULT NULL,
  `tb_soluong` varchar(200) DEFAULT NULL,
  `tb_vitri` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuoc`
--

CREATE TABLE `thuoc` (
  `t_id` int(20) NOT NULL,
  `t_ten` varchar(200) DEFAULT NULL,
  `t_mavach` varchar(200) DEFAULT NULL,
  `t_ghichu` longtext DEFAULT NULL,
  `t_soluong` varchar(200) DEFAULT NULL,
  `t_tenloaithuoc` varchar(200) DEFAULT NULL,
  `t_nhacungcap` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`bn_id`);

--
-- Indexes for table `benhnhan_chuyenvien`
--
ALTER TABLE `benhnhan_chuyenvien`
  ADD PRIMARY KEY (`bncv_id`);

--
-- Indexes for table `hosobenhan`
--
ALTER TABLE `hosobenhan`
  ADD PRIMARY KEY (`hs_id`);

--
-- Indexes for table `loaithuoc`
--
ALTER TABLE `loaithuoc`
  ADD PRIMARY KEY (`lt_id`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`ncc_id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tk_id`);

--
-- Indexes for table `tainguyen`
--
ALTER TABLE `tainguyen`
  ADD PRIMARY KEY (`tn_id`);

--
-- Indexes for table `thietbi`
--
ALTER TABLE `thietbi`
  ADD PRIMARY KEY (`tb_id`);

--
-- Indexes for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `bs_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `bn_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `benhnhan_chuyenvien`
--
ALTER TABLE `benhnhan_chuyenvien`
  MODIFY `bncv_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hosobenhan`
--
ALTER TABLE `hosobenhan`
  MODIFY `hs_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaithuoc`
--
ALTER TABLE `loaithuoc`
  MODIFY `lt_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `ncc_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `tk_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tainguyen`
--
ALTER TABLE `tainguyen`
  MODIFY `tn_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thietbi`
--
ALTER TABLE `thietbi`
  MODIFY `tb_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuoc`
--
ALTER TABLE `thuoc`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

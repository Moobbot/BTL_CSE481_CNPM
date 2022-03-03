-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 03:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_xekhach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuyenxe`
--

CREATE TABLE `chuyenxe` (
  `ma_chuyenxe` int(11) NOT NULL,
  `ma_xe` int(11) NOT NULL,
  `ma_tuyenxe` int(11) NOT NULL,
  `ghetrong_chuyenxe` int(11) NOT NULL,
  `giatien_chuyenxe` int(11) NOT NULL,
  `giodi_chuyenxe` time NOT NULL,
  `gioden_chuyenxe` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhaxe`
--

CREATE TABLE `nhaxe` (
  `ma_nhaxe` int(11) NOT NULL,
  `ten_nhaxe` varchar(30) NOT NULL,
  `sdt_nhaxe` varchar(11) NOT NULL,
  `diachi_nhaxe` text NOT NULL,
  `mota_nhaxe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ten_taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`ten_taikhoan`, `matkhau`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tuyenduong`
--

CREATE TABLE `tuyenduong` (
  `ma_tuyenduong` int(11) NOT NULL,
  `diemdi_tuyenduong` text NOT NULL,
  `diemden_tuyenduong` text NOT NULL,
  `km_tuyenduong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vexe`
--

CREATE TABLE `vexe` (
  `ma_ve` int(11) NOT NULL,
  `ma_chuyenxe` int(11) NOT NULL,
  `diendon_khach` varchar(50) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `hoten_khach` varchar(50) NOT NULL,
  `sdt_khach` varchar(11) NOT NULL,
  `email_khach` varchar(50) NOT NULL,
  `cmt_khach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `ma_xe` int(11) NOT NULL,
  `ma_nhaxe` int(11) NOT NULL,
  `bienso_xe` varchar(10) NOT NULL,
  `soghe_xe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD PRIMARY KEY (`ma_chuyenxe`);

--
-- Indexes for table `nhaxe`
--
ALTER TABLE `nhaxe`
  ADD PRIMARY KEY (`ma_nhaxe`);

--
-- Indexes for table `tuyenduong`
--
ALTER TABLE `tuyenduong`
  ADD PRIMARY KEY (`ma_tuyenduong`);

--
-- Indexes for table `vexe`
--
ALTER TABLE `vexe`
  ADD PRIMARY KEY (`ma_ve`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`ma_xe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
  MODIFY `ma_chuyenxe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhaxe`
--
ALTER TABLE `nhaxe`
  MODIFY `ma_nhaxe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tuyenduong`
--
ALTER TABLE `tuyenduong`
  MODIFY `ma_tuyenduong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vexe`
--
ALTER TABLE `vexe`
  MODIFY `ma_ve` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `ma_xe` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 05, 2022 lúc 10:31 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_xekhach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenxe`
--

CREATE TABLE `chuyenxe` (
  `ma_chuyenxe` int(11) NOT NULL,
  `ma_tuyenduong` int(11) NOT NULL,
  `giatien_chuyenxe` int(11) NOT NULL,
  `giodi_chuyenxe` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenxechay`
--

CREATE TABLE `chuyenxechay` (
  `ma_xe` int(11) NOT NULL,
  `ma_chuyenxe` int(11) NOT NULL,
  `ghetrong_chuyenxe` int(11) NOT NULL,
  `trangthai` enum('0','1','2','3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxe`
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
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ten_taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyenduong`
--

CREATE TABLE `tuyenduong` (
  `ma_tuyenduong` int(11) NOT NULL,
  `diemdi_tuyenduong` text NOT NULL,
  `diemden_tuyenduong` text NOT NULL,
  `hinhanh_tuyenduong` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vexe`
--

CREATE TABLE `vexe` (
  `ma_ve` int(11) NOT NULL,
  `ma_chuyenxe` int(11) NOT NULL,
  `diemdon_khach` varchar(50) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `hoten_khach` varchar(50) NOT NULL,
  `sdt_khach` varchar(11) NOT NULL,
  `email_khach` varchar(50) NOT NULL,
  `cmt_khach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `ma_xe` int(11) NOT NULL,
  `ma_nhaxe` int(11) NOT NULL,
  `bienso_xe` varchar(10) NOT NULL,
  `soghe_xe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD PRIMARY KEY (`ma_chuyenxe`),
  ADD KEY `foreign key1` (`ma_tuyenduong`);

--
-- Chỉ mục cho bảng `chuyenxechay`
--
ALTER TABLE `chuyenxechay`
  ADD KEY `foreign key2` (`ma_chuyenxe`),
  ADD KEY `foreign key3` (`ma_xe`);

--
-- Chỉ mục cho bảng `nhaxe`
--
ALTER TABLE `nhaxe`
  ADD PRIMARY KEY (`ma_nhaxe`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ten_taikhoan`);

--
-- Chỉ mục cho bảng `tuyenduong`
--
ALTER TABLE `tuyenduong`
  ADD PRIMARY KEY (`ma_tuyenduong`);

--
-- Chỉ mục cho bảng `vexe`
--
ALTER TABLE `vexe`
  ADD PRIMARY KEY (`ma_ve`),
  ADD KEY `foreign key4` (`ma_chuyenxe`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`ma_xe`),
  ADD KEY `ma_nhaxe` (`ma_nhaxe`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD CONSTRAINT `foreign key1` FOREIGN KEY (`ma_tuyenduong`) REFERENCES `tuyenduong` (`ma_tuyenduong`);

--
-- Các ràng buộc cho bảng `chuyenxechay`
--
ALTER TABLE `chuyenxechay`
  ADD CONSTRAINT `foreign key2` FOREIGN KEY (`ma_chuyenxe`) REFERENCES `chuyenxe` (`ma_chuyenxe`),
  ADD CONSTRAINT `foreign key3` FOREIGN KEY (`ma_xe`) REFERENCES `xe` (`ma_xe`);

--
-- Các ràng buộc cho bảng `vexe`
--
ALTER TABLE `vexe`
  ADD CONSTRAINT `foreign key4` FOREIGN KEY (`ma_chuyenxe`) REFERENCES `chuyenxe` (`ma_chuyenxe`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`ma_nhaxe`) REFERENCES `nhaxe` (`ma_nhaxe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

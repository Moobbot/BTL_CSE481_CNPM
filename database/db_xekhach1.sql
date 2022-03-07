-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 06, 2022 lúc 05:27 PM
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
  `ma_chuyenxe` int(11) UNSIGNED NOT NULL,
  `ma_tuyenduong` int(11) UNSIGNED NOT NULL,
  `giatien_chuyenxe` int(11) NOT NULL,
  `giodi_chuyenxe` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuyenxe`
--

INSERT INTO `chuyenxe` (`ma_chuyenxe`, `ma_tuyenduong`, `giatien_chuyenxe`, `giodi_chuyenxe`) VALUES
(1, 1, 55, '07:00:00'),
(2, 2, 60, '08:00:00'),
(3, 3, 60, '08:00:00'),
(4, 4, 70, '09:00:00'),
(5, 5, 60, '09:00:00'),
(6, 1, 55, '10:00:00'),
(7, 2, 60, '08:00:00'),
(8, 3, 60, '09:00:00'),
(9, 4, 70, '08:00:00'),
(10, 5, 60, '10:00:00'),
(11, 1, 55, '08:00:00'),
(12, 2, 60, '10:00:00'),
(13, 3, 60, '07:00:00'),
(14, 4, 70, '10:00:00'),
(15, 5, 60, '09:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenxechay`
--

CREATE TABLE `chuyenxechay` (
  `ma_xe` int(11) UNSIGNED NOT NULL,
  `ma_chuyenxe` int(11) UNSIGNED NOT NULL,
  `soghetrong` int(11) UNSIGNED NOT NULL,
  `trangthai` enum('0','1','2','3') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuyenxechay`
--

INSERT INTO `chuyenxechay` (`ma_xe`, `ma_chuyenxe`, `soghetrong`, `trangthai`) VALUES
(1, 1, 5, '0'),
(2, 2, 7, '0'),
(3, 3, 9, '0'),
(4, 4, 10, '0'),
(5, 5, 3, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxe`
--

CREATE TABLE `nhaxe` (
  `ma_nhaxe` int(11) UNSIGNED NOT NULL,
  `ten_nhaxe` varchar(30) NOT NULL,
  `sdt_nhaxe` varchar(11) NOT NULL,
  `diachi_nhaxe` text NOT NULL,
  `mota_nhaxe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhaxe`
--

INSERT INTO `nhaxe` (`ma_nhaxe`, `ten_nhaxe`, `sdt_nhaxe`, `diachi_nhaxe`, `mota_nhaxe`) VALUES
(1, '\"Nghĩa Huyền\"', '0941000565', '\"Hà Nội\"', '\"màu đỏ\"'),
(2, '\"Huyền Trang\"', '0944010565', '\"Bắc Ninh\"', '\"màu đen\"'),
(3, '\"Đức Chương\"', '0951888212', '\"Thái Bình\"', '\"màu trắng sữa\"'),
(4, '\"Ngô Phú\"', '0991222565', '\"Hà Nam \"', '\"màu hồng\"'),
(5, '\"Dương Kiên\"', '0951888865', '\"Hải Phòng\"', '\"màu xanh\"');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ten_taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ten_taikhoan`, `matkhau`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyenduong`
--

CREATE TABLE `tuyenduong` (
  `ma_tuyenduong` int(11) UNSIGNED NOT NULL,
  `diemdi_tuyenduong` text NOT NULL,
  `diemden_tuyenduong` text NOT NULL,
  `hinhanh_tuyenduong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tuyenduong`
--

INSERT INTO `tuyenduong` (`ma_tuyenduong`, `diemdi_tuyenduong`, `diemden_tuyenduong`, `hinhanh_tuyenduong`) VALUES
(1, 'Bắc Ninh', 'Hà Nội', 'https://goo.gl/maps/TczxAkApUoMBm9m1A'),
(2, 'Hà Nam ', 'Hải Phòng', 'https://goo.gl/maps/8q3TGmkdEburWHJPA'),
(3, 'Hà Nội ', 'Thái Bình', 'https://goo.gl/maps/FsABPTk3xP4zwysBA'),
(4, 'Hà Nam', 'Thái Bình', 'https://goo.gl/maps/8q3TGmkdEburWHJPA'),
(5, 'Bắc Ninh', 'Hải Phòng', 'https://goo.gl/maps/TczxAkApUoMBm9m1A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vexe`
--

CREATE TABLE `vexe` (
  `ma_ve` int(11) UNSIGNED NOT NULL,
  `ma_chuyenxe` int(11) UNSIGNED NOT NULL,
  `diemdon_khach` varchar(50) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `hoten_khach` varchar(50) NOT NULL,
  `sdt_khach` varchar(11) NOT NULL,
  `email_khach` varchar(50) NOT NULL,
  `cmt_khach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vexe`
--

INSERT INTO `vexe` (`ma_ve`, `ma_chuyenxe`, `diemdon_khach`, `gia_ve`, `hoten_khach`, `sdt_khach`, `email_khach`, `cmt_khach`) VALUES
(1, 1, 'Bắc Ninh', 20, 'Nguyễn Hoài An', '0945000156', 'hoaian@gmail.com', 120935000),
(2, 4, 'Hà Nam', 24, 'Nguyễn Đức Kiên', '0800001490', 'kien@gmail.com', 125900014),
(3, 3, 'Hà Nội', 40, 'Nguyễn Văn Phú', '0945000199', 'phu@gmail.com', 120000000),
(4, 2, 'Nguyễn Văn Long', 35, 'Ngô Đức Tâm', '0800001412', 'Tam@gmail.com', 125634823),
(5, 5, 'Bắc Ninh', 35, 'Phạm Quang Dương', '0945120156', 'duong.gmail.com', 120000011);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_chuyenxechay`
-- (See below for the actual view)
--
CREATE TABLE `vw_chuyenxechay` (
`ten_nhaxe` varchar(30)
,`bienso_xe` varchar(10)
,`ma_chuyenxe` int(11) unsigned
,`trangthai` enum('0','1','2','3')
,`diemdi_tuyenduong` text
,`diemden_tuyenduong` text
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_thongkeweb_chuyenxechay`
-- (See below for the actual view)
--
CREATE TABLE `vw_thongkeweb_chuyenxechay` (
`soluong` bigint(21)
,`giodi_chuyenxe` time
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_thongkeweb_nhaxe`
-- (See below for the actual view)
--
CREATE TABLE `vw_thongkeweb_nhaxe` (
`soluong` bigint(21)
,`ten_nhaxe` varchar(30)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_thongkeweb_ve`
-- (See below for the actual view)
--
CREATE TABLE `vw_thongkeweb_ve` (
`soluong` bigint(21)
,`ma_chuyenxe` int(11) unsigned
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_thongkeweb_xe`
-- (See below for the actual view)
--
CREATE TABLE `vw_thongkeweb_xe` (
`ma_nhaxe` int(11) unsigned
,`ten_nhaxe` varchar(30)
,`soluongxe` bigint(21)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `ma_xe` int(11) UNSIGNED NOT NULL,
  `ma_nhaxe` int(11) UNSIGNED NOT NULL,
  `bienso_xe` varchar(10) NOT NULL,
  `soghe_xe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`ma_xe`, `ma_nhaxe`, `bienso_xe`, `soghe_xe`) VALUES
(1, 1, '29B02199', 50),
(2, 2, '99C52512', 50),
(3, 3, '17D12256', 50),
(4, 4, '90B25258', 50),
(5, 5, '15B25278', 50),
(6, 1, '29B56599', 50),
(7, 2, '99B52523', 50),
(8, 3, '17B54621', 50),
(9, 4, '90B25299', 50),
(10, 5, '16B78722', 50);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_chuyenxechay`
--
DROP TABLE IF EXISTS `vw_chuyenxechay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_chuyenxechay`  AS SELECT `nhaxe`.`ten_nhaxe` AS `ten_nhaxe`, `xe`.`bienso_xe` AS `bienso_xe`, `chuyenxe`.`ma_chuyenxe` AS `ma_chuyenxe`, `chuyenxechay`.`trangthai` AS `trangthai`, `tuyenduong`.`diemdi_tuyenduong` AS `diemdi_tuyenduong`, `tuyenduong`.`diemden_tuyenduong` AS `diemden_tuyenduong` FROM ((((`nhaxe` join `xe`) join `tuyenduong`) join `chuyenxechay`) join `chuyenxe`) WHERE `nhaxe`.`ma_nhaxe` = `xe`.`ma_nhaxe` AND `xe`.`ma_xe` = `chuyenxechay`.`ma_xe` AND `chuyenxechay`.`ma_chuyenxe` = `chuyenxe`.`ma_chuyenxe` AND `chuyenxe`.`ma_tuyenduong` = `tuyenduong`.`ma_tuyenduong` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_thongkeweb_chuyenxechay`
--
DROP TABLE IF EXISTS `vw_thongkeweb_chuyenxechay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_thongkeweb_chuyenxechay`  AS SELECT count(`chuyenxe`.`ma_chuyenxe`) AS `soluong`, `chuyenxe`.`giodi_chuyenxe` AS `giodi_chuyenxe` FROM `chuyenxe` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_thongkeweb_nhaxe`
--
DROP TABLE IF EXISTS `vw_thongkeweb_nhaxe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_thongkeweb_nhaxe`  AS SELECT count(`nhaxe`.`ma_nhaxe`) AS `soluong`, `nhaxe`.`ten_nhaxe` AS `ten_nhaxe` FROM `nhaxe` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_thongkeweb_ve`
--
DROP TABLE IF EXISTS `vw_thongkeweb_ve`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_thongkeweb_ve`  AS SELECT count(`vexe`.`ma_ve`) AS `soluong`, `vexe`.`ma_chuyenxe` AS `ma_chuyenxe` FROM `vexe` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_thongkeweb_xe`
--
DROP TABLE IF EXISTS `vw_thongkeweb_xe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_thongkeweb_xe`  AS SELECT `nhaxe`.`ma_nhaxe` AS `ma_nhaxe`, `nhaxe`.`ten_nhaxe` AS `ten_nhaxe`, count(`xe`.`ma_xe`) AS `soluongxe` FROM (`nhaxe` join `xe`) WHERE `nhaxe`.`ma_nhaxe` = `xe`.`ma_nhaxe` ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD PRIMARY KEY (`ma_chuyenxe`),
  ADD KEY `ma_tuyenduong` (`ma_tuyenduong`);

--
-- Chỉ mục cho bảng `chuyenxechay`
--
ALTER TABLE `chuyenxechay`
  ADD KEY `ma_chuyenxe` (`ma_chuyenxe`),
  ADD KEY `ma_xe` (`ma_xe`);

--
-- Chỉ mục cho bảng `nhaxe`
--
ALTER TABLE `nhaxe`
  ADD PRIMARY KEY (`ma_nhaxe`);

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
  ADD KEY `ma_chuyenxe` (`ma_chuyenxe`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`ma_xe`),
  ADD KEY `ma_nhaxe` (`ma_nhaxe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chuyenxe`
--
ALTER TABLE `chuyenxe`
  MODIFY `ma_chuyenxe` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `nhaxe`
--
ALTER TABLE `nhaxe`
  MODIFY `ma_nhaxe` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tuyenduong`
--
ALTER TABLE `tuyenduong`
  MODIFY `ma_tuyenduong` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `vexe`
--
ALTER TABLE `vexe`
  MODIFY `ma_ve` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `ma_xe` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD CONSTRAINT `chuyenxe_ibfk_1` FOREIGN KEY (`ma_tuyenduong`) REFERENCES `tuyenduong` (`ma_tuyenduong`);

--
-- Các ràng buộc cho bảng `chuyenxechay`
--
ALTER TABLE `chuyenxechay`
  ADD CONSTRAINT `chuyenxechay_ibfk_1` FOREIGN KEY (`ma_chuyenxe`) REFERENCES `chuyenxe` (`ma_chuyenxe`),
  ADD CONSTRAINT `chuyenxechay_ibfk_2` FOREIGN KEY (`ma_xe`) REFERENCES `xe` (`ma_xe`);

--
-- Các ràng buộc cho bảng `vexe`
--
ALTER TABLE `vexe`
  ADD CONSTRAINT `vexe_ibfk_1` FOREIGN KEY (`ma_chuyenxe`) REFERENCES `chuyenxe` (`ma_chuyenxe`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`ma_nhaxe`) REFERENCES `nhaxe` (`ma_nhaxe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

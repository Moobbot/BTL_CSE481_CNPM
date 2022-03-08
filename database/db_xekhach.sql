-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 01:42 PM
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
  `ma_chuyenxe` int(11) UNSIGNED NOT NULL,
  `ma_tuyenduong` int(11) UNSIGNED NOT NULL,
  `giatien_chuyenxe` int(11) NOT NULL,
  `giodi_chuyenxe` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuyenxe`
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
-- Table structure for table `chuyenxechay`
--

CREATE TABLE `chuyenxechay` (
  `ma_xe` int(11) UNSIGNED NOT NULL,
  `ma_chuyenxe` int(11) UNSIGNED NOT NULL,
  `soghetrong` int(11) UNSIGNED NOT NULL,
  `trangthai` enum('0','1','2','3') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuyenxechay`
--

INSERT INTO `chuyenxechay` (`ma_xe`, `ma_chuyenxe`, `soghetrong`, `trangthai`) VALUES
(1, 1, 5, '0'),
(2, 2, 7, '0'),
(3, 3, 9, '0'),
(4, 4, 10, '0'),
(5, 5, 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxe`
--

CREATE TABLE `nhaxe` (
  `ma_nhaxe` int(11) UNSIGNED NOT NULL,
  `ten_nhaxe` varchar(30) NOT NULL,
  `sdt_nhaxe` varchar(11) NOT NULL,
  `diachi_nhaxe` text NOT NULL,
  `mota_nhaxe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhaxe`
--

INSERT INTO `nhaxe` (`ma_nhaxe`, `ten_nhaxe`, `sdt_nhaxe`, `diachi_nhaxe`, `mota_nhaxe`) VALUES
(1, '\"Nghĩa Huyền\"', '0941000565', '\"Hà Nội\"', '\"màu đỏ\"'),
(2, '\"Huyền Trang\"', '0944010565', '\"Bắc Ninh\"', '\"màu đen\"'),
(3, '\"Đức Chương\"', '0951888212', '\"Thái Bình\"', '\"màu trắng sữa\"'),
(4, '\"Ngô Phú\"', '0991222565', '\"Hà Nam \"', '\"màu hồng\"'),
(5, '\"Dương Kiên\"', '0951888865', '\"Hải Phòng\"', '\"màu xanh\"');

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
  `ma_tuyenduong` int(11) UNSIGNED NOT NULL,
  `diemdi_tuyenduong` text NOT NULL,
  `diemden_tuyenduong` text NOT NULL,
  `hinhanh_tuyenduong` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuyenduong`
--

INSERT INTO `tuyenduong` (`ma_tuyenduong`, `diemdi_tuyenduong`, `diemden_tuyenduong`, `hinhanh_tuyenduong`) VALUES
(1, 'Bắc Ninh', 'Hà Nội', 'https://goo.gl/maps/TczxAkApUoMBm9m1A'),
(2, 'Hà Nam ', 'Hải Phòng', 'https://goo.gl/maps/8q3TGmkdEburWHJPA'),
(3, 'Hà Nội', 'Thái Bình', 'https://goo.gl/maps/FsABPTk3xP4zwysBA'),
(4, 'Hà Nam', 'Thái Bình', 'upload/images/2021-1/article_img/2021-01-26/img-bgt-2021-duog-noi-1611630256-width540height360.jpg'),
(5, 'Bắc Ninh', 'Hải Phòng', 'files/f1/2019/04/17/tu-hai-phong-di-bac-ninh-bao-nhieu-km-bb-baaac4waKz.jpg?v=1555489526228');

-- --------------------------------------------------------

--
-- Table structure for table `vexe`
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
-- Dumping data for table `vexe`
--

INSERT INTO `vexe` (`ma_ve`, `ma_chuyenxe`, `diemdon_khach`, `gia_ve`, `hoten_khach`, `sdt_khach`, `email_khach`, `cmt_khach`) VALUES
(1, 1, 'Bắc Ninh', 20, 'Nguyễn Hoài An', '0945000156', 'hoaian@gmail.com', 120935000),
(2, 4, 'Hà Nam', 24, 'Nguyễn Đức Kiên', '0800001490', 'kien@gmail.com', 125900014),
(3, 3, 'Hà Nội', 40, 'Nguyễn Văn Phú', '0945000199', 'phu@gmail.com', 120000000),
(4, 2, 'Nguyễn Văn Long', 35, 'Ngô Đức Tâm', '0800001412', 'Tam@gmail.com', 125634823),
(5, 5, 'Bắc Ninh', 35, 'Phạm Quang Dương', '0945120156', 'duong.gmail.com', 120000011),
(6, 1, 'dsa', 0, 'helo', 'sad', 'sad', 0),
(7, 1, 'KTX Đại Học Thủy Lợi', 0, 'fdsaf', '+8476636672', 'ngotam24082001@gmail.com', 452854);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_chuyenxechay`
-- (See below for the actual view)
--
CREATE TABLE `vw_chuyenxechay` (
`ten_nhaxe` varchar(30)
,`soghetrong` int(11) unsigned
,`giodi_chuyenxe` time
,`diemdi_tuyenduong` text
,`diemden_tuyenduong` text
,`giatien_chuyenxe` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `ma_xe` int(11) UNSIGNED NOT NULL,
  `ma_nhaxe` int(11) UNSIGNED NOT NULL,
  `bienso_xe` varchar(10) NOT NULL,
  `soghe_xe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xe`
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
-- Structure for view `vw_chuyenxechay`
--
DROP TABLE IF EXISTS `vw_chuyenxechay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_chuyenxechay`  AS SELECT `nhaxe`.`ten_nhaxe` AS `ten_nhaxe`, `chuyenxechay`.`soghetrong` AS `soghetrong`, `chuyenxe`.`giodi_chuyenxe` AS `giodi_chuyenxe`, `tuyenduong`.`diemdi_tuyenduong` AS `diemdi_tuyenduong`, `tuyenduong`.`diemden_tuyenduong` AS `diemden_tuyenduong`, `chuyenxe`.`giatien_chuyenxe` AS `giatien_chuyenxe` FROM ((((`chuyenxechay` join `xe` on(`chuyenxechay`.`ma_xe` = `xe`.`ma_xe`)) join `nhaxe` on(`xe`.`ma_nhaxe` = `nhaxe`.`ma_nhaxe`)) join `chuyenxe` on(`chuyenxechay`.`ma_chuyenxe` = `chuyenxe`.`ma_chuyenxe`)) join `tuyenduong` on(`chuyenxe`.`ma_tuyenduong` = `tuyenduong`.`ma_tuyenduong`)) WHERE `chuyenxechay`.`trangthai` like 0 AND `chuyenxechay`.`soghetrong` > 0 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD PRIMARY KEY (`ma_chuyenxe`),
  ADD KEY `ma_tuyenduong` (`ma_tuyenduong`);

--
-- Indexes for table `chuyenxechay`
--
ALTER TABLE `chuyenxechay`
  ADD KEY `ma_chuyenxe` (`ma_chuyenxe`),
  ADD KEY `ma_xe` (`ma_xe`);

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
  ADD PRIMARY KEY (`ma_ve`),
  ADD KEY `ma_chuyenxe` (`ma_chuyenxe`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`ma_xe`),
  ADD KEY `ma_nhaxe` (`ma_nhaxe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
  MODIFY `ma_chuyenxe` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nhaxe`
--
ALTER TABLE `nhaxe`
  MODIFY `ma_nhaxe` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tuyenduong`
--
ALTER TABLE `tuyenduong`
  MODIFY `ma_tuyenduong` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vexe`
--
ALTER TABLE `vexe`
  MODIFY `ma_ve` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `ma_xe` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD CONSTRAINT `chuyenxe_ibfk_1` FOREIGN KEY (`ma_tuyenduong`) REFERENCES `tuyenduong` (`ma_tuyenduong`);

--
-- Constraints for table `chuyenxechay`
--
ALTER TABLE `chuyenxechay`
  ADD CONSTRAINT `chuyenxechay_ibfk_1` FOREIGN KEY (`ma_chuyenxe`) REFERENCES `chuyenxe` (`ma_chuyenxe`),
  ADD CONSTRAINT `chuyenxechay_ibfk_2` FOREIGN KEY (`ma_xe`) REFERENCES `xe` (`ma_xe`);

--
-- Constraints for table `vexe`
--
ALTER TABLE `vexe`
  ADD CONSTRAINT `vexe_ibfk_1` FOREIGN KEY (`ma_chuyenxe`) REFERENCES `chuyenxe` (`ma_chuyenxe`);

--
-- Constraints for table `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`ma_nhaxe`) REFERENCES `nhaxe` (`ma_nhaxe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

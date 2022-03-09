-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 04:47 AM
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
-- Structure for view `vw_chuyenxechay`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_chuyenxechay`  AS SELECT `chuyenxe`.`ma_chuyenxe` AS `ma_chuyenxe`, `nhaxe`.`ten_nhaxe` AS `ten_nhaxe`, `chuyenxechay`.`soghetrong` AS `soghetrong`, `chuyenxe`.`giodi_chuyenxe` AS `giodi_chuyenxe`, `tuyenduong`.`diemdi_tuyenduong` AS `diemdi_tuyenduong`, `tuyenduong`.`diemden_tuyenduong` AS `diemden_tuyenduong`, `chuyenxe`.`giatien_chuyenxe` AS `giatien_chuyenxe` FROM ((((`chuyenxechay` join `xe` on(`chuyenxechay`.`ma_xe` = `xe`.`ma_xe`)) join `nhaxe` on(`xe`.`ma_nhaxe` = `nhaxe`.`ma_nhaxe`)) join `chuyenxe` on(`chuyenxechay`.`ma_chuyenxe` = `chuyenxe`.`ma_chuyenxe`)) join `tuyenduong` on(`chuyenxe`.`ma_tuyenduong` = `tuyenduong`.`ma_tuyenduong`)) WHERE `chuyenxechay`.`trangthai` like 0 AND `chuyenxechay`.`soghetrong` > 0 ;

--
-- VIEW `vw_chuyenxechay`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2018 at 07:18 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toeicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bailam`
--

CREATE TABLE `bailam` (
  `IdBaiLam` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `MaDe` int(11) NOT NULL,
  `NgayThi` datetime NOT NULL,
  `SoDiem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bailam`
--

INSERT INTO `bailam` (`IdBaiLam`, `IdUser`, `MaDe`, `NgayThi`, `SoDiem`) VALUES
(1, 22, 1, '2018-09-23 00:00:00', 550),
(2, 26, 2, '2018-09-23 00:00:00', 400),
(3, 19, 2, '2018-09-23 00:00:00', 700);

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCauHoi` int(11) NOT NULL,
  `NoiDung` varchar(500) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `MaDe` int(11) DEFAULT NULL,
  `NguoiTao` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL,
  `NgayChinhSua` datetime DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT '1',
  `LoaiCauHoi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`MaCauHoi`, `NoiDung`, `HinhAnh`, `MaDe`, `NguoiTao`, `NgayTao`, `NgayChinhSua`, `TrangThai`, `LoaiCauHoi`) VALUES
(1, ' Could I see your driver\'s _____ please?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(2, ' Could I see your driver\'s _____ please?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(3, ' Could I see your driver\'s _____ please3?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(4, ' Could I see your driver\'s _____ please4?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(5, ' Could I see your driver\'s _____ please5?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(6, ' Could I see your driver\'s _____ please6?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(7, ' Could I see your driver\'s _____ please7?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(8, ' Could I see your driver\'s _____ please8?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(9, ' Could I see your driver\'s _____ please9?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(10, ' Could I see your driver\'s _____ please10?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(11, ' Could I see your driver\'s _____ please11?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(12, ' Could I see your driver\'s _____ please12?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(13, ' Could I see your driver\'s _____ please13?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(14, ' Could I see your driver\'s _____ please14?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(15, ' Could I see your driver\'s _____ please15?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(16, ' Could I see your driver\'s _____ please16?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(17, ' Could I see your driver\'s _____ please17?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(18, ' Could I see your driver\'s _____ please18?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(19, ' Could I see your driver\'s _____ please19?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(20, ' Could I see your driver\'s _____ please20?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(21, ' Could I see your driver\'s _____ please21?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(22, ' Could I see your driver\'s _____ please22?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(23, ' Could I see your driver\'s _____ please23?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(24, ' Could I see your driver\'s _____ please24?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(25, ' Could I see your driver\'s _____ please25?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(26, ' Could I see your driver\'s _____ please26?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(27, ' Could I see your driver\'s _____ please27?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(28, ' Could I see your driver\'s _____ please28?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(29, ' Could I see your driver\'s _____ please29?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(30, ' Could I see your driver\'s _____ please30?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(31, ' Could I see your driver\'s _____ please31?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(32, ' Could I see your driver\'s _____ please32?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(33, ' Could I see your driver\'s _____ please33?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(34, ' Could I see your driver\'s _____ please34?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(35, ' Could I see your driver\'s _____ please35?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(36, ' Could I see your driver\'s _____ please36?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(37, ' Could I see your driver\'s _____ please37?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(38, ' Could I see your driver\'s _____ please38?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(39, ' Could I see your driver\'s _____ please39?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(40, ' Could I see your driver\'s _____ please40?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(41, ' Could I see your driver\'s _____ please41?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(42, ' Could I see your driver\'s _____ please42?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(43, ' Could I see your driver\'s _____ please43?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(44, ' Could I see your driver\'s _____ please44?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(45, ' Could I see your driver\'s _____ please45?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(46, ' Could I see your driver\'s _____ please46?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(47, ' Could I see your driver\'s _____ please47?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(48, ' Could I see your driver\'s _____ please48?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(49, ' Could I see your driver\'s _____ please49?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(50, ' Could I see your driver\'s _____ please50?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(51, ' Could I see your driver\'s _____ please51?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(52, ' Could I see your driver\'s _____ please52?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(53, ' Could I see your driver\'s _____ please53?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(54, ' Could I see your driver\'s _____ please54?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(55, ' Could I see your driver\'s _____ please55?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(56, ' Could I see your driver\'s _____ please56?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(57, ' Could I see your driver\'s _____ please57?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(58, ' Could I see your driver\'s _____ please58?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(59, ' Could I see your driver\'s _____ please59?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(60, ' Could I see your driver\'s _____ please60?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(61, ' Could I see your driver\'s _____ please61?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(62, ' Could I see your driver\'s _____ please62?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(63, ' Could I see your driver\'s _____ please63?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(64, ' Could I see your driver\'s _____ please64?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(65, ' Could I see your driver\'s _____ please65?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(66, ' Could I see your driver\'s _____ please66?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(67, ' Could I see your driver\'s _____ please67?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(68, ' Could I see your driver\'s _____ please68?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(69, ' Could I see your driver\'s _____ please69?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(70, ' Could I see your driver\'s _____ please70?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(71, ' Could I see your driver\'s _____ please71?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(72, ' Could I see your driver\'s _____ please72?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(73, ' Could I see your driver\'s _____ please73?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(74, ' Could I see your driver\'s _____ please74?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(75, ' Could I see your driver\'s _____ please75?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(76, ' Could I see your driver\'s _____ please76?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(77, ' Could I see your driver\'s _____ please77?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(78, ' Could I see your driver\'s _____ please78?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(79, ' Could I see your driver\'s _____ please79?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(80, ' Could I see your driver\'s _____ please80?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(81, ' Could I see your driver\'s _____ please81?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(82, ' Could I see your driver\'s _____ please82?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(83, ' Could I see your driver\'s _____ please83?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(84, ' Could I see your driver\'s _____ please84?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(85, ' Could I see your driver\'s _____ please85?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(86, ' Could I see your driver\'s _____ please86?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(87, ' Could I see your driver\'s _____ please87?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(88, ' Could I see your driver\'s _____ please88?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(89, ' Could I see your driver\'s _____ please89?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(90, ' Could I see your driver\'s _____ please90?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(91, ' Could I see your driver\'s _____ please91?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(92, ' Could I see your driver\'s _____ please92?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(93, ' Could I see your driver\'s _____ please93?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(94, ' Could I see your driver\'s _____ please94?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(95, ' Could I see your driver\'s _____ please95?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(96, ' Could I see your driver\'s _____ please96?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(97, ' Could I see your driver\'s _____ please97?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(98, ' Could I see your driver\'s _____ please98?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(99, ' Could I see your driver\'s _____ please99?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(100, ' Could I see your driver\'s _____ please100?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'R-DIENCAU'),
(101, ' ___ you crazy1?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(102, ' ___ you crazy2?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(103, ' ___ you crazy3?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(104, ' ___ you crazy4?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(105, ' ___ you crazy5?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(106, ' ___ you crazy6?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(107, ' ___ you crazy7?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(108, ' ___ you crazy8?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(109, ' ___ you crazy9?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(110, ' ___ you crazy10?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(111, ' ___ you crazy11?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(112, ' ___ you crazy12?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(113, ' ___ you crazy13?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(114, ' ___ you crazy14?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(115, ' ___ you crazy15?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(116, ' ___ you crazy16?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(117, ' ___ you crazy17?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(118, ' ___ you crazy18?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(119, ' ___ you crazy19?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(120, ' ___ you crazy20?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(121, ' ___ you crazy21?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(122, ' ___ you crazy22?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(123, ' ___ you crazy23?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(124, ' ___ you crazy24?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(125, ' ___ you crazy25?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(126, ' ___ you crazy26?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(127, ' ___ you crazy27?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(128, ' ___ you crazy28?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(129, ' ___ you crazy29?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(130, ' ___ you crazy30?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(131, ' ___ you crazy31?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(132, ' ___ you crazy32?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(133, ' ___ you crazy33?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(134, ' ___ you crazy34?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(135, ' ___ you crazy35?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(136, ' ___ you crazy36?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(137, ' ___ you crazy37?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(138, ' ___ you crazy38?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(139, ' ___ you crazy39?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(140, ' ___ you crazy40?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(141, ' ___ you crazy41?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(142, ' ___ you crazy42?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(143, ' ___ you crazy43?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(144, ' ___ you crazy44?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(145, ' ___ you crazy45?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(146, ' ___ you crazy46?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(147, ' ___ you crazy47?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(148, ' ___ you crazy48?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(149, ' ___ you crazy49?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(150, ' ___ you crazy50?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(151, ' ___ you crazy51?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(152, ' ___ you crazy52?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(153, ' ___ you crazy53?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(154, ' ___ you crazy54?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(155, ' ___ you crazy55?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(156, ' ___ you crazy56?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(157, ' ___ you crazy57?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(158, ' ___ you crazy58?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(159, ' ___ you crazy59?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(160, ' ___ you crazy60?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(161, ' ___ you crazy61?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(162, ' ___ you crazy62?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(163, ' ___ you crazy63?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(164, ' ___ you crazy64?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(165, ' ___ you crazy65?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(166, ' ___ you crazy66?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(167, ' ___ you crazy67?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(168, ' ___ you crazy68?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(169, ' ___ you crazy69?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(170, ' ___ you crazy70?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(171, ' ___ you crazy71?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(172, ' ___ you crazy72?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(173, ' ___ you crazy73?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(174, ' ___ you crazy74?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(175, ' ___ you crazy75?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(176, ' ___ you crazy76?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(177, ' ___ you crazy77?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(178, ' ___ you crazy78?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(179, ' ___ you crazy79?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(180, ' ___ you crazy80?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(181, ' ___ you crazy81?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(182, ' ___ you crazy82?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(183, ' ___ you crazy83?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(184, ' ___ you crazy84?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(185, ' ___ you crazy85?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(186, ' ___ you crazy86?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(187, ' ___ you crazy87?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(188, ' ___ you crazy88?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(189, ' ___ you crazy89?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(190, ' ___ you crazy90?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(191, ' ___ you crazy91?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(192, ' ___ you crazy92?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(193, ' ___ you crazy93?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(194, ' ___ you crazy94?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(195, ' ___ you crazy95?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(196, ' ___ you crazy96?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(197, ' ___ you crazy97?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(198, ' ___ you crazy98?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(199, ' ___ you crazy99?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH'),
(200, ' ___ you crazy100?', '', 1, 3, '2018-09-23 00:00:00', NULL, 1, 'L-HINHANH');

-- --------------------------------------------------------

--
-- Table structure for table `dethi`
--

CREATE TABLE `dethi` (
  `MaDe` int(11) NOT NULL,
  `TieuDe` varchar(50) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `ThoiLuong` int(11) NOT NULL DEFAULT '120',
  `SoCau` int(11) NOT NULL DEFAULT '200',
  `NguoiTao` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL,
  `SoLanThi` int(11) NOT NULL DEFAULT '0',
  `TrangThai` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dethi`
--

INSERT INTO `dethi` (`MaDe`, `TieuDe`, `MoTa`, `ThoiLuong`, `SoCau`, `NguoiTao`, `NgayTao`, `SoLanThi`, `TrangThai`) VALUES
(1, 'TOEIC 1', 'Đề thi mẫu TOEIC số 1', 120, 200, 3, '2018-09-23 00:00:00', 0, 1),
(2, 'TOEIC 2', 'Đề thi TOEIC mẫu số 2', 120, 200, 2, '2018-09-23 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaicauhoi`
--

CREATE TABLE `loaicauhoi` (
  `MaLoai` varchar(20) NOT NULL,
  `TenLoai` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaicauhoi`
--

INSERT INTO `loaicauhoi` (`MaLoai`, `TenLoai`) VALUES
('L-BAINOICHUYEN', 'Các câu hỏi về bài nói chuyện'),
('L-HINHANH', 'Chọn câu trả lời mô tả nội dung trong hình'),
('L-HOIDAP', 'Câu hỏi đáp'),
('L-HOITHOAI', 'Các đoạn hội thoại'),
('R-DIENCAU', 'Chọn từ để điền vào chỗ trống'),
('R-DIENDOANVAN', 'Chọn từ để điền vào đoạn văn'),
('R-HOIDOANVAN', 'Chọn câu trả lời đúng trong những câu hỏi về ');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `IdUser` int(11) NOT NULL,
  `HoTen` varchar(100) DEFAULT 'None',
  `GioiTinh` varchar(4) DEFAULT 'None',
  `MatKhau` varchar(50) NOT NULL,
  `Quyen` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `KichHoat` tinyint(1) NOT NULL DEFAULT '0',
  `Avatar` varchar(255) DEFAULT NULL,
  `NgayThamGia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`IdUser`, `HoTen`, `GioiTinh`, `MatKhau`, `Quyen`, `Mail`, `KichHoat`, `Avatar`, `NgayThamGia`) VALUES
(1, 'Nguyễn Văn Ý Thiên', 'Nam', '123456', 1, 'thiennguyen0897@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(2, 'Nguyễn Văn 1', 'Nam', '123456', 2, 'giangvien1@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(3, 'Nguyễn Văn 2', 'Nam', '123456', 2, 'giangvien2@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(4, 'Nguyễn Văn 3', 'Nam', '123456', 2, 'giangvien3@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(5, 'Nguyễn Văn 4', 'Nam', '123456', 2, 'giangvien4@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(6, 'Nguyễn Văn 5', 'Nam', '123456', 2, 'giangvien5@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(7, 'Nguyễn Văn 6', 'Nam', '123456', 2, 'giangvien6@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(8, 'Nguyễn Văn 7', 'Nam', '123456', 2, 'giangvien7@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(9, 'Nguyễn Văn 8', 'Nam', '123456', 2, 'giangvien8@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(10, 'Nguyễn Văn 9', 'Nam', '123456', 2, 'giangvien9@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(11, 'Nguyễn Văn 10', 'Nam', '123456', 2, 'giangvien10@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(12, 'Nguyễn Thị 11', 'Nữ', '123456', 3, 'hocvien11@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(13, 'Nguyễn Thị 12', 'Nữ', '123456', 3, 'hocvien12@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(14, 'Nguyễn Thị 13', 'Nữ', '123456', 3, 'hocvien13@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(15, 'Nguyễn Thị 14', 'Nữ', '123456', 3, 'hocvien14@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(16, 'Nguyễn Thị 15', 'Nữ', '123456', 3, 'hocvien15@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(17, 'Nguyễn Thị 16', 'Nữ', '123456', 3, 'hocvien16@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(18, 'Nguyễn Thị 17', 'Nữ', '123456', 3, 'hocvien17@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(19, 'Nguyễn Thị 18', 'Nữ', '123456', 3, 'hocvien18@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(20, 'Nguyễn Thị 19', 'Nữ', '123456', 3, 'hocvien19@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(21, 'Nguyễn Thị 20', 'Nữ', '123456', 3, 'hocvien20@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(22, 'Nguyễn Thị 21', 'Nữ', '123456', 3, 'hocvien21@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(23, 'Nguyễn Thị 22', 'Nữ', '123456', 3, 'hocvien22@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(24, 'Nguyễn Thị 23', 'Nữ', '123456', 3, 'hocvien23@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(25, 'Nguyễn Thị 24', 'Nữ', '123456', 3, 'hocvien24@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(26, 'Nguyễn Thị 25', 'Nữ', '123456', 3, 'hocvien25@gmail.com', 1, NULL, '2018-09-25 00:00:00'),
(27, 'asdsad', 'Nam', 'vvvvvv', 1, 'asdasd@gmail.com', 0, NULL, '2018-09-27 11:09:43'),
(28, 'vvvvv', 'Nam', 'vvvvvv', 1, 'lo@gmail.com', 0, NULL, '2018-09-27 12:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` int(11) NOT NULL DEFAULT '3',
  `MoTa` varchar(100) NOT NULL DEFAULT 'Người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `MoTa`) VALUES
(1, 'Quản trị'),
(2, 'Giáo viên'),
(3, 'Học viên');

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `MaThongBao` int(11) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `NoiDung` text NOT NULL,
  `Ngay` datetime NOT NULL,
  `NguoiTao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`MaThongBao`, `TieuDe`, `NoiDung`, `Ngay`, `NguoiTao`) VALUES
(1, 'Quyền lợi bất ngờ!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', 1),
(2, 'Quyền lợi bất ngờ2222!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', 1),
(3, 'Quyền lợi bất ngờ3333!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', 1),
(4, 'Quyền lợi bất ngờ4444!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', 1),
(5, 'Quyền lợi bất ngờ5555!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', 1),
(6, 'Quyền lợi bất ngờ6666!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTinTuc` int(11) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `NoiDung` text NOT NULL,
  `TomTat` varchar(255) NOT NULL,
  `AnhMinhHoa` varchar(255) NOT NULL,
  `NguoiTao` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL,
  `NgayChinhSua` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`MaTinTuc`, `TieuDe`, `NoiDung`, `TomTat`, `AnhMinhHoa`, `NguoiTao`, `NgayTao`, `NgayChinhSua`) VALUES
(1, '90 sinh viên nhận 1 tỷ đồng học bổng Acecook Việt Nam', 'Acecook Việt Nam vừa tổ chức thành công lễ trao học bổng tổng giá trị 1 tỷ đồng cho 90 sinh viên có ý chí, nghị lực vươn lên trong cuộc sống của 9 trường đại học\r\nTừ 17/8 tới 31/8, Acecook Việt Nam đã tổ chức lễ trao học bổng cho 90 sinh viên có thành tích học tập tốt và tích cực tham gia các hoạt động xã hội của 9 trường đại học tại Hà Nội, Đà Nẵng, TP.HCM và Cần Thơ (bao gồm ĐH Thương mại Hà Nội, ĐH Kinh tế Quốc dân, ĐH Công nghiệp Hà Nội, ĐH Kinh tế Đà Nẵng, ĐH Ngoại ngữ Đà Nẵng, ĐH Bách khoa Đà Nẵng, ĐH Kinh tế TP.HCM, ĐH Khoa học Tự nhiên TP.HCM, ĐH Cần Thơ). Đây được xem là một trong những chuỗi hoạt động có ý nghĩa với cộng đồng, dành cho sinh viên - thế hệ trẻ của Việt Nam.\r\n\r\nTrong buổi lễ, ông Kajiwara Junichi - Tổng giám đốc Công ty cổ phần Acecook Việt Nam - chia sẻ: “Những chuyển biến tích cực trong đời sống và thành tựu trong học tập các sinh viên đạt được sau khi nhận học bổng những năm trước chính là động lực để Acecook Việt Nam tiếp tục tổ chức cho năm 2018, cũng như tăng số lượng học bổng lên 90 suất cho 4 khu vực”.\r\n\r\nTại buổi lễ đầu tiên ở TP.HCM ngày 17/8, bạn Võ Thị Mỹ Loan (ĐH Cần Thơ) chia sẻ: “Mình thực sự bất ngờ và vui mừng khi biết mình là một trong 90 sinh viên may mắn nhận được học bổng Acecook Việt Nam 2018. Khoản học bổng này sẽ giúp mình tập trung được vào việc học và làm luận văn của sinh viên năm 3”.\r\n\r\nBạn Đặng Thị Nhân (ĐH Ngoại Ngữ Đà Nẵng) cho biết: “Mấy hôm trước ba mẹ mình vừa nói vào năm học rồi mà không biết lấy tiền đâu đóng học phí, vì hè này mình về nhà để phụ giúp ba mẹ nên không đi làm thêm được. Học bổng Acecook Việt Nam 2018 là món quà động viên cả về tinh thần và vật chất cho mình và gia đình. Nhờ học bổng này, mình và gia đình có thể tin tưởng hơn vào con đường đang đi”.\r\n\r\nLà một trong 33 sinh viên xuất sắc nhận học bổng tại khu vực Hà Nội, bạn Lê Thị Hiền (ĐH Công nghiệp Hà Nội) lên kế hoạch: “Mình sẽ dành một phần học bổng sẽ đóng tiền kỳ I của năm học tới để gia đình đỡ phải đi vay mượn. Phần còn lại dùng để cải thiện trình độ tiếng Anh, tháng 12 mình phải đạt 800+ Toeic và sau khi tốt nghiệp thì mình phải đạt được N3 tiếng Nhật”.', 'Acecook Việt Nam vừa tổ chức thành công lễ trao học bổng tổng giá trị 1 tỷ đồng cho 90 sinh viên có ý chí, nghị lực vươn lên trong cuộc sống của 9 trường đại học', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_09_10/A1.jpg', 2, '2018-09-23 00:00:00', NULL),
(2, 'Cải cách khảo thí nhìn từ điểm chuẩn đại học năm nay', 'Điểm trúng tuyển của ĐH Y dược TP.HCM là 24,95, so với năm ngoái 29,25. Mức trúng tuyển của ĐH Bách Khoa (ĐH Quốc gia TP.HCM) cũng giảm mạnh, 28 điểm năm ngoái, năm nay còn 23,25 điểm.\r\n\r\nXu hướng này nói lên điều gì và liệu có thực sự đáng lo ngại? Zing.vn giới thiệu bài viết của TS Phạm Thị Ly, chuyên gia giáo dục, về vấn đề này. Bài viết thể hiện quan điểm và văn phong của tác giả.\r\n\r\nĐiểm chuẩn vào đại học phụ thuộc nhiều yếu tố: Yêu cầu của nhà trường về năng lực tối thiểu để có thể tiếp thu chương trình đào tạo, mức độ “hot” của ngành nghề mà trường đào tạo và đặc biệt trực tiếp là cán cân cung cầu (số thí sinh muốn vào trường, và khả năng tiếp nhận của trường).\r\n\r\nỞ Mỹ, mức độ cạnh tranh khi vào trường (tỷ lệ thí sinh được nhận trên tổng số ứng viên), cũng như mức điểm trung bình để xét tuyển là hai yếu tố được xem có ý nghĩa quan trọng biểu hiện uy tín của trường. Vì thế, nó là một trong những thước đo của xếp hạng đại học. Tuy nhiên, trong bối cảnh Việt Nam, những yếu tố đó chỉ có ý nghĩa tương đối.\r\n\r\nTạm gác sang một bên vấn đề tiêu cực trong thi cử, chúng ta hãy giả thiết mức độ tiêu cực bằng không, thì điểm số có tương quan như thế nào với năng lực nói chung, và năng lực học đại học và thành công trong cuộc sống nói riêng?\r\n\r\nKhông có gì đảm bảo một thí sinh đỗ đại học với 25 điểm sẽ học kém hơn bạn cùng khóa có điểm đầu vào 26, 27 hay 28, vì kết quả học tập trong quá trình đào tạo còn phụ thuộc nhiều yếu tố khác. Ngay cả trong trường hợp “những yếu tố khác” đó như nhau, cũng vẫn không có gì đảm bảo hai thí sinh này sẽ có kết quả học tập và mức độ thành công trong cuộc sống tỷ lệ thuận với điểm thi mình đạt được.\r\n\r\nTất nhiên cần có nghiên cứu để khẳng định điểm thi có tương quan như thế nào với kết quả học tập và mức độ thành công về sau, nhưng về mặt lý thuyết, mối tương quan này trước hết phụ thuộc thiết kế đề thi. Tức là, bài thi nhằm đo lường điều gì và đề thi phục vụ cho mục tiêu đó ở mức độ nào?\r\n\r\n', 'Nếu giả thiết tiêu cực trong thi cử bằng không, điểm thi cũng không phải thước đo năng lực hoàn toàn đáng tin cậy với cách ra đề và tổ chức thi hiện nay.', 'https://znews-photo-td.zadn.vn/w1024/Uploaded/pirr/2018_08_12/thi_dai_hoc_2018.JPG', 6, '2018-09-23 00:00:00', NULL),
(3, 'Lý do ngành du lịch được nhiều sĩ tử lựa chọn', 'Nghị quyết số 08-NQ/TW ngày 16/1/2017 của Bộ Chính trị nêu rõ mục tiêu đến năm 2020, ngành du lịch cơ bản trở thành ngành kinh tế mũi nhọn, đồng thời đặt mục tiêu đến năm 2020 thu hút 17-20 triệu lượt khách du lịch quốc tế, 82 triệu lượt khách du lịch nội địa; đóng góp trên 10% GDP; tạo ra 4 triệu việc làm, trong đó có 1,6 triệu việc làm trực tiếp.\r\n\r\nTừ cơ sở này có thể thấy rằng sinh viên tốt nghiệp ngành du lịch sẽ có cơ hội tìm việc lớn.\r\n\r\nNhu cầu nhân lực cao\r\nKhi du lịch trở thành ngành kinh tế mũi nhọn, nhu cầu nguồn nhân lực cũng vì thế tăng cao. Theo báo cáo tóm tắt kết quả 5 năm thực hiện Chiến lược phát triển du lịch Việt Nam đến năm 2020 của Viện nghiên cứu phát triển du lịch (ITDR), cả nước hiện có trên 1,3 triệu lao động du lịch, chiếm khoảng 2,5% tổng lao động cả nước.\r\n\r\nTuy nhiên chỉ 42% được đào tạo về du lịch, 38% được đào tạo từ các ngành khác chuyển sang và khoảng 20% chưa qua đào tạo chính quy mà chỉ được huấn luyện tại chỗ. Đến năm 2020 ngành du lịch cả nước sẽ cần đến trên 2 triệu lao động chất lượng cao.\r\n\r\nTốc độ tăng trưởng du lịch như hiện nay yêu cầu mỗi năm phải đào tạo thêm 25.000 lao động mới. Tuy nhiên, mỗi năm các trường đào tạo chuyên ngành về du lịch chỉ đáp ứng được khoảng 60% nhu cầu của ngành, dẫn đến tình trạng thiếu nguồn nhân lực.', 'Du lịch Việt Nam đang trên đà phát triển mạnh mẽ với lượng khách nội địa và quốc tế ngày một tăng. Nhu cầu nhân lực ngành này cũng vì thế tăng cao, hấp dẫn nhiều sĩ tử theo học.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_04_10/187_Anh_2_TS_Tran_Du_Lich_gui_zing.jpg', 7, '2018-09-23 00:00:00', NULL),
(4, 'Giám đốc 8X: \'Lương nghìn đô không có nghĩa là ngừng cố gắng\'', 'ăng Gia Hải Lam được bổ nhiệm trở thành giám đốc điều hành Buzzmetrics - một trong những công ty chuyên về nghiên cứu thị trường thông qua mạng xã hội - từ khi còn rất trẻ.\r\n\r\nTrước đó, anh bắt đầu công việc marketing ở các công ty quảng cáo hàng đầu. Ngoài ra, anh còn tham gia giảng dạy ở Học viện AIM và các hoạt động hướng nghiệp sinh viên Đại học RMIT và Đại học Kinh Tế TP.HCM.\r\n\r\nHải Lam được các chuyên gia tuyển dụng của Primus đánh giá nằm trong top 1 các ứng viên cho các vị trí quản lý cấp cao hiện nay.\r\n\r\nTrò chuyện với Lam, chàng giám đốc của Buzzmetrics cho biết chỉ muốn nói về thất bại và những bài học mình đã có được trong nhiều năm sự nghiệp.\r\n\r\nAnh chia sẻ: \"Top 1 là người ta tin mình thì nói về mình vậy thôi, cũng không có mức tối đa nào cho sự phát triển để trở thành top 1 cả\".\r\n\r\nThất bại nhiều hơn thành công\r\n- Anh có nghĩ nhiều về tương lai của mình trong những năm đại học?\r\n\r\n- Sự thật là ngày đó mình cúp học nhiều lắm. Ngây thơ, ngờ nghệch và chưa hiểu chuyện mà.\r\n\r\nTừng ấy năm đi học là từng ấy năm làm phục vụ bàn. Nghĩ mình tang bồng chí trai, không cần xin tiền gia đình, tự làm tự sống. Rồi đi làm riết bị ghiền, thậm chí còn định nghỉ học để đi làm vì thấy nhiều tiền quá trời, đi học không ra tiền mà còn cực nữa.\r\n\r\nChính vì thế, ngày đó không có định hướng cuộc đời gì hết. Đến tận năm 4 vẫn không biết mình học Marketing ra trường sẽ làm gì. Ngành này công việc gồm những gì, mức lương ra sao, con đường thăng tiến sẽ thế nào.\r\n\r\nNói chung là hoàn toàn không có khái niệm gì. Cũng may cuộc đời đối đãi với mình tốt quá.\r\n\r\n- Bây giờ khi đang đứng ở vị trí cao, vậy nhìn lại thời đó của mình, anh có tiếc không?\r\n\r\n- Tiếc thì không, nhưng thấy may mắn. May là vì không có định hướng trước nhưng cuộc đời kéo mình theo hướng có thể phát triển được. Có nhiều người bạn xung quanh giỏi vẫn loay hoay vô định, không biết đi theo hướng nào, phát triển ra sao, thế nên cái việc không có tầm nhìn trước nguy hiểm lắm.\r\n\r\nDo đó, từ khi tốt nghiệp, đi làm, có hoạt động hướng nghiệp nào của sinh viên mình cũng tham gia. Có lẽ muốn nhân cơ hội ấy để giúp các bạn trẻ không lặp lại sai lầm của mình ngày xưa.\r\n\r\n- Anh bắt đầu sự nghiệp của mình như thế nào?\r\n\r\n- Nói ra thì không ai tin, nhưng tất cả là hên. Việc làm đầu tiên ngoài phục vụ nhà hàng là nhập liệu từ những danh sách rất dài viết tay vào hệ thống của một công ty. Làm một tháng, tự nhận thấy đây là vị trí không tương lai, khó phát triển.\r\n\r\nĐúng lúc ấy thì có người chị đang làm tại một tập đoàn quảng cáo lớn giới thiệu công việc khác. Từ đó, mình mới biết cái gì là quảng cáo, như thế nào là agency. Đó là cả thế giới mới, rộng lớn và nhiều thứ cần khám phá.\r\n\r\nTiếng Anh của mọi người ở đó quá xuất sắc, kiến thức chuyên môn cũng rất giỏi. Nhờ vậy, mình mới biết lúc này mà không bắt đầu chạy thì sẽ bị bỏ lại rất xa.\r\n\r\nThế là bắt đầu từ ấy, người ta làm 8 tiếng thì mình phải làm 10 tiếng, là người đến sớm nhất, về trễ nhất. Hoàn thành việc của mình thì xin thêm phần của người khác để làm. Mình phải chạy nhanh để bằng được với người ta.\r\n\r\n- Có những cái cố gắng được, nhưng có những thứ phải học, anh phải học thêm những gì?\r\n\r\n- Thú thật là tới giờ mình vẫn chưa có bằng A tiếng Anh. TOEFL, TOEIC, IELTS là cái gì cũng chưa từng đụng vào. Ngoại ngữ mình có khi bước ra khỏi trường cấp 3 là một vốn từ vựng hạn chế, cơ sở ngữ pháp rất cơ bản.\r\n\r\nNhưng cơ hội học lại có ở khắp nơi. Thời điểm đầu đi làm phục vụ bàn, khách nước ngoài rất nhiều. Ngày đó mình cứ \"Hello, how are you. You eat what?\", nghĩa là ráp từng chữ lại. May mắn là khách Tây rất nhiệt tình nói chuyện với dân địa phương, dù mình dốt tiếng Anh.\r\n\r\nThế là mình cứ hỏi đọc từ này thế nào, câu kia ra sao. Từ từ như thế 4 năm, cái học được tốt nhất là phản xạ nghe - nói ngoại ngữ. Đó chính là kiểu trường lớp mà không cần có tiền, không cần thầy cô đứng bên cạnh kèm cặp. Cuộc đời là cuốn sách mở và chuyện của mình là phải đọc cho đúng.\r\n\r\nMarketing cũng vậy. Nơi làm đầu tiên là một tập đoàn lớn. Mọi người chuyên nghiệp lắm. Có khi nói một câu 10 chữ thì 8 là tiếng Anh, mà còn là tiếng Anh chuyên ngành. Lúc đó làm gì có đường lùi. Mình nghỉ việc thì đói ăn ngay lập tức vì làm gì có ai hỗ trợ phía sau.\r\n\r\nThế là không dám giấu cái ngu của mình. Gặp ai cũng hỏi cái này cái nọ, quy trình làm ra sao, phải làm thế nào. Lúc đó, đi làm không phải để lấy lương hay viết báo cáo thực tập, mà là để học. Công ty cũng là cuốn sách mở. Lại chịu khó miệt mài đọc thôi!', 'Được đánh giá là ứng viên top 1 cho vị trí quản lý cấp cao, nhưng Hải Lam - giám đốc điều hành Buzzmetrics - cho rằng anh luôn cố gắng vượt qua giới hạn của bản thân.', 'https://znews-photo-td.zadn.vn/w1024/Uploaded/oqivovbv/2017_12_28/Hai_Lam1_ZING.jpg', 12, '2018-09-23 00:00:00', NULL),
(5, 'Cô gái \'biết 7 ngoại ngữ\' Khánh Vy chia sẻ mẹo nói tiếng Anh lưu loát', 'Trần Khánh Vy khiến nhiều người khâm phục bởi thành tích học tập đáng nể (IELTS 7.5, giải 3 học sinh giỏi tiếng Anh toàn quốc) và khả năng “bắn” tiếng Anh như gió.\r\n\r\nGần đây, cô sinh viên chuyên ngành chính trị quốc tế của Học viện Ngoại giao càng quen mặt với khán giả hơn khi trở thành người dẫn chương trình bản tin quốc tế của VTC, MC của hai chương trình về tiếng Anh là Crack’em up và Preshow của 8 IELTS trên VTV7. Khánh Vy đã tiết lộ một vài bí quyết học để sử dụng tiếng Anh lưu loát.\r\n\r\nHọc tiếng Anh qua các chương trình giải trí\r\nKhánh Vy cho biết, cô rất bắt đầu học tiếng Anh từ lúc 5, 6 tuổi. Lúc đó, cô nàng rất thích xem các chương trình giải trí bằng tiếng Anh và tự bắt chước theo các video clip trên mạng. Tình yêu với tiếng Anh cũng dần lớn lên theo Khánh Vy từ đó.\r\n\r\nLuôn thực hành bằng tiếng Anh\r\nTheo Khánh Vy, cái gì cũng phải đi từ vỡ lòng rồi nâng dần trình độ. Không học tốt căn bản thì khó có thể giỏi vững chắc. Ngoài ra, muốn phát âm giỏi càng phải kiên trì đọc từ nào ra từ ấy ngay từ đầu.\r\n\r\nKhánh Vy ủng hộ việc học ngữ pháp trước, giao tiếp sau. Chính vì thế, cô nàng luôn trau dồi việc học ngữ pháp của mình. Khánh Vy cũng có một bí quyết rất thú vị là luyện speaking bằng cách độc thoại. Theo cô, đây là cách luyện phát âm hay hơn, rèn được ngữ điệu tự nhiên mà lại khiến bản thân cảm thấy vui vẻ.\r\n\r\nĐặc biệt, “hot girl 7 thứ tiếng” khẳng định chắc nịch rằng một năm hoàn toàn đủ để bứt phá môn tiếng Anh.\r\n\r\nHọc tại trung tâm tiếng Anh chất lượng\r\nHot girl cho biết, muốn thực hành tốt tiếng Anh thì cần có môi trường và những giáo viên dạy giỏi. Mặc dù gây sốt cộng đồng mạng về clip “bắn” ngoại ngữ của mình, nhưng Vy cũng nhận được những góp ý về cách dùng từ, phát âm và ngữ điệu.\r\n\r\nVì vậy, Khánh Vy đã tìm đến Học viện đào tạo tiếng Anh AG FiveStar English - đối tác tổ chức thi và luyện thi IELTS tiêu chuẩn 5 sao do Hội đồng Anh lựa chọn - để tiếp tục trau dồi tiếng Anh.\r\n\r\nKhánh Vy cho biết, Học viện Anh ngữ 5 sao quốc tế AG FiveStar English không chỉ đào tạo tiếng Anh chuẩn quốc tế, luyện thi các chứng chỉ IELTS, TOEIC mà còn đào tạo các kỹ năng mềm bằng tiếng Anh để học sinh có khả năng hội nhập cuộc sống tại nước ngoài, làm việc trong kỷ nguyên IoT hội nhập toàn cầu.\r\n\r\nMặc dù đã đạt IELTS 7.5, Khánh Vy vẫn quyết tâm hoàn thành khoá học IELTS tại AG FiveStar English để có thể đạt được thành tích cao hơn. Cô chia sẻ: “Mình vô cùng ngưỡng mộ những người thầy giáo tại Học viện Anh ngữ 5 sao quốc tế AG FiveStar English, từ tình yêu tiếng Anh đến vốn kiến thức khủng về IELTS. Mình tin với sự chỉ dạy của các thầy cô và vốn kiến thức sẵn có, mình sẽ chạm đến mốc IELTS 8.5 mơ ước”.', 'Nổi tiếng với clip nói 7 thứ tiếng, sở hữu bảng thành tích ấn tượng với loạt giải thưởng tiếng Anh, Trần Khánh Vy có lẽ là cái tên đã khá quen thuộc với giới trẻ hiện nay.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2017_09_05/image001_6.jpg', 4, '2018-09-23 00:00:00', NULL),
(6, '\'Ma trận\' video học tiếng Anh trên mạng', 'Tại thời điểm này, không khó để tìm kiếm video dạy tiếng Anh trên YouTube nói riêng cũng như trên mạng nói chung. Đặc biệt, trong số đó, rất nhiều video do các giáo viên người Việt làm.\r\n\r\nMa trận video tiếng Anh online\r\nKhi truy cập vào YouTube với từ khoá tìm kiếm “tiếng Anh”, người dùng có thể tìm thấy hàng nghìn lượt kết quả. Trong đó, đa phần là bài giảng của giáo viên người Việt với thời lượng dưới 5 phút.\r\n\r\nVideo hướng dẫn kỹ năng đọc hay ngữ pháp cũng xuất hiện trên YouTube nhưng không được nhiều người quan tâm. Trong khi đó, kỹ năng phát âm được khá nhiều người tìm kiếm và học trực tuyến. Thực tế, đây cũng là điểm yếu nhất của người Việt khi học tiếng Anh.\r\n\r\nTrong đó, nổi bật nhất phải kể đến những cái tên như Ms.Hoa Toeic, Elight và Dan Heuer. Những video của các kênh này thường có lượt truy cập lớn, khoảng vài trăm nghìn lượt xem cho mỗi video.\r\n\r\nThông thường, các kênh làm video hướng đến mục đích thương mại. Các sản phẩm này nằm trong chiến dịch marketing để thu hút học viên và quảng bá thương hiệu.\r\n\r\nTuy nhiên, việc có quá nhiều các kênh học tiếng Anh cũng khiến người học bị lạc giữa ma trận. Không biết lựa chọn kênh nào, hệ thống nào để học.\r\n\r\nHoàng Sơn, sinh viên Học viện báo chí và tuyên truyền cho biết “thực sự học tiếng Anh trên mạng qua video rất tiện. Tuy nhiên, có quá nhiều kênh với nhiều kiến thức đúng sai khác nhau khiến cho những bạn mất gốc bị loạn”.\r\n\r\nChất lượng nhập nhằng, người học hoang mang\r\nThực tế, video dạy tiếng Anh của người Việt đã xuất hiện nhiều trong 2 đến 3 năm gần đây. Tuy nhiên, chỉ đến khi thầy Dan Heuer chỉ ra những lỗi sai lớn trong các sản phẩm này, mọi người mới “tá hoả” xem lại chất lượng của những video này.\r\n\r\nThầy Dan Heuer chỉ ra một số lỗi cơ bản về việc phát âm trên những video của một số kênh video dạy tiếng Anh tại Việt Nam. Theo đó, các sản phẩm từ các trung tâm tiếng Anh này mắc những lỗi như sai trọng âm, nhầm hoặc thiếu âm cuối.\r\n\r\nTrong tiếng Anh âm cuối, trọng âm rất quan trọng. Nó giúp người đối diện biết và phân biệt chính xác từ mà chúng ta muốn nói.\r\n\r\nTrên thực tế, đây là những lỗi sai thường gặp của người Việt Nam. Tuy nhiên, đối với những thầy cô giáo dạy ngoại ngữ thì lỗi này rất cơ bản và ảnh hưởng nghiêm trọng đến những học viên đang theo học.\r\n\r\nHuyền Trang, sinh viên đại học Lao động và xã hội cho biết “mình đang học theo những video trên YouTube của một kênh lớn. Mình cảm thấy hoang mang khi thầy Dan chỉ ra nhiều lỗi sai cơ bản của kênh như vậy. Không biết là những kiến thức mình thu nạp được có đúng không”.\r\n\r\nCô Lưu Thuỳ Hương, nghiên cứu sinh chuyên ngành giáo dục tại Anh, giảng viên đại học Ngoại thương cho biết “Để một người tự tin nói tiếng Anh đã là điều tốt và đáng quý. Tuy nhiên, với tư cách là người dạy, những lỗi sai trên không nên có”.\r\n\r\nNgoài ra, cô cũng nói thêm rằng trên những video dạy tiếng Anh online, không có một quy chuẩn nào được đặt ra. Nhiều khi vì chưa có chuyên môn sâu nên chính người tạo ra video cũng không biết mình sai.\r\n\r\nChị Lê Diệu Hương, trung tâm tiếng Anh MsD, đồng quan điểm: “hầu hết trung tâm đều hướng tới việc làm video học online để tiếp cận học viên. Tuy nhiên, chất lượng của các video chưa cao và còn có nhiều lỗi. Nếu để học phát âm sai, sẽ rất khó để sửa”.\r\n\r\nGiải pháp nào?\r\nViệc video dạy tiếng Anh trực tuyến do các trung tâm tiếng Anh sản xuất không đạt chất lượng khiến nhiều người học hoang mang, không biết nên chọn nguồn học liệu nào. Tuy nhiên, trên YouTube nói riêng và Internet nói chung vẫn còn nhiều địa chỉ có thể tin tưởng được.\r\n\r\nNgười học nên lựa chọn những kênh dạy tiếng Anh online nổi tiếng trên thế giới, do người bản ngữ trực tiếp hướng dẫn. Nếu điều kiện cho phép, nên đăng ký các khoá học với người nước ngoài hoặc tìm một số giáo viên có trình độ tốt.\r\n', 'Học qua các nguồn thông tin trên mạng đang dần trở thành xu hướng. Tuy nhiên, chất lượng của các video dạy tiếng Anh online hiện chưa được kiểm soát.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/OFH_oazszstq/2017_08_23/21039664_1827137547301406_1380718246_n.jpg', 8, '2018-09-23 00:00:00', NULL),
(7, 'Học tiếng Anh: Từ vựng có còn là quan trọng nhất?', 'Trước tiên, cần hiểu nhận định trên theo hai khía cạnh. Một là tầm quan trọng của từ vựng với việc học tiếng Anh. Hai là lý do học từ vựng không hiệu quả.\r\n\r\nTầm quan trọng của từ vựng\r\nNhà ngôn ngữ học nổi tiếng David A. Wilkins (1972) từng nói: “Không có ngữ pháp, rất ít thông tin có thể được truyền đạt. Nhưng không có từ vựng thì chẳng một thông tin nào có thể được truyền đạt cả”.\r\n\r\nNhận định trên cho thấy, từ vựng luôn là yếu tố quan trọng hàng đầu khi học một ngôn ngữ. Tuy nhiên, cách học của mỗi người sẽ quyết định kết quả mang lại. Nếu chỉ mãi cắm cúi vào việc ghi chép một cách rập khuôn, hay học từ theo kiểu nhớ mặt chữ, kết quả nhận lại là bạn có thể đọc hiểu nhưng sẽ không thể nghe hay nói được.\r\n\r\nNhưng nếu học từ vựng đúng cách, bạn hoàn toàn có thể sử dụng chúng một cách nhuần nhuyễn vào bất cứ ngữ cảnh nào.\r\n\r\nCách học từ vựng đúng\r\nTheo nghiên cứu của các chuyên gia lập trình ngôn ngữ tư duy, con người học hỏi và tiếp nhận thông tin qua năm giác quan. Trong đó, ba cách tiếp nhận thông tin chính là: hình ảnh, âm thanh và vận động.\r\n\r\nNgười có khuynh hướng sử dụng thị giác sẽ học từ vựng tốt nhất qua hình ảnh. Người có khuynh hướng sử dụng thính giác sẽ học tốt từ vựng qua âm thanh. Còn người có khuynh hướng sử dụng xúc giác thì sẽ học từ vựng thông qua các trò chơi vận động, kích thích trí não. Tuy nhiên, phương pháp học từ vựng tốt nhất là kết hợp cả 3 yếu tố này.\r\n\r\nHọc theo cách của người thông minh\r\nCó một ứng dụng hữu ích giúp bạn “quên từ vựng còn khó hơn việc nhớ chúng”. Đó chính là VOCA - hệ thống học từ vựng tiếng Anh thông minh với phương pháp học thú vị, không gây nhàm chán.\r\n\r\nVOCA áp dụng phương pháp flashcard nổi tiếng, kết hợp cùng hệ thống hình ảnh, âm thanh, vận động kích thích tư duy não bộ và sự ghi nhớ. Như việc học phát âm, VOCA sẽ giúp bạn kiểm tra phát âm và đưa ra góp ý để cải thiện kỹ năng phát âm theo chuẩn người bản ngữ.\r\n\r\nSau mỗi bài học, VOCA sẽ đưa ra kết quả cho bạn và so sánh với những người khác, từ đó thúc đẩy người học nỗ lực hơn nữa như trong một cuộc thi, vô tình khiến từ vựng “hằn sâu” trong tâm trí người học.\r\n\r\nPhương pháp của Tony Buzan\r\nHệ thống sẽ tự động nhắc nhở người học kiểm tra sau khi học một bài, kiểm tra trước khi vào bài mới, kiểm tra sau 7 bài, cuối cùng là kiểm tra sau 30 bài. Đây là nguyên tắc tối ưu để giúp người học ghi nhớ từ vựng sâu hơn và không rơi vào trạng thái \"học trước quên sau\".', 'Gần đây, một số diễn đàn xuất hiện ý kiến học từ vựng không quan trọng. Cụ thể, nhiều người học tiếng Anh lâu năm, lượng từ vựng nhiều nhưng vẫn không thành thạo giao tiếp được.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2017_08_14/voca8.jpg', 11, '2018-09-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `traloi`
--

CREATE TABLE `traloi` (
  `MaCauHoi` int(11) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `DapAn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traloi`
--

INSERT INTO `traloi` (`MaCauHoi`, `A`, `B`, `C`, `D`, `DapAn`) VALUES
(1, 'card', 'permit', 'license', 'identification', 'license'),
(2, 'card', 'permit', 'license', 'identification', 'license'),
(3, 'card', 'permit', 'license', 'identification', 'license'),
(4, 'card', 'permit', 'license', 'identification', 'license'),
(5, 'card', 'permit', 'license', 'identification', 'license'),
(6, 'card', 'permit', 'license', 'identification', 'license'),
(7, 'card', 'permit', 'license', 'identification', 'license'),
(8, 'card', 'permit', 'license', 'identification', 'license'),
(9, 'card', 'permit', 'license', 'identification', 'license'),
(10, 'card', 'permit', 'license', 'identification', 'license'),
(11, 'card', 'permit', 'license', 'identification', 'license'),
(12, 'card', 'permit', 'license', 'identification', 'license'),
(13, 'card', 'permit', 'license', 'identification', 'license'),
(14, 'card', 'permit', 'license', 'identification', 'license'),
(15, 'card', 'permit', 'license', 'identification', 'license'),
(16, 'card', 'permit', 'license', 'identification', 'license'),
(17, 'card', 'permit', 'license', 'identification', 'license'),
(18, 'card', 'permit', 'license', 'identification', 'license'),
(19, 'card', 'permit', 'license', 'identification', 'license'),
(20, 'card', 'permit', 'license', 'identification', 'license'),
(21, 'card', 'permit', 'license', 'identification', 'license'),
(22, 'card', 'permit', 'license', 'identification', 'license'),
(23, 'card', 'permit', 'license', 'identification', 'license'),
(24, 'card', 'permit', 'license', 'identification', 'license'),
(25, 'card', 'permit', 'license', 'identification', 'license'),
(26, 'card', 'permit', 'license', 'identification', 'license'),
(27, 'card', 'permit', 'license', 'identification', 'license'),
(28, 'card', 'permit', 'license', 'identification', 'license'),
(29, 'card', 'permit', 'license', 'identification', 'license'),
(30, 'card', 'permit', 'license', 'identification', 'license'),
(31, 'card', 'permit', 'license', 'identification', 'license'),
(32, 'card', 'permit', 'license', 'identification', 'license'),
(33, 'card', 'permit', 'license', 'identification', 'license'),
(34, 'card', 'permit', 'license', 'identification', 'license'),
(35, 'card', 'permit', 'license', 'identification', 'license'),
(36, 'card', 'permit', 'license', 'identification', 'license'),
(37, 'card', 'permit', 'license', 'identification', 'license'),
(38, 'card', 'permit', 'license', 'identification', 'license'),
(39, 'card', 'permit', 'license', 'identification', 'license'),
(40, 'card', 'permit', 'license', 'identification', 'license'),
(41, 'card', 'permit', 'license', 'identification', 'license'),
(42, 'card', 'permit', 'license', 'identification', 'license'),
(43, 'card', 'permit', 'license', 'identification', 'license'),
(44, 'card', 'permit', 'license', 'identification', 'license'),
(45, 'card', 'permit', 'license', 'identification', 'license'),
(46, 'card', 'permit', 'license', 'identification', 'license'),
(47, 'card', 'permit', 'license', 'identification', 'license'),
(48, 'card', 'permit', 'license', 'identification', 'license'),
(49, 'card', 'permit', 'license', 'identification', 'license'),
(50, 'card', 'permit', 'license', 'identification', 'license'),
(51, 'card', 'permit', 'license', 'identification', 'license'),
(52, 'card', 'permit', 'license', 'identification', 'license'),
(53, 'card', 'permit', 'license', 'identification', 'license'),
(54, 'card', 'permit', 'license', 'identification', 'license'),
(55, 'card', 'permit', 'license', 'identification', 'license'),
(56, 'card', 'permit', 'license', 'identification', 'license'),
(57, 'card', 'permit', 'license', 'identification', 'license'),
(58, 'card', 'permit', 'license', 'identification', 'license'),
(59, 'card', 'permit', 'license', 'identification', 'license'),
(60, 'card', 'permit', 'license', 'identification', 'license'),
(61, 'card', 'permit', 'license', 'identification', 'license'),
(62, 'card', 'permit', 'license', 'identification', 'license'),
(63, 'card', 'permit', 'license', 'identification', 'license'),
(64, 'card', 'permit', 'license', 'identification', 'license'),
(65, 'card', 'permit', 'license', 'identification', 'license'),
(66, 'card', 'permit', 'license', 'identification', 'license'),
(67, 'card', 'permit', 'license', 'identification', 'license'),
(68, 'card', 'permit', 'license', 'identification', 'license'),
(69, 'card', 'permit', 'license', 'identification', 'license'),
(70, 'card', 'permit', 'license', 'identification', 'license'),
(71, 'card', 'permit', 'license', 'identification', 'license'),
(72, 'card', 'permit', 'license', 'identification', 'license'),
(73, 'card', 'permit', 'license', 'identification', 'license'),
(74, 'card', 'permit', 'license', 'identification', 'license'),
(75, 'card', 'permit', 'license', 'identification', 'license'),
(76, 'card', 'permit', 'license', 'identification', 'license'),
(77, 'card', 'permit', 'license', 'identification', 'license'),
(78, 'card', 'permit', 'license', 'identification', 'license'),
(79, 'card', 'permit', 'license', 'identification', 'license'),
(80, 'card', 'permit', 'license', 'identification', 'license'),
(81, 'card', 'permit', 'license', 'identification', 'license'),
(82, 'card', 'permit', 'license', 'identification', 'license'),
(83, 'card', 'permit', 'license', 'identification', 'license'),
(84, 'card', 'permit', 'license', 'identification', 'license'),
(85, 'card', 'permit', 'license', 'identification', 'license'),
(86, 'card', 'permit', 'license', 'identification', 'license'),
(87, 'card', 'permit', 'license', 'identification', 'license'),
(88, 'card', 'permit', 'license', 'identification', 'license'),
(89, 'card', 'permit', 'license', 'identification', 'license'),
(90, 'card', 'permit', 'license', 'identification', 'license'),
(91, 'card', 'permit', 'license', 'identification', 'license'),
(92, 'card', 'permit', 'license', 'identification', 'license'),
(93, 'card', 'permit', 'license', 'identification', 'license'),
(94, 'card', 'permit', 'license', 'identification', 'license'),
(95, 'card', 'permit', 'license', 'identification', 'license'),
(96, 'card', 'permit', 'license', 'identification', 'license'),
(97, 'card', 'permit', 'license', 'identification', 'license'),
(98, 'card', 'permit', 'license', 'identification', 'license'),
(99, 'card', 'permit', 'license', 'identification', 'license'),
(100, 'card', 'permit', 'license', 'identification', 'license'),
(101, 'Are', 'Do', 'Is', 'How', 'Are'),
(102, 'Are', 'Do', 'Is', 'How', 'Are'),
(103, 'Are', 'Do', 'Is', 'How', 'Are'),
(104, 'Are', 'Do', 'Is', 'How', 'Are'),
(105, 'Are', 'Do', 'Is', 'How', 'Are'),
(106, 'Are', 'Do', 'Is', 'How', 'Are'),
(107, 'Are', 'Do', 'Is', 'How', 'Are'),
(108, 'Are', 'Do', 'Is', 'How', 'Are'),
(109, 'Are', 'Do', 'Is', 'How', 'Are'),
(110, 'Are', 'Do', 'Is', 'How', 'Are'),
(111, 'Are', 'Do', 'Is', 'How', 'Are'),
(112, 'Are', 'Do', 'Is', 'How', 'Are'),
(113, 'Are', 'Do', 'Is', 'How', 'Are'),
(114, 'Are', 'Do', 'Is', 'How', 'Are'),
(115, 'Are', 'Do', 'Is', 'How', 'Are'),
(116, 'Are', 'Do', 'Is', 'How', 'Are'),
(117, 'Are', 'Do', 'Is', 'How', 'Are'),
(118, 'Are', 'Do', 'Is', 'How', 'Are'),
(119, 'Are', 'Do', 'Is', 'How', 'Are'),
(120, 'Are', 'Do', 'Is', 'How', 'Are'),
(121, 'Are', 'Do', 'Is', 'How', 'Are'),
(122, 'Are', 'Do', 'Is', 'How', 'Are'),
(123, 'Are', 'Do', 'Is', 'How', 'Are'),
(124, 'Are', 'Do', 'Is', 'How', 'Are'),
(125, 'Are', 'Do', 'Is', 'How', 'Are'),
(126, 'Are', 'Do', 'Is', 'How', 'Are'),
(127, 'Are', 'Do', 'Is', 'How', 'Are'),
(128, 'Are', 'Do', 'Is', 'How', 'Are'),
(129, 'Are', 'Do', 'Is', 'How', 'Are'),
(130, 'Are', 'Do', 'Is', 'How', 'Are'),
(131, 'Are', 'Do', 'Is', 'How', 'Are'),
(132, 'Are', 'Do', 'Is', 'How', 'Are'),
(133, 'Are', 'Do', 'Is', 'How', 'Are'),
(134, 'Are', 'Do', 'Is', 'How', 'Are'),
(135, 'Are', 'Do', 'Is', 'How', 'Are'),
(136, 'Are', 'Do', 'Is', 'How', 'Are'),
(137, 'Are', 'Do', 'Is', 'How', 'Are'),
(138, 'Are', 'Do', 'Is', 'How', 'Are'),
(139, 'Are', 'Do', 'Is', 'How', 'Are'),
(140, 'Are', 'Do', 'Is', 'How', 'Are'),
(141, 'Are', 'Do', 'Is', 'How', 'Are'),
(142, 'Are', 'Do', 'Is', 'How', 'Are'),
(143, 'Are', 'Do', 'Is', 'How', 'Are'),
(144, 'Are', 'Do', 'Is', 'How', 'Are'),
(145, 'Are', 'Do', 'Is', 'How', 'Are'),
(146, 'Are', 'Do', 'Is', 'How', 'Are'),
(147, 'Are', 'Do', 'Is', 'How', 'Are'),
(148, 'Are', 'Do', 'Is', 'How', 'Are'),
(149, 'Are', 'Do', 'Is', 'How', 'Are'),
(150, 'Are', 'Do', 'Is', 'How', 'Are'),
(151, 'Are', 'Do', 'Is', 'How', 'Are'),
(152, 'Are', 'Do', 'Is', 'How', 'Are'),
(153, 'Are', 'Do', 'Is', 'How', 'Are'),
(154, 'Are', 'Do', 'Is', 'How', 'Are'),
(155, 'Are', 'Do', 'Is', 'How', 'Are'),
(156, 'Are', 'Do', 'Is', 'How', 'Are'),
(157, 'Are', 'Do', 'Is', 'How', 'Are'),
(158, 'Are', 'Do', 'Is', 'How', 'Are'),
(159, 'Are', 'Do', 'Is', 'How', 'Are'),
(160, 'Are', 'Do', 'Is', 'How', 'Are'),
(161, 'Are', 'Do', 'Is', 'How', 'Are'),
(162, 'Are', 'Do', 'Is', 'How', 'Are'),
(163, 'Are', 'Do', 'Is', 'How', 'Are'),
(164, 'Are', 'Do', 'Is', 'How', 'Are'),
(165, 'Are', 'Do', 'Is', 'How', 'Are'),
(166, 'Are', 'Do', 'Is', 'How', 'Are'),
(167, 'Are', 'Do', 'Is', 'How', 'Are'),
(168, 'Are', 'Do', 'Is', 'How', 'Are'),
(169, 'Are', 'Do', 'Is', 'How', 'Are'),
(170, 'Are', 'Do', 'Is', 'How', 'Are'),
(171, 'Are', 'Do', 'Is', 'How', 'Are'),
(172, 'Are', 'Do', 'Is', 'How', 'Are'),
(173, 'Are', 'Do', 'Is', 'How', 'Are'),
(174, 'Are', 'Do', 'Is', 'How', 'Are'),
(175, 'Are', 'Do', 'Is', 'How', 'Are'),
(176, 'Are', 'Do', 'Is', 'How', 'Are'),
(177, 'Are', 'Do', 'Is', 'How', 'Are'),
(178, 'Are', 'Do', 'Is', 'How', 'Are'),
(179, 'Are', 'Do', 'Is', 'How', 'Are'),
(180, 'Are', 'Do', 'Is', 'How', 'Are'),
(181, 'Are', 'Do', 'Is', 'How', 'Are'),
(182, 'Are', 'Do', 'Is', 'How', 'Are'),
(183, 'Are', 'Do', 'Is', 'How', 'Are'),
(184, 'Are', 'Do', 'Is', 'How', 'Are'),
(185, 'Are', 'Do', 'Is', 'How', 'Are'),
(186, 'Are', 'Do', 'Is', 'How', 'Are'),
(187, 'Are', 'Do', 'Is', 'How', 'Are'),
(188, 'Are', 'Do', 'Is', 'How', 'Are'),
(189, 'Are', 'Do', 'Is', 'How', 'Are'),
(190, 'Are', 'Do', 'Is', 'How', 'Are'),
(191, 'Are', 'Do', 'Is', 'How', 'Are'),
(192, 'Are', 'Do', 'Is', 'How', 'Are'),
(193, 'Are', 'Do', 'Is', 'How', 'Are'),
(194, 'Are', 'Do', 'Is', 'How', 'Are'),
(195, 'Are', 'Do', 'Is', 'How', 'Are'),
(196, 'Are', 'Do', 'Is', 'How', 'Are'),
(197, 'Are', 'Do', 'Is', 'How', 'Are'),
(198, 'Are', 'Do', 'Is', 'How', 'Are'),
(199, 'Are', 'Do', 'Is', 'How', 'Are'),
(200, 'Are', 'Do', 'Is', 'How', 'Are');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bailam`
--
ALTER TABLE `bailam`
  ADD PRIMARY KEY (`IdBaiLam`,`IdUser`,`MaDe`),
  ADD KEY `fk_bailam_nguoidung1` (`IdUser`),
  ADD KEY `fk_bailam_dethi1` (`MaDe`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`MaCauHoi`),
  ADD KEY `fk_cauhoi_loaicauhoi1` (`LoaiCauHoi`),
  ADD KEY `fk_cauhoi_dethi1` (`MaDe`),
  ADD KEY `fk_cauhoi_nguoidung1` (`NguoiTao`);

--
-- Indexes for table `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`MaDe`),
  ADD KEY `fk_dethi_nguoidung` (`NguoiTao`);

--
-- Indexes for table `loaicauhoi`
--
ALTER TABLE `loaicauhoi`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`IdUser`),
  ADD KEY `fk_nguoidung_quyen1` (`Quyen`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`MaThongBao`,`NguoiTao`),
  ADD KEY `fk_thongbao_nguoidung1` (`NguoiTao`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTinTuc`),
  ADD KEY `fk_tintuc_nguoidung1` (`NguoiTao`);

--
-- Indexes for table `traloi`
--
ALTER TABLE `traloi`
  ADD PRIMARY KEY (`MaCauHoi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bailam`
--
ALTER TABLE `bailam`
  MODIFY `IdBaiLam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MaCauHoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `dethi`
--
ALTER TABLE `dethi`
  MODIFY `MaDe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `MaThongBao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bailam`
--
ALTER TABLE `bailam`
  ADD CONSTRAINT `fk_bailam_dethi1` FOREIGN KEY (`MaDe`) REFERENCES `dethi` (`MaDe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bailam_nguoidung1` FOREIGN KEY (`IdUser`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `fk_cauhoi_dethi1` FOREIGN KEY (`MaDe`) REFERENCES `dethi` (`MaDe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cauhoi_loaicauhoi1` FOREIGN KEY (`LoaiCauHoi`) REFERENCES `loaicauhoi` (`MaLoai`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cauhoi_nguoidung1` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dethi`
--
ALTER TABLE `dethi`
  ADD CONSTRAINT `fk_dethi_nguoidung` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `fk_nguoidung_quyen1` FOREIGN KEY (`Quyen`) REFERENCES `quyen` (`MaQuyen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `fk_thongbao_nguoidung1` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_tintuc_nguoidung1` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `traloi`
--
ALTER TABLE `traloi`
  ADD CONSTRAINT `fk_traloi_cauhoi1` FOREIGN KEY (`MaCauHoi`) REFERENCES `cauhoi` (`MaCauHoi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

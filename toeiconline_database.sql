-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2018 at 04:19 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toeiconline`
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

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCauHoi` int(11) NOT NULL,
  `NoiDung` varchar(500) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `MaDe` int(11) NOT NULL,
  `NguoiTao` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL,
  `NgayChinhSua` datetime DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `LoaiCauHoi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `loaicauhoi`
--

CREATE TABLE `loaicauhoi` (
  `MaLoai` varchar(10) NOT NULL,
  `TenLoai` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `NgayThamGia` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` int(11) NOT NULL DEFAULT '3',
  `MoTa` varchar(100) NOT NULL DEFAULT 'Người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `IdBaiLam` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dethi`
--
ALTER TABLE `dethi`
  MODIFY `MaDe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `MaThongBao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT;
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

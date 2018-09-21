-- MySQL Workbench Forward Engineering

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- -----------------------------------------------------
-- Table `quyen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `quyen` (
  `MaQuyen` INT(11) NOT NULL,
  `MoTa` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`MaQuyen`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `nguoidung`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `IdUser` VARCHAR(50) NOT NULL,
  `MatKhau` VARCHAR(50) NOT NULL,
  `Quyen` INT(11) NOT NULL,
  `Mail` VARCHAR(50) NOT NULL,
  `KichHoat` TINYINT(1) NOT NULL,
  PRIMARY KEY (`IdUser`),
  CONSTRAINT `nguoidung_ibfk_1`
    FOREIGN KEY (`Quyen`)
    REFERENCES `quyen` (`MaQuyen`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dethi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dethi` (
  `MaDe` INT(11) NOT NULL,
  `TieuDe` VARCHAR(50) NOT NULL,
  `MoTa` VARCHAR(200) NOT NULL,
  `ThoiLuong` INT(11) NOT NULL,
  `SoCau` INT(11) NOT NULL,
  `NguoiTao` VARCHAR(50) NOT NULL,
  `NgayTao` DATETIME NOT NULL,
  `SoLanThi` INT(11) NOT NULL,
  `TrangThai` TINYINT(1) NOT NULL,
  PRIMARY KEY (`MaDe`),
  CONSTRAINT `fk_dethi_nguoidung1`
    FOREIGN KEY (`NguoiTao`)
    REFERENCES `nguoidung` (`IdUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bailam`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bailam` (
  `IdBaiLam` INT(11) NOT NULL,
  `IdUser` VARCHAR(50) NOT NULL,
  `MaDe` INT(11) NOT NULL,
  `NgayThi` DATETIME NOT NULL,
  `SoDiem` INT(11) NOT NULL,
  PRIMARY KEY (`IdBaiLam`, `MaDe`, `IdUser`),
  CONSTRAINT `fk_bailam_nguoidung1`
    FOREIGN KEY (`IdUser`)
    REFERENCES `nguoidung` (`IdUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bailam_dethi1`
    FOREIGN KEY (`MaDe`)
    REFERENCES `dethi` (`MaDe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `cauhoi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cauhoi` (
  `MaCauHoi` INT(11) NOT NULL,
  `NoiDung` VARCHAR(500) NOT NULL,
  `HinhAnh` VARCHAR(255) NOT NULL,
  `MaDe` INT(11) NOT NULL,
  `NguoiTao` VARCHAR(50) NOT NULL,
  `NgayTao` DATETIME NOT NULL,
  `NgayChinhSua` DATETIME NOT NULL,
  `NguoiChinhSua` VARCHAR(50) NOT NULL,
  `TrangThai` TINYINT(1) NOT NULL,
  PRIMARY KEY (`MaCauHoi`),
  CONSTRAINT `fk_cauhoi_nguoidung1`
    FOREIGN KEY (`NguoiTao`)
    REFERENCES `nguoidung` (`IdUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cauhoi_dethi1`
    FOREIGN KEY (`MaDe`)
    REFERENCES `dethi` (`MaDe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `thongbao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `thongbao` (
  `MaThongBao` INT(11) NOT NULL,
  `TieuDe` VARCHAR(100) NOT NULL,
  `NoiDung` TEXT NOT NULL,
  `Ngay` DATETIME NOT NULL,
  `NguoiTao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`MaThongBao`),
  CONSTRAINT `fk_thongbao_nguoidung1`
    FOREIGN KEY (`NguoiTao`)
    REFERENCES `nguoidung` (`IdUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tintuc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tintuc` (
  `MaTinTuc` INT(11) NOT NULL,
  `TieuDe` VARCHAR(100) NOT NULL,
  `NoiDung` TEXT NOT NULL,
  `TomTat` VARCHAR(255) NOT NULL,
  `AnhMinhHoa` VARCHAR(255) NOT NULL,
  `NguoiTao` VARCHAR(50) NOT NULL,
  `NgayTao` DATETIME NOT NULL,
  `NgayChinhSua` DATETIME NOT NULL,
  PRIMARY KEY (`MaTinTuc`),
  CONSTRAINT `fk_tintuc_nguoidung1`
    FOREIGN KEY (`NguoiTao`)
    REFERENCES `nguoidung` (`IdUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `traloi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traloi` (
  `MaCauHoi` INT(11) NOT NULL,
  `A` VARCHAR(100) NOT NULL,
  `B` VARCHAR(100) NOT NULL,
  `C` VARCHAR(100) NOT NULL,
  `D` VARCHAR(100) NOT NULL,
  `DapAn` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`MaCauHoi`),
  CONSTRAINT `fk_traloi_cauhoi1`
    FOREIGN KEY (`MaCauHoi`)
    REFERENCES `cauhoi` (`MaCauHoi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

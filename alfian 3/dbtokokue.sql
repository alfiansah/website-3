-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2014 at 06:38 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtokokue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'alfiansah', 'felix007'),
(2, 'felix', 'fian'),
(3, 'haris', 'fian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telphone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `nama`, `telphone`, `email`, `alamat`, `pesan`) VALUES
('001', 'Alfiansah', '085711448108', 'alfiansahts@gmail.com', 'jl kebagusan rt 03 rw 04 no 17c ', 'gan webnya bagus nih gan bikinnya gmn ?'),
('002', 'Andi', '081381199927', 'aldi_fadzar@yahoo.co.id', 'jl suka maju mundur rt 13 rw 04 no 666', 'pertamax'),
('003', 'Hanggi Anggono', '081381199927', 'hanggi_anggono@yahoo.com', 'jl suka maju no 14a bogor', 'gan itu yang pertamax di block dong'),
('004', 'Haris Afadi', '085711448108', 'haris_afandi@gmail.com', 'jl suka mundur no 15g jakarta selatan', 'keduax'),
('005', 'Hari Kurniawan', '08561041727', 'hari_kundo@gmail.com', 'jl suka turun ni 15a jakarta utara', 'ini ada apa yaa ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_harga`
--

CREATE TABLE IF NOT EXISTS `tbl_harga` (
  `kd_barang` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  PRIMARY KEY (`kd_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_harga`
--

INSERT INTO `tbl_harga` (`kd_barang`, `nama`, `harga`) VALUES
('b001', 'Almond Coklat Keju', 85000),
('b002', 'Putri Rosella', 75000),
('b003', 'Almond Green Tea', 85000),
('b004', 'Jaring Coklat', 70000),
('b005', 'Sagu Keju', 70000),
('b006', 'Putri Salju', 70000),
('b007', 'Coklat Kenari', 75000),
('b008', 'Nastar Keju', 80000),
('b009', 'Bunga Nanas', 70000),
('b010', 'Cappucino Mente', 70000),
('b011', 'Blueberry Cookies', 75000),
('b012', 'Monde', 80000),
('b013', 'Smartis', 70000),
('b014', 'Coklat Wijen', 75000),
('b015', 'Semprit Susu', 80000),
('b016', 'Kastengel Keju', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pemesanan` (
  `no_pemesanan` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telphone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `jenis_kue` varchar(50) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(15) NOT NULL,
  PRIMARY KEY (`no_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`no_pemesanan`, `nama`, `telphone`, `email`, `jk`, `jenis_kue`, `jumlah`, `alamat`, `kode_pos`) VALUES
('A001', 'mera', '085711448108', 'alfiansahts@gmail.com', 'laki - laki', 'Almond Coklat Keju', 5, 'jl kebagusan wates rt 03 rw 04 no 17c', '12620'),
('A002', 'Hanggi Anggono', '081381199927', 'hanggi_anggono@yahoo.com', 'Laki - Laki', 'Putri Salju', 5, 'jl suka mundur no 13 bogor', '12450'),
('A003', 'Hari Kurniawan', '08561041727', 'hari_kundo@gmail.com', 'perempuan', 'Almond Coklat Keju', 5, 'jl maju mundur rt 04 rw 17 jakarta utara', '13290'),
('A004', 'Haris Afadi', '081381199927', 'haris_afandi@gmail.com', 'Laki - Laki', 'Almond Coklat Keju', 6, 'jl naik turun no 13 rt 04 jakarta selatan', '12390');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

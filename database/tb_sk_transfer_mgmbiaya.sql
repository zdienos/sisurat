-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 11:03 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_transfer_mgmbiaya`
--

CREATE TABLE `tb_sk_transfer_mgmbiaya` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tgl_pencairan` date NOT NULL,
  `jenis_pencairan` varchar(50) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `jml_order_mgm` int(11) NOT NULL,
  `jml_siswa_mgm` int(11) NOT NULL,
  `jml_order_biaya` int(11) NOT NULL,
  `jml_siswa_biaya` int(11) NOT NULL,
  `tot_order` int(11) NOT NULL,
  `tot_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_transfer_mgmbiaya`
--

INSERT INTO `tb_sk_transfer_mgmbiaya` (`no`, `no_surat`, `tgl_pencairan`, `jenis_pencairan`, `bank`, `jml_order_mgm`, `jml_siswa_mgm`, `jml_order_biaya`, `jml_siswa_biaya`, `tot_order`, `tot_siswa`) VALUES
(37, 'gdg', '2018-11-30', 'mgm', 'bank 1', 2000, 1, 0, 0, 2000, 1),
(37, 'gdg', '2018-11-30', 'mgm', 'bank 2', 54000, 25, 0, 0, 54000, 25),
(38, 'gdg/hani', '2018-11-30', 'mgm dan pengembalian biaya', 'bank laain', 1, 1, 1, 1, 2, 2),
(38, 'gdg/hani', '2018-11-30', 'mgm dan pengembalian biaya', 'bank 2', 2, 2, 2, 2, 4, 4),
(42, 'mytgmt', '2018-01-01', 'pengembalian biaya', 's', 0, 0, 1, 1, 1, 1),
(42, 'mytgmt', '2018-01-01', 'pengembalian biaya', 'f', 0, 0, 2, 2, 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

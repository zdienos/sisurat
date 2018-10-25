-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 08:47 AM
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
-- Table structure for table `tb_sk_sidak`
--

CREATE TABLE `tb_sk_sidak` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `tujuan_penerima` varchar(255) NOT NULL,
  `tgl_sidak` date NOT NULL,
  `petugas_sidak` text NOT NULL,
  `tugas_sidak` varchar(255) NOT NULL,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_sidak`
--

INSERT INTO `tb_sk_sidak` (`no`, `no_surat`, `perihal`, `nama_penerima`, `tujuan_penerima`, `tgl_sidak`, `petugas_sidak`, `tugas_sidak`, `tembusan`) VALUES
(3, 'rger', 'sidak', 'ibu dra.', 'Kepala Unit Ganesha operation st 35', '2018-01-01', 'Ima-staff sidak,hani-staff keuangan, maliah- staff keuangan', 'Administrasi, Akuntansi, dan tangible', 'hani,maliah,ima'),
(4, 'rger', 'sidak', 'ibu dra.', 'Kepala Unit Ganesha operation st 35', '2018-01-01', 'Ima-staff sidak,hani-staff keuangan, maliah- staff keuangan', 'Administrasi, Akuntansi, dan tangible', 'hani,maliah,ima'),
(5, 'rger', 'sidak', 'ibu dra.', 'Kepala Unit Ganesha operation st 35', '2018-01-01', 'Ima-staff sidak,hani-staff keuangan, maliah- staff keuangan', 'Administrasi, Akuntansi, dan tangible', 'hani,maliah,ima'),
(6, 'rger', 'sidak', 'ibu dra.', 'Kepala Unit Ganesha operation st 35', '2018-01-01', 'Ima-staff sidak,hani-staff keuangan,maliah-staff keuangan', 'Administrasi, Akuntansi, dan tangible', 'hani,maliah,ima'),
(7, 'dgd', 'hdf', 'hdfh', 'Kepala Unit hdsfh', '2018-02-01', 'hdhdh', 'herh', 'hreh'),
(8, 'gerg', 'grg', 'reg', 'Kepala Rayon Ganesha operation st 35', '2018-01-01', 'Ima-staff sidak,hani-staff keuangan,maliah- staff keuangan', 'Administrasi, Akuntansi, dan tangible', 'hani,maliah,ima');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

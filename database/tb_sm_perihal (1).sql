-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 04:14 AM
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
-- Table structure for table `tb_sm_perihal`
--

CREATE TABLE `tb_sm_perihal` (
  `id_kelompok` int(11) NOT NULL,
  `bagian_pengirim` varchar(100) NOT NULL,
  `jenissurat` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sm_perihal`
--

INSERT INTO `tb_sm_perihal` (`id_kelompok`, `bagian_pengirim`, `jenissurat`) VALUES
(1, 'test', 'test'),
(2, 'test 2', 'test 2'),
(3, 'test 3', 'test 3'),
(4, 'test 4', 'tes'),
(19, 'SDM', 'Tanggapan Cuti'),
(20, 'SDM', 'Informasi Honor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sm_perihal`
--
ALTER TABLE `tb_sm_perihal`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sm_perihal`
--
ALTER TABLE `tb_sm_perihal`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

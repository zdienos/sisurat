-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 02:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
-- Table structure for table `skeluar`
--

CREATE TABLE `skeluar` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `nama_tujuan` varchar(100) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `tgl_SuratKeluar` date NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeluar`
--

INSERT INTO `skeluar` (`no`, `no_surat`, `perihal`, `nama_tujuan`, `tujuan`, `jenis_surat`, `tgl_SuratKeluar`, `userid`) VALUES
(1, 'abc/xscsc', 'csc', 'csc', 'cscs', 'Pengembalian Tidak Kuota', '2018-10-10', ''),
(2, ' acnak/clanckacn', 'acnnmac', 'akjnckaj', ' camn cakj', 'Pengembalian Tidak Kuota', '2018-10-10', ''),
(3, 'ak cka c', 'ms kac ', 'kacnkacn', 'akakc', 'Pengembalian Tidak Kuota', '2018-10-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `smasuk`
--

CREATE TABLE `smasuk` (
  `no_surat` varchar(100) NOT NULL,
  `hal` varchar(100) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smasuk`
--

INSERT INTO `smasuk` (`no_surat`, `hal`, `kepada`, `dari`, `keterangan`, `tanggal`) VALUES
('123', 'hal hal', 'kepada', 'dari', 'keterangan', '2018-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `judul_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_main_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `judul_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Dashboard', 'home', 'fa-fa-dashboard', '0'),
(2, 'Surat Masuk', '#', 'fa-fa-dashboard', '0'),
(3, 'Surat Keluar', '#', 'fa-fa-dashboard', '0'),
(4, 'Data Surat Masuk', 'Smasuk/data_table', 'fa-fa-dashboard', '2'),
(5, 'Input Surat Masuk', 'Smasuk', 'fa-fa-dashboard', '2'),
(6, 'Data Surat Keluar', 'Skeluar/data_table', 'fa-fa-dashboard', '3'),
(7, 'Input Surat Keluar', 'Skeluar', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_tidak_kuota`
--

CREATE TABLE `tb_sk_tidak_kuota` (
  `no_surat` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jumlahbayar` int(11) NOT NULL,
  `pengembaliannorek` varchar(30) NOT NULL,
  `tembusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_tidak_kuota`
--

INSERT INTO `tb_sk_tidak_kuota` (`no_surat`, `nama_siswa`, `kelas`, `jumlahbayar`, `pengembaliannorek`, `tembusan`) VALUES
('1', 'csc', 'cscs', 0, 'cscs', 'scscs'),
('2', 'acnkacb', 'nakbc', 0, 'kabck', 'nkavnk'),
('3', 'lacmkam', 'mamco', 0, 'cmaomc', 'maocmao');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'hani', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skeluar`
--
ALTER TABLE `skeluar`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `smasuk`
--
ALTER TABLE `smasuk`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sk_tidak_kuota`
--
ALTER TABLE `tb_sk_tidak_kuota`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skeluar`
--
ALTER TABLE `skeluar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

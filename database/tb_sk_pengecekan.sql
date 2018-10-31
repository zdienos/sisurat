-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2018 pada 04.10
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

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
-- Struktur dari tabel `tb_sk_pengecekan`
--

CREATE TABLE `tb_sk_pengecekan` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `cku` varchar(100) NOT NULL,
  `norektrs` varchar(100) NOT NULL,
  `tgltransfer` date NOT NULL,
  `namatransfer` varchar(100) NOT NULL,
  `norekpentransfer` varchar(100) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `tglkonfirmasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sk_pengecekan`
--

INSERT INTO `tb_sk_pengecekan` (`no`, `no_surat`, `cku`, `norektrs`, `tgltransfer`, `namatransfer`, `norekpentransfer`, `nominal`, `hasil`, `tglkonfirmasi`) VALUES
(41, 'sdfg', 'asdf', 'asdf', '2018-10-03', 'asdf', 'asdf', '1234', 'asdf', '2018-10-18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sk_pengecekan`
--
ALTER TABLE `tb_sk_pengecekan`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

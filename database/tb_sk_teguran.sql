-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2018 pada 06.25
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
-- Struktur dari tabel `tb_sk_teguran`
--

CREATE TABLE `tb_sk_teguran` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  `bgn_tegur` varchar(50) NOT NULL,
  `teguran` text NOT NULL,
  `penutup` text NOT NULL,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sk_teguran`
--

INSERT INTO `tb_sk_teguran` (`no`, `no_surat`, `pemeriksa`, `bgn_tegur`, `teguran`, `penutup`, `tembusan`) VALUES
(10, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf,asdf'),
(24, 'sdfg', 'sdfg', 'sdfg', 'sdfg', 'sdfg', 'sdfg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sk_teguran`
--
ALTER TABLE `tb_sk_teguran`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

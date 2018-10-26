-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2018 pada 06.24
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
-- Struktur dari tabel `tb_sk_peringatan`
--

CREATE TABLE `tb_sk_peringatan` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `loktujuan` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `spke` char(1) NOT NULL,
  `kesalahan` text NOT NULL,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sk_peringatan`
--

INSERT INTO `tb_sk_peringatan` (`no`, `no_surat`, `loktujuan`, `nip`, `spke`, `kesalahan`, `tembusan`) VALUES
(4, '1234', 'qwer', '1234', '1', 'qwer', 'qwer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sk_peringatan`
--
ALTER TABLE `tb_sk_peringatan`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

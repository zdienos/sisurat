-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2018 pada 10.01
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
-- Struktur dari tabel `tb_sk_intruksi_transfer`
--

CREATE TABLE `tb_sk_intruksi_transfer` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `ckuitf` varchar(100) NOT NULL,
  `pembayaransiswa` int(11) NOT NULL,
  `kuitansisetor` int(50) NOT NULL,
  `tgl_lappem` date NOT NULL,
  `nokuitansi` varchar(100) NOT NULL,
  `petugas_kuitansi` varchar(150) NOT NULL,
  `tgl_waset` date NOT NULL,
  `tgl_tanter` date NOT NULL,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sk_intruksi_transfer`
--

INSERT INTO `tb_sk_intruksi_transfer` (`no`, `no_surat`, `ckuitf`, `pembayaransiswa`, `kuitansisetor`, `tgl_lappem`, `nokuitansi`, `petugas_kuitansi`, `tgl_waset`, `tgl_tanter`, `tembusan`) VALUES
(19972, 'asdf', 'asdf', 1000000, 800000, '2018-11-08', 'asdf', 'asdfasdf', '2018-11-16', '2018-11-10', 'asdf,asdf,asdf,asdf,asdf,asdf,asdf,asdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sk_intruksi_transfer`
--
ALTER TABLE `tb_sk_intruksi_transfer`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

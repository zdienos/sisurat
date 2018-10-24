-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2018 pada 10.51
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
-- Struktur dari tabel `tb_sk_tidak_kuota`
--

CREATE TABLE `tb_sk_tidak_kuota` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `jumlahbayar` varchar(150) NOT NULL,
  `pengembaliannorek` varchar(200) NOT NULL,
  `tembusan` varchar(100) NOT NULL,
  `tgl_marketing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sk_tidak_kuota`
--

INSERT INTO `tb_sk_tidak_kuota` (`no`, `no_surat`, `nama_siswa`, `kelas`, `unit`, `jumlahbayar`, `pengembaliannorek`, `tembusan`, `tgl_marketing`) VALUES
(5, '', '', '', '', '0', '', '', '0000-00-00'),
(8, 'sdfg', 'sdfg', 'sdfg', '', '23423423', 'sdfg', 'sdfg', '2018-10-02'),
(12, 'asdf', '', '', '', '0', '', '', '0000-00-00'),
(14, 'asdf', '', '', '', '0', '', '', '0000-00-00'),
(16, '', 'asdf', 'asdf', '', '0', 'asdf', 'asdf', '2018-10-31'),
(17, 'asdf', 'asdf', 'asdf', '', '123', 'adsf', 'adf', '2018-10-02'),
(18, 'asdf', 'asdf', 'asdf', '', '234', 'asdf', 'adf,asdf,ad', '2018-10-31'),
(19, 'asdf', 'asdf', 'adsf', 'kediri saja', '1231', 'adsf', 'asdf,adsf', '2018-10-17'),
(20, 'asdfasdf', 'asdf', '12312', 'asdfa', '1312', 'BRI <br> 0883 01 017263 530 <br> a.n Srimulyani', 'adf,asdf,ad,a,a,a,a,a', '2018-10-02'),
(21, 'asdf', 'asdf', 'asdf', 'asdf', '0', 'asdf', 'asdf,asdf,asdf,asdf,asdf,asdf,asdf', '2018-10-30'),
(22, 'asdf', 'asdf', 'asdf', 'asdf', '0', '1234', 'asdf,adf,', '2018-10-30'),
(23, 'asdf', '', '', '', '0', '', '', '0000-00-00'),
(25, 'asdf', 'adf', 'adf', 'asdf', 'asdfasdf', 'asdf', 'asdf', '2018-10-10'),
(26, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf,asdf,asdf,asdf,asdf,asdf,asdf', '2018-11-06'),
(27, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'adf', '2018-10-10'),
(28, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2018-10-16'),
(29, 'asdf', 'adsf', 'asdf', 'asdf', 'adsf', 'adsf', 'adf', '2018-10-04'),
(30, 'aasdf', 'adf', 'adf', 'asdf', 'adf', 'adf', 'adsf,afadf,adf', '2018-10-10'),
(31, 'aasdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2018-10-23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sk_tidak_kuota`
--
ALTER TABLE `tb_sk_tidak_kuota`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

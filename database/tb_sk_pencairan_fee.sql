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
-- Struktur dari tabel `tb_sk_pencairan_fee`
--

CREATE TABLE `tb_sk_pencairan_fee` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `tgl_marketing` date NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `mou` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `jml_siswa` int(11) NOT NULL,
  `acc` int(11) NOT NULL,
  `tdk_acc` int(11) NOT NULL,
  `fee_siswa` int(11) NOT NULL,
  `jml_disetujui` float NOT NULL,
  `ket` text NOT NULL,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sk_pencairan_fee`
--

INSERT INTO `tb_sk_pencairan_fee` (`no`, `no_surat`, `lampiran`, `tgl_marketing`, `sekolah`, `mou`, `program`, `jml_siswa`, `acc`, `tdk_acc`, `fee_siswa`, `jml_disetujui`, `ket`, `tembusan`) VALUES
(1, 'asdf', 'asdf', '2018-10-30', 'asdf', 'asdf', 'adsf', 2, 1, 1, 1, 1, 'asdf', 'asdf,asdf'),
(6, 'asdfasdf', 'asdfasdf', '2018-10-24', 'asd', 'adf', 'adf', 2, 1, 1, 1, 1, 'wrwq', 'asdfas,asdf,asdf'),
(11, 'asdf', 'asdfasdf', '2018-10-24', 'asdf', 'asdf', '2', 4, 2, 2, 2, 4, '2', 'asdfas,asdf,asdf'),
(13, '', 'asdfa', '2018-10-30', 'asdf', 'asdf', 'asdf', 3, 1, 2, 2, 2, 'adf', 'asdfas,asdf,asdf'),
(13, '', 'asdfa', '2018-10-30', 'asdf', 'asdf', 'asdf', 3, 1, 2, 1, 1, 'adf', 'asdfas,asdf,asdf'),
(33, 'asdf', 'adsf', '2018-10-03', 'adf', 'adf', '1', 2, 1, 1, 1, 1, 'af', 'asdf'),
(34, 'fasfd', 'asdfasdf', '2018-10-31', '1', '1', '1', 2, 1, 1, 1, 1, '1', 'adsfl,dfa,sdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

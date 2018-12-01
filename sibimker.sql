-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 10:09 AM
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
-- Database: `sibimker`
--

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id_histori` int(11) NOT NULL,
  `pelaku` varchar(50) NOT NULL,
  `tgl_input` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `pelaku`, `tgl_input`, `keterangan`) VALUES
(1, 'Hani Maliah', '2018-11-22', 'asdf-asdf-asdf-asdf-asd-asdf-asdf-2018-11-23-1-2-2-1-0'),
(2, 'Hani Maliah', '2018-11-22', '1-1-1-1-1-1-1-2018-11-23-1-1-1-1-0'),
(3, 'Hani Maliah', '2018-11-27', 'hani-hani-hani-hani-hani-hani-hani-2018-11-27-30-500000-15000000-3-1500000'),
(4, 'Hani Maliah', '2018-11-27', 'sidikalang-sidikalang`-empat lima 161-a-Bimker-18/19-SMAN 1 LAGUBOTI-12 IPA-2018-11-27-20-500000-10000000-3-0'),
(5, 'Hani Maliah', '2018-11-27', 'asdf-asdf-SDF-SF-SGFD-SGFD-SDGF-2018-11-28-2-200000-400000-2-50000'),
(6, 'Eli Rahmawati', '2018-11-27', 'Asahan & Labuan Batu-Rantau Prapat-Husni Thamrin-Bimbel-1819-SD Kuntum Bumi Rantauprapat-6 SD-2018/10/04-15-725000-10875000-3-0'),
(7, 'Eli Rahmawati', '2018-11-27', 'Asahan & Labuan Batu-Rantau Prapat-Husni Thamrin-Bimbel-1819-SMP IT Robbani Rantauprapat-9 SMP-2018/09/08-12-1200000-14400000-3-0'),
(8, 'Eli Rahmawati', '2018-11-27', 'Tangerang Kota-Tangerang-Cipondoh-Bimbel-1819-SMA IT  Asy-Syukriyyah-12 IPA, 12 IPS-2018/07/31-61-1534426-93600000-3-0'),
(9, 'Eli Rahmawati', '2018-11-27', 'Surakarta-Surakarta-Moewardi-Bimbel-1819-MTSn 1 Surakarta (IX SMP)-9 SMP-2018/08/07-68-2600000-176800000-2-50000'),
(10, 'Eli Rahmawati', '2018-11-27', 'Surakarta-Surakarta-Moewardi-Bimbel-1819-MTSn 1 Surakarta (IX SMP)-9 SMP-2018/08/07-68-2600000-176800000-2-50000'),
(11, 'Eli Rahmawati', '2018-11-27', 'Surakarta-Surakarta-Moewardi-Bimbel-1819-MTSn 1 Surakarta (IX SMP)-9 SMP-2018/08/07-68-2600000-176800000-2-50000'),
(12, 'Hani Maliah', '2018-11-27', 'asdf-asdf-dasf-asdf-asdf-asdf-asdf-2018-11-28-1-1-1-1-0'),
(13, 'Eli Rahmawati', '2018-11-27', 'Bali-Denpasar-Sudirman F-Bimbel-1819-Regent School-6 SD-2018/07/24-63-1250000-78750000-2-0'),
(14, 'Eli Rahmawati', '2018-11-27', 'Bali-Denpasar-Sudirman F-Bimbel-1819-SD Champion School-5 SD-2018/08/06-12-1400000-16800000-3-0'),
(15, 'Eli Rahmawati', '2018-11-27', 'Bali-Denpasar-Tukad Pakerisan-Bimbel-1819-SD Pelita Hati-6 SD-2018/08/16-11-1200000-13200000-3-0'),
(16, 'Nurul Nugraheni', '2018-11-27', 'Pematang Siantar-Simalungun (Saribudolok)-Kabanjahe 45-Bimbel Kerjasama-1819-SMA/SMK Plus Efarina-10, 11, 12 IPA-2018-09-06-509-4900000-1113250000-6-76050000'),
(17, 'Eli Rahmawati', '2018-11-27', 'Surakarta-Surakarta-Veteran 123-Bimbel-1819-SMPN 26 Surakarta-9 SMP-2018-09-01-17-275000-4675000-2-25000'),
(18, 'Hani Maliah', '2018-11-28', 'hani-hani-hani-hani-hani-hani-hani-2018-11-28-10-10-10000000-3-4000000'),
(19, 'Hani Maliah', '2018-11-28', 'a-a-a-a-a-a-a-2018-11-28-1-1-1-1-1'),
(20, 'Eli Rahmawati', '2018-11-29', 'Bojonegoro-Bojonegoro-Setiabudi-Bimbel-1819-SMA PLUS AL FATIMAH BOJONEGORO-12 SMA-2018-10-08-83-350000-29050000-3-0'),
(21, 'Eli Rahmawati', '2018-11-29', 'Bojonegoro-Bojonegoro-Setiabudi-Bimbel-1819-SMP PLUS AL FATIMAH BOJONEGORO-9 SMP-2018-10-08-159-350000-55650000-3-4770000'),
(22, 'Eli Rahmawati', '2018-11-29', 'Jember-Lumajang-Cokroaminoto-Bimbel-1819-SMAN 1 Lumajang-12 SMA-2018-10-01-21-1500000-31500000-2-0'),
(23, 'Eli Rahmawati', '2018-11-29', 'Jember-Situbondo-Madura 22-Bimbel-1819-MTSN 1 Situbondo-9 SMP-2018-11-01-58-250000-14500000-2-0'),
(24, 'Eli Rahmawati', '2018-11-29', 'Jombang-Jombang-Suprapto 7-Bimbel-1819-ASRAMA QUEEN AL-AZHAR-12 SMA-2018-10-01-10-3500000-35000000-2-0'),
(25, 'Dini Nur Fitria', '2018-11-30', 'Bandung Raya-Bandung-Peta-Bimbel Sukses UN 2019-1819-SMA Swadaya-12 IPA, 12 IPS-2018/09/01-104-350000-36400000-2-0'),
(26, 'Yuni Lestari', '2018-12-01', 'Bantul-Sleman-Jl Magelang KM 33-Bimbel Sukses UN 2019-1819-SMPN 3 Sleman-9 SMP-2018-27-09-38-350000-13300000-2-1900000');

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
(1, 'Dashboard', 'home', 'fa fa-dashboard', '0'),
(2, 'Bimker', '#', 'fa fa-slideshare', '0'),
(3, 'Adendum', '#', 'fa fa-balance-scale', '0'),
(4, 'Data Bimker', 'Bimker', 'fa fa-line-chart', '2'),
(5, 'Input Bimker', 'Bimker/v_input', 'fa fa-file-text-o', '2'),
(6, 'Data Adendum', 'Adendum', 'fa fa-line-chart', '3'),
(7, 'Input Adendum', 'Adendum/input', 'fa fa-file-text-o', '3'),
(8, 'Pencairan Fee', 'Bimker/v_data_fee', 'fa  fa-money', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bayar`
--

CREATE TABLE `tbl_bayar` (
  `id_bayar` int(11) NOT NULL,
  `id_bimker` int(11) NOT NULL,
  `id_cicil` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `pajak` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `ket` text NOT NULL,
  `tgl_setor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bayar`
--

INSERT INTO `tbl_bayar` (`id_bayar`, `id_bimker`, `id_cicil`, `bayar`, `tgl_bayar`, `pajak`, `fee`, `ket`, `tgl_setor`) VALUES
(36, 16, 15, 3625000, '2018-11-27', 0, 0, '15/10/18', '0000-00-00'),
(37, 17, 16, 4800000, '2018-11-27', 0, 0, '14/09/2018', '0000-00-00'),
(38, 17, 16, 4800000, '2018-11-27', 0, 0, '01/11/2018', '0000-00-00'),
(39, 18, 17, 37440000, '2018-11-27', 0, 0, '10/08/2018', '0000-00-00'),
(41, 21, 20, 88400000, '2018-11-27', 0, 0, '2018/08/07', '0000-00-00'),
(42, 23, 22, 39375000, '2018-11-27', 0, 0, '25/07/2018', '0000-00-00'),
(43, 23, 22, 39375000, '2018-11-27', 0, 0, '28/08/2018', '0000-00-00'),
(44, 24, 23, 8400000, '2018-11-27', 0, 0, '07/08/2018', '0000-00-00'),
(45, 24, 23, 4200000, '2018-11-27', 0, 0, '07/09/2018', '0000-00-00'),
(46, 24, 23, 4200000, '2018-11-27', 0, 0, '06/10/2018', '0000-00-00'),
(47, 25, 24, 6600000, '2018-11-27', 0, 0, '2018-08-16', '0000-00-00'),
(48, 25, 24, 3960000, '2018-11-27', 0, 0, '2018-09-17', '0000-00-00'),
(49, 25, 24, 2640000, '2018-11-27', 0, 0, '2018-10-16', '0000-00-00'),
(50, 26, 25, 213250000, '2018-11-27', 0, 0, '2018-09-10', '0000-00-00'),
(51, 26, 25, 180000000, '2018-11-27', 0, 0, '2018-11-05', '0000-00-00'),
(52, 27, 26, 2000000, '2018-11-27', 0, 0, '2018-09-25', '0000-00-00'),
(53, 27, 26, 2675000, '2018-11-27', 0, 0, '2018-11-09', '0000-00-00'),
(54, 18, 17, 37440000, '2018-11-28', 0, 0, '2018-11-23', '0000-00-00'),
(56, 30, 29, 15770000, '2018-11-29', 0, 0, 'Setoran Ok', '2018-10-11'),
(57, 28, 27, 1000000, '2018-11-29', 0, 0, 'setoran ok', '2018-11-29'),
(59, 32, 31, 15750000, '2018-11-29', 0, 0, 'Setoran Ok', '2018-10-19'),
(60, 34, 33, 20000000, '2018-11-29', 0, 0, 'Setoran Ok', '2018-10-11'),
(63, 34, 33, 5000000, '2018-11-29', 0, 5000000, 'setoran ok', '2018-11-29'),
(64, 35, 34, 3200000, '2018-11-30', 0, 0, '', '2018-10-11'),
(65, 35, 34, 15000000, '2018-11-30', 0, 0, '', '2018-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bimker`
--

CREATE TABLE `tbl_bimker` (
  `id_bimker` int(11) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `unit` varchar(1000) NOT NULL,
  `jenis_kerjasama` varchar(255) NOT NULL,
  `tp` varchar(10) NOT NULL,
  `sekolah` varchar(1000) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tgl_mou` date NOT NULL,
  `jml_sis` int(11) NOT NULL,
  `biaya_bimbel` int(11) NOT NULL,
  `total_kerjasama` int(11) NOT NULL,
  `jml_cicilan` int(11) NOT NULL,
  `tot_fee` int(11) NOT NULL,
  `fee_persiswa` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `fee_langsung` int(11) NOT NULL,
  `arsip` varchar(1000) NOT NULL,
  `pencairan_fee` varchar(30) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bimker`
--

INSERT INTO `tbl_bimker` (`id_bimker`, `cabang`, `kota`, `unit`, `jenis_kerjasama`, `tp`, `sekolah`, `kelas`, `tgl_mou`, `jml_sis`, `biaya_bimbel`, `total_kerjasama`, `jml_cicilan`, `tot_fee`, `fee_persiswa`, `pajak`, `fee_langsung`, `arsip`, `pencairan_fee`, `catatan`) VALUES
(16, 'Asahan & Labuan Batu', 'Rantau Prapat', 'Husni Thamrin', 'Bimbel', '1819', 'SD Kuntum Bumi Rantauprapat', '6 SD', '2018-10-04', 15, 725000, 10875000, 3, 0, 0, 0, 0, 'MOU_SD_Kuntum_Bumi_Rantauprapat_1543285828.pdf', 'Tidak Ada Fee', ''),
(17, 'Asahan & Labuan Batu', 'Rantau Prapat', 'Husni Thamrin', 'Bimbel', '1819', 'SMP IT Robbani Rantauprapat', '9 SMP', '2018-09-08', 12, 1200000, 14400000, 3, 0, 0, 0, 0, 'MOU_SMP_IT_Robbani_Rantauprapat_1543286791.pdf', 'Tidak Ada Fee', ''),
(18, 'Tangerang Kota', 'Tangerang', 'Cipondoh', 'Bimbel', '1819', 'SMA IT  Asy-Syukriyyah', '12 IPA, 12 IPS', '2018-07-31', 61, 1534426, 93600000, 3, 0, 0, 0, 0, 'MOU_SMA_IT_Asy-Syukriyyah_1543287601.pdf', 'Tidak Ada Fee', ''),
(21, 'Surakarta', 'Surakarta', 'Moewardi', 'Bimbel', '1819', 'MTSn 1 Surakarta (IX SMP)', '9 SMP', '2018-08-07', 68, 2600000, 176800000, 2, 50000, 0, 0, 0, 'default.png', 'Proses', ''),
(23, 'Bali', 'Denpasar', 'Sudirman F', 'Bimbel', '1819', 'Regent School', '6 SD', '2018-07-24', 63, 1250000, 78750000, 2, 0, 0, 0, 0, 'MOU_Regent_School_1543293954.pdf', 'Tidak Ada Fee', ''),
(24, 'Bali', 'Denpasar', 'Sudirman F', 'Bimbel', '1819', 'SD Champion School', '5 SD', '2018-08-06', 12, 1400000, 16800000, 3, 0, 0, 0, 0, 'MOU_SD_Champion_School_1543294197.pdf', 'Tidak Ada Fee', ''),
(25, 'Bali', 'Denpasar', 'Tukad Pakerisan', 'Bimbel', '1819', 'SD Pelita Hati', '6 SD', '2018-08-16', 11, 1200000, 13200000, 3, 0, 0, 0, 0, 'MOU_SD_Pelita_Hati_1543294436.pdf', 'Tidak Ada Fee', ''),
(26, 'Pematang Siantar', 'Simalungun (Saribudolok)', 'Kabanjahe 45', 'Bimbel Kerjasama', '1819', 'SMA/SMK Plus Efarina', '10, 11, 12 IPA', '2018-09-06', 509, 4900000, 1113250000, 6, 76050000, 0, 0, 0, 'MOU_SMASMK_Plus_Efarina_1543305445.rar', 'Proses', ''),
(27, 'Surakarta', 'Surakarta', 'Veteran 123', 'Bimbel', '1819', 'SMPN 26 Surakarta', '9 SMP', '2018-09-01', 17, 275000, 4675000, 2, 25000, 0, 0, 0, 'MOU_SMPN_26_Surakarta_1543308419.pdf', 'Proses', ''),
(28, 'hani', 'hani', 'hani', 'hani', 'hani', 'hani', 'hani', '2018-11-28', 10, 10, 10000000, 3, 4000000, 12, 0, 0, 'MOU_hani_1543551475.pdf', 'Proses', '12'),
(30, 'Bojonegoro', 'Bojonegoro', 'Setiabudi', 'Bimbel', '1819', 'SMA PLUS AL FATIMAH BOJONEGORO', '12 SMA', '2018-10-08', 83, 350000, 29050000, 3, 0, 0, 0, 0, 'MOU_SMA_PLUS_AL_FATIMAH_BOJONEGORO_1543457469.pdf', 'Tidak Ada Fee', ''),
(32, 'Jember', 'Lumajang', 'Cokroaminoto', 'Bimbel', '1819', 'SMAN 1 Lumajang', '12 SMA', '2018-10-01', 21, 1500000, 31500000, 2, 0, 0, 0, 0, 'MOU_SMAN_1_Lumajang_1543462222.pdf', 'Tidak Ada Fee', ''),
(33, 'Jember', 'Situbondo', 'Madura 22', 'Bimbel', '1819', 'MTSN 1 Situbondo', '9 SMP', '2018-11-01', 58, 250000, 14500000, 2, 0, 0, 0, 0, 'MOU_MTSN_1_Situbondo_1543463290.pdf', 'Tidak Ada Fee', ''),
(34, 'Jombang', 'Jombang', 'Suprapto 7', 'Bimbel', '1819', 'ASRAMA QUEEN AL-AZHAR', '12 SMA', '2018-10-01', 10, 3500000, 35000000, 2, 0, 0, 0, 0, 'default.png', 'Tidak Ada Fee', ''),
(35, 'Bandung Raya', 'Bandung', 'Peta', 'Bimbel Sukses UN 2019', '1819', 'SMA Swadaya', '12 IPA, 12 IPS', '2018-09-01', 104, 350000, 36400000, 2, 0, 0, 0, 0, 'MOU_SMA_Swadaya_1543568266.pdf', 'Tidak Ada Fee', ''),
(36, 'Bantul', 'Sleman', 'Jl Magelang KM 33', 'Bimbel Sukses UN 2019', '1819', 'SMPN 3 Sleman', '9 SMP', '0000-00-00', 38, 350000, 13300000, 2, 1900000, 50000, 0, 0, 'MOU_SMPN_3_Sleman_1543648493.pdf', 'Proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cicil`
--

CREATE TABLE `tbl_cicil` (
  `id_cicil` int(11) NOT NULL,
  `id_bimker` int(11) NOT NULL,
  `jml_cicil1` int(11) NOT NULL,
  `tgl_cicil1` date NOT NULL,
  `jml_cicil2` int(11) NOT NULL,
  `tgl_cicil2` date NOT NULL,
  `jml_cicil3` int(11) NOT NULL,
  `tgl_cicil3` date NOT NULL,
  `jml_cicil4` int(11) NOT NULL,
  `tgl_cicil4` date NOT NULL,
  `jml_cicil5` int(11) NOT NULL,
  `tgl_cicil5` date NOT NULL,
  `jml_cicil6` int(11) NOT NULL,
  `tgl_cicil6` date NOT NULL,
  `jml_cicil7` int(11) NOT NULL,
  `tgl_cicil7` date NOT NULL,
  `jml_cicil8` int(11) NOT NULL,
  `tgl_cicil8` date NOT NULL,
  `jml_cicil9` int(11) NOT NULL,
  `tgl_cicil9` date NOT NULL,
  `jml_cicil10` int(11) NOT NULL,
  `tgl_cicil10` date NOT NULL,
  `status_cicil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cicil`
--

INSERT INTO `tbl_cicil` (`id_cicil`, `id_bimker`, `jml_cicil1`, `tgl_cicil1`, `jml_cicil2`, `tgl_cicil2`, `jml_cicil3`, `tgl_cicil3`, `jml_cicil4`, `tgl_cicil4`, `jml_cicil5`, `tgl_cicil5`, `jml_cicil6`, `tgl_cicil6`, `jml_cicil7`, `tgl_cicil7`, `jml_cicil8`, `tgl_cicil8`, `jml_cicil9`, `tgl_cicil9`, `jml_cicil10`, `tgl_cicil10`, `status_cicil`) VALUES
(15, 16, 3625000, '2018-10-08', 3625000, '2018-11-30', 3625000, '2019-01-31', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '2'),
(16, 17, 4800000, '2018-09-30', 4800000, '2018-10-30', 4800000, '2018-11-30', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '3'),
(17, 18, 37440000, '2018-08-13', 37440000, '2018-11-26', 18720000, '2019-02-25', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '3'),
(20, 21, 88400000, '2018-08-08', 88400000, '2019-01-07', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '2'),
(22, 23, 39375000, '2018-07-26', 39375000, '2018-08-27', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '0'),
(23, 24, 8400000, '2018-08-08', 4200000, '2018-09-08', 4200000, '2018-10-08', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '0'),
(24, 25, 6600000, '2018-08-16', 3960000, '2018-09-07', 2640000, '2018-10-16', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '0'),
(25, 26, 213250000, '2018-09-07', 180000000, '2018-10-30', 180000000, '2018-12-20', 180000000, '2019-02-28', 180000000, '2019-04-30', 180000000, '2019-05-20', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '3'),
(26, 27, 2000000, '2018-10-04', 2675000, '2018-11-10', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '0'),
(27, 28, 5000000, '2018-11-29', 3000000, '2018-11-23', 2000000, '2018-12-01', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '1'),
(29, 30, 15770000, '2018-10-12', 6640000, '2018-12-15', 6640000, '2019-01-19', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '2'),
(31, 32, 15750000, '2018-10-19', 15750000, '2019-02-16', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '2'),
(32, 33, 7250000, '2019-01-24', 7250000, '2019-02-25', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '1'),
(33, 34, 25000000, '2018-10-11', 10000000, '2019-01-05', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '2'),
(34, 35, 18200000, '2018-11-07', 18200000, '2019-01-31', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '2'),
(35, 36, 9050000, '0000-00-00', 4250000, '2018-11-10', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `jabatan`, `nama_lengkap`) VALUES
(1, 'hani', '202cb962ac59075b964b07152d234b70', 'Kasie Keuangan', 'Hani Maliah'),
(5, 'dany', '202cb962ac59075b964b07152d234b70', 'Staff Keuangan', 'Dany Rahmansyah'),
(10, 'bakoy', 'd41d8cd98f00b204e9800998ecf8427e', 'Kasie keuangan', 'Dany Rahmansyah'),
(11, 'Kania', '81dc9bdb52d04dc20036dbd8313ed055', 'Kasie Pengembalian', 'Ninik Kania Falah'),
(12, 'ima', 'd41d8cd98f00b204e9800998ecf8427e', 'Staff Analis', 'Hani Maliah'),
(13, 'dini', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Dini Nur Fitria'),
(14, 'eli', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Eli Rahmawati'),
(15, 'tehhera', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Hera Widyati Fitriani'),
(16, 'Nadya', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Nadya Hasna Nurzakiyyah'),
(17, 'Melani', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Melani Al Pajarani'),
(18, 'Nurul', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Nurul Nugraheni'),
(21, 'Yuni', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Yuni Lestari'),
(22, 'Dewi', '81dc9bdb52d04dc20036dbd8313ed055', 'Kasie Analisis Bukti Pendukung', 'Dewi Supriyatin'),
(23, 'Kania', '9c6b683f17b891cf40cb2195db0cc4d2', 'Kasie Pengembalian', 'NINIK KANIA FALAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tbl_bimker`
--
ALTER TABLE `tbl_bimker`
  ADD PRIMARY KEY (`id_bimker`);

--
-- Indexes for table `tbl_cicil`
--
ALTER TABLE `tbl_cicil`
  ADD PRIMARY KEY (`id_cicil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_bimker`
--
ALTER TABLE `tbl_bimker`
  MODIFY `id_bimker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_cicil`
--
ALTER TABLE `tbl_cicil`
  MODIFY `id_cicil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

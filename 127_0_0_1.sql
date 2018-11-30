-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 02:57 AM
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
DROP DATABASE IF EXISTS `sisurat`;
CREATE DATABASE IF NOT EXISTS `sisurat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sisurat`;

-- --------------------------------------------------------

--
-- Table structure for table `skeluar`
--

DROP TABLE IF EXISTS `skeluar`;
CREATE TABLE `skeluar` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `nama_tujuan` varchar(100) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `tgl_SuratKeluar` date NOT NULL,
  `userid` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeluar`
--

INSERT INTO `skeluar` (`no`, `no_surat`, `perihal`, `nama_tujuan`, `tujuan`, `jenis_surat`, `tgl_SuratKeluar`, `userid`, `status`) VALUES
(39, 'MK-KEU/KNTMGLKM13.5/', 'Surat ACC Pencairan Fee Bimker', 'Ibu Adibah', 'Kepala Unit Magelang KM 13.5', 'Pencairan', '2018-11-02', 'Yuni Lestari-Staff Pengembalian', 'Proses'),
(19879, 'MK-KEU/KNTCWGB/X/18', 'Surat ACC Pengembalian Kelas Tidak Kuota', 'Bapak Anto, S.Pd', 'Plt. Kepala Unit Ciawigebang', 'Pencairan', '2018-11-02', 'Hera Widyati Fitriani-Staff Pengembalian', 'ACC'),
(19970, 'pembatas', 'Surat Teguran', 'Bapak dfh', 'Kepala Wilayah hdfh', 'Teguran', '2018-10-30', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19971, 'MK-KEU/KRYMTL/X/18', 'Surat ACC Pencairan Fee Bimker', 'Ibu Rinang Listyorini', 'Kepala Rayon Muntilan – Magelang', 'Pencairan', '2018-11-02', 'Yuni Lestari-Staff Pengembalian', 'Proses'),
(19972, 'MK-KEU/KCBTBS/XII/18', 'Surat ACC Pencairan PT Kolektif', 'Bapak Sapto Martua Hutapea, S.Pd.', 'Kepala Cabang Toba Samosir', 'Pencairan', '2018-11-29', 'Yuni Lestari-Staff Pengembalian', 'ACC'),
(19973, 'asdf', 'Surat Teguran', 'Bapak asdf', 'Kepala Wilayah asdf', 'Teguran', '2018-11-15', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19974, 'mk', 'Surat Teguran', 'Bapak dsgdsg', 'Kepala Wilayah hrth', 'Teguran', '2018-11-15', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19975, 'efewfewf', 'Surat Teguran', 'Bapak fewf', 'Kepala Cabang ewfewf', 'Teguran', '2018-11-15', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19976, 'MKEU-KSAP/ST/XI/18', 'Surat Teguran', 'Seli Asih (Customer service)', ' Ganesha Operation Cirebon Sumber Dewi Sartika', 'Teguran', '2018-11-15', 'Analis Data-Staff Analis Data', 'Proses'),
(19977, 'hani', 'Surat Teguran', 'Pilih Seli Asih (Customer service)', 'Pilih Jabatan Kepala Cabang', 'Teguran', '2018-11-15', 'Analis Data-Staff Analis Data', 'Proses'),
(19978, 'asdf', 'Surat Teguran', 'Ibu asdf', 'Kepala Wilayah asdf', 'Teguran', '2018-11-15', 'Analis Data-Staff Analis Data', 'Proses'),
(19979, 'MKEU-KSAP/ST/XI/18', 'Surat Teguran', 'Seli Asih (Customer service)', 'Kepala Cabang', 'Teguran', '2018-11-15', 'Analis Data-Staff Analis Data', 'Proses'),
(19980, 'MK-KEU/KSAKSRGN/XI/18', 'Surat Teguran', 'Mursitaningsih', 'Kasie Akuntansi & Keuangan Sragen', 'Teguran', '2018-11-22', 'Dini Nur Fitria-Staff Pengembalian', 'Proses'),
(19981, 'MK-KEU/CS/XI/18', 'Surat Teguran', ' Ratna Purwaningsih', ' Customer Service Sukowati 179', 'Teguran', '2018-11-22', 'Dini Nur Fitria-Staff Pengembalian', 'Proses'),
(19982, 'MK-KEU/CS/XI/18', 'Surat Teguran', 'Dwi Octaviyanti', 'Customer Service Perintis Kemerdekaan 17', 'Teguran', '2018-11-22', 'Dini Nur Fitria-Staff Pengembalian', 'Proses'),
(19983, 'MK-KEU/KRYNAMLPR/XI/2018', 'Surat Teguran', 'Bapak I Ketut Putra Wiratha, M.Pd.', 'Kepala Rayon Amlapura', 'Teguran', '2018-11-24', 'Eli Rahmawati-Staff Pengembalian', 'Proses'),
(19984, 'MK-KEU/KNTAMLPR/XI/2018', 'Surat Teguran', 'Bapak I Dewa Gede Dwi Prabhasastra Kusuma, S.Pd.', 'Kepala Unit Amlapura', 'Teguran', '2018-11-24', 'Eli Rahmawati-Staff Pengembalian', 'Proses'),
(19985, 'MK-KEU/CS/XI/2018', 'Surat Teguran', ' Ni Putu Ayu Yuliantini', ' Customer Service Subagan-Amlapura', 'Teguran', '2018-11-24', 'Eli Rahmawati-Staff Pengembalian', 'Proses'),
(19986, 'MK-KEU/KSAP/ST/XI/18', 'Surat Teguran', 'Neli Indrawati Saputri', ' Customer Service Riau 1 – Duri - Jendral Sudirman No. 45', 'Teguran', '2018-11-26', 'Analis Data-Staff Analis Data', 'Proses'),
(19987, 'MKEU-KSAP/ST/ XI/18', 'Surat Teguran', 'Ibu Wulan Mampuni', 'Kepala Unit Sukabumi Perintis Kemerdekaan 2D', 'Teguran', '2018-11-27', 'Dany Rahmansyah-Kasie keuangan', 'Proses'),
(19988, 'MKEU-KSAP/ST/ XI/18', 'Surat Teguran', ' Siti Endarwati (Customer Service)', ' Ganesha Operation Sukabumi - Syamsudin 29', 'Teguran', '2018-11-27', 'Dany Rahmansyah-Kasie keuangan', 'Proses'),
(19989, 'MKEU-KSAP/ST/ XI/18', 'Surat Teguran', ' Resi Intan Erlia (Customer Service)', '  Ganesha Operation Purwakarta - Cikampek - Juanda 14', 'Teguran', '2018-11-27', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19990, 'MKEU-KSAP/ST/ XI/18', 'Surat Teguran', ' Fanny Melinda (Customer Service)', '  Ganesha Operation Purwakarta - Ipik Gandamanah 19', 'Teguran', '2018-11-27', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19991, 'MKEU-KSAP/ST/ XI/18', 'Surat Teguran', ' Aster Tasrina (Customer Service)', '  Ganesha Operation Purwakarta - Martadinata 78', 'Teguran', '2018-11-27', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19992, 'MKEU-KSAP/ST/ XI/18', 'Surat Teguran', ' Riri Riyanti (Customer Service)', ' Ganesha Operation Purwakarta - Subang - Ade Irma Suryani', 'Teguran', '2018-11-27', 'Hani Maliah-Kasie Keuangan', 'Proses'),
(19993, 'MK-KEU/KSKRARSLH/XI/18', 'Surat ACC Pencairan Fee Bimker', 'Bapak Yuliani Adi Setyono, S.Pd.', 'Kepala Sekretariat Ar Saleh – Surakarta', 'Pencairan', '2018-11-28', 'Nadya Hasna Nurzakiyyah-Staff Pengembalian', 'ACC'),
(19994, 'MKEU-KSAP/ST/XI/18', 'Surat Teguran', ' Rahel Br Ginting', ' Customer Service - Brastagi - Jamin Ginting 283D', 'Teguran', '2018-11-29', 'Analis Data-Staff Analis Data', 'Proses'),
(19995, '19995/MKEU-KSAP/ST/XI/18', 'Surat Teguran', ' Roro Cresmulati A J (Customer Service)', ' Muara Bungo - Diponegoro 1-2', 'Teguran', '2018-11-29', 'Analis Data-Staff Analis Data', 'Proses'),
(19996, 'MK-KEU/KSAP/ST/XI/18', 'Surat Teguran', ' Desna Indra Welni', ' Customer Service Padang - Painan', 'Teguran', '2018-11-30', 'Analis Data-Staff Analis Data', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `smasuk`
--

DROP TABLE IF EXISTS `smasuk`;
CREATE TABLE `smasuk` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `hal` varchar(100) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_input` varchar(100) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `jenissurat` varchar(10) NOT NULL,
  `arsip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smasuk`
--

INSERT INTO `smasuk` (`id`, `no_surat`, `hal`, `kepada`, `dari`, `keterangan`, `tanggal`, `tgl_input`, `userid`, `jenissurat`, `arsip`) VALUES
(1, '19806/MK-KEU/KCBBJM/X/18', 'ACC Pengembalian Biaya', 'Bapak Sumadi - Bagian Keuangan', 'Kidung - Kepala Cabang Jakarta', 'Pengajuan Pengembalian Kelas tidak kuota a.n Kinanti kelas 12.IPA.R.901.  Norek Pengembalian 12324545345 sebesar Rp. 500.000.', '2018-10-19', '31-10-18', 'dany', 'Email', ''),
(5, '009/MKT/PUSAT/KKMP/X/2018', 'Informasi ACC Pengajuan Bimker SD IT At Tubah Karawang', 'Ibu Lia Yulianti, S.Pd/Koordinator Kabag Materi', 'Ir. Ricko Juri Aman/ Manajer Marketing', 'Informasi Bimbingan Kerjasama cabang Karawang mengenai Sukses USBN 2019, untuk Tingkat kelas 6 SD, 17 siswa untuk 1 kelas, 3 mata pelajaran dalam waktu @60menit', '2018-10-30', '31-10-18', 'dany', 'Ekspedisi', ''),
(7, '150/MKT-PUSAT/PDS/X/2018', 'ACC Pengajuan Pindah Tempat Belajar a.n Alya', 'Bapak Jabatan Manullang, S.Pd. - Kacab GO Tabagsel', 'Yuly Rahmawati - Kabag Marketing', 'usulan pengajuan pindah tembat belajar dikarenakan siswa tersebut ikut orang tua yang dipindah tugas ke Medan. Dengan ini kami sampaikan bahwa permohonan tersebut disetujui dengan rincian:\r\nNama : Alya Humaira Baldin, Kelas di GO : 5-SD-R-N-1, Progam : P1 reguler, Unit belajar awal : Merdeka (Tabagsel), Unit belajar Tujuan : Panglima Denai (Medan), Kelas di GO : 5-SD-R-N-51, Progam : P1 reguler, Penambahan biaya : Rp. 1.815.000 (langsung bayar Lunas)', '0018-10-27', '01-11-18', 'Nurul', 'Email', ''),
(8, '545/MKT-Pusat/Medan/X/2018', 'ACC Pengalihan Biaya ke TP.1920 a.n Ari Wijaya', 'Bapak Ir. Jamso Haryono, M.M - Kepala Cabang Medan', 'Ir. Ricko Juri Aman - Manajer Marketing', 'Nama Siswa : Ari Wijaya, Kelas : 10-IPA-R-7, Unit Belajar : Hayam Wuruk, Rincian Biaya : Rp4.600.000,- (sudah termasuk PT), Tanggal Daftar : 26 Juli 2018, Keterangan Diskon : Diskon AG 50%\r\nKeterangan : 1. Biaya yang sudah dibayarkan akan dialihkan ke TP.1920 dikarenakan siswa tidak bisa bimbel dari hari senin s.d sabtu karena jadwal sudah padat dari\r\nSekolah. 2. Siswa tersebut sudah mengikuti KBM sebanyak 6x pertemuan dan di cabang kelas tersebut sudah berjalan 40x pertemuan serta siswa tersebut sudah mendapatkan fasilitas Koding + Buku Kumpulan Rumus. 3. Biaya yang akan dialihkan sebesar Rp3.226.745,- untuk kelas 11 IPA TP.1920. 4. Pada saat siswa akan daftar kembali di TP.1920 untuk penambahan biaya bimbel mengikuti harga kelas 11 di TP.1920.', '2018-10-27', '2018-11-01', 'Nurul', 'Email', ''),
(22, '150/MKT-Pusat/P.Siantar/X/2018', 'ACC Pengajuan Diskon Keponakan Chanel Bimker SMA/K Plus Efarina', 'Ibu Lusianna Sinaga, S.Si - Kanit P.Raya', 'Ir. Ricko Juri Aman - Manajer Marketing', 'Nama Siswa : Rikardo Barus, Kelas yang dituju : 4 SD, Asal Sekolah : SD swt.Bintang Timur Pematang Raya\r\nSiswa tersebut merupakan keponakan kandung dari :\r\nNama : Adrian Tarigan, S.E, Jabatan : Sekretaris Yayasan Efarina, No. HP : 0821-6046-1112', '2018-10-27', '2018-11-01', 'Nurul', 'Email', 'SuratMasuk_Email_1541056092.pdf'),
(23, '2069/KKSDM-PPSDM/KAC-27/XI/2018', 'INFORMASI PENAMBAHAN KARYAWAN BARU', 'Ibu Wuri Vebriyanti.S.Pd - Plt Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Nama Karyawan : Nofi Utari , Alumni : Universitas Pura -S1-Kehutanan, Jabatan : Customer Service ,Penempatan:Pontianak - Gusti Hamzah No 32, Tanggal Gabung : 17 November 2018', '2018-11-19', '2018-11-27', 'Dewi', 'Ekspedisi', 'default.png'),
(24, '2068/KKSDM-PPSDM/KAC-42/XI/2018', 'INFORMASI PENAMBAHAN KARYAWAN BARU', 'Bpk. M.Arif Munandar,S.Si - Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Nama Karyawan : Widi Sutrima ,Alumni : SMK YPT 2 Purbalingga- Jurusan Teknik Kendaraan Ringan , Jabatan : Office Boy, Penembatan : Purbalingga - Jln.Letkol Isdiman No 28-A (Timur PMI) , Tanggal Gabung : 15 November 2018', '2018-11-19', '2018-11-27', 'Dewi', 'Ekspedisi', 'default.png'),
(25, '2146/KKSDM-PPSDM/KAC-14/XI/2018', 'Informasi Penambahan Karyawan Baru ', 'Bpk.Dwi Fahruddin A.A,S.p (Plt Kepala Cabang)', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Nama Karyawan : Lilis Ernawati, Alumni: UIN Sunan Kalijaga Yogyakarta - S1-Pendidikan Biologi, Jabatan: Customer Service, Penembatan: Yogyakarta - Jln. Yos Sudarso No.27, Tanggal Gabung : 17 November 201', '2018-11-23', '27-11-18', 'Dewi', 'Ekspedisi', 'default.png'),
(26, '2105/KKSDM/PPSDM/KAC-26/XI/2018', 'Informasi Penambahan Karyawan Baru', 'Bpk. Drs Wawan Samsul N (Kepala Cabang)', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Nama Karyawan : Jejen Zenal Alim, Alumni : MAS AL Rahman - IPA, Jabatan : Office Boy, Penembatan : Tasikmalaya - Jl. Tentara Pelajar 61, Tanggal Gabung : 19 November 2018', '2018-11-21', '2018-11-27', 'Dewi', 'Ekspedisi', 'default.png'),
(27, '2166/KKSDM-PPSDM/KPOPB/XI/2018', 'Informasi Mutasi Pengajar Freelance Cabang Bandung', 'Bapak Ir. Sardianto Sihombing / Koordinator Penjadwalan dan Operasional Pengajaran Bandung Raya', 'Ibu Floriana Sari/ Koordinator Kabag SDM', 'NIK : 1302500690, Nama Pengajar : Tanti Dewininggih, Status : Pengajar Freelance SMP-SMA (FIS), Penempatan Lama : Bandung - Bandung - Jl. Sumatra No.35, Penempatan Baru : Bandung - Majalengka - Jl. K.H Abdul Halim No. 232, Tanggal Aktivasi : 29 November 2018, HOnor : ACC dengan honor Rp. 60.000/90 menit', '2018-11-24', '27-11-18', 'Dewi', 'Ekspedisi', 'default.png'),
(28, '2064/KKSDM-PPSDM/KAC-40/XI/2018', 'Informasi Mutasi Pengajar Freelance', 'Bpk. Slamet Handayanto,S.Si. (Kepala Cabang)', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Nama Karyawan : Rasmadi , NIK : 0902500128, Status lama : Pengajar Freelance SMP-SMA (MAT), Penempatan Lama : Pekalongan - Brebes - Jl. Ahmad Yani No 93 (Timur Pengadilan Negeri), Penempatan Baru :  Pekalongan - Tegal - Jln. A.R Hakim No 189 (Depan Suzuki Gedong Jembar), Tanggal Aktivasi : 10 November 2018 , Honor : Tidak Berubah', '2018-11-17', '2018-11-27', 'Dewi', 'Ekspedisi', 'default.png'),
(31, '1013/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Alih Status Cabang Banyumas', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '28-11-18', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543391343.jpg'),
(33, '5144/KKSDM-PBSDM/KAC-8/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Hendryana, S.Pd. - Kepala Cabang Cianjur', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'fithri', 'Ekspedisi', 'default.png'),
(34, '1009/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Alih Status Cabang Bandung', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '28-11-18', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543392018.jpg'),
(36, '2149/KKSDM-PPSDM/Riau 2/XI/2018', 'Informasi Alih Status dan Mutasi Pengajar Cabang Riau 2', 'Ibu Endang Purwaningsih, S.Pd. - Kepala Cabang Riau 2', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-26', '2018-11-28', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543392200.jpg'),
(37, '1007/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Alih Status Cabang Banyumas', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543392208.jpg'),
(38, '5137/KKSDM-PBSDM/KAC-17/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Kusmartono,S.Si - Kacab Magelang', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543392655.jpg'),
(39, '1011/MOP-BOP/MK/PCM/XI/2018', 'Info Honor Pengajar Harian Cuti Melahirkan Cabang Jakarta 2', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543392712.jpg'),
(40, '2153/KKSDM-PPSDM/KAC-42/XI/2018', 'Informasi Alih Status Pengajar Cabang Banyumas', 'Bapak M. Arif Munadar, S.Si. - Kepala Cabang Banyumas', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir ', '2018-09-19', '28-11-18', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393048.jpg'),
(41, '5109/KKSDM-PBSDM/KAC-16/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Doni Permana, S.Si. - Kepala Cabang Lampung', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393127.zip'),
(42, '5136/KKSDM-PBSDM/KAC-17/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Kusmartono,S.Si - Kacab Magelang', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393145.zip'),
(44, '5196/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan,M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393430.zip'),
(45, '5108/KKSDM-PBSDM/KAC-16/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Doni Permana, S.Si. - Kepala Cabang Lampung', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393470.zip'),
(46, '5107/KKSDM-PBSDM/KAC-Blitar/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Agus David, S.Pd.', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393561.zip'),
(47, '1014/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Resign Cabang Jakarta 1', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393653.jpg'),
(48, '5194/KKSDM-PBSDM/KAC-19/XI/2018', 'Tanggapan Cuti', 'Bapak Elbisker, M.M., M.B.A. - Kepala Wilayah Jawa Bagian Timur', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393741.zip'),
(49, '2154/KKSDM-PPSDM/KAC-42/XI/2018', 'Informasi Alih Status Pengajar Cabang Banyumas', 'Bapak M. Arif Munadar, S.Si. - Kepala Cabang Banyumas', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-09-19', '2018-11-28', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393952.jpg'),
(50, '2176/KKSDM-PPSDM/KAC-17/XI/2018', 'Informasi Penambahan Karyawan Baru', 'Bapak Kusmartono, S.Si - Kepala Cabang Magelang', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-26', '2018-11-28', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543394547.jpg'),
(52, '1012/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Kouto Resign Cabang Madura', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543395275.jpg'),
(53, '5193/KKSDM-PBSDM/KAC-19/XI/2018', 'Tanggapan Cuti', 'Bapak Elbisker, M.M., M.B.A. - Kepala Wilayah Jawa Bagian Timur', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543395324.zip'),
(54, '5191/KKSDM-PBSDM/KAC-14/XI/2018', 'Tanggapan Cuti', 'Bapak Dwi Fahruddin A.A, S.P. - Plt Kepala Cabang Yogyakarta', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543395540.zip'),
(55, '1010/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Kuota Bandung Resign', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543395602.jpg'),
(56, '1008/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Resign Cabang Palu', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543395697.jpg'),
(58, '2152/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data terlampir', '2018-11-24', '2018-11-28', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396148.zip'),
(59, '2171/KKSDM-PPSDM/MEDAN/XI/2018', 'Informasi Alih Status dan Mutasi Pengajaran Cabang Medan', 'Bpk. Ir Jamso Haryono Pangaribuan,M.M - Kepala Cabang', 'Ibu.Floriana Sari,S.E', 'Data Terlampir\r\n', '2018-11-26', '2018-11-28', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396269.jpg'),
(60, '2140/KKSDM-PPSDM/KAC-49/XI/2018', 'Informasi Penambahan Karyawan Baru', 'Bapak Muhammad Bilharman, S.Pd - Kepala Cabang Madura', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396441.jpg'),
(61, '1005/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Resign Cabang Malang', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396499.jpg'),
(62, '1002/MOP-BOP/MK/PAK/XI/2018', 'Informasi Pembayaran Honor Pengajar Cabang Medan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd (Manajer Operasional Pengajaran)', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396584.jpg'),
(63, '5051/KKSDM-PBSDM/KAC-48/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Yan Triskawati Amanda, S.S. - Kepala Cabang Jember', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396651.zip'),
(64, '1001/MOP-BOP/MK/PAK/XI/2018', 'Informasi Pembayaran Honor Pengajar Aktif dari Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396675.jpg'),
(65, '2232/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronica - Manajer Keuangan', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-28', '2018-11-28', 'tari', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396745.zip'),
(66, '2182/MSDM-PPSDM/MK/XI/2018', 'Informasi Penagguhan Honor Karyawan a.n Posma Sianipar', 'Ibu Erna Veronica - Manajer Keuangan', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-26', '2018-11-28', 'tari', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396831.zip'),
(67, '2159/KKSDM-PPSDM/KAC-Tobas/XI/2018', 'Informasi Penambahan Karyawan Baru', 'Bapak Sapto Martua Hutapea, S.Pd - Kepala Cabang Toba Samosir', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-28', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396880.jpg'),
(68, '2189/KKSDM-PPSDM/MK/XI/2018', 'Informasi Penambahan Karyawan Baru', 'Ibu Erna Veronica - Manajer Keuangan', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-27', '2018-11-28', 'tari', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543396886.zip'),
(69, '1004/MOP-BOP/KAC/APT/XI/2018', 'Tanggapan Pengajuan Matrik Transport Cabang Sumsel I', 'Ibu Risda Faulina Tinambunan, S.Pd - Kepala Cabang Sumsel I', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397022.zip'),
(70, '5189/KKSDM-PBSDM/KAC-14/XI/2018', 'Tanggapan Cuti', 'Bapak Dwi Fahruddin A.A, S.P. - Plt Kepala Cabang Yogyakarta', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397103.zip'),
(71, '1003/MOP-BOP/KAC/TPT/XI/2018', 'Tanggapan Pengajuan Uang Transport Peminjaman Pengajar Antar Kota Cabang Jakarta 2', 'Bapak Gamaliel Ketaren, ST. MT - Plt Kepala Cabang Jakarta 2', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-26', '2018-11-28', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397145.zip'),
(72, '5187/KKSDM-PBSDM/KAC-Kediri/XI/2018', 'Tanggapan Cuti', 'Bapak Azhari Ilyas, S.T. - Plt Kepala Cabang Kediri', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397246.zip'),
(73, '2174/KKSDM-PPSDM/MK/XI/2018', 'Permintaan Pembayaran Honor Karyawan', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-26', '2018-11-28', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397353.jpg'),
(74, '5186/KKSDM-PBSDM/KAC - Surakarta/XI/2018', 'Tanggapan Cuti', 'Bapak Agitya Putra Kusuma, S.Si. - Kepala Cabang Surakarta', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397489.zip'),
(75, '1909/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397690.zip'),
(76, '5184/KKSDM-PBSDM/KAC - Tulungagung/XI/2018', 'Tanggapan Cuti', 'Ibu Sri Setiyowati, S.Pd - Plt. Kepala Cabang Tulungagung', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-28', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397768.zip'),
(77, '5047/KKSDM-PBSDM/KAC-16/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Doni Permana, S.Si - Kepala Cabang Lampung', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-28', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543397914.zip'),
(78, '5327/KKSDM-PBSDM/Karayon-Cimahi/XI/2018', 'Mutasi Karyawan Sementara', 'Bapak Sufajar, S.Si - Karayon Cimahi, Padalarang, & Batujajar', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-26', '2018-11-28', 'tari', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543398075.jpg'),
(79, '5241/KKSDM-PBSDM/KKM/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Lia Yulianti, S.Pd. - KKBMP', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-28', 'tari', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543398360.zip'),
(80, '5183/KKSDM-PBSDM/KAC-Jakarta1/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Hotlider Purba, S.E. - Kepala Cabang Jakarta 1', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-29', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543455024.zip'),
(81, '5154/KKSDM-PBSDM/KAC-19/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Elbisker, M.M., M.B.A. - Kepala Wilayah Jawa Bagian Timur', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-29', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543455271.zip'),
(82, '5154/KKSDM-PBSDM/MP3S/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Anang Bambang P., M.M - Manajer Pelayanan dan Peningkatan Prestasi Siswa', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-29', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543455368.zip'),
(83, '5110/KKSDM-PBSDM/KAC-16/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Doni Permana, S.Si - Kacab Lampung', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-29', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543477762.zip'),
(84, '1006/MOP-BOP/MK/IPS/XI/2018', 'Informasi Pengajar Kuota/Harian Yang Sakir Per 1 Desember 2018', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-27', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543540368.jpg'),
(85, '1016/MOP/MKEU/PKK/XI/2018', 'Informasi Kelebihan Kuota Pengajar', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-27', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543540490.zip'),
(86, '1015/MOP-BOP/MK/PH/XI/2018', 'Pembayaran Honor Karyawan Penugasan Mengajar', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-27', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543540624.jpg'),
(87, '5088/KKSDM-PBSDM/KAC-19/XI/2018', 'Tanggapan Ajuan Cuti', 'Baoak Elbisker, M.M., M.B.A. - Kepala Wilayah Jawa Bagian Timur', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543540868.zip'),
(88, '5090/KKSDM-PBSDM/KAC-Medan/IX/2018', 'Tanggapan Pembatalan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543541030.zip'),
(89, '5091/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543541125.zip'),
(90, '5092/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542627.zip'),
(91, '5095/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542711.zip'),
(92, '5096/KKSDM-PBSDM/KAC-MJKT/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Raki Krastianto, S.Si.', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542807.zip'),
(93, '5052/KKSDM-PBSDM/KAC-17/XI/1018', 'Tanggapan Ajuan Cuti', 'Bpk. Kusmartono,S.Si - (Kepala Cabang Magelang)', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542808.zip'),
(94, '5062/KKSDM-PBSDM/KAC-JOMBANG/XI/1018', 'Tanggapan Ajuan Cuti', 'Ibu. Siti Maryam,S.Pd. - Kepala Cabang Jombang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542883.zip'),
(95, '5098/KKSDM-PBSDM/KAC-MJKT/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Raki Krastianto, S.Si. - Kepala Cabang Mojokerto', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542928.zip'),
(96, '5066/KKSDM-PBSDM/KAC-51/XI/1018', 'Tanggapan Ajuan Cuti', 'Ibu. Wina Agustina,S.Si - Kepala Cabang Tangerang Kota', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542955.zip'),
(97, '2152/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543018.zip'),
(98, '2129/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543074.zip');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

DROP TABLE IF EXISTS `tabel_menu`;
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
(2, 'Surat Masuk', '#', 'fa fa-envelope', '0'),
(3, 'Surat Keluar', '#', 'fa fa-envelope', '0'),
(4, 'Data Surat Masuk', 'Smasuk/data_table', 'fa fa-line-chart', '2'),
(5, 'Input Surat Masuk', 'Smasuk', 'fa fa-file-text-o', '2'),
(6, 'Data Surat Keluar', 'Skeluar/data_table', 'fa fa-line-chart', '3'),
(7, 'Input Surat Keluar', 'Skeluar', 'fa fa-file-text-o', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_intruksi_transfer`
--

DROP TABLE IF EXISTS `tb_sk_intruksi_transfer`;
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
-- Dumping data for table `tb_sk_intruksi_transfer`
--

INSERT INTO `tb_sk_intruksi_transfer` (`no`, `no_surat`, `ckuitf`, `pembayaransiswa`, `kuitansisetor`, `tgl_lappem`, `nokuitansi`, `petugas_kuitansi`, `tgl_waset`, `tgl_tanter`, `tembusan`) VALUES
(19972, 'asdf', 'asdf', 1000000, 800000, '2018-11-08', 'asdf', 'asdfasdf', '2018-11-16', '2018-11-10', 'asdf,asdf,asdf,asdf,asdf,asdf,asdf,asdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_pencairan_fee`
--

DROP TABLE IF EXISTS `tb_sk_pencairan_fee`;
CREATE TABLE `tb_sk_pencairan_fee` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
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
-- Dumping data for table `tb_sk_pencairan_fee`
--

INSERT INTO `tb_sk_pencairan_fee` (`no`, `no_surat`, `lampiran`, `tgl_marketing`, `sekolah`, `mou`, `program`, `jml_siswa`, `acc`, `tdk_acc`, `fee_siswa`, `jml_disetujui`, `ket`, `tembusan`) VALUES
(19971, 'MK-KEU/KRYMTL/X/18', '-', '2018-10-30', 'SMA PANGUDI LUHUR VANLITH', 'Ada', 'Reg', 61, 61, 0, 50000, 3050000, 'Sudah langsung dipotong oleh Sekolah', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kepala Cabang Magelang,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kasie Audit Pembayaran,Kabag/Kasie Marketing'),
(39, 'MK-KEU/KNTMGLKM13.5/', '1 Lampiran', '2018-10-17', 'SMAN 01 NGEMPLAK', 'ADA', 'REGULER', 86, 86, 0, 100000, 8600000, '', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kawil Jawa Bagian Tengah,Kacab Bantul,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag/Kasie Marketing,Kasie Audit Pembayaran'),
(19993, 'MK-KEU/KSKRARSLH/XI/18', '-', '2018-11-12', 'SMPN 26 Surakarta', 'Ada', 'Reg', 17, 17, 0, 25000, 425000, '-', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kawil Jabagteng,Kepala Cabang Surakarta,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag Marketing 2,Kasie Audit Pembayaran'),
(19972, 'MK-KEU/KCBTBS/XII/18', '2 Lembar', '2018-10-06', 'SMP BUDHI DHARMA BALIGE', 'ADA', 'REGULER', 57, 30, 27, 50000, 1500000, 'Diskon Anak Guru = 25\r\nDiskon Rangking 50% = 2', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag Marketing 1,Kasie Audit Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_pengecekan`
--

DROP TABLE IF EXISTS `tb_sk_pengecekan`;
CREATE TABLE `tb_sk_pengecekan` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
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
-- Dumping data for table `tb_sk_pengecekan`
--

INSERT INTO `tb_sk_pengecekan` (`no`, `no_surat`, `cku`, `norektrs`, `tgltransfer`, `namatransfer`, `norekpentransfer`, `nominal`, `hasil`, `tglkonfirmasi`) VALUES
(41, 'sdfg', 'asdf', 'asdf', '2018-10-03', 'asdf', 'asdf', '1234', 'asdf', '2018-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_peringatan`
--

DROP TABLE IF EXISTS `tb_sk_peringatan`;
CREATE TABLE `tb_sk_peringatan` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
  `loktujuan` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `spke` char(1) NOT NULL,
  `kesalahan` text NOT NULL,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_pos_giro`
--

DROP TABLE IF EXISTS `tb_sk_pos_giro`;
CREATE TABLE `tb_sk_pos_giro` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
  `periodepengiriman` varchar(50) NOT NULL,
  `totaltagihan` varchar(50) NOT NULL,
  `norek` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_pos_giro`
--

INSERT INTO `tb_sk_pos_giro` (`no`, `no_surat`, `periodepengiriman`, `totaltagihan`, `norek`) VALUES
(7, 'asdfasdf', 'asdfasdf', 'asdf', 'asdf'),
(15, 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasd', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_sidak`
--

DROP TABLE IF EXISTS `tb_sk_sidak`;
CREATE TABLE `tb_sk_sidak` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
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
(1, 'MK-KEU/KASI-APB/KNTST35/X/18', 'Pemeriksaan Administrasi dan tangible Unit', 'Ibu Dra. Rully Handayani', 'Kepala Unit Ganesha operation st 35', '2018-10-19', 'Walamto Sidauruk - Staf Sidak, Digna Andina S - Staf Keuangan, Tiara Ayunda - Staf Keuangan', 'Administrasi Keuangan, Akuntansi, dan Tangible', 'Direksi,Manajer Akuntansi'),
(2, 'MK-KEU/PENGGAJIAN/X/18', 'Pemeriksaan Administrasi dan Tangible Unit', 'Dany rahmansyah', 'Kepala Cabang makasar', '2018-10-03', 'milea farnaditi - kasi pertahanan', 'Administrasi keuangan,Akuntansi, dan Tangible', 'Direksi, Manager keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_teguran`
--

DROP TABLE IF EXISTS `tb_sk_teguran`;
CREATE TABLE `tb_sk_teguran` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
  `pemeriksa` varchar(50) DEFAULT NULL,
  `bgn_tegur` varchar(50) DEFAULT NULL,
  `teguran` text NOT NULL,
  `penutup` text,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_teguran`
--

INSERT INTO `tb_sk_teguran` (`no`, `no_surat`, `pemeriksa`, `bgn_tegur`, `teguran`, `penutup`, `tembusan`) VALUES
(19880, 'pembatas', 'asdf', 'asdf', 'asdf', 'asdf', 'sdf'),
(19973, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf,asdf,asdf,asdf'),
(19974, 'mk', NULL, NULL, 'point 1  ^ poit 2 #sub point 2 # sub point 1 # sub point 1', NULL, 'vewvew'),
(19975, 'efewfewf', NULL, NULL, 'Point Teguran 1 #Sub Point Teguran 1 #Sub Point Teguran 2 #Sub Point Teguran 3^Point Teguran 2 #Sub Point Teguran 2  #Sub Point Teguran 3 ^Point Teguran 3  #sub point 3 #Sub Point Teguran 3', NULL, 'fefew'),
(19976, 'MKEU-KSAP/ST/XI/18', NULL, NULL, 'Siswa belum memasuki cicilan 1 tapi sudah belajar.# Siswa a.n. Afzaal Aminudinsyah Omana, pembayaran cicilan 1 belum terpenuhi tetapi siswa sudah belajar.^Diskon lunas tidak di berlakukan sesuai ketentuan juklak biaya.#Siswa a.n. Afzaal Aminudinsyah Omana, pembayaran pelunasan di lakukan setelah siswa belajar, tetapi tetap diberlakukan diskon lunas (selisih Rp.702.000.-)', NULL, 'Koordinator Kabag Sdm,Kepala Cabang Cirebon'),
(19977, 'hani', NULL, NULL, 'Siswa belum memasuki cicilan 1 tapi sudah belajar.\r\n#	Siswa a.n. Afzaal Aminudinsyah Omana, pembayaran cicilan 1 belum terpenuhi tetapi siswa sudah belajar. Seharusnya siswa mulai belajar setelah melunasi cicilan 1\r\n\r\n^	Diskon lunas tidak di berlakukan sesuai ketentuan juklak biaya.\r\n#	Siswa a.n. Afzaal Aminudinsyah Omana, pembayaran pelunasan di lakukan setelah siswa belajar, tetapi tetap diberlakukan diskon lunas (selisih Rp.702.000.-). Seharun', NULL, 'Koordinator Kabag Sdm, Kepala Cabang Cirebon'),
(19978, 'asdf', NULL, NULL, 'Point Teguran 1 #Sub Point Teguran 1 ^Point Teguran 2 #Sub Point Teguran 2 ', NULL, 'asdf,asdf,asdf'),
(19979, 'MKEU-KSAP/ST/XI/18', NULL, NULL, 'Siswa belum memasuki cicilan 1 tapi sudah belajar.#   Siswa a.n. Afzaal Aminudinsyah Omana, pembayaran cicilan 1 belum terpenuhi tetapi siswa sudah belajar. Seharusnya siswa mulai belajar setelah melunasi cicilan 1^  Diskon lunas tidak di berlakukan sesuai ketentuan juklak biaya.#   Siswa a.n. Afzaal Aminudinsyah Omana, pembayaran pelunasan di lakukan setelah siswa belajar, tetapi tetap diberlakukan diskon lunas (selisih Rp.702.000.-). Seharun', NULL, 'Koordinator Kabag Sdm,Kepala Cabang Cirebon'),
(19980, 'MK-KEU/KSAKSRGN/XI/18', NULL, NULL, '      Double pengajuan MGM a.n Lucy Ardian Pramudya, diajukan oleh 2 siswa yang berbeda yaitu a.n Fahrul Abidin unit Perintis Kemerdekaan & Bagas Bayu Sadewo unit Sukowati 179.\r\n^Tidak mengontrol double pengajuan MGM.\r\n^Dana yang sudah ditransfer tgl 6 November 2018 sebesar Rp.200.000 untuk pengajuan a.n Bagas Bayu Sadewo, dibebankan kepada Saudara.', NULL, 'Direksi,Kawil Jabagteng,Kacab Sragen,Koordinator Kabag SDM'),
(19981, 'MK-KEU/CS/XI/18', NULL, NULL, 'Double pengajuan MGM a.n Lucy Ardian Pramudya, diajukan oleh 2 siswa yang berbeda yaitu a.n Fahrul Abidin unit Perintis Kemerdekaan & Bagas Bayu Sadewo unit Sukowati 179.', NULL, 'Direksi,Kawil Jabagteng,Kacab Sragen,Koordinator Kabag SDM,Kanit Sukowati 179'),
(19982, 'MK-KEU/CS/XI/18', NULL, NULL, ' Double pengajuan MGM a.n Lucy Ardian Pramudya, diajukan oleh 2 siswa yang berbeda yaitu a.n Fahrul Abidin unit Perintis Kemerdekaan & Bagas Bayu Sadewo unit Sukowati 179.', NULL, 'Direksi,Kawil Jabagteng,Kacab Sragen,Koordinator Kabag SDM,Kanit Perintis Kemerdekaan 17'),
(19983, 'MK-KEU/KRYNAMLPR/XI/2018', NULL, NULL, ' Double pengajuan MGM a.n Ni Putu Eka Nanda K, diajukan oleh 2 siswa yang berbeda yaitu a.n Ni Nyoman Putri Sartika Wangi & Ni Made Priwinandari', NULL, 'Direksi,Kacab Denpasar,Koordinator Kabag SDM'),
(19984, 'MK-KEU/KNTAMLPR/XI/2018', NULL, NULL, 'Double pengajuan MGM a.n Ni Putu Eka Nanda K, diajukan oleh 2 siswa yang berbeda yaitu a.n Ni Nyoman\r\nPutri Sartika Wangi & Ni Made Priwinandari', NULL, 'Direksi,Kacab Denpasar,Koordinator Kabag SDM'),
(19985, 'MK-KEU/CS/XI/2018', NULL, NULL, 'Double pengajuan MGM a.n Ni Putu Eka Nanda K, diajukan oleh 2 siswa yang berbeda yaitu a.n Ni Nyoman\r\nPutri Sartika Wangi & Ni Made Priwinandari', NULL, 'Direksi,Kacab Denpasar,Koordinator Kabag SDM'),
(19986, 'MK-KEU/KSAP/ST/XI/18', NULL, NULL, '  Diskon lunas tidak diberlakukan sesuai dengan ketentuan juklak biaya. #Siswa a.n Lily Yana pembayaran ke 1 di bulan Maret, sedangkan pelunasan dilakukan di bulan Juli. Tetapi diskon lunas yang diberlakukan mengikuti bulan pembayaran ke 1 bukan bulan pembayaran saat pelunasan. Sehingga ada selisih kurang Rp. 516.600.', NULL, 'Koordinator Kabag Pusat SDM,Kepala Cabang Riau 1'),
(19987, 'MKEU-KSAP/ST/ XI/18', NULL, NULL, 'Pemberlakuan disko Anak Guru tidak diberlakukan sesuai ketentuan Juklak Biaya. #Siswa a.n M Syahid Al Jundi mendapatkan diskon anak guru tetapi diberi hak untuk melakukan pembayaran secara cicil. seharusnya diskon anak guru berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. jika tidak maka diskon Anak Guru tidak berlaku', NULL, 'Koordinator Kabag SDM,Kepala Cabang Sukabumi'),
(19988, 'MKEU-KSAP/ST/ XI/18', NULL, NULL, '    Pemberlakuan disko Anak Guru tidak diberlakukan sesuai ketentuan Juklak Biaya. #Siswa a.n Nazwa Aldrina dan Niken Ayu Safitri mendapatkan diskon anak guru tetapi diberi hak untuk melakukan pembayaran secara cicil. seharusnya diskon anak guru berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. jika tidak maka diskon Anak Guru tidak berlaku.', NULL, 'Koordinator Kabag SDM,Kepala Cabang Sukabumi,Kepala Unit Syamsudin 29'),
(19989, 'MKEU-KSAP/ST/ XI/18', NULL, NULL, ' Pemberlakuan disko Anak Guru tidak diberlakukan sesuai ketentuan Juklak Biaya. #Siswa a.n Allysa putri alnoer mendapatkan diskon anak guru tetapi diberi hak untuk melakukan pembayaran secara cicil. seharusnya diskon anak guru berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. jika tidak maka diskon Anak Guru tidak berlaku.', NULL, 'Koordinator Kabag SDM,Kepala Cabang Purwakarta,Kepala Unit Juanda 14'),
(19990, 'MKEU-KSAP/ST/ XI/18', NULL, NULL, '     Pemberlakuan disko Anak Guru tidak diberlakukan sesuai ketentuan Juklak Biaya. #Siswa a.n Kamila fatimah zahra dan Naufal ayyasy leksana mendapatkan diskon anak guru tetapi diberi hak untuk melakukan pembayaran secara cicil. seharusnya diskon anak guru berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. jika tidak maka diskon Anak Guru tidak berlaku.', NULL, 'Koordinator Kabag SDM,Kepala Cabang Purwakarta,Kepala Unit Ipik Gandamanah 19'),
(19991, 'MKEU-KSAP/ST/ XI/18', NULL, NULL, '      Pemberlakuan disko Anak Guru tidak diberlakukan sesuai ketentuan Juklak Biaya. #Siswa a.n Agung baihaqqi dan Olga purwanawati mendapatkan diskon anak guru tetapi diberi hak untuk melakukan pembayaran secara cicil. seharusnya diskon anak guru berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. jika tidak maka diskon Anak Guru tidak berlaku.', NULL, 'Koordinator Kabag SDM,Kepala Cabang Purwakarta,Kepala Unit Martadinata 78'),
(19992, 'MKEU-KSAP/ST/ XI/18', NULL, NULL, ' Pemberlakuan disko Anak Guru tidak diberlakukan sesuai ketentuan Juklak Biaya. #Siswa a.n Jihan khairun amala,Pahmi nugraha, Yessy dwi amalia, Refi tazhqiyatui fadilah dan Rifa sopiatul huda mendapatkan diskon anak guru tetapi diberi hak untuk melakukan pembayaran secara cicil. seharusnya diskon anak guru berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. jika tidak maka diskon Anak Guru tidak berlaku.', NULL, 'Koordinator Kabag SDM,Kepala Cabang Purwakarta,Kepala Unit Ade Irma Suryani'),
(19994, 'MKEU-KSAP/ST/XI/18', NULL, NULL, 'Diskon Lunas tidak diberlakukan sesuai Juklak Biaya#Siswa a.n Elroy Abram Anugrahta Sitepu Start belajar tanggal 30/08/2018, melunasi pembayaran tanggal 26/11/2018 mendapatkan diskon lunas November sebesar 25%. Selisih pembayaran sebesar Rp. 1.440.000 #Siswa a.n Indria Alloyna start belajar tanggal 07/09/2018, melunasi tanggal 24/11/18 mendapatkan diskon lunas bulan Februari sebesar 34%. Selisih pembayaran sebesar Rp. 2.509.200#Siswa a.n Julio Evander S start belajar 26/09/2018, melunasi 24/11/2018 mendapatkan diskon lunas November 25%. Selisih pembayaran sebesar Rp. 1.833.750#Siswa a.n Daren start belajar 09/09/2018, melunasi 24/11/2018 mendapatkan diskon lunas November 25%. Selisih pembayaran sebesar Rp. 1.833.750\r\n^Seharusnya diskon lunas berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. Jika tidak maka berlaku pembayaran secara cicil.', NULL, 'Koordinator Kabag Pusat SDM,Kepala Cabang Sidikalang,Kepala Sekretariat Jamin Ginting 283D'),
(19995, '19995/MKEU-KSAP/ST/XI/18', NULL, NULL, 'Kiriman LPH tidak sesuai dengan surat edaran \r\n^Pada kiriman LPH (Laporan Penerimaan Harian) seringnya tertinggal kwitansi bimbel dan Slip Setoran yang seharusnya di lampirkan setiap akan kirim LPH dalam satu folder sesuai dengan tanggal laporan yang akan dikirim.\r\n^Kwitansi LPH tanggal 23 November 2018 tidak terlampir, ada penerimaan Rp. 300.000 berdasarkan inputan GO Kasir dan LH, sesuai dengan Surat Edaran yang dikirim tanggal 6 November, foto kwitansi bimbel harus terlampir, kecuali jika tidak ada penerimaan.\r\n^Kwitansi D.06.035145 tanggal di kwitansi 23 November 2018 dan Slip EDC Mandiri Rp. 1.000.000 settlement tanggal 23 November, tetapi baru di laporkan pada LPH tanggal 24 November 2018. Seharusnya kwitansi D.06.035145 masuk ke pelaporan LPH tanggal 23 November 2018.', NULL, 'Manajer Akuntansi,Koordinator Kabag Pusat SDM,Kepala Cabang Muara Bungo'),
(19996, 'MK-KEU/KSAP/ST/XI/18', NULL, NULL, 'Diskon lunas tidak diberlakukan sesuai dengan ketentuan juklak biaya^Siswa a.n Fairuz Dita Fatina pelunasan dilakukan setelah siswa mengikuti Try Out, tetapi tetap diberlakukan diskon lunas. Sehingga ada selisih Pembayaran Rp. 1.900.000.\r\nSeharusnya diskon Lunas berlaku jika siswa membayar langsung lunas biaya bimbingan. Jika tidak, maka berlaku pembayaran secara cicil.', NULL, 'Koordinator Kabag Pusat SDM,Kepala Unit Painan,Kepala Cabang Padang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_tidak_kuota`
--

DROP TABLE IF EXISTS `tb_sk_tidak_kuota`;
CREATE TABLE `tb_sk_tidak_kuota` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `jumlahbayar` varchar(150) NOT NULL,
  `pengembaliannorek` varchar(200) NOT NULL,
  `tembusan` text NOT NULL,
  `tgl_marketing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_tidak_kuota`
--

INSERT INTO `tb_sk_tidak_kuota` (`no`, `no_surat`, `nama_siswa`, `kelas`, `unit`, `jumlahbayar`, `pengembaliannorek`, `tembusan`, `tgl_marketing`) VALUES
(19879, 'MK-KEU/KNTCWGB/X/18', 'Siti Hardiyanti', '10 IPA', 'Ciawigebang', '1200000', 'BRI <br> 426201014663537 <br> Sariah', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kacab Kuningan,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kasie Marketing,Kasie Audit Pembayaran', '2018-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_transfer_mgmbiaya`
--

DROP TABLE IF EXISTS `tb_sk_transfer_mgmbiaya`;
CREATE TABLE `tb_sk_transfer_mgmbiaya` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
  `tgl_pencairan` date NOT NULL,
  `jenis_pencairan` varchar(50) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `jml_order_mgm` int(11) NOT NULL,
  `jml_siswa_mgm` int(11) NOT NULL,
  `jml_order_biaya` int(11) NOT NULL,
  `jml_siswa_biaya` int(11) NOT NULL,
  `tot_order` int(11) NOT NULL,
  `tot_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
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
(10, 'bakoy', '81dc9bdb52d04dc20036dbd8313ed055', 'Kasie keuangan', 'Dany Rahmansyah'),
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
(23, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Analis Data', 'Analis Data'),
(24, 'digna', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Digna Andina Saputri'),
(25, 'annisa', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Annisa Hafidzah'),
(26, 'fithri', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Fithri Nur Annisa'),
(27, 'tria', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Tria Handayani'),
(28, 'venty', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Venty Apriliani'),
(29, 'ditya', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Ditya'),
(30, 'tini', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Tini'),
(31, 'tari', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Tari');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sk_intruksi_transfer`
--
ALTER TABLE `tb_sk_intruksi_transfer`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_sk_pengecekan`
--
ALTER TABLE `tb_sk_pengecekan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_sk_peringatan`
--
ALTER TABLE `tb_sk_peringatan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_sk_pos_giro`
--
ALTER TABLE `tb_sk_pos_giro`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_sk_teguran`
--
ALTER TABLE `tb_sk_teguran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_sk_tidak_kuota`
--
ALTER TABLE `tb_sk_tidak_kuota`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smasuk`
--
ALTER TABLE `smasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

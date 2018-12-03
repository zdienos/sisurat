-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 03:20 AM
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
-- Table structure for table `skeluar`
--

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
(19879, 'MK-KEU/KNTCWGB/X/18', 'Surat ACC Pengembalian Kelas Tidak Kuota', 'Bapak Anto, S.Pd', 'Plt. Kepala Unit Ciawigebang', 'Pencairan', '2018-12-03', 'Hera Widyati Fitriani-Staff Pengembalian', 'ACC'),
(19971, 'MK-KEU/KRYMTL/X/18', 'Surat ACC Pencairan Fee Bimker', 'Ibu Rinang Listyorini', 'Kepala Rayon Muntilan – Magelang', 'Pencairan', '2018-11-02', 'Yuni Lestari-Staff Pengembalian', 'Proses'),
(19972, 'MK-KEU/KCBTBS/XII/18', 'Surat ACC Pencairan PT Kolektif', 'Bapak Sapto Martua Hutapea, S.Pd.', 'Kepala Cabang Toba Samosir', 'Pencairan', '2018-11-29', 'Yuni Lestari-Staff Pengembalian', 'ACC'),
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
(19994, 'MKEU-KSAP/ST/XI/18', 'Surat Teguran', ' Rahel Br Ginting', ' Customer Service - Brastagi - Jamin Ginting 283D', 'Teguran', '2018-11-30', 'Analis Data-Staff Analis Data', 'Proses'),
(19995, '19995/MKEU-KSAP/ST/XI/18', 'Surat Teguran', ' Roro Cresmulati A J (Customer Service)', ' Muara Bungo - Diponegoro 1-2', 'Teguran', '2018-11-29', 'Analis Data-Staff Analis Data', 'Proses'),
(19996, 'MK-KEU/KSAP/ST/XI/18', 'Surat Teguran', ' Desna Indra Welni', ' Customer Service Padang - Painan', 'Teguran', '2018-11-30', 'Analis Data-Staff Analis Data', 'Proses'),
(19997, 'MK-KEU/PLTKNTKTSN/XI/18', 'Surat ACC Pengembalian Kelebihan Bayar', 'Bapak Bagus Purwanto., S.Pd', 'Plt. Kepala Unit Kertosono - Jombang', 'Pencairan', '2018-12-03', 'Eli Rahmawati-Staff Pengembalian', 'ACC'),
(19998, 'MK-KEU/KNTMRTDNT/XI/18', 'Surat ACC Pencairan PT Kolektif', 'Bapak Deni Mulyadi', 'Kepala Unit R.E Marthadinata 354', 'Pencairan', '2018-11-30', 'Yuni Lestari-Staff Pengembalian', 'Proses'),
(19999, 'MK-KEU/KSAP/ST/XI/18', 'Surat Teguran', ' Rahmania', ' Tebingtinggi', 'Teguran', '2018-11-30', 'Analis Data-Staff Analis Data', 'Proses'),
(20000, 'MK-KEU/KNTMGLKM13.5/XII/18', 'Surat ACC Pencairan Fee Bimker', 'Ibu Adibah', 'Kepala Unit Sleman', 'Pencairan', '2018-12-01', 'Yuni Lestari-Staff Pengembalian', 'Proses'),
(20001, 'MK-KEU/KCBPKU/XII/18', 'Surat ACC Pencairan PT Kolektif', 'Bapak Sadar Sinaga, S.T.', 'Kepala Cabang Pekanbaru', 'Pencairan', '2018-12-01', 'Nurul Nugraheni-Staff Pengembalian', 'Proses'),
(20002, 'MK-KEU/KARAYONBJR/XII/18', 'Surat ACC Pencairan PT Kolektif', 'Bapak Alif Sularto', 'Kepala Rayon Banjar', 'Pencairan', '2018-12-01', 'Yuni Lestari-Staff Pengembalian', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `smasuk`
--

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
(46, '5107/KKSDM-PBSDM/KAC-Blitar/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Agus David, S.Pd. - Plt. Kepala Cabang Blitar', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543393561.zip'),
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
(87, '5088/KKSDM-PBSDM/KAC-19/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Elbisker, M.M., M.B.A. - Kepala Wilayah Jawa Bagian Timur', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543540868.zip'),
(88, '5090/KKSDM-PBSDM/KAC-Medan/IX/2018', 'Tanggapan Pembatalan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543541030.zip'),
(89, '5091/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543541125.zip'),
(90, '5092/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542627.zip'),
(91, '5095/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M. - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542711.zip'),
(92, '5096/KKSDM-PBSDM/KAC-MJKT/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Raki Krastianto, S.Si. - Kepala Cabang Mojokerto', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542807.zip'),
(93, '5052/KKSDM-PBSDM/KAC-17/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Kusmartono,S.Si - (Kepala Cabang Magelang)', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542808.zip'),
(94, '5062/KKSDM-PBSDM/KAC-JOMBANG/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Siti Maryam,S.Pd. - Kepala Cabang Jombang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542883.zip'),
(95, '5098/KKSDM-PBSDM/KAC-MJKT/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Raki Krastianto, S.Si. - Kepala Cabang Mojokerto', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542928.zip'),
(96, '5066/KKSDM-PBSDM/KAC-51/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Wina Agustina,S.Si - Kepala Cabang Tangerang Kota', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543542955.zip'),
(97, '2152/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543018.zip'),
(98, '2129/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543074.zip'),
(99, '2128/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543129.zip'),
(100, '2134/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543197.zip'),
(101, '5067/KKSDM-PBSDM/KAC-13/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Erwan Damhuri, S.Si. - Kepala Cabang Jambi', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543221.zip'),
(102, '5099/KKSDM-PBSDM/KAC-MJKT/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Raki Krastianto, S.Si. - Kepala Cabang Mojokerto', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543231.zip'),
(103, '1909/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-23', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543244.zip'),
(104, '5069/KKSDM-PBSDM/KAC-29/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Manuntun Hutahaean, S.Si. - Kepala Cabang Pematang Siantar', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543462.zip'),
(105, '0975/MOP-BOP-MK/IHP/X1/2018', 'Informasi Honor Pengajar Harian Cuti Di Luar Tanggungan Cabang Sragen', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543553.jpg'),
(106, '5070/KKSDM-PBSDM/KAC-34/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak A. Taufiqurrahman, S.Pd - Kepala Cabang Tangerang Selatan', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543556.zip'),
(107, '5071/KKSDM-PBSDM/KAC-34/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak A. Taufiqurrahman, S.Pd - Kepala Cabang Tangerang Selatan', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543614.zip'),
(108, '0991/MOP-BOP/MK/HNR-PK/XI/2018', 'Informasi Pembayaran Honor Pengajar Kuota Cabang Bandung', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-23', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543641.zip'),
(109, '5072/KKSDM-PBSDM/KAC-34/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak A. Taufiqurrahman, S.Pd - Kepala Cabang Tangerang Selatan', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543668.zip'),
(110, '5083/KKSDM-PBSDM/KAC-Kudus/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Akhya Shofa, S.Pd - Plt Kepala Cabang Kudus', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543753.zip'),
(111, '0990/MOP/KAC/TPT/XI/2018', 'Tanggapan Pengajuan Peminjaman Pengajar Antar Kota Cabang Aceh', 'Ibu Friska Brahmana, S.Pd - Kepala Cabang Aceh', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-22', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543809.zip'),
(112, '5086/KKSDM-PBSDM/KAC-Kudus/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Akhya Shofa, S.Pd - Plt Kepala Cabang Kudus', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '30-11-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543860.zip'),
(113, '2161/KKSDM-PPSDM/MK/XI/2018', 'Informasi Karyawan Tidak Bergabung', 'Ibu Erna Veronika - Manajer Keuangan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-30', 'annisa', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543960.zip'),
(114, '5087/KKSDM-PBSDM/KAC-19/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Elbisker, M.M., M.B.A. - Kepala Wilayah Jawa Bagian Timur', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543543971.zip'),
(115, '0988/MOP-BOP/MK/HNR-PK/XI/2018', 'Informasi Off dan Pembayaran Honor Pengajar Kuota Bandung', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-22', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544048.jpg'),
(116, '1000/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Mutasi & Alih Status Cabang Samarinda', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '30-11-18', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544226.jpg'),
(117, '0995/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Mutasi & Alih Status Cabang Tulungagung', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544407.jpg'),
(118, '0998/MOP-KBOP/MK/PHP/XI/2018', 'Informasi Pembayaran Honor Pengajar Alih Status', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544510.jpg'),
(119, '0997/MOP-BOP/MK/PCM/XI/2018', 'Info Pembayaran Honor Pengajar Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544585.jpg'),
(120, '0864/MOP-BOP/MK/PCM/XI/2018', 'Info Honor Pengajar Harian Cuti Melahirkan Kacab Jember', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544738.jpg'),
(121, '0944/MOP-BOP/MK/PAC/XI/2018', 'Informasi Pembayaran Honor PH Aktif Cuti Melahirkan Cabang Sumsel I', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544812.jpg'),
(122, '0993/MOP-BOP/MK/PAK/XI/2018', 'Informasi Pembayaran Honor Pengajar Aktif dari Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543544982.jpg'),
(123, '0986/MOP-BOP/MK/PAK/XI/2018', 'Informasi Pembayaran Honor Pengajar Aktif dari Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-22', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543545053.jpg'),
(124, '0987/MOP-BOP/MK/PAK/XI/2018', 'Informasi Pembayaran Honor Pengajar Aktif dari Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-22', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543545152.jpg'),
(125, '0992/MOP-BOP/MK/PAK/XI/2018', 'Informasi Pembayaran Honor Pengajar Aktif dari Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543545222.jpg'),
(126, '0996/MOP-BOP/MK/PCM/XI/2018', 'Info Honor Pengajar Harian Cuti Melahirkan Kacab Bengkulu', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543545305.jpg'),
(127, '0861/MOP-BOP/MK/PCM/XI/2018', 'Info Cuti Melahirkan dan Pembayaran Honor Pengajar Bandung', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543545376.jpg'),
(128, '0999/MOP-BOP/MK/PAK/XI/2018', 'Informasi Pembayaran Honor Pengajar Aktif dari Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-24', '2018-11-30', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543545446.jpg'),
(129, '5046/KKSDM-PBSDM/KAC-Jakarta1/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Hotlider Purba, S.E. - Kepala Cabang Jakarta 1', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543546605.zip'),
(130, '5044/KKSDM-PBSDM/KAC-Wonogiri/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Zaenal Arifin, S.Si. - Plt. Kepala Cabang Wonogiri', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543546743.zip'),
(131, '5040/KKSDM-PBSDM/KAC-Sumsel II/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Abdullah Umar Dhani M, S.Sos. - Kepala Cabang Sumsel II', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543546854.zip'),
(132, '5039/KKSDM-PBSDM/Karayon-Banjarbaru-Martapura/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Endang Sulastri S, S.E. - Kepala Rayon Banjarbaru - Martapura', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543546974.zip'),
(133, '5034/KKSDM-PBSDM/Karayon-Singkawang/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Ratih Renata - Kepala Unit Sudirman 70 - Singkawang', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543547069.zip'),
(134, '5033/KKSDM-PBSDM/Karayon-Singkawang/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Ratih Renata - Kepala Unit Sudirman 70 - Singkawang', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543547197.zip'),
(135, '4929/KKSDM-PBSDM/KAC-38/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu V. Nora Laksminingrum, S.Pd. - Kepala Cabang Klaten', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-26', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543547371.zip'),
(136, '4910/KKSDM-PBSDM/KAC-PRB/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Zuhdiawan Yanuar, S. Pd. - Kepala Cabang Probolinggo', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543547499.zip'),
(137, '4883/KKSDM_-PBSDM/KAC-Sragen/XI/2018', 'Tanggapan Ajuan Rapat Unit Cabang Sragen Bulan Nopember 2018', 'Bapak Angga Lesmana, S.Sos. - Kepala Cabang Sragen', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-11-30', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543547603.zip'),
(138, '5111/KKSDM-PBSDM/KAC-16/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Doni Permana, S.Si - Kacab Lampung', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data terlampir', '2018-11-22', '2018-11-30', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543548681.zip'),
(139, '5112/KKSDM-PBSDM/KAC-Jakarta4/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Roganda Siregar,S.Si', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data terlampir', '2018-11-22', '2018-11-30', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543548762.zip'),
(140, '5115/KKSDM-PBSDM/KAC-17/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Kusmartono,S.Si - Kacab Magelang', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-11-30', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543548806.zip'),
(141, '5116/KKSDM-PBSDM/KAC-26/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Drs. Wawan Samsul Nugraha, M.MPd.', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data terlampir', '2018-11-22', '2018-11-30', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543548875.zip'),
(142, '5117/KKSDM-PBSDM/KAC-Riau1/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Nanda Oktaviana, S.Pd.', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data terlampir', '2018-11-22', '2018-11-30', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543548939.zip'),
(143, '5130/KKSDM-PBSDM/KAC-16/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Doni Permana, S.Si - Kacab Lampung', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data terlampir', '2018-11-22', '2018-11-30', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543548995.zip'),
(144, '5131/KKSDM-PBSDM/KAC-16/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Doni Permana, S.Si - Kacab Lampung', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data terlampir', '2018-11-22', '2018-11-30', 'fithri', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543549045.zip'),
(145, '5208/KKSDM-PBSDM/KAC-17/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Kusmartono, S.Si. - Kepala Cabang Magelang', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '30-11-18', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543550197.zip'),
(146, '5209/KKSDM-PBSDM/KAC- 48/XI/2018', 'Tanggapan Ajuan Cuti', 'Ibu Yan Triskawati Amanda, S.S. - Kepala Cabang Jember', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-30', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543550392.zip'),
(147, '5229/KKSDM-PBSDM/KAC- 28/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Masrul Saragih - Kepala Cabang Semarang', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-30', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543550569.zip'),
(148, '5231/KKSDM-PBSDM/KAC- Jakarta2/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Gamaliel.,S.T., M.T. - Kepala Cabang Jakarta 2', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-24', '2018-11-30', 'tini', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543550699.zip'),
(149, '4960/KKSDM-PBSDM/KAC-14/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Dwi Fahruddin A. A, S.P. - Plt. Kepala Cabang Yogyakarta', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-19', '01-12-18', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543652648.zip'),
(150, '4963/KKSDM-PBSDM/KAC-Nganjuk/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Imron Masruri, S.Pd. - Kepala Cabang Nganjuk ', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-19', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543652817.zip'),
(151, '4964/KKSDM-PBSDM/KAC-41/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Surya Abdi, S.E. - Kepala Cabang Banten', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Lampiran', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543653135.zip'),
(152, '4968/KKSDM-PBSDM/KAC-19/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Ebisker, M.M., M.B.A. - Kepala Wilayah Jawa Bagian Timur', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543653283.zip'),
(153, '4973/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543654559.zip'),
(154, '4974/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543654602.zip'),
(155, '4975/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543654657.zip'),
(156, '4976/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543654697.zip'),
(157, '4977/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543654753.zip'),
(158, '4978/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543654807.zip'),
(159, '4979/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-01', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543654907.zip'),
(160, '0978/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Resign Cabang Bogor', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543800736.jpg'),
(161, '0982/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Resign/Meninggal Dunia Cabang Jakarta 2', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543800909.jpg'),
(162, '0983/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Baru Cabang Muara Bungo', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801075.jpg'),
(163, '0977/MOP-BOP/MK/PCM/XI/2018', 'Info Honor Pengajar Harian Cuti Melahirkan Cabang Magelang', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801420.jpg'),
(164, '4980/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801460.zip'),
(165, '4981/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Pilih', 'SuratMasuk_Pilih_1543801566.zip'),
(166, '4982/KKSDM-PBSDM/KAC-Medan/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Jamso Haryono Pangaribuan, M.M - Kepala Cabang Medan', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801639.zip'),
(167, '4984/KKSDM-PBSDM/KAC-28/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Masrul Saragih - Kepala Cabang Semarang', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801716.zip'),
(168, '0985/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Alih Status Unit Ketapang', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801762.jpg'),
(169, '4985/KKSDM-PBSDM/KAC-28/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Masrul Saragih - Kepala Cabang Semarang', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801769.zip'),
(170, '4986/KKSDM-PBSDM/KAC-28/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Masrul Saragih - Kepala Cabang Semarang', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801833.zip'),
(171, '0981/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Alih Status Cabang Banyumas', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801847.jpg'),
(172, '4993/KKSDM-PBSDM/KAC-03/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Sumadi, ST. - Kepala Cabang Banjarmasin', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801899.zip'),
(173, '0980/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Alih Status Cabang Banyumas', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801926.jpg'),
(174, '4994/KKSDM-PBSDM/KAC-03/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Sumadi, ST. - Kepala Cabang Banjarmasin', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543801945.zip'),
(175, '4996/KKSDM-PBSDM/KAC-Makassar/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Syarif Hidayat, M.Si. - Kepala Cabang Makassar', 'Ibu Floriana Sari, S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-21', '2018-12-03', 'digna', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802014.zip'),
(176, '0976/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Mutasi & Alih Status Cabang Kepulauan Riau', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802031.jpg'),
(177, '0979/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Alis Status Cabang Sukoharjo', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802118.jpg'),
(178, '4747/KKSDM-PBSDM/KAC-RIAU 1/XI/2018', 'Tanggapan Ajuan Rapat Pimpinan Cabang Riau 1 Bulan Desember 2018', 'Ibu Nanda Oktaviana, S.Pd. - Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '03-12-18', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802121.jpg'),
(179, '4748/KKSDM-PBSDM/KAC-25/XI/2018', 'Tanggapan Ajuan Rapat Cabang Garut Bulan Desember 2018', 'Bapak Purwoko Bayu Pranowo, S.Pd. - Plt Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir\r\n\r\n', '2018-11-17', '2018-12-03', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802234.jpg'),
(180, '0870/MOP-BOP/MK/PCM/XI/2018', 'Info Honor Pengajar Harian Cuti Melahirkan Cabang Karawang', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-19', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802244.jpg'),
(181, '4770/KKSDM-PBSDM/KAC-TBN/XI/2018', 'Tanggapan Pengajuan Rapat Cabang Tuban Bulan Desember 2018', 'Bapak Budi Tjahyono, S.Pd - Plt Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-22', '2018-12-03', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802353.jpg'),
(182, '0817/MOP-BOP/MK/PCM/XI/2018', 'Info Pembayaran Honor Pengajar Cuti Melahirkan', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-13', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802410.jpg'),
(183, '0859/MOP-BOP/MK/HNR-PH/XI/2018', 'Informasi Pembayaran Honor Pengajar Harian Resign', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-14', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802496.jpg'),
(184, '0866/MOP-BOP/MK/HNR-PH/XI/2018', 'Informasi Pembayaran Honor Pengajar Harian Resign', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-14', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802617.jpg'),
(185, '4818/MSDM-PBSDM/KAC-42/XI/2018', 'Tanggapan Pengajuan Rapat Unit & Rapat Pimpinan Cabang Banyumas bulan Desember 2018', 'Bapak M. Arif Munandar, S.Si - Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-12-03', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802669.zip'),
(186, '0869/MOP-BOP/MK/HNR-PH/XI/2018', 'Informasi Pembayaran Honor Pengajar Harian Resign', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-16', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802706.jpg'),
(187, '0863/MOP-BOP/MK/PCM/XI/2018', 'Info Honor Pengajar Harian Cuti Melahirkan Rayon Payakumbuh', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-16', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802784.jpg');
INSERT INTO `smasuk` (`id`, `no_surat`, `hal`, `kepada`, `dari`, `keterangan`, `tanggal`, `tgl_input`, `userid`, `jenissurat`, `arsip`) VALUES
(188, '4923/KKSDM-PBSDM/KOP-BR/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Sardianto Sihombing - Koordinator Kabag Penjadwalan Bandung Raya', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-12-03', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802827.zip'),
(189, '4843/KKSDM-PBSDM/KAC-RIAU 1/XI/2018', 'Tanggapan Ajuan Rapat Unit Cabang Riau 1 Bulan Desember 2018', 'Ibu Nanda Oktaviana, S.Pd. - Plt. Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-12-03', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802832.jpg'),
(190, '0862/MOP/KAC/TPT/XI/2018', 'Tanggapan Pengajuan Transport Pengajar Cabang Lampung', 'Bapak Doni Permana, S.Si - Kepala Cabang Lampung', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Telampir', '2018-11-13', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802904.zip'),
(191, '4924/KKSDM-PBSDM/MKT/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Ricko Juri Aman - Manajer Marketing', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-12-03', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543802935.zip'),
(192, '0972/MOP/KAC/TPT/XI/2018', 'Tanggapan Pengajuan Akomodasi Peminjaman Pengajar Cabang Pekalongan', 'Bapak Slamet Handayanto A - Kepala Cabang Pekalongan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-19', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803006.jpg'),
(193, '4926/KKSDM-PBSDM/MKT/XI/2018', 'Tanggapan Ajuan Cuti', 'Bapak Ir. Ricko Juri Aman - Manajer Marketing', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-12-03', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803012.zip'),
(194, '0865/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Resign Cabang Bukittinggi', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-19', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803086.jpg'),
(195, '4928/KKSDM-PBSDM/KAC-38/XI/2018', 'Tanggapan Ajuan Rapat Pimpinan & Rapat Unit Cabang Klaten Bulan Desember 2018', 'Ibu V. Nora Laksminingrum, S.Pd. - Kepala Cabang Klaten', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-12-03', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803163.zip'),
(196, '0984/MOP-BOP/MK/IHP/XI/2018', 'Informasi Honor Pengajar Harian Bandung Mutasi Dan Alih Status', 'Ibu Erna Veronika - Manajer Keuangan', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-21', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803178.jpg'),
(197, '0974/MOP/KAC/TPT/XI/2018', 'Tanggapan Pengajuan Matriks Transport Dan Pengali Luar Kota Cabang Sragen', 'Bapak Angga Lesmana, S.Sos. - Kepala Cabang Sragen', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-19', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803274.zip'),
(198, '4938/KKSDM-PBSDM/KAC-30/XI/2018', 'Tanggapan Ajuan Rapat Unit Martadinata 78 Cabang Purwakarta Bulan Desember 2018', 'Bapak Rochmat Rochmawan, S.Pd.', 'Kepala Cabang Purwakarta', 'Data Terlampir', '2018-11-19', '2018-12-03', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803343.jpg'),
(199, '0973/MOP/KAC/TPT/XI/2018', 'Tanggapan Pengajuan Peminjaman Pengajar Antar Kota Cabang Blitar', 'Bapak Agus David, S.Pd - Plt. Kepala Cabang Blitar', 'Bapak Noto Raharjo, S.Pd - Manajer Operasional Pengajaran', 'Data Terlampir', '2018-11-19', '2018-12-03', 'ditya', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803374.zip'),
(200, '4848/KKSDM-PBSDM/KARAYON-SOLOK/XI/2018', 'Tanggapan Pengajuan Pimpinan & Rapat Unit Rayon Solok  bulan Desember 2018', 'Bapak Taufik Meido Syahputra, S.Pd. - Kepala Rayon', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-16', '03-12-18', 'tria', 'Ekspedisi', 'default.png'),
(201, '4938/KKSDM-PBSDM/KAC-Wonogiri/XI/2018', 'Tanggapan Ajuan Rapat Pimpinan & Rapat Unit Cabang Wonogiri Bulan Desember 2018', 'Bapak Zaenal Arifin, S.Si. - Kepala Cabang Wonogiri', 'Ibu Floriana Sari, S.E. - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-19', '2018-12-03', 'venty', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803510.zip'),
(202, '4849/KKSDM-PBSDM/KAC-39/XI/2018', 'Tanggapan Ajuan Rapat Unit Rinjani 37 Cabang Lombok Bulan Desember 2018', 'Bapak Riki Rikardo, S.Pd - Plt Kepala Cabang', 'Ibu Floriana Sari,S.E - Koordinator Kabag SDM', 'Data Terlampir', '2018-11-17', '2018-12-03', 'tria', 'Ekspedisi', 'SuratMasuk_Ekspedisi_1543803590.jpg');

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
(19972, 'MK-KEU/KCBTBS/XII/18', '2 Lembar', '2018-10-06', 'SMP BUDHI DHARMA BALIGE', 'ADA', 'REGULER', 57, 30, 27, 50000, 1500000, 'Diskon Anak Guru = 25\r\nDiskon Rangking 50% = 2', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag Marketing 1,Kasie Audit Pembayaran'),
(19998, 'MK-KEU/KNTMRTDNT/XI/18', '2 Lembar', '2018-10-19', 'SMPN 05 TASIKMALAYA', 'ADA', 'REGULER', 25, 6, 19, 50000, 300000, 'Diluar Tanggal MoU = 3\r\nDiskon Anak Guru = 4\r\nDiskon Rangking Khusus = 12', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kacab Pritim,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kasie Marketing,Kasie Audit pembayaran'),
(20000, 'MK-KEU/KNTMGLKM13.5/XII/18', '2 Lembar', '2018-10-23', 'SMPN 03 SLEMAN', 'ADA', 'REGULER', 38, 38, 0, 50000, 1900000, '', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kawil Jawa Bagian Tengah,Kacab Bantul,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag Marketing,Kasie Audit Pembayaran'),
(20001, 'MK-KEU/KCBPKU/XII/18', '0', '2018-11-16', 'SMA Santa Maria Pekanbaru', 'Ada', 'Reguler', 103, 16, 87, 100000, 1600000, '2 Siswa > Cicilan 1<br>1 Siswa Diskon > 50%<br>6 Siswa Diskon Anak Guru<br>5 Siswa Diskon Ranking Khusus<br>26 Siswa Siswa MGM<br>1 Siswa Pengalihan TP Lalu<br>7 Siswa Siswa PT<br>39 Siswa Tgl Di Luar MoU', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag Marketing 1,Kasie MKT & TI Pekanbaru,Kasie Audit Pembayaran'),
(20001, 'MK-KEU/KCBPKU/XII/18', '0', '2018-11-16', 'SMA Santa Maria Pekanbaru', 'Ada', 'Executive', 1, 0, 1, 100000, 0, '1 Siswa Tgl Di Luar MoU', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag Marketing 1,Kasie MKT & TI Pekanbaru,Kasie Audit Pembayaran'),
(20002, 'MK-KEU/KARAYONBJR/XII/18', '1 Lembar', '2018-11-08', 'SMAN 03 BANJAR', 'ADA', 'REGULER', 14, 3, 11, 50000, 150000, 'Tanggal diluar MoU = 3\r\nDiskon Anak Guru = 3\r\nDiskon Rangking Khusus = 2\r\nSiswa MGM = 3', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kacab Pritim,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kasie Marketing,Kasie Audit Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_pengecekan`
--

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
(19994, 'MKEU-KSAP/ST/XI/18', NULL, NULL, ' Diskon Lunas tidak diberlakukan sesuai Juklak Biaya\r\n#Siswa a.n Elroy Abram Anugrahta Sitepu Start belajar tanggal 30/08/2018, melunasi pembayaran tanggal 26/11/2018 mendapatkan diskon lunas November sebesar 25%. Selisih pembayaran sebesar Rp. 1.440.000 \r\n^\r\n#Siswa a.n Indria Alloyna start belajar tanggal 07/09/2018, melunasi tanggal 24/11/18 mendapatkan diskon lunas bulan Februari sebesar 34%. Selisih pembayaran sebesar Rp. 2.509.200\r\n#Siswa a.n Julio Evander S start belajar 26/09/2018, melunasi 24/11/2018 mendapatkan diskon lunas November 25%. Selisih pembayaran sebesar Rp. 1.833.750\r\n^\r\n#Siswa a.n Daren start belajar 09/09/2018, melunasi 24/11/2018 mendapatkan diskon lunas November 25%. Selisih pembayaran sebesar Rp. 1.833.750\r\n#Seharusnya diskon lunas berlaku jika siswa membayar langsung lunas biaya bimbingan sebelum start belajar. Jika tidak maka berlaku pembayaran secara cicil.', NULL, 'Koordinator Kabag Pusat SDM,Kepala Cabang Sidikalang,Kepala Sekretariat Jamin Ginting 283D'),
(19995, '19995/MKEU-KSAP/ST/XI/18', NULL, NULL, 'Kiriman LPH tidak sesuai dengan surat edaran \r\n^Pada kiriman LPH (Laporan Penerimaan Harian) seringnya tertinggal kwitansi bimbel dan Slip Setoran yang seharusnya di lampirkan setiap akan kirim LPH dalam satu folder sesuai dengan tanggal laporan yang akan dikirim.\r\n^Kwitansi LPH tanggal 23 November 2018 tidak terlampir, ada penerimaan Rp. 300.000 berdasarkan inputan GO Kasir dan LH, sesuai dengan Surat Edaran yang dikirim tanggal 6 November, foto kwitansi bimbel harus terlampir, kecuali jika tidak ada penerimaan.\r\n^Kwitansi D.06.035145 tanggal di kwitansi 23 November 2018 dan Slip EDC Mandiri Rp. 1.000.000 settlement tanggal 23 November, tetapi baru di laporkan pada LPH tanggal 24 November 2018. Seharusnya kwitansi D.06.035145 masuk ke pelaporan LPH tanggal 23 November 2018.', NULL, 'Manajer Akuntansi,Koordinator Kabag Pusat SDM,Kepala Cabang Muara Bungo'),
(19996, 'MK-KEU/KSAP/ST/XI/18', NULL, NULL, 'Diskon lunas tidak diberlakukan sesuai dengan ketentuan juklak biaya^Siswa a.n Fairuz Dita Fatina pelunasan dilakukan setelah siswa mengikuti Try Out, tetapi tetap diberlakukan diskon lunas. Sehingga ada selisih Pembayaran Rp. 1.900.000.\r\nSeharusnya diskon Lunas berlaku jika siswa membayar langsung lunas biaya bimbingan. Jika tidak, maka berlaku pembayaran secara cicil.', NULL, 'Koordinator Kabag Pusat SDM,Kepala Unit Painan,Kepala Cabang Padang'),
(19999, 'MK-KEU/KSAP/ST/XI/18', NULL, NULL, 'Penginputan diskon di GO Kasir tidak sesuai dengan kuitansi manual\r\n^ Siswa a.n M. Iqbal Mahendra pelunasan dilakukan di tgl 21 November 2018 dengan nominal Rp. 3.225.000 dientrykan ke Go Kasir dengan nominal Rp. 3.275.000 (Lunas), sehingga terjadi selisih Rp. 50.000\r\n^ Status pembayaran siswa yang seharusnya siswa tersebut masih berstatus Cicilan karena kesalahan tersebut status siswa menjadi Lunas.\r\n\r\nseharusnya pembayaran yang di entrykan ke Go Kasir sesuai dengan yang kuitansi manual, sehingga data yang di entrykan di Go Kasir sesuai dengan aslinya.', NULL, 'Koordinator Kabag Pusat SDM. Kepala Cabang Sumsel 2, Kepala Unit Tebingtinggi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_tidak_kuota`
--

CREATE TABLE `tb_sk_tidak_kuota` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(150) DEFAULT NULL,
  `tindaklanjut` varchar(255) NOT NULL,
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

INSERT INTO `tb_sk_tidak_kuota` (`no`, `no_surat`, `tindaklanjut`, `nama_siswa`, `kelas`, `unit`, `jumlahbayar`, `pengembaliannorek`, `tembusan`, `tgl_marketing`) VALUES
(19879, 'MK-KEU/KNTCWGB/X/18', '', 'Siti Hardiyanti', '10 IPA', 'Ciawigebang', '1200000', 'BRI <br> 426201014663537 <br> Sariah', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kacab Kuningan,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kasie Marketing,Kasie Audit Pembayaran', '2018-09-12'),
(19997, 'MK-KEU/PLTKNTKTSN/XI/18', 'Cabang Jombang', 'Eguesa Adzra', '7SMPA', 'Kertosono', '500000', 'BRI <br> 642001010865535 <br> a.n Erna Endrayanti SPDI', 'Direksi,Manajer Akuntansi,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kasie Audit Pembayaran', '2018-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_transfer_mgmbiaya`
--

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
(31, 'tari', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Keuangan', 'Tari'),
(32, 'Kania', '9c6b683f17b891cf40cb2195db0cc4d2', 'Kasie Pengembalian', 'NINIK KANIA FALAH');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

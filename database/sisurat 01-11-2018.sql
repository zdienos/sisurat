-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 03:30 AM
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
  `no_surat` varchar(50) NOT NULL,
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
(39, 'MK-KEU/KNTMGLKM13.5/', 'Surat ACC Pencairan Fee Bimker', 'Ibu Adibah', 'Kepala Unit Magelang KM 13.5', 'Pencairan', '2018-10-30', 'Yuni', 'Proses'),
(19879, 'MK-KEU/KNTCWGB/X/18', 'Surat ACC Pengembalian Kelas Tidak Kuota', 'Bapak Anto, S.Pd', 'Plt. Kepala Unit Ciawigebang', 'Pencairan', '2018-10-30', 'tehhera', 'ACC'),
(19970, 'pembatas', 'Surat Teguran', 'Bapak dfh', 'Kepala Wilayah hdfh', 'Teguran', '2018-10-30', 'hani', 'Proses'),
(19971, 'MK-KEU/KRYMTL/X/18', 'Surat ACC Pencairan Fee Bimker', 'Ibu Rinang Listyorini', 'Kepala Rayon Muntilan – Magelang', 'Pencairan', '2018-11-01', 'hani', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `smasuk`
--

CREATE TABLE `smasuk` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `hal` varchar(100) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_input` varchar(100) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `jenissurat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smasuk`
--

INSERT INTO `smasuk` (`id`, `no_surat`, `hal`, `kepada`, `dari`, `keterangan`, `tanggal`, `tgl_input`, `userid`, `jenissurat`) VALUES
(1, '19806/MK-KEU/KCBBJM/X/18', 'ACC Pengembalian Biaya', 'Bapak Sumadi - Bagian Keuangan', 'Kidung - Kepala Cabang Jakarta', 'Pengajuan Pengembalian Kelas tidak kuota a.n Kinanti kelas 12.IPA.R.901.  Norek Pengembalian 12324545345 sebesar Rp. 500.000.', '2018-10-19', '31-10-18', 'dany', 'Email'),
(5, '009/MKT/PUSAT/KKMP/X/2018', 'Informasi ACC Pengajuan Bimker SD IT At Tubah Karawang', 'Ibu Lia Yulianti, S.Pd/Koordinator Kabag Materi', 'Ir. Ricko Juri Aman/ Manajer Marketing', 'Informasi Bimbingan Kerjasama cabang Karawang mengenai Sukses USBN 2019, untuk Tingkat kelas 6 SD, 17 siswa untuk 1 kelas, 3 mata pelajaran dalam waktu @60menit', '2018-10-30', '31-10-18', 'dany', 'Ekspedisi'),
(6, '123asdf', 'adf123', 'adfqwer', 'fdaa', 'asdfasdfasd,fasdf,asdf,asdfa,dsfasdf,adsf', '2018-11-16', '01-11-18', 'dany', 'Ekspedisi');

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
-- Table structure for table `tb_sk_pencairan_fee`
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
-- Dumping data for table `tb_sk_pencairan_fee`
--

INSERT INTO `tb_sk_pencairan_fee` (`no`, `no_surat`, `lampiran`, `tgl_marketing`, `sekolah`, `mou`, `program`, `jml_siswa`, `acc`, `tdk_acc`, `fee_siswa`, `jml_disetujui`, `ket`, `tembusan`) VALUES
(39, 'MK-KEU/KNTMGLKM13.5/', '1 Lampiran', '2018-10-17', 'SMAN 01 NGEMPLAK', 'ADA', 'REGULER', 86, 86, 0, 100000, 8600000, '', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kawil Jawa Bagian Tengah,Kacab Bantul,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kabag/Kasie Marketing,Kasie Audit Pembayaran'),
(19971, 'MK-KEU/KRYMTL/X/18', '-', '2018-10-30', 'SMA PANGUDI LUHUR VANLITH', 'Ada', 'Reg', 61, 61, 0, 50000, 3050000, 'Sudah langsung dipotong oleh Sekolah', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kepala Cabang Magelang,Kabag Audit Internal,Kabag Laporan Keuangan Manajemen,Kasie Audit Pembayaran,Kabag/Kasie Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_pengecekan`
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
  `no_surat` varchar(20) NOT NULL,
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
  `no_surat` varchar(50) NOT NULL,
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
  `no_surat` varchar(50) NOT NULL,
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
  `no_surat` varchar(50) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  `bgn_tegur` varchar(50) NOT NULL,
  `teguran` text NOT NULL,
  `penutup` text NOT NULL,
  `tembusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_teguran`
--

INSERT INTO `tb_sk_teguran` (`no`, `no_surat`, `pemeriksa`, `bgn_tegur`, `teguran`, `penutup`, `tembusan`) VALUES
(19880, 'pembatas', 'asdf', 'asdf', 'asdf', 'asdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_tidak_kuota`
--

CREATE TABLE `tb_sk_tidak_kuota` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
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

CREATE TABLE `tb_sk_transfer_mgmbiaya` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
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
(10, 'bakoy', 'd41d8cd98f00b204e9800998ecf8427e', 'Kasie keuangan', 'Dany Rahmansyah'),
(11, 'Kania', 'd41d8cd98f00b204e9800998ecf8427e', 'Kasie Pengembalian', 'Ninik Kania Falah'),
(12, 'ima', 'd41d8cd98f00b204e9800998ecf8427e', 'Staff Analis', 'Hani Maliah'),
(13, 'dini', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Dini Nur Fitria'),
(14, 'eli', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Eli Rahmawati'),
(15, 'tehhera', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Hera Widyati Fitriani'),
(16, 'Nadya', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Nadya Hasna Nurzakiyyah'),
(17, 'Melani', 'd41d8cd98f00b204e9800998ecf8427e', 'Staff Pengembalian', 'Melani Al Pajarani'),
(18, 'Nurul', 'd41d8cd98f00b204e9800998ecf8427e', 'Staff Pengembalian', 'Nurul Nugraheni'),
(21, 'Yuni', '81dc9bdb52d04dc20036dbd8313ed055', 'Staff Pengembalian', 'Yuni Lestari'),
(22, 'Dewi', '81dc9bdb52d04dc20036dbd8313ed055', 'Kasie Analisis Bukti Pendukung', 'Dewi Supriyatin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

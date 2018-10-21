-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 10:02 AM
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
  `no_surat` varchar(20) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `nama_tujuan` varchar(100) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `tgl_SuratKeluar` date NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeluar`
--

INSERT INTO `skeluar` (`no`, `no_surat`, `perihal`, `nama_tujuan`, `tujuan`, `jenis_surat`, `tgl_SuratKeluar`, `userid`) VALUES
(1, 'MKEU-KSAP/SP/IX/18', 'Surat Peringatan', 'Bapak Hendri Agusmel', 'Kepala Unit Batusangkar', 'Peringatan', '2018-10-20', 'hani'),
(3, 'MK-KEU/KRYNAMLPR/X/1', 'ACC Pencairan PT Kolektif/Bimker', 'Bpk I Ketut Putra Wiratha, M.Pd.', 'Kepala Rayon Amlapura', 'Pencairan', '2018-10-20', 'bunia'),
(5, 'MK-KEU/KCBBJM/X/18', 'ACC Pengembalian Tidak Kuota', 'Bapak. Sumadi, ST', 'Kepala Cabang Banjarmasin', 'Pencairan', '2018-10-20', 'hani'),
(6, '', 'Surat Peringatan', 'asdasd', 'Kepala Cabang asdasd', 'Peringatan', '2018-10-20', 'hani'),
(7, '', 'Surat Teguran', 'Budi', 'Kepala Cabang Bandung', 'Teguran', '2018-10-20', 'hani'),
(8, 'han', 'Surat Peringatan', 'ngf', 'Kepala Cabang as', 'Peringatan', '2018-10-20', 'hani');

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
  `userid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smasuk`
--

INSERT INTO `smasuk` (`id`, `no_surat`, `hal`, `kepada`, `dari`, `keterangan`, `tanggal`, `tgl_input`, `userid`) VALUES
(1, '19806/MK-KEU/KCBBJM/X/18', 'ACC Pengembalian Biaya', 'Bapak Sumadi - Bagian Keuangan', 'Kidung - Kepala Cabang Jakarta', 'Pengajuan Pengembalian Kelas tidak kuota a.n Kinanti kelas 12.IPA.R.901.  Norek Pengembalian 12324545345 sebesar Rp. 500.000.', '2018-10-19', '20-10-18', 'bunia');

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
(1, 'Dashboard', 'home', 'fa-fa-dashboard', '0'),
(2, 'Surat Masuk', '#', 'fa-fa-dashboard', '0'),
(3, 'Surat Keluar', '#', 'fa-fa-dashboard', '0'),
(4, 'Data Surat Masuk', 'Smasuk/data_table', 'fa-fa-dashboard', '2'),
(5, 'Input Surat Masuk', 'Smasuk', 'fa-fa-dashboard', '2'),
(6, 'Data Surat Keluar', 'Skeluar/data_table', 'fa-fa-dashboard', '3'),
(7, 'Input Surat Keluar', 'Skeluar', '', '3'),
(8, 'User', 'Login/user', '', '0');

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
(3, 'MK-KEU/KRYNAMLPR/X/1', '1', '2018-10-04', 'SMPN 2 Amlapura', 'Ada', 'Regular', 104, 64, 40, 200000, 12800000, '2 Siswa Baru Bayar PT <br>\r\n4 Siswa Disc => 50 % <br>\r\n22 Siswa Disc Anak Guru <br>\r\n12 Siswa Tg; Diluar Termin MoU', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kacab Denpasar,Kabag Laporan Keuangan Manajemen,Kaba/Kasieg Marketing,Kasie Audit Pembayaran');

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
  `tembusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_peringatan`
--

INSERT INTO `tb_sk_peringatan` (`no`, `no_surat`, `loktujuan`, `nip`, `spke`, `kesalahan`, `tembusan`) VALUES
(1, 'MKEU-KSAP/SP/IX/18', 'Ganesha Operation Payakumbuh', '1234', '1', 'Sehubungan dengan tindakan Saudara yang tidak mengontrol setoran ke GO Pusat dan tidak mengontrol penggunaan kuitansi resmi GOmengarahkan CS untuk menerima pembayaran menggunakan kuitansi pasar', 'Direksi,Menejer Akuntansi,Koordinator Kabag SDM,Kepala Rayon Payakumbuh'),
(6, '', 'asdghjh', '12344567', '1', 'judi di kantor', 'adgfghjk'),
(8, 'han', 'dfsd', 'fs', '2', 'fdsf', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kabag Audit Internal,Kapag Laporan Keuangan Manejemen,Kabag/Kasie Marketing,Kasie Audit Pembayaran');

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
  `tembusan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_teguran`
--

INSERT INTO `tb_sk_teguran` (`no`, `no_surat`, `pemeriksa`, `bgn_tegur`, `teguran`, `penutup`, `tembusan`) VALUES
(7, '', 'Alvin', 'Customer Service', 'berdasarkan pemeriksaan keuangan, kami temukan mba uthe menunda setoran', 'cek', 'Manajer Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_tidak_kuota`
--

CREATE TABLE `tb_sk_tidak_kuota` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jumlahbayar` int(11) NOT NULL,
  `pengembaliannorek` varchar(30) NOT NULL,
  `tembusan` text NOT NULL,
  `tgl_marketing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_tidak_kuota`
--

INSERT INTO `tb_sk_tidak_kuota` (`no`, `no_surat`, `nama_siswa`, `kelas`, `jumlahbayar`, `pengembaliannorek`, `tembusan`, `tgl_marketing`) VALUES
(5, 'MK-KEU/KCBBJM/X/18', 'Siti Nurlayi', '12 IPAGN 160', 12739, 'BNI 0201038367 a.n Muhammad Al', 'Direksi,Manajer Akuntansi,Manajer Marketing,Kabag Audit Internal,Kapag Laporan Keuangan Manejemen,Kabag/Kasie Marketing,Kasie Audit Pembayaran', '2018-09-22');

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
(7, 'dhiska', '202cb962ac59075b964b07152d234b70', 'Setoran', ''),
(9, 'bunia', '81dc9bdb52d04dc20036dbd8313ed055', 'Kasie Keuangan', 'Ninik Kania Fallah');

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
-- Indexes for table `tb_sk_peringatan`
--
ALTER TABLE `tb_sk_peringatan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

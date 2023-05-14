-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 08:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `kd_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(200) NOT NULL,
  `gambar_admin` varchar(30) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `nohp_admin` varchar(14) NOT NULL,
  `status_admin` enum('admin','service','sales') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`kd_admin`, `nama_admin`, `username_admin`, `password_admin`, `gambar_admin`, `alamat_admin`, `nohp_admin`, `status_admin`) VALUES
('ADM001', 'Sutrisno', 'ADM001', 'e10adc3949ba59abbe56e057f20f883e', 'adm_1657406829.png', 'Suro', '085742906467', 'admin'),
('ADM002', 'erererer', 'ADM002', 'e10adc3949ba59abbe56e057f20f883e', 'admin_gaji.png', 'eerer', '34343434', 'service'),
('ADM003', 'Sutrisno', 'ADM003', 'e10adc3949ba59abbe56e057f20f883e', 'admin_gaji.png', 'Banyumas', '082135644777', 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bagian`
--

CREATE TABLE `tbl_bagian` (
  `kd_bagian` varchar(10) NOT NULL,
  `nama_bagian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bagian`
--

INSERT INTO `tbl_bagian` (`kd_bagian`, `nama_bagian`) VALUES
('BAG001', 'Sales'),
('BAG002', 'Service'),
('BAG003', 'Umum'),
('BAG004', 'ALL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bkk`
--

CREATE TABLE `tbl_bkk` (
  `kd_bkk` int(11) NOT NULL,
  `nama_bkk` varchar(200) NOT NULL,
  `alamat_bkk` varchar(200) NOT NULL,
  `tentang_bkk` text NOT NULL,
  `telepon_bkk` varchar(100) NOT NULL,
  `email_bkk` varchar(400) NOT NULL,
  `logob_bkk` varchar(30) NOT NULL,
  `logok_bkk` varchar(30) NOT NULL,
  `logo_depan` varchar(100) NOT NULL,
  `kd_pos` varchar(10) NOT NULL,
  `kab_bkk` varchar(50) NOT NULL,
  `prop_bkk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bkk`
--

INSERT INTO `tbl_bkk` (`kd_bkk`, `nama_bkk`, `alamat_bkk`, `tentang_bkk`, `telepon_bkk`, `email_bkk`, `logob_bkk`, `logok_bkk`, `logo_depan`, `kd_pos`, `kab_bkk`, `prop_bkk`) VALUES
(1, 'BKK SMK Apa ya', 'Jl.Siliwangi, Desa Suro Kecamatan Kalibagor Banyumas. ', 'ererererer', '085742906467', 'azzuhriyyahsuro@gmail.com', 'gambar1639611256.png', 'gambar1639612064.png', 'logodepan1639612646.png', '53444', 'purbalingga', 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bulan`
--

CREATE TABLE `tbl_bulan` (
  `kd_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bulan`
--

INSERT INTO `tbl_bulan` (`kd_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `kd_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`kd_jabatan`, `nama_jabatan`) VALUES
('JAB001', 'Kepala Cabang'),
('JAB002', 'Kepala Bengkel'),
('JAB003', 'CCO'),
('JAB004', 'Supervisor'),
('JAB005', 'Service Advisor'),
('JAB006', 'Admin Sales'),
('JAB007', 'Admin Service'),
('JAB008', 'Part Staff'),
('JAB009', 'Sales Counter'),
('JAB010', 'Sales Consultan'),
('JAB011', 'Mekanik'),
('JAB012', 'Driver'),
('JAB013', 'Satpam'),
('JAB014', 'Office Boy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_judul`
--

CREATE TABLE `tbl_judul` (
  `kd_judul` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `oleh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_judul`
--

INSERT INTO `tbl_judul` (`kd_judul`, `judul`, `oleh`) VALUES
(1, 'Sistem Informasi BKK SMK ', 'Rizkia Maesella - UNM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `kd_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tempatlahir_karyawan` varchar(30) NOT NULL,
  `tgllahir_karyawan` date NOT NULL,
  `jk_karyawan` enum('Pria','Wanita') NOT NULL,
  `alamat_karyawan` varchar(50) NOT NULL,
  `nohp_karyawan` varchar(15) NOT NULL,
  `kd_jabatan` varchar(10) NOT NULL,
  `kd_bagian` varchar(10) NOT NULL,
  `tglmasuk_karyawan` date NOT NULL,
  `gambar_karyawan` varchar(50) NOT NULL,
  `bpjs_kes` int(20) NOT NULL,
  `bpjs_tk` int(20) NOT NULL,
  `bpjs_pen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`kd_karyawan`, `nama_karyawan`, `tempatlahir_karyawan`, `tgllahir_karyawan`, `jk_karyawan`, `alamat_karyawan`, `nohp_karyawan`, `kd_jabatan`, `kd_bagian`, `tglmasuk_karyawan`, `gambar_karyawan`, `bpjs_kes`, `bpjs_tk`, `bpjs_pen`) VALUES
('KAR001', 'PETER SANTORO', 'SURABAYA', '1976-12-01', 'Pria', 'PERUM BAI PURWOKERTO TIMUR', '02816446008', 'JAB001', 'BAG004', '2018-12-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR002', 'WISNU', 'SEMARANG', '1989-12-13', 'Pria', 'SOLO', '0877', 'JAB002', 'BAG002', '2021-09-20', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR003', 'YESSA', 'BANYUMAS', '1998-06-06', 'Pria', 'SOKARAJA LOR', '0877', 'JAB003', 'BAG002', '2020-11-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR004', 'AGUNG PRABOWO', 'WONOSOBO', '1978-12-12', 'Pria', 'PURWOKERTO SELATAN', '0877', 'JAB004', 'BAG001', '2019-02-21', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR005', 'ABDUL AZIZ', 'BANYUMAS', '1998-12-12', 'Pria', 'PURWOKERTO', '0877', 'JAB004', 'BAG001', '2020-02-02', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR006', 'RIZKY MARHABAN', 'YOGYAKARTA', '1992-12-12', 'Pria', 'PURBALINGGA', '0877', 'JAB005', 'BAG002', '2018-06-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR007', 'ELISA DAMAYANTI', 'BANYUMAS', '1997-09-16', 'Wanita', 'KALIBAGOR', '0812', 'JAB007', 'BAG002', '2018-01-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR008', 'DEWI ANGGRAENI', 'BANYUMAS', '1997-06-12', 'Wanita', 'KALIORI', '0813', 'JAB006', 'BAG001', '2020-12-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR009', 'FADLUN FAUZI', 'CILACAP', '1997-02-22', 'Pria', 'NUSAWUNGU', '087719956565', 'JAB008', 'BAG002', '2015-06-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR010', 'VENI FATMAWATI', 'BANYUMAS', '1982-06-12', 'Wanita', 'PURWOKERTO UTARA', '0812', 'JAB009', 'BAG001', '2012-12-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR011', 'ERI UNDIYANI', 'BANYUMAS', '1992-01-08', 'Wanita', 'AJIBARANG', '0812', 'JAB009', 'BAG001', '2018-03-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR012', 'IDE BAGUS', 'PURBALINGGA', '1989-12-12', 'Pria', 'PURBALINGGA', '0877', 'JAB010', 'BAG001', '2020-06-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR013', 'DIMAS RIZKY', 'CIREBON', '1998-12-12', 'Pria', 'BANJARNEGARA', '0877', 'JAB010', 'BAG001', '2022-03-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR014', 'DENNY', 'BANYUMAS', '1992-06-12', 'Pria', 'PURWOKERTO', '0877', 'JAB010', 'BAG001', '2021-02-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR015', 'DESSY', 'BANYUMAS', '1992-02-04', 'Wanita', 'AJIBARANG', '0877', 'JAB010', 'BAG001', '2022-03-15', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR016', 'MAHENDRA SAPUTRA', 'CIREBON', '1976-05-06', 'Pria', 'CIREBON', '0877', 'JAB010', 'BAG001', '2018-11-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR017', 'AMRUL', 'BANYUMAS', '1998-06-05', 'Pria', 'PURWOKERTO', '0877', 'JAB010', 'BAG001', '2022-05-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR018', 'JUNIOR NUGRAHA', 'BANYUMAS', '1999-01-01', 'Pria', 'BANYUMAS', '0877', 'JAB010', 'BAG001', '2022-06-20', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR019', 'FEBIAN VALENTINO', 'BANYUMAS', '1996-01-01', 'Pria', 'BANYUMAS', '0877', 'JAB010', 'BAG001', '2022-06-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR020', 'SILVIA AYU', 'BANYUMAS', '1995-06-01', 'Wanita', 'BANYUMAS', '0877', 'JAB010', 'BAG001', '2022-06-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR021', 'GALUH PERMANA', 'BANYUMAS', '1989-05-01', 'Pria', 'SUMBANG', '0815', 'JAB011', 'BAG002', '2013-05-12', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR022', 'TRIAN ACIK', 'BANYUMAS', '1995-06-15', 'Pria', 'SOMAGEDE', '0877', 'JAB011', 'BAG002', '2014-12-15', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR023', 'ERNO KURNIAWAN', 'KEBUMEN', '1998-06-12', 'Pria', 'KEBUMEN', '0877', 'JAB011', 'BAG002', '2018-01-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR024', 'HANDOKO SULISTIYO', 'BANYUMAS', '1995-06-15', 'Pria', 'BANYUMAS', '087', 'JAB012', 'BAG003', '2018-09-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR025', 'SALIMAN', 'BANYUMAS', '1975-05-12', 'Pria', 'SOKARAJA KULON', '0877', 'JAB013', 'BAG003', '2018-03-01', 'foto_karyawan.png', 20000, 40000, 20000),
('KAR026', 'ANTA WALIYANA', 'BANYUMAS', '1992-12-12', 'Pria', 'PURWOKERTO UTARA', '0877', 'JAB003', 'BAG003', '2020-05-01', 'foto_karyawan.png', 20000, 40000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `kd_logo` int(11) NOT NULL,
  `nama_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`kd_logo`, `nama_logo`) VALUES
(1, 'gambar1595851792.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `kd_lowongan` varchar(50) NOT NULL,
  `nama_lowongan` varchar(100) NOT NULL,
  `kd_sektor` varchar(15) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `kd_jabatan` varchar(100) NOT NULL,
  `lokasi_penempatan` varchar(100) NOT NULL,
  `jumlah_pria` varchar(20) NOT NULL,
  `jumlah_wanita` varchar(20) NOT NULL,
  `desk_lowongan` varchar(200) NOT NULL,
  `kd_pendidikan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_lowongan` varchar(100) NOT NULL,
  `acc_admin` enum('belum','acc') NOT NULL,
  `kd_perush` varchar(12) NOT NULL,
  `gambar_lowongan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`kd_lowongan`, `nama_lowongan`, `kd_sektor`, `tgl_mulai`, `tgl_selesai`, `kd_jabatan`, `lokasi_penempatan`, `jumlah_pria`, `jumlah_wanita`, `desk_lowongan`, `kd_pendidikan`, `jurusan`, `status_lowongan`, `acc_admin`, `kd_perush`, `gambar_lowongan`) VALUES
('LOWONGAN004', 'erer', 'erer', '2023-05-14', '2023-05-19', '222', '', '2', '2', 'dfdf', 'defdf', 'erere', '', 'belum', '', 'lowongan_kerja.png'),
('LOWONGAN005', 'erere', 'erer', '2023-05-14', '2023-05-19', 'erere', '', '3', '3', '3eferer', 'erere', 'erer', '', 'belum', '', 'lowongan_kerja.png'),
('LOWONGAN006', 'dfdfd', 'dfdf', '2023-05-14', '2023-05-17', 'erer', 'erer', '10', '10', 'dfdfdf', 'dfdf', 'dfdf', '', 'belum', 'PERUSH002', 'lowongan_kerja.png'),
('LOWONGAN007', 'ererere', 'SEK001', '2023-05-15', '2023-05-21', 'erer', 'erer', '10', '10', '3erererer', 'ererer', 'ererer', '', 'belum', 'PERUSH002', 'lowongan_kerja.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelamar`
--

CREATE TABLE `tbl_pelamar` (
  `kd_pelamar` varchar(20) NOT NULL,
  `nama_pelamar` varchar(40) NOT NULL,
  `noktp_pelamar` varchar(20) NOT NULL,
  `tempatlahir_pelamar` varchar(40) NOT NULL,
  `tanggallahir_pelamar` date NOT NULL,
  `agama_pelamar` varchar(20) NOT NULL,
  `jk_pelamar` enum('Pria','Wanita') NOT NULL,
  `tinggibadan_pelamar` varchar(20) NOT NULL,
  `beratbadan_pelamar` varchar(20) NOT NULL,
  `disabilitas_pelamar` varchar(20) NOT NULL,
  `jenisdisabilitas_pelamar` varchar(20) NOT NULL,
  `keterangandisabilitas_pelamar` varchar(50) NOT NULL,
  `statusperkawinan_pelamar` enum('kawin','lajang','janda') NOT NULL,
  `alamatlengkap_pelamar` text NOT NULL,
  `nohp_pelamar` varchar(20) NOT NULL,
  `password_pelamar` varchar(50) NOT NULL,
  `foto_pelamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`kd_pelamar`, `nama_pelamar`, `noktp_pelamar`, `tempatlahir_pelamar`, `tanggallahir_pelamar`, `agama_pelamar`, `jk_pelamar`, `tinggibadan_pelamar`, `beratbadan_pelamar`, `disabilitas_pelamar`, `jenisdisabilitas_pelamar`, `keterangandisabilitas_pelamar`, `statusperkawinan_pelamar`, `alamatlengkap_pelamar`, `nohp_pelamar`, `password_pelamar`, `foto_pelamar`) VALUES
('PELAMAR003', 'erererer', '545545545454', 'Banyumas', '2023-05-08', 'Kristen', 'Pria', '10', '10', '', '', '', 'kawin', '10>', '343434', 'e10adc3949ba59abbe56e057f20f883e', 'foto_pelamar.png'),
('PELAMAR004', 'ererer', '4343', 'erererere', '2023-05-26', 'Kristen', 'Pria', '2222', '2222', '', '', '', 'lajang', 'erererer', '3434343', 'c58af20903f165a77e465fd111333f6a', 'foto_pelamar.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `kd_pendidikan` varchar(15) NOT NULL,
  `nama_pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`kd_pendidikan`, `nama_pendidikan`) VALUES
('PEND001', 'Sekolah Dasar'),
('PEND002', 'Sekolah Menengah Pertama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengiklan`
--

CREATE TABLE `tbl_pengiklan` (
  `kd_pengiklan` varchar(10) NOT NULL,
  `nama_pengiklan` varchar(100) NOT NULL,
  `tentang_pengiklan` text NOT NULL,
  `alamat_pengiklan` varchar(100) NOT NULL,
  `hrd_pengiklan` varchar(30) NOT NULL,
  `ig_pengiklan` varchar(100) NOT NULL,
  `email_pengiklan` varchar(100) NOT NULL,
  `hp_pengiklan` varchar(15) NOT NULL,
  `c_pengiklan` datetime NOT NULL,
  `e_pengiklan` datetime NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengiklan`
--

INSERT INTO `tbl_pengiklan` (`kd_pengiklan`, `nama_pengiklan`, `tentang_pengiklan`, `alamat_pengiklan`, `hrd_pengiklan`, `ig_pengiklan`, `email_pengiklan`, `hp_pengiklan`, `c_pengiklan`, `e_pengiklan`, `kd_admin`) VALUES
('ADV001', 'Siomay Bandung Opick', 'Perusahaan Somai', 'Bandung', '-', '', '', '087770080096', '2022-08-29 06:10:07', '2022-08-29 06:20:10', 'ADM001'),
('ADV002', 'UCLIN', 'Toko Uclin', 'Jl. MT Haryono 122 Purwokerto ', '-', '', '', '08170488899', '2022-08-29 06:59:45', '2022-08-29 07:00:11', 'ADM001'),
('ADV003', 'Afas HIjab', '-', '-', '-', '', '', '088225077304', '2022-08-29 07:01:11', '0000-00-00 00:00:00', 'ADM001'),
('ADV004', 'Bimbel Privat Pintar', 'Bimbangan Belajar', '-', 'Akbar', '', '', '087723057689', '2022-08-29 07:04:47', '0000-00-00 00:00:00', 'ADM001'),
('ADV005', 'Pllanet Surf', 'toko Planet Surt', '-', '-', 'https://www.instagram.com/tigazero/', '', '0', '2022-08-29 07:49:08', '2022-08-29 07:49:21', 'ADM001'),
('ADV006', 'CV Al Fazza Jaya', '-', '-', '-', 'https://www.instagram.com/awangkhecol/', '', '0', '2022-08-29 07:51:44', '0000-00-00 00:00:00', 'ADM001'),
('ADV007', 'GURU KITA', 'Bimbel', '-', 'Ade Rahmawati Nurbekti', 'https://www.instagram.com/adebekti/', '', '0', '2022-08-29 07:52:56', '0000-00-00 00:00:00', 'ADM001'),
('ADV008', 'PT Buana Rima Persada', '-', '-', 'R. Dimas Bagus k', 'https://www.instagram.com/rdbk09/', '', '0', '2022-08-29 07:54:13', '0000-00-00 00:00:00', 'ADM001'),
('ADV009', 'Lumpia Boom', 'PT Lumpia BOom', '-', 'Desti Dwi Saputri', 'https://www.instagram.com/desti27/', '', '0', '2022-08-29 07:55:39', '0000-00-00 00:00:00', 'ADM001'),
('ADV010', 'PT. CREATIVE DIGITAL UTAMA (CREDIA)', '-', '-', 'Haidar Ammar', 'https://www.instagram.com/haidarmarr/', '', '0', '2022-08-29 07:58:07', '0000-00-00 00:00:00', 'ADM001'),
('ADV011', 'PT Dua Pilar Lestari', '-', '-', 'Ita', '-', '', '085600836119', '2022-08-29 08:22:43', '0000-00-00 00:00:00', 'ADM001'),
('ADV012', 'JLF Store', 'Digital Marketing', 'Jalan Pancuraws Purwokerto Kidul Kec Purwokerto Selatan Kab Banyumas', 'Fajri', '-', 'jlfstoreid@gmail.com', '082225128004', '2022-08-29 08:40:46', '2022-08-29 09:28:44', 'ADM001'),
('ADV013', 'TB. Baja Makmur', '-', '-', '-', '-', '', '087837416020', '2022-08-29 09:12:58', '0000-00-00 00:00:00', 'ADM001'),
('ADV014', 'PT KARUNIA BANGUN SEMESTA', '-', '-', 'Yanti Purwokerto', 'https://www.instagram.com/yantipwt/', '-', '0', '2022-08-29 10:15:10', '2022-08-29 10:15:51', 'ADM001'),
('ADV015', 'Toko Selera', 'toko roti', '-', '-', '-', '-', '081318087825', '2022-08-29 13:56:17', '0000-00-00 00:00:00', 'ADM001'),
('ADV016', 'fortuuin_thriftshop', '-', '-', '-', 'https://www.instagram.com/fortuuin_thriftshop/', '-', '0', '2022-08-29 14:16:03', '0000-00-00 00:00:00', 'ADM001'),
('ADV017', 'PT Padma Raharja Sentosa', '-', '-', 'Devie', '-', '-', '082133652508', '2022-08-29 15:09:27', '0000-00-00 00:00:00', 'ADM001'),
('ADV018', 'Sembada Gold', '-', '-', '-', '-', '-', '081903579345', '2022-08-30 12:10:58', '0000-00-00 00:00:00', 'ADM001'),
('ADV019', 'Surya Security Sistem', '-', '-', 'Theo Surya', '-', '-', '0', '2022-08-30 12:11:22', '0000-00-00 00:00:00', 'ADM001'),
('ADV020', 'Elzatta', '-', '-', 'M Naufal Quthbi Arifin', 'https://www.instagram.com/acengzaenalarifin/', '-', '0', '2022-08-30 13:00:26', '0000-00-00 00:00:00', 'ADM001'),
('ADV021', 'Bimbel Cendikia', '-', '-', '-', '-', '-', '085225609954', '2022-08-30 15:14:31', '0000-00-00 00:00:00', 'ADM001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `kd_perush` varchar(50) NOT NULL,
  `nama_perush` varchar(100) NOT NULL,
  `desk_perush` varchar(200) NOT NULL,
  `jenisbu_perush` varchar(100) NOT NULL,
  `nib_perush` varchar(50) NOT NULL,
  `sektor_perush` varchar(200) NOT NULL,
  `alamatlengkap_perush` varchar(100) NOT NULL,
  `notel_perush` varchar(50) NOT NULL,
  `namapj_perush` varchar(50) NOT NULL,
  `password_perush` varchar(35) NOT NULL,
  `logo_perush` varchar(50) NOT NULL,
  `acc_admin` enum('belum','acc','banned') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`kd_perush`, `nama_perush`, `desk_perush`, `jenisbu_perush`, `nib_perush`, `sektor_perush`, `alamatlengkap_perush`, `notel_perush`, `namapj_perush`, `password_perush`, `logo_perush`, `acc_admin`) VALUES
('PERUSH001', 'dfdfdfdfdf', 'erere', 'erere', 'ererer', 'erere', 'ererer', '34343', 'edrfererr', 'e10adc3949ba59abbe56e057f20f883e', 'logo_perush.png', 'banned'),
('PERUSH002', 'aaa', 'aaa', 'aaa', 'aaa', 'aa', 'aaa', 'aa', 'aa', 'e10adc3949ba59abbe56e057f20f883e', 'logo_perush1683328914.jpg', 'acc'),
('PERUSH003', 'erer', 'erer', 'erer', 'erer', 'erer', 'erer', '34343', '3434', 'e10adc3949ba59abbe56e057f20f883e', 'logo_perush1683333693.png', 'acc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sektor`
--

CREATE TABLE `tbl_sektor` (
  `kd_sektor` varchar(15) NOT NULL,
  `nama_sektor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sektor`
--

INSERT INTO `tbl_sektor` (`kd_sektor`, `nama_sektor`) VALUES
('SEK001', 'Ekonomi'),
('SEK002', 'Pertanian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  ADD PRIMARY KEY (`kd_bagian`);

--
-- Indexes for table `tbl_bkk`
--
ALTER TABLE `tbl_bkk`
  ADD PRIMARY KEY (`kd_bkk`);

--
-- Indexes for table `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  ADD PRIMARY KEY (`kd_bulan`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `tbl_judul`
--
ALTER TABLE `tbl_judul`
  ADD PRIMARY KEY (`kd_judul`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`kd_karyawan`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`kd_logo`);

--
-- Indexes for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`kd_lowongan`);

--
-- Indexes for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  ADD PRIMARY KEY (`kd_pelamar`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`kd_pendidikan`);

--
-- Indexes for table `tbl_pengiklan`
--
ALTER TABLE `tbl_pengiklan`
  ADD PRIMARY KEY (`kd_pengiklan`);

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`kd_perush`);

--
-- Indexes for table `tbl_sektor`
--
ALTER TABLE `tbl_sektor`
  ADD PRIMARY KEY (`kd_sektor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bkk`
--
ALTER TABLE `tbl_bkk`
  MODIFY `kd_bkk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  MODIFY `kd_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_judul`
--
ALTER TABLE `tbl_judul`
  MODIFY `kd_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `kd_logo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 09:41 AM
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
(1, 'BKK SMK Apa ya', 'Jl.Siliwangi, Desa Suro Kecamatan Kalibagor Banyumas. ', 'BKK SMK Mulya Husada adalah bkk yang mmakakakak akakakkakakak', '085742906467', 'azzuhriyyahsuro@gmail.com', 'gambar1639611256.png', 'gambar1639612064.png', 'logodepan1685593123.png', '53444', 'purbalingga', 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `kd_faq` int(11) NOT NULL,
  `tanya_faq` varchar(100) NOT NULL,
  `jawab_faq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`kd_faq`, `tanya_faq`, `jawab_faq`) VALUES
(1, 'Berikut Langkah-Langkah Cara Menyewa Lapangan Di Bintang Futsal', '<p>Bagaimana sih cara sewanya?</p>\r\n\r\n<p>1. Pastikan telah masuk ke akun anda. Jika belum punya akun bisa registrasi (daftar) terlebih dahulu.</p>\r\n\r\n<p>2. Kemudian pilih tanggal dan lapangan yang ada di menu sewa lapangan.</p>\r\n\r\n<p>3. Pilih jam yang akan di booking</p>\r\n\r\n<p>4. Pilih metode pembayaran DP 50% atau Lunas .</p>\r\n\r\n<p>5. Masuk ke history sewa untuk mengkonfirmasi pembayaran dengan cara mengupload bukti bayar.</p>\r\n\r\n<p>6. Setelah upload bukti status pembayaran SUDAH BAYAR, ADMIN BELUM CEK. Tunggu beberapa saat sampai di konfirmasi oleh admin.</p>\r\n\r\n<p>7. Jika sudah terkonfirmasi maka status pembayaran telah berubah menjadi SELESAI. 8. Jika belum maka UPLOAD BUKTI PEMBAYARAN ULANG.</p>\r\n');

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
-- Table structure for table `tbl_lamaran`
--

CREATE TABLE `tbl_lamaran` (
  `kd_lamaran` int(11) NOT NULL,
  `kd_pelamar` varchar(15) NOT NULL,
  `kd_lowongan` varchar(15) NOT NULL,
  `tgl_lamaran` date NOT NULL,
  `status_lamaran` enum('belum','sudah','lolos_adm','taklolos_adm','diterima','ditolak') NOT NULL,
  `berkas_lamaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lamaran`
--

INSERT INTO `tbl_lamaran` (`kd_lamaran`, `kd_pelamar`, `kd_lowongan`, `tgl_lamaran`, `status_lamaran`, `berkas_lamaran`) VALUES
(17, 'PELAMAR003', 'LOWONGAN001', '2023-06-05', 'diterima', 'lamaranerererer1685957719.pdf');

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
  `desk_lowongan` text NOT NULL,
  `kd_pendidikan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_lowongan` varchar(100) NOT NULL,
  `acc_adminlowongan` enum('belum','acc') NOT NULL,
  `kd_perush` varchar(12) NOT NULL,
  `gambar_lowongan` varchar(30) NOT NULL,
  `tgl_test` date NOT NULL,
  `jam_test` varchar(30) NOT NULL,
  `lokasi_test` varchar(200) NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`kd_lowongan`, `nama_lowongan`, `kd_sektor`, `tgl_mulai`, `tgl_selesai`, `kd_jabatan`, `lokasi_penempatan`, `jumlah_pria`, `jumlah_wanita`, `desk_lowongan`, `kd_pendidikan`, `jurusan`, `status_lowongan`, `acc_adminlowongan`, `kd_perush`, `gambar_lowongan`, `tgl_test`, `jam_test`, `lokasi_test`, `kd_admin`) VALUES
('LOWONGAN001', 'DIRECT SALES AGENT [DSA] HOME FIBER', 'SEK001', '2023-06-05', '2023-06-16', 'JAB002', '', '10', '10', '<p><strong>Kualifikasi:</strong><br />\r\n&ndash; Pria/Wanita<br />\r\n&ndash; Maksimal usia 35 tahun<br />\r\n&ndash; Pendidikan Min. SMA<br />\r\n&ndash; Terbiasa dengan target<br />\r\n&ndash; Niat, jujur, tanggung jawab<br />\r\n&ndash; Good communication<br />\r\n&ndash; Good selling</p>\r\n', 'PEND002', 'Umum', '', 'acc', 'PERUSH002', 'gambar_lowongan1685957158.PNG', '2023-06-30', '-', '-', 'ADM001');

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
  `foto_pelamar` varchar(100) NOT NULL,
  `acc_adminpelamar` enum('belum','acc','banned') NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`kd_pelamar`, `nama_pelamar`, `noktp_pelamar`, `tempatlahir_pelamar`, `tanggallahir_pelamar`, `agama_pelamar`, `jk_pelamar`, `tinggibadan_pelamar`, `beratbadan_pelamar`, `disabilitas_pelamar`, `jenisdisabilitas_pelamar`, `keterangandisabilitas_pelamar`, `statusperkawinan_pelamar`, `alamatlengkap_pelamar`, `nohp_pelamar`, `password_pelamar`, `foto_pelamar`, `acc_adminpelamar`, `kd_admin`) VALUES
('PELAMAR003', 'erererer', '545545545454', 'Banyumas', '2023-05-08', 'Kristen', 'Pria', '10', '10', '', '', '', 'kawin', '10>', '343434', 'e10adc3949ba59abbe56e057f20f883e', 'foto_pelamar.png', 'acc', ''),
('PELAMAR004', 'ererer', '4343', 'erererere', '2023-05-26', 'Kristen', 'Pria', '2222', '2222', '', '', '', 'lajang', 'erererer', '3434343', 'e10adc3949ba59abbe56e057f20f883e', 'foto_pelamar.png', 'acc', ''),
('PELAMAR005', 'Sutrisno', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', '', '', 'e10adc3949ba59abbe56e057f20f883e', 'foto_pelamar.png', 'belum', ''),
('PELAMAR006', 'Sutrisno', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', '', '', 'e10adc3949ba59abbe56e057f20f883e', 'foto_pelamar.png', 'belum', ''),
('PELAMAR007', 'erererewr', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', '', '', '464a34e3e589afa6a7272385cfc8aea7', 'foto_pelamar.png', 'belum', ''),
('PELAMAR008', 'dfdfdf', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', '', '', '5d5cc48db70ecce234a443a9a05d66ee', 'foto_pelamar.png', 'belum', ''),
('PELAMAR009', 'dfdfdf', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', '', '', 'fbb82de80869972099f9c61c818df222', 'foto_pelamar.png', 'belum', ''),
('PELAMAR010', 'Miftahudin', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'Purwokerto', '', 'e10adc3949ba59abbe56e057f20f883e', 'foto_pelamar.png', 'belum', ''),
('PELAMAR011', 'dfdfasdfas', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'dfdfdasfdasf', '', 'ae27a4b4821b13cad2a17a75d219853e', 'foto_pelamar.png', 'belum', ''),
('PELAMAR012', 'erererer', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'ererere', '', '7481678c27f3968c568fbfbd9f70ffa0', 'foto_pelamar.png', 'belum', ''),
('PELAMAR013', 'dfdfdf', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'dfdfdfdfd', '', '6d5678a7dd76fb64c4d147e651c6a714', 'foto_pelamar.png', 'belum', ''),
('PELAMAR014', 'DFDFDF', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'DFDFDF', '', 'c0af3a9ecba7ab3344dce50db239e589', 'foto_pelamar.png', 'belum', ''),
('PELAMAR015', 'DFDFDF', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'DFDFDF', '', 'b0133b6cf453c9cd8b58eae44a67ebec', 'foto_pelamar.png', 'belum', ''),
('PELAMAR016', 'SUTRISNO', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'Jalan haji Sudiro 44 Purwokerto Jawa tengah', '', 'e10adc3949ba59abbe56e057f20f883e', 'foto_pelamar.png', 'belum', ''),
('PELAMAR017', 'aaaaaa', '3434343', '34343434', '2023-06-15', 'Islam', 'Wanita', '3', '3', '', '', '', 'janda', 'dfdasff ', '08888888', 'd41d8cd98f00b204e9800998ecf8427e', 'foto_pelamar1686443185.png', 'belum', ''),
('PELAMAR018', 'ERERERERE', '', '', '0000-00-00', '', 'Pria', '', '', '', '', '', 'kawin', 'ERERERE', '', '85064cbee4d2fe3f194c852f55944d51', 'foto_pelamar.png', 'belum', '');

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
  `acc_admin` enum('belum','acc','banned') NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`kd_perush`, `nama_perush`, `desk_perush`, `jenisbu_perush`, `nib_perush`, `sektor_perush`, `alamatlengkap_perush`, `notel_perush`, `namapj_perush`, `password_perush`, `logo_perush`, `acc_admin`, `kd_admin`) VALUES
('PERUSH001', 'Pusat Laptor Nusantara', 'Perusahaan Penjualan Laptop di Purwokerto', 'PT', '8888888888', 'Penjualan', 'Jl. Pramuka No.202, Samudra, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah', '088888888', 'edrfererr', 'e10adc3949ba59abbe56e057f20f883e', 'logo_perush.png', 'acc', ''),
('PERUSH002', 'Kei Ramen', 'Perusahaan yang bergerak dalam bidang restoran', 'CV', '8888888', 'Restauran', 'Purwokerto', '08888888', 'Sumantri', 'e10adc3949ba59abbe56e057f20f883e', 'logo_perush1683328914.jpg', 'acc', ''),
('PERUSH003', 'Mulya Pratama', 'Perusahaan perdagangan kalung berliang', 'CV', '888888', 'Perdagangan', 'Jalan Raya Krangklesem Purwokreto', '88888888888', 'Sumanjaya', 'e10adc3949ba59abbe56e057f20f883e', 'logo_perush1683333693.png', 'acc', ''),
('PERUSH004', 'Bintang Footsal Jamblang', 'aaaa', 'dfdfdf', 'dfdfdf', 'dfdf', 'adaf adfa das a fasdf', 'dfdfdf', 'dfdf', 'e10adc3949ba59abbe56e057f20f883e', 'logo_perush1686449830.png', 'acc', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `kd_slider` int(11) NOT NULL,
  `atas_slider` varchar(30) NOT NULL,
  `tengah_slider` varchar(20) NOT NULL,
  `bawah_slider` varchar(20) NOT NULL,
  `gambar_slider` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`kd_slider`, `atas_slider`, `tengah_slider`, `bawah_slider`, `gambar_slider`) VALUES
(1, 'adafafasdf adfdasfdasfdasfd', 'Tempat ', 'BINTANG FUTSAL JAMBL', 'foto_slider_1685592746.png'),
(2, 'PERCAYAKAN LAPANGAN FUTSAL ', 'ANAK ', 'BERSAMA KAMI', 'foto_slider_1685592102.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang`
--

CREATE TABLE `tbl_tentang` (
  `kd_tentang` int(5) NOT NULL,
  `judul_tentang` varchar(30) NOT NULL,
  `isi_tentang` text NOT NULL,
  `gambar_tentang` varchar(20) NOT NULL,
  `url_tentang` varchar(100) NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentang`
--

INSERT INTO `tbl_tentang` (`kd_tentang`, `judul_tentang`, `isi_tentang`, `gambar_tentang`, `url_tentang`, `kd_admin`) VALUES
(1, 'Tentang Kami', '<p>Visi Kami adalah untuk apa ya</p>\r\n\r\n<p>Futsal dipopulerkan di Montevideo, Uruguay pada tahun 1930, oleh Juan Carlos Ceriani. Keunikan futsal mendapat perhatian di seluruh Amerika Selatan, terutamanya di Brasil. Ketrampilan yang dikembangkan dalam permainan ini dapat dilihat dalam gaya terkenal dunia yang diperlihatkan pemain-pemain Brasil di luar ruangan, pada lapangan berukuran biasa. Pele, bintang terkenal Brasil, contohnya, mengembangkan bakatnya di futsal. Sementara Brasil terus menjadi pusat futsal dunia, permainan ini sekarang dimainkan di bawah perlindungan F&eacute;d&eacute;ration Internationale de Football Association di seluruh dunia, dari Eropa hingga Amerika Tengah dan Amerika Utara serta Afrika, Asia, dan Oseania.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki. Selain lima pemain utama, setiap regu juga diizinkan memiliki pemain cadangan. Tidak seperti permainan sepak bola dalam ruangan lainnya, lapangan futsal dibatasi garis, bukan net atau papan.</p>\r\n', 'adm_1685659138.jpg', 'https://www.youtube.com/watch?v=niDjf5g1Iro', 'ADM001');

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
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`kd_faq`);

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
-- Indexes for table `tbl_lamaran`
--
ALTER TABLE `tbl_lamaran`
  ADD PRIMARY KEY (`kd_lamaran`);

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
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`kd_slider`);

--
-- Indexes for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  ADD PRIMARY KEY (`kd_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bkk`
--
ALTER TABLE `tbl_bkk`
  MODIFY `kd_bkk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `kd_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_judul`
--
ALTER TABLE `tbl_judul`
  MODIFY `kd_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_lamaran`
--
ALTER TABLE `tbl_lamaran`
  MODIFY `kd_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `kd_logo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `kd_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  MODIFY `kd_tentang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 07:03 AM
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
-- Database: `devi2`
--

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
(1, 'Berikut Langkah-Langkah Cara Menyewa Lapangan Di Bintang Futsal', 'Bagaimana sih cara sewanya?\r\n<p>\r\n1. Pastikan telah masuk ke akun anda. Jika belum punya akun bisa registrasi (daftar) terlebih dahulu.\r\n</p>\r\n2. Kemudian pilih tanggal dan lapangan yang ada di menu sewa lapangan.\r\n3. Pilih jam yang akan di booking\r\n4. Pilih metode pembayaran DP 50% atau Lunas\r\n5. Masuk ke history sewa untuk mengkonfirmasi pembayaran dengan cara mengupload bukti bayar.\r\n6. Setelah upload bukti status pembayaran SUDAH BAYAR, ADMIN BELUM CEK. Tunggu beberapa saat sampai di konfirmasi oleh admin.\r\n7. Jika sudah terkonfirmasi maka status pembayaran telah berubah menjadi SELESAI.\r\n8. Jika belum maka UPLOAD BUKTI PEMBAYARAN ULANG.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`kd_faq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `kd_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

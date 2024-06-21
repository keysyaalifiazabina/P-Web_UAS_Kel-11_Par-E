-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 01:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_dtr` int(11) NOT NULL,
  `id_lomba` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kategori` enum('UI/UX','IT','Seni','Business Plan','E-Sport','Sport') NOT NULL,
  `approval` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`id_dtr`, `id_lomba`, `nama_lengkap`, `email`, `kategori`, `approval`) VALUES
(22, 13, 'Vera Rizki Yuniar', 'inikeysya@gmail.com', 'Sport', 1),
(23, 13, 'Vera Rizki Yuniar', 'inikeysya@gmail.com', 'UI/UX', 1),
(24, 13, 'Keysya Alifia Zabina', 'test@mail.com', 'E-Sport', 1),
(25, 3, 'bina', 'admin@gmail.com', 'Seni', 1),
(26, 18, 'Vera Rizki Yuniar', 'test@mail.com', 'Business Plan', 1),
(27, 3, 'Keysya Alifia Zabina', 'inikeysya@gmail.com', 'Seni', 1),
(31, 2, 'Keysya Alifia Zabina', 'keysyaalifiazabina@gmail.com', 'IT', 1),
(32, 2, 'Keysya Alifia Zabina', 'keysyaalifiazabina@gmail.com', 'IT', 1),
(34, 1, 'nsj', 'anab', 'UI/UX', 1),
(35, 3, 'Keysya Alifia Zabina', 'inikeysya@gmail.com', 'Seni', 1),
(36, 3, 'Keysya Alifia Zabina', 'inikeysya@gmail.com', 'Seni', 1),
(37, 3, 'Aud', 'audsr@gmail.com', 'E-Sport', 1),
(38, 3, 'Aud', 'audsr@gmail.com', 'E-Sport', 1),
(39, 3, 'Aud', 'audsr@gmail.com', 'E-Sport', 1),
(40, 5, 'jay park', 'jay@gmail.com', 'IT', 1),
(41, 3, 'Au', 'aud@gmail.com', 'E-Sport', 1),
(42, 3, 'kheuw', 'teaha@mail.com', 'UI/UX', 1),
(43, 3, 'asdf', 'asdf@mail.com', 'Business Plan', 1),
(44, 3, 'ngh', 'hu', 'Seni', 1),
(45, 3, 'Keysya Alifia Zabina', 'inikeysya@gmail.com', 'Seni', 1),
(46, 13, 'Keysya Alifia Zabina', 'inikeysya@gmail.com', 'E-Sport', 1),
(47, 3, 'Keysya Alifia Zabina', 'keysyaalifiazabina@gmail.com', 'Sport', 1),
(48, 3, 'Keysya Alifia Zabina', 'keysyaalifiazabina@gmail.com', 'Sport', 1),
(49, 3, 'Keysya Alifia Zabina', 'keysyaalifiazabina@gmail.com', 'Sport', 0),
(50, 3, 'hanafi', 'hanafi@mail.com', 'UI/UX', 0),
(51, 1, 'Keysya Alifia Zabina', 'keysyaalifiazabina@gmail.com', 'UI/UX', 1),
(52, 3, 'Keysya Alifia Zabina', 'admin@gmail.com', 'UI/UX', 1),
(53, 14, 'Keysya Alifia Zabina', 'keysyaalifiazabina@gmail.com', 'Sport', NULL),
(54, 13, 'Keysya Alifia Zabina', 'punyakey@gmail.com', 'E-Sport', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lomba`
--

CREATE TABLE `tb_lomba` (
  `id_lomba` int(16) NOT NULL,
  `img` text NOT NULL,
  `nama_lomba` varchar(200) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `penyelenggara` enum('Hima Sifo','Hima Tifa','Hima Sada','Hima Bisdig','BEM Fasilkom') NOT NULL,
  `kategori` enum('UI/UX','IT','Seni','Business Plan','E-Sport','Sport') NOT NULL,
  `ktg_pst` enum('Mahasiswa','Umum') NOT NULL,
  `jadwal` date NOT NULL,
  `tempat` enum('Offline','Online') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_lomba`
--

INSERT INTO `tb_lomba` (`id_lomba`, `img`, `nama_lomba`, `deskripsi`, `penyelenggara`, `kategori`, `ktg_pst`, `jadwal`, `tempat`) VALUES
(1, 'uiux.jpg', 'Ui Ux Competition', 'Kompetisi desain antarmuka sistem/produk yang berorientasi kepada kenyamanan dan kemudahan pengguna.', 'Hima Sifo', 'UI/UX', 'Umum', '2024-12-01', 'Online'),
(2, 'web.jpeg', 'Web Development Competition', 'Kompetisi pembuatan website dengan ui yang kekinian', 'Hima Sifo', 'IT', 'Mahasiswa', '2024-05-31', 'Online'),
(3, 'art.jpg', 'Art dan Desain', 'Seni rupa dengan pengaplikasian pada lukisan dan grafik designer', 'Hima Sifo', 'Seni', 'Umum', '2024-05-31', 'Online'),
(12, 'bc.png', 'Business Plan', 'Business Plan Competition (BPC) adalah lomba membuat sebuah proposal bisnis dengan tema tertentu. ', 'Hima Bisdig', 'Business Plan', 'Umum', '2024-06-06', 'Online'),
(13, 'esp.jpg', 'Mobile Legends Competition', 'Kompetisi Mobile Legend secara umum', 'BEM Fasilkom', 'E-Sport', 'Umum', '2024-07-06', 'Offline'),
(14, 'sport.jpg', 'Football Competition', 'Lomba sepak bola antar prodi', 'Hima Sada', 'Sport', 'Umum', '2024-07-04', 'Online'),
(15, 'ui.jpg', 'UI/UX Designer', 'Kompetisi desain wireframe aplikasi', 'Hima Sifo', 'UI/UX', 'Umum', '2024-08-02', 'Online'),
(20, 'Up done.png', 'msgdsh', 'amha', 'BEM Fasilkom', 'IT', 'Mahasiswa', '2024-06-19', 'Offline'),
(21, 'Save Event Success.png', 'ajh', 'snb', 'Hima Tifa', 'IT', 'Mahasiswa', '2024-06-28', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` enum('Admin','User','Vendor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `username`, `password`, `nama_lengkap`, `no_telp`, `alamat`, `level`) VALUES
(1, 'Admin', '18c6d818ae35a3e8279b5330eda01498', 'Admin', '087757636820', 'Jl. Asri', 'Admin'),
(2, 'User', '24c9e15e52afc47c225b757e7bee1f9d', 'Keysya Alifia Zabina', '08123456789', 'Jl. Citraland\r\n', 'User'),
(3, 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'Vera Rizki Yuniar', '08675737288', 'Jl. Graha Family', 'User'),
(5, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'Kim Soohyun', '0878926343', 'Gangdo Town', 'Admin'),
(6, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'Lee Jieun', '08975432123', 'Tokyo', 'User'),
(7, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'Lee Sunjae', '0896442627', 'Jl. Mekar', 'User'),
(8, 'vendor1', 'ccfbef9bf08c11d5b804bec11bcea215', 'UPN Veteran Jatim', '086545237', 'Gunung Anyar', 'Vendor'),
(9, 'user5', '0a791842f52a0acfbb3a783378c066b8', 'Audrey Septya Rosanti\r\n', '08754326789', 'Jl. Hari', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_dtr`) USING BTREE,
  ADD KEY `tb_daftar_ibfk_1` (`id_lomba`);

--
-- Indexes for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_dtr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  MODIFY `id_lomba` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 09:16 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `kdadmin` int(11) NOT NULL,
  `inisial` varchar(50) NOT NULL,
  `akun` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nmadmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Administrator';

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`kdadmin`, `inisial`, `akun`, `pass`, `nmadmin`) VALUES
(2, 'BOS', 'bos', '15fc4a53992beba40ae91e5244e79dff', 'BOS ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `username` varchar(50) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL,
  `kdjadwal` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(100) NOT NULL,
  `asalsekolah` varchar(100) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `namabapak` varchar(40) DEFAULT '',
  `namaibu` varchar(40) NOT NULL DEFAULT '',
  `alamat` text NOT NULL,
  `scanijazah` text NOT NULL,
  `scanskhun` text NOT NULL,
  `nhun` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel Biodata Untuk Calon Peserta Didik Baru';

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`username`, `kdjurusan`, `kdjadwal`, `nama`, `asalsekolah`, `tempatlahir`, `tanggallahir`, `namabapak`, `namaibu`, `alamat`, `scanijazah`, `scanskhun`, `nhun`) VALUES
('PPDB001', 'JRSN1', 1, 'Ahmad Yusuf Ramadhan', 'SMP Jaya Bekasi', 'Jakarta', '1996-01-26', 'Rusli', 'Kartini', 'Taman Cikunir Indah', 'PPDB001_Ijazah_E-Rapor_X_DKV_III.pdf', 'PPDB001_NHUN_SUPR.pdf', 38),
('PPDB002', 'JRSN3', 6, 'Andika Kristiawan', 'SMP 12 Bekasi', 'Bekasi', '1996-01-02', 'Toni Hawk', 'Ani Hawk', 'TAMBUN SELATAN', 'PPDB002_Ijazah_receipt(2).pdf', 'PPDB002_NHUN_receipt(1).pdf', 39),
('PPDB003', 'JRSN3', 6, 'Ridho Matrianto', 'SMP Jaya Bekasi', 'Bekasi', '1993-02-13', 'Tri', 'Nia', 'KAMPUNG 200', 'PPDB003_Ijazah_receipt.pdf', 'PPDB003_NHUN_receipt(1).pdf', 35);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `kdinfor` int(11) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL DEFAULT '',
  `info` text NOT NULL,
  `gmb` text NOT NULL,
  `waktupost` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Informasi Untuk CPD';

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`kdinfor`, `kdjurusan`, `info`, `gmb`, `waktupost`) VALUES
(1, 'JRSN3', 'Perhatian Soal dikerjakan 1 kali dan Kerjakan dengan Jujur', 'noimage', '25/06/19 09:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kdjadwal` int(11) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL,
  `jadwal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Jadwal Ujian Peserta Didik Baru';

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kdjadwal`, `kdjurusan`, `jadwal`) VALUES
(1, 'JRSN1', '2019-06-25'),
(3, 'JRSN3', '2019-06-24'),
(4, 'JRSN1', '2019-06-25'),
(6, 'JRSN3', '2019-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kdjurusan` varchar(30) NOT NULL,
  `namajurusan` varchar(50) NOT NULL DEFAULT '',
  `kuotajurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Jurusan yang dibuka';

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kdjurusan`, `namajurusan`, `kuotajurusan`) VALUES
('JRSN1', 'Desain Komunikasi Visual', 36),
('JRSN3', 'Perbankan Keuangan Mikro', 36);

-- --------------------------------------------------------

--
-- Table structure for table `jwb`
--

CREATE TABLE `jwb` (
  `kdjwb` int(11) NOT NULL,
  `kdsoal` int(11) NOT NULL DEFAULT '0',
  `kdjurusan` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `get_jwb` varchar(1) NOT NULL,
  `hsl_jwb` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Jawaban dari Soal';

--
-- Dumping data for table `jwb`
--

INSERT INTO `jwb` (`kdjwb`, `kdsoal`, `kdjurusan`, `username`, `get_jwb`, `hsl_jwb`) VALUES
(9, 5, 'JRSN1', 'PPDB001', 'A', 1),
(10, 6, 'JRSN1', 'PPDB001', 'B', 1),
(11, 7, 'JRSN1', 'PPDB001', 'C', 1),
(12, 8, 'JRSN1', 'PPDB001', 'D', 1),
(13, 13, 'JRSN3', 'PPDB002', 'E', 0),
(14, 14, 'JRSN3', 'PPDB002', 'B', 1),
(15, 15, 'JRSN3', 'PPDB002', 'C', 1),
(16, 16, 'JRSN3', 'PPDB002', 'E', 0),
(17, 13, 'JRSN3', 'PPDB003', 'B', 0),
(18, 14, 'JRSN3', 'PPDB003', 'B', 1),
(19, 15, 'JRSN3', 'PPDB003', 'C', 1),
(20, 16, 'JRSN3', 'PPDB003', 'D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kdnilai` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `nilai` int(11) NOT NULL,
  `benar` int(11) NOT NULL,
  `salah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Nilai Hasil Tes Ujian';

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kdnilai`, `username`, `nilai`, `benar`, `salah`) VALUES
(2, 'PPDB001', 100, 4, 0),
(3, 'PPDB002', 50, 2, 2),
(4, 'PPDB003', 75, 3, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pd_terterima`
--
CREATE TABLE `pd_terterima` (
`kdjurusan` varchar(30)
,`username` varchar(50)
,`kdjadwal` int(11)
,`nama` varchar(100)
,`asalsekolah` varchar(100)
,`tempatlahir` varchar(50)
,`tanggallahir` date
,`namabapak` varchar(40)
,`namaibu` varchar(40)
,`alamat` text
,`scanijazah` text
,`scanskhun` text
,`nhun` int(11)
,`kdnilai` int(11)
,`nilai` int(11)
,`benar` int(11)
,`salah` int(11)
,`kdstatuscpd` int(11)
,`status` int(11)
,`namajurusan` varchar(50)
,`kuotajurusan` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `waktudaftar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel Register Peserta Didik Baru';

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `waktudaftar`) VALUES
('PPDB001', 'adanramadhan26@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '24-06-2019 14:43:40'),
('PPDB002', 'andika@gmail.com', '202cb962ac59075b964b07152d234b70', '25-06-2019 13:52:27'),
('PPDB003', 'ridho@gmail.com', '202cb962ac59075b964b07152d234b70', '25-06-2019 14:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `kdsoal` int(11) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL DEFAULT '',
  `soal` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `kunci` enum('A','B','C','D','E') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Soal untuk diujikan';

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`kdsoal`, `kdjurusan`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`) VALUES
(5, 'JRSN1', 'soal 1', 'a', 'b', 'c', 'd', 'e', 'A'),
(6, 'JRSN1', 'soal 2', 'a', 'b', 'c', 'd', 'e', 'B'),
(7, 'JRSN1', 'soal 3', 'a', 'b', 'c', 'd', 'e', 'C'),
(8, 'JRSN1', 'soal 4', 'a', 'b', 'c', 'd', 'e', 'D'),
(13, 'JRSN3', 'soal 1', 'a', 'b', 'c', 'd', 'e', 'A'),
(14, 'JRSN3', 'soal 2', 'a', 'b', 'c', 'd', 'e', 'B'),
(15, 'JRSN3', 'soal 3', 'a', 'b', 'c', 'd', 'e', 'C'),
(16, 'JRSN3', 'soal 4', 'a', 'b', 'c', 'd', 'e', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `statuscpd`
--

CREATE TABLE `statuscpd` (
  `kdstatuscpd` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Status Calon Peseta Didik';

--
-- Dumping data for table `statuscpd`
--

INSERT INTO `statuscpd` (`kdstatuscpd`, `username`, `status`) VALUES
(1, 'PPDB001', 3),
(2, 'PPDB002', 3),
(3, 'PPDB003', 3);

-- --------------------------------------------------------

--
-- Table structure for table `terterima`
--

CREATE TABLE `terterima` (
  `username` varchar(50) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Clone pd_terterima';

--
-- Dumping data for table `terterima`
--

INSERT INTO `terterima` (`username`, `kdjurusan`) VALUES
('PPDB001', 'JRSN1'),
('PPDB003', 'JRSN3');

-- --------------------------------------------------------

--
-- Structure for view `pd_terterima`
--
DROP TABLE IF EXISTS `pd_terterima`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pd_terterima`  AS  select `biodata`.`kdjurusan` AS `kdjurusan`,`biodata`.`username` AS `username`,`biodata`.`kdjadwal` AS `kdjadwal`,`biodata`.`nama` AS `nama`,`biodata`.`asalsekolah` AS `asalsekolah`,`biodata`.`tempatlahir` AS `tempatlahir`,`biodata`.`tanggallahir` AS `tanggallahir`,`biodata`.`namabapak` AS `namabapak`,`biodata`.`namaibu` AS `namaibu`,`biodata`.`alamat` AS `alamat`,`biodata`.`scanijazah` AS `scanijazah`,`biodata`.`scanskhun` AS `scanskhun`,`biodata`.`nhun` AS `nhun`,`nilai`.`kdnilai` AS `kdnilai`,`nilai`.`nilai` AS `nilai`,`nilai`.`benar` AS `benar`,`nilai`.`salah` AS `salah`,`statuscpd`.`kdstatuscpd` AS `kdstatuscpd`,`statuscpd`.`status` AS `status`,`jurusan`.`namajurusan` AS `namajurusan`,`jurusan`.`kuotajurusan` AS `kuotajurusan` from (((`biodata` join `nilai` on((`biodata`.`username` = `nilai`.`username`))) join `statuscpd` on((`biodata`.`username` = `statuscpd`.`username`))) join `jurusan` on((`biodata`.`kdjurusan` = `jurusan`.`kdjurusan`))) where ((`statuscpd`.`status` = 3) and (`nilai`.`nilai` >= 75)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`kdadmin`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD KEY `username` (`username`),
  ADD KEY `Fk Kdjurusan From Jurusan` (`kdjurusan`),
  ADD KEY `Fk Kdjadwal From Jadwal` (`kdjadwal`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`kdinfor`),
  ADD KEY `kdjurusan` (`kdjurusan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kdjadwal`),
  ADD KEY `kdjurusan` (`kdjurusan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kdjurusan`);

--
-- Indexes for table `jwb`
--
ALTER TABLE `jwb`
  ADD PRIMARY KEY (`kdjwb`),
  ADD KEY `username` (`username`),
  ADD KEY `kdjurusan` (`kdjurusan`),
  ADD KEY `kdsoal` (`kdsoal`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kdnilai`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`kdsoal`),
  ADD KEY `kdjurusan` (`kdjurusan`);

--
-- Indexes for table `statuscpd`
--
ALTER TABLE `statuscpd`
  ADD PRIMARY KEY (`kdstatuscpd`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `terterima`
--
ALTER TABLE `terterima`
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `kdadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `kdinfor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kdjadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jwb`
--
ALTER TABLE `jwb`
  MODIFY `kdjwb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `kdnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `kdsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `statuscpd`
--
ALTER TABLE `statuscpd`
  MODIFY `kdstatuscpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `FK Username From Register` FOREIGN KEY (`username`) REFERENCES `register` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk Jadwal From Jadwal` FOREIGN KEY (`kdjadwal`) REFERENCES `jadwal` (`kdjadwal`),
  ADD CONSTRAINT `Fk Kdjurusan From Jurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`);

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `KdJurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`);

--
-- Constraints for table `jwb`
--
ALTER TABLE `jwb`
  ADD CONSTRAINT `FK Jurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`),
  ADD CONSTRAINT `FK KdSoal` FOREIGN KEY (`kdsoal`) REFERENCES `soal` (`kdsoal`),
  ADD CONSTRAINT `FK username` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK Username From Username` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `FK_soal_jurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `statuscpd`
--
ALTER TABLE `statuscpd`
  ADD CONSTRAINT `FK From Username` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

--
-- Constraints for table `terterima`
--
ALTER TABLE `terterima`
  ADD CONSTRAINT `FK_terterima_register` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

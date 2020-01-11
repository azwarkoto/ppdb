-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2019 pada 13.09
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

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
-- Struktur dari tabel `adm`
--

CREATE TABLE `adm` (
  `kdadmin` int(11) NOT NULL,
  `inisial` varchar(50) NOT NULL,
  `akun` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nmadmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Administrator';

--
-- Dumping data untuk tabel `adm`
--

INSERT INTO `adm` (`kdadmin`, `inisial`, `akun`, `pass`, `nmadmin`) VALUES
(2, 'MFF', 'fauzifathur10@gmail.com', 'a1b4ea9f0c489133b89382b54c431c54', 'fauzi'),
(3, 'HHR', 'noer_ghifari@yahoo.com', '3c76104009c83449ee9a6f6f4f5051fd', 'Noer Muhammad Ghifari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
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
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`username`, `kdjurusan`, `kdjadwal`, `nama`, `asalsekolah`, `tempatlahir`, `tanggallahir`, `namabapak`, `namaibu`, `alamat`, `scanijazah`, `scanskhun`, `nhun`) VALUES
('PPDB001', 'JRSN3', 1, 'Muhammad Fauzi Fathurohman', 'SMPN 256 Jakarta', 'Garut', '1997-02-10', 'Beckam', 'Victoria', 'Bekasi', 'PPDB001_Ijazah_5_6215250575655698564.pdf', 'PPDB001_NHUN_Ijazah SMP (depan).pdf', 80),
('PPDB002', 'JRSN2', 1, 'Noer Muhammad Ghifari', 'SMPN 193 Jakarta', 'Bekasi', '1997-04-05', 'Adam', 'Nurhikmah', 'Jl.satria VII', 'PPDB002_Ijazah_Transkrip.pdf', 'PPDB002_NHUN_SKL.pdf', 8),
('PPDB003', 'JRSN2', 4, 'Andre Firmansyah', 'SMPN 200 JAKARTA', 'Jakarta', '1998-02-20', 'Sapri', 'Suminah', 'Bekasi', 'PPDB003_Ijazah_Database.pdf', 'PPDB003_NHUN_CV.pdf', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `kdinfor` int(11) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL DEFAULT '',
  `info` text NOT NULL,
  `gmb` text NOT NULL,
  `waktupost` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Informasi Untuk CPD';

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `kdjadwal` int(11) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL,
  `jadwal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Jadwal Ujian Peserta Didik Baru';

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`kdjadwal`, `kdjurusan`, `jadwal`) VALUES
(1, 'JRSN3', '2019-11-11'),
(3, 'JRSN1', '2020-01-11'),
(4, 'JRSN2', '2020-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `kdjurusan` varchar(30) NOT NULL,
  `namajurusan` varchar(50) NOT NULL DEFAULT '',
  `kuotajurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Jurusan yang dibuka';

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`kdjurusan`, `namajurusan`, `kuotajurusan`) VALUES
('JRSN1', 'Teknik Kendaraan Ringan', 50),
('JRSN2', 'Multimedia', 50),
('JRSN3', 'Teknik Audio Video', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwb`
--

CREATE TABLE `jwb` (
  `kdjwb` int(11) NOT NULL,
  `kdsoal` int(11) NOT NULL DEFAULT '0',
  `kdjurusan` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `get_jwb` varchar(1) NOT NULL,
  `hsl_jwb` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Jawaban dari Soal';

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `kdnilai` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `nilai` int(11) NOT NULL,
  `benar` int(11) NOT NULL,
  `salah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Nilai Hasil Tes Ujian';

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
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `waktudaftar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel Register Peserta Didik Baru';

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `waktudaftar`) VALUES
('PPDB001', 'fauzifathur10@gmail.com', 'acmilan1889', '11-11-2019 17:37:34'),
('PPDB002', 'noer_ghifari@yahoo.com', 'acmilan1889', '03-12-2019 13:31:26'),
('PPDB003', 'andrefirman@gmail.com', 'a1b4ea9f0c489133b89382b54c431c54', '03-12-2019 13:42:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuscpd`
--

CREATE TABLE `statuscpd` (
  `kdstatuscpd` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Status Calon Peseta Didik';

--
-- Dumping data untuk tabel `statuscpd`
--

INSERT INTO `statuscpd` (`kdstatuscpd`, `username`, `status`) VALUES
(1, 'PPDB001', 1),
(2, 'PPDB002', 1),
(3, 'PPDB003', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `terterima`
--

CREATE TABLE `terterima` (
  `username` varchar(50) NOT NULL,
  `kdjurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Clone pd_terterima';

-- --------------------------------------------------------

--
-- Struktur untuk view `pd_terterima`
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
  MODIFY `kdadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `kdinfor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kdjadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jwb`
--
ALTER TABLE `jwb`
  MODIFY `kdjwb` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `kdnilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `kdsoal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `statuscpd`
--
ALTER TABLE `statuscpd`
  MODIFY `kdstatuscpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `FK Username From Register` FOREIGN KEY (`username`) REFERENCES `register` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk Jadwal From Jadwal` FOREIGN KEY (`kdjadwal`) REFERENCES `jadwal` (`kdjadwal`),
  ADD CONSTRAINT `Fk Kdjurusan From Jurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`);

--
-- Ketidakleluasaan untuk tabel `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `KdJurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`);

--
-- Ketidakleluasaan untuk tabel `jwb`
--
ALTER TABLE `jwb`
  ADD CONSTRAINT `FK Jurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`),
  ADD CONSTRAINT `FK KdSoal` FOREIGN KEY (`kdsoal`) REFERENCES `soal` (`kdsoal`),
  ADD CONSTRAINT `FK username` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK Username From Username` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `FK_soal_jurusan` FOREIGN KEY (`kdjurusan`) REFERENCES `jurusan` (`kdjurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `statuscpd`
--
ALTER TABLE `statuscpd`
  ADD CONSTRAINT `FK From Username` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

--
-- Ketidakleluasaan untuk tabel `terterima`
--
ALTER TABLE `terterima`
  ADD CONSTRAINT `FK_terterima_register` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

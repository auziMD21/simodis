-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 08:08 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simodis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkat` varchar(10) NOT NULL,
  `namakat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkat`, `namakat`) VALUES
('COR', 'CORPOSE\r\n'),
('DP', 'DINAS & PEMERINTAHAN'),
('IN', 'INSTANSI & PERUSAHANAN\r\n'),
('IND', 'INDIVIDUAL'),
('PENDIK', 'PENDIDIKAN');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `idkel` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `namakel` varchar(100) DEFAULT NULL,
  `jeniskel` varchar(100) NOT NULL,
  `alamatkel` varchar(1000) DEFAULT NULL,
  `tglber` date DEFAULT NULL,
  `nomorhp` varchar(20) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `documenpendukung` varchar(500) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `idkat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`idkel`, `username`, `pass`, `namakel`, `jeniskel`, `alamatkel`, `tglber`, `nomorhp`, `tipe`, `documenpendukung`, `status`, `idkat`) VALUES
(1, 'uinsuska', 'uinsuska18', 'Universitas Islam Negeri Sultan Syarif Kasim Riau', 'Negeri', 'Jl.HR Soebrantas Panam', '1967-06-03', '082452833', 'kelompok', 'upload/peristiwa1.PNG', 1, 'PENDIK'),
(2, '', '', 'individu', 'individu', 'individu', '2000-06-17', 'individu', 'individu', 'upload/peristiwa1.PNG', 1, 'IND'),
(3, 'cor1', 'cor1', 'Pengepul Harian Tabek Gadang', 'Swasta', 'Jalan Tabek Gadang', '2018-09-21', '018829999', 'kelompok', 'upload/peristiwa1.PNG', 1, 'COR'),
(4, 'dispora', 'dispora', 'Dinas Pemuda dan olahraga provinsi riau ', 'negeri', 'jalan soebrantas panam', '2018-09-18', '0288819911', 'kelompok', 'upload/peristiwa1.PNG', 1, 'DP'),
(5, 'Statistik', 'bps', 'Badan Statistika Provinsi Riau', 'Negeri', 'Jalan A yani PekanBaru', '2018-09-18', '20819232', 'kelompok', 'upload/peristiwa1.PNG', 1, 'IN'),
(6, 'unri2018', 'unri2018', 'Universitas Riau', 'Negeri', 'Jalan HR soebrantas Panam', '1988-09-27', '081277272728', 'kelompok', 'upload/peristiwa1.PNG', 1, 'PENDIK'),
(8, 'up', 'up', 'Universitas Pahlawan', 'Swasta', 'Jalan A yani Bangkinang', '2015-09-02', '0831777282', 'kelompok', 'upload/GOOD.jpg', 1, 'PENDIK'),
(9, 'mankuok12', 'mankuok12', 'Man Kuok', 'Negeri', 'Jalan rahman arrasyid', '1999-12-12', '(081)728882882', 'kelompok', 'upload/abc.png', 1, 'PENDIK'),
(10, 'ugm', 'ugm', 'Unversitas gajah Mada', 'Negeri', 'Jogjakarta', '1989-11-11', '029999999', 'kelompok', 'upload/aaa.PNG', 0, 'PENDIK'),
(11, 'auyas', 'adddd', 'daaaaaaa', 'Negeri', 'sad', '1998-02-12', '0000000000000', 'kelompok', 'upload/12334.jpg', 1, 'PENDIK');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`) VALUES
('admin', 'adminpimpinan'),
('admin', 'admin ');

-- --------------------------------------------------------

--
-- Table structure for table `pembaca`
--

CREATE TABLE `pembaca` (
  `Idpem` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `namapem` varchar(100) DEFAULT NULL,
  `alamatpem` varchar(1000) DEFAULT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgllahir` date DEFAULT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `Nomor_Hp` varchar(14) NOT NULL,
  `fotokartuidentitas` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `idkel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembaca`
--

INSERT INTO `pembaca` (`Idpem`, `username`, `pass`, `namapem`, `alamatpem`, `jenis_kelamin`, `tgllahir`, `pekerjaan`, `Nomor_Hp`, `fotokartuidentitas`, `status`, `idkel`) VALUES
(4, 'auzi ', 'amd', 'Auzi Madani', 'Pulau Terap 2', 'Laki-Laki', '2018-09-18', 'Mahasiswa', '08124423321', '', 0, 3),
(5, 'aqj', 'aqj', 'Isco Alrcon', 'Spanyol', 'Laki-Laki', '2018-09-01', 'Pemain sepak bola', '081244223322', '', 0, 4),
(6, 'ujl', 'ujl', 'ujang lado', 'Kuok', 'Perempuan', '2018-09-12', 'Toke lado', '081728828828', '', 0, 5),
(7, 'nulll', 'null', 'Filza Hidayat', 'Jalan Kulim', 'Laki-Laki', '1997-11-19', 'Mahasiswa', '081266252522', '', 0, 6),
(8, 'nulll', 'null', 'Rahmad Yasmin', 'Jalan Satria', 'Laki-Laki', '1997-09-07', 'Mahasiswa', '085266557665', '', 0, 6),
(9, 'nulll', 'null', 'Wahyu TP', 'Pulau Terap II', 'Laki-Laki', '1996-08-18', 'Wasit ', '082152424321', '', 0, 4),
(10, 'nulll', 'null', 'Al Fajri', 'Jalan Yos sudarso Salo', 'Laki-Laki', '1998-02-21', 'Pelajar', '081266557899', '', 0, 8),
(11, 'rahel', 'rahel', 'Rahmah Elsa Fitriani', 'Jalan CIpta karya', 'Perempuan', '1996-02-02', 'Dokter', '08124423321', 'upload/ss.png', 2, 2),
(12, 'yasmin123', 'yasmin123', 'Ahmad Yasmin', 'jalan suka makmur', 'Perempuan', '1998-02-12', 'Ustadz', '081267675656', 'upload/ss.png', 1, 2),
(13, 'nulll', 'null', 'Rahmad Alhafiz', 'kulim', 'Laki-Laki', '1998-12-11', 'mahasiswa', '081912828222', '', 0, 4),
(16, 'auzi', 'asd', 'adcsdf', 'asdfs', 'Laki-Laki', '1987-02-11', 'wqdwqwfs', '2222222222222', 'upload/ss.png', 1, 2),
(17, 'nulll', 'null', 'Arifky', 'Jalan Naga Sakti', 'Laki-Laki', '1997-11-11', 'Progrremer', '08529797979', '', 0, 1),
(18, 'nulll', 'null', 'Yanda', 'jalan satria', 'Laki-Laki', '1998-11-11', 'mahasiswa', '08171222222222', '', 0, 1),
(19, 'nulll', 'null', 'Irham hasibuan', 'jalan suka makmur', 'Laki-Laki', '1995-11-11', 'Musisi', '08111111112222', '', 0, 1),
(20, 'nulll', 'null', 'Muhammad Roy', 'jalan Al fajar', 'Laki-Laki', '1998-02-11', 'Analis', '09288888888888', '', 0, 6),
(21, 'nulll', 'null', 'Auzi Madani', 'aaaaaa', 'Laki-Laki', '1997-02-11', 'Mahasiswa', '08124423321', '', 0, 11),
(22, 'auzi21', 'auzi21', 'Auzi Madani', 'jalan kualu', 'Laki-Laki', '1989-12-21', 'pegawai', '081244322111', 'upload/123341.jpg', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkat`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`idkel`),
  ADD KEY `idkat` (`idkat`);

--
-- Indexes for table `pembaca`
--
ALTER TABLE `pembaca`
  ADD PRIMARY KEY (`Idpem`),
  ADD KEY `idkel` (`idkel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `idkel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pembaca`
--
ALTER TABLE `pembaca`
  MODIFY `Idpem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `kelompok_ibfk_1` FOREIGN KEY (`idkat`) REFERENCES `kategori` (`idkat`);

--
-- Constraints for table `pembaca`
--
ALTER TABLE `pembaca`
  ADD CONSTRAINT `pembaca_ibfk_1` FOREIGN KEY (`idkel`) REFERENCES `kelompok` (`idkel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

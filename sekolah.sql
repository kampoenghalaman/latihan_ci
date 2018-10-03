-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 04:38 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `ex_siswa`
--

CREATE TABLE `ex_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `indo` varchar(3) NOT NULL,
  `mtk` varchar(3) NOT NULL,
  `inggris` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ex_siswa`
--

INSERT INTO `ex_siswa` (`id_siswa`, `nama_siswa`, `jk`, `kelas`, `indo`, `mtk`, `inggris`) VALUES
(1, 'Dadan', 'Laki-Laki', '1', '81', '80', '80'),
(2, 'Rafly', 'Laki-Laki', '1', '20', '20', '20'),
(3, 'Alfin', 'Laki-Laki', '1', '90', '90', '100'),
(4, 'Gilang', 'Laki-Laki', '1', '0', '0', '0'),
(5, 'Dewi', 'Perempuan', '2', '0', '0', '0'),
(6, 'Manah', 'Perempuan', '2', '10', '0', '0'),
(7, 'Jihan', 'Perempuan', '2', '0', '0', '0'),
(8, 'Firdaus', 'Laki-Laki', '2', '0', '0', '0'),
(9, 'Rio', 'Laki-Laki', '3', '0', '0', '0'),
(10, 'Samuel', 'Laki-Laki', '3', '0', '0', '0'),
(11, 'Faisal', 'Laki-Laki', '3', '0', '0', '0'),
(12, 'Dede', 'Laki-Laki', '3', '0', '0', '0'),
(13, 'Dimas', 'Laki-Laki', '3', '0', '0', '0'),
(14, 'Sahrul', 'Laki-Laki', '4', '0', '0', '0'),
(15, 'Alal', 'Laki-Laki', '4', '0', '0', '0'),
(16, 'Samsul', 'Laki-Laki', '4', '0', '0', '0'),
(17, 'Holil', 'Laki-Laki', '4', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jk`, `mapel`, `kelas`) VALUES
(1, 'Mulyana', 'Laki-Laki', 'Bahasa Indonesia', '1'),
(2, 'Alfiani', 'Laki-Laki', 'Matematika', '1'),
(4, 'Ratnasari', 'Perempuan', 'Sejarah', '2'),
(5, 'Nuraini', 'Perempuan', 'Fisika', '2'),
(6, 'Marcelio', 'Laki-Laki', 'Seni Budaya', '3'),
(7, 'Tri Nurman', 'Laki-Laki', 'Kimia', '3'),
(8, 'Muaripin', 'Laki-Laki', 'Agama', '4'),
(9, 'Muhammad', 'Laki-Laki', 'TIK', '4');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_mhs` int(3) NOT NULL,
  `nis` char(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `semester` varchar(3) NOT NULL,
  `statusgambar` varchar(1) NOT NULL,
  `namafile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_mhs`, `nis`, `nama`, `alamat`, `semester`, `statusgambar`, `namafile`) VALUES
(1, 'IC011', 'Dewo', 'Karawang', '1', '1', 'logo.png'),
(2, 'IC021', 'Dadan', 'Karawang', '2', '1', 'logo22.png'),
(3, 'IC031', 'Alfin', 'Karawang', '3', '1', 'logo23.png'),
(4, 'IC041', 'Rey', 'Karawang', '4', '1', 'Untitled.jpg'),
(5, 'IC012', 'also', 'Jatirasa', '1', '1', 'me1.jpg'),
(7, 'IC043', 'dadan', 'karawang', '4', '0', ''),
(8, '09', '09', '09', '09', '0', '09'),
(9, '09', '09', '09', '09', '0', '9'),
(10, 'o', 'i', 'oi', 'oi', 'o', 'oi'),
(11, '[p', 'po', 'ml', 'mi', 'm', 'oi'),
(12, 'n', 'pom', 'pom', 'pom', 'p', 'pm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'kepsek', 'kepsek'),
(2, 'tatausaha', 'tatausaha'),
(3, 'guru', 'guru'),
(4, 'siswa', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `kelas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jk`, `kelas`) VALUES
(1, 'Dadan', 'Laki-Laki', '1'),
(2, 'Rafly', 'Laki-Laki', '1'),
(3, 'Alfin', 'Laki-Laki', '1'),
(4, 'Gilang', 'Laki-Laki', '1'),
(5, 'Dewi', 'Perempuan', '2'),
(6, 'Manah', 'Perempuan', '2'),
(7, 'Jihan', 'Perempuan', '2'),
(8, 'Firdaus', 'Laki-Laki', '2'),
(9, 'Rio', 'Laki-Laki', '3'),
(10, 'Samuel', 'Laki-Laki', '3'),
(11, 'Faisal', 'Laki-Laki', '3'),
(12, 'Dede', 'Laki-Laki', '3'),
(13, 'Dimas', 'Laki-Laki', '3'),
(14, 'Sahrul', 'Laki-Laki', '4'),
(15, 'Alal', 'Laki-Laki', '4'),
(16, 'Samsul', 'Laki-Laki', '4'),
(17, 'Holil', 'Laki-Laki', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ex_siswa`
--
ALTER TABLE `ex_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_mhs` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

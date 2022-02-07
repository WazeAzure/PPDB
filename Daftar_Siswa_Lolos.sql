-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2022 at 08:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Daftar_Siswa_Lolos`
--

CREATE TABLE `Daftar_Siswa_Lolos` (
  `Nama` text NOT NULL,
  `NISN` int(11) NOT NULL,
  `TTL` date NOT NULL,
  `Sekolah` text NOT NULL,
  `Asal_Lanud` text NOT NULL,
  `Jalur` varchar(11) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Gambar` text NOT NULL,
  `Provinsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Daftar_Siswa_Lolos`
--

INSERT INTO `Daftar_Siswa_Lolos` (`Nama`, `NISN`, `TTL`, `Sekolah`, `Asal_Lanud`, `Jalur`, `Status`, `Gambar`, `Provinsi`) VALUES
('Edbert', 111, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Reguler', 1, '111.jpeg', 'kaltim'),
('Edbert', 112, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Reguler', 0, '112.jpeg', 'kaltim'),
('Edbert', 113, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Reguler', 1, '113.jpeg', 'kaltim'),
('Edbert', 114, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Reguler', 0, '114.jpeg', 'kaltim'),
('Edbert', 115, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Reguler', 1, '115.jpeg', 'kaltim'),
('Excel Babibu', 116, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Prestasi', 0, '116.jpeg', 'kaltim'),
('Excel Babibu', 117, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Prestasi', 1, '117.jpeg', 'kaltim'),
('Excel Babibu', 118, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Prestasi', 0, '118.jpeg', 'kaltim'),
('Excel Babibu', 119, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Prestasi', 1, '119.jpeg', 'kaltim'),
('Excel Babibu', 120, '2002-02-22', 'Sekolah PD', 'Dhomber', 'Prestasi', 0, '120.jpeg', 'kaltim'),
('ed', 121, '2022-12-12', 'assd', '115', 'Reguler', 1, '121', '1asd'),
('asdada', 130, '2022-01-01', 'asd', 'dhomber', 'Reguler', 0, '130', 'kaltim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Daftar_Siswa_Lolos`
--
ALTER TABLE `Daftar_Siswa_Lolos`
  ADD PRIMARY KEY (`NISN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

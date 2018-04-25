-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 05:59 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silorusa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dokter_spesialis`
--

CREATE TABLE IF NOT EXISTS `dokter_spesialis` (
  `id_dokter` int(11) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `nama_dokter` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_lokasi`
--

CREATE TABLE IF NOT EXISTS `jenis_lokasi` (
  `id_jenis_lokasi` int(11) NOT NULL,
  `nama_jenis_lokasi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_praktek`
--

CREATE TABLE IF NOT EXISTS `lokasi_praktek` (
  `id_lokasi_praktek` int(3) NOT NULL,
  `nama_lokasi_praktek` varchar(255) NOT NULL,
  `alamat_lokasi_praktek` varchar(255) NOT NULL,
  `jam_buka_praktek` varchar(60) NOT NULL,
  `nomor_hp_praktek` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter_spesialis`
--
ALTER TABLE `dokter_spesialis`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jenis_lokasi`
--
ALTER TABLE `jenis_lokasi`
  ADD PRIMARY KEY (`id_jenis_lokasi`);

--
-- Indexes for table `lokasi_praktek`
--
ALTER TABLE `lokasi_praktek`
  ADD PRIMARY KEY (`id_lokasi_praktek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dokter_spesialis`
--
ALTER TABLE `dokter_spesialis`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_lokasi`
--
ALTER TABLE `jenis_lokasi`
  MODIFY `id_jenis_lokasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lokasi_praktek`
--
ALTER TABLE `lokasi_praktek`
  MODIFY `id_lokasi_praktek` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

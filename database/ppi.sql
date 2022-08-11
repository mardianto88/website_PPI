-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `user` text,
  `pwd` text,
  `foto` text,
  `level_admin` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pwd`, `foto`, `level_admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1.jpg', 'PPI'),
(5, 'hendra', 'a04cca766a885687e33bc6b114230ee9', '1.jpg', 'ENUMERATOR');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_transaksi` varchar(12) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id_km` varchar(12) NOT NULL,
  `id_ikan` varchar(12) NOT NULL,
  `kg` decimal(4,0) DEFAULT NULL,
  `harga` decimal(12,0) DEFAULT NULL,
  `jumlah_harga` decimal(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_transaksi`, `tgl`, `id_km`, `id_ikan`, `kg`, `harga`, `jumlah_harga`) VALUES
('TRX.000001', '2019-04-10', 'KM.00006', '00003', '1', '20000', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` varchar(12) NOT NULL,
  `jenis_ikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `jenis_ikan`) VALUES
('00001', 'TEMBANG'),
('00002', 'KULLI'),
('00003', 'CAKALANG'),
('00004', 'PESSE'),
('00005', 'LOLI'),
('00006', 'LURE'),
('00007', 'LAJANG'),
('00008', 'CARIA'),
('00009', 'BANJAR'),
('00010', 'KATOMBONG'),
('00011', 'LAJUR'),
('00012', 'KEPITING'),
('00013', 'CUMI-CUMI');

-- --------------------------------------------------------

--
-- Table structure for table `km`
--

CREATE TABLE `km` (
  `id_km` varchar(12) NOT NULL,
  `nama_km` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `km`
--

INSERT INTO `km` (`id_km`, `nama_km`) VALUES
('KM.00001', 'SUCI '),
('KM.00002', 'MASSAGENA'),
('KM.00003', 'SUCI 01'),
('KM.00004', 'xcvcxv'),
('KM.00005', 'xcvcxv'),
('KM.00006', 'MARRENNU 02');

-- --------------------------------------------------------

--
-- Table structure for table `rtp`
--

CREATE TABLE `rtp` (
  `id_rtp_pp` varchar(12) NOT NULL,
  `nama_rtp_pp` varchar(100) DEFAULT NULL,
  `id_km` varchar(12) NOT NULL,
  `mt` decimal(3,0) DEFAULT NULL,
  `jenis_alat_utama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rtp`
--

INSERT INTO `rtp` (`id_rtp_pp`, `nama_rtp_pp`, `id_km`, `mt`, `jenis_alat_utama`) VALUES
('12', 'as12', 'KM.00001', '1', 'Pancing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_transaksi`,`id_km`,`id_ikan`);

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `km`
--
ALTER TABLE `km`
  ADD PRIMARY KEY (`id_km`);

--
-- Indexes for table `rtp`
--
ALTER TABLE `rtp`
  ADD PRIMARY KEY (`id_rtp_pp`,`id_km`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

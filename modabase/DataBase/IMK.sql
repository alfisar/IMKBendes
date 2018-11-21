-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 08:20 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IMK`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namad` varchar(20) NOT NULL,
  `namab` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `password`, `namad`, `namab`, `lokasi`, `tentang`, `foto`) VALUES
('alfisar589@gmail.com', 'alfisarr', 'alfisar', 'rachman', 'bogor', 'hiya hiya hiiiiiiiiyaaa', 'PasPoto.jpg'),
('alfisar123@gmail.ocm', 'alfi123', 'alfi', 'sar', 'bandung', 'hiya hiya hiya hiyaaaaaa', 'Non-formal.jpg'),
('coba@gmail.com', 'coba', 'coba', 'ya', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `email` varchar(20) NOT NULL,
  `materi` varchar(20) NOT NULL,
  `iduser` varchar(20) NOT NULL,
  `isicomment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `idnotif` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `iduser` varchar(20) NOT NULL,
  `idsuka` varchar(11) NOT NULL,
  `idtidak` varchar(20) NOT NULL,
  `materi` varchar(20) NOT NULL,
  `balasan` varchar(100) NOT NULL,
  `idreply` varchar(20) NOT NULL,
  `kepada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `username` varchar(20) NOT NULL,
  `materi` varchar(20) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

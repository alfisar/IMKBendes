-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 03:09 PM
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
  `umur` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `password`, `namad`, `namab`, `umur`, `gender`, `alamat`) VALUES
('admin@gmail.com', 'as', 'as', 'as', 0, '', ''),
('admin@gmail.com', 'asd', 'asd', 'asd', 0, '', ''),
('alfisar@gmail.com', 'asd', 'asdasd', 'asdasd', 0, '', ''),
('alfisar589@gmail.com', 'as', 'asdsa', 'asdasdsa', 0, '', ''),
('alfisar@gmail.com', 'aaa', 'aaaa', 'aaaa', 0, '', ''),
('admin@gmail.com', 'as', 'asdsadsa', 'asdasd', 0, '', ''),
('alfisar589@gmail.com', 'alfisarr', 'alfisar', 'rachman', 0, '', ''),
('asdasdsad@gmail.com', 'as', 'asdasdsa', 'asdasdsa', 0, '', ''),
('asdasdsad@gmail.com', 'ass', 'asdsad', 'asdsad', 0, '', ''),
('yeaboi1945@gmail.com', 'yeaboi', 'yeaboi', '1945', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `username` varchar(20) NOT NULL,
  `materi` varchar(20) NOT NULL,
  `idcomment` varchar(5) NOT NULL,
  `isicomment` varchar(100) NOT NULL,
  `balasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `username` varchar(20) NOT NULL,
  `suka` int(11) NOT NULL,
  `balasan` varchar(100) NOT NULL,
  `materi` varchar(20) NOT NULL,
  `idcomment` varchar(5) NOT NULL
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

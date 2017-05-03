-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 03:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letskick`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(20) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `alamat`, `no_telp`, `username`, `password`, `status`, `foto`) VALUES
('2', ' admin', 'admin@admin.com', 'sasasa', '08121', 'admin ', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` varchar(12) NOT NULL,
  `id_penyedia` varchar(12) NOT NULL,
  `nama_lapangan` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `id_penyedia`, `nama_lapangan`, `deskripsi`, `fasilitas`) VALUES
('LPN0001', 'PN0001', '1', 'salsdhalksk', 'khlkhdslkdas'),
('PN0002', 'P001', 'hhahaha', 'ahahah', 'ahahaha'),
('PN0003', 'P001', 'hahaha', 'ahaha', 'ahaha');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` varchar(30) NOT NULL,
  `nama_member` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `nama_member`, `alamat`, `no_hp`, `email`, `username`, `password`, `foto`) VALUES
('M001', 'Member1', 'member member', 8121212, 'member1@gmail.com', 'member1', 'c7764cfed23c5ca3bb393308a0da2306', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `penyedia_futsal`
--

CREATE TABLE `penyedia_futsal` (
  `id_penyedia_futsal` varchar(10) NOT NULL,
  `nama_penyedia` varchar(30) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_lapangan` varchar(5) NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `upload_foto` text NOT NULL,
  `lat` varchar(20) NOT NULL,
  `longt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyedia_futsal`
--

INSERT INTO `penyedia_futsal` (`id_penyedia_futsal`, `nama_penyedia`, `nama_pemilik`, `alamat`, `jumlah_lapangan`, `deskripsi`, `fasilitas`, `username`, `password`, `upload_foto`, `lat`, `longt`) VALUES
('PN0001', 'penyedia1', 'penyedia1', 'penyedia', '2', 'kskamaskln', 'knl', 'penyedia1', '1e8adc507275c6c8819cb63276607aec', 'images/', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(15) NOT NULL,
  `id_member` varchar(15) NOT NULL,
  `id_penyedia_futsal` varchar(15) NOT NULL,
  `id_lapangan` varchar(15) NOT NULL,
  `durasi` varchar(15) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `biaya` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `id_penyedia_futsal`, `id_lapangan`, `durasi`, `waktu`, `biaya`, `status`) VALUES
('T001', 'M001', 'PN0001', 'LPN0001', '2 jam', '14:30', '50000', 'Belum diverifikasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

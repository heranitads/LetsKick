-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 05:41 AM
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
('2', ' admin aja', 'admin@admin.com ', 'sasasa', '08121 ', 'admin  ', '05738b45d09e5ad6305af75ed5416a56', 'admin', '');

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
('LPN0001', 'PN0001', '1', 'salsdhalksk', 'khlkhdslkdas');

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
('M001', 'Member1', 'member member', 8121212, 'member1@gmail.com', 'member1', 'c7764cfed23c5ca3bb393308a0da2306', 'images/'),
('1317297978360798', 'Shawn Cybernatic Master', '', 0, '', '', '', ''),
('1313701878721248', 'Muhammad Fadhly Arham', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `penyedia_futsal`
--

CREATE TABLE `penyedia_futsal` (
  `id_penyedia_futsal` varchar(10) NOT NULL,
  `nama_penyedia` varchar(30) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
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

INSERT INTO `penyedia_futsal` (`id_penyedia_futsal`, `nama_penyedia`, `nama_pemilik`, `alamat`, `email`, `no_telp`, `website`, `jumlah_lapangan`, `deskripsi`, `fasilitas`, `username`, `password`, `upload_foto`, `lat`, `longt`) VALUES
('PN001', 'Dgallery', 'Ari', 'Sukabirus', 'dgallery@gmail.com', '081244556688', 'dgallery.blogsport.com', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'ari', 'ari', '', '-6.976863', '107.631013'),
('PN002', 'Futsal Rajawali', 'Jali', 'Sukabirus', 'rajawali@gmail.com', '081122334455', 'rajawali.wordpress.com', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'jali', 'jali', '', '-6.979546', '107.631185'),
('PN003', 'Goal Futsal', 'goal', 'Dayeuhkolot', 'goal@gmail.com', '0877889944', 'goal.blogspot.com', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'goal', 'goal', '', '-6.972986', '107.624147'),
('PN004', 'Dama Indoor Futsal', 'dama', 'Dayeuhkolot', 'dama@gmail.com', '081255447788', 'dama.blogspot.com', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'dama', 'dama', '', '-6.972590', '107.590331'),
('PN005', 'Centro Futsal', 'Centro', 'Buah Batu', 'centro@gmail.com', '085655447788', 'centro.com', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'centro', 'centro', '', '-6.955038', '107.646442'),
('PN006', 'SOS GBI Futsal', 'sosis', 'Buah Batu', 'sos@gmail.com', '089955447755', 'sos.blogspot.com', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'sosis', 'sosis', '', '-6.967773', '107.670196');

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
  `tanggal` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `id_penyedia_futsal`, `id_lapangan`, `durasi`, `waktu`, `biaya`, `tanggal`, `status`, `gambar`) VALUES
('T001', 'M001', 'PN0001', 'LPN0001', '2 jam', '14:30', '50000', '0000-00-00', 'Belum diverifikasi', ''),
('M0027', 'M002', 'PN006', 'LPN0001', ' 2', '12:00 AM', '6000', '02/05/2017', 'Belum diverifikasi', ''),
('M0000', 'M002', 'PN006', 'LPN0001', ' 4', '12:00 AM', '12000', '17/05/2017', 'Belum diverifikasi', ''),
('M0031', 'M002', 'PN006', 'LPN0001', ' 2', '12:00 AM', '6000', '17/05/2017', 'Belum diverifikasi', ''),
('M0019', 'M002', 'PN006', 'LPN0001', ' 4', '12:00 AM', '12000', '25/05/2017', 'Belum diverifikasi', ''),
('M0021', 'M002', 'PN006', 'LPN0001', ' 4', '12:00 AM', '12000', '25/05/2017', 'Belum diverifikasi', ''),
('M0007', 'M002', 'PN006', 'LPN0001', ' 4', '12:00 AM', '12000', '25/05/2017', 'Belum diverifikasi', ''),
('M0030', 'M002', 'PN006', 'LPN0001', ' ', '12:00 AM', '0', '25/05/2017', 'Belum diverifikasi', ''),
('M0025', 'M002', 'PN006', 'LPN0001', ' ', '12:00 AM', '0', '25/05/2017', 'Belum diverifikasi', ''),
('M0049', 'M002', 'PN006', 'LPN0001', ' 3', '12:00 AM', '9000', '25/05/2017', 'Belum diverifikasi', ''),
('M0005', 'M002', 'PN006', 'LPN0001', ' 3', '12:00 AM', '9000', '25/05/2017', 'Belum diverifikasi', ''),
('M0026', 'M002', 'PN006', 'LPN0001', ' 2', '12:00 AM', '6000', '25/05/2017', 'Belum diverifikasi', ''),
('M0015', 'M002', 'PN006', 'LPN0001', ' ', '12:00 AM', '0', '25/05/2017', 'Belum diverifikasi', ''),
('M0052', 'M002', 'PN006', 'LPN0001', ' ', '12:00 AM', '0', '25/05/2017', 'Belum diverifikasi', ''),
('M0051', 'M002', 'PN006', 'LPN0001', ' 2', '12:00 AM', '6000', '18/05/2017', 'Belum diverifikasi', ''),
('M0041', 'M002', 'PN006', 'LPN0001', ' 2', '12:00 AM', '6000', '18/05/2017', 'Belum diverifikasi', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

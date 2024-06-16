-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 05:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taman_asri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'admin', 'admin123', 'admin', 'wanasutan', 'desktop.jpg', '2024-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_ditambahkan` date DEFAULT NULL,
  `jenis_arsip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `reference_number` int(11) NOT NULL,
  `temperature` varchar(30) NOT NULL,
  `tagno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fauna`
--

CREATE TABLE `fauna` (
  `id_fauna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `habitat` varchar(255) DEFAULT NULL,
  `status_konservasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flora`
--

CREATE TABLE `flora` (
  `id_flora` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `habitat` varchar(255) DEFAULT NULL,
  `status_konservasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flora`
--

INSERT INTO `flora` (`id_flora`, `nama`, `deskripsi`, `jumlah`, `habitat`, `status_konservasi`) VALUES
(1, 'Rafflesia arnoldii', 'Largest individual flower on earth', 10, 'Rainforest', 'Endangered'),
(2, 'Nepenthes rajah', 'Carnivorous plant', 5, 'Mountains', 'Vulnerable'),
(3, 'Titan arum', 'Has the largest unbranched inflorescence in the world', 3, 'Tropical forests', 'Threatened'),
(4, 'Baobab', 'Adansonia tree, known for its massive trunk', 20, 'Savanna', 'Least Concern'),
(5, 'Welwitschia', 'Very unusual, long-lived plant', 7, 'Deserts', 'Near Threatened');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `reference_number` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `residence_status` varchar(100) NOT NULL,
  `residence` varchar(200) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `admission_year` varchar(11) NOT NULL,
  `level` varchar(10) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reference_number`, `firstname`, `mname`, `lastname`, `email`, `phone`, `residence_status`, `residence`, `programme`, `admission_year`, `level`, `created_on`) VALUES
(1, '9100609620', 'Bridget', '', 'Gafa', 'mra@gmail.com', '1230444444', 'Resident', 'Michael Kofi Avenue', 'Minerals Engineering', '2020', '2', '2021-02-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `fauna`
--
ALTER TABLE `fauna`
  ADD PRIMARY KEY (`id_fauna`);

--
-- Indexes for table `flora`
--
ALTER TABLE `flora`
  ADD PRIMARY KEY (`id_flora`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fauna`
--
ALTER TABLE `fauna`
  MODIFY `id_fauna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flora`
--
ALTER TABLE `flora`
  MODIFY `id_flora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

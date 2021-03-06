-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 04:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `email`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Mhs1', 'mhs1@gmail.com', 'solo', 'solo', '2022-04-05', 'laki-laki', '08972892831', 'ncaioudn3938c', '2022-04-21 09:10:36', '2022-04-21 09:10:36'),
(2, 'Mhs2', 'mhs2@gmail.com', 'Solo', 'Sukoharjo', '2022-04-22', 'perempuan', '083267362', 'jxue38e', '2022-04-21 09:10:36', '2022-04-21 09:10:36'),
(3, 'Mhs1', 'mhs1@gmail.com', 'solo', 'solo', '2022-04-05', 'laki-laki', '08972892831', 'ncaioudn3938c', '2022-04-21 09:10:40', '2022-04-21 09:10:40'),
(4, 'Mhs2', 'mhs2@gmail.com', 'Solo', 'Sukoharjo', '2022-04-22', 'perempuan', '083267362', 'jxue38e', '2022-04-21 09:10:40', '2022-04-21 09:10:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

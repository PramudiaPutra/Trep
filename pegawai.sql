-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 11:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `username`, `password`, `nama`) VALUES
(1, 'Admin', '$2y$10$ixwmbzL3Y2VAxb1EQM4UiOIA1feg7zW7aRHulaY3q6aAgQrx/1R0i', 'Administrator'),
(8, 'aan', '$2y$10$y7NzMUwxXa.JwdsO0SzwGOMNHZPDz6pd/0KxojJkr/4aQphYjcMi.', 'aan'),
(9, 'Bejo', '$2y$10$mhWMzJdaJ323DLggBgM.YOXhAEKBTme4PABEB6NXd3J3BxklXH5Cm', 'Bejo Sugiantoro'),
(10, 'Bambang', '$2y$10$q//xyrZ5TyVz7XQyr9RFt.45bKzJ2LH7eOaY3wtk8b3UWBchrRUrW', 'Bambang Pamungkas'),
(11, 'Parmin', '$2y$10$FIEkn38NDZiSp6W6FbDU7OmRiLMnhcTBDIICMqjIwD9v62uva7jNm', 'Parmin Subejo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

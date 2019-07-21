-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 03:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `everythinggames`
--

-- --------------------------------------------------------

--
-- Table structure for table `maxreq`
--

CREATE TABLE `maxreq` (
  `id` int(11) NOT NULL,
  `gameName` varchar(40) NOT NULL,
  `os` varchar(2000) NOT NULL,
  `processor` varchar(2000) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `graphics` varchar(2000) NOT NULL,
  `storage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxreq`
--

INSERT INTO `maxreq` (`id`, `gameName`, `os`, `processor`, `memory`, `graphics`, `storage`) VALUES
(2, 'Fortnite', 'Windows 7/8/10 64-bit + Mac OSX Sierra', 'Core i5 2.8 GHz processor', '8GB RAM', 'Nvidia GTX 660 or AMD Radeon HD 7870 equivalent DX11 GPU', '70GB'),
(3, 'Bus Simulator 18', 'Windows 10 64-Bit', 'Intel Core i5-4670 (4th gen.) with 3.4 GHz or AMD FX-8370 with 4 GHz or equivalent', '8GB RAM', 'NVIDIA GeForce GTX 970 (4GB VRAM) or AMD Radeon R9 290 (4GB VRAM) or higher', '6500MB'),
(4, 'Borderlands 3', 'Windows 10 64-bit', 'Intel Core i7-2600 / AMD Ryzen 7 1700', '12GB RAM', 'NVIDIA GeForce GTX 970 / AMD Radeon RX 570', '25GB'),
(5, 'Apex Legends', '64-bit Windows 7', 'Intel i5 3570K or equivalent', '8GB RAM', 'Nvidia GeForce GTX 970 / AMD Radeon R9 290', '22GB');

-- --------------------------------------------------------

--
-- Table structure for table `minreq`
--

CREATE TABLE `minreq` (
  `id` int(11) NOT NULL,
  `gameName` varchar(40) NOT NULL,
  `os` varchar(2000) NOT NULL,
  `processor` varchar(2000) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `graphics` varchar(2000) NOT NULL,
  `storage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minreq`
--

INSERT INTO `minreq` (`id`, `gameName`, `os`, `processor`, `memory`, `graphics`, `storage`) VALUES
(1, 'Counter-Strike: Global Offensive (CSGO)', 'Windows 7/Vista/XP + MacOS X 10.11 (El Capitan) or later + Ubuntu 12.04', 'Intel Core 2 Duo E6600 or AMD Phenom X3 8750 processor or better + Intel Core Duo Processor (2GHz or better) + 64-bit Dual core from Intel or AMD at 2.8 GHz', '2GB RAM', 'Video card must be 256 MB or more and should be a DirectX 9-compatible', '15GB'),
(2, 'Fortnite', 'Windows 7/8/10 64-bit or Mac OSX Sierra', 'Core i3 2.4 GHz processor', '4GB RAM', 'Intel HD 4000 video card', '60GB'),
(3, 'Bus Simulator 18', ' Windows 7/8/10 64-Bit', 'Intel Core i3 with 3.3 GHz or AMD Phenom II X4 with 3.2 GHz', '6GB RAM', 'NVIDIA GeForce GTX 750 (1GB VRAM) or AMD Radeon R7 360 (2GB VRAM) or higher', '6500MB'),
(4, 'Borderlands 3', 'Windows 7 64-bit | Windows 8 64-bit | Windows 10 64-bit\r\n', 'Intel Core i3-2140 / AMD FX-6350', '8GB RAM', 'NVIDIA GeForce GTX 770 / AMD Radeon HD 7970', '20GB'),
(5, 'Apex Legends', '64-bit Windows 7', 'Intel Core i3-6300 3.8GHz / AMD FX-4350 4.2 GHz Quad-Core Processor', '5GB RAM', 'NVIDIA GeForce GT 640 / Radeon HD 7730', '22GB');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `timecreate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `timecreate`) VALUES
(5, '123', '123123123', '123123123@123.123', '2019-07-20 03:13:45'),
(8, 'caryn97', '123456', 'caryn@gmail.com', '2019-07-21 03:37:00'),
(11, 'bryanlovell', '123123', 'bryanlovell@gmail.com', '2019-07-21 16:12:13'),
(12, 'xxryanlaixx', '123123', 'xxryanlaixx@gmail.com', '2019-07-21 16:12:25'),
(13, 'njp', '123123', 'njp@gmail.com', '2019-07-21 16:12:45'),
(14, 'lyn1997', '123123123', 'lyn1997@gmail.com', '2019-07-21 21:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `requested` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `requested`) VALUES
(3, 'fortnite'),
(4, 'pubg'),
(11, 'Phases');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maxreq`
--
ALTER TABLE `maxreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minreq`
--
ALTER TABLE `minreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maxreq`
--
ALTER TABLE `maxreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `minreq`
--
ALTER TABLE `minreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 10:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `no_ktp` char(18) NOT NULL,
  `room_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `message_type` int(1) NOT NULL,
  `message_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `no_ktp`, `room_id`, `tanggal`, `message_type`, `message_content`) VALUES
(2, '1941720012', 4, '2015-10-20 10:00:21', 1, 'Listrik mati'),
(3, '1941720012', 4, '2016-10-20 03:22:45', 2, 'Izin pulang malam'),
(4, '1941720012', 4, '2016-10-20 08:37:12', 2, 'Menginap di rumah temen');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_ktp` char(18) NOT NULL,
  `room_id` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tgl_pembayaran` datetime NOT NULL,
  `nominal` int(11) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `no_ktp` char(18) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `kendaraan` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`no_ktp`, `full_name`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `kendaraan`, `tgl_masuk`, `tgl_keluar`, `room_id`, `user_id`) VALUES
('12324134', 'Farid Maulana', 'Malang', 'Malang', '2020-10-08', 'L', '124876876', 'Motor', '0000-00-00', '0000-00-00', 1, 20),
('192652188313', 'Farid Maulana', 'Malang raya', 'Malang', '2020-10-06', 'L', '08965721631', 'Mobil', '0000-00-00', '0000-00-00', 2, 19),
('1941720012', 'Farlan', 'Malang', 'Malang', '2020-10-09', 'L', '089682327185', 'Motor', '0000-00-00', '0000-00-00', 4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_name` varchar(30) NOT NULL,
  `room_img` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `room_img`, `type_id`, `status`) VALUES
(1, 'Ekonomi01', 'logo-normal.png', 2, 1),
(2, 'Standart01', 'pp.jpg', 1, 1),
(4, 'VVIP01', 'me.jpg', 3, 1),
(5, 'R01', 'background web.jpg', 4, 0),
(6, 'VVIP02', 'craniums.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `type_name`, `fasilitas`, `harga`) VALUES
(1, 'Standard', 'listrik,air galon,lemari baju,kamar mandi luar,jemuran,tampat parkir,keamanan', 450000),
(2, 'Ekonomi', 'wifi,listrik,air galon,karpet,kursi & meja,kipas angin,lemari baju,kamar mandi luar,jemuran,tampat parkir,keamanan', 700000),
(3, 'VVIP', 'Wifi, Listrik, Air Galon, Karpet, Kursi & Meja, Tv, Ac, Kipas Angin, Lemari Baju, Kulkas, Mesin Cuci Bersama, Kamar Mandi Luar, Kamar Mandi Dalam, Dapur Bersama, Jemuran, Tempat Parkir, Laundry + Setrika, Cleaning Service, Keamanan', 1500000),
(4, 'Standart1', 'Wifi, Listrik, Air Galon, Karpet, Kursi & Meja', 400000),
(5, 'Delux', 'Wifi, Listrik, Air Galon, Karpet, Kursi & Meja, Kamar Mandi Luar, Jemuran, Tempat Parkir, Cleaning Service, Keamanan', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `rule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rule_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`rule_id`, `user_id`, `rule_desc`) VALUES
(1, 18, '                                                                <ol><li>                                Tidak merokok di dalam kamar</li><li>Tidak membawa teman lawan jenis ke dalam kamar</li><li>Menjaga kebersihan kamar</li><li>Menjaga kebersihan kamar mandi</li></ol>                                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `role`) VALUES
(17, 'Penyewa', 'penyewa', '12345678', 'penyewa'),
(18, 'Admin', 'admin', '12345678', 'admin'),
(19, 'Farid Maulana', 'Standart011510', 'Standart011510', 'penyewa'),
(20, 'Farid Maulana', 'Ekonomi011510', 'Ekonomi011510', 'penyewa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_ktp` (`no_ktp`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_ktp` (`no_ktp`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`no_ktp`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

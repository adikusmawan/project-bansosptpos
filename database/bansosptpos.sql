-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 04:58 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansosptpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_penerima`
--

CREATE TABLE `daftar_penerima` (
  `id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `id_wilayah` int(11) DEFAULT NULL,
  `tanggal_daftar_penerima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_penerima`
--

INSERT INTO `daftar_penerima` (`id_penerima`, `nama_penerima`, `alamat`, `no_telepon`, `id_wilayah`, `tanggal_daftar_penerima`) VALUES
(1, 'John Doe', 'Jl. Merdeka No.1, Jakarta Pusat', '081234567890', 1, '2024-06-01'),
(2, 'Jane Smith', 'Jl. Sudirman No.2, Bandung', '081234567891', 2, '2024-06-02'),
(3, 'Gilang', 'Jl. Ayani', '085248276622', 3, '2024-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bantuan`
--

CREATE TABLE `jenis_bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama_bantuan` varchar(100) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_bantuan`
--

INSERT INTO `jenis_bantuan` (`id_bantuan`, `nama_bantuan`, `deskripsi`) VALUES
(1, 'Bantuan Sembako', 'Paket sembako untuk keluarga kurang mampu'),
(2, 'Bantuan Tunai', 'Bantuan uang tunai untuk kebutuhan sehari-hari'),
(3, 'Program Keluarga Harapan (PKH)', 'diberikan kepada keluarga penerima manfaat (KPM) yang terdaftar di DTKS secara bertahap');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','petugas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `role`) VALUES
(1, 'Admin 1', 'admin', 'admin', 'admin'),
(2, 'Petugas 1', 'petugas', 'petugas', 'petugas'),
(3, 'gilang', 'gilang', 'gilang', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_penerima` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `id_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_penerima`, `id_petugas`, `tanggal_pengiriman`, `id_status`) VALUES
(1, 1, 1, '2024-05-01', 1),
(2, 2, 2, '2024-05-02', 2),
(3, 1, 4, '2024-05-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `id_wilayah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `no_telepon`, `id_wilayah`) VALUES
(1, 'Budi Santoso', '081234567892', 1),
(2, 'Rina Wijaya', '081234567893', 2),
(4, 'Gilang', '085248276622', 3);

-- --------------------------------------------------------

--
-- Table structure for table `status_penerimaan`
--

CREATE TABLE `status_penerimaan` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_penerimaan`
--

INSERT INTO `status_penerimaan` (`id_status`, `status`) VALUES
(1, 'Dikirim'),
(2, 'Diterima'),
(3, 'Gagal Kirim');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pengiriman` int(11) DEFAULT NULL,
  `id_bantuan` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pengiriman`, `id_bantuan`, `jumlah`, `tanggal_transaksi`) VALUES
(1, 1, 1, 1, '2024-05-01'),
(2, 2, 2, 200000, '2024-05-02'),
(3, 1, 3, 1, '2024-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(100) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`, `keterangan`) VALUES
(1, 'Jakarta Pusat', 'Wilayah Jakarta Pusat'),
(2, 'Bandung', 'Wilayah Bandung'),
(3, 'Surabaya', 'Wilayah Surabaya'),
(4, 'Kalimantan', 'Wilayah Kalimantan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_penerima`
--
ALTER TABLE `daftar_penerima`
  ADD PRIMARY KEY (`id_penerima`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_penerima` (`id_penerima`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `status_penerimaan`
--
ALTER TABLE `status_penerimaan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengiriman` (`id_pengiriman`),
  ADD KEY `id_bantuan` (`id_bantuan`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_penerima`
--
ALTER TABLE `daftar_penerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status_penerimaan`
--
ALTER TABLE `status_penerimaan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_penerima`
--
ALTER TABLE `daftar_penerima`
  ADD CONSTRAINT `daftar_penerima_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_penerima`) REFERENCES `daftar_penerima` (`id_penerima`),
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pengiriman_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status_penerimaan` (`id_status`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengiriman`) REFERENCES `pengiriman` (`id_pengiriman`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_bantuan`) REFERENCES `jenis_bantuan` (`id_bantuan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

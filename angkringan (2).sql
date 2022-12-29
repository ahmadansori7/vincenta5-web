-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 03:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angkringan`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` char(10) DEFAULT NULL,
  `id_produk` char(10) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `totalhargaitem` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_produk`, `jumlah`, `totalhargaitem`) VALUES
('TRS0000001', 'PDK0000003', 18, 72000),
('TRS0000001', 'PDK0000002', 19, 114000),
('TRS0000001', 'PDK0000004', 15, 22500),
('TRS0000001', 'PDK0000007', 8, 48000),
('TRS0000001', 'PDK0000003', 18, 72000),
('TRS0000001', 'PDK0000002', 19, 114000),
('TRS0000001', 'PDK0000004', 15, 22500),
('TRS0000001', 'PDK0000007', 8, 48000),
('TRS0000001', 'PDK0000003', 18, 72000),
('TRS0000001', 'PDK0000002', 19, 114000),
('TRS0000001', 'PDK0000004', 15, 22500),
('TRS0000001', 'PDK0000007', 8, 48000),
('TRS0000001', 'PDK0000003', 18, 72000),
('TRS0000001', 'PDK0000002', 19, 114000),
('TRS0000001', 'PDK0000004', 15, 22500),
('TRS0000001', 'PDK0000007', 8, 48000),
('TRS0000001', 'PDK0000003', 18, 72000),
('TRS0000001', 'PDK0000002', 19, 114000),
('TRS0000001', 'PDK0000004', 15, 22500),
('TRS0000001', 'PDK0000007', 8, 48000),
('TRS0000001', 'PDK0000003', 18, 72000),
('TRS0000001', 'PDK0000002', 19, 114000),
('TRS0000001', 'PDK0000004', 15, 22500),
('TRS0000001', 'PDK0000007', 8, 48000),
('TRS0000001', 'PDK0000003', 18, 72000),
('TRS0000001', 'PDK0000002', 19, 114000),
('TRS0000001', 'PDK0000004', 15, 22500),
('TRS0000001', 'PDK0000007', 8, 48000),
('TRS0000002', 'PDK0000003', 18, 72000),
('TRS0000002', 'PDK0000002', 19, 114000),
('TRS0000002', 'PDK0000004', 15, 22500),
('TRS0000002', 'PDK0000007', 8, 48000),
('TRS0000003', 'PDK0000003', 18, 72000),
('TRS0000003', 'PDK0000002', 19, 114000),
('TRS0000003', 'PDK0000004', 15, 22500),
('TRS0000003', 'PDK0000007', 8, 48000),
('TRS0000004', 'PDK0000003', 18, 72000),
('TRS0000004', 'PDK0000002', 19, 114000),
('TRS0000004', 'PDK0000004', 15, 22500),
('TRS0000004', 'PDK0000007', 8, 48000);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_transaksi` char(10) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `id_produk` char(10) CHARACTER SET latin1 DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `totalhargaitem` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_transaksi`, `username`, `id_produk`, `jumlah`, `totalhargaitem`) VALUES
(NULL, 'altix', 'PDK0000003', 18, 72000),
(NULL, 'altix', 'PDK0000002', 19, 114000),
(NULL, 'altix', 'PDK0000004', 15, 22500),
(NULL, 'altix', 'PDK0000007', 8, 48000);

-- --------------------------------------------------------

--
-- Table structure for table `kupon`
--

CREATE TABLE `kupon` (
  `username` char(10) CHARACTER SET latin1 DEFAULT NULL,
  `idkupon` char(20) CHARACTER SET latin1 NOT NULL,
  `nama_kupon` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nilai` int(10) NOT NULL,
  `minimal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kupon`
--

INSERT INTO `kupon` (`username`, `idkupon`, `nama_kupon`, `nilai`, `minimal`) VALUES
('altix', 'KOA00000000000000003', 'Kupon Gratis Ongkir A', 4000, 50000),
('altix', 'KOB00000000000000002', 'Kupon Gratis Ongkir B', 3000, 35000),
('altix', 'KOC00000000000000001', 'Kupon Gratis Ongkir C', 2000, 20000),
('altix', 'KOS00000000000000004', 'Kupon Gratis Ongkir S', 5000, 75000),
('altix', 'KSA00000000000000007', 'Kupon Uang Kembali A', 7500, 75000),
('altix', 'KSB00000000000000006', 'Kupon Uang Kembali B', 4000, 50000),
('altix', 'KSC00000000000000005', 'Kupon Uang Kembali C', 2000, 35000),
('altix', 'KSS00000000000000008', 'Kupon Uang Kembali S', 10000, 100000),
('altix', 'KSS00000000000000009', 'Kupon Uang Kembali S', 10000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` char(10) NOT NULL,
  `nama_produk` varchar(40) NOT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `kategori` varchar(30) NOT NULL,
  `gambar` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga`, `stok`, `kategori`, `gambar`) VALUES
('PDK0000001', 'Nasi Putih', 'Sepiring nasi putih hangat', 2000, 240, 'makanan', 'Resep-Nasi-Bakar-Ayam-Kemangi.webp'),
('PDK0000002', 'Nasi Rames', 'Nasi putih dengan berbagai macam lauk', 6000, 210, 'makanan', '1200px-Nasi_uduk_netherlands.jpg'),
('PDK0000003', 'Nasi Pecel', 'Nasi putih dengan saus kacang dan berbagai macam lauk pendamping', 4000, 170, 'makanan', 'Nasi-Pecel-1.jpeg'),
('PDK0000004', 'Tempe Bacem', 'Tempe goreng dengan bumbu gula merah yang manis dan gurih', 1500, 450, 'cemilan', 'resep-sate-tempe-aroma-kencur-r-20220321025516.jpg'),
('PDK0000005', 'Sate Usus', 'Sate yang terbuat dari usus ayam', 1000, 600, 'cemilan', 'sate usus.jpe'),
('PDK0000006', 'Teh Hangat', 'Segelas Teh Hangat yang manis', 2500, 740, 'minumanpanas', '3509070728.jpeg'),
('PDK0000007', 'Jeruk Hangat', 'Segelas Jeruk manis yang dapat menghangatkan tubuh', 2000, 590, 'minumanpanas', 'download.jpg'),
('PDK0000008', 'Es Teh', 'Teh Dingin dengan rasa manis menyegarkan', 2000, 70, 'minumandingin', 'iconapk.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` char(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `subtotal` bigint(15) DEFAULT NULL,
  `pengiriman` varchar(150) DEFAULT NULL,
  `metode` varchar(100) DEFAULT NULL,
  `status` enum('0','1','2','3') DEFAULT NULL,
  `catatanpbl` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `tanggal_transaksi` date NOT NULL DEFAULT current_timestamp(),
  `gambarbukti` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `subtotal`, `pengiriman`, `metode`, `status`, `catatanpbl`, `catatan`, `tanggal_transaksi`, `gambarbukti`) VALUES
('TRS0000001', 'altix', NULL, NULL, NULL, NULL, '', '', '2022-12-12', NULL),
('TRS0000002', 'altix', NULL, NULL, NULL, NULL, '', '', '2022-12-23', NULL),
('TRS0000003', 'altix', 249500, 'Antar ke Kawedanan, Magetan', 'Tunai', '0', '', '', '2022-12-27', NULL),
('TRS0000004', 'altix', 264500, 'Antar ke Kawedanan, Magetan', 'Tunai', '0', '', '', '2022-12-28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` enum('admin','pelanggan','''') DEFAULT NULL,
  `kodeotp` int(10) DEFAULT NULL,
  `gambaruser` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `nama_lengkap`, `no_hp`, `alamat`, `level`, `kodeotp`, `gambaruser`) VALUES
('altix', 'altixspherd@gmail.com', '123', 'Maulana Akbar', '85236167349', 'Kawedanan, Magetan', 'admin', 17697809, ''),
('Andreas111', 'infinity75gd2@gmail.com', 'qwerty', 'MaulanaAF', '851615313516', 'Nusakambangan, NTT', 'pelanggan', 29739862, ''),
('firdausya', 'mavindv1@gmail.com', 'qwerty', 'Firdausya Akbar', '85236467341', 'Taman, Madiun', 'pelanggan', NULL, ''),
('tarmidzi123', 'tarmidzi@gmail.com', '12345', 'Tarmidzi Firdaus', '85236164562', 'Nganjuk kota', 'pelanggan', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD KEY `username` (`username`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `kupon`
--
ALTER TABLE `kupon`
  ADD UNIQUE KEY `idkupon` (`idkupon`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `id_produk` (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `gambarbukti` (`gambarbukti`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`,`kodeotp`,`gambaruser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `keranjang_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `kupon`
--
ALTER TABLE `kupon`
  ADD CONSTRAINT `kupon_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

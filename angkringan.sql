-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 03:21 PM
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
  `id_transaksi` char(10) NOT NULL,
  `id_produk` char(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `totalhargaitem` bigint(20) DEFAULT NULL,
  `subtotal` bigint(15) DEFAULT NULL,
  `pengiriman` varchar(150) NOT NULL,
  `metode` enum('Tunai','COD','Transfer') DEFAULT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_produk`, `username`, `jumlah`, `totalhargaitem`, `subtotal`, `pengiriman`, `metode`, `status`) VALUES
('TRS0000001', 'PDK0000005', 'altix', 15, 15000, 15000, 'Antar ke Kiev, Ukraina', 'Tunai', '0');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` char(10) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
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
('PDK0000001', 'Nasi Putih', 'Sepiring nasi putih hangat', 2000, 240, 'makanan', 'nasi.jpg'),
('PDK0000002', 'Nasi Rames', 'Nasi putih dengan berbagai macam lauk', 6000, 210, 'makanan', 'nasi-remes.jpeg'),
('PDK0000003', 'Nasi Pecel', 'Nasi putih dengan saus kacang dan berbagai macam lauk pendamping', 4000, 170, 'makanan', 'pecel.jpeg'),
('PDK0000004', 'Tempe Bacem', 'Tempe goreng dengan bumbu gula merah yang manis dan gurih', 1500, 450, 'cemilan', 'tempe1.jpeg'),
('PDK0000005', 'Sate Usus', 'Sate yang terbuat dari usus ayam', 1000, 600, 'cemilan', 'sate-usus.jpg'),
('PDK0000006', 'Teh Hangat', 'Segelas Teh Hangat yang manis', 2500, 740, 'minumanpanas', 'teh-hangat.jpg'),
('PDK0000007', 'Jeruk Hangat', 'Segelas Jeruk manis yang dapat menghangatkan tubuh', 3000, 590, 'minumanpanas', 'jeruk-hangat.jpg'),
('PDK0000008', 'Es Teh', 'Teh Dingin dengan rasa manis menyegarkan', 3000, 770, 'minumandingin', 'es-teh.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` char(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`) VALUES
('TRS0000001', '2022-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_hp` bigint(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` enum('admin','pelanggan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `nama_lengkap`, `no_hp`, `alamat`, `level`) VALUES
('altix', 'variousra@gmail.com', '123', 'Maulana Akbar', 85236167349, 'Kawedanan, Magetan', 'admin'),
('ansori', 'aanblogme@gmail.com', 'ansori123', 'A. Ansori', 81234567890, 'Tanjunganom, Nganjuk', 'admin'),
('firdaus', 'firdaus@gmail.com', '123', 'Ahmad Firdaus T', 85748372312, 'Banyuwangi', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

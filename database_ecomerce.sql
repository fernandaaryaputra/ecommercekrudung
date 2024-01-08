-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 02:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(20) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`, `create_at`) VALUES
(1, 'fernanda', 'admin', 'admin123', '2024-01-03 21:54:07'),
(10, 'fernanda', '22040118', 'fernanda', '2024-01-06 14:53:20'),
(12, 'arya putra', 'putra123', '123', '2024-01-07 15:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `nama`, `harga`, `image`) VALUES
(3, 'krudung  terbaru', '14000', '481-image3(biru).jpg'),
(5, 'krudung pasmina ', '12000', '814-image1(2).jpg'),
(6, 'krudung pashimna', '10000', '468-iamge8(1).jpg'),
(20, 'krudung pasmina baru', '15000', '750-image1.jpg'),
(21, 'krudung ', '30000', '690-image2(matcha).jpg'),
(22, 'krudung baruu', '28000', '390-image-produk2(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` int(100) NOT NULL,
  `idproduct` varchar(100) NOT NULL,
  `namaproduct` varchar(200) NOT NULL,
  `harga` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorhp` varchar(20) NOT NULL,
  `pengiriman` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tanggalterima` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `tanggalorder` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`idtransaksi`, `idproduct`, `namaproduct`, `harga`, `quantity`, `nama`, `nomorhp`, `pengiriman`, `pembayaran`, `alamat`, `tanggalterima`, `total`, `tanggalorder`) VALUES
(15, '20', 'krudung pasmina baru', 15000, 2, '121', '1212', 'reguler', 'bri', '1212', '2024-01-25', 30000, '2024-01-07 22:31:32'),
(18, '20', 'krudung pasmina baru', 15000, 1, '121', '1212', 'reguler', 'bri', '1212', '2024-01-25', 15000, '2024-01-07 22:36:50'),
(19, '20', 'krudung pasmina baru', 15000, 1, '121', '1212', 'reguler', 'bri', '1212', '2024-01-25', 15000, '2024-01-07 22:38:15'),
(20, '21', 'krudung ', 30000, 3, '121', '12', 'reguler', 'bni', '1212', '2024-01-25', 90000, '2024-01-07 22:41:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  MODIFY `idtransaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

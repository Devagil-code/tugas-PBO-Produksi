-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2023 at 07:05 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodlap`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` int NOT NULL,
  `nama_bahan_baku` varchar(255) NOT NULL,
  `harga_bahan` decimal(10,2) NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama_bahan_baku`, `harga_bahan`, `stok`) VALUES
(2, 'Laptop ASUS ROG-Prosesor: Intel Core i9. RAM 16GB DDR4.Solid-State Drive (SSD) 1TB. NVIDIA GeForce RTX', '12300000.00', '3233'),
(3, 'Laptop MSI-Prosesor: Intel Core i5. Memori: 8GB DDR4. Penyimpanan: SSD 528GB. Baterai: Lithium-ion (Li-ion) atau lithium-polymer (Li-poly). Layar: Panel LCD', '5620000.00', '4623');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-04-07-063139', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1683618072, 1);

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `id_packing` int NOT NULL,
  `id_produksi` int NOT NULL,
  `tanggal_packing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilihan_bahan_baku`
--

CREATE TABLE `pemilihan_bahan_baku` (
  `id_pemilihan` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `id_bahan_baku` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemilihan_bahan_baku`
--

INSERT INTO `pemilihan_bahan_baku` (`id_pemilihan`, `id_pesanan`, `id_bahan_baku`) VALUES
(3, 3, 2),
(4, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_produk`
--

CREATE TABLE `pesanan_produk` (
  `id_pesanan` int NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `produk_dipesan` varchar(250) NOT NULL,
  `gambar` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesanan_produk`
--

INSERT INTO `pesanan_produk` (`id_pesanan`, `nama_pelanggan`, `tanggal_pemesanan`, `produk_dipesan`, `gambar`) VALUES
(3, 'Tech Budi Sanjaya', '2023-05-11', 'Asus ROG', './template/assets/img/produk/update/asus-rog-strix-g1517.jpg'),
(4, 'Tech Cv Surya Computer', '2023-05-12', 'MSI', './template/assets/img/produk/update/MSI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `id_pemilihan` int NOT NULL,
  `jumlah_produksi` varchar(50) NOT NULL,
  `tanggal_produksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qc_tes`
--

CREATE TABLE `qc_tes` (
  `id_tes` int NOT NULL,
  `id_produksi` int NOT NULL,
  `hasil_tes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int UNSIGNED NOT NULL,
  `name_user` varchar(60) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(60) NOT NULL,
  `info_user` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email_user`, `password_user`, `info_user`, `created_at`, `updated_at`) VALUES
(1, 'Agil Pamungkas', 'devagil@gmail.com', '$2y$10$gJcAzNUVZZAF02Yr49tUjOGWDHMgj6ZbfIi18ghLALAswWUNBO30K', NULL, NULL, NULL),
(2, 'Repa Okari', 'repa@gmail.com', '$2y$10$0lKwV.MtKonJY2s/NBTQM.NX6cv0qa8dsey8JNkojzQqDl9aw302W', NULL, NULL, NULL),
(3, 'Roby Fadli', 'roby@gmail.com', '$2y$10$FCzQlgNbbryesmtetYAMR.sGyGHWP780/RYqDRmacLSeWETe/oD0u', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`id_packing`),
  ADD KEY `id_produksi` (`id_produksi`);

--
-- Indexes for table `pemilihan_bahan_baku`
--
ALTER TABLE `pemilihan_bahan_baku`
  ADD PRIMARY KEY (`id_pemilihan`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `pesanan_produk`
--
ALTER TABLE `pesanan_produk`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_pemilihan` (`id_pemilihan`);

--
-- Indexes for table `qc_tes`
--
ALTER TABLE `qc_tes`
  ADD PRIMARY KEY (`id_tes`),
  ADD KEY `id_produksi` (`id_produksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan_baku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `id_packing` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemilihan_bahan_baku`
--
ALTER TABLE `pemilihan_bahan_baku`
  MODIFY `id_pemilihan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan_produk`
--
ALTER TABLE `pesanan_produk`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qc_tes`
--
ALTER TABLE `qc_tes`
  MODIFY `id_tes` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `packing`
--
ALTER TABLE `packing`
  ADD CONSTRAINT `packing_ibfk_1` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemilihan_bahan_baku`
--
ALTER TABLE `pemilihan_bahan_baku`
  ADD CONSTRAINT `pemilihan_bahan_baku_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan_produk` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemilihan_bahan_baku_ibfk_2` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan_produk` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produksi_ibfk_2` FOREIGN KEY (`id_pemilihan`) REFERENCES `pemilihan_bahan_baku` (`id_pemilihan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qc_tes`
--
ALTER TABLE `qc_tes`
  ADD CONSTRAINT `qc_tes_ibfk_1` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

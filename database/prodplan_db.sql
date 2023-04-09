-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Apr 2023 pada 06.03
-- Versi server: 8.0.30
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodplan_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` int NOT NULL,
  `nama_bahan_baku` varchar(255) NOT NULL,
  `deskripsi_bahan_baku` text,
  `satuan_bahan_baku` varchar(50) NOT NULL,
  `stok_bahan_baku` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama_bahan_baku`, `deskripsi_bahan_baku`, `satuan_bahan_baku`, `stok_bahan_baku`) VALUES
(1, 'Tepung terigu', 'Tepung terigu protein tinggi', 'Kg', 100),
(2, 'Gula pasir', 'Gula pasir halus', 'Kg', 50),
(3, 'Tepung Tapioka', 'Tepung Berkarbohidrat Tinggi', 'kg', 56),
(6, 'pisang kepok', 'pisang kepok lampung', 'Kg', 245);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_produksi`
--

CREATE TABLE `detail_produksi` (
  `id_detail_produksi` int NOT NULL,
  `id_produk` int NOT NULL,
  `id_produksi` int NOT NULL,
  `id_bahan_baku` int NOT NULL,
  `jumlah_bahan_baku` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
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
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-04-07-063139', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1680851846, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text,
  `harga_produk` decimal(10,2) NOT NULL,
  `stok_produk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int NOT NULL,
  `id_bahan_baku` int NOT NULL,
  `jumlah_produksi` int NOT NULL,
  `tanggal_produksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_bahan_baku`, `jumlah_produksi`, `tanggal_produksi`) VALUES
(4, 1, 670, '2023-04-18'),
(5, 2, 790, '2023-04-24'),
(6, 3, 556, '2023-04-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email_user`, `password_user`, `info_user`, `created_at`, `updated_at`) VALUES
(1, 'Agil Pamungkas', 'devagil@gmail.com', '$2y$10$Otgu0ZQBT7ZdYroPk1Y8ourKB22Pb8dyDrarXcREJwgClAVaN74fq', NULL, NULL, NULL),
(2, 'Repa Okari', 'repa@gmail.com', '$2y$10$4gPk.1qYncB2924qo5JmdOm2pCnL2XkrnOCXSSVRoF2y2gB2ISkFO', NULL, NULL, NULL),
(3, 'Roby Fadli', 'roby@gmail.com', '$2y$10$C1t2.OHrV5hvsN/lSgKgAeLa4RZecXDgIZscIP05rftGeFDCjuxr.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indeks untuk tabel `detail_produksi`
--
ALTER TABLE `detail_produksi`
  ADD PRIMARY KEY (`id_detail_produksi`),
  ADD KEY `fk_detail_produksi_produk` (`id_produk`),
  ADD KEY `fk_detail_produksi_produksi` (`id_produksi`),
  ADD KEY `fk_detail_produksi_bahan_baku` (`id_bahan_baku`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `fk_produksi_bahan_baku` (`id_bahan_baku`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan_baku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detail_produksi`
--
ALTER TABLE `detail_produksi`
  MODIFY `id_detail_produksi` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_produksi`
--
ALTER TABLE `detail_produksi`
  ADD CONSTRAINT `fk_detail_produksi_bahan_baku` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_produksi_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_produksi_produksi` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `fk_produksi_bahan_baku` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

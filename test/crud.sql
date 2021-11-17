-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Nov 2021 pada 13.40
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_04_074415_create_posts_table', 1),
(5, '2021_11_02_131540_create_crud_tabel', 1),
(6, '2021_11_02_132414_create_activity_tabel', 1),
(7, '2021_11_09_172632_create_table_m_barang', 2),
(8, '2021_11_09_172857_create_table_m_customer', 2),
(9, '2021_11_09_173050_create_table_t_sales', 3),
(10, '2021_11_09_173138_create_table_t_sales_def', 3),
(12, '2021_11_13_174123_create_view_transaksi', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_barang`
--

CREATE TABLE `m_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_barang`
--

INSERT INTO `m_barang` (`id`, `kode`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'B01', 'Barang A', '100000.00', '2021-11-13 15:32:50', '2021-11-13 15:32:50'),
(2, 'B02', 'Barang B', '50000.00', '2021-11-13 16:02:57', '2021-11-13 16:02:57'),
(3, 'B03', 'Barang C', '150000.00', '2021-11-13 16:02:57', '2021-11-13 16:02:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_customer`
--

CREATE TABLE `m_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_customer`
--

INSERT INTO `m_customer` (`id`, `kode`, `name`, `tlp`, `created_at`, `updated_at`) VALUES
(1, '0001', 'Cust A', '09866256161', NULL, NULL),
(2, '0002', 'Cust B', '01238928928', NULL, NULL),
(3, '0003', 'Cust C', '9012839283', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sales`
--

CREATE TABLE `t_sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` datetime NOT NULL,
  `cust_id` int(11) NOT NULL,
  `jml_brg` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `diskonly` decimal(8,2) NOT NULL,
  `ongkir` decimal(8,2) NOT NULL,
  `tot_byr` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_sales`
--

INSERT INTO `t_sales` (`id`, `kode`, `tgl`, `cust_id`, `jml_brg`, `subtotal`, `diskonly`, `ongkir`, `tot_byr`, `created_at`, `updated_at`) VALUES
(23, 'Z888', '2021-11-13 21:47:17', 1, '2', '200000.00', '0.00', '0.00', '200000.00', '2021-11-13 14:47:33', '2021-11-13 14:47:33'),
(24, 'Z889', '2021-11-13 23:03:22', 2, '3', '150000.00', '0.00', '0.00', '150000.00', '2021-11-13 16:03:33', '2021-11-13 16:03:33'),
(25, 'Z890', '2021-11-13 23:03:22', 3, '5', '400000.00', '0.00', '0.00', '400000.00', '2021-11-13 16:03:33', '2021-11-13 16:03:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sales_def`
--

CREATE TABLE `t_sales_def` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales_id` int(10) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `hrg_ban` decimal(8,2) NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_pct` decimal(8,2) NOT NULL,
  `dis_nilai` decimal(8,2) NOT NULL,
  `hrg_dis` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_sales_def`
--

INSERT INTO `t_sales_def` (`id`, `sales_id`, `id_barang`, `hrg_ban`, `qty`, `dis_pct`, `dis_nilai`, `hrg_dis`, `total`, `created_at`, `updated_at`) VALUES
(4, 24, 2, '50000.00', '1', '10.00', '10000.00', '50000.00', '510000.00', '2021-11-13 16:04:21', '2021-11-13 16:04:22'),
(5, 24, 2, '50000.00', '1', '0.00', '0.00', '0.00', '50000.00', '2021-11-13 16:04:21', '2021-11-13 16:04:22'),
(7, 25, 2, '200000.00', '3', '20.00', '0.00', '0.00', '150000.00', '2021-11-13 16:10:27', '2021-11-13 16:10:28'),
(8, 25, 3, '150000.00', '1', '0.00', '0.00', '0.00', '150000.00', '2021-11-13 16:10:27', '2021-11-13 16:10:28'),
(19, 0, 3, '200000.00', '8', '10.00', '10000.00', '10000.00', '210000.00', '2021-11-17 05:55:18', '2021-11-17 05:55:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$rABkf0w1xO3KYYeJbW9PUeqld4Mdj8hZj/dIgN/A1l9dOm9xbwSni', NULL, '2021-11-09 10:16:10', '2021-11-09 10:16:10');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_transaksi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_transaksi` (
`kode` varchar(191)
,`tgl` datetime
,`nama` varchar(191)
,`kode_barang` varchar(191)
,`jml_brg` varchar(50)
,`subtotal` decimal(8,2)
,`diskonly` decimal(8,2)
,`ongkir` decimal(8,2)
,`total` decimal(8,2)
,`jumlahbrg` double
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_transaksi`
--
DROP TABLE IF EXISTS `view_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaksi`  AS  select `ts`.`kode` AS `kode`,`ts`.`tgl` AS `tgl`,`mb`.`nama` AS `nama`,`mb`.`kode` AS `kode_barang`,`ts`.`jml_brg` AS `jml_brg`,`ts`.`subtotal` AS `subtotal`,`ts`.`diskonly` AS `diskonly`,`ts`.`ongkir` AS `ongkir`,`sd`.`total` AS `total`,sum(`sd`.`qty`) AS `jumlahbrg` from (((`t_sales` `ts` left join `m_customer` `cs` on((`ts`.`cust_id` = `cs`.`id`))) left join `t_sales_def` `sd` on((`ts`.`id` = `sd`.`sales_id`))) left join `m_barang` `mb` on((`sd`.`id_barang` = `mb`.`id`))) group by `ts`.`tgl`,`ts`.`kode`,`cs`.`name`,`ts`.`jml_brg`,`ts`.`subtotal`,`ts`.`diskonly`,`ts`.`ongkir`,`sd`.`total` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_sales`
--
ALTER TABLE `t_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_sales_def`
--
ALTER TABLE `t_sales_def`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_sales`
--
ALTER TABLE `t_sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `t_sales_def`
--
ALTER TABLE `t_sales_def`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

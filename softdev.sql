-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2022 pada 06.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softdev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rincian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `gambar`, `judul_detail`, `detail`, `rincian`, `judul`, `jenis`, `klien`, `apk`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://res.cloudinary.com/dnmkw2715/image/upload/v1664641179/softdev/akrilik_jw6xhb.png', 'Aplikasi website Akrilik Laser Cutting', 'Project pertama aplikasi web dari softdev community yaitu landing page atau aplikasi web profil yang bernama Akrilik Laser Cutting', 'Laravel 8, PHP 7.4, Mysql, Bootstrap 5, etc', 'Akrilik Laser Cutting', 'Aplikasi Web', 'CV. Mekar Cutting Digital', 'Aplikasi Web', 'https://akriliklasercutting.com/', '2022-10-01 21:50:51', '2022-10-01 21:50:51'),
(2, 'https://res.cloudinary.com/dnmkw2715/image/upload/v1664641187/softdev/bimahelm_wmyruz.png', 'Aplikasi website Bima Helm', 'Project aplikasi website ke dua dari softdev community dengan nama Bima Helm', 'Laravel 8, PHP 7.4, Mysql, Bootstrap 5, etc', 'Bima Helm', 'Aplikasi Web', 'CV. Mekar Cutting Digital', 'Aplikasi Web', 'https://bimahelm.com', '2022-10-01 21:50:51', '2022-10-01 21:50:51'),
(3, 'https://res.cloudinary.com/dnmkw2715/image/upload/v1664641197/softdev/smegamart_bliwxd.png', 'Aplikasi website SmegaMart', 'Project aplikasi web ke tiga dari softdev community dengan nama SmegaMart', 'Laravel 8, PHP 7.4, Tailwind Css, Javascript, etc', 'SmegaMart', 'Aplikasi Web', 'SMKN 1 Purbalingga', 'Aplikasi Web', 'https://newsmegamart.com', '2022-10-01 21:50:51', '2022-10-01 21:50:51'),
(4, 'https://res.cloudinary.com/dnmkw2715/image/upload/v1664641196/softdev/iot_iq9dor.png', 'Projek Prototype IOT', 'Projek lain dari softdev community yaitu Prototype IOT', 'Arduino', 'Prototype IOT', 'IOT', 'CV. Mekar Cutting Digital', 'IOT', '', '2022-10-01 21:50:51', '2022-10-01 21:50:51'),
(5, 'https://res.cloudinary.com/dnmkw2715/image/upload/v1664685888/softdev/desktop_q03ec5.jpg', 'Aplikasi Desktop Kasir', 'Projek aplikasi desktop dari softdev community yaitu aplikasi desktop kasir', 'Java', 'Desktop Kasir', 'Aplikasi Desktop', 'SMKN 1 Purbalingga', 'Aplikasi Desktop', '', '2022-10-01 21:50:51', '2022-10-01 21:50:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_16_033625_create_images_table', 1),
(3, '2022_10_01_162227_create_teams_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 26.Okt 2019, 16:41
-- Verzia serveru: 10.1.28-MariaDB
-- Verzia PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `erasmus`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `krajiny`
--

CREATE TABLE `krajiny` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `krajina` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontinent` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `krajiny`
--

INSERT INTO `krajiny` (`id`, `created_at`, `updated_at`, `krajina`, `kontinent`) VALUES
(1, '2019-10-26 12:41:07', '2019-10-26 12:41:07', 'Anglicko', 'Europa'),
(2, '2019-10-26 12:41:07', '2019-10-26 12:41:07', 'Holandsko', 'Europa'),
(3, '2019-10-26 12:41:07', '2019-10-26 12:41:07', 'Belgicko', 'Europa'),
(4, '2019-10-26 12:51:07', '2019-10-26 12:51:07', 'Nemecko', 'Europa'),
(5, '2019-10-26 12:51:09', '2019-10-26 12:51:09', 'Rusko', 'Europa');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2019_10_19_154443_create_roly_table', 1),
(20, '2019_10_20_145544_create_typvyzvy_table', 2),
(21, '2019_10_20_145722_create_vyzvy_table', 2),
(22, '2019_10_20_151725_create_krajiny_table', 2),
(23, '2019_10_20_152604_create_univerzity_table', 2),
(24, '2019_10_20_153327_create_typsuboru_table', 2),
(27, '2019_10_20_161513_create_univerzityvyzvy_table', 4),
(28, '2019_10_20_153452_create_subory_table', 5);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `podujatia`
--

CREATE TABLE `podujatia` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nazov` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `Miesto` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vyzvy_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `podujatia`
--

INSERT INTO `podujatia` (`id`, `created_at`, `updated_at`, `Nazov`, `datum`, `Miesto`, `vyzvy_id`, `users_id`) VALUES
(1, '2019-10-26 15:17:36', '2019-10-26 15:17:36', 'Erasmus Nemecko', '2019-10-31', 'Mnichov', 1, 3),
(2, '2019-10-26 15:17:36', '2019-10-26 15:17:36', 'Staz Anglicko', '2019-10-30', 'Londyn', 2, 4),
(3, '2019-10-26 15:17:36', '2019-10-26 15:17:36', 'Skolenie Holandsko pre spravcov ', '2019-11-15', 'Amsterdam', 4, 7);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `roly`
--

CREATE TABLE `roly` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Rola` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `roly`
--

INSERT INTO `roly` (`id`, `created_at`, `updated_at`, `Rola`) VALUES
(1, '2019-10-26 12:41:07', '2019-10-26 12:41:07', 'Ucastnik'),
(2, '2019-10-26 12:41:09', '2019-10-26 12:41:09', 'Referent'),
(3, '2019-10-26 12:41:17', '2019-10-26 12:41:17', 'Administrator');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `spravy`
--

CREATE TABLE `spravy` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vyzvy_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `spravy`
--

INSERT INTO `spravy` (`id`, `created_at`, `updated_at`, `vyzvy_id`, `users_id`) VALUES
(1, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 1, 5),
(2, '2019-10-26 14:38:19', '2019-10-26 14:38:19', 3, 3),
(3, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 3, 4),
(4, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 2, 6),
(5, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 4, 7);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `subory`
--

CREATE TABLE `subory` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `spravy_id` int(10) UNSIGNED NOT NULL,
  `Adresa` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nazov` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typsuboru_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `subory`
--

INSERT INTO `subory` (`id`, `created_at`, `updated_at`, `spravy_id`, `Adresa`, `Nazov`, `typsuboru_id`) VALUES
(1, '2019-10-26 15:18:19', '2019-10-26 15:18:19', 1, 'www.ukf.sk/erasmus+/pobytNemecko', 'Erasmus Nemecko', 1),
(2, '2019-10-26 15:18:19', '2019-10-26 15:18:19', 2, 'www.ukf.sk/erasmus+/StazAnglicko', 'Staz Anglicko', 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `typsuboru`
--

CREATE TABLE `typsuboru` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `typ` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `typsuboru`
--

INSERT INTO `typsuboru` (`id`, `created_at`, `updated_at`, `typ`) VALUES
(1, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 'pdf'),
(2, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 'mp4'),
(3, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 'jpg'),
(4, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 'pptx');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `typvyzvy`
--

CREATE TABLE `typvyzvy` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Typ` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `typvyzvy`
--

INSERT INTO `typvyzvy` (`id`, `created_at`, `updated_at`, `Typ`) VALUES
(1, '2019-10-26 13:51:07', '2019-10-26 13:51:07', 'Studijny pobyt'),
(2, '2019-10-26 13:51:07', '2019-10-26 13:51:07', 'Staz'),
(3, '2019-10-26 13:51:09', '2019-10-26 13:51:09', 'Prednaskovy pobyt'),
(4, '2019-10-26 13:58:09', '2019-10-26 13:58:09', 'Skolenie'),
(5, '2019-10-26 13:58:49', '2019-10-26 13:58:49', 'Ine');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `univerzity`
--

CREATE TABLE `univerzity` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nazov` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmluva-od` date NOT NULL,
  `zmluva-do` date NOT NULL,
  `krajiny_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `univerzity`
--

INSERT INTO `univerzity` (`id`, `created_at`, `updated_at`, `Nazov`, `zmluva-od`, `zmluva-do`, `krajiny_id`) VALUES
(1, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 'Queens college London', '2016-10-09', '2022-10-31', 1),
(2, '2019-10-26 14:18:33', '2019-10-26 14:18:33', 'Royal University in Amsterdam', '2011-10-01', '2025-10-01', 2),
(3, '2019-10-26 14:19:19', '2019-10-26 14:19:19', 'University of Genk', '2017-10-08', '2026-10-04', 3),
(4, '2019-10-26 14:18:19', '2019-10-26 14:18:19', 'University of Munich', '2010-10-15', '2022-10-10', 4),
(5, '2019-10-26 14:48:19', '2019-10-26 14:48:19', 'Russian Institute of science in  Moscow', '2019-10-15', '2020-10-26', 5);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `univerzityvyzvy`
--

CREATE TABLE `univerzityvyzvy` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vyzvy_id` int(10) UNSIGNED NOT NULL,
  `Pocet-miest` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `univerzity_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `univerzityvyzvy`
--

INSERT INTO `univerzityvyzvy` (`created_at`, `updated_at`, `vyzvy_id`, `Pocet-miest`, `univerzity_id`) VALUES
('2019-10-26 14:18:19', '2019-10-26 14:18:19', 1, '5', 4),
('2019-10-26 15:18:19', '2019-10-26 15:18:19', 2, '1', 1),
('2019-10-26 14:18:19', '2019-10-26 14:18:19', 3, '7', 3),
('2019-10-26 14:18:19', '2019-10-26 14:18:19', 4, '11', 2),
('2019-10-26 14:18:19', '2019-10-26 14:18:19', 5, '4', 5);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roly_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roly_id`) VALUES
(3, 'John Smith', 'john_smith@gmail.com', NULL, '$2y$10$jHOSHCVctGnzpTG5h3rYaOVw5SlRZleXRcDXLRfJRcA1zmY4bfu26', 'vPIWs1ALkJ', '2019-10-26 10:41:16', '2019-10-26 10:41:16', 2),
(4, 'Johnny Emith', 'johnny_emith@gmail.com', NULL, '$2y$10$2iiIgkiDdqdGnBs2mMs27.PaPRGr9XrXwe5gEBOBvXHELDPcQKhsC', 'MOJ3bKC9kH', '2019-10-26 10:41:40', '2019-10-26 10:41:40', 2),
(5, 'Lizzy Blue', 'lizzy_blue@gmail.com', NULL, '$2y$10$YqARtSn/l1Zoyj2oLeL43.rTehguyjzwKleJsVVFncruTvQoAtyM2', 'bFn0764Y2h', '2019-10-26 10:41:41', '2019-10-26 10:41:41', 1),
(6, 'Jim Bull', 'jim_bull@gmail.com', NULL, '$2y$10$p5ubyPaDfE.V0il.mfRS0eDFlzIa13ZMrfqFEMOUZ2M71wBUkVp5C', 'H8pxJTGPL2', '2019-10-26 10:41:42', '2019-10-26 10:41:42', 1),
(7, 'John Wick', 'john_wick@gmail.com', NULL, '$2y$10$OkyxY2fqiMxDoxqpdQ9Geey2fO2Zt0z2pNGkMiSv7HRMhjf3y/8Dm', 'jYoSofNuXc', '2019-10-26 10:41:43', '2019-10-26 10:41:43', 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vyzvy`
--

CREATE TABLE `vyzvy` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nazov` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typvyzvy_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `vyzvy`
--

INSERT INTO `vyzvy` (`id`, `created_at`, `updated_at`, `Nazov`, `typvyzvy_id`) VALUES
(1, '2019-10-26 13:58:09', '2019-10-26 13:58:09', 'Erasmus Nemecko', 1),
(2, '2019-10-26 13:59:09', '2019-10-26 13:59:09', 'Staz Anglicko', 2),
(3, '2019-10-26 13:58:05', '2019-10-26 13:58:05', 'Prednaska Belgicko', 3),
(4, '2019-10-26 13:58:09', '2019-10-26 13:58:09', 'Skolenie Holandsko', 4),
(5, '2019-10-26 13:58:09', '2019-10-26 13:58:09', 'Erasmus Rusko', 1);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `krajiny`
--
ALTER TABLE `krajiny`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `podujatia`
--
ALTER TABLE `podujatia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `podujatia_vyzvy_id_foreign` (`vyzvy_id`);

--
-- Indexy pre tabuľku `roly`
--
ALTER TABLE `roly`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spravy_vyzvy_id_foreign` (`vyzvy_id`);

--
-- Indexy pre tabuľku `subory`
--
ALTER TABLE `subory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subory_spravy_id_foreign` (`spravy_id`),
  ADD KEY `subory_typsuboru_id_foreign` (`typsuboru_id`);

--
-- Indexy pre tabuľku `typsuboru`
--
ALTER TABLE `typsuboru`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `typvyzvy`
--
ALTER TABLE `typvyzvy`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `univerzity`
--
ALTER TABLE `univerzity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `univerzity_krajiny_id_foreign` (`krajiny_id`);

--
-- Indexy pre tabuľku `univerzityvyzvy`
--
ALTER TABLE `univerzityvyzvy`
  ADD KEY `univerzityvyzvy_vyzvy_id_foreign` (`vyzvy_id`),
  ADD KEY `univerzityvyzvy_univerzity_id_foreign` (`univerzity_id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_roly_id_foreign` (`roly_id`);

--
-- Indexy pre tabuľku `vyzvy`
--
ALTER TABLE `vyzvy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vyzvy_typvyzvy_id_foreign` (`typvyzvy_id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `krajiny`
--
ALTER TABLE `krajiny`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pre tabuľku `podujatia`
--
ALTER TABLE `podujatia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `roly`
--
ALTER TABLE `roly`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `subory`
--
ALTER TABLE `subory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `typsuboru`
--
ALTER TABLE `typsuboru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `typvyzvy`
--
ALTER TABLE `typvyzvy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `univerzity`
--
ALTER TABLE `univerzity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `vyzvy`
--
ALTER TABLE `vyzvy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `podujatia`
--
ALTER TABLE `podujatia`
  ADD CONSTRAINT `podujatia_vyzvy_id_foreign` FOREIGN KEY (`vyzvy_id`) REFERENCES `vyzvy` (`id`);

--
-- Obmedzenie pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  ADD CONSTRAINT `spravy_vyzvy_id_foreign` FOREIGN KEY (`vyzvy_id`) REFERENCES `vyzvy` (`id`);

--
-- Obmedzenie pre tabuľku `subory`
--
ALTER TABLE `subory`
  ADD CONSTRAINT `subory_spravy_id_foreign` FOREIGN KEY (`spravy_id`) REFERENCES `spravy` (`id`),
  ADD CONSTRAINT `subory_typsuboru_id_foreign` FOREIGN KEY (`typsuboru_id`) REFERENCES `typsuboru` (`id`);

--
-- Obmedzenie pre tabuľku `univerzity`
--
ALTER TABLE `univerzity`
  ADD CONSTRAINT `univerzity_krajiny_id_foreign` FOREIGN KEY (`krajiny_id`) REFERENCES `krajiny` (`id`);

--
-- Obmedzenie pre tabuľku `univerzityvyzvy`
--
ALTER TABLE `univerzityvyzvy`
  ADD CONSTRAINT `univerzityvyzvy_univerzity_id_foreign` FOREIGN KEY (`univerzity_id`) REFERENCES `univerzity` (`id`),
  ADD CONSTRAINT `univerzityvyzvy_vyzvy_id_foreign` FOREIGN KEY (`vyzvy_id`) REFERENCES `vyzvy` (`id`);

--
-- Obmedzenie pre tabuľku `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roly_id_foreign` FOREIGN KEY (`roly_id`) REFERENCES `roly` (`id`);

--
-- Obmedzenie pre tabuľku `vyzvy`
--
ALTER TABLE `vyzvy`
  ADD CONSTRAINT `vyzvy_typvyzvy_id_foreign` FOREIGN KEY (`typvyzvy_id`) REFERENCES `typvyzvy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

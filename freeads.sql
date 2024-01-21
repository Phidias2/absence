-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 12 mars 2023 à 19:42
-- Version du serveur :  8.0.32-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `freeads`
--

-- --------------------------------------------------------

--
-- Structure de la table `ads`
--

CREATE TABLE `ads` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('New','Used','Good') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int NOT NULL,
  `test` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ads`
--

INSERT INTO `ads` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`, `price`, `location`, `category`, `state`, `author_id`, `test`) VALUES
(1, '2023-03-08 21:41:20', '2023-03-10 14:43:17', 'Names', 'ow, this is the most important step, In this, we\'ll write all the application logs', '1678447114.jpg', 3400, 'Location', 'Catogory', 'New', 0, NULL),
(4, '2023-03-10 12:23:26', '2023-03-10 12:23:26', 'Ads', 'Elastic Stack is a group of open source products from Elastic designed to help users take data from any type of source and in any format and search, analyze, and visualize that data', '1678454606.jpg', 2500, 'location', 'Category', 'New', 31, NULL),
(5, '2023-03-10 12:45:35', '2023-03-10 13:50:53', 'Selecter', 'Test', '1678455935.jpg', 2000, 'Benin', 'Select', 'Used', 31, NULL),
(7, '2023-03-10 17:00:15', '2023-03-10 17:00:15', 'dhfvbknlm,', 'gfchgvbjnkm', '1678471215.png', 546, 'djnkml', 'redtfghjk', 'New', 31, NULL),
(8, '2023-03-12 08:57:21', '2023-03-12 15:20:10', 'Chapeau', 'Chapeau', '1678638010.jpg', 656, 'Cotonou', 'Hatd', 'New', 34, NULL),
(9, '2023-03-12 14:55:06', '2023-03-12 14:55:06', 'nbgfv', 'vjdhb', '1678636506.png', 54, 'fdihi', 'hsgcb', 'New', 34, NULL),
(10, '2023-03-12 14:55:21', '2023-03-12 14:55:21', 'nbgfv', 'vjdhb', '1678636521.png', 54, 'fdihi', 'hsgcb', 'New', 34, NULL),
(11, '2023-03-12 15:00:08', '2023-03-12 15:00:08', 'vbvcx', 'bbdg', '1678636808.svg', 43, 'bczfsz', 'bvcbz', 'New', 34, NULL),
(12, '2023-03-12 15:28:30', '2023-03-12 15:28:46', 'Moustique', 'fhcvh', '1678638510.png', 56, 'dvxjbh', 'jvchx', 'New', 34, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_08_105216_create_ads_table', 2),
(6, '2023_03_08_110510_add_columns_to_ads_table', 3),
(7, '2023_03_08_141552_create_products_table', 4),
(8, '2023_03_08_215718_create_posts_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `content`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gc', 'vb', 'ow, this is the most important step, In this, we\'ll write all the application log', 6469, '1678313231.png', '2023-03-08 21:07:11', '2023-03-08 21:46:40');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '', NULL, '$2y$10$wcCRjkQ8SbHpnJHVysCS/OF/mebIs1AAx4MdbeUwwpYDLGWJ.9vnW', '', NULL, '2023-03-07 10:35:32', '2023-03-07 10:35:32'),
(6, 'Phidias', 'gapbecometrader2@gmail.com', NULL, '$2y$10$gFekutGULLunLGG6B8YAq.F9xfY07z7x0q.v.s03sGiav1ERaN0IW', '68852425', NULL, '2023-03-07 13:45:54', '2023-03-07 13:45:54'),
(9, 'Phidias', 'phidiasgbaguidi@gmail.com', NULL, '$2y$10$Lxd8wNLvs/KfNjW68dteBOB.h9Sf7QtZl1hbrrTNq0wklobgTiQDC', '90985360', NULL, '2023-03-07 14:35:09', '2023-03-07 14:35:09'),
(13, 'Phidias', 'phidiasgbaguidi1@gmail.com', NULL, '$2y$10$ThbEwXbjQqqBExDj3SlTNe6/DkzloXZ3cR5t/EYeh4PZWgpDcCApq', '90985360', NULL, '2023-03-07 14:56:00', '2023-03-07 14:56:00'),
(14, 'Mario', 'mario@gmail.com', NULL, '$2y$10$pQX7QAHAQ3yXKtcPoWtXreA4iQhCKOlJF5MtqlU4cBas6G.GKaZB.', '900000000', NULL, '2023-03-08 07:04:48', '2023-03-08 07:04:48'),
(24, 'Gap', 'gapbecometader@gmail.com', NULL, '$2y$10$BwpBtVYG/SoLe.y.DbM5RuG2GOv6RQhg14zcuYBw0NtwgawuRWcZS', '68852425', NULL, '2023-03-08 12:03:21', '2023-03-08 12:03:21'),
(25, 'Phidias', 'lecaxiscle@gmail.com', NULL, '$2y$10$t/5uEAGJvi1uL2ezk4xgVe2QFRo70z6ikLErxpZlrhImqlMNmcnWS', '29968852425', NULL, '2023-03-10 07:22:55', '2023-03-10 07:22:55'),
(26, 'Test2', 'test@gfh.com', NULL, '$2y$10$lhDtmNFwnVPYjQPV2Jx5XO.Ry/HpFbolfkTSFTVI.kK6SidKnJb3G', '2048789763', NULL, '2023-03-10 08:24:07', '2023-03-10 08:24:07'),
(29, 'Test2', 'test@gfdh.com', NULL, '$2y$10$/jllEvlnvIiMlaDYGGaWauyPmy1wJyxNdBEBBlwXo1nqVH9OnTML6', '576598523', NULL, '2023-03-10 08:30:19', '2023-03-10 08:30:19'),
(34, 'Phidias2002', 'gapbecometrader@gmail.com', '2023-03-12 08:58:39', '$2y$10$.TXt2eWLOYFNFCKiHKEjOe0e6a8IvT60yAcCi6.uMmTYcnr6w4Pla', '48562584', NULL, '2023-03-12 08:55:39', '2023-03-12 16:41:33');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

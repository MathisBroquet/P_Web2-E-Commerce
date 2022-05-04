-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 04 mai 2022 à 13:26
-- Version du serveur :  5.7.11
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_p_web2_ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2022_04_01_121652_create_t_categories_table', 1),
(14, '2022_04_01_121826_create_t_authors_table', 3),
(16, '2022_04_01_121853_create_t_haves_table', 5),
(17, '2022_04_01_121813_create_t_contains_table', 6),
(18, '2022_04_01_121727_create_t_users_table', 7),
(19, '2022_04_01_121910_create_t_orders_table', 8),
(20, '2022_04_01_121841_create_t_sessions_table', 9),
(21, '2022_04_01_121740_create_t_articles_table', 10),
(22, '2022_04_01_121756_create_t_baskets_table', 11);

-- --------------------------------------------------------

--
-- Structure de la table `t_article`
--

CREATE TABLE `t_article` (
  `idArticle` bigint(20) UNSIGNED NOT NULL,
  `artName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artDescription` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artPathToImage` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artPrice` double(8,2) NOT NULL,
  `artRealeseDate` date NOT NULL,
  `FKAuthor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `t_article`
--

INSERT INTO `t_article` (`idArticle`, `artName`, `artDescription`, `artPathToImage`, `artPrice`, `artRealeseDate`, `FKAuthor`, `created_at`, `updated_at`) VALUES
(1, 'Minecraft', 'Cube', 'C:\\', 20.00, '2011-11-18', 1, NULL, NULL),
(2, 'Grand Theft Auto V', 'On braque des banques et on tir avec des pistolets', 'C:\\', 30.00, '2013-09-17', 11, NULL, NULL),
(3, 'League of Legends', '5v5 sur une map avec des tours. Mathis est nul', 'C:\\', 0.00, '2009-10-27', 10, NULL, NULL),
(4, 'Tetris', 'musique russe, des formes qui tombent, une référence du gaming', 'C:\\', 0.00, '2008-07-09', 3, NULL, NULL),
(5, 'Wii Sports', 'La base', 'C:\\', 60.00, '2006-12-08', 4, NULL, NULL),
(6, 'Overwatch', 'I WANT TO BE TRACER, WHAT ABOUT A WIDOWMAKER. I\'M GONNA PLAY BASTION, NOT BASTION', 'C:\\', 19.99, '2016-05-24', 5, NULL, NULL),
(7, 'Sims', 'On manipule des gens avec des cristaux verts au-dessus de leur tête', 'C:\\', 24.90, '2014-09-02', 3, NULL, NULL),
(8, 'Mario Kart 8', 'vroum vroum voiture sur le circuit arc-en-ciel', 'C:\\', 64.95, '2014-05-29', 4, NULL, NULL),
(9, 'Phasmophobia', 'fantôme qui fait peur', 'C:\\', 14.50, '2020-09-18', 12, NULL, NULL),
(10, 'Among us', 'fait tes tâches et défend toi ou coupe les lights et ment autant que tu peux', 'C:\\', 5.00, '2018-06-15', 13, NULL, NULL),
(11, 'Satisfactory', 'Déforester pour automatiser', 'C:\\', 30.00, '2019-03-19', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_author`
--

CREATE TABLE `t_author` (
  `idAuthor` bigint(20) UNSIGNED NOT NULL,
  `autCompanyName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autMail` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autCountry` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `t_author`
--

INSERT INTO `t_author` (`idAuthor`, `autCompanyName`, `autMail`, `autCountry`, `created_at`, `updated_at`) VALUES
(1, 'Mojang', 'Mojang@gmail.com', 'Suède', NULL, NULL),
(2, 'Bandai Namco', 'BandaiNamco@hotmail.com', 'Japon', NULL, NULL),
(3, 'Electronics Arts', 'EA@Bluemail.com', 'Etats-Unis', NULL, NULL),
(4, 'Nintendo', 'nintendo@gmail.com', 'Japon', NULL, NULL),
(5, 'Activision-Blizzard', 'activisionBlizzard@gmail.com', 'Etats-Unis', NULL, NULL),
(6, 'Ubisoft', 'ubisoft@hotmail.com', 'France', NULL, NULL),
(7, 'Warner Interactive', 'WarnerInteractive@warnerbros.com', 'Etats-Unis', NULL, NULL),
(8, 'Sony', 'sony@gmail.com', 'Etats-Unis', NULL, NULL),
(9, 'Bethesda', 'bethesda@hotmail.com', 'Etats-Unis', NULL, NULL),
(10, 'Riot', 'riot@riot.com', 'Etats-Unis', NULL, NULL),
(11, 'Take Two', 'TakeTwo@bluemail.com', 'Etats-Unis', NULL, NULL),
(12, 'Kinetic games', 'kineticgames@gmail.com', 'United Kingdom', NULL, NULL),
(13, 'InnerSloth', 'innerSloth@innersloth.com', 'Etats-Unis', NULL, NULL),
(14, 'Coffe Stain Studios', 'coffestain@gmail.com', 'Suède', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_basket`
--

CREATE TABLE `t_basket` (
  `idBasket` bigint(20) UNSIGNED NOT NULL,
  `basNumberOfGame` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t_category`
--

CREATE TABLE `t_category` (
  `idCategory` bigint(20) UNSIGNED NOT NULL,
  `catName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `t_category`
--

INSERT INTO `t_category` (`idCategory`, `catName`, `created_at`, `updated_at`) VALUES
(1, 'FPS/TPS', NULL, NULL),
(2, 'Combat', NULL, NULL),
(3, 'Simulation', NULL, NULL),
(4, 'Plateforme', NULL, NULL),
(5, 'RPG', NULL, NULL),
(6, 'MMORPG', NULL, NULL),
(7, 'Sandbox', NULL, NULL),
(8, 'MOBA', NULL, NULL),
(9, 'Battle Royale', NULL, NULL),
(10, 'Action/Aventure', NULL, NULL),
(11, 'Beat Them All', NULL, NULL),
(12, 'Puzzlers', NULL, NULL),
(13, 'Réflexion', NULL, NULL),
(14, 'Horror', NULL, NULL),
(15, 'Rogue Like', NULL, NULL),
(16, 'Hack\'n\'slash', NULL, NULL),
(17, 'Party games', NULL, NULL),
(18, 'Rhytme', NULL, NULL),
(19, 'Voiture', NULL, NULL),
(20, 'Football', NULL, NULL),
(21, 'Sport', NULL, NULL),
(22, 'Survie', NULL, NULL),
(23, 'Solo', NULL, NULL),
(24, 'Multijoueur', NULL, NULL),
(25, 'Monde ouvert', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_contain`
--

CREATE TABLE `t_contain` (
  `FKBasket` bigint(20) UNSIGNED NOT NULL,
  `FKArticle` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t_have`
--

CREATE TABLE `t_have` (
  `FKCategory` bigint(20) UNSIGNED NOT NULL,
  `FKArticle` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `t_have`
--

INSERT INTO `t_have` (`FKCategory`, `FKArticle`, `created_at`, `updated_at`) VALUES
(10, 1, NULL, NULL),
(25, 1, NULL, NULL),
(23, 1, NULL, NULL),
(7, 1, NULL, NULL),
(22, 1, NULL, NULL),
(24, 1, NULL, NULL),
(10, 2, NULL, NULL),
(25, 2, NULL, NULL),
(24, 2, NULL, NULL),
(24, 3, NULL, NULL),
(2, 3, NULL, NULL),
(8, 3, NULL, NULL),
(13, 4, NULL, NULL),
(23, 4, NULL, NULL),
(24, 5, NULL, NULL),
(17, 5, NULL, NULL),
(21, 5, NULL, NULL),
(23, 5, NULL, NULL),
(1, 6, NULL, NULL),
(24, 6, NULL, NULL),
(10, 6, NULL, NULL),
(2, 6, NULL, NULL),
(8, 6, NULL, NULL),
(3, 7, NULL, NULL),
(7, 7, NULL, NULL),
(23, 7, NULL, NULL),
(24, 8, NULL, NULL),
(19, 8, NULL, NULL),
(17, 8, NULL, NULL),
(21, 8, NULL, NULL),
(14, 9, NULL, NULL),
(24, 9, NULL, NULL),
(23, 9, NULL, NULL),
(22, 9, NULL, NULL),
(3, 9, NULL, NULL),
(24, 10, NULL, NULL),
(17, 10, NULL, NULL),
(22, 10, NULL, NULL),
(25, 11, NULL, NULL),
(24, 11, NULL, NULL),
(23, 11, NULL, NULL),
(3, 11, NULL, NULL),
(7, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_order`
--

CREATE TABLE `t_order` (
  `idOrder` bigint(20) UNSIGNED NOT NULL,
  `ordPrice` double(8,2) NOT NULL,
  `ordDate` date NOT NULL,
  `FKBasket` bigint(20) UNSIGNED NOT NULL,
  `FKUser` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t_session`
--

CREATE TABLE `t_session` (
  `idSession` bigint(20) UNSIGNED NOT NULL,
  `FKUser` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE `t_user` (
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `useLogin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usePassword` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `useAdministrator` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `t_user`
--

INSERT INTO `t_user` (`idUser`, `useLogin`, `usePassword`, `useAdministrator`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'root', 1, NULL, NULL),
(2, 'user', 'password', 0, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_article`
--
ALTER TABLE `t_article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `t_article_fkauthor_foreign` (`FKAuthor`);

--
-- Index pour la table `t_author`
--
ALTER TABLE `t_author`
  ADD PRIMARY KEY (`idAuthor`);

--
-- Index pour la table `t_basket`
--
ALTER TABLE `t_basket`
  ADD PRIMARY KEY (`idBasket`);

--
-- Index pour la table `t_category`
--
ALTER TABLE `t_category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Index pour la table `t_contain`
--
ALTER TABLE `t_contain`
  ADD KEY `t_contain_fkbasket_foreign` (`FKBasket`),
  ADD KEY `t_contain_fkarticle_foreign` (`FKArticle`);

--
-- Index pour la table `t_have`
--
ALTER TABLE `t_have`
  ADD KEY `t_have_fkcategory_foreign` (`FKCategory`),
  ADD KEY `t_have_fkarticle_foreign` (`FKArticle`);

--
-- Index pour la table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `t_order_fkbasket_foreign` (`FKBasket`),
  ADD KEY `t_order_fkuser_foreign` (`FKUser`);

--
-- Index pour la table `t_session`
--
ALTER TABLE `t_session`
  ADD PRIMARY KEY (`idSession`),
  ADD KEY `t_session_fkuser_foreign` (`FKUser`);

--
-- Index pour la table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `t_article`
--
ALTER TABLE `t_article`
  MODIFY `idArticle` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `t_author`
--
ALTER TABLE `t_author`
  MODIFY `idAuthor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `t_basket`
--
ALTER TABLE `t_basket`
  MODIFY `idBasket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_category`
--
ALTER TABLE `t_category`
  MODIFY `idCategory` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `t_order`
--
ALTER TABLE `t_order`
  MODIFY `idOrder` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `t_session`
--
ALTER TABLE `t_session`
  MODIFY `idSession` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `idUser` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_article`
--
ALTER TABLE `t_article`
  ADD CONSTRAINT `t_article_fkauthor_foreign` FOREIGN KEY (`FKAuthor`) REFERENCES `t_author` (`idAuthor`) ON DELETE CASCADE;

--
-- Contraintes pour la table `t_contain`
--
ALTER TABLE `t_contain`
  ADD CONSTRAINT `t_contain_fkarticle_foreign` FOREIGN KEY (`FKArticle`) REFERENCES `t_article` (`idArticle`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_contain_fkbasket_foreign` FOREIGN KEY (`FKBasket`) REFERENCES `t_basket` (`idBasket`) ON DELETE CASCADE;

--
-- Contraintes pour la table `t_have`
--
ALTER TABLE `t_have`
  ADD CONSTRAINT `t_have_fkarticle_foreign` FOREIGN KEY (`FKArticle`) REFERENCES `t_article` (`idArticle`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_have_fkcategory_foreign` FOREIGN KEY (`FKCategory`) REFERENCES `t_category` (`idCategory`) ON DELETE CASCADE;

--
-- Contraintes pour la table `t_order`
--
ALTER TABLE `t_order`
  ADD CONSTRAINT `t_order_fkbasket_foreign` FOREIGN KEY (`FKBasket`) REFERENCES `t_basket` (`idBasket`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_order_fkuser_foreign` FOREIGN KEY (`FKUser`) REFERENCES `t_user` (`idUser`) ON DELETE CASCADE;

--
-- Contraintes pour la table `t_session`
--
ALTER TABLE `t_session`
  ADD CONSTRAINT `t_session_fkuser_foreign` FOREIGN KEY (`FKUser`) REFERENCES `t_user` (`idUser`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 09. jun 2019 ob 12.58
-- Različica strežnika: 10.1.36-MariaDB
-- Različica PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `projektbaza`
--

-- --------------------------------------------------------

--
-- Struktura tabele `kategorija`
--

CREATE TABLE `kategorija` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `kategorija`
--

INSERT INTO `kategorija` (`id`, `ime`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Struktura tabele `odgovori`
--

CREATE TABLE `odgovori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_vprasanja` bigint(20) UNSIGNED NOT NULL,
  `opis` varchar(255) NOT NULL,
  `vrednost_odgovor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `odgovori`
--

INSERT INTO `odgovori` (`id`, `id_vprasanja`, `opis`, `vrednost_odgovor`) VALUES
(37, 33, 'a se lahk stusira', 100),
(36, 33, 'zelo', 20),
(35, 33, 'da', 99);

-- --------------------------------------------------------

--
-- Struktura tabele `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_vprasanja` bigint(11) NOT NULL,
  `id_uporabnik` bigint(20) NOT NULL,
  `cas_datum_opravljanja` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele `uporabnik`
--

CREATE TABLE `uporabnik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `uporabnik`
--

INSERT INTO `uporabnik` (`id`, `mail`, `pass`, `tip`) VALUES
(1, 'dodi@gmail.com', 'ca26331c6bfbf9487a7cde0f1f95644449e83baa', 'user'),
(20, 'mjav@gmail.com', '7f9acd7ab1883a24ecfbfba69fd9c59f1de18a53', 'user'),
(15, 'dd@fdd', '70c881d4a26984ddce795f6f71817c9cf4480e79', 'user'),
(16, 'test@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'user'),
(17, 'test@gmail.com', '4150953a511f9f6d74e17d5ac22e8be54e9fab56', 'user'),
(18, 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(19, 'alen@gmail.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'user'),
(21, 'jan@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'user'),
(23, 'janko@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user'),
(28, 'vita.visic@gmail.com', '79788253cd3351f39a06b1b9a9d8429bf4a6a5ae', ''),
(26, 'pegasus221krivec@gmail.com', 'd586b852a761ccc85d7edd958e74f270b6d46140', 'user'),
(29, 'dominiksmrdi@gmail.com', 'b8944fd3399423b2e2065583c48515652c5a5a8c', '');

-- --------------------------------------------------------

--
-- Struktura tabele `uporabnik_odgovor`
--

CREATE TABLE `uporabnik_odgovor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_odgovori` bigint(20) UNSIGNED NOT NULL,
  `id_uporabnik` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele `vprasanja`
--

CREATE TABLE `vprasanja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategorija_id` bigint(20) UNSIGNED NOT NULL,
  `vprasanje` varchar(255) NOT NULL,
  `vrednost` int(11) NOT NULL,
  `max_cas` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `vprasanja`
--

INSERT INTO `vprasanja` (`id`, `kategorija_id`, `vprasanje`, `vrednost`, `max_cas`) VALUES
(33, 1, 'a dominik smrdi', 69, '2019-06-07 16:47:39');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksi tabele `odgovori`
--
ALTER TABLE `odgovori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_vprasanja` (`id_vprasanja`);

--
-- Indeksi tabele `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksi tabele `uporabnik`
--
ALTER TABLE `uporabnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksi tabele `uporabnik_odgovor`
--
ALTER TABLE `uporabnik_odgovor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_odgovori` (`id_odgovori`),
  ADD KEY `id_uporabnik` (`id_uporabnik`);

--
-- Indeksi tabele `vprasanja`
--
ALTER TABLE `vprasanja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `kategorija_id` (`kategorija_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT tabele `odgovori`
--
ALTER TABLE `odgovori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT tabele `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `uporabnik`
--
ALTER TABLE `uporabnik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT tabele `uporabnik_odgovor`
--
ALTER TABLE `uporabnik_odgovor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `vprasanja`
--
ALTER TABLE `vprasanja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

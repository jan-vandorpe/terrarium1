-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 08 okt 2015 om 08:39
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `terrarium`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE IF NOT EXISTS `games` (
`id` int(11) NOT NULL,
  `grootte` int(11) NOT NULL,
  `dag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`id`, `grootte`, `dag`) VALUES
(1, 6, 0),
(2, 6, 0),
(3, 6, 0),
(4, 8, 0),
(5, 10, 0),
(6, 8, 0),
(7, 5, 0),
(8, 8, 0),
(9, 8, 0),
(10, 9, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `organismen`
--

CREATE TABLE IF NOT EXISTS `organismen` (
`id` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `soort` int(11) NOT NULL,
  `kracht` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `rij` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `organismen`
--

INSERT INTO `organismen` (`id`, `gameid`, `soort`, `kracht`, `kolom`, `rij`) VALUES
(1, 0, 3, 1, 1, 2),
(2, 0, 3, 1, 6, 4),
(3, 0, 3, 1, 2, 2),
(4, 0, 2, 1, 5, 1),
(5, 0, 2, 1, 5, 2),
(6, 0, 2, 1, 6, 1),
(7, 0, 2, 1, 3, 1),
(8, 0, 2, 1, 1, 6),
(9, 0, 1, 1, 1, 1),
(10, 0, 1, 1, 1, 4),
(11, 1, 3, 1, 6, 4),
(12, 1, 3, 1, 5, 1),
(13, 1, 2, 1, 1, 3),
(14, 1, 2, 1, 5, 5),
(15, 1, 2, 1, 2, 3),
(16, 1, 2, 1, 3, 2),
(17, 1, 2, 1, 4, 4),
(18, 1, 1, 1, 3, 4),
(19, 2, 3, 1, 5, 2),
(20, 2, 3, 1, 1, 1),
(21, 2, 3, 1, 4, 2),
(22, 2, 2, 1, 5, 1),
(23, 2, 2, 1, 4, 1),
(24, 2, 2, 1, 3, 4),
(25, 2, 1, 1, 3, 1),
(26, 3, 3, 1, 5, 3),
(27, 3, 3, 1, 4, 4),
(28, 3, 3, 1, 4, 6),
(29, 3, 3, 1, 5, 5),
(30, 3, 3, 1, 2, 5),
(31, 3, 2, 1, 2, 6),
(32, 3, 2, 1, 6, 6),
(33, 3, 2, 1, 6, 1),
(34, 3, 2, 1, 6, 2),
(35, 3, 1, 1, 1, 3),
(36, 4, 3, 1, 6, 8),
(37, 4, 3, 1, 3, 1),
(38, 4, 3, 1, 7, 6),
(39, 4, 2, 1, 8, 7),
(40, 4, 2, 1, 7, 2),
(41, 4, 2, 1, 2, 4),
(42, 4, 2, 1, 3, 8),
(43, 4, 2, 1, 1, 6),
(44, 4, 1, 1, 4, 7),
(45, 5, 3, 1, 6, 1),
(46, 5, 3, 1, 7, 2),
(47, 5, 3, 1, 8, 5),
(48, 5, 2, 1, 1, 1),
(49, 5, 2, 1, 2, 9),
(50, 5, 2, 1, 7, 4),
(51, 5, 2, 1, 10, 10),
(52, 5, 1, 1, 7, 3),
(53, 5, 1, 1, 6, 8),
(54, 6, 3, 1, 2, 2),
(55, 6, 3, 1, 3, 5),
(56, 6, 3, 1, 8, 8),
(57, 6, 3, 1, 8, 3),
(58, 6, 2, 1, 7, 2),
(59, 6, 2, 1, 5, 4),
(60, 6, 2, 1, 1, 3),
(61, 6, 1, 1, 2, 6),
(62, 6, 1, 1, 6, 5),
(63, 7, 3, 1, 5, 3),
(64, 7, 3, 1, 2, 2),
(65, 7, 3, 1, 2, 4),
(66, 7, 3, 1, 5, 4),
(67, 7, 3, 1, 5, 1),
(68, 7, 2, 1, 1, 2),
(69, 7, 2, 1, 1, 3),
(70, 7, 2, 1, 4, 3),
(71, 7, 1, 1, 4, 5),
(72, 7, 1, 1, 3, 4),
(73, 8, 3, 1, 5, 5),
(74, 8, 3, 1, 1, 1),
(75, 8, 2, 1, 2, 1),
(76, 8, 2, 1, 7, 7),
(77, 8, 2, 1, 6, 8),
(78, 8, 2, 1, 7, 4),
(79, 8, 1, 1, 6, 2),
(80, 9, 3, 1, 2, 7),
(81, 9, 3, 1, 3, 4),
(82, 9, 3, 1, 2, 8),
(83, 9, 3, 1, 4, 4),
(84, 9, 2, 1, 5, 3),
(85, 9, 2, 1, 4, 2),
(86, 9, 2, 1, 3, 6),
(87, 9, 2, 1, 7, 4),
(88, 9, 2, 1, 7, 3),
(89, 9, 1, 1, 1, 3),
(90, 9, 1, 1, 8, 1),
(91, 10, 3, 1, 5, 3),
(92, 10, 3, 1, 1, 6),
(93, 10, 3, 1, 6, 3),
(94, 10, 3, 1, 7, 9),
(95, 10, 3, 1, 1, 5),
(96, 10, 2, 1, 1, 3),
(97, 10, 2, 1, 9, 9),
(98, 10, 2, 1, 7, 8),
(99, 10, 1, 1, 6, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `soort`
--

CREATE TABLE IF NOT EXISTS `soort` (
  `id` int(11) NOT NULL,
  `soort` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `soort`
--

INSERT INTO `soort` (`id`, `soort`, `image`) VALUES
(1, 'Plant', 'img/Plant.svg'),
(2, 'Herbivoor', 'img/Herbivoor_L.svg'),
(3, 'Carnivoor', 'img/Carnivoor.svg'),
(4, 'Omnivoor', 'img/Omnivoor.svg'),
(5, 'Omnomnivoor', 'img/Omnomnivoor.svg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `organismen`
--
ALTER TABLE `organismen`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `soort`
--
ALTER TABLE `soort`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT voor een tabel `organismen`
--
ALTER TABLE `organismen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

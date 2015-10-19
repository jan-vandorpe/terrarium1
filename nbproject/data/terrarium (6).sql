-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 12 okt 2015 om 08:38
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
(1, 8, 1),
(2, 6, 1),
(3, 7, 1),
(4, 5, 1),
(6, 5, 0),
(7, 5, 0),
(8, 5, 1),
(9, 5, 1),
(10, 5, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `organismen`
--

INSERT INTO `organismen` (`id`, `gameid`, `soort`, `kracht`, `kolom`, `rij`) VALUES
(11, 1, 3, 5, 8, 8),
(12, 1, 3, 5, 8, 5),
(13, 1, 3, 1, 4, 1),
(14, 1, 3, 1, 5, 4),
(15, 1, 2, 5, 4, 8),
(16, 1, 2, 1, 7, 8),
(17, 1, 2, 1, 8, 6),
(18, 1, 2, 1, 8, 7),
(19, 1, 1, 1, 2, 8),
(20, 1, 1, 1, 4, 3),
(21, 2, 3, 1, 2, 5),
(22, 3, 3, 1, 6, 3),
(23, 3, 3, 1, 4, 5),
(24, 3, 3, 1, 2, 1),
(25, 3, 2, 1, 3, 6),
(26, 3, 2, 1, 1, 6),
(27, 3, 2, 1, 2, 2),
(28, 3, 1, 1, 2, 5),
(29, 3, 1, 1, 2, 6),
(30, 3, 3, 1, 6, 1),
(31, 3, 3, 1, 7, 5),
(32, 3, 3, 1, 4, 2),
(33, 3, 3, 1, 5, 5),
(34, 3, 3, 1, 6, 7),
(35, 3, 2, 1, 7, 3),
(36, 3, 2, 1, 2, 4),
(37, 3, 1, 1, 5, 6),
(38, 3, 1, 1, 1, 7),
(39, 4, 3, 1, 2, 5),
(40, 4, 3, 1, 3, 2),
(41, 4, 3, 1, 2, 2),
(42, 4, 3, 1, 5, 4),
(43, 4, 2, 1, 3, 4),
(44, 4, 2, 1, 3, 1),
(45, 4, 2, 1, 4, 3),
(46, 4, 2, 1, 4, 1),
(47, 4, 1, 1, 5, 1),
(48, 4, 1, 1, 2, 3),
(58, 6, 3, 1, 3, 2),
(59, 6, 3, 1, 3, 3),
(60, 6, 3, 1, 3, 5),
(61, 6, 3, 1, 5, 1),
(62, 6, 3, 1, 4, 5),
(63, 6, 2, 1, 4, 2),
(64, 6, 2, 1, 3, 4),
(65, 6, 2, 1, 2, 5),
(66, 6, 2, 1, 1, 2),
(67, 6, 1, 1, 1, 5),
(68, 6, 1, 1, 2, 2),
(69, 6, 1, 1, 5, 3),
(70, 7, 3, 1, 3, 2),
(71, 7, 3, 1, 2, 5),
(72, 7, 3, 1, 2, 1),
(73, 7, 3, 1, 2, 4),
(74, 7, 3, 1, 5, 2),
(75, 7, 2, 1, 1, 2),
(76, 7, 2, 1, 5, 1),
(77, 7, 2, 1, 3, 3),
(78, 7, 1, 1, 4, 2),
(79, 7, 1, 1, 4, 5),
(80, 8, 3, 1, 2, 5),
(81, 8, 3, 1, 5, 2),
(82, 8, 2, 1, 1, 3),
(83, 8, 2, 1, 3, 1),
(84, 8, 2, 1, 2, 3),
(85, 8, 2, 1, 1, 4),
(86, 8, 2, 1, 2, 2),
(87, 8, 1, 1, 4, 2),
(88, 8, 1, 1, 2, 1),
(89, 1, 1, 1, 5, 1),
(90, 1, 1, 1, 6, 3),
(91, 1, 1, 1, 1, 7),
(92, 1, 1, 1, 7, 4),
(93, 1, 1, 1, 1, 1),
(94, 1, 1, 1, 1, 8),
(95, 1, 1, 1, 2, 5),
(96, 1, 1, 1, 2, 8),
(97, 1, 1, 1, 6, 6),
(98, 1, 1, 1, 6, 4),
(99, 1, 1, 1, 5, 2),
(100, 1, 1, 1, 7, 2),
(101, 1, 1, 1, 3, 6),
(102, 1, 1, 1, 6, 5),
(103, 1, 1, 1, 3, 2),
(104, 1, 1, 1, 5, 8),
(105, 1, 1, 1, 5, 7),
(106, 1, 1, 1, 8, 1),
(107, 1, 1, 1, 2, 7),
(108, 1, 1, 1, 3, 8),
(109, 1, 1, 1, 4, 5),
(110, 1, 1, 1, 2, 6),
(111, 1, 1, 1, 8, 3),
(112, 1, 1, 1, 1, 5),
(113, 1, 1, 1, 7, 3),
(114, 1, 1, 1, 5, 8),
(115, 1, 1, 1, 3, 1),
(116, 1, 1, 1, 8, 8),
(117, 1, 1, 1, 3, 3),
(118, 1, 1, 1, 3, 7),
(119, 1, 1, 1, 4, 4),
(120, 1, 1, 1, 3, 3),
(121, 1, 1, 1, 3, 7),
(122, 1, 1, 1, 4, 4),
(123, 2, 1, 1, 5, 5),
(124, 2, 1, 1, 5, 3),
(125, 2, 1, 1, 6, 4),
(126, 2, 1, 1, 2, 5),
(127, 2, 1, 1, 6, 6),
(128, 2, 1, 1, 4, 1),
(129, 2, 1, 1, 3, 6),
(130, 2, 1, 1, 6, 5),
(131, 2, 1, 1, 6, 1),
(132, 2, 1, 1, 1, 4),
(133, 2, 1, 1, 4, 6),
(134, 9, 3, 1, 4, 4),
(135, 9, 3, 1, 5, 5),
(136, 9, 2, 3, 4, 5),
(137, 9, 2, 2, 5, 1),
(138, 9, 2, 1, 5, 4),
(139, 9, 2, 4, 5, 2),
(140, 9, 2, 1, 5, 3),
(141, 9, 1, 1, 3, 1),
(142, 9, 1, 1, 4, 1),
(143, 9, 1, 1, 2, 2),
(144, 9, 1, 1, 5, 1),
(145, 9, 1, 1, 3, 2),
(146, 9, 1, 1, 3, 5),
(147, 9, 1, 1, 2, 1),
(148, 9, 1, 1, 2, 5),
(149, 9, 1, 1, 2, 4),
(150, 9, 1, 1, 5, 2),
(151, 9, 1, 1, 2, 3),
(152, 9, 1, 1, 4, 5),
(153, 9, 1, 1, 1, 2),
(154, 9, 1, 1, 1, 1),
(155, 9, 1, 1, 4, 2),
(156, 9, 1, 1, 1, 5),
(157, 9, 1, 1, 4, 2),
(158, 9, 1, 1, 1, 5),
(159, 10, 3, 1, 3, 5),
(160, 10, 3, 1, 3, 3),
(161, 10, 3, 1, 1, 5),
(162, 10, 2, 3, 5, 2),
(163, 10, 2, 1, 2, 3),
(164, 10, 1, 1, 5, 1),
(165, 10, 1, 1, 5, 4),
(166, 10, 1, 1, 2, 5),
(167, 10, 1, 1, 2, 2),
(168, 10, 1, 1, 4, 5),
(169, 10, 1, 1, 1, 1),
(170, 10, 1, 1, 2, 1),
(171, 10, 1, 1, 5, 3),
(172, 10, 1, 1, 5, 5),
(173, 10, 1, 1, 4, 3),
(174, 10, 1, 1, 5, 2),
(175, 10, 1, 1, 4, 1),
(176, 10, 1, 1, 2, 4),
(177, 10, 1, 1, 1, 3),
(178, 10, 1, 1, 1, 4),
(179, 10, 1, 1, 1, 2),
(180, 10, 1, 1, 3, 1),
(181, 10, 1, 1, 4, 4),
(182, 10, 1, 1, 3, 4),
(183, 10, 1, 1, 3, 2),
(184, 10, 1, 1, 4, 2);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=185;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

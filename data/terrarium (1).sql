-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 30 sep 2015 om 09:34
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `organismen`
--

INSERT INTO `organismen` (`id`, `gameid`, `soort`, `kracht`, `kolom`, `rij`) VALUES
(1, 0, 3, 0, 1, 2),
(2, 0, 3, 0, 6, 4),
(3, 0, 3, 0, 2, 2),
(4, 0, 2, 0, 5, 1),
(5, 0, 2, 0, 5, 2),
(6, 0, 2, 0, 6, 1),
(7, 0, 2, 0, 3, 1),
(8, 0, 2, 0, 1, 6),
(9, 0, 1, 0, 1, 1),
(10, 0, 1, 0, 1, 4);

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
(1, 'Plant', '/img/plant.png'),
(2, 'Herbivoor', '/img/herbivoor.gif'),
(3, 'Carnivoor', '/img/carnivoor.gif'),
(4, 'Omnivoor', '/img/Omnivoor.gif'),
(5, 'Omnomnivoor', '/img/omnomnivoor.gif');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `organismen`
--
ALTER TABLE `organismen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

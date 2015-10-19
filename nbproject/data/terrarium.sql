-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 29 sep 2015 om 10:39
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
CREATE DATABASE IF NOT EXISTS `terrarium` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `terrarium`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `organismen`
--

DROP TABLE IF EXISTS `organismen`;
CREATE TABLE IF NOT EXISTS `organismen` (
`ID` int(11) NOT NULL,
  `soort` int(11) NOT NULL,
  `kracht` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `rij` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `soort`
--

DROP TABLE IF EXISTS `soort`;
CREATE TABLE IF NOT EXISTS `soort` (
  `soortID` int(11) NOT NULL,
  `soort` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `organismen`
--
ALTER TABLE `organismen`
 ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `soort`
--
ALTER TABLE `soort`
 ADD PRIMARY KEY (`soortID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `organismen`
--
ALTER TABLE `organismen`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

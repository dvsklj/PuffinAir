-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Dez 2018 um 10:27
-- Server-Version: 10.1.32-MariaDB
-- PHP-Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `puffinair`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fluege`
--

CREATE TABLE `fluege` (
  `PK_Fluege` int(11) NOT NULL,
  `Abflugszeit` datetime DEFAULT NULL,
  `Ankunftszeit` datetime DEFAULT NULL,
  `Abflugsort` varchar(15) DEFAULT NULL,
  `Ankunftsort` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `fluege`
--

INSERT INTO `fluege` (`PK_Fluege`, `Abflugszeit`, `Ankunftszeit`, `Abflugsort`, `Ankunftsort`) VALUES
(1, '2018-12-12 09:00:00', '2018-12-12 10:00:00', 'Keflavik', 'London Heathrow');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fluege`
--
ALTER TABLE `fluege`
  ADD PRIMARY KEY (`PK_Fluege`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

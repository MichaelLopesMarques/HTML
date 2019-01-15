-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Jan 2019 um 17:27
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mytime login-daten`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `plz` varchar(255) NOT NULL,
  `ort` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `nachname`, `vorname`, `email`, `plz`, `ort`, `password`) VALUES
(5, 'Marques', 'Michael', 'michael.marques.1458@gmail.com', '59065', 'Hamm', '4a7d1ed414474e4033ac29ccb8653d9b'),
(6, 'wessel', 'leon', 'leon.wessel@wessel.de', '56666', 'Hamm', '4a7d1ed414474e4033ac29ccb8653d9b'),
(7, 'katzenberg', 'Henri', 'henr@schul.de', '95049', 'Soest', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'bla', 'blalal', 'adasdasd@sadsad.de', '59065', 'Hamm', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Marques', 'Michael', 'michael.marques.1458@gmail.com', '59065', 'Hamm', '4a7d1ed414474e4033ac29ccb8653d9b'),
(10, 'blalala', 'lalalalala', 'lalalal@gmail.com', '66666', 'hÃ¶lle', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'admin', 'admin', 'admin@admin.admin', '59065', 'Hamm', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'Marques', 'Michael', 'michael.marques.1458@gmail.com', '59065', 'Hamm', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'fitz', 'fitz', 'fitz@fitz.de', 'fitz', 'fitz', '9da88d6fc474aa96c23c8aa5c87d4bcc');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

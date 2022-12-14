-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 14, 2022 alle 12:46
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  `genere` varchar(20) NOT NULL,
  `regista` varchar(50) NOT NULL,
  `anno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `film`
--

INSERT INTO `film` (`id`, `titolo`, `genere`, `regista`, `anno`) VALUES
(1, 'Star Wars I - La minaccia fantasma', 'Sci-fi/Azione', 'George Lucas', 1999),
(2, 'Star Wars II - L`attacco dei cloni', 'Sci-fi/Azione', 'George Lucas', 2002),
(3, 'Star wars III - La vendetta dei sith', 'Sci-fi/Azione', 'George Lucas', 2005),
(4, 'Shrek', 'Animazione/Fantasy', 'Andrew Adamson', 2001),
(5, 'Il cavaliere oscuro', 'Azione/Avventura', 'Christopher Nolan', 2008),
(6, 'Deadpool', 'Azione/Avventura', 'Tim Miller', 2016);

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `email` varchar(50) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `posti` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`email`, `titolo`, `data`, `posti`) VALUES
('$email', '$titolo', '0000-00-00', 0),
('6190167@itisrossi.vi.it', 'Star Wars II - L`attacco dei cloni', '2022-12-14', 2),
('6190167@itisrossi.vi.it', 'Shrek', '2022-12-14', 8),
('am@azzo.it', 'Star Wars I - La minaccia fantasma', '2022-12-14', 20);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `nome`, `cognome`, `email`, `password`) VALUES
(1, 'Diego', 'Lazzaretto', '6190167@itisrossi.vi.it', 'sas'),
(33, 'Alessandro', 'Michelazzo', 'am@azzo.it', 'qwerty');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`,`titolo`,`regista`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

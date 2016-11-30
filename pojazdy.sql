-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Lis 2016, 11:24
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pojazdy`
--
CREATE DATABASE IF NOT EXISTS `pojazdy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pojazdy`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komis`
--

CREATE TABLE `komis` (
  `id_pojazdu` int(6) NOT NULL,
  `marka` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `rok_produkcji` int(4) NOT NULL,
  `cena` float NOT NULL,
  `kolor` varchar(20) NOT NULL,
  `nr_wlasciciela` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `komis`
--

INSERT INTO `komis` (`id_pojazdu`, `marka`, `model`, `rok_produkcji`, `cena`, `kolor`, `nr_wlasciciela`) VALUES
(6, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(8, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(11, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(12, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(13, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(14, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(18, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(19, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(21, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(22, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(23, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(24, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(25, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(26, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(27, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(28, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(29, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(30, 'WV', 'Passat', 1993, 20000, 'czerwony', 3),
(71, 'Opel', 'Astra', 1990, 4200, 'niebieski', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `komis`
--
ALTER TABLE `komis`
  ADD PRIMARY KEY (`id_pojazdu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `komis`
--
ALTER TABLE `komis`
  MODIFY `id_pojazdu` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

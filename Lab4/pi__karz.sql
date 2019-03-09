-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Lis 2018, 10:42
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `piłka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `piłkarz`
--

CREATE TABLE `pilkarz` (
  `id` int(11) NOT NULL,
  `Kraj` text COLLATE utf8_polish_ci NOT NULL,
  `Imie` text COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `Pozycja` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `piłkarz`
--

INSERT INTO `pilkarz` (`id`, `Kraj`, `Imie`, `Nazwisko`, `Pozycja`) VALUES
(1, 'Argentyna', 'Leo', 'Meszi', 'Napastnik'),
(2, 'Portugalia', 'Czristiano', 'Ronaldo', 'Napastnik'),
(3, 'Włochy', 'Mario', 'Balotelli', 'Napastnik'),
(4, 'Anglia', 'Rio', 'Ferdinand', 'Obrońca'),
(5, 'Dania', 'Cristian', 'Eriksen', 'Pomocnik'),
(6, 'Francja', 'Paul', 'Pogba', 'Pomocnik'),
(7, 'Hiszpania', 'David', 'De Gea', 'Bramkarz'),
(8, 'Holandia', 'Virgil', 'van Dijk', 'Obrońca'),
(9, 'Polska', 'Artur', 'Boruc', 'Bramkarz'),
(10, 'Anglia', 'Dele', 'Alli', 'Pomocnik'),
(11, 'Czechy', 'Petr', 'Cech', 'Bramkarz'),
(12, 'WKS', 'Eric', 'Bailly', 'Obrońca');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `piłkarz`
--
ALTER TABLE `pilkarz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `piłkarz`
--
ALTER TABLE `pilkarz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

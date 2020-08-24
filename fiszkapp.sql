-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Sie 2020, 15:17
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `fiszkapp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czlowiek`
--

CREATE TABLE `czlowiek` (
  `lp` int(10) UNSIGNED NOT NULL,
  `polski` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `angielski` text CHARACTER SET latin1 NOT NULL,
  `zrodlo` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `odpowiedz` int(11) NOT NULL,
  `kryterium` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `licznik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `czlowiek`
--

INSERT INTO `czlowiek` (`lp`, `polski`, `angielski`, `zrodlo`, `odpowiedz`, `kryterium`, `licznik`) VALUES
(1, 'adres', 'address', 'Longman', 0, 'Czlowiek', NULL),
(2, 'wiek', 'age', 'Longman', 0, 'Czlowiek', NULL),
(3, 'data / miejsce urodzenia', 'date / place of birth', 'Longman', 0, 'Czlowiek', NULL),
(4, 'rozwiedziony', 'divorced', 'Longman', 0, 'Czlowiek', NULL),
(5, 'imię', 'first name', 'Longman', 0, 'Czlowiek', NULL),
(6, 'zawód', 'job', 'Longman', 0, 'Czlowiek', NULL),
(7, 'płci męskiej / żeńskiej', 'male / female', 'Longman', 0, 'Czlowiek', NULL),
(8, 'mężczyzna / mężczyźni', 'man / men', 'Longman', 0, 'Czlowiek', NULL),
(9, 'stan cywilny', 'marital status', 'Longman', 0, 'Czlowiek', NULL),
(10, 'żonaty / zamężna', 'married', 'Longman', 0, 'Czlowiek', NULL),
(11, 'narodowość', 'nationality', 'Longman', 0, 'Czlowiek', NULL),
(12, 'człowiek / ludzie', 'person / people', 'Longman', 0, 'Czlowiek', NULL),
(13, 'płeć', 'sex', 'Longman', 0, 'Czlowiek', NULL),
(14, 'wolny', 'single', 'Longman', 0, 'Czlowiek', 10),
(15, 'nazwisko', 'surname', 'Longman', 0, 'Czlowiek', 0),
(16, 'wdowa / wdowiec', 'widow / widower', 'Longman', 0, 'Czlowiek', 0),
(17, 'kobieta / kobiety', 'woman / women', 'Longman', 0, 'Czlowiek', 0),
(18, 'policzek', 'cheek', 'Longman', 0, 'Czlowiek', 0),
(19, 'broda / podbródek', 'chin', 'Longman', 0, 'Czlowiek', 0),
(20, 'ucho', 'ear', 'Longman', 0, 'Czlowiek', 0),
(21, 'oko', 'eye', 'Longman', 0, 'Czlowiek', 0),
(22, 'brew', 'eyebrow', 'Longman', 0, 'Czlowiek', 0),
(23, 'rzęsa', 'eyelash', 'Longman', 0, 'Czlowiek', 0),
(24, 'czoło', 'forehead', 'Longman', 0, 'Czlowiek', 0),
(25, 'wargi', 'lips', 'Longman', 0, 'Czlowiek', NULL),
(26, 'usta', 'mouth', 'Longman', 0, 'Czlowiek', NULL),
(27, 'nos', 'nose', 'Longman', 0, 'Czlowiek', NULL),
(28, 'język', 'tongue', 'Longman', 0, 'Czlowiek', NULL),
(29, 'ząb / zęby', 'tooth / teeth', 'Longman', 0, 'Czlowiek', NULL),
(30, 'ręka (do ramienia)', 'arm', 'Longman', 0, 'Czlowiek', NULL),
(31, 'plecy', 'back', 'Longman', 0, 'Czlowiek', NULL),
(32, 'łokieć', 'elbow', 'Longman', 0, 'Czlowiek', NULL),
(33, 'palec (u ręki)', 'finger', 'Longman', 0, 'Czlowiek', NULL),
(34, 'paznokieć', 'fingernail', 'Longman', 0, 'Czlowiek', NULL),
(35, 'stopa; stopy', 'foot; feet', 'Longman', 0, 'Czlowiek', NULL),
(36, 'dłoń', 'hand', 'Longman', 0, 'Czlowiek', NULL),
(37, 'głowa', 'head', 'Longman', 0, 'Czlowiek', NULL),
(38, 'kolano', 'knee', 'Longman', 0, 'Czlowiek', NULL),
(39, 'noga', 'leg', 'Longman', 0, 'Czlowiek', NULL),
(40, 'szyja', 'neck', 'Longman', 0, 'Czlowiek', NULL),
(41, 'ramię', 'shoulder', 'Longman', 0, 'Czlowiek', NULL),
(42, 'skóra', 'skin', 'Longman', 0, 'Czlowiek', NULL),
(43, 'kciuk', 'thumb', 'Longman', 0, 'Czlowiek', NULL),
(44, 'palec (u nogi)', 'toe', 'Longman', 0, 'Czlowiek', NULL),
(45, '(nie) atrakcyjny', '(un) attractive', 'Longman', 0, 'Czlowiek', NULL),
(46, 'piękny', 'beautiful', 'Longman', 0, 'Czlowiek', NULL),
(47, 'atrakcyjny', 'good-looking', 'Longman', 0, 'Czlowiek', NULL),
(48, 'przystojny', 'handsome', 'Longman', 0, 'Czlowiek', NULL),
(49, 'ładny', 'pretty', 'Longman', 0, 'Czlowiek', NULL),
(50, 'brzydki', 'ugly', 'Longman', 0, 'Czlowiek', NULL),
(51, 'w podeszłym wieku', 'elderly', 'Longman', 0, 'Czlowiek', NULL),
(52, 'w średnim wieku', 'middle-aged', 'Longman', 0, 'Czlowiek', NULL),
(53, 'w średnim wieku', 'middle-aged', 'Longman', 0, 'Czlowiek', NULL),
(54, 'stary', 'old', 'Longman', 0, 'Czlowiek', NULL),
(55, 'nastolatek', 'teenager', 'Longman', 0, 'Czlowiek', NULL),
(56, 'młody', 'young', 'Longman', 0, 'Czlowiek', NULL),
(57, 'średniego wzrostu', 'medium height', 'Longman', 0, 'Czlowiek', NULL),
(58, 'niski', 'short', 'Longman', 0, 'Czlowiek', NULL),
(59, 'wysoki', 'tall', 'Longman', 0, 'Czlowiek', NULL),
(60, 'gruby', 'fat', 'Longman', 0, 'Czlowiek', NULL),
(61, 'wysportowany', 'fit', 'Longman', 0, 'Czlowiek', NULL),
(62, 'mieć dobrą figurę', 'have a good figure', 'Longman', 0, 'Czlowiek', NULL),
(63, 'pulchny', 'plump', 'Longman', 0, 'Czlowiek', NULL),
(64, 'szczupły', 'slim', 'Longman', 0, 'Czlowiek', NULL),
(65, 'chudy', 'thin', 'Longman', 0, 'Czlowiek', NULL),
(66, 'dobrze zbudowany', 'well-built', 'Longman', 0, 'Czlowiek', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `czlowiek`
--
ALTER TABLE `czlowiek`
  ADD PRIMARY KEY (`lp`),
  ADD UNIQUE KEY `LP` (`lp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `czlowiek`
--
ALTER TABLE `czlowiek`
  MODIFY `lp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

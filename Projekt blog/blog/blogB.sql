-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Lis 2015, 20:45
-- Wersja serwera: 5.6.26
-- Wersja PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE IF NOT EXISTS `komentarze` (
  `komentarzeID` int(11) NOT NULL,
  `wpisyID` int(11) NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `uzytkownik` text COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`komentarzeID`, `wpisyID`, `tresc`, `uzytkownik`, `data`) VALUES
(14, 13, 'Kom 1', 'ziomek 1', '2015-11-26'),
(15, 13, 'Kom  2', 'Ziom 2', '2015-11-26');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `uzytkownicyID` int(11) NOT NULL,
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`uzytkownicyID`, `login`, `haslo`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wpisy`
--

CREATE TABLE IF NOT EXISTS `wpisy` (
  `wpisyID` int(11) NOT NULL,
  `data` date NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wpisy`
--

INSERT INTO `wpisy` (`wpisyID`, `data`, `tytul`, `tresc`) VALUES
(9, '2015-11-26', 'Wpis 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non faucibus mauris. Curabitur urna dolor, congue sed malesuada quis, vestibulum ac orci. Vestibulum et egestas quam. Donec ac felis tellus. Maecenas venenatis tortor nulla, ac viverra sapien dictum eget. Mauris quis dui massa. In nec mi sed velit dapibus elementum vel a elit. Proin feugiat, elit vitae imperdiet eleifend, elit ligula pharetra sem, et molestie neque leo at lacus. Nam felis mi, aliquam et fringilla in, tincidunt sed lorem. Integer ut dapibus mauris, non venenatis risus. Duis vitae placerat odio, ac feugiat urna. Vivamus luctus velit sit amet laoreet pulvinar. Ut convallis nunc et mollis iaculis. Nunc ullamcorper tortor non sem volutpat, sed aliquam diam pulvinar. Etiam vitae libero vehicula, iaculis dolor at, sagittis tortor. '),
(10, '2015-11-26', 'ASDASD', 'Vivamus justo enim, pulvinar et lectus quis, sollicitudin pretium turpis. Nullam porta efficitur nisl ac congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut blandit felis vel tincidunt condimentum. Sed ac tellus hendrerit, accumsan diam finibus, sodales nibh. Suspendisse blandit nisl odio, sit amet aliquam metus elementum nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas tempor gravida massa, sed maximus nisi viverra et. Donec semper faucibus ligula, vel tempor tellus aliquam in. Proin pellentesque nisi et felis varius laoreet. Aliquam erat volutpat. Aliquam sed maximus metus, in congue nunc. Nunc sed lectus sollicitudin, placerat sapien quis, efficitur enim. '),
(11, '2015-11-26', 'szafa', 'urabitur imperdiet augue nisi, eget imperdiet tellus interdum in. Praesent quis vestibulum metus, eget maximus justo. Duis nec efficitur magna. Sed venenatis arcu mi, gravida pellentesque arcu congue non. Cras accumsan mi augue, ut finibus elit ultricies ac. Donec porta ac augue dictum gravida. In hac habitasse platea dictumst. Fusce rhoncus, nisl ac iaculis dapibus, dui felis consectetur lacus, eu luctus nisl libero pellentesque mauris. Aenean mollis placerat posuere. Maecenas non tristique orci. Donec posuere pretium nisi ac sagittis. Aenean ut lobortis dui, eu imperdiet neque. Proin malesuada pellentesque pulvinar. Praesent congue, sapien eleifend maximus bibendum, felis libero dignissim ligula, at molestie libero augue dictum orci. '),
(12, '2015-11-26', 'aa', 'Sed quis sem consectetur, facilisis lacus eu, bibendum est. Nunc nec tempus nunc. Ut luctus metus a consequat tempor. Mauris erat ex, lobortis a tortor in, consectetur facilisis velit. Integer sed semper risus. In ac varius lacus, eget consequat mi. Fusce ut felis nec nisl fringilla malesuada eu eu ipsum. '),
(13, '2015-11-26', 'Tyt', 'Nullam sodales enim placerat magna scelerisque volutpat. Nam eu ante neque. Integer orci leo, cursus non molestie in, fringilla vel sapien. Curabitur efficitur nec risus id mattis. Pellentesque non sapien nec justo finibus tincidunt ut eget tortor. Nunc a cursus libero, eu eleifend dolor. Donec sem nunc, pellentesque a interdum at, rutrum in nunc. Praesent posuere nulla et metus ornare feugiat. Sed malesuada accumsan quam eget hendrerit. Nulla sit amet varius quam. Nulla ut sem vel tortor porta egestas. Maecenas in sem ut justo vehicula ullamcorper vitae a purus. ');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`komentarzeID`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`uzytkownicyID`);

--
-- Indexes for table `wpisy`
--
ALTER TABLE `wpisy`
  ADD PRIMARY KEY (`wpisyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `komentarzeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `uzytkownicyID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `wpisy`
--
ALTER TABLE `wpisy`
  MODIFY `wpisyID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

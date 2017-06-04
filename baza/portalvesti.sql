-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 10:43 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalvesti`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `IDKomentara` int(11) NOT NULL,
  `IDKorisnika` int(11) NOT NULL,
  `IDVesti` int(11) NOT NULL,
  `BrojLajkova` int(11) DEFAULT '0',
  `BrojHejtova` int(11) DEFAULT '0',
  `TekstKomentara` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `NaslovKomentara` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`IDKomentara`, `IDKorisnika`, `IDVesti`, `BrojLajkova`, `BrojHejtova`, `TekstKomentara`, `NaslovKomentara`) VALUES
(1, 1, 1, 0, 0, 'fdasdasdas', 'adsasdas'),
(2, 1, 1, 0, 0, 'REQUEST_URI', 'vlado'),
(3, 1, 1, 0, 0, 'asdasdasda', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `IDKorisnika` int(11) NOT NULL,
  `ime` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `prezime` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `sifra` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `mobilni` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `adresa` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `slika` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `komentar` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `PodrazumevanoSortiranje` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `PostavkaNaslovneStrane` varchar(1000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`IDKorisnika`, `ime`, `prezime`, `email`, `sifra`, `mobilni`, `adresa`, `slika`, `komentar`, `PodrazumevanoSortiranje`, `PostavkaNaslovneStrane`) VALUES
(1, 'Vladimir', 'Nesic', 'vlada@gmail.com', '123', '063-1234567', 'BKa 123', NULL, 'komentar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `IDVesti` int(11) NOT NULL,
  `IDKorisnika` int(11) NOT NULL,
  `Naslov` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `Link` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `BrojLajkova` int(11) DEFAULT NULL,
  `BrojHejtova` int(11) DEFAULT NULL,
  `Kategorija` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `Podkategorija` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdated` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`IDVesti`, `IDKorisnika`, `Naslov`, `Link`, `BrojLajkova`, `BrojHejtova`, `Kategorija`, `Podkategorija`, `Created`, `LastUpdated`) VALUES
(1, 1, 'Vlado ovo je test vest', 'pages/News/1.php', 32, 41, 'Politika', 'Ekonomija', '2017-06-01 16:50:41', '2017-06-01 17:10:09'),
(2, 1, 'Ekonomija Privreda', 'pages/news/2.php', 0, 0, 'Ekonomija ', 'Privreda', '2017-06-03 22:00:00', '2017-06-04 22:33:22'),
(3, 1, 'Ekonomija Privreda', 'pages/News/3.php', NULL, NULL, 'Ekonomija ', 'Privreda', '2017-06-03 22:00:00', '2017-06-04 21:51:29'),
(4, 1, 'Ekonomija Biznis', 'pages/News/4.php', NULL, NULL, 'Ekonomija ', 'Biznis', '2017-06-03 22:00:00', '2017-06-04 21:51:37'),
(5, 1, 'Politika Domaća', 'pages/news/5.php', NULL, NULL, 'Politika', 'Domaća', '2017-06-03 22:00:00', '2017-06-03 22:00:00'),
(6, 1, 'Politika Regionalna', 'pages/news/6.php', NULL, NULL, 'Politika', 'Regionalna', '2017-06-03 22:00:00', '2017-06-04 21:54:05'),
(7, 1, 'Politika Svet', 'pages/news/7.php\r\n', NULL, NULL, 'Politika ', 'Svet', '2017-06-04 22:00:00', '2017-06-04 22:35:12'),
(8, 1, 'Sport Fudbal', 'pages/news/8.php\r\n', NULL, NULL, 'Sport ', 'Fudbal', '2017-06-04 22:00:00', '2017-06-04 22:35:24'),
(9, 1, 'Sport Košarka', 'pages/news/9.php\r\n', 0, 0, 'Sport', 'Košarka', '2017-06-04 22:00:00', '2017-06-04 22:35:28'),
(10, 1, 'Sport Atletika', 'pages/news/10.php\r\n', 0, 0, 'Sport', 'Atletika', '2017-06-04 22:00:00', '2017-06-04 22:36:11'),
(11, 1, 'Kultura Film', 'pages/news/11.php\r\n', 0, 0, 'Kultura', 'Film', '2017-06-04 22:00:00', '2017-06-04 22:00:00'),
(12, 1, 'Kultura Pozorište', 'pages/news/12.php\r\n', 0, 0, 'Kultura', 'Pozorište', '2017-06-04 22:00:00', '2017-06-04 22:38:21'),
(13, 1, 'Pozorište Slikarstvo', 'pages/news/13.php\r\n', 0, 0, 'Pozorište ', 'Slikarstvo', '2017-06-04 22:00:00', '2017-06-04 22:00:00'),
(14, 1, 'Pozorište Muzika', 'pages/news/14.php\r\n', 0, 0, 'Pozorište ', 'Muzika ', '2017-06-04 22:00:00', '2017-06-04 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`IDKomentara`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`IDKorisnika`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`IDVesti`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `IDKomentara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `IDKorisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `IDVesti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

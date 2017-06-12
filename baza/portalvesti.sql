-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 05:40 PM
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
  `SlikaLink` varchar(50) DEFAULT NULL,
  `BrojLajkova` int(11) DEFAULT NULL,
  `BrojHejtova` int(11) DEFAULT NULL,
  `Kategorija` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `Podkategorija` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`IDVesti`, `IDKorisnika`, `Naslov`, `Link`, `SlikaLink`, `BrojLajkova`, `BrojHejtova`, `Kategorija`, `Podkategorija`, `Created`, `LastUpdated`) VALUES
(1, 1, 'Regionalna politika vest', 'pages/News/1.html', 'images/GenericImage.jpg', 32, 41, 'Politika', 'Regionalna', '2017-06-01 16:50:41', '2017-06-12 17:39:57'),
(2, 1, 'Ekonomija Privreda', 'pages/news/2.html', 'images/popis.jpg', 0, 0, 'Ekonomija ', 'Privreda', '2017-06-03 22:00:00', '2017-06-04 22:33:22'),
(3, 1, 'Ekonomija Privreda', 'pages/News/3.html', 'images/privreda.jpg', 0, 0, 'Ekonomija ', 'Privreda', '2017-06-03 22:00:00', '2017-06-11 18:21:15'),
(4, 1, 'Ekonomija Biznis', 'pages/News/4.html', 'images/alcatel.jpg', 0, 0, 'Ekonomija ', 'Biznis', '2017-06-03 22:00:00', '2017-06-11 18:21:25'),
(5, 1, 'Politika Domaća', 'pages/news/5.html', 'images/pozoriste.jpg', 0, 0, 'Politika', 'Domaća', '2017-06-03 22:00:00', '2017-06-11 18:21:38'),
(6, 1, 'Politika Regionalna', 'pages/news/6.html', 'images/regionalna.jpg', 0, 0, 'Politika', 'Regionalna', '2017-06-03 22:00:00', '2017-06-11 18:21:43'),
(7, 1, 'Politika Svet', 'pages/news/7.html', 'images/politikasvet.jpg', 0, 0, 'Politika ', 'Svet', '2017-06-04 22:00:00', '2017-06-11 18:21:49'),
(8, 1, 'Sport Fudbal', 'pages/news/8.html', 'images/iskorak.jpg', 0, 0, 'Sport ', 'Fudbal', '2017-06-04 22:00:00', '2017-06-11 18:21:54'),
(9, 1, 'Sport Košarka', 'pages/news/9.html', 'images/biser.jpg', 0, 0, 'Sport', 'Kosarka', '2017-06-04 22:00:00', '2017-06-10 13:50:56'),
(10, 1, 'Sport Atletika', 'pages/news/10.html', 'images/atletski.jpg', 0, 0, 'Sport', 'Atletika', '2017-06-04 22:00:00', '2017-06-04 22:36:11'),
(11, 1, 'Kultura Film', 'pages/news/11.html', 'images/aida.jpg', 0, 0, 'Kultura', 'Film', '2017-06-04 22:00:00', '2017-06-04 22:00:00'),
(12, 1, 'Kultura Pozorište', 'pages/news/12.html', 'images/pozoriste.jpg', 0, 0, 'Kultura', 'Pozorište', '2017-06-04 22:00:00', '2017-06-04 22:38:21'),
(13, 1, 'Pozorište Slikarstvo', 'pages/news/13.html', 'images/pozsli.jpg', 0, 0, 'Pozorište ', 'Slikarstvo', '2017-06-04 22:00:00', '2017-06-04 22:00:00'),
(14, 1, 'Pozorište Muzika', 'pages/news/14.html', 'images/pozmuz.jpg', 0, 0, 'Pozorište ', 'Muzika ', '2017-06-04 22:00:00', '2017-06-04 22:00:00'),
(15, 1, 'Politika Domaca vest', 'pages/1.html', 'images/poldom.jpg', 0, 0, 'Politika', 'Domaca', '2017-06-05 21:12:17', '2017-06-10 13:51:04'),
(16, 1, 'Politika Domaca vest', 'pages/16.html', 'images/poldom2.jpg', 0, 0, 'Politika', 'Domaca', '2017-06-05 21:20:47', '2017-06-10 13:51:15'),
(17, 1, 'Sport Fudbal vest', 'pages/news/17.html', 'images/iskorak.jpg', 0, 0, 'Sport', 'Fudbal', '2017-06-05 21:26:52', '2017-06-05 21:26:52'),
(18, 1, 'Kultura Film Vest', 'pages/news/18.html', 'images/aida.jpg', 0, 0, 'Kultura', 'Film', '2017-06-05 21:29:04', '2017-06-05 21:29:04'),
(19, 1, 'Kultura Film Vest 1', 'pages/news/19.html', 'images/tarantino.jpg', 0, 0, 'Kultura', 'Film', '2017-06-05 21:36:46', '2017-06-05 21:36:46'),
(20, 1, 'Domaca politika vest', 'pages/news/20.html', 'images/GenericImage.jpg', 0, 0, 'Politika', 'Domaca', '2017-06-10 13:36:16', '2017-06-12 17:39:34'),
(21, 1, 'FMP dobio partizan OPET', 'pages/news/21.html', 'images/crveno.jpg', 0, 0, 'Sport', 'Kosarka', '2017-06-10 13:45:27', '2017-06-10 13:50:39'),
(22, 1, 'Pozoriste', 'pages/news/22.html', 'images/pozoriste.jpg', 0, 0, 'Kultura', 'Pozoriste', '2017-06-10 13:58:58', '2017-06-10 13:58:58'),
(23, 1, 'Olivera', 'pages/news/23.html', 'images/sp-olivera.jpg', 1, 0, 'Sport', 'Atletika', '2017-06-10 14:02:23', '2017-06-10 14:02:40'),
(24, 1, 'Ivica', 'pages/news/24.html', 'images/ivica3.jpg', 0, 0, 'Politika', 'Regionalna', '2017-06-10 14:07:14', '2017-06-10 14:07:14'),
(25, 1, 'Stojke', 'pages/news/25.html', 'images/mustafa.jpg', 0, 0, 'Sport', 'Fudbal', '2017-06-10 14:10:40', '2017-06-10 14:10:40'),
(26, 1, 'Kombajn', 'pages/news/26.html', 'images/privreda.jpg', 0, 0, 'Ekonomija', 'Privreda', '2017-06-10 14:13:22', '2017-06-10 14:13:22'),
(27, 1, 'Duda', 'pages/news/27.html', 'images/dusan-duda-ivkovic.jpg', 0, 0, 'Sport', 'Kosarka', '2017-06-10 14:16:59', '2017-06-10 14:16:59'),
(29, 1, 'PORESKI SAVETNICI Ne kaÅ¾njavajte one koji ne plate porez na vreme, ako se SAMI PRIJAVE', 'pages/news/29.html', 'images/savetnici.jpg', 0, 0, 'Ekonomija', 'Finansije', '2017-06-11 18:19:59', '2017-06-12 17:38:16'),
(30, 1, 'Izvestaj Ministarstva finansija otkrio sta to NAJVISE PUNI BUDZET Srbije ', 'pages/news/30.html', 'images/struktura.jpg', 0, 0, 'Ekonomija', 'Finansije', '2017-06-11 18:22:56', '2017-06-12 17:38:16'),
(31, 1, 'Ekonimija FInansije test', 'pages/news/31.html', 'images/struktura.jpg', 0, 0, 'Ekonomija', 'Finansije', '2017-06-11 18:24:02', '2017-06-12 17:38:16'),
(32, 1, 'Neocekivan rasplet', 'pages/news/32.html', 'images/neocekivan.jpg', 0, 0, 'Ekonomija', 'Finansije', '2017-06-11 18:26:49', '2017-06-12 17:38:16'),
(33, 1, 'U San Francisku je otvorio crkvu za hakere', 'pages/news/33.html', 'images/sanfrancisko.jpg', 0, 0, 'Tehnologije', 'Softver', '2017-06-11 19:31:24', '2017-06-12 17:38:16'),
(34, 1, '"GUGL" KONFERENCIJA Predstavljene brojne novine, "Gugl asistent" od sada i na ajfonu ', 'pages/news/34.html', 'images/gugl.jpg', 0, 0, 'Tehnologije', 'Komunikacije', '2017-06-11 19:33:25', '2017-06-12 17:38:16'),
(35, 1, 'OTKRIVAMO Dogovor Beograda i PriÅ¡tine o telekomunikacijama', 'pages/news/35.html', 'images/dogovor.jpg', 0, 0, 'Tehnologije', 'Komunikacije', '2017-06-11 19:36:40', '2017-06-12 17:38:16'),
(36, 1, 'Kinezima stelt tehnologiju za nevidljivi avion dali - SRBI ', 'pages/news/36.html', 'images/kinezi.jpg', 1, 1, 'Tehnologije', 'Komunikacije', '2017-06-11 19:38:54', '2017-06-12 17:38:16'),
(37, 1, 'PROPAST VELIKANA', 'pages/news/37.html', 'images/partizan.jpg', 0, 0, 'Sport', 'Kosarka', '2017-06-11 19:40:48', '2017-06-12 17:38:16'),
(38, 1, 'Trinkijerijev Bamberg poÄistio Oldenburg za Evroligu i titulu ', 'pages/news/38.html', 'images/trinki.jpg', 0, 0, 'Sport', 'Kosarka', '2017-06-11 19:42:44', '2017-06-12 17:38:16'),
(39, 1, ' Srbija Ä‡e imati sjajnu podrÅ¡ku protiv Velsa ', 'pages/news/39.html', 'images/podrska.jpg', 0, 0, 'Sport', 'Fudbal', '2017-06-11 19:44:05', '2017-06-12 17:38:16'),
(40, 1, ' Nulti rast makedonske privrede u prvom kvartalu ', 'pages/news/40.html', 'images/nulti.jpg', 0, 0, 'Ekonomija', 'Privreda', '2017-06-11 19:45:17', '2017-06-12 17:38:16');

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
  MODIFY `IDVesti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

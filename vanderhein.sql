-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 01:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanderhein`
--

-- --------------------------------------------------------

--
-- Table structure for table `hijstesten`
--

CREATE TABLE `hijstesten` (
  `Opdrachtnummer` int(11) NOT NULL,
  `Volgnummer` int(11) NOT NULL,
  `Datum_Opgesteld` datetime NOT NULL,
  `Hoofdgiek_Lengte` double NOT NULL,
  `Mech_Sectie_Gieklengte` double NOT NULL,
  `Hulpgiek_Lengte` double NOT NULL,
  `Hoofdgiek_Giekhoek` double NOT NULL,
  `Hulpgiek_Giekhoek` double NOT NULL,
  `Hijskabel_Aantal_Parten` int(11) NOT NULL,
  `Zwenkhoek` double NOT NULL,
  `Eigen_Massa_Ballast` double NOT NULL,
  `Toelaatbare_Bedrijflast` double NOT NULL,
  `LMB_In_Werking` double NOT NULL,
  `Proeflast` double NOT NULL,
  `Akkoord` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hijstesten`
--

INSERT INTO `hijstesten` (`Opdrachtnummer`, `Volgnummer`, `Datum_Opgesteld`, `Hoofdgiek_Lengte`, `Mech_Sectie_Gieklengte`, `Hulpgiek_Lengte`, `Hoofdgiek_Giekhoek`, `Hulpgiek_Giekhoek`, `Hijskabel_Aantal_Parten`, `Zwenkhoek`, `Eigen_Massa_Ballast`, `Toelaatbare_Bedrijflast`, `LMB_In_Werking`, `Proeflast`, `Akkoord`) VALUES
(1, 1, '2020-12-01 00:25:00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kabelchecklisten`
--

CREATE TABLE `kabelchecklisten` (
  `Opdrachtnummer` int(11) NOT NULL,
  `KabelID` int(11) NOT NULL,
  `Draadbreuk_6D` int(11) NOT NULL,
  `Draadbreuk_30D` int(11) NOT NULL,
  `Beschadiging_Buitenzijde` int(11) NOT NULL,
  `Beschadiging_Roest_Corrosie` int(11) NOT NULL,
  `Verminderde_Kabeldiameter` int(11) NOT NULL,
  `Positie_Meetpunten` int(11) NOT NULL,
  `Beschadiging_Totaal` int(11) NOT NULL,
  `Type_Beschadiging_Roest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabelchecklisten`
--

INSERT INTO `kabelchecklisten` (`Opdrachtnummer`, `KabelID`, `Draadbreuk_6D`, `Draadbreuk_30D`, `Beschadiging_Buitenzijde`, `Beschadiging_Roest_Corrosie`, `Verminderde_Kabeldiameter`, `Positie_Meetpunten`, `Beschadiging_Totaal`, `Type_Beschadiging_Roest`) VALUES
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `keuringsitems`
--

CREATE TABLE `keuringsitems` (
  `Opdrachtnummer` int(11) NOT NULL,
  `Keuringsonderdeel` int(11) NOT NULL,
  `Directe voorziening` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `accountrank` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `accountrank`) VALUES
(10, 'admin', '$2y$10$dkFoziTe7vjrX/ZCYMPTRu7hgDkcRAV.PZkP0DyucOF9odRKWU/vK', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voorbladen`
--

CREATE TABLE `voorbladen` (
  `Opdrachtnummer` int(11) NOT NULL,
  `TCTV_nummer` int(11) NOT NULL,
  `Keuringdatum` datetime NOT NULL,
  `Uitvoerder` varchar(50) NOT NULL,
  `Deskundige` varchar(50) NOT NULL,
  `Opstelling_Kraan` varchar(52) NOT NULL,
  `Uitvoering_Toren_Haakhoogte` int(11) NOT NULL,
  `Soort_Giek` varchar(13) NOT NULL,
  `Telescoopgiek_Delen` double NOT NULL,
  `Opbouwgiek_Meters` double NOT NULL,
  `Hulpgiek_Meters` double NOT NULL,
  `Fly_jib_Delen` int(11) NOT NULL,
  `Gieklengte` double NOT NULL,
  `Topbaar` double NOT NULL,
  `Loopkat` tinyint(1) NOT NULL,
  `Verstelbare_giek` tinyint(1) NOT NULL,
  `Soort_Stempels` int(11) NOT NULL,
  `Tekortkomingen` tinyint(1) NOT NULL,
  `Afmelden_Voor` datetime NOT NULL,
  `Toelichting` text NOT NULL,
  `Werkinstructie` text NOT NULL,
  `Kabelleverancier` text NOT NULL,
  `Waarnemingen` text NOT NULL,
  `Handtekening` char(255) NOT NULL,
  `Aantal_Bedrijfsuren` int(11) NOT NULL,
  `Afleg_Redenen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voorbladen`
--

INSERT INTO `voorbladen` (`Opdrachtnummer`, `TCTV_nummer`, `Keuringdatum`, `Uitvoerder`, `Deskundige`, `Opstelling_Kraan`, `Uitvoering_Toren_Haakhoogte`, `Soort_Giek`, `Telescoopgiek_Delen`, `Opbouwgiek_Meters`, `Hulpgiek_Meters`, `Fly_jib_Delen`, `Gieklengte`, `Topbaar`, `Loopkat`, `Verstelbare_giek`, `Soort_Stempels`, `Tekortkomingen`, `Afmelden_Voor`, `Toelichting`, `Werkinstructie`, `Kabelleverancier`, `Waarnemingen`, `Handtekening`, `Aantal_Bedrijfsuren`, `Afleg_Redenen`) VALUES
(1, 1, '2020-12-01 00:24:00', '1', '1', '1', 1, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-12-01 00:26:00', '1', '1', '1', '1', '1', 1, '1'),
(2, 2, '2020-12-01 12:41:00', '2', '2', '2', 2, '2', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2020-12-24 12:41:00', '2', '2', '2', '2', '2', 2, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hijstesten`
--
ALTER TABLE `hijstesten`
  ADD PRIMARY KEY (`Opdrachtnummer`,`Volgnummer`);

--
-- Indexes for table `kabelchecklisten`
--
ALTER TABLE `kabelchecklisten`
  ADD PRIMARY KEY (`Opdrachtnummer`,`KabelID`);

--
-- Indexes for table `keuringsitems`
--
ALTER TABLE `keuringsitems`
  ADD PRIMARY KEY (`Opdrachtnummer`,`Keuringsonderdeel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voorbladen`
--
ALTER TABLE `voorbladen`
  ADD PRIMARY KEY (`Opdrachtnummer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `voorbladen`
--
ALTER TABLE `voorbladen`
  MODIFY `Opdrachtnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

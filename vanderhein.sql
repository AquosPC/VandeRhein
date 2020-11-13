-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 03:34 PM
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
-- Indexes for table `voorbladen`
--
ALTER TABLE `voorbladen`
  ADD PRIMARY KEY (`Opdrachtnummer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voorbladen`
--
ALTER TABLE `voorbladen`
  MODIFY `Opdrachtnummer` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

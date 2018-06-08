-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2018 at 09:03 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisdhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagerie`
--

CREATE TABLE `messagerie` (
  `id_message` int(255) NOT NULL,
  `Objet` varchar(255) NOT NULL,
  `ID` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Date_Message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagerie`
--

INSERT INTO `messagerie` (`id_message`, `Objet`, `ID`, `Message`, `Date_Message`) VALUES
(1, 'Prédéfini', '88', 'Blablabla', '2018-06-12 00:00:00'),
(2, 'Prédéfini', '88', 'Blablabla', '2018-06-12 00:00:00'),
(3, 'Essai numéro 250', '0', ' Encore un test', '2018-06-08 00:00:00'),
(4, 'Ca marche', '0', 'OMG OMG OMG CA MARCHE !!!!', '2018-06-08 00:00:00'),
(5, 'Ca marche', '0', 'OMG OMG OMG CA MARCHE !!!!', '2018-06-08 00:00:00'),
(6, 'Ca marche (3)', 'marv', 'Allez hop !', '2018-06-08 08:45:15'),
(7, 'Redirection ?', 'marv', 'On test !', '2018-06-08 08:55:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id_message`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id_message` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

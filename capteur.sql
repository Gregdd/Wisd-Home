-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 11 mai 2018 à 09:06
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `capteurtypeID` int(11) NOT NULL,
  `capeurNom` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `url_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`capteurtypeID`, `capeurNom`, `unit`, `url_img`) VALUES
(1, 'humidite', '%', 'Image/consoeau.png'),
(2, 'temp', '°c', 'Image/temp.png'),
(3, 'fumée', '', 'Image/feu.png'),
(4, 'luminosité', '%', 'Image/luminosite.png'),
(5, 'consoelec', 'KWH', 'Image/consoelec.png'),
(6, 'camera', '', 'Image/camera.png'),
(7, 'mouvement', '', 'Image/mouvement.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

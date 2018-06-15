-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 juin 2018 à 08:27
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wisdhome`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

DROP TABLE IF EXISTS `actionneur`;
CREATE TABLE IF NOT EXISTS `actionneur` (
  `actionneurtypeID` int(11) NOT NULL AUTO_INCREMENT,
  `actionneurNom` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `url_img` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `actionneurtypeID` (`actionneurtypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`actionneurtypeID`, `actionneurNom`, `etat`, `url_img`, `stock`) VALUES
(1, 'volet', 'on', '', 1),
(2, 'ventilateur', 'on', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `actionneurpiece`
--

DROP TABLE IF EXISTS `actionneurpiece`;
CREATE TABLE IF NOT EXISTS `actionneurpiece` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idpiece` int(11) NOT NULL,
  `idactionneur` int(11) NOT NULL,
  `typeactionneur` varchar(15) NOT NULL,
  `valeur` tinyint(1) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actionneurpiece`
--

INSERT INTO `actionneurpiece` (`ID`, `idpiece`, `idactionneur`, `typeactionneur`, `valeur`, `date`, `heure`) VALUES
(1, 2, 1, 'humidite', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `capteurtypeID` int(11) NOT NULL AUTO_INCREMENT,
  `capteurNom` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `url_img` varchar(50) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `capteurtypeID` (`capteurtypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`capteurtypeID`, `capteurNom`, `unit`, `url_img`, `stock`) VALUES
(1, 'humidite', '%', 'Image/consoeau.png', 0),
(2, 'temp', '°c', 'Image/temp.png', 0),
(3, 'fumée', '', 'Image/feu.png', 0),
(4, 'luminosité', '%', 'Image/luminosite.png', 0),
(5, 'consoelec', 'KWH', 'Image/consoelec.png', 0),
(6, 'camera', '', 'Image/camera.png', 0),
(7, 'mouvement', '', 'Image/mouvement.png', 0),
(8, 'thermique', 'F', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `capteurpiece`
--

DROP TABLE IF EXISTS `capteurpiece`;
CREATE TABLE IF NOT EXISTS `capteurpiece` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idpiece` int(11) DEFAULT NULL,
  `idcapteur` int(11) DEFAULT NULL,
  `typecapteur` varchar(11) DEFAULT NULL,
  `valeur` int(11) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteurpiece`
--

INSERT INTO `capteurpiece` (`ID`, `idpiece`, `idcapteur`, `typecapteur`, `valeur`, `date`, `heure`) VALUES
(4, 2, 6, 'camera', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `maisonID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  UNIQUE KEY `maisonID` (`maisonID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`maisonID`, `userID`, `Name`, `adresse`) VALUES
(5, 13, 'maison principale', '40 avenue Pasteur La Celle Saint Cloud');

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

DROP TABLE IF EXISTS `pieces`;
CREATE TABLE IF NOT EXISTS `pieces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `superficie` int(11) NOT NULL,
  `capteurs` int(11) DEFAULT '0',
  `actionneurs` int(11) DEFAULT '0',
  `idhouse` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`id`, `nom`, `superficie`, `capteurs`, `actionneurs`, `idhouse`) VALUES
(1, 'Cuisine', 10, 3, 5, 5),
(2, 'Salon', 25, 3, 2, 5),
(3, 'salle à manger', 18, 2, 3, 0),
(4, 'salle de bain', 5, 4, 1, 0),
(5, 'chambre parents', 12, 1, 5, 0),
(6, 'chambre enfant 1', 8, 3, 2, 0),
(7, 'chambre enfant 2', 9, 2, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `Mot_de_passe` varchar(500) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Prenom` varchar(45) DEFAULT NULL,
  `Type_utilisateur` varchar(45) DEFAULT 'client',
  `mail` varchar(45) DEFAULT NULL,
  `Adresse` varchar(200) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `Code_postal` int(5) DEFAULT NULL,
  `Date_naissance` date DEFAULT NULL,
  `Reponse` varchar(40) DEFAULT NULL,
  `question` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `pseudo`, `Mot_de_passe`, `Nom`, `Prenom`, `Type_utilisateur`, `mail`, `Adresse`, `Ville`, `Code_postal`, `Date_naissance`, `Reponse`, `question`) VALUES
(11, 'test', 'test', 'test', 'test', 'Administrateur', NULL, '', '', 0, NULL, NULL, ''),
(12, 'Marie', 'a', 'Gourlet', 'Marie', 'client', 'shanghai.marie@gmail.com', NULL, NULL, NULL, NULL, NULL, ''),
(13, 'client', 'marie', 'Gourlet', 'Katell', 'client', 'katell.shanghai@gmail.com', 'avenue Pasteur, -40', 'Gourlet', 78170, '2018-10-26', 'a', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

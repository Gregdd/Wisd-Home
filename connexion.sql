-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 16 mai 2018 à 09:21
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wisd'home`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `pseudo` varchar(20) NOT NULL,
  `Mot_de_passe` varchar(500) CHARACTER SET utf8 NOT NULL,
  `Nom` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Prenom` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Type_utilisateur` varchar(45) CHARACTER SET utf8 DEFAULT 'client',
  `mail` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Code_postal` int(10) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Reponse` varchar(30) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`pseudo`, `Mot_de_passe`, `Nom`, `Prenom`, `Type_utilisateur`, `mail`, `Code_postal`, `Ville`, `Reponse`, `question`) VALUES
('1', '01091997', 'Guitaoui', 'Chaymaa', 'Admin', 'chaymaa097@gmail.com', 0, '', '', ''),
('2', 'Marie', 'Gourlet', 'Marie', 'Admin', 'shanghai.marie@gmail.com', 0, '', '', ''),
('3', 'Grégoire', 'D. de Dinechin', 'Grégoire', 'Admin', 'gdprojetsi@gmail.com', 0, '', '', ''),
('4', 'Salim', 'Ghaiti', 'Salim', 'Admin', 'salimghaiti9@gmail.com', 0, '', '', ''),
('5', 'Marvin', 'John-Lewis', 'Marvin-Nylce', 'Admin', 'marvin.nylce@gmail.com', 0, '', '', ''),
('6', 'Louis', 'Gautier-Varraux', 'Louis', 'Admin', 'louisgv31@gmail.com', 0, '', '', ''),
('0', '123456', 'Guitaoui', 'Chaymaa', NULL, 'chaymaa0997@hotmail.fr', 0, '', '', ''),
('chacha', '456789', 'Guitaoui', 'Chaymaa', 'client', 'chaymaa0997@hotmail.fr', 13013, 'Marseille', 'Marseille', ''),
('chachou', '01091997', 'Guit', 'chay', 'client', 'chaymaa0997@hotmail.fr', 75019, 'Paris', 'Marseille', 'Quelle est votre ville de naissance?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
